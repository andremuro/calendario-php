<?php

namespace Repository\Calendar;
use Repository\Calendar\Table;

class Calendar extends Table 
{
  /**
   * @return string Retorna os numeros que compoem o mês.
   */
  public function setCalendar()
  {
    $calendar = "";
    $day = 1;
    $week = [];

    while ($day <= 31) {
      array_push($week, $day);

      if (count($week) == 7) {
        $calendar .= $this->setLine($week);
        $week = [];
      }
      $day++;
    }
    $calendar .= $this->setLine($week);
    return $calendar;
  }
  /**
   * @return string Retorna o cabeçalho do Calendario.
   */
  public function setHeader()
  {

    echo "
          <tr>
            <td>DOM</td>
            <td>SEG</td>
            <td>TER</td>
            <td>QUA</td>
            <td>QUI</td>
            <td>SEX</td>
            <td>SAB</td>
          </tr>
    ";
  }
}

?>