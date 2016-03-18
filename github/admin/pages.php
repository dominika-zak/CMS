<?
if ($_GET[id]=='')
{
	?>
	<table class="table table-striped">
<?
$statement1b = $db->prepare('SELECT * FROM pages');
  $statement1b->execute();
  foreach($statement1b as $wynik2){
  	echo'<tr>';
	  echo'<td>';
  	echo $wynik2[titles];
	echo'</td>';
	echo'<td>';
	  echo '<a href="index.php?action=pages&id='.$wynik2[id].'">Edit</a>';
	echo '</td>';
	echo'</tr>';
  }
  ?>
  </table> 
  <?
}
elseif ($_GET[id]==0)
{
	include 'add.php';
}
elseif ($_GET[id]>0)
{
	include 'edit.php';
}
?>
<a href="index.php?action=pages&id=0">
	Add New Page
</a>

