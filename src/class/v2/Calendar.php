<?php

namespace Calendar\Class;

class Calendar extends Table 
{
  /**
   * @return string Retorna o Cabeçalho do Calendário
   * @param string $months, $month, $days
   * @param int $year 
   */
  public function header($months,$month, $year, $days)
  {
    echo  '<tr><th colspan="7">'. $months[$month] . ' - ' . $year . '</th></tr>
          <tr><th>'; 
    echo implode('</th><th>', $days); 
    echo '</th></tr>';
  }
  /**
   * @return string Retorna o Calendário pronto
   * @param int $month, $year 
   */
  public function setCalendar($month, $year)
  {
    //vetor que guarda os meses
    $months = [
              1 => "Janeiro",
              2 => "Fevereiro",
              3 => "Março",
              4 => "Abril",
              5 => "Maio",
              6 => "Junho",
              7 => "Julho",
              8 =>  "Agosto",
              9 => "Setembro",
              10 => "Outubro",
              11 => "Novembro",
              12 => "Dezembro"
    ];
    //vetor com os dias da semana
    $days = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"];
    //obtem o primeiro dia do mês 
    $oneDay = mktime(0, 0, 0, $month, 1, $year);
    //obtem a qtd de dias no mês
    $monthDay = date("t", $oneDay);
    //obtem o dia da semana em que o calendário se inicia
    $startDay = date ("w", $oneDay);
    //seta a tabela e o cabeçalho
    $table = $this->startTable();
    $table = $this->header($months,$month, $year, $days);
    //obtem as celulas da tabela vazia até o dia inicial da semana
    if ($startDay > 0)
    {
      for ($i = 0; $i < $startDay; $i++){
        $table = $this->Colum();
      }
    }
    //preenche os dias no calendario
    for($day = 1; $day <= $monthDay; $day++ ){
      if($startDay == 0)
      {
        //deixa os domingos na cor rosa
        $style = ' style="background: rgb(227,33,164);"';
      } else {
        $style = '';
      }
      //coloca a data atual sublinhada e em negrito
      if(($day == date("j")) && ($month == date("n")) && ($year == date("Y")))
      {
        echo '<td ' . $style . ' align="center"><strong><u>' . $day . '</u></strong></td>';   
      } else {
        echo '<td ' . $style . ' align="center">' . $day . '</td>';
      }

      $startDay++;
      //adiciona nova linha na tabela se for preciso
      if($startDay == 7)
      {
        $startDay = 0;
        echo "</tr>";
        if($day < $monthDay)
        {
          echo '<tr>';
        }
      }
    }

    if($startDay > 0)
    {
      for($i = $startDay; $i < 7; $i++){
        $table = $this->Colum();
      }
      echo '</tr>';
    }
    $table = $this->endTable();
  }

}
?>