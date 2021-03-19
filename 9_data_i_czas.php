<?php
// funkcja Date()
 echo "Rok - miesiąc - dzień: ", date("Y-m-d"), '<br>'; // Rok - miesiąc - dzień: 2020-11-08
 echo "Rok - miesiąc - dzień: ", date("Y-M-d"), '<br>'; // Rok - miesiąc - dzień: 2020-Nov-08
 echo "Dzień - miesiąc - rok: ", date("d-m-Y"), '<br>'; // Dzień - miesiąc - rok: 08-11-2020
 echo date("G:i:s"), '<br>'; // 17:34:09
 echo date("h:i:sa"), '<br>'; // 05:34:09pm
 echo date("Y-m-d G:i:s"), '<br>'; // 2020-11-08 17:34:09
 echo date("w"), '<br>'; //0 - niedziela

 // funkcja getdate()
  $data = getdate();

  echo '<pre>' ,print_r($data), '</pre><hr>';

  // dzień - miesiąc - rok, dzień tygodnia
  echo date("d-m-Y,l"), '<br><hr>';

  // 08 - Listopad - 2020, Niedziela
  $mday = $data['mday'];
  $month = $data['month'];
  $year = $data['year'];
  $weekday = $data['weekday'];

  echo $mday, " - ", $month, " - ", $year, ", ", $weekday;
?>