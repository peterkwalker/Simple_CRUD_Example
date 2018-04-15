<?php
include("simple-oop.php");

$stefan = new person("Stefan Jones");

echo "Stefan's full name:" . $stefan->get_name()."<br>";


echo "Tell me private stuff: ".$stefan->pinn_number;




?>