<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

$name = "Ashiorz";
$age = 19; 
$favoriteColor = "blue";


echo "Hi, I'm $name, I am $age year old, and my favorite color is $favoriteColor.";
?>
<?php
$a = 20;
$b = 4;
echo "<h2>Arithmetic Operations</h2>";
echo "Number a = $a <br>";
echo "Number b = $b <br>";
echo "<hr>"; 
$sum = $a + $b;
echo "Sum (a + b): $sum <br>";
$difference = $a - $b;
echo "Difference (a - b): $difference <br>";
$product = $a * $b;
echo "Product (a * b): $product <br>";
if ($b != 0) {
    $quotient = $a / $b;
    echo "Quotient (a / b): $quotient <br>";
} else {
    echo "Quotient: Cannot divide by zero! <br>";
}

?>
<?php
$length = 10; 
$width = 5;   
echo "<h2>Rectangle Calculations</h2>";
echo "Given Length: $length <br>";
echo "Given Width: $width <br>";
echo "<hr>"; 
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "The Area of the rectangle is: <strong>$area</strong><br>";
echo "The Perimeter of the rectangle is: <strong>$perimeter</strong><br>";

?>
<?php
$celsius = 25; 
$fahrenheit = ($celsius * 9/5) + 32;
echo "The temperature in Celsius is: " . $celsius . "°C\n";
echo "The temperature in Fahrenheit is: " . $fahrenheit . "°F";
?>
<?php
$a = 10;
$b = 25;
echo "--- Before Swapping ---\n";
echo "Value of \$a: " . $a . "\n"; 
echo "Value of \$b: " . $b . "\n"; 
$temp = $a;
$a = $b;
$b = $temp;
echo "\n--- After Swapping ---\n";
echo "Value of \$a: " . $a . "\n"; 
echo "Value of \$b: " . $b . "\n";
echo "Value of \$temp: " . $temp . "\n"; 

?>
<?php
$basic_salary = 4500.00; 
$allowance    = 500.00;  
$deduction    = 350.50;  
$net_salary = ($basic_salary + $allowance) - $deduction;
echo "--- Salary Computation ---\n";
echo "Basic Salary: \$" . number_format($basic_salary, 2) . "\n";
echo "Allowance:    +\$" . number_format($allowance, 2) . "\n";
echo "Deduction:    -\$" . number_format($deduction, 2) . "\n";
echo "--------------------------\n";
echo "Net Salary:   \$" . number_format($net_salary, 2) . "\n";

?>
<?php
$weight = 75; 
$height = 1.75; 
$bmi = $weight / ($height * $height);
echo "--- BMI Calculator ---\n";
echo "Weight: " . $weight . " kg\n";
echo "Height: " . $height . " m\n";
echo "----------------------\n";
echo "Your calculated BMI is: " . number_format($bmi, 2) . "\n";

?>
<?php
$sentence = "PHP is a powerful scripting language for web development.";
echo "--- Original Sentence ---\n";
echo "Sentence: " . $sentence . "\n\n";
echo "--- String Statistics ---\n";
$char_count = strlen($sentence);
echo "Number of Characters (strlen): " . $char_count . "\n";
$word_count = str_word_count($sentence);
echo "Number of Words (str_word_count): " . $word_count . "\n\n";
echo "--- Case Conversions ---\n";
$uppercase_sentence = strtoupper($sentence);
echo "Uppercase (strtoupper): " . $uppercase_sentence . "\n";
$lowercase_sentence = strtolower($sentence);
echo "Lowercase (strtolower): " . $lowercase_sentence . "\n";

?>
<?php
$balance = 1000;  
$deposit = 500;   
$withdraw = 200;  
$balance += $deposit;    
$balance -= $withdraw;   
echo "Current balance: $" . $balance;
?>
<?php
$mathScore = 85;
$englishScore = 92;
$scienceScore = 78;
$averageScore = ($mathScore + $englishScore + $scienceScore) / 3;
if ($averageScore >= 90) {
    $grade = 'A';
} elseif ($averageScore >= 80) {
    $grade = 'B';
} elseif ($averageScore >= 70) {
    $grade = 'C';
} elseif ($averageScore >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}
echo "Average Score: " . round($averageScore, 2) . "\n";  
echo "Grade: " . $grade;
?>
<?php
$amount = 1000;  
$usdRate = 0.012;   
$eurRate = 0.011;   
$jpyRate = 1.65;    
$usdAmount = $amount * $usdRate;
$eurAmount = $amount * $eurRate;
$jpyAmount = $amount * $jpyRate;
echo "Original Amount: " . $amount . " (Local Currency)\n";
echo "Amount in USD: $" . round($usdAmount, 2) . "\n";   
echo "Amount in EUR: €" . round($eurAmount, 2) . "\n";
echo "Amount in JPY: ¥" . round($jpyAmount, 2) . "\n";
?>
<?php
$distance = 500;              
$fuel_consumption = 12;       
$fuel_price = 1.25;           
$fuel_needed = $distance / $fuel_consumption;  
$travel_cost = $fuel_needed * $fuel_price;      
echo "Distance to travel: " . $distance . " km\n";
echo "Fuel consumption: " . $fuel_consumption . " km/l\n";
echo "Fuel price: $" . round($fuel_price, 2) . " per liter\n";
echo "Estimated fuel needed: " . round($fuel_needed, 2) . " liters\n";
echo "Estimated travel cost: $" . round($travel_cost, 2) . "\n";
?>