
<html>

<head> 
<link href="calendar1.css" type="text/css" rel="stylesheet" />  
</head>
<body>


<?php
include 'calendar.php';
 
$calendar = new Calendar();

 
echo $calendar->show();
?>

</body>
</html>   