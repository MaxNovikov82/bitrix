<div class="banner">
	
	<img class="ban-image" src="/assets/img/images/<?= $bt['image'] ?>">
	
	<div class="ban-text">
		<div class="ban-text-title"><?= $bt['title'] ?></div>
		<div class="ban-text-body"><?= $bt['announce'] ?></div>
	</div>
</div>
<div class="news">
	<div class="news-title">
		<p>Новости</p>
	</div>
	<div class="blocks">
		<?php while ($row = $st -> fetch()) { ?>
		<div class="card">
			<div class="card-date"><p class="card-date-text"> 
				<?= $row['dt'] ?>
			</p></div>
			<div class="card-title"><?= $row['title'] ?></div>
			<div class="card-text"><?= $row['announce'] ?></div>
			<a class="btn" href="/news/<?= $row['id'] ?>/"><button class="card-button"><span class="card-button-text"> ПОДРОБНЕЕ </span> <i class="fa-solid fa-arrow-right-long fa-2xl"></i></button></a>
		</div>
		<?php 
		}
		?>
	</div>
	<div class="paginator">
		<?php 
			$pagesTotalNum = $news::getCount();
			$pageDivs = intdiv($pagesTotalNum, $amount) + 1;
			$pagin = $pagin = $pageID ?? 1;
			if ($pagin != 1 ) {
		 ?>
		 	<a class="btn" href="/news/"><div class="circle-arrow"><i class="fa-solid fa-arrow-left"></i></div></a>
			<a href="/news/page-<?=($pagin-1)?>/" class="btn"><div class="circle"><?=$pagin - 1 ?></div></a>
			<?php } ?>
			<div class="circle-active"><?=$pagin ?></div>
			
			<?php if ($pagin != $pageDivs) { ?>
			<a href="/news/page-<?= ($pagin+1) ?>/" class="btn"><div class="circle"><?= $pagin + 1 ?></div></a>

		<a class="btn" href="/news/page-<?= ($pageDivs) ?>/"><div class="circle-arrow"><i class="fa-solid fa-arrow-right"></i></div></a>
	<?php } ?>
	</div>
	
</div>


<?php 
echo '<pre>';
print_r($arItem);
echo '</pre>';
?>
<div class="news">
	<div class="news-title">
		<p>Новости</p>
	</div>
	<div class="blocks">
		<?php foreach($arResult['ITEMS'] as $arItem): ?>
		<div class="card">
			<div class="card-date"><p class="card-date-text"> 
				<?= $arItem['DATE'] ?>
			</p></div>
			<div class="card-title"><?= $arItem['NAME'] ?></div>
			<div class="card-text"><?= $arItem['DETAIL_TEXT'] ?></div>
			<a class="btn" href="/news/<?= $row['id'] ?>/"><button class="card-button"><span class="card-button-text"> ПОДРОБНЕЕ </span> <i class="fa-solid fa-arrow-right-long fa-2xl"></i></button></a>
		</div>
		<?php endforeach; ?>
	</div>
</div>	