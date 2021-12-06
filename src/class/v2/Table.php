<?php

namespace Calendar\Class;

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
   * @return string Retorna HTML que faz a coluna
   */
  public function Colum()
  {
    echo "<td></td>";
  }
}

?>
