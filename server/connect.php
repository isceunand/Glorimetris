<?php
$host="localhost";
$user="postgres";
$password="root";
$port="5433";
$dbname="kejartayang";
 
$link= pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password) or die("Koneksi gagal");
?>