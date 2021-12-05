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
  use Calendar\Repository\Calendar;

  $calendar = new Calendar();
  //$calendar->startTable();
  //$calendar->setHeader();
  $calendar->setCalendar(1,2021);
  $calendar->setCalendar(2,2021);
  $calendar->setCalendar(3,2021);
  $calendar->setCalendar(4,2021);
  $calendar->setCalendar(5,2021);
  $calendar->setCalendar(6,2021);
  $calendar->setCalendar(7,2021);
  $calendar->setCalendar(8,2021);
  $calendar->setCalendar(9,2021);
  $calendar->setCalendar(10,2021);
  $calendar->setCalendar(11,2021);
  $calendar->setCalendar(12,2021);
  //$calendar->endTable();

  ?>
</body>
</html>