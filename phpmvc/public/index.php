<?php 
if ( !session_id() ) session_start();


//Teknik Bootsraping
require_once'../app/init.php';

//Menjalankan kelas App
$app = new App;