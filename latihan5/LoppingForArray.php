<?php

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UFT-8">
	<title>Looping for array</title>
</head>
<body>
    <?php

       for ($i = 0; $i < Count($nama); $i++) { //Cuont berguna untuk menentukan jumlah elemen pada array
                                               //Sehingga loooping akan berhenti ketika isi array sudah tampil semua.
            echo "<li>$nama[$i]</li>";
        }

    ?>
</body>
</html>

?>        	