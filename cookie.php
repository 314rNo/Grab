<!DOCTYPE html>
<html>
<head>
	<title>Calculatrice</title>
	<meta charset="utf-8"/>
</head>
<body>
	<!-- écran de la calculette -->
<form action="cookie.php" method="POST">
	<div id="ecran" style="width: 275px; height: 180px; margin: auto;"> 
		<textarea rows="10" cols="29" name="ecranLoc">
			
		</textarea>
	</div>
</form>
<?php 
if ($_POST['ecranLoc'] == "") 
{?>
<form action="cookie.php" method="POST" style="height: auto;width: auto;display: block;text-align: center;">
<input type="submit" name="1" value="1">
<input type="submit" name="2" value="2">
<input type="submit" name="3" value="3"><br>
<input type="submit" name="4" value="4">
<input type="submit" name="5" value="5">
<input type="submit" name="6" value="6"><br>
<input type="submit" name="7" value="7">
<input type="submit" name="8" value="8">
<input type="submit" name="9" value="9"><br>
<input type="submit" name="+" value="+">
<input type="submit" name="-" value="-" disabled="">
</form>
<?php  
}else 
{?>
<form action="cookie.php" method="POST" style="height: auto;width: auto;display: block;text-align: center;">
<input type="submit" name="1" value="1">
<input type="submit" name="2" value="2">
<input type="submit" name="3" value="3"><br>
<input type="submit" name="4" value="4">
<input type="submit" name="5" value="5">
<input type="submit" name="6" value="6"><br>
<input type="submit" name="7" value="7">
<input type="submit" name="8" value="8">
<input type="submit" name="9" value="9"><br>
<input type="submit" name="+" value="+">
<input type="submit" name="-" value="-">
</form>
}?>
</body>
</html>