<?php

$mahasiswa = [
        "001" => "Ahmad",
        "002" => "Budi",
        "003" => "Chika",
        "004" => "Dhini",
        "005" => "Erwin"];
        // Untuk memasukan value, kita harus membuat key yang merpresentasikan valuenya.
       // tanda "=>" dapat diartikan sebagai merujuk
      // "Key" => "Value"

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8"> 
   <litle>Array Associative</litle>
</head>
<body>
	<?php foreach ($mahasiswa as $nrp => $nama) : ?>
		<li><?php echo "$nrp : $nama" ?></li>
	<?php endforeach ?>
</body>
</html>