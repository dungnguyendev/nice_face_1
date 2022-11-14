<?php
    require_once '../connect.php'; 
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE product_id = $id";
    $kq = $conn->query($sql);
    header('Location: ./list.php');
