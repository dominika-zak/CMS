<?
if(isset($_POST[titles])){
$statement1b = $db->prepare('UPDATE pages SET titles=:titles , content=:content WHERE id=:id');
	print_r($_POST);
$statement1b->bindValue(':id', $_POST[id], PDO::PARAM_INT);
$statement1b->bindValue(':titles', $_POST[titles], PDO::PARAM_STR);
$statement1b->bindValue(':content', $_POST[content], PDO::PARAM_STR); 
 if (!$statement1b->execute()) {
              print_r($statement1b->errorInfo());
       echo $statement1b->errorCode();
         }
}
$statement1b = $db->prepare('SELECT * FROM pages WHERE id=:id');
$statement1b->bindValue(':id', $_GET[id], PDO::PARAM_INT);
  $statement1b->execute();
   foreach($statement1b as $wynik2){
?>
<form action="" method="post">
	<input type="hidden" name="id" value="<? echo $wynik2[id]; ?>">
	<input name="titles" value="<? echo $wynik2[titles]; ?>">
	<textarea name="content">
	<? echo $wynik2[content]; ?>	
	</textarea>
	<input type="submit" value="send">
</form>
<?
   }
?>