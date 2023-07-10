<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $monthName = $_POST['monthName'];

    switch ($monthName) {
        case 'January':
        case 'March':
        case 'May':
        case 'July':
        case 'August':
        case 'October':
        case 'December':
            $numDays = 31;
            break;
        case 'April':
        case 'June':
        case 'September':
        case 'November':
            $numDays = 30;
            break;
        case 'February':
            $numDays = 28;
            break;
        default:
            $numDays = 'invalid';
    }

    echo "Number of days in $monthName: $numDays";
}
?>

<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="">
        <label for="monthName">Enter the month name:</label>
        <input type="text" id="monthName" name="monthName">
        <input type="submit" value="Submit">
    </form>
</body>
</html>