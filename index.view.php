<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/index.css" media="screen" type="text/css">
<!--    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">-->

</head>
<body>

<div id="myDIV" class="header">
    <h2 class="logo"><img src="images/checked.svg" alt="Logo"></h2>
    <input type="text" id="myInput" placeholder="Title">
    <span onclick="newElement()" class="addBtn">New</span>
</div>

<ul id="myUL">
    <?php foreach ($tasks as $task) : ?>
        <?php if ($task->completed) : ?>
            <li class="checked"> <?= $task->description; ?> </li>
        <?php else: ?>
            <li><?= $task->description; ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

</body>
</html>
