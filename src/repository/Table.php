<?php

namespace Calendar\Repository;

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
    $setLine = '<tr>';
    for($i = 0; $i <= 6; $i++){
      if (array_key_exists($i, $week)){
        $setLine .= "<td>{$week[$i]}</td>";
      } else {
        $setLine .= "<td></td>";
      }
    }
    $setLine .= '</tr>';
    return $setLine;
  }
}

?>
