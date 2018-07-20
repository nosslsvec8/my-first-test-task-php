<?php 	

	include_once "../core/connect_BD.php";

	// аналитика

		// Узнаем нужный id для нового поля
		$strSQL_analitics_last = "select * from `analitics`";
		$rs_analitics_last = mysql_query($strSQL_analitics_last);
		$last_id_analitics = 1;

		while($row_analitics_last = mysql_fetch_array($rs_analitics_last)){
			$last_id_analitics = $row_analitics_last['id'] + 1;
		}

		$all_button = $_POST['buttons'];
		$all_seconds = $_POST['seconds'];
		$current_date = date("Y/m/d");

		echo $_POST['seconds']. ' ' . $_POST['buttons'];
		$strSQL_analitics = "INSERT INTO `analitics`(`id`, `all_button`, `all_seconds`, `date_of_income`) VALUES ( " . $last_id_analitics . ", " . $all_button . ", " . $all_seconds . ", " . $current_date . ")";
		$rs_analitics = mysql_query($strSQL_analitics);

		// echo $strSQL_analitics;
	

 ?>