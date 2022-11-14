<?php 
    require_once("../connect.php");
    if(!empty($_SESSION['current_user'])){
        $currentUser = $_SESSION['current_user'];
    }
    function quan_ly_bill(){
        global $conn;
        $sql = "SELECT * FROM bill_user";
        $kq = $conn->query($sql);
        return $kq;
    }
    function show_bill(){
        global $conn;
        $id = $_GET['id'];
        $sql = "SELECT * FROM cart_user WHERE id_bill = $id";
        $kq = $conn->query($sql);
        return $kq;
    }
    function sum_bill(){
        global $conn;
        $id = $_GET['id'];
        $sql = "SELECT sum(cart_user.thanhtien) as total FROM cart_user WHERE id_bill = $id";
        $kq = $conn->query($sql);
        return $kq;
    }
?>