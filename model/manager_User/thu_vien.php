<?php 
    require_once("../connect.php");
    if(!empty($_SESSION['current_user'])){
        $currentUser = $_SESSION['current_user'];
    }
    function quan_ly_user(){
        global $conn;
        $sql = "SELECT * FROM users";
        $kq = $conn->query($sql);
        return $kq;
    }

?>