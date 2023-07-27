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
