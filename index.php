<?php include 'function.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sorting algorithm</title>
</head>


<body>
    <h1>SORTING ALGORITHM WITH PHP</h1>
    <div class="">
        <form action="" method="POST">
            <input type="text" name="sort_input">
            <label>ASC</label> <input type="radio" name="sort_method" value="asc" class="radio">
            <input type="radio" name="sort_method" value="desc" class="radio"> <label>DESC</label>
            <input type="submit" value="Begin sort" name="sort">
        </form>

    </div>
    <div class="al">
        <?php sortFunc(); ?>

    </div>




    <script src='app.js'></script>
</body>

</html>