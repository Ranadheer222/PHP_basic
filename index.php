<?php 
function adding($num1,$num2){
    return $num1 + $num2;

}
function substracting($num1,$num2){
    if($num2>$num1){
    return "subtraction should be positive only";
    }
    else{
        return $num1-$num2;
    }
    
}
function dividing($num1,$num2){
    if ($num2 == 0){
        return "Division should be valid value";
    }
    else{
        return $num1/$num2;
    }
    
}

function multi($num1,$num2){
    return $num1*$num2;
}

$num1 = (int)readline('enter the 1st num =');
$num2 = (int)readline('enter the 2nd num =');

$addResult = adding($num1,$num2);
$subResult = substracting($num1,$num2);
$divResult = dividing($num1, $num2);
$multiResult = multi($num1,$num2);

print "addition is=" . $addResult."\n";
print "sub is =" . $subResult."\n";
print "div is = " . $divResult . "\n";
print "multiplication value is =" .$multiResult. "\n";

//

$num1 = (int)readline('enter the 1st num = ');
$num2 = (int)readline('enter the 2nd num = ');
$operation = readline('enter the operation (+, -, *, /): ');

switch ($operation) {
    case '+':
        $result = $num1 + $num2;
        print "Addition is =" .$result. "\n";
        break;
    case '-':
        if ($num2 > $num1) {
            echo "Subtraction should be positive only\n";
        } else {
            $result = $num1 - $num2;
            echo "Subtraction is = $result\n";
        }
        break;
    case '*':
        $result = $num1 * $num2;
        echo "Multiplication is = $result\n";
        break;
    case '/':
        if ($num2 == 0) {
            echo "Division should be valid value\n";
        } else {
            $result = $num1 / $num2;
            echo "Division is = $result\n";
        }
        break;
    default:
        echo "Invalid operation!\n";
}

?>


