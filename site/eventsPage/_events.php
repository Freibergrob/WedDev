<?php
    $d = new DateTime('first day of this month', new DateTimeZone("UTC"));
    echo $d->format('jS, F Y');
 ?>
