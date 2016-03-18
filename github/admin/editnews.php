<?
if(isset($_POST[title])){
$statement1b = $db->prepare('UPDATE news SET title=:title , text=:text WHERE id=:id');
$statement1b->bindValue(':id', $_POST[id], PDO::PARAM_INT);
$statement1b->bindValue(':title', $_POST[title], PDO::PARAM_STR);
$statement1b->bindValue(':text', $_POST[text], PDO::PARAM_STR); 
 if (!$statement1b->execute()) {
              print_r($statement1b->errorInfo());
       echo $statement1b->errorCode();
         }	
}
$statement1b = $db->prepare('SELECT * FROM news WHERE id=:id');
$statement1b->bindValue(':id', $_GET[id], PDO::PARAM_INT);
  $statement1b->execute();
   foreach($statement1b as $wynik2){
  	echo $wynik2[titles];
	echo $wynik2[text];
?>
<form action="" method="post">
	<input type="hidden" name="id" value="<? echo $wynik2[id]; ?>">
	<input name="title" value="<? echo $wynik2[title]; ?>">
	<textarea name="text">
	<? echo $wynik2[text]; ?>	
	</textarea>
	<input type="submit" value="send">
</form>
<?
   }
?>

