<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color:#d9edf7;">
<div class="container" style="background-color:#fff; margin-top:30px;">
				<?
			session_start();
			include "connect.php";
			if(isset($_POST[login])){
				$statement1b = $db->prepare('SELECT * FROM admin WHERE login=:login AND password=:password');
				$statement1b->bindValue(':login', $_POST[login], PDO::PARAM_INT);
				$statement1b->bindValue(':password', $_POST[password], PDO::PARAM_INT);
				$statement1b->execute();
				foreach($statement1b as $wynik2){
					$_SESSION[id]=$wynik2[id];  
				} 
			}
			if ($_SESSION[id]==''){ 
			?>
			
			<form action="" method="post">
				<input name="login">
				<input name="password" type="password">
				<input value="send" type="submit">
			</form>
			<? }
			?>
	<div class="row">
		<div class="col-md-2 text-center" style="background-color:#0D2552; min-height:400px; padding-top:20px;">
			<?
			if($_SESSION[id]>0){
			echo'<a href="logout.php" style="color:#fff;">Logout</a><br><br>'; 
			?>
			<a href="index.php?action=pages" style="color:#fff;">Pages</a>
			<br>
			<a href="index.php?action=news" style="color:#fff;">News</a>
		</div>
		<div class="col-md-10" style="background-color:#dff0d8; padding-top:20px; min-height:400px;">
			<?
			if ($_GET[action]=='pages'){
			include 'pages.php';
			}
			if ($_GET[action]=='news'){
				include 'news.php';
			}
			}
			?>

		</div>
		

</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

