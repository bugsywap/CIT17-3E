<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VariableTypes</title>
</head>
<body>
    <?php
#intro
        echo "Hello, World!";
#Integer
        $int_var = 12345;
        $another_int = -12345 + 12345;

        echo $int_var;
        echo "<br>" ;
        echo $another_int;
#double
        $many = 2.023;
    $many_2 = 2.2111200;
    $few = $many + $many_2;
    print("$many + $many_2 = $few<br>");

    echo $many; 

#boolean
if (TRUE)
print("This will always print<br>");
else
print("This will never print<br>");

#null
    $boolean_var = null;

#string
$variable = "name";
$literally = 'My $variable will not print!\n';
print($literally);
$literally = "My $variable will print!\n";
print($literally);
    

#hereDoc
$channel =<<<_XML_
<channel>
<title>What's For Dinner<title>
<link>http://menu.example.com/<link>
<description>Choose what to eat tonight.</description>
</channel>
_XML_;
echo <<<END
This uses the "here document" syntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
<br />
END;
print $channel;

#local
$x = 4;
function assignx () {
    $x = 0;
    print "\$x inside function is $x. 
    "; 
    }
    assignx();
    print "\$x outside of function is $x. 
    ";

#Function Parameters
// multiply a value by 10 and return it to the caller
function multiply ($value) {
 $value = $value * 10;
 return $value;
}
$retval = multiply (10);
Print "Return value is $retval\n";

#Global
$somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();

#Static
function keep_track() {
    STATIC $count = 0;
    $count++;
    print $count;
    print "";
   }
   
   keep_track();
   keep_track();
   keep_track();

    ?>
</body>
</html>