<?php
    if(isset($_POST["nbMaSanPham"]) && isset($_GET["b"]) && $_GET["b"] == 1){
        $maSanPham = $_POST["nbMaSanPham"];
        $sql = "UPDATE sanpham SET BiXoa = 1 WHERE MaSanPham = $maSanPham ";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?a=2");
    }
    if(isset($_GET["b"]) && $_GET["b"] == 2 && isset($_POST["txtMaLoaiSanPham"])){
        $maLoaiSanPham = $_POST["txtMaLoaiSanPham"];
        $sql = "UPDATE loaisanpham SET BiXoa = 1 WHERE MaLoaiSanPham = '$maLoaiSanPham' ";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?a=8");
    }
?>