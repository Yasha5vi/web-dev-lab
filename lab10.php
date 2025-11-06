<?php
    echo "Hello php";
?>
<br>
<?php
$number = 72;
if($number %2 == 0){
    echo "Number is even : $number";
}else{
    echo "Number is off : $number";
}
?>

<br>
<?php
$a = 1;
$b = 8;
$c = 4;

if($a < $b){
    $a = $b;
}
if($a < $c){
    $a = $c;
}
echo "max is : $a";

?>

