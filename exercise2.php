<?php
# Task 1 - Write PhP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.(Hint: string function) 
# PhP script with two string variables, Assigning  text to these variables.
$string1 = "vignesh";
$string2 = "reddy";
# Joining them together
$string3 = $string1.$string2; 
#Printing the length of the string.
echo strlen($string3);
#line break
echo "<br>";

# Task 2 - In your above code, Change the double quotes to single quotes.Then run the script again. Did it have any effect?
#Changing the double quotes to single quotes
$string1 = 'vignesh';
$string2 = 'reddy';
$string3 = $string1.$string2; 
echo strlen($string3);
echo "<br>";
#It doesnt have any efffect. It prints the output as same

# Task 3 - Put a single quote at the beginning of your text and double quote at the end. What happens now when you run your code?
/*
keeping a single quote at the beginning of  text and double quote at the end.
$string1 = 'vignesh";
$string2 = 'reddy";
$string3 = $string1.$string2; 
echo strlen($string3);
echo "<br>";
i got an error message  :
syntax error, unexpected identifier "reddy" in /var/www/html/exercise2.php on line 24
*/
#  Task 4 - Delete the dollar sign from the variable name. Run your code. What error did you get? Write the error message?
/*
Deleting the dollar sign from the variable name
string1 = 'vignesh";
$string2 = 'reddy";
$string3 = $string1.$string2; 
echo strlen($string3);
echo "<br>";
i got the error message as 
Parse error: syntax error, unexpected token "=" in /var/www/html/exercise2.php on line 35
*/
# Task 5 - Put the dollar sign back and remove one of the semicolon from the code. Run your code again. What error did you get this time?
/*
Keeping  the dollar sign back and remove one of the semicolon from the code
$string1 = 'vignesh'
$string2 = 'reddy';
$string3 = $string1.$string2; 
echo strlen($string3);
echo "<br>";
i got the errore message:
Parse error: syntax error, unexpected variable "$string2" in /var/www/html/exercise2.php on line 47
*/
/*
 Task 6 - Write a PHP script to get the following display 
 " It is Markku's car."
  Random characters: del c:\*.* "
  */
ECHO " \" It is Markku's car.\"";
ECHO "<br>  Random characters: del c: \\*.*";
ECHO  " \"" ;
ECHO "<br>";

#Operators
# Task 1 -  Write a script to add up the numbers: 298, 234, 46. Use echo statement to output your answer.
#lets add 298 as $x, 234 as $y 46 as $z
$x = 298;
$y = 234;
$z = 46;
#  echo statement to output  answer.
ECHO "By adding up numbers 298,234,46 we get: ". ($x+$y+$z) ."<br />";
# Task 2 - Use variables to calculate the following : (87 + 44)+(200 * 15) / 10
$a = 87;
$b = 44;
$c = 200;
$d = 15;
$e = 10;
#  To get output
echo ($a+$b)+($c*$d)/$e;

?>
