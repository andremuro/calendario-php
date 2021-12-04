<?php

namespace Repository\Calendar;

class Table 
{
  /**
   * @return string Retorna HTML que inícia a tabela.
   */
  public function startTable()
  {
    echo "<table>";
  }
  /**
   * @return string Retorna HTML que finaliza a tabela.
   */
  public function endTable()
  {
    echo "</table>";
  }
  /**
   * @return string Retorna HTML que monta uma linha com sete colunas.
   */
  public function setLine($week)
  {
    echo "
          <tr>
            <td>{$week[0]}</td>
            <td>{$week[1]}</td>
            <td>{$week[2]}</td>
            <td>{$week[3]}</td>
            <td>{$week[4]}</td>
            <td>{$week[5]}</td>
            <td>{$week[6]}</td>
          </tr>
    ";
  }
}

?>
