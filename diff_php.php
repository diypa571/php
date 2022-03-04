// diyar.parwana@gmail.com--
// 
Calculate time between two dates...
 


public function timeAgo($date1,$date2) {
$interval 	= $date1->diff($date2);
if ($interval->format('%y') > 0) {
  echo '<hr>';
echo $interval->format('%y');
if ($interval->format('%y') > 1) {
echo ' years ';
}
else 
{
echo ' years ';
}

}

if ($interval->format('%m') > 0) {
echo $interval->format('%m');
echo ' month... ';
}

if ($interval->format('%h') > 0) {
echo $interval->format('%h');
echo ' hours ';

}

if ($interval->format('%i') > 0) {
echo $interval->format('%i');
echo '  minutes ';
echo '،';
}

 


}




$date1  	= new DateTime(date in the past...);
$currentDateTime = date("Y/m/d H:i:s");
$date2 	= new DateTime($currentDateTime);
// Call the class metod...
$objArticle->timeAgo($date1,$date2);
