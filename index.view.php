<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>To do's</title>
    <script type="text/javascript" src="form.js"></script>
    <link rel="icon" href="core/views/images/notepad.png" type="image/x-icon"/>
    <link rel="stylesheet" href="core/views/style/index.css" media="screen" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">

</head>

<body>
<div class="background">
<div id="myDIV" class="header">

    <h2 class="title">
        <img src="core/views/images/checked.png" alt="Logo" class="logo">
    </h2>
    <h3 class="subtitle">create your list :'v</h3>
    <div class="searchBar">
        <input type="text" name="myInput" id="myInput" placeholder="Task">
        <button onclick='addItem()' class="addBtn">New</button>
    </div>
</div>

<ul id="myUL">

    <?php foreach ($tasks as $task) : ?>

        <?php if ($task->completed) : ?>
            <li class="checked" id="<?php echo $task->id;?>">
            <button onclick="actions('check', '<?php echo $task->id;?>')" class="checkBtn">
                <span id="list-text"><?= $task->description; ?></span>
            </button>
        <?php else: ?>
            <li id="<?php echo $task->id;?>">
                <button onclick="actions('check', '<?php echo $task->id;?>')" class="checkBtn">
                    <span id="list-text"><?= $task->description; ?></span>
                </button>
        <?php endif; ?>
                <button onclick="actions('delete', '<?php echo $task->id;?>')" class="close">
                    <svg class="nani" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.982 212.982"><path d="M131.804 106.491l75.936-75.936c6.99-6.99 6.99-18.323 0-25.312-6.99-6.99-18.322-6.99-25.312 0L106.491 81.18 30.554 5.242c-6.99-6.99-18.322-6.99-25.312 0-6.989 6.99-6.989 18.323 0 25.312l75.937 75.936-75.937 75.937c-6.989 6.99-6.989 18.323 0 25.312 6.99 6.99 18.322 6.99 25.312 0l75.937-75.937 75.937 75.937c6.989 6.99 18.322 6.99 25.312 0 6.99-6.99 6.99-18.322 0-25.312l-75.936-75.936z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
                </button>
            </li>

    <?php endforeach; ?>

</ul>
</div>
</body>

</html>
