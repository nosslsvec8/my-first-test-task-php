<?php 

	// вывод товаров с базы
function for_goods(){

	$numder_goods = 0;
	$strSQL_goods = "select * from `goods`";
	$rs_goods = mysql_query($strSQL_goods);
	$tel = "tel";

	while($row_goods = mysql_fetch_array($rs_goods)){

		$item_goods = $row_goods['id'] + 1;
		$href_goods = $tel .  '_' .  $item_goods;

		if($numder_goods){	//четный товар
			echo'
			<section id="' . $href_goods .'" class="tel_phone">
				<div class="tel_left">
					<img src="images/tel_2.png" alt="Мобильники">
				</div>
				<div class="tel_right">
					<h2>' . $row_goods['name'] . '</h2>
					<div class="tel_text">
						<p>Камера - 8 мп</p>
						<p>Встроеннная память - ' . $row_goods['type'] . '</p>
						<p>Дата завоза - ' .  $row_goods['date_of_income'] . '</p>	
						<p>Цена - <span class="iphone_price">' .  $row_goods['price'] . '</span>$</p>
					</div>
					<div class="tel_link"><a href="">Подробнее</a></div>
					<div class="tel_text_window tel_window_2">
					<p class="tel_link_close"><img src="images/close_icon.png" alt=""></p>
					<h2>' . $row_goods['name'] . '</h2>
					<div class="tel_text">
						<p>На складе- ' .  $row_goods['amount'] . ' шт</p>	
						<p>Цена - ' .  $row_goods['price'] . '$</p>
						<p>Подробно: ' .  $row_goods['about'] . '</p>	
					</div>	
				</div>
					<span class="btn_add" id="' .  $numder_goods . '"><a href="">Добавить в корзину</a></span>
				</div>
				<div class="clearfix"></div>
			</section>
			';
		}
	$numder_goods++;
	}

}


 ?>