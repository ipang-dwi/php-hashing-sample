<title>Hashing</title>
<link rel="icon" href="https://www.firstplato.com/img/favicon.ico" type="image/icon" sizes="16x16">
<center>
<form method="post" target="_self">
	<input type="text" name="pass" id="pass" placeholder="pasword" />
	<input type="submit" name="OK" id="OK" value="OK, hashing now.."/>
</form>
	</br><hr>
<?php
	$salt = 'Ketik-Salt-Mu-Di-Sini';
	if($_POST){
	    if($_POST["pass"]!=''){
    		
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
		else 
		    echo "<font color='red'><b>Diisi dong bro..</b></font>";
	}
	echo "</br><hr>";
	//print_r(hash_algos());
?>
</center>
