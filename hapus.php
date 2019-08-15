@created by caspex22
<?php

include "koneksi.php";

$no =  $_GET['no'];

$data= mysqli_query($koneksi, "DELETE FROM tokopnj where no= $no ");

header("Location: index.php");

?>