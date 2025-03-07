<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $num1 = $_POST['first'] ; 
        $num2 = $_POST['second'] ; 
        $op = $_POST['op'] ;
        $res = "" ;
        switch ($op) {
            case '+':
                $res = $num1 + $num2 ;
                break;
            case '-':
                $res = $num1 - $num2 ;
                break;
            case '*':
                $res = $num1 * $num2 ;
                break;
            case '/':
                if($num2 != 0 ){
                    $res = $num1 / $num2 ;
                }else{
                    $res = "Can Not Divide By Zero" ;
                }
                break;
        }
        echo "<script>alert('Your Result Is : $res')</script>" ;
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <label>Enter 1st Number:</label>
        <input type="number" name="first" required><br><br>
        <label>Enter 2nd Number:</label>
        <input type="number" name="second" required><br><br>
        <select name="op" required>
            <option value="">choose operation</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit">Calculate</button><br><br>
    </form>


    
</body>
</html>