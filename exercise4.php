<?php
/*
1. Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
*/
echo "Task 1 ";
$courses = array("PHP","HTML","JavaScript","CMS","Project");
$lcourses = count($courses);
for ($i=0; $i<$lcourses; $i++)
{
    echo "  <li>{$courses[$i]}</li>\n";
}

echo "<br>";

/* 2. The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
*/

echo "Task 2 ";
$courses1=array ("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach($courses1 as $i)
{
    echo $i . "<br>";
}

echo "<br>New array after deleting an element<br>";
unset ($courses1[2]);
foreach ($courses1 as $i){
echo $i . "<br>";
}

echo "<br>";

/* 
3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
*/
echo "Task 3 ";
$courses3=array(1=>"PHP", 2 => "HTML", 3 => "JavaScript", 4 => "CMS", 5 => "Project");

echo "a) ascending order sort by value <br>";
asort($courses3);
foreach ($courses3 as $c => $c_value)
{
   
    echo  $c  . ":". $c_value . ".<br>";
}
echo "<br>";

echo "b) ascending order sort by Key <br>";
ksort($courses3);
foreach ($courses3 as $c => $c_value)
{
   
    echo  $c  . ":". $c_value . ".<br>";
}
echo "<br>";

echo "c) descending order sort by Value <br>";
arsort($courses3);
foreach ($courses3 as $c => $c_value)
{
   
    echo  $c  . ":". $c_value . ".<br>";
}

echo "<br>";

echo "d) descending order sort by Key <br>";
krsort($courses3);
foreach ($courses3 as $c => $c_value)
{
   
    echo  $c  . ":". $c_value . ".<br>";
}

echo "<br>";

/* 
 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
*/
echo "Task 4  ";
$courses4=array("php", "html", "javascript", "cms", "project");

echo "all values in upper case <br>";
$num = count($courses4);
for ($i=0;$i<$num; $i++)
{
    echo strtoupper("<br>$courses4[$i]<br>");
}



// 5. Create an array that holds your favorite colors and print them. (indexed arrays)
echo "Task 5 ";
$fcolors=array("White","Black","Blue", "Red");
echo "My favorite colors are: <br> "; 
$color_count=count($fcolors);
for ($i=0; $i<$color_count; $i++)
{
    echo "$fcolors[$i] <br>";
}

// 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
echo "<br>";
echo "Task 6 ";
$fcolors=array("White" =>"#FFFFFF" ,"Black" => "#000000" ,"Blue" => "#0000FF", "Red"=> "#FF0000" );
echo "My favorite colors are: <br> ";
$color_count=count($fcolors);
foreach ($fcolors as $d  => $d_value)
{
    echo  $d  . " Hexadecimal Equivalents: ". $d_value . ".<br>";
}



// 7. Include 12 months in an array named month and print them using loop statement.
echo "<br>";
echo "Task 7 ";
echo "printing 12 months <br>";
$month= array("January","February","March","April","May","June","July","August","September","October","November","December");
$month_count = count($month);
for ($i=0; $i<$month_count; $i++)
{
    echo "<br> $month[$i] <br>";
}

/*
 8. PHP script to calculate and display average temperature, five lowest and highest temperatures.

Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Write comments to explain the following code (when asked):
*/
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
// Explode Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator.
$temp_array = explode(',', $month_temp); // Returns an array of strings created by splitting the string parameter on boundaries formed by the separator.
$tot_temp = 0;
// What is count?
// count — Counts all elements in an array or in a Countable object.
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
//sort — Sort an array in ascending order
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}


?>

