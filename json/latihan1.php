<?php
// $karyawan =[
//     ["nama" => "usman",
//     "dept" => "DIT"],
//     ["nama" => "usman",
//     "dept" => "DIT"]
// ];
// Membuat variabel, ubah sesuai dengan nama host dan database pada hosting 
$host	= "localhost";
$user	= "root";
$pass	= "";
$db	= "db_kampus";
$con=mysqli_connect($host,$user,$pass, $db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}  
$query="SELECT * FROM tbl_mahasiswa";
$result=mysqli_query($con,$query);
$karyawan=mysqli_fetch_array($result);

$data = json_encode($karyawan);
echo $data;
?>