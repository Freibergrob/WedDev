<?php
function build_calendar($month,$year) {
    require_once "../config.php";
    require_once $_PATHS['initialize.php'];


    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
    $lastDay = date('t',$firstDayOfMonth);
    $lastDayOfMonth = mktime(0,0,0,$month,$lastDay,$year);

     $events = getEventsByMonth($month,$year);
     $eventsArray = $events->fetchAll();
     $calendar = "";

     $daysOfWeek = array('S','M','T','W','T','F','S');

     $numberDays = date('t',$firstDayOfMonth);
     $dateComponents = getdate($firstDayOfMonth);
     $monthName = $dateComponents['month'];
     $dayOfWeek = $dateComponents['wday'];
     $calendar .= "<table class='cal'>";
     $calendar .= "<tr class='title'>";
     $calendar .= "<td colspan='2'></td>";
     $calendar .= "<td class='title' colspan='3'>" . $monthName . " " . $year . "</td>";
     $calendar .= "<td></td>";
     $calendar .= "<td><input type='image' src='../images/monthchangedown.png' id='monthDown' class='monthleft' onclick='setVals(-1)'>";
     $calendar .= "<input type='image' src='../images/monthchangeup.png' id='monthUp' class='monthright' onclick='setVals(1)'></td>";
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

          $calendar .= "<td class='cal-day'>";
          foreach($eventsArray as $event) {
              if (date('j',strtotime($event['eDate'])) == $currentDay)
              {
                  $calendar .= $event['title'] . "<br />";
              }
          }
          $calendar .= $currentDay;
          $calendar .= "</td>";

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
