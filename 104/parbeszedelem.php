<style>
</style>


<table>
<?php
	session_start();
	if($_SESSION['szavazas'] != 'megvolt')
	{
	echo "


	<form action='szavazas_ir.php' method='post' target='szavazosdi'>
	<input type='radio' name='kaja' value='1'>Kakaós csiga<br>
	<input type='radio' name='kaja' value='2'>Lekváros bukta<br>
	<input type='radio' name='kaja' value='3'>Mákos tészta<br>
	<input type='radio' name='kaja' value='4'>Túrós csusza<br>
	<br>
	<input type='submit' name='szavazok' value='szavazok'>

	</form>

	<iframe name='szavazosdi'></iframe>
	";
	}
	else
	{
		$fp = Fopen("adatok.txt", "r");
		$sor = Fread($fp, filesize("adatok.txt"));
		Fclose($fp);
		$tomb = explode(",", $sor);
		$osszes = $tomb[0] + $tomb[1] +$tomb[2] + $tomb[3];
		$kakaos = Round($tomb[0] / $osszes * 100); $lekvaros =  Round($tomb[1] / $osszes * 100); $makos =  Round($tomb[2] / $osszes * 100); $Turos = Round($tomb[3] / $osszes * 100);
		echo"Szavazás jelenlegi állása $osszes voks után :<br>";
		echo"<tr>";
		echo "<td>Kakaós csiga:</td> <td>$tomb[0]db</td><td> $kakaos%</td><td> <img src='kep.gif' width='$kakaos' height = 10px></td><br>";echo "</tr>";
		echo"<tr>";
		echo "<td>Lekváros bukta:</td> <td>$tomb[1]db</td> <td>$lekvaros %</td> <td><img src='kep.gif' width='$lekvaros' height = 10px></td> <br>";echo "</tr>";
		
		echo "<td>Mákos tészta:</td> <td>$tomb[2]db</td><td> $makos% </td><td><img src='kep.gif' width='$makos' height = 10px> </td>   <br>";echo "</tr>";
		echo "<td>Túrós csusza: </td><td>$tomb[3]db </td><td>$Turos% </td><td><img src='kep.gif' width='$Turos' height = 10px> </td>   <br>";echo "</tr>";
		echo"<tr>";
		echo "te a ";
		if($_SESSION['kaja'] == "kakaós csiga")
			echo"Kakaós csigára szavaztál";
		if($_SESSION['kaja'] == "Lekváros bukta")
			echo"Lekváros buktára szavaztál";
		if($_SESSION['kaja'] == "mákos tészta")
			echo"mákos tésztára szavaztál";
		if($_SESSION['kaja'] == "túrós csusza")
			echo"túrós csuszára szavaztál";
		
		echo"</tr>";
		
		
		echo"</tr";
		;
	}
?>
</table>
