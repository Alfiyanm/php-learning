<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Task For The Day</h1>
        <ul>
            <?php foreach ($task as $heading => $value) : ?>
            <li>
                <strong><?= ucwords($heading); ?></strong>: <?= $value; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </header>
</body>
</html>