<?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
$selected = mysql_select_db("rock_on",$con);


// row A
$querya1 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='a1'" ;
$resulta1 = @mysql_query($querya1);
$displaya1 = mysql_num_rows($resulta1);
$disablea1 = $displaya1 ? 'disabled="disabled"':'';

$querya2 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='a2'" ;
$resulta2 = @mysql_query($querya2);
$displaya2 = mysql_num_rows($resulta2);
$disablea2 = $displaya2 ? 'disabled="disabled"':'';

$querya3 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='a3'" ;
$resulta3 = @mysql_query($querya3);
$displaya3 = mysql_num_rows($resulta3);
$disablea3 = $displaya3 ? 'disabled="disabled"':'';

$querya4 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='a4'" ;
$resulta4 = @mysql_query($querya4);
$displaya4 = mysql_num_rows($resulta4);
$disablea4 = $displaya4 ? 'disabled="disabled"':'';

$querya5 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='a5'" ;
$resulta5 = @mysql_query($querya5);
$displaya5 = mysql_num_rows($resulta5);
$disablea5 = $displaya5 ? 'disabled="disabled"':'';

$querya6 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='a6'" ;
$resulta6 = @mysql_query($querya6);
$displaya6 = mysql_num_rows($resulta6);
$disablea6 = $displaya6 ? 'disabled="disabled"':'';

$querya7 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='a7'" ;
$resulta7 = @mysql_query($querya7);
$displaya7 = mysql_num_rows($resulta7);
$disablea7 = $displaya7 ? 'disabled="disabled"':'';

$querya8 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='a8'" ;
$resulta8 = @mysql_query($querya8);
$displaya8 = mysql_num_rows($resulta8);
$disablea8 = $displaya8 ? 'disabled="disabled"':'';

$querya9 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='a9'" ;
$resulta9 = @mysql_query($querya9);
$displaya9 = mysql_num_rows($resulta9);
$disablea9 = $displaya9 ? 'disabled="disabled"':'';

$querya10 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='a10'" ;
$resulta10 = @mysql_query($querya10);
$displaya10 = mysql_num_rows($resulta10);
$disablea10 = $displaya10 ? 'disabled="disabled"':'';

//row B
$queryb1 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='b1'" ;
$resultb1 = @mysql_query($queryb1);
$displayb1 = mysql_num_rows($resultb1);
$disableb1 = $displayb1 ? 'disabled="disabled"':'';

$queryb2 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='b2'" ;
$resultb2 = @mysql_query($queryb2);
$displayb2 = mysql_num_rows($resultb2);
$disableb2 = $displayb2 ? 'disabled="disabled"':'';

$queryb3 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='b3'" ;
$resultb3 = @mysql_query($queryb3);
$displayb3 = mysql_num_rows($resultb3);
$disableb3 = $displayb3 ? 'disabled="disabled"':'';

$queryb4 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='b4'" ;
$resultb4 = @mysql_query($queryb4);
$displayb4 = mysql_num_rows($resultb4);
$disableb4 = $displayb4 ? 'disabled="disabled"':'';

$queryb5 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='b5'" ;
$resultb5 = @mysql_query($queryb5);
$displayb5 = mysql_num_rows($resultb5);
$disableb5 = $displayb5 ? 'disabled="disabled"':'';

$queryb6 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='b6'" ;
$resultb6 = @mysql_query($queryb6);
$displayb6 = mysql_num_rows($resultb6);
$disableb6 = $displayb6 ? 'disabled="disabled"':'';

$queryb7 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='b7'" ;
$resultb7 = @mysql_query($queryb7);
$displayb7 = mysql_num_rows($resultb7);
$disableb7 = $displayb7 ? 'disabled="disabled"':'';

$queryb8 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='b8'" ;
$resultb8 = @mysql_query($queryb8);
$displayb8 = mysql_num_rows($resultb8);
$disableb8 = $displayb8 ? 'disabled="disabled"':'';

$queryb9 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='b9'" ;
$resultb9 = @mysql_query($queryb9);
$displayb9 = mysql_num_rows($resultb9);
$disableb9 = $displayb9 ? 'disabled="disabled"':'';

$queryb10 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='b10'" ;
$resultb10 = @mysql_query($queryb10);
$displayb10 = mysql_num_rows($resultb10);
$disableb10 = $displayb10 ? 'disabled="disabled"':'';

//row C
$queryc1 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='c1'" ;
$resultc1 = @mysql_query($queryc1);
$displayc1 = mysql_num_rows($resultc1);
$disablec1 = $displayc1 ? 'disabled="disabled"':'';

$queryc2 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='c2'" ;
$resultc2 = @mysql_query($queryc2);
$displayc2 = mysql_num_rows($resultc2);
$disablec2 = $displayc2 ? 'disabled="disabled"':'';

$queryc3 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='c3'" ;
$resultc3 = @mysql_query($queryc3);
$displayc3 = mysql_num_rows($resultc3);
$disablec3 = $displayc3 ? 'disabled="disabled"':'';

$queryc4 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='c4'" ;
$resultc4 = @mysql_query($queryc4);
$displayc4 = mysql_num_rows($resultc4);
$disablec4 = $displayc4 ? 'disabled="disabled"':'';

$queryc5 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='c5'" ;
$resultc5 = @mysql_query($queryc5);
$displayc5 = mysql_num_rows($resultc5);
$disablec5 = $displayc5 ? 'disabled="disabled"':'';

$queryc6 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='c6'" ;
$resultc6 = @mysql_query($queryc6);
$displayc6 = mysql_num_rows($resultc6);
$disablec6 = $displayc6 ? 'disabled="disabled"':'';

$queryc7 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='c7'" ;
$resultc7 = @mysql_query($queryc7);
$displayc7 = mysql_num_rows($resultc7);
$disablec7 = $displayc7 ? 'disabled="disabled"':'';

$queryc8 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='c8'" ;
$resultc8 = @mysql_query($queryc8);
$displayc8 = mysql_num_rows($resultc8);
$disablec8 = $displayc8 ? 'disabled="disabled"':'';

$queryc9 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='c9'" ;
$resultc9 = @mysql_query($queryc9);
$displayc9 = mysql_num_rows($resultc9);
$disablec9 = $displayc9 ? 'disabled="disabled"':'';

$queryc10 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='c10'" ;
$resultc10 = @mysql_query($queryc10);
$displayc10 = mysql_num_rows($resultc10);
$disablec10 = $displayc10 ? 'disabled="disabled"':'';

//row D
$queryd1 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='d1'" ;
$resultd1 = @mysql_query($queryd1);
$displayd1 = mysql_num_rows($resultd1);
$disabled1 = $displayd1 ? 'disabled="disabled"':'';

$queryd2 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='d2'" ;
$resultd2 = @mysql_query($queryd2);
$displayd2 = mysql_num_rows($resultd2);
$disabled2 = $displayd2 ? 'disabled="disabled"':'';

$queryd3 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='d3'" ;
$resultd3 = @mysql_query($queryd3);
$displayd3 = mysql_num_rows($resultd3);
$disabled3 = $displayd3 ? 'disabled="disabled"':'';

$queryd4 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='d4'" ;
$resultd4 = @mysql_query($queryb4);
$displayd4 = mysql_num_rows($resultb4);
$disabled4 = $displayb4 ? 'disabled="disabled"':'';

$queryd5 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='d5'" ;
$resultd5 = @mysql_query($queryd5);
$displayd5 = mysql_num_rows($resultd5);
$disabled5 = $displayd5 ? 'disabled="disabled"':'';

$queryd6 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='d6'" ;
$resultd6 = @mysql_query($queryd6);
$displayd6 = mysql_num_rows($resultd6);
$disabled6 = $displayd6 ? 'disabled="disabled"':'';

$queryd7 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='d7'" ;
$resultd7 = @mysql_query($queryd7);
$displayd7 = mysql_num_rows($resultd7);
$disabled7 = $displayd7 ? 'disabled="disabled"':'';

$queryd8 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='d8'" ;
$resultd8 = @mysql_query($queryd8);
$displayd8 = mysql_num_rows($resultd8);
$disabled8 = $displayd8 ? 'disabled="disabled"':'';

$queryd9 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='d9'" ;
$resultd9 = @mysql_query($queryd9);
$displayd9 = mysql_num_rows($resultd9);
$disabled9 = $displayd9 ? 'disabled="disabled"':'';

$queryd10 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='d10'" ;
$resultd10 = @mysql_query($queryd10);
$displayd10 = mysql_num_rows($resultd10);
$disabled10 = $displayd10 ? 'disabled="disabled"':'';

//row E
$querye1 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='e1'" ;
$resulte1 = @mysql_query($querye1);
$displaye1 = mysql_num_rows($resulte1);
$disablee1 = $displaye1 ? 'disabled="disabled"':'';

$querye2 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='e2'" ;
$resulte2 = @mysql_query($querye2);
$displaye2 = mysql_num_rows($resulte2);
$disablee2 = $displaye2 ? 'disabled="disabled"':'';

$querye3 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='e3'" ;
$resulte3 = @mysql_query($querye3);
$displaye3 = mysql_num_rows($resulte3);
$disablee3 = $displaye3 ? 'disabled="disabled"':'';

$querye4 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='e4'" ;
$resulte4 = @mysql_query($querye4);
$displaye4 = mysql_num_rows($resulte4);
$disablee4 = $displaye4 ? 'disabled="disabled"':'';

$querye5 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='e5'" ;
$resulte5 = @mysql_query($querye5);
$displaye5 = mysql_num_rows($resulte5);
$disablee5 = $displaye5 ? 'disabled="disabled"':'';

$querye6 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='e6'" ;
$resulte6 = @mysql_query($querye6);
$displaye6 = mysql_num_rows($resulte6);
$disablee6 = $displaye6 ? 'disabled="disabled"':'';

$querye7 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='e7'" ;
$resulte7 = @mysql_query($querye7);
$displaye7 = mysql_num_rows($resulte7);
$disablee7 = $displaye7 ? 'disabled="disabled"':'';

$querye8 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='e8'" ;
$resulte8 = @mysql_query($querye8);
$displaye8 = mysql_num_rows($resulte8);
$disablee8 = $displaye8 ? 'disabled="disabled"':'';

$querye9 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='e9'" ;
$resulte9 = @mysql_query($querye9);
$displaye9 = mysql_num_rows($resulte9);
$disablee9 = $displaye9 ? 'disabled="disabled"':'';

$querye10 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='e10'" ;
$resulte10 = @mysql_query($querye10);
$displaye10 = mysql_num_rows($resulte10);
$disablee10 = $displaye10 ? 'disabled="disabled"':'';

//row F
$queryf1 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='f1'" ;
$resultf1 = @mysql_query($queryf1);
$displayf1 = mysql_num_rows($resultf1);
$disablef1 = $displayf1 ? 'disabled="disabled"':'';

$queryf2 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='f2'" ;
$resultf2 = @mysql_query($queryf2);
$displayf2 = mysql_num_rows($resultf2);
$disablef2 = $displayf2 ? 'disabled="disabled"':'';

$queryf3 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='f3'" ;
$resultf3 = @mysql_query($queryf3);
$displayf3 = mysql_num_rows($resultf3);
$disablef3 = $displayf3 ? 'disabled="disabled"':'';

$queryf4 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='f4'" ;
$resultf4 = @mysql_query($queryf4);
$displayf4 = mysql_num_rows($resultf4);
$disablef4 = $displayf4 ? 'disabled="disabled"':'';

$queryf5 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='f5'" ;
$resultf5 = @mysql_query($queryf5);
$displayf5 = mysql_num_rows($resultf5);
$disablef5 = $displayf5 ? 'disabled="disabled"':'';

$queryf6 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='f6'" ;
$resultf6 = @mysql_query($queryf6);
$displayf6 = mysql_num_rows($resultf6);
$disablef6 = $displayf6 ? 'disabled="disabled"':'';

$queryf7 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='f7'" ;
$resultf7 = @mysql_query($queryf7);
$displayf7 = mysql_num_rows($resultf7);
$disablef7 = $displayf7 ? 'disabled="disabled"':'';

$queryf8 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='f8'" ;
$resultf8 = @mysql_query($queryf8);
$displayf8 = mysql_num_rows($resultf8);
$disablef8 = $displayf8 ? 'disabled="disabled"':'';

$queryf9 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='f9'" ;
$resultf9 = @mysql_query($queryf9);
$displayf9 = mysql_num_rows($resultf9);
$disablef9 = $displayf9 ? 'disabled="disabled"':'';

$queryf10 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='f10'" ;
$resultf10 = @mysql_query($queryf10);
$displayf10 = mysql_num_rows($resultf10);
$disablef10 = $displayf10 ? 'disabled="disabled"':'';

