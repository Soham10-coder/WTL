<?php
echo "<h2>PHP Data Types Example</h2>";

$string_name = "Prasad Magdum";
echo "Name: ".$string_name ;
echo "<br><br>";

$int_age = 21;
echo "Age: ".$int_age;
echo "<br><br>";


$float_height = 5.3;
echo "Height: ".$float_height;
echo "<br><br>";


$boolean_isStudent = true;
echo "True(1)/False(0): ".$boolean_isStudent;
echo "<br><br>";

$null_variable = null;
echo "Null: ".$null_variable;
echo "<br><br>";  


$array_languages = array("PHP", "Java", "Python");
echo "Array: ".$array_languages[1];
echo "<br><br>";

// --------------------------------------------------------
 
echo "<h2>Control Statement</h2>";
echo "<h2>1. If-Else Statement</h2>";
if ($int_age < 18) {
    echo "You are A minor.";
}

else if ($int_age >= 18 && $int_age < 60) {
    echo "You are an Adult.";
}

else {
    echo "You are a Senior Citizen.";
}
echo "<br><br>";

echo "<h2>2. Switch Statement</h2>";
$day = 3; 

switch ($day){
    case 1: 
        echo "Monday";
    case 2: 
        echo "Tuesday";
    case 3: 
        echo "Wednesday";
}
echo "<br><br>";

echo "<h2>3. For Loop Statement</h2>";
for ($i=0; $i<5; $i++){
    echo "The number is: ".$i."<br/>";
}
echo "<br><br>";

echo "<h2>4. While Loop Statement</h2>";
$i = 0; 
while($i < 5) {
    echo "The number is: ".$i."<br/>";
    $i++;
}
echo "<br><br>";

echo "<h2>5. Do-While Loop Statement</h2>";
$i = 0;
do {
    echo "The number is: ".$i."<br/>";
    $i++;
} while ($i < 5);


echo "<h2>Functions</h2>"; 
function add($a, $b) {
    return $a + $b;
}
echo "<br><br>";

$num1 = 10;
$num2 = 20;

$result = add($num1, $num2);
echo "The sum of $num1 and $num2 is: $result";
?>
