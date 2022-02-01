<?php
#Write a PHP script to get the PHP configuration information. hint phpinfo()
phpinfo()
# Write a simple PHP script to print your information (Name and your groupid). 
ECHO "VIGNESH REDDY  KANDI " ;
ECHO "Group 12 ";
#  Write PHP code to display the following message
# Hello world ! My name is "David
ECHO "Hello World ! My name is \"david\"";

#Write PHP code to display the following paragraph.
#It is possible to place variables inside of double-quoted strings (e.g. "string here and a $variable"). By putting a variable inside the quotes (" ") you are telling PHP that you want it to grab the string value of that variable and use it in the string. The example below shows an example of this  feature.  Hint: <?php echo"$,()<b>this is bold</b><br/><u>this is underline</u><br/><i>this is italicized</i>"; 

ECHO "It is possible to place variables inside of double-quoted strings (e.g. \"string here and a \$variable). <b>By putting a variable</b> inside the quotes (\" \") you are telling PHP that you want it to grab the string value of that variable and use it in the string.  The example below shows an example of this  feature.";
#Use two constants to assign your first name and last name. Print to get the following output. 
#My first name is firstname and last name is lastname.
$firstname = "vignesh reddy";
$lastname = "kandi.";
ECHO " My first name is  " .$firstname ." and  last name is " . $lastname ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Task 7 - $title = "PHP is interesting" . Put this variable as a title that is marked as h1 (heading 1) in your HTML document. -->
   <h1><title><?php $title = "PHP is interesting"; echo $title; ?></title></h1>
</head>
<body>
<!-- Task 6 - in one of your HTML page, write the PHP code to display date.  -->
<h1><?= date("Y/m/d"); ?></h1>

<br>
<!-- Task 8 $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade. Your table should look like the one below: -->
<table border="1">
   <tr>
    <td><b>S.N</b></td>
    <td><b>Name</b></td>
    <td><b>Grade</b></td>
   </tr>

   <tr>
    <td>1</td>
    <td>Pekka</td>
    <td>5</td>
   </tr>

   <tr>
    <td>2</td>
    <td>Johanna</td>
    <td>4</td>
   </tr>

   <tr>
    <td>3</td>
    <td>John</td>
    <td>5</td>
   </tr>
  </table>

</body>
</html>
