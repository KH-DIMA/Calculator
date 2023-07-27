<!DOCTYPE html>
<html>
<head>
    <title>CALCULATOR</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="/result1.php" method="GET">
    <input type="text" name="floor1" maxlength="8">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="text" name="floor2" maxlength="8">
    <input type="submit" value="COUNT">
</form>
</body>
</html>

<?php
if (empty($_GET['floor1']) && empty($_GET['floor2'])) {
    $errorMsg = "Nothing passed";
} elseif (empty($_GET['floor1']) || empty($_GET['floor2'])) {
    $errorMsg = "Arguments 1 or 2 not passed";
} elseif (!is_numeric($_GET['floor1']) || !is_numeric($_GET['floor2'])) {
    $errorMsg = "Both arguments should be numeric values";
} else {
    $floor1 = $_GET['floor1'];
    $floor2 = $_GET['floor2'];

    if (!empty($_GET['operation'])) {
        $operation = $_GET['operation'];
        switch ($operation) {
            case "+":
                $result = $floor1 + $floor2;
                break;
            case "-":
                $result = $floor1 - $floor2;
                break;
            case "/":
                $result = $floor1 / $floor2;
                break;
            case "*":
                $result = $floor1 * $floor2;
                break;
        }
        if (!isset($errorMsg)) {
            $expression = $floor1 . ' ' . $operation . ' ' . $floor2 . ' =';
            $result = round($result, 2); // Округлить результат до 2-х десятичных знаков
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>RESULT</title>
</head>
<body>
<?php
if (isset($errorMsg)) {
    echo $errorMsg;
} elseif (isset($expression) && isset($result)) {
    echo $expression . ' ' . $result;
}
?>
</body>
</html>
