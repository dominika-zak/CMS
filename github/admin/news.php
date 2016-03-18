<?
if ($_GET[id]=='')
{
	?>
	<table class="table table-striped">
<?
$statement1b = $db->prepare('SELECT * from news');
  $statement1b->execute();
  foreach($statement1b as $wynik2){
  	echo'<tr>';
	  echo'<td>';
  	echo $wynik2[title];
	echo'</td>';
	echo'<td>';
	  echo '<a href="index.php?action=news&id='.$wynik2[id].'">Edit</a>';
	  echo'</td>';
	  echo'</tr>';
  }
 ?>
 </table> 
<?
}
elseif ($_GET[id]==0)
{
	include 'addnews.php';
}
elseif ($_GET[id]>0)
{
	include 'editnews.php';
}
?>
<a href="index.php?action=news&id=0">
	Add News
</a>