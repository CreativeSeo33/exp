 <header> 
  <div class="container">
    <div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="logo"> 

      <a href="/">Строительство, экспертиза и оценка</a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xs-12 center-header-block">

		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xs-12 center-header-block">
			<div><a href="mailto:info@expert-ocenka33.ru" class="btn btn-default"><i class="mdi-content-mail"></i>Написать нам</a></div>
			<div class="open-modal"><a href="#" data-toggle="modal" data-target="#modal-zakaz" class="btn btn-default">
				<i class="mdi-communication-call"></i>Заказать обратный звонок
			</a></div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-8 col-xs-12 right-header-block">
			<div class="phone"><a href="tel:+74922600943" class="tel-click"><span>8 (4922)</span> 600-943</a></div>
			<div><i class="mdi-communication-location-on"></i>Владимир, ул. Коммунальный спуск, д.1</div>
		</div>
	</div>
  </div>
</header>
<?php if ($_SERVER['REQUEST_URI'] != '/') {?>
<div class="container">
    <div class="row"><?php include($root."blocks/navbar.php"); ?></div>
</div>
<?php } ?>