<!DOCTYPE HTML>
<html lang= "en">
<head>
  <style>
    body {
            font-family: sans-serif;
        }
  </style>
  <title>PHP Declaration</title>
</head>

<body>
    <link rel="stylesheet" type="text/css" href= ""/ >
    
    <hr color="black" size="3"> 
    <h1>This is Variables variable.</h1>

    <?php
        $myName = "Railey";
        $$myName = 2004;
        
        echo '<p>The value of $myName is ' . $myName . "</p>";
        echo '<p>The value of $$myName is ' . $$myName . "</p>"; 
        echo '<p>The value of $Railey is now ' . $Railey .  "<br>" . ' because the variable of "Railey" is $myName ' . 'and the $$myName value is 2004,' . "<br>" . 'so the value of $Railey is now 2004 because of the double dollar sign "$$"</p>';
    ?>
    
    <hr color="black" size="3"> 
    <h1>This is String Variable.</h1>

    <?php
        $myName = "Railey Dion Cabildo";

        echo "<p>The value of " . '$myName' . " is " . "$myName" . " and it is a " . "<strong>STRING</strong>" . " variable.</p>";
        echo "<p>My name is ", $myName, "</p>";
    ?>

    <hr color="black" size="3"> 
    <h1>This is Integer Variable.</h1>

    <?php
        $myAge = 20;

        echo "<p>The value of " . '$myAge' . " is " . "$myAge" . " and it is a " . "<strong>INTEGER</strong>" . " variable.</p>";
        echo "<p>I am ", $myAge, " years old.</p>";
    ?>

    <hr color="black" size="3"> 
    <h1>This is Float Variable.</h1>

    <?php
        $myHeight = 170.18;

        echo "<p>The value of " . '$myHeight' . " is " . "$myHeight" . " and it is a " . "<strong>FLOAT</strong>" . " variable.</p>";
        echo "My height is " . $myHeight . ' and the data of my of $myHeight is a ';
        var_dump($myHeight);
    ?>

    <hr color="black" size="3"> 
    <h1>This is Null Variable.</h1>

    <?php
        $numberOne = null;
        $numberTwo = 1;
        $numberThree = "";

        echo "<h3>Isset:</h3>";
        echo '$numberOne=null when tested using isset() would yield the answer ' .isset($numberOne);
        echo "<br>";
        echo '$numberTwo=1 when tested using isset() would yield the answer ' .isset($numberTwo);
        echo "<br>";
        echo '$numberThree="" when tested using isset() would yield the answer ' .isset($numberThree);


        echo "<h3>Is_Null:</h3>";
        echo '$numberOne=null when tested using is_null() would yield the answer ' .is_null($numberOne);
        echo "<br>";
        echo '$numberTwo=1 when tested using is_null() would yield the answer ' .is_null($numberTwo);
        echo "<br>";
        echo '$numberThree="" when tested using is_null() would yield the answer ' .is_null($numberThree);


        echo "<h3>Empty:</h3>";
        echo '$numberOne=null when tested using empty() would yield the answer ' .empty($numberOne);
        echo "<br>";
        echo '$numberTwo=1 when tested using empty() would yield the answer ' .empty($numberTwo);
        echo "<br>";
        echo '$numberThree="" when tested using empty() would yield the answer ' .empty($numberThree);
    ?>

    <hr color="black" size="3"> 
    <h1>Settype and Gettype.</h1>

    <?php
        echo "<h3>Gettype, get the type of the value of the variable.</h3>";

        $numberOne = "2024";
        $numberTwo = "2024";

        echo "The data type of the variable ($numberOne) " . '$numberOne ' . "is ". gettype($numberOne);
        echo "<br>";
        echo "The data type of the variable ($numberTwo) " . '$numberTwo ' . "is ". gettype($numberTwo);
        ?>

        <?php
        echo "<h3>Settype, convert the value from string to integer.</h3>";

        $numberOne = "2024";
        $numberTwo = "2024";

        settype ($numberOne, "integer");
        echo "The data type of the variable ($numberOne) " . '$numberOne ' . "is now ". gettype($numberOne);
        echo "<br>";
        settype ($numberTwo, "integer");
        echo "The data type of the variable ($numberTwo) " . '$numberTwo ' . "is now ". gettype($numberTwo);
        ?>

    <hr color="black" size="3"> 
    <h1>Operators.</h1>

    <?php
        $numberOne = 10;
        $numberTwo = 5;
        $addition = $numberOne + $numberTwo;
        $subtraction = $numberOne - $numberTwo;
        $multiplication = $numberOne * $numberTwo;
        $division = $numberOne / $numberTwo;

        echo "This is the value of variable " . '$numberOne = '. $numberOne;
        echo "<br>";
        echo "This is the value of variable " . '$numberTwo = '. $numberTwo;
        echo "<br>";
        echo "<br>";

        echo "The addition of " . '$numberOne' . " and " . '$numberTwo' . " is = " . $addition;
        echo "<br>";
        echo "The subtraction of " . '$numberOne' . " and " . '$numberTwo' . " is = " . $subtraction;
        echo "<br>";
        echo "The multiplication of " . '$numberOne' . " and " . '$numberTwo' . " is = " . $multiplication;
        echo "<br>";
        echo "The division of " . '$numberOne' . " and " . '$numberTwo' . " is = " . $division;
    ?>


</body>
</html>
