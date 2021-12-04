<?php

namespace Repository\Calendar;

class Table 
{
  public function startTable()
  {
    echo "<table>";
  }
  public function endTable()
  {
    echo "</table>";
  }
  public function setLine()
  {
    echo "
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
    ";
  }
}

?>
