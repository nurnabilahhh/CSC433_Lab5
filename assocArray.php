<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $monthDays = array ('January' => 31, 'February' => 28, 'March' => 31, 'April' => 30, 'May' => 31, 'June' => 30, 'July' => 31, 'August' => 31, 'September' => 30, 'October' => 31, 'November' => 30, 'December' => 31);

    foreach ($monthDays as $item => $days) {
      echo $item . ":" . $days;
      echo "<br>";
   }
   echo "<br>";
   echo "All the months with 30 day:";
   foreach ($monthDays as $item => $days) {
       if($days == 30){
        echo "<br>";
        echo $item;
       }
   }

   ?>
</body>
</html>