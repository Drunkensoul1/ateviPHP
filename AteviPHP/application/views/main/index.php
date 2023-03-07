<p>Главная страница</p>
<br>
<?php foreach ($news as $val): ?>
	<h3><?php echo $val['title']; ?></h3>
	<a href="index"><?php echo $val['description']; ?></a>
	<hr>
<?php endforeach; ?>