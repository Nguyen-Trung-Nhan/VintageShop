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

    if(isset($_GET["b"]) && $_GET["b"] == 3 && isset($_POST["txtMaHangSanXuat"])){
        $maHangSanXuat = $_POST["txtMaHangSanXuat"];
        $sql = "UPDATE hangsanxuat SET BiXoa = 1 WHERE MaHangSanXuat = '$maHangSanXuat' ";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?a=11");
    }
    if(isset($_GET["b"]) && $_GET["b"] == 4 && isset($_POST["txtMaTaiKhoan"])){
        $maTaiKhoan = $_POST["txtMaTaiKhoan"];
        $sql = "UPDATE taikhoan SET BiXoa = 1 WHERE MaTaiKhoan = '$maTaiKhoan' ";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?a=14");
    }
    if(isset($_GET["b"]) && $_GET["b"] == 5 && isset($_POST["txtMaDonDatHang"])){
        $maDonDatHang = $_POST["txtMaDonDatHang"];
        $sql = "DELETE FROM chitietdondathang WHERE  MaDonDatHang= '$maDonDatHang'";
        DataProvider::ExecuteQuery($sql);
        $sql = "DELETE FROM dondathang WHERE MaDonDatHang = '$maDonDatHang";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?a=17");
    }
?>