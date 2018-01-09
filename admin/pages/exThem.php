<?php
        if(isset($_POST["txtTenSanPham"]) && isset($_POST["nbGiaSanPham"]) && isset($_POST["txtMaLoai"]) && isset($_POST["txtMaHang"]) && isset($_GET["b"]) && $_GET["b"] == 1){

            $tenSanPham= $_POST["txtTenSanPham"];
            $giaSanPham= $_POST["nbGiaSanPham"];
            $soLuong= $_POST["txtSoLuong"];
            $ngayNhap= $_POST["txtNgayNhap"];
            $moTa= $_POST["txtMoTa"];
            $maLoai= $_POST["txtMaLoai"];
            $maHang= $_POST["txtMaHang"];
            $hinhURL= $_POST["txtHinh"];        
            $sql ="insert into sanpham (TenSanPham,HinhURL,GiaSanPham,SoLuongTon,SoLuongBan,SoLuocXem,MoTa,NgayNhap,BiXoa,MaLoaiSanPham,MaHangSanXuat)
            values('$tenSanPham','$hinhURL','$giaSanPham','$soLuong',0,0,'$moTa','$ngayNhap',0,$maLoai,$maHang)";
            DataProvider::ExecuteQuery($sql);
            DataProvider::ChangeURL("index.php?a=2");
        }
        if(isset($_GET["b"]) && $_GET["b"] == 2 && isset($_POST["txtTenLoaiSanPham"])){
            $tenLoaiSanPham = $_POST["txtTenLoaiSanPham"];
            $sql = "INSERT into loaisanpham (TenLoaiSanPham) values('$tenLoaiSanPham')";
            DataProvider::ExecuteQuery($sql);
            DataProvider::ChangeURL("index.php?a=8");
        }
?>