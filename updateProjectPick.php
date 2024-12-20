
<div class="col-6 mx-auto text-center">
	<form action="updateProject.php" method="POST">
		<input type="" name="id" value="<?php echo $_GET['id'];?>">
	    <input type="text" class="form-control mt-2" placeholder="Заголовок проекта" name="title">
	    <input type="text" class="form-control mt-2" placeholder=" Описание проекта" name="text">
	    <input type="number" class="form-control mt-2" placeholder="Сколько надо собрать денег? " name="goal">
	    <input type="text" class="form-control mt-2" placeholder="Адрес картинки" name="img">
		<button class="btn btn-success" href="updateProject.php">Редактировать проект</button>
	</form>
</div>