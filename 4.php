<?php
/** 
	$num_char merupakan jumlah karakter vertikal dan horizontal
*/
$num_char 	 = 5; 
// onehalf_var nantinya nilainya bisa bertambah / berkurang, sedangkan half tetap
$onehalf 	 = floor($num_char / 2);
$onehalf_var = $onehalf;
$char1 		 = '=';
$char2 		 = 'x';

echo '<div style="font:bold 16px courier new; line-height:10px">';
// loop baris
for ($row = 1; $row <= $num_char; $row++)

{
	// loop kolom
	for ($col = 1; $col <= $num_char; $col++)
	{
		$char =	$col > $onehalf_var && $col <= ($num_char - $onehalf_var) ? $char2 : $char1;
		echo $char;	
	}
	$row <= $onehalf ? $onehalf_var-- : $onehalf_var++;	
	echo '<br/>';
}
echo '</div>';
echo '<br/>';

/** 
	$num_char merupakan jumlah karakter vertikal dan horizontal
*/
$num_char 	 = 7; 
// onehalf_var nantinya nilainya bisa bertambah / berkurang, sedangkan half tetap
$onehalf 	 = floor($num_char / 2);
$onehalf_var = $onehalf;
$char1 		 = '=';
$char2 		 = 'x';

echo '<div style="font:bold 16px courier new; line-height:10px">';
// loop baris
for ($row = 1; $row <= $num_char; $row++)

{
	// loop kolom
	for ($col = 1; $col <= $num_char; $col++)
	{
		$char =	$col > $onehalf_var && $col <= ($num_char - $onehalf_var) ? $char2 : $char1;
		echo $char;	
	}
	$row <= $onehalf ? $onehalf_var-- : $onehalf_var++;	
	echo '<br/>';
}
echo '</div>';
?>