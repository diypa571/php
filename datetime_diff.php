<?php
// Demo one
function timeIntervalDays($startDate, $endDate) {
  $origin = new DateTime($startDate);
  $target = new DateTime($endDate);
  $interval = $origin->diff($target);
//  echo $interval->format('%a') . "<br />";
return $interval->format('%a');
}
echo "Demo one: ". timeIntervalDays("2019-06-02","2021-07-26"). " <br /> ";


// Demo two
/*
This is a litle more complex than the prev demo.
Becuase this function will calculate the amount of years, months,days and even minutes and seconds
between two dates and times.
*/

// There are three parameters for the functoin time zone, start and end date.
function displayDiff($tz,$startDate,$endDate) {
$d1 = new DateTime($startDate, new DateTimeZone($tz));
$d2 = new DateTime($endDate, new DateTimeZone($tz));
$diff = $d1->diff($d2);
if ($diff->format("%y") > 0) {
  // Display year
 echo ($diff->format(" year = %y"));
}

if ($diff->format("%m") > 0) {
  // Display month
 echo ($diff->format(" Month = %m"));
}


if ($diff->format("%d") > 0) {
  // Display month
 echo ($diff->format(" day = %d"));
}

if ($diff->format("%h") > 0) {
  // Display month
 echo ($diff->format(" hour = %h"));
}

if ($diff->format("%i") > 0) {
  // Display min
 echo ($diff->format(" min = %i"));
}

}

echo "Demo two: ";
displayDiff("Europe/Stockholm","2020-06-02 10:09",date("Y-m-d H:i"));
?>
