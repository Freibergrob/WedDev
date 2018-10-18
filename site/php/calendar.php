<?php
function build_calendar($month,$year) {
     $daysOfWeek = array('S','M','T','W','T','F','S');
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
     $numberDays = date('t',$firstDayOfMonth);
     $dateComponents = getdate($firstDayOfMonth);
     $monthName = $dateComponents['month'];
     $dayOfWeek = $dateComponents['wday'];
     $calendar = "<table class='cal'>";
     $calendar .= "<caption>";
     $calendar .= "<button id='monthDown' onclick='setVals(-1)'>-</button>";
     $calendar .= $monthName . " " . $year;
     $calendar .= "<button id='monthUp' onclick='setVals(1)'>+</button>";
     $calendar .= "</caption>";
     $calendar .= "<tr>";

     foreach($daysOfWeek as $day) {
          $calendar .= "<th class='cal-header'>$day</th>";
     }

     $currentDay = 1;
     $calendar .= "</tr><tr class='cal-week'>";

     if ($dayOfWeek > 0) {
          $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
     }

     $month = str_pad($month, 2, "0", STR_PAD_LEFT);

     while ($currentDay <= $numberDays) {

          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $calendar .= "</tr><tr class='cal-week'>";

          }

          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);

          $date = "$year-$month-$currentDayRel";

          $calendar .= "<td class='cal-day'>$currentDay</td>";

          $currentDay++;
          $dayOfWeek++;

     }

     if ($dayOfWeek != 7) {

          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";

     }

     $calendar .= "</tr>";
     $calendar .= "</table>";

     return $calendar;
}
?>
