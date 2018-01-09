<?php
if(isset($_GET["b"]) && $_GET["b"] == 1){
    if(isset($_POST["nbMaSanPham"])){
        $maSanPham = $_POST["nbMaSanPham"];
        if(isset($_POST["txtTenSanPham"]) && $_POST["txtTenSanPham"] != ""){  
            $tenSanPham= $_POST["txtTenSanPham"];
            $sql = "UPDATE sanpham 
                    SET TenSanPham = '$tenSanPham'
                    WHERE MaSanPham = '$maSanPham' ";
            DataProvider::ExecuteQuery($sql);
        }
        if(isset($_POST["nbGiaSanPham"]) && $_POST["nbGiaSanPham"] != ""){
            $giaSanPham= $_POST["nbGiaSanPham"];
            $sql = "UPDATE sanpham 
            SET GiaSanPham = '$giaSanPham'
            WHERE MaSanPham = '$maSanPham' ";
            DataProvider::ExecuteQuery($sql);
        }
        if(isset($_POST["txtMaLoai"])){
            $maLoai= $_POST["txtMaLoai"];
            $sql = "UPDATE sanpham 
            SET MaLoaiSanPham = '$maLoai'
            WHERE MaSanPham = '$maSanPham' ";
            DataProvider::ExecuteQuery($sql);
        }
        if(isset($_POST["txtMaHang"])){
            $maHang= $_POST["txtMaHang"];
            $sql = "UPDATE sanpham 
            SET MaHangSanXuat = '$maHang'
            WHERE MaSanPham = '$maSanPham' ";
            DataProvider::ExecuteQuery($sql);
        }
        if(isset($_POST["txtSoLuong"])){
            $soLuong= $_POST["txtSoLuong"];
            $sql = "UPDATE sanpham 
            SET SoLuongTon = '$soLuong'
            WHERE MaSanPham = '$maSanPham' ";
            DataProvider::ExecuteQuery($sql);
        }

        if(isset($_POST["txtMoTa"]) && $_POST["txtMoTa"] != ""){
            $moTa= $_POST["txtMoTa"];
            $sql = "UPDATE sanpham 
            SET MoTa = '$moTa'
            WHERE MaSanPham = '$maSanPham' ";
            DataProvider::ExecuteQuery($sql);
        }
        if(isset($_POST["txtHinh"]) && $_POST["txtHinh"] != ""){
            $hinhURL= $_POST["txtHinh"];
            $sql = "UPDATE sanpham 
            SET HinhURL = '$hinhURL'
            WHERE MaSanPham = '$maSanPham' ";
            DataProvider::ExecuteQuery($sql);
        }
        if(isset($_POST["dtNgayNhap"])){
            $ngayNhap= $_POST["dtNgayNhap"];
            $sql = "UPDATE sanpham 
            SET NgayNhap = '$ngayNhap'
            WHERE MaSanPham = '$maSanPham' ";
            DataProvider::ExecuteQuery($sql);
        }
        DataProvider::ChangeURL("index.php?a=2");

    }
}

if(isset($_GET["b"]) && $_GET["b"] == 2 && isset($_POST["txtMaLoaiSanPham"]) && isset($_POST["txtTenLoaiSanPham"])){
    $maLoaiSanPham = $_POST["txtMaLoaiSanPham"];
    $tenLoaiSanPham = $_POST["txtTenLoaiSanPham"];
    $sql = "UPDATE loaisanpham
            SET TenLoaiSanPham = '$tenLoaiSanPham'
            WHERE MaLoaiSanPham = '$maLoaiSanPham'";
    DataProvider::ExecuteQuery($sql);
    DataProvider::ChangeURL("index.php?a=8");
}

?>