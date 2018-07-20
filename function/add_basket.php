<?php 	

	include_once "../core/connect_BD.php";

	$modal_sum = 0;
	$modal_all_sum = 0;
	$devices = 1;

	// проверка на число
	 if (is_numeric($_POST['text2'])) {

	 	$strSQL_add_phone = "SELECT * FROM `goods` WHERE goods_id = " . $_POST['text2'];
		$rs_add_phone = mysql_query($strSQL_add_phone);

		while($row_add_phone = mysql_fetch_array($rs_add_phone)){

			echo'<ul class="korz_content korz" id="id_phone' . $_POST['text2'] . '">'.
        	'<li>' . $row_add_phone['name'] . '</li>'.
        	'<li class="sum">' . $devices . '</li>'.
        	'<li>' . $row_add_phone['amount'] . '</li>'.
        	'<li>&#8212;</li>'.
        	'<li>
				<div class="btn_send">
	      		 		<button class="btn btn_plus" name="plus"></button>
	      		 		<button class="btn btn_minus" name="minus"></button>
	      		 		<button class="btn btn_del" name="delete"></button>
	      		 </div>
	      		 			
      		 </li>'.
        	'<li class="cash"><span class="money_cash">';

        	$modal_sum = $row_add_phone['amount'] * $devices;

        	echo $modal_sum . '</span></li>'.
        	'</ul>';

        	$modal_all_sum = $modal_all_sum + $modal_sum;

        }



	}

	// echo'
 //         </div>

 //   		<div class="korz_pay">
 //   			<p class="full_sum">
 //   				<span style="float:left;"></span>
 //   				<span class="quantity">1шт.</span>
 //   				<span class="text">на сумму:</span>
 //   				<span class="money">' . $modal_all_sum . '</span><span class="money_hr">$</span>
 //   			</p>
 //   			<a href="oplata.html"> <input type="submit" value="Оплатить" name="sub_btn" class="sub" id="sub"></a>
 //   		</div>

 //   		<div class="korz_close_window"></div>
 //   </div>
	// ';

	
	// echo $_POST['text2'];
	

 ?>