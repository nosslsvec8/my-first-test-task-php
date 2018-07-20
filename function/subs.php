<?php 	

	include_once "../core/connect_BD.php";

	// подписчики
	$emale = $_POST['text'];
	$validate = 0;

	// проверка корректности email
	if(filter_var ($emale, FILTER_VALIDATE_EMAIL) == true){

		$strSQL_subs_valid = "select * from `subs` where `email` = '" . 	$emale . "'";
		$rs_subs_valid = mysql_query($strSQL_subs_valid);
		while($row_sub_valid = mysql_fetch_array($rs_subs_valid)){

			if($emale == $row_sub_valid['email']){
				$validate = 1; 
				echo "Вы уже подписаны";
			}
		}

		// Узнаем нужный id для нового поля
		$strSQL_subs_last = "select * from `subs`";
		$rs_subs_last = mysql_query($strSQL_subs_last);
		$last_id_sub = 1;
		$current_date = date("Y/m/d");

		while($row_sub_last = mysql_fetch_array($rs_subs_last)){
			$last_id_sub = $row_sub_last['id'] + 1;
		}

		// Запись в БД
		$strSQL_subs = "INSERT INTO `subs`(`id`, `email`, `date_of_income`) VALUES ( " . $last_id_sub . ", '" . $emale . "' , '" . $current_date . "')";
		$rs_subs = mysql_query($strSQL_subs);

		if($validate == 0){
			echo "Вы успешно подписались";
		}	

	}
	else{
			echo"Не корректный email";
	}
 ?>