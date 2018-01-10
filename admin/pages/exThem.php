<?php
        if(isset($_POST["txtTenSanPham"]) && isset($_POST["nbGiaSanPham"]) && $_POST["nbGiaSanPham"] > 0 && isset($_POST["txtMaLoai"]) && isset($_POST["txtMaHang"]) && isset($_GET["b"]) && $_GET["b"] == 1){

            $tenSanPham= $_POST["txtTenSanPham"];
            $giaSanPham= $_POST["nbGiaSanPham"];
            $soLuong= $_POST["txtSoLuong"];
            $moTa= $_POST["txtMoTa"];
            $maLoai= $_POST["txtMaLoai"];
            $maHang= $_POST["txtMaHang"];
            $hinhURL= $_POST["txtHinh"];        
            $sql ="insert into sanpham (TenSanPham,HinhURL,GiaSanPham,SoLuongTon,SoLuongBan,SoLuocXem,MoTa,NgayNhap,BiXoa,MaLoaiSanPham,MaHangSanXuat)
            values('$tenSanPham','$hinhURL','$giaSanPham','$soLuong',0,0,'$moTa',now(),0,$maLoai,$maHang)";
            DataProvider::ExecuteQuery($sql);
            DataProvider::ChangeURL("index.php?a=2");
        }
        if(isset($_GET["b"]) && $_GET["b"] == 2 && isset($_POST["txtTenLoaiSanPham"])){
            $tenLoaiSanPham = $_POST["txtTenLoaiSanPham"];
            $sql = "INSERT into loaisanpham (TenLoaiSanPham) values('$tenLoaiSanPham')";
            DataProvider::ExecuteQuery($sql);
            DataProvider::ChangeURL("index.php?a=8");
        }

        if(isset($_GET["b"]) && $_GET["b"] == 3 && isset($_POST["txtTenHangSanXuat"]) && isset($_POST["txtLogoURL"])){
            $tenHangSanXuat = $_POST["txtTenHangSanXuat"];
            $logoURL = $_POST["txtLogoURL"];
            $sql = "INSERT into hangsanxuat (TenHangSanXuat,LogoURL) values('$tenHangSanXuat','$logoURL')";
            DataProvider::ExecuteQuery($sql);
            DataProvider::ChangeURL("index.php?a=11");
        }

        if(isset($_GET["b"]) && $_GET["b"] == 4 && isset($_POST["txtTenDangNhap"]) && isset($_POST["txtMatKhau"]) && isset($_POST["txtTenHienThi"]) 
            && isset($_POST["txtDiaChi"]) && isset($_POST["txtDienThoai"]) && isset($_POST["Email"]) && isset($_POST["txtMaLoaiTaiKhoan"]) ){
                $tenDangNhap = $_POST["txtTenDangNhap"];
                $matKhau = $_POST["txtMatKhau"];
                $tenHienThi = $_POST["txtTenHienThi"];
                $diaChi = $_POST["txtDiaChi"];
                $dienThoai = $_POST["txtDienThoai"];
                $email = $_POST["Email"];
                $maLoaiTaiKhoan = $_POST["txtMaLoaiTaiKhoan"];
                $sql = "insert into taikhoan (TenDangNhap,MatKhau,TenHienThi,DiaChi,DienThoai,Email,BiXoa,MaLoaiTaiKhoan) 
                        values ('$tenDangNhap','$matKhau','$tenHienThi','$diaChi','$dienThoai','$email',0,'$maLoaiTaiKhoan')";
                DataProvider::ExecuteQuery($sql);
                DataProvider::ChangeURL("index.php?a=14");
            }

        if(isset($_GET["b"]) && $_GET["b"] == 5 && 
        isset($_POST["dtNgayLap"]) && isset($_POST["txtTongTien"]) && isset($_POST["txtMaTaiKhoan"]) && 
        isset($_POST["txtMaTinhTrang"]) && isset($_POST["txtMaDonDatHang"])){
            $maDonDatHang = $_POST["txtMaDonDatHang"];
            $ngayLap = $_POST["dtNgayLap"];
            $tongTien = $_POST["txtTongTien"];
            $maTaiKhoan = $_POST["txtMaTaiKhoan"];
            $maTinhTrang = $_POST["txtMaTinhTrang"];
            $sql = "INSERT into dondathang (MaDonDatHang,NgayLap,TongThanhTien,MaTaiKhoan,MaTinhTrang) values('$maDonDatHang','$ngayLap','$tongTien','$maTaiKhoan','$maTinhTrang')";
            DataProvider::ExecuteQuery($sql);
            DataProvider::ChangeURL("index.php?a=17");
        }
?>