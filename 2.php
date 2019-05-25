<h3>beetweendays</h3>
<?php

 function tanggal($date) {
     
     
    $pecahkan= explode ('-',$date);
    // variable pecahkan 0 = tanggal
    // variable pecahkan 1 = bulan
    // variable pecahkan 2 = tahun
    
  return $pecahkan[2].' - '. $pecahkan[1].' - '.$pecahkan[0];
 }
 echo tanggal ("2019-11-04");
 echo "<br/>";
 echo tanggal ("2019-11-01");
 echo "<br/>";
 echo tanggal ("2019-11-02");
 echo "<br/>";
 echo tanggal ("2019-11-03");

?>