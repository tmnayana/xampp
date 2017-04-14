<?php
$link = mysql_connect('localhost', 'root', '') or die('cannot connect to db server');
mysql_select_db('dougv_demo') or die('cannot select database');


// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//$lang = '';
  if(!preg_match('/^(fr)|(en)|(sp)$/', $_GET['lang'])) {
	$lng = 'en';
}
else {
	$lng = $_GET['lang'];
} 
 
$trans = array();

//$rs = mysql_query("select * from php_translate");
$rs = mysql_query("SELECT trans_section, trans_text FROM php_translate WHERE trans_lang = '$lng' "); //WHERE trans_lang = '$lng'

/* $values = mysql_fetch_array($rs);
var_dump($values);
 exit; */
 //or die('cannot select language from database');
while($row = mysql_fetch_array($rs)) {
	$trans[$row['trans_section']] = $row['trans_text'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Web Page Translations </title>
		<link href="../demo.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			div.langMenu, div.mainContainer {
				clear: both;
				width: 800px;
				margin-bottom: 10px;
			}
			
			div.langMenu {
				vertical-align: middle;
				text-align: right;
				border: 1px solid #000;
				padding: 5px;
			}
			
			div.imgBox {
				float: left;
				width: 236px;
				margin-right: 10px;
				padding: 5px;
				color: #fff;
				background: #000;
			}
			
			img {
				border: 1px solid #fff;
			}
		</style>
		
		<script type="text/javascript">
			function submitForm() {
				var thelang = document.getElementById('lang').options[document.getElementById('lang').selectedIndex].value;
				window.location.href = window.location.pathname + '?lang=' + thelang;
			}
		</script>
	</head>
	<body>
		
		<div class="langMenu">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
				<label for="lang">Select Language:</label>
				<select id="lang" name="lang" onchange="submitForm()">
					<option value="en"<?php if($_GET['lang'] != 'fr' && $_GET['lang'] != 'sp'){ echo " selected=\"selected\"";} ?>>English</option>
					<option value="fr"<?php if($_GET['lang'] == 'fr'){ echo " selected=\"selected\"";} ?>>French</option>
					<option value="sp"<?php if($_GET['lang'] == 'sp'){ echo " selected=\"selected\"";} ?>>Spanish</option>
				</select>
				<input name="submit" type="submit" value="Translate!" />
			</form>
		</div>
		<div class="mainContainer">
			<h1><?php echo $trans['hello']; ?></h1>
			<div class="imgBox">
				<a href="http://www.imdb.com/gallery/granitz/1458/Events/1458/NikkiColli_Ausse_491530_400.jpg"><img src="NikkiColli_Ausse_491530_400.jpg" alt="Teena and Nikki Collins" title="Teena and Nikki Collins" /></a>
				<br />
				<?php echo $trans['caption']; ?>
			</div>
			<p><?php echo $trans['gettysburg']; ?></p>
			<p><em><?php echo $trans['goodbye']; ?></em></p>
		</div>
		
	</body>
</html>
