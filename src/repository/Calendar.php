<?php

namespace Repository\Calendar;

class Calendar extends Table 
{

  public function setHeader(){

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