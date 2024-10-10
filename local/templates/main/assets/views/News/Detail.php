
<div class="long-line"></div>
	<div class="content">
		<div class="path">Главная  /  <p class="grey"><?= $row['title'] ?></p></div>
		<div class="title">
			<?= $row['title'] ?>
		</div>
		<div class="card-date"><?= $row['dt'] ?></div>
		<div class="content-box">
			<div class="non-image">
				<div class="content-htext"><?= $row['announce'] ?></div>
				<div class="content-text">
					<?= $row['content'] ?>
				</div>
				<a class="btn" href="/news/page-<?= $_SESSION['currentPage'] ?>/"> <button class="card-button-detail"><i class="fa-solid fa-arrow-left-long fa-2xl"></i><span class="card-button-text-detail"> НАЗАД К НОВОСТЯМ </span> </button> </a>
			</div>
				<img class="image" src="/assets/img/images/<?= $row['image'] ?> ">
		</div>
	</div>