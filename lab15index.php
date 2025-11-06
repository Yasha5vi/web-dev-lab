<?php
include "lab15_db.php";

// Delete record
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM users WHERE id=$id");
    header("Location: lab15index.php");
    exit();
}

// Update record
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    mysqli_query($conn, "UPDATE users SET name='$name' WHERE id=$id");
    header("Location: lab15index.php");
    exit();
}

// Insert new record
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
    $name = $_POST["name"];
    mysqli_query($conn, "INSERT INTO users (name) VALUES('$name')");
    header("Location: lab15index.php");
    exit();
}

// Fetch all records
$result = mysqli_query($conn, "SELECT * FROM users");

// Check if editing
$edit_row = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
    $edit_row = mysqli_fetch_assoc($edit_result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple User CRUD</title>
</head>
<body>

<h2>Users List</h2>

<?php
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>";
        echo $row['id'] . " - " . $row['name'];
        echo " <a href='?edit=" . $row['id'] . "'>Edit</a>";
        echo " | <a href='?delete=" . $row['id'] . "'>Delete</a>";
        echo "</p>";
    }
} else {
    echo "<p>No records found.</p>";
}
?>

<hr>

<h2>
<?php 
if ($edit_row) {
    echo "Edit User (ID: " . $edit_row['id'] . ")";
} else {
    echo "Add New User";
}
?>
</h2>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $edit_row ? $edit_row['id'] : ''; ?>">

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required
           value="<?php echo $edit_row ? $edit_row['name'] : ''; ?>">

    <br><br>

    <?php
    if ($edit_row) {
        echo '<button type="submit" name="update">Update</button>';
    } else {
        echo '<button type="submit" name="save">Save</button>';
    }
    ?>
</form>

</body>
</html>
