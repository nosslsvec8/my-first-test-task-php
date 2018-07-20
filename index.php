<?php 
include_once "core/start.php";
?> 
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RedBox</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/media.css">
    <link rel="stylesheet" href="style/media_modal.css">
    <link href="style/toastr.css" rel="stylesheet"/>


</head>
<body>

<section id="topmenu">
    <div class="menu">
        <div class="logo"><h1><a href="#slider" data-target="anchor">RedShop</a></h1></div>
        <div class="korzina"><div class="korzina_top"><span class="korzina_top_items">3</span></div></div>
        <div class="spisok"><div class="items_list"></div></div>
        <nav class="nav_menu">
            <ul class="top-menu">
                <!-- Цикл вывода товаров, Меню, с базы -->
                <?php menu(); ?>
            </ul>
        </nav>
   </div>

    <div class="clearfix"></div>
</section>
<div class="modal_window" id="modal">
    <div class="korzina_tovarov">
        <h2 class="zakaz_title">Ваши заказы</h2>
        <ul class="korz_title korz">
            <li>Название</li>
            <li>Кол-во</li>
            <li>Цена</li>
            <li>Скидка</li>
            <li>Скидка</li>
            <li>Итого</li>
        </ul>

         <div class="korzina_scroll">
            <div class="after_el"></div>
         </div>

        <div class="korz_pay">
            <p class="full_sum">
                <span class="quantity">1</span>шт.
                <span class="text">на сумму:</span>
                <span class="money">4000</span><span class="money_hr">грн.</span>
            </p>
            <a href="oplata.html"> <input type="submit" value="Оплатить" name="sub_btn" class="sub" id="sub"></a>
        </div>

        <div class="korz_close_window"></div>
   </div>
</div>

<section id="slider"> 
    <div class="header">
        <h1> Качественные товары по низкой цене от</h1>
        <h2> RedShop</h2>
        <h3> прокрути чтобы узнать больше</h3>
    </div>
    <div class="mouse_red"></div>
</section>

<!-- Цикл вывода телефонов -->
<?php for_goods(); ?> 

<section class="subscribe">
	<div class="subscribe-content">
		<h2>Подпишитесь на обновление товаров</h2>
		<form method="post" >
			<input class="subscribe_text" type="email" name="subscribe_text" placeholder="Введите ваш e_mail">
			<button class="subscribe_btn" >Подписаться</button>
		</form>
	</div>
</section>

<section class="footer">
	<p class="social">
		<span><a class="social_link" style="text-decoration: none; color: #753D3D;" <?php echo 'href=' . '"' . link_Facebook() . '"'; ?>>Facebook</a></span>
        <span><a class="social_link" style="text-decoration: none; color: #753D3D;" <?php echo 'href=' . '"' . link_Instagram() . '"'; ?>>Instagram</a></span>
	</p>
	<p class="phone">
		<span><a class="social_link" style="text-decoration: none; color: #753D3D;"></a><?php echo link_phone1(); ?></span>
		<span><a class="social_link" style="text-decoration: none; color: #753D3D;"></a><?php echo link_phone2(); ?></span>		
	</p>
	<p class="redbox">
		<span>Created by Redbox</span>
	</p>	
</section>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script>
<script src="js/toastr.js"></script>


