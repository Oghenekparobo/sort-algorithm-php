<?php

function sortFunc()
{
    if (isset($_POST['sort'])) {
        $numbers = $_POST['sort_input'];
        if (!empty($_POST['sort_method'])) {
            if ($_POST['sort_method'] === 'asc') {
                $asc_numbers = explode(',', $numbers);
                sort($asc_numbers);
                $final_sort =  implode(',', $asc_numbers);
                $display = "<p>$final_sort</p>";
                print_r($display);
            } else if ($_POST['sort_method'] === 'desc') {
                $asc_numbers = explode(',', $numbers);
                rsort($asc_numbers, SORT_NUMERIC);
                $final_sort =  implode(',', $asc_numbers);
                $display = "<p>$final_sort</p>";
                print_r($display);
            }
        } else {
            echo '<script>alert("you are either ascending or descending")</script>';
            $display = "";
        }
    }
}
