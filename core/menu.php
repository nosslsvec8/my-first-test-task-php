<?php 

		// Вывод меню
function menu(){

	$strSQL_menu = "select * from `goods`";
	$rs_menu = mysql_query($strSQL_menu);
	$tel = "tel";

	while($row_menu = mysql_fetch_array($rs_menu)){

		$item_menu = $row_menu['id'] + 1;
		$href_menu = "#" . $tel .  '_' .  $item_menu;

		echo'<li> <a href=' . '"' . $href_menu . '" data-target="anchor">' . ' ' .$row_menu['name']. ' ' . '</a></li>';
	}
}
 ?>