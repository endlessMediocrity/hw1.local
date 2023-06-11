<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>

    <style>
        table {
            margin: 0;
            width: 300px;
            border-collapse: collapse;
        }
        td, th {
            padding: 3px;
            border: 1px solid black;
            text-align: center;
        }
    </style>

    <?php include __DIR__ . "/functions.php" ?>

    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>&&</th>
        </tr>
        <tr>
            <th>0</th>
            <th>0</th>
            <th><?php echo (int)boolAnd(0, 0)?></th>
        </tr>
        <tr>
            <th>1</th>
            <th>0</th>
            <th><?php echo (int)boolAnd(1, 0)?></th>
        </tr>
        <tr>
            <th>0</th>
            <th>1</th>
            <th><?php echo (int)boolAnd(0, 1)?></th>
        </tr>
        <tr>
            <th>1</th>
            <th>1</th>
            <th><?php echo (int)boolAnd(1, 1)?></th>
        </tr>
    </table>

    <br>

    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>||</th>
        </tr>
        <tr>
            <th>0</th>
            <th>0</th>
            <th><?php echo (int)boolOr(0, 0)?></th>
        </tr>
        <tr>
            <th>1</th>
            <th>0</th>
            <th><?php echo (int)boolOr(1, 0)?></th>
        </tr>
        <tr>
            <th>0</th>
            <th>1</th>
            <th><?php echo (int)boolOr(0, 1)?></th>
        </tr>
        <tr>
            <th>1</th>
            <th>1</th>
            <th><?php echo (int)boolOr(1, 1)?></th>
        </tr>
    </table>

    <br>

    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>xor</th>
        </tr>
        <tr>
            <th>0</th>
            <th>0</th>
            <th><?php echo (int)boolXor(0, 0)?></th>
        </tr>
        <tr>
            <th>1</th>
            <th>0</th>
            <th><?php echo (int)boolXor(1, 0)?></th>
        </tr>
        <tr>
            <th>0</th>
            <th>1</th>
            <th><?php echo (int)boolXor(0, 1)?></th>
        </tr>
        <tr>
            <th>1</th>
            <th>1</th>
            <th><?php echo (int)boolXor(1, 1)?></th>
        </tr>
    </table>

</body>
</html>