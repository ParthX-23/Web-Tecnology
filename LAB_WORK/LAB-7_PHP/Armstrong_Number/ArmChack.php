<!-- php code -->
<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string)$number);

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    return $sum == $number;
}

// Example usage
$number =$_POST['number'];

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {

    echo "$number is not an Armstrong number.";
    
}
?>