<script>
    // Корзина
    $('document').ready(function(){
        let index = 0;

        $('.btn_add').on('click', function(event){
            event.preventDefault();
            index++;
            $('.korzina_top_items').show();
            $('.korzina_top_items').text(index);
            // $('.korzina_scroll').append( $('.test').show() );

        });

         function addQuantity (){
                let full_quantity = $('.quantity');
                let full_total = $('.money');

            
                let allQuantity = 0;
                $('.sum').each(function(){

                    let itemQuantity = parseInt( $(this).text() );
                    allQuantity = allQuantity + itemQuantity; 
                });
                full_quantity.text( allQuantity );


                let allSum = 0;
                $('.money_cash').each(function(){
                    
                    let itemSum = parseInt( $(this).text() );
                    allSum = allSum + itemSum; 
                });
                full_total.text( allSum );
        }
        
        
        $('span.btn_add').on('click', function(){   
            event.preventDefault();
            
            let tel_title = $(this).parent().find('.iphone_tel_title').text();

            console.log();

            // console.log(tel_title);

            let tel_price = parseInt( $(this).parent().find('.iphone_price').text() );
            
            $('.after_el').after( '<ul class="korz_content korz"><li class="iphone_title">' + tel_title + '</li><li class="sum">1</li><li>$<span class="price">' + tel_price + '</span></li><li>&#8212;</li><li><div class="btn_send"><button class="btn btn_plus"></button><button class="btn btn_minus"></button><button class="btn btn_del"></button></div></li><li class="cash">$<span class="money_cash">' + tel_price + '</span></li></ul>' );
                    
            addQuantity();
            });


        $('a[data-target*=anchor]').on('click', function(){
            var target = $(this).attr('href');
            var bl_top = $(target).offset().top - 170;
        $('body, html').animate({scrollTop: bl_top}, 700);
        return false;
        })

        $('.items_list').on('click', function(){
            $(".nav_menu .top-menu").toggleClass('topmenu_hide');
        });

        $('.korzina_top').on('click', function(){
            $('.korzina_tovarov').show();
        })

        $('.korz_close_window').on('click', function(){
            $('.korzina_tovarov').hide();   
        });

        $('.tel_link').on('click', function(event){
            event.preventDefault();
            $(this).parent().find('.tel_text_window').show();
        })

        $('.tel_link_close').on('click', function(){
            $(this).closest('section').find('.tel_text_window').hide(); 
        });
        


        $('.korzina_scroll').on('click', '.btn_plus', function(){           
            let full_kol_vo = $(this).closest('ul').find('.sum');
            let full_cash = $(this).closest('ul').find('.money_cash');

            let tel_price = parseInt( $(this).parent().find('.iphone_price').text() );
            
            let kol_vo = parseInt( $(this).closest('ul').find('.sum').text() );
            let price = parseInt( $(this).closest('ul').find('.price').text() );

            kol_vo = kol_vo + 1;
            full_kol_vo.text( kol_vo );

            let cash = Number(kol_vo * price);
            full_cash.text( cash );

            addQuantity();


        });

        $('.korzina_scroll').on('click', '.btn_minus', function(){  
            let full_kol_vo = $(this).closest('ul').find('.sum');
            let full_cash = $(this).closest('ul').find('.money_cash');
            let full_quantity = $('.quantity');
            let full_total = $('.money');


            let kol_vo = parseInt( $(this).closest('ul').find('.sum').text() );
            let cash = parseInt( $(this).closest('ul').find('.money_cash').text() );
            let quantity = parseInt( $('.quantity').text() );
            let total = parseInt( $('.money').text() );
            let price = parseInt( $(this).closest('ul').find('.price').text() );


            if( kol_vo > 1 ){

                kol_vo = kol_vo - 1;
                full_kol_vo.text( kol_vo );
                cash = cash - price;
                full_cash.text( cash );
                quantity = quantity - 1;
                full_quantity.text( quantity );
                total = total - price;
                full_total.text( total );
            }

        });

        $('.korzina_scroll').on('click', '.btn_del', function(){    
            $(this).closest('ul').remove(); 
                index--;
                let itemQuantity = $('.korzina_top_items');
                itemQuantity.text(index);

                let totalQuantity = parseInt( $('.korzina_top_items').text() );

                if(totalQuantity < 1){ $('.korzina_top_items').hide(); }

                addQuantity();
        });

    });
</script>

<script>
    // счетчик сумы кол-во нажатий на "подробнее" и "Добавить в корзину"
    $(document).ready(function () {
        counter_buttons = 0;
        $('.btn_add').click(function () {
            counter_buttons++;
        });
         $('.tel_link').click(function () {
            counter_buttons++;
        });

    //Таймер аналитики с автозапуском, каждые 3 сек.
    // Пере и перезаписываем в базу
        sec = 0;
        setInterval(tick, 1000 * 5);

        function tick(){
            sec = sec + 5;
            var sec2 = sec;

            $.ajax({
                type: "POST",
                url: "function/analitics.php",
                data:  {seconds: sec2, buttons: counter_buttons},
                success: function(html){
                    // console.log(html);
                }
            });
        }
    });
</script>

<script>

    //подписка 
    $(document).ready(function() {
        $('.subscribe_btn').click(function(e){
            e.preventDefault();
            var subscribeValue = $(".subscribe_text").val();

            // проверка на пустое поле
            if($(".subscribe_text").val() == ""){
                $(".subscribe_text").css('border', '6px solid #753D3D');
                toastr.error("Заполните поле для email");
            }
            // остальные случаи
            else{
                $.ajax({
                    type: "POST",
                    url: "function/subs.php",
                    data: {text: subscribeValue},
                    success: function(html)
                    {

                        console.log(html.status);

                        if(html == "Вы успешно подписались"){ toastr.success(html);}

                        if(html == "Не корректный email"){ toastr.error(html);}
                        if(html == "Вы уже подписаны"){ toastr.info(html);}
                    }
                });
            }
        });
    });
</script>
<script>

    //счетчик корзины 
// $(document).ready(function() {
//     $('.btn_add').click(function(e){
//         e.preventDefault();
//         var phoneValue = $("#korzina_top").text();
//         $.ajax({
//             type: "POST",
//             url: "function/counter_basket.php",
//             data: {text: phoneValue},
//             success: function(html)
//             {
//                 $("#korzina_top").html(html);
//                 // alert(html);
//             }
//         });
//     });

     //добавление телефона в корзину, кнопка "Добавить в корзину"
    // $('.btn_add').click(function(e){
    //     e.preventDefault();
    //     var id_phone = $(this).attr("id");
    //     $.ajax({
    //         type: "POST",
    //         url: "function/add_basket.php",
    //         data: {text2: id_phone},
    //         success: function(html)
    //         {
    //             $(".korzina_scroll").append(html);            
    //         }
    //     });
    // });

        // сортировка корзины
    // $('#korzina_top').click(function(){
    //     let sort_phone = 0;
    // });    
    // $('.btn_plus').on('click', function(){          
    //         i = i + 1;
    //         $(this).closest('ul').find('.sum').text(i);
            
    //     });
// });
</script>

</body>
</html>