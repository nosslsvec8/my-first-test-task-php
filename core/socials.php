<?php 	

	// Вывод ссылок с базы
	function link_Facebook(){
		$strSQL_linc_Facebook = "SELECT * FROM `settings` WHERE id = 1";
		$rs_linc_Facebook = mysql_query($strSQL_linc_Facebook);

		while($row_linc_Facebook = mysql_fetch_array($rs_linc_Facebook)){

				return $row_linc_Facebook['value'];
		}
	}

	function link_Instagram(){
		$strSQL_linc_Instagram = "SELECT * FROM `settings` WHERE id = 2";
		$rs_linc_Instagram = mysql_query($strSQL_linc_Instagram);

		while($row_linc_Instagram = mysql_fetch_array($rs_linc_Instagram)){

				return $row_linc_Instagram['value'];
		}
	}

	function link_phone1(){
		$strSQL_linc_phone1 = "SELECT * FROM `settings` WHERE id = 3";
		$rs_linc_phone1 = mysql_query($strSQL_linc_phone1);

		while($row_linc_phone1 = mysql_fetch_array($rs_linc_phone1)){

				return $row_linc_phone1['value'];
		}
	}

	function link_phone2(){
		$strSQL_link_phone2 = "SELECT * FROM `settings` WHERE id = 4";
		$rs_link_phone2 = mysql_query($strSQL_link_phone2);

		while($row_link_phone2 = mysql_fetch_array($rs_link_phone2)){

				return $row_link_phone2['value'];
		}
	}

 ?>