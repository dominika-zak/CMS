<?
include 'connect.php';
$statement1b = $db->prepare('INSERT INTO news (title,text) VALUES (:title,:text)');
$statement1b->bindValue(':title', $_POST[title], PDO::PARAM_INT);
$statement1b->bindValue(':text', $_POST[text], PDO::PARAM_INT);
  $statement1b->execute();
?>
<h1>ADD NEWS</h1>
<form action="" method="post">
	<div class="alert alert-info" role="alert">Title<br>
	<input name="title">
	</div>
	<div class="alert alert-warning" role="alert">Text<br>
	<textarea name="text">
	</textarea>
	</div>
	<input type="submit" value="send">
</form>