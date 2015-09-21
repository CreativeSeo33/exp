<?php $root='../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?> 

<article>
   <div class="container">
        <h1>Декоративная отделка</h1>
		<p>
Декоративная отделка стен придаст Вашему интерьеру красоту и изящество, подчеркнёт статус и
вкус владельца. Профессионально выполненная, мастерами своего дела, работа сделает 
неповторимой и роскошной внутреннюю отделку дома, квартиры или офиса. Отделка прихожей 
или кухни приобретёт изюминку и статусный вид.
		</p><p>
Мы профессионально занимаемся дизайнерской отделкой помещений во Владимире и
Владимирской области уже более 10 лет и за это время наработали богатое портфолио и 
приобрели бесценный опыт. Наша бригада состоит из четырёх человек, каждый увлечённый 
профессионал своего дела.  Средний возраст мастеров 33 года. К каждой работе мы относимся 
как к художественному произведению и качественно и скрупулёзно прорабатывая каждую 
мелочь. В работе мы используем только качественные и проверенные отделочные материалы. 
Выполняем отделку любой сложности под ключ. 
		</p><p>
Мы уверены в высоком качестве выполняемых нами работ, поэтому готовы выполнить любую из 
представленных на фото в портфолио работ в качестве образца в присутствии заказчика или его 
доверенного лица.
		</p><p>
Готовы реализовать самые смелые идеи заказчика по оформлению интерьеров. В нашу 
специализацию входят такие услуги как:
		</p><ul>
		<li>Резьба по штукатурке;</li>
		<li>Имитация камня;</li>
		<li>Услуги по декоративной отделке стен;</li>
		<li>Фрески и другие художественно-оформительские работы;</li>
		<li>Венецианская штукатурка;</li>
		<li>Отделка декоративным камнем;</li>
		<li>Услуги по золочению и патинированию;</li>
		<li>Резьба по штукатурке;</li>
		<li>Картины по штукатурке;</li>
		<li>Обои по штукатурке;</li>
		<li>Составление дизайн проектов;</li>
		<li>Составление смет;</li>
		<li>Консультация по подбору материалов;</li>
		<li>Отделочные и общестроительные работы любой сложности;</li>
		<li>Художественная кладка печей, барбекю и каминов.</li>
		</ul><p>
<h2 align="center">Форма оплаты.</h2>
		</p><p>
Оплату принимаем наличные в рублях. После 7 дней работы на объекте – аванс 20% от суммы. 
При выполнении еще 30% объема – аванс 30% от суммы. Остаток 50% после окончания и сдачи 
объекта. Питание – из расчета 140 рублей в день на человека.
		</p><p>
Одним из приоритетов в нашей работе является открытость в отношении ценообразования. 
Каждый наш клиент в праве знать сколько и за что он платит, поэтому предоставляем заказчику 
детальную смету, в которой чётко расписано на что потрачен каждый рубль.
		</p><p>
<a href="javascript:void(0);">Скачать прайс-лист на услуги.</a>
		</p><p>
<h2 align="center">Портфолио и цены.</h2>
		</p>
   </div><!-- container -->
</article>

<div class="container">
		<div class="row" id="img">
<?php 
$x=0;$y=[false,false,false,false];
foreach($imgarray as $row) { 
	foreach($row["img"] as $img) { 
		$col[$x] =$col[$x].'<div class="col-xs-12 well text-center">
<a class="fancybox-thumb" rel="gallery1" href="img/'.$img.'.jpg" title="'.$row["name"].'"><img src="img/'.$img.'.jpg" alt="'.$row["name"].'" class="img-responsive "></a><p>'.$row["name"].'</p></div>' ;
		list($width_l, $height_l, $type_l, $attr_l) = getimagesize('img/'.$img.'.jpg');
		if ($height_l/$width_l>1.2) {$y[$x]=true;}
		$x++;if($x==4){$x=0;}
		if ($y[$x]) {$y[$x]=false;$x++;if($x==4){$x=0;}}
}} ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><div class="row img-col"><?php echo $col[0];?></div></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><div class="row img-col"><?php echo $col[1];?></div></div>
			<div class="clearfix visible-sm"></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><div class="row img-col"><?php echo $col[2];?></div></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><div class="row img-col"><?php echo $col[3];?></div></div>
		</div>
</div>

<?php include($root."blocks/footer.php"); ?>