<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style/calendar.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <?php

  require "../vendor/autoload.php";
  use Repository\Calendar\Calendar;

  $calendar = new Calendar();
  $calendar->startTable();
  $calendar->setHeader();
  $calendar->setLine();
  $calendar->setLine();
  $calendar->setLine();
  $calendar->setLine();
  $calendar->setLine();
  $calendar->endTable();




  ?>
</body>
</html>