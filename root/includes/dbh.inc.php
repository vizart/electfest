<?php 

 $servername="studmysql01.fhict.local";
 $dBUsername="dbi406008";
 $dBPassword="shapkata123";
 $dBName="dbi406008";

 $conn = mysqli_connect($servername, $dBUsername,$dBPassword, $dBName);

 if(!$conn){
     die("Connection failed: ".mysqli_connect_error());
 }