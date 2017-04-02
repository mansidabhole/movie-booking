<?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
$selected = mysql_select_db("book",$con);
//for theatres

//for timings

// row A
$querya1 = "SELECT * FROM rockon_2 WHERE `seatstatus` = 1 AND `no`='a1'" ;
$resulta1 = @mysql_query($querya1);
$displaya1 = mysql_num_rows($resulta1);
$disablea1 = $displaya1 ? 'disabled="disabled"':'';

$querya2 = "SELECT * FROM rockon_2 WHERE `seatstatus` = 1 AND `no`='a2'" ;
$resulta2 = @mysql_query($querya2);
$displaya2 = mysql_num_rows($resulta2);
$disablea2 = $displaya2 ? 'disabled="disabled"':'';

$querya3 = "SELECT * FROM rockon_2 WHERE `seatstatus` = 1 AND `no`='a3'" ;
$resulta3 = @mysql_query($querya3);
$displaya3 = mysql_num_rows($resulta3);
$disablea3 = $displaya3 ? 'disabled="disabled"':'';

$querya4 = "SELECT * FROM rockon_2 WHERE `seatstatus` = 1 AND `no`='a4'" ;
$resulta4 = @mysql_query($querya4);
$displaya4 = mysql_num_rows($resulta4);
$disablea4 = $displaya4 ? 'disabled="disabled"':'';

$querya5 = "SELECT * FROM rockon_2 WHERE `seatstatus` = 1 AND `no`='a5'" ;
$resulta5 = @mysql_query($querya5);
$displaya5 = mysql_num_rows($resulta5);
$disablea5 = $displaya5 ? 'disabled="disabled"':'';

$querya6 = "SELECT * FROM rockon_2 WHERE `seatstatus` = 1 AND `no`='a6'" ;
$resulta6 = @mysql_query($querya6);
$displaya6 = mysql_num_rows($resulta6);
$disablea6 = $displaya6 ? 'disabled="disabled"':'';

$querya7 = "SELECT * FROM rockon_2 WHERE `seatstatus` = 1 AND `no`='a7'" ;
$resulta7 = @mysql_query($querya7);
$displaya7 = mysql_num_rows($resulta7);
$disablea7 = $displaya7 ? 'disabled="disabled"':'';

$querya8 = "SELECT * FROM rockon_2 WHERE `seatstatus` = 1 AND `no`='a8'" ;
$resulta8 = @mysql_query($querya8);
$displaya8 = mysql_num_rows($resulta8);
$disablea8 = $displaya8 ? 'disabled="disabled"':'';

$querya9 = "SELECT * FROM rockon_2 WHERE `seatstatus` = 1 AND `no`='a9'" ;
$resulta9 = @mysql_query($querya9);
$displaya9 = mysql_num_rows($resulta9);
$disablea9 = $displaya9 ? 'disabled="disabled"':'';

$querya10 = "SELECT * FROM rockon_2 WHERE `seatstatus` = 1 AND `no`='a10'" ;
$resulta10 = @mysql_query($querya10);
$displaya10 = mysql_num_rows($resulta10);
$disablea10 = $displaya10 ? 'disabled="disabled"':'';