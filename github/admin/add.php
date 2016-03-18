<?
include 'connect.php';
$statement1b = $db->prepare('INSERT INTO pages (titles,content) VALUES (:titles,:content)');
$statement1b->bindValue(':titles', $_POST[titles], PDO::PARAM_INT);
$statement1b->bindValue(':content', $_POST[content], PDO::PARAM_INT);
  $statement1b->execute();
?>
<form action="" method="post">
	<input name="titles">
	<textarea name="content">
		
	</textarea>
	<input type="submit" value="send">
</form>
