<?php

/*
--Task 1 --------------------------------------------------------------------------------------------------------------------------------------------------------
Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's still holiday.
Not August, This is Month-name so i don't have any holidays

You can use date(F) function to get the current month name
*/

$month= date("F");
if($month == "August") {
    echo "It's August, so it's still holiday.";}
else{
    echo "Not August, This is " . $month . " so i don't have any holidays";
}
echo "<br>";

/*
--Task 2 --------------------------------------------------------------------------------------------------------------------------------------------------------
Assign color red to a variable name $color and check to print one the following responses using if else statement 

The color is red. 

The color is not red.
*/

$color= "red";
if($color == "red") {
    echo "The color is red. ";}
else{
    echo "The color is not red.";}
echo "<br>";

/*
--Task 3 --------------------------------------------------------------------------------------------------------------------------------------------------------
Write a program to grade students based on their total score for a subject.
  The grading scheme is:
Excellent : >80 ;
Great >70 & less than 80;
Good >60 & less than 70;
Pass >50 & less than 60 & Fail <50
*/

$grade=70;
echo "The grade is: ";
if($grade>80){
    echo "Excellent";
}
elseif($grade>70){
    echo "Great";
}
elseif($grade>60){
    echo "Good";
}
elseif($grade>50){
    echo "Pass";
}
else{
    echo "Fail";
}
echo "<br>";
?>

/*
--Task 4 --------------------------------------------------------------------------------------------------------------------------------------------------------
Write a program to get inputs (age and name) from the user and based on their age, 
decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)
*/

<form action = "Exercise_3.php" method="get"> 
    Name: <input type = "text" name="name">  
    Age: <input type = "number" name="age"> 
    <input type = "submit"> 
</form> 

<?php  
    
    if ($_GET['age'] >=18){ 
        echo "You are eligible for voting"; 
    } 
    else{ 
        echo "You are not eligible for voting"; 
    } 
?>


<?php  

/*
--Task 5 --------------------------------------------------------------------------------------------------------------------------------------------------------
Use a looping statement to construct the following pattern: 

12345678
1234567
123456
12345
1234
123
12
1
*/

$num = "123456789";
while($num > strlen($num))
{
    echo substr($num, 0, -1) . "<br>";
    $num = substr($num, 0, -1);
} 
/*
--Task 6 --------------------------------------------------------------------------------------------------------------------------------------------------------
Use While loop to print the following pattern: 
*
**
***
****
*****
******
*******
********
*/

for ($i=1; $i<=8; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
echo " * ";	 
}	  	
echo "<br/>";   	
}  
/*
--Task 7 --------------------------------------------------------------------------------------------------------------------------------------------------------
link to github repo on project with tommy
link to project webpage
*/

echo "https://github.com/SanduPalii/team12wp";
echo "https://sandupalii.github.io/team12wp/";
?>
