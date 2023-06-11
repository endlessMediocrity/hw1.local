<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php include __DIR__ . "/functions.php"; ?>

    <h1>Решите уравнение x<sup>2</sup> + 3x + 2 = 0</h1>
    <h2>D = b<sup>2</sup> - 4ac = <?php $dis = discriminant(1, 3, 2); echo $dis?></h2>
    <h2>x<sub>1</sub> = (b + √D) / 2a = <?php echo root(1, -3, 1, 1)?></h2>
    <h2>x<sub>1</sub> = (b - √D) / 2a = <?php echo root(1, -3, 1, 2)?></h2>


</body>
</html>