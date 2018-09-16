<center>
<form method="post" target="_self">
	<input type="text" name="pass" id="pass" />
	<input type="submit" name="OK" id="OK" value="OK, hashing now.."/>
</form>
	</br><hr>
<?php
	$salt = '@adDunyaa2$MataaAdDunyaa%4#AlMarAtus91Sholihah';
	if($_POST&&$_POST["pass"]!=''){
		$pass = $_POST["pass"];
		echo "<table border='1'>";
		echo "<tr><td>ALGORITHM</td> <td>RESULT</td></tr>";
		echo "<tr><td>MD5</td> <td>".md5($pass.$salt)."</td></tr>";
		echo "<tr><td>SHA512</td> <td>".hash('sha512',$pass.$salt)."</td></tr>";
		echo "<tr><td>RIPEMD320</td> <td>".hash('ripemd320',$pass.$salt)."</td></tr>";
		echo "<tr><td>WHIRLPOOL</td> <td>".hash('whirlpool',$pass.$salt)."</td></tr>";
		echo "<tr><td>TIGER192,4</td> <td>".hash('tiger192,4',$pass.$salt)."</td></tr>";
		echo "<tr><td>SNEFRU256</td> <td>".hash('snefru256',$pass.$salt)."</td></tr>";
		echo "<tr><td>GOST</td> <td>".hash('gost',$pass.$salt)."</td></tr>";
		echo "<tr><td>HAVAL256,5</td> <td>".hash('haval256,5',$pass.$salt)."</td></tr>";
		echo "</table>";
	}
	echo "</br><hr>";
	//print_r(hash_algos());
?>
</center>