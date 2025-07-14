<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <center>
        <h3>Arthematic Operator in PHP</h3>
        <?php
            echo "The value of 10+10 is: ".(10 + 10)."<br>";
            echo "The value of 10-10 is: ".(10 - 10)."<br>";
            echo "The value of 10*10 is: ".(10 * 10)."<br>";
            echo "The value of 10/10 is: ".(10 / 10)."<br>";
            echo "The value of 10%10 is: ".(10 % 10)."<br>";
            echo "The value of 10**10 is: ".(10 ** 10)."<br>";
        ?>
        <h3>Relational Operator</h3>
            <?php
            $num1 = 100;
            $num2 = 100;
            
            echo "Answer is: ".($num1 > $num2). "<br>"; // because answer is false so that value is printed
            echo "Answer is: ".($num1 < $num2). "<br>";// because answer is false so that value is printed
            echo "Answer is: ".($num1 >= $num2). "<br>";
            echo "Answer is: ".($num1 <= $num2). "<br>";
            echo "Answer is: ".($num1 == $num2). "<br>";
            echo "Answer is: ".($num1 === $num2). "<br>";
            echo "Answer is: ".($num1 !== $num2). "<br>";// because answer is false so that value is printed
            echo "Answer is: ".($num1 <> $num2). "<br>";// because answer is false so that value is printed (<>)This is also a not operator 
            echo "Answer is: ".($num1 <=> $num2). "<br>"; //0 why because it run on 3 condition +1 0 and -1 if both value is equal then print 0, if num1 is greater than num2 then 1 and then if num1 is lesser than num2 then -1. You can try!
            
            echo "<h3>Increament and Decrement Operator </h3><br>";
            $a = 5;
            $b = ++$a;
            $c = $b--;
            $a = ++$b;
            $d = $a + ++$a + $a++;
            echo "Ans: ". $d;

            echo "<h3>String Operator</h3>";
            print("first one (.) dot and second is (.=)<br>");

            // $a = 100;
            // $name = "Gautam";
            // $name.=$a;
            // echo $name;

            $a = 100;
            $name = 100;
            $name.=$a;
            echo $name;

            echo "<h4>Conditional Assignment Operator</h4>";
            $x = 10;
            $y = 5;

            $greater = $x > $y ? "<h4>x is greater</h4> <br>": "<h4>y is greater</h4><br>";

            echo $greater



            ?> 
    </center>
</body>
</html>