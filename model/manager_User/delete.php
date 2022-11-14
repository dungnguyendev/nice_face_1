<?php
require_once('./thu_vien.php');
$id = $_GET['id'];
$sql = "DELETE FROM brands WHERE brand_id = $id";
$kq = $conn->query($sql);
header("Location: ./list.php");
