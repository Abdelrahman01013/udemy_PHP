<?php 
include("config.php") ;
if(isset($_SESSION['user']) ){
    session_destroy() ;
    header("location:index.php") ;
}else{ header("location:index.php") ;}


?>