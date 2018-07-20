<?php

//  Cчетчик посещения страницы отдельным пользователем за год
// для админки

$count_visit = isset($_COOKIE['count_visit']) ? (int)$_COOKIE['count_visit'] : 0;
$count_visit++;
setcookie('count_visit', $count_visit, time() + 60 * 60 * 24 * 366, '/');


// запоминание уникального учасника
// if(isset($id_acc)){

// }
// else{
// 	$id_acc = 0;
		
// 	$strSQL_id_acc = "select * from `analitics`";
// 	$rs_id_acc = mysql_query($strSQL_id_acc);

// 	while($row_analitics_last = mysql_fetch_array($rs_analitics_last)){
// 		$id_acc = $row_analitics_last['analitics_id'] + 1;
// 	}
// }




// setcookie('id_acc', $id_acc, time() + 60 * 60 * 24 * 366, '/');

?>

<!-- <h1 style="	padding-top: 70px;"> Hello! You visited this page <?=$count_visit; ?> times. </h1> -->