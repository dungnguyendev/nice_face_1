<?php 
    require_once("../connect.php");
    if(!empty($_SESSION['current_user'])){
        $currentUser = $_SESSION['current_user'];
    }
    function thong_ke_brands(){
        global $conn;
        $sql = "SELECT * FROM brands";
        $kq = $conn->query($sql);
        return $kq;
    }

?>