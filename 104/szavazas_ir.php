<?php	
	session_start();
	
	//print_r($_POST);
	//print $_POST['kaja'];
	$fp = Fopen("adatok.txt", "r");
	$sor = Fread($fp, filesize("adatok.txt"));
	Fclose($fp);
	//echo $sor;
	
	$tomb = explode("," , $sor); //szétszedi dolgokra , vel elválasztva
	echo"<br>";
	//echo ".$tomb[0]..";
	
	$tomb[$_POST['kaja']-1] = $tomb[$_POST['kaja']-1] +1;
	echo $tomb[$_POST['kaja']-1];
	
	
	$fp = Fopen("adatok.txt", "w");
	Fwrite($fp, $tomb[0] . "," . $tomb[1] . "," . $tomb[2] . "," . $tomb[3]);
	Fclose($fp);
	if($_POST['kaja']-1 == 0)
		$_SESSION['kaja'] = "kakaós csiga";
	if($_POST['kaja']-1 == 1)
		$_SESSION['kaja'] = "Lekváros bukta";
	if($_POST['kaja']-1 == 2)
		$_SESSION['kaja'] = "mákos tészta";
	if($_POST['kaja']-1 == 3)
		$_SESSION['kaja'] = "túrós csusza";
	
	
	
	
	
	
	
	$_SESSION['szavazas'] = "megvolt";
?>
<script>
parent.location.href = parent.location.href
</script>