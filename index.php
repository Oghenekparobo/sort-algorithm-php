<?php

if (isset($_POST['sort'])) {
    $numbers = $_POST['sort_input'];
    if (!empty($_POST['sort_method'])) {
        if ($_POST['sort_method'] === 'asc') {
            $asc_numbers = explode(',', $numbers);
            sort($asc_numbers);
            $final_sort =  implode(',', $asc_numbers);
            $display = "<p>$final_sort</p>";
        } else if ($_POST['sort_method'] === 'desc') {
            $asc_numbers = explode(',', $numbers);
            rsort($asc_numbers);
            $final_sort =  implode(',', $asc_numbers);
            $display = "<p>$final_sort</p>";
        }
    } else {
        echo '<script>alert("you are either ascending or descending")</script>';
        $display = "";
    }
}

?>
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
        <?php echo $display; ?>
    </div>




    <script src='app.js'></script>
</body>

</html>