<?php
    date_default_timezone_set('Africa/Lagos');
    include "php/calendar.php";
    $date = getdate();
    $month = $date['mon'];
    $year = $date['year'];
 ?>

<?=build_calendar($month, $year); ?>