//row G
$queryg1 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='g1'" ;
$resultg1 = @mysql_query($queryg1);
$displayg1 = mysql_num_rows($resultg1);
$disableg1 = $displayg1 ? 'disabled="disabled"':'';

$queryg2 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='g2'" ;
$resultg2 = @mysql_query($queryg2);
$displayg2 = mysql_num_rows($resultg2);
$disableg2 = $displayg2 ? 'disabled="disabled"':'';

$queryg3 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='g3'" ;
$resultg3 = @mysql_query($queryg3);
$displayg3 = mysql_num_rows($resultg3);
$disableg3 = $displayg3 ? 'disabled="disabled"':'';

$queryg4 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='g4'" ;
$resultg4 = @mysql_query($queryg4);
$displayg4 = mysql_num_rows($resultg4);
$disableg4 = $displayg4 ? 'disabled="disabled"':'';

$queryg5 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='g5'" ;
$resultg5 = @mysql_query($queryg5);
$displayg5 = mysql_num_rows($resultg5);
$disableg5 = $displayg5 ? 'disabled="disabled"':'';

$queryg6 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='g6'" ;
$resultg6 = @mysql_query($queryg6);
$displayg6 = mysql_num_rows($resultg6);
$disableg6 = $displayg6 ? 'disabled="disabled"':'';

$queryg7 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='g7'" ;
$resultg7 = @mysql_query($queryg7);
$displayg7 = mysql_num_rows($resultg7);
$disableg7 = $displayg7 ? 'disabled="disabled"':'';

$queryg8 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='g8'" ;
$resultg8 = @mysql_query($queryg8);
$displayg8 = mysql_num_rows($resultg8);
$disableg8 = $displayg8 ? 'disabled="disabled"':'';

$queryg9 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='g9'" ;
$resultg9 = @mysql_query($queryg9);
$displayg9 = mysql_num_rows($resultg9);
$disableg9 = $displayg9 ? 'disabled="disabled"':'';

$queryg10 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='g10'" ;
$resultg10 = @mysql_query($queryg10);
$displayg10 = mysql_num_rows($resultg10);
$disableg10 = $displayg10 ? 'disabled="disabled"':'';

//row H
$queryh1 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='h1'" ;
$resulth1 = @mysql_query($queryh1);
$displayh1 = mysql_num_rows($resulth1);
$disableh1 = $displayh1 ? 'disabled="disabled"':'';

$queryh2 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='h2'" ;
$resulth2 = @mysql_query($queryh2);
$displayh2 = mysql_num_rows($resulth2);
$disableh2 = $displayh2 ? 'disabled="disabled"':'';

$queryh3 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='h3'" ;
$resulth3 = @mysql_query($queryh3);
$displayh3 = mysql_num_rows($resulth3);
$disableh3 = $displayh3 ? 'disabled="disabled"':'';

$queryh4 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='h4'" ;
$resulth4 = @mysql_query($queryh4);
$displayh4 = mysql_num_rows($resulth4);
$disableh4 = $displayh4 ? 'disabled="disabled"':'';

$queryh5 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='h5'" ;
$resulth5 = @mysql_query($queryh5);
$displayh5 = mysql_num_rows($resulth5);
$disableh5 = $displayh5 ? 'disabled="disabled"':'';

$queryh6 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='h6'" ;
$resulth6 = @mysql_query($queryh6);
$displayh6 = mysql_num_rows($resulth6);
$disableh6 = $displayh6 ? 'disabled="disabled"':'';

$queryh7 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='h7'" ;
$resulth7 = @mysql_query($queryh7);
$displayh7 = mysql_num_rows($resulth7);
$disableh7 = $displayh7 ? 'disabled="disabled"':'';

$queryh8 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='h8'" ;
$resulth8 = @mysql_query($queryh8);
$displayh8 = mysql_num_rows($resulth8);
$disableh8 = $displayh8 ? 'disabled="disabled"':'';

$queryh9 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='h9'" ;
$resulth9 = @mysql_query($queryh9);
$displayh9 = mysql_num_rows($resulth9);
$disableh9 = $displayh9 ? 'disabled="disabled"':'';

$queryh10 = "SELECT * FROM cinemax_1 WHERE `seatstatus` = 1 AND `no`='h10'" ;
$resulth10 = @mysql_query($queryh10);
$displayh10 = mysql_num_rows($resulth10);
$disableh10 = $displayh10 ? 'disabled="disabled"':'';

mysql_close($con);

?>