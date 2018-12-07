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
     $calendar .= "<table id='calendar'>";
     $calendar .= "<caption><button class='adjM' id='monthD' onclick='setVals(-1)'>-</button>" . $monthName . " " . $year . "<button class='adjM' id='monthU' onclick='setVals(1)'>+</button></caption>";
     $calendar .= "<tr class='weekdays'>";

     foreach($daysOfWeek as $day) {
          $calendar .= "<th scope='col'>$day</th>";
     }

     $currentDay = 1;
     $calendar .= "</tr><tr class='days'>";

     for ($x = 0; $x < $dayOfWeek; $x++) {
         $calendar .= "<td class='day other-month'></td>";
     }

     $month = str_pad($month, 2, "0", STR_PAD_LEFT);

     while ($currentDay <= $numberDays) {

          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $calendar .= "</tr><tr class='days'>";

          }

          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);

          $date = "$year-$month-$currentDayRel";

          $calendar .= "<td class='day'>";
          $calendar .= "<div class='date'>" . $currentDay . "</div>";
          foreach($eventsArray as $event) {
              if (date('j',strtotime($event['eDate'])) == $currentDay)
              {
                  $calendar .= "<div class='event'>";
                  $calendar .= "<div class='event-desc'>" . $event['title'] . "</div>";
                  $calendar .= "<div class='event-time'>" . date('h:i A',strtotime($event['eDate'])) . "</div>";
                  $calendar .= "</div>";
              }
          }
          $calendar .= "</td>";

          $currentDay++;
          $dayOfWeek++;

     }

     for($x = $dayOfWeek; $x < 7; $x++) {
         $calendar .= "<td class='day other-month'></td>";
     }

     $calendar .= "</tr>";
     $calendar .= "</table>";

     return $calendar;
}
?>
