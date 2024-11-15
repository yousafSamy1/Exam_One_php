<?php
// 1- Write a PHP script using a nested for loop that creates a chessboard. 
for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < 8; $j++) {
        echo ($i + $j) % 2 == 0 ? ' x ' : ' O ';
    }
    echo "<br>";
}

echo "<br>";

for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < 8; $j++) {
        echo ($i + $j) % 2 == 0 ? ' white ' : ' Black ';
    }
    echo "<br>";
}

echo "<br>";

echo "<table border='1' cellspacing='0' cellpadding='10'>";
for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
        $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
        echo "<td style='background-color: $color; width: 20px; height: 20px;'></td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<hr>";
echo "<hr>";
//2- write a PHP program to print this shape (using nested loop) 
//Diamond Shape
$size = 10;
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat('&nbsp;', $size - $i);
    echo str_repeat('* ', $i) . "<br>";
}
for ($i = $size - 1; $i >= 1; $i--) {
    echo str_repeat('&nbsp;', $size - $i);
    echo str_repeat('* ', $i) . "<br>";
}

//Right Shape
$size = 10;
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat('* ', $i) . "<br>";
}
for ($i = $size - 1; $i >= 1; $i--) {
    echo str_repeat('* ', $i) . "<br>";
}

//Left Shape 
$size = 10;
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat('&nbsp;&nbsp;', $size - $i); 
    echo str_repeat('* ', $i) . "<br>";
}
for ($i = $size - 1; $i >= 1; $i--) {
    echo str_repeat('&nbsp;&nbsp;', $size - $i); 
    echo str_repeat('* ', $i) . "<br>";
}
echo "<hr>";
echo "<hr>";
//3- $array = [2,4,3,1,6,7,5,8,0,9] . Write a PHP program to sort this array to  ASC and also sort it as  DESC . (without using  built in functions) 
//  1. Ascending Order
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$length = count($array);
for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}
echo "Sorted Array in Ascending Order: ";print_r($array);
echo"<br>";
// 2. Descending Order
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$length = count($array);
for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - $i - 1; $j++) {
        if ($array[$j] < $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}
echo "Sorted Array in Descending Order: ";
print_r($array);

echo "<hr>";
echo "<hr>";

// 4. write a program to calculate the avg of numbers array.
function calculateAvg($numbers) {
    return array_sum($numbers) / count($numbers);
}
$numbers = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
echo "Average: " . calculateAvg($numbers);

echo "<hr>";
echo "<hr>";

//5- write a program to filter even numbers from an array, delete all even numbers. 
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array = array_filter($array, function($num) {
    return $num % 2 != 0;
});
print_r($array);

echo "<hr>";
echo "<hr>";

// 6- write a program to find the max number of numbers group [10,30,20], using if.
$numbers = [10, 30, 20];
$max = $numbers[0];
foreach ($numbers as $num) {
    if ($num > $max) {
        $max = $num;
    }
}
echo "Max number is : " . $max;

echo "<hr>";
echo "<hr>";

//7-Write a PHP script to increment date by one month Sample date : 2012-12-21 Expected Output : 2013-01-21. 
$date = "2012-12-21";
echo "New date: " . date('Y-m-d', strtotime($date . ' +1 month'));

echo "<hr>";
echo "<hr>";

//8- Write a PHP script to get the number of the month before the current month. 
$previousMonth = date('m', strtotime('-1 month'));
echo "Previous Month: " . $previousMonth;

echo "<hr>";
echo "<hr>";

//9-Write a PHP script that checks if a string contains another string.(using regular expression). 
$string = "Yousef Samy";
$search = "Samy";
if (preg_match("/$search/", $string)) {
    echo "String contains '$search'.";
} else {
    echo "String does not contain '$search'.";
}

echo "<hr>";
echo "<hr>";

//10- Write a function to check whether a number is prime or not.  Note: A prime number (or a prime) is a natural number greater than 1 that has no  positive divisors other than 1 and itself. 
function isPrime($number) {
    if ($number <= 1) {
        return "Not prime";
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return "Not prime";
        }
    }
    return "Prime";
}
$number = 2024;
echo isPrime($number);

echo "<hr>";
echo "<hr>";

//11- Use a cookie to change the default website background color. choose the new color from a dropdown menu of colors. 
