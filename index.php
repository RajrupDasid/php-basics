<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learning</title>
</head>
<body>
    <div class="container">
        <?php
            echo "Hello php";
        ?>
    </div>
    <br>
    <br>
    <div class="container">
        <?php
            echo "<b>Vaiables in php</b>";
            echo "<br/>";
            echo "Php is a dynamically typed language----means 
            we dont have to tell the code that which is what or this is string or this is a integer ";
            echo "we can imply variables by using a $ sign then write the variable name followed by assign its value";
            echo "example";
            $var1=   45;
            $var2=   56;
            echo $var1;
            echo $var2;
            echo $var1 + $var2;
        ?>
    </div>
    <br>
    <br>
    <div class="container">
        <?php
            echo "<b>Operators</b>";
            echo "<br/>";
            echo "<br/>";
            echo "There are mainly 5 types of operators in php";
            echo "<br/>";
            echo "<br/>";
            echo "1-Arithemetic operators";
            echo "<br/>";
            echo "2-Assignment operator";
            echo "<br/>";
            echo "3-Comperison Operator";
            echo "<br/>";
            echo "4-Increment / Decrement Operators";
            echo "<br/>";
            echo "5-Logical Operator";
            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            echo "Examples of arithmetic operator";
            echo "<br/>";
            echo "<br/>";
            $newvar=90;
            $nwevar2=90;
            echo $newvar;
            echo "+";
            echo $nwevar2;
            echo "<br/>";
            echo "<br/>";
            echo "The answere is ";
            echo "<br>";
            echo $newvar + $nwevar2;
            echo "<br/>";
            echo "<br/>";
            echo "<br>";
            echo "<br/>";
            echo "<b>Comparison operators</b>";
            echo "<br>";
            echo "The value of 7==9 is ";
            echo "<br>";
            echo var_dump(7==9);
            echo "<br>";
            echo var_dump(7>=9);
            echo "<br>";
            echo var_dump(7<=9);
            echo "<br>";
            echo var_dump (7!=9);
            echo "<br>";
            echo "<br>";
            echo "<b>Increment and decrement operator</b>";
            echo "<br/>";
            echo "<br/>";
            echo "Increment operator syntax is += and ++";
            echo "<br/>";
            echo "Decrement operator syntax  is -= and --";
            echo "<br/>";
            echo "This operators use to increment and decrement value";
            echo "<br>";
            echo "<br>";
            echo "below example is post increment example adding 1 at the end like =var+1 ";
            echo "<br>";
            echo $newvar++;
            echo "<br>";
            echo "<br>";
            echo "below example is post decrement example reducing 1 at the end like =var-1 ";
            echo "<br>";
            echo $newvar--;
            echo "<br>";
            echo "<br>";
            echo "below example is pre increment example adding 1 at the front 1+var ";
            echo "<br>";
            echo ++$newvar;
            echo "<br>";
            echo "<br>";
            echo "below example is pre decrement example reducing 1 at the front 1-var ";
            echo "<br>";
            echo "<br>";
            echo --$newvar;
            echo "<br>"; 
            echo "<br>";
            echo "<b>Logical operators</b>";
            echo "<br>";
            echo "<br>";
            echo  "and operator symbol to use (&&)";
            echo "<br>";
            echo "or operator symbol to use (||)";
            echo "<br>";
            echo "xor operator";
            echo "<br>";
            echo "not operator ! this is the symbolic sign of not operator ";     
            echo "<br>";
            echo "<br>";
            echo "correct syntax is to write or use logical operator is (true and , or , not,xor false) is in the brackets (  )";
        ?>
    </div>
    <br>
    <br>
    <div class="container">
        <?php
            echo"<b>Data Types in php </b>";
            echo "<br>";
            echo "<br>";
            echo "1. String";
            echo "<br>";
            echo "<br>";
            echo "2. Integer";
            echo "<br>";
            echo "<br>";
            echo "3. Float";
            echo "<br>";
            echo "<br>";
            echo "4. Boolean";
            echo "<br>";
            echo "<br>";
            echo "5. Array";
            echo "<br>";
            echo "<br>";
            echo "6. Object";
            echo "<br>";
            echo "<br>";
            echo "This six datatypes primarily use in php";
            echo "<br>";
            echo "<br>";
            echo "<b>examples</b>";
            echo "<br>";
            $stringveri="This is a string";
            echo "<br>";
            echo var_dump($stringveri);
            echo "<br>";
            echo "<br>";
            echo "below is a integer data type";
            $intever=50;
            echo "<br>";
            echo var_dump($intever);
            echo "<br>";
            echo "<br>";
            echo "below is a float data type";
            $intever=65.9;
            echo "<br>";
            echo var_dump($intever);
            echo "<br>";
            echo "<br>";
            echo "below is a boolean data type";
            $intever=true;
            echo "<br>";
            echo var_dump($intever);
            echo "<br>";
            echo "<br>";
        ?>
        <div class="container">
            <?php
                echo "<b>constants</b>";
                echo "<br>";
                echo "if we declare a define function in the starting of our project then we can call it anywhere we want and it's value cannot be change because it's a constant";
                echo "<br>";
                echo "<b><I>Remember to decleare define at the start of a php project that we can call </I></b>";
            ?>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <?php
                echo "<b>Conditional Statements</b>";
                echo "<br>";
                echo "If-else statements";
                echo "<br>";
                echo "<br>";
            ?>
            <?php
              $overtime=60;
              if ($overtime<=50)
              {
              $pay_amt=1200;
              $medical=1000;
              echo "Pay Amount : $pay_amt : Medical : $medical";
              }
              else
              {
              $pay_amt=2000;
              $medical=1500;
              echo "Pay Amount : $pay_amt : Medical : $medical";
              }
            ?>
            <br>
            <br>
            <div class="container">
                <?php
                    echo "Making an Array";
                    echo "<br>";
                    echo "Array is a container where we can store more than one value at a time and later can access it";
                    echo "<br>";
                    echo "<br>";
                    echo "Example";
                    echo "<br>";
                    echo "<br>";
                    $linuxos=array("GNOME","XFCE","ROLLING","BUDGIE","i3","KDE","KDE NEON","LXDE",);
                    //echo $linuxos[0];//index counting
                    echo count($linuxos); 
                ?>
            </div>
            <div class="container">
                <?php
                    echo "<b>Loops in php</b>";
                    echo "<br>";
                    echo "<br>";
                    echo "<b>while loops</b>";
                    echo "<br>";
                    echo "<br>";
                    $a=0;
                    while ($a <= 10) {
                        echo "The value of a is  ";
                        echo "<br>";
                        echo $a;
                        echo "<br>";
                        $a++;
                    }  
                ?>
                <br>
                <?php
                    echo "Iterating Through Arrays";
                    echo "<br>";
                    $a=0;
                      while ($a < count($linuxos)) {
                          echo "Some Linux Distributions are";
                          echo "<br>";
                          echo $linuxos[$a];
                          echo "<br>";
                          $a++;
                      }
                ?>
                <br>
                <br>
                <br>
                <?php
                    echo "Do while loop";
                    echo "<br>";
                    $a=0;
                    do {
                        echo "<br>The value of a is ";
                        echo $a;
                        $a++;
                    } while ($a < 10);
                ?>
                <br>
                <br>
                <br>
                <?php
                    echo "<b>For Loop</b>";
                    echo "<br>";
                    echo "<br>";
                    $i=30;
                    for ($i=0; $i <30 ; $i++) { 
                        echo "<br>The value for for loop a is"; 
                        echo $i;
                    }
                ?>
                <br>
                <br>
                <br>
                <?php
                    echo "<b> For Each Loop</b>";
                    echo "<br>";
                    echo "<br>";
                    foreach ($linuxos as  $value) {
                        echo "<br> The value is ";
                        echo $value;
                    }
                ?>
            </div>
            <br>
            <br>
            <br>
            <div class="container">
                <?php
                    echo "<b>Functions</b>";
                    echo "<br>";
                    echo "<br>";
                    function print5(){
                        echo "Five";
                    }
                    print5();
                ?>
                <br>
                <br>
                <br>
                <br>
                <?php
                    function number($number){
                        echo "<br>The number is ";
                        echo $number;
                    }
                    number(98);
                    number(30);
                ?>
            </div>
            <div class="container">
                    <?php
                        echo "Strings";
                        echo "<br>";
                        echo "<br>";
                        $str="Manjaro is a Arch based Linux";
                        echo "<br>";
                        echo $str;
                        $leng=strlen($str);
                        echo "<br>";
                        echo "The length of the string is ". $leng; //concatinating 
                        echo "<br>";
                        echo "<br>";
                        echo "The numbers of words in the string is ". str_word_count($str). " Nice";
                        echo "<br>";
                        echo "<br>";
                        echo "The reversed string is ". strrev($str). "Nice";
                        echo "<br>";
                        echo "<br>";
                        echo "The search for the word is at position ". strpos($str, "is"). "Nice";
                        echo "<br>";
                        echo "<br>";
                        echo "Replace ". str_replace("Linux","Linuxos",$str). "Nice";  
                        echo $str
                    ?>
            </div>
        </div>
    </div>
</body>
</html>