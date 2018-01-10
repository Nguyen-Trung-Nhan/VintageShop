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


if(isset($_GET["b"]) && $_GET["b"] == 3)
{
    if(isset($_POST["txtTenHangSanXuat"]) && isset($_POST["txtMaHangSanXuat"]) && $_POST["txtTenHangSanXuat"] != "")
    {
        $tenHangSanXuat = $_POST["txtTenHangSanXuat"];
        $maHangSanXuat = $_POST["txtMaHangSanXuat"];
        $sql = "UPDATE hangsanxuat
        SET TenHangSanXuat = '$tenHangSanXuat'
        WHERE MaHangSanXuat = '$maHangSanXuat' and BiXoa = 0";
        DataProvider::ExecuteQuery($sql);
    }

    if(isset($_POST["txtLogoURL"]) && isset($_POST["txtMaHangSanXuat"]) && $_POST["txtLogoURL"] != "")
    {
        $logoURL = $_POST["txtLogoURL"];
        $maHangSanXuat = $_POST["txtMaHangSanXuat"];
        $sql = "UPDATE hangsanxuat
        SET LogoURL = '$logoURL'
        WHERE MaHangSanXuat = '$maHangSanXuat' and BiXoa = 0";
        DataProvider::ExecuteQuery($sql);
    }
    DataProvider::ChangeURL("index.php?a=11");
}

if(isset($_GET["b"]) && $_GET["b"] == 4)
{
    if(isset($_POST["txtTenDangNhap"]) && isset($_POST["txtMaTaiKhoan"]) && $_POST["txtTenDangNhap"] != "")
    {
        $maTaiKhoan = $_POST["txtMaTaiKhoan"];
        $tenDangNhap = $_POST["txtTenDangNhap"];  
        $sql = "UPDATE taikhoan
        SET TenDangNhap = '$tenDangNhap'
        WHERE MaTaiKhoan = '$maTaiKhoan' and BiXoa = 0";
        DataProvider::ExecuteQuery($sql);
    }

    if(isset($_POST["txtMatKhau"]) && isset($_POST["txtMaTaiKhoan"]) && $_POST["txtMatKhau"] != "")
    {
        $maTaiKhoan = $_POST["txtMaTaiKhoan"];
        $matKhau = $_POST["txtMatKhau"];
        $sql = "UPDATE taikhoan
        SET MatKhau = '$matKhau'
        WHERE MaTaiKhoan = '$maTaiKhoan' and BiXoa = 0";
        DataProvider::ExecuteQuery($sql);
    }
    if(isset($_POST["txtTenHienThi"]) && isset($_POST["txtMaTaiKhoan"]) && $_POST["txtTenHienThi"] != "")
    {
        $maTaiKhoan = $_POST["txtMaTaiKhoan"];
        $tenHienThi = $_POST["txtTenHienThi"];
        $sql = "UPDATE taikhoan
        SET TenHienThi = '$tenHienThi'
        WHERE MaTaiKhoan = '$maTaiKhoan' and BiXoa = 0";
        DataProvider::ExecuteQuery($sql);
    }
    if(isset($_POST["txtDiaChi"]) && isset($_POST["txtMaTaiKhoan"]) && $_POST["txtDiaChi"] != "")
    {
        $maTaiKhoan = $_POST["txtMaTaiKhoan"];
        $diaChi = $_POST["txtDiaChi"];
        $sql = "UPDATE taikhoan
        SET DiaChi = '$diaChi'
        WHERE MaTaiKhoan = '$maTaiKhoan' and BiXoa = 0";
        DataProvider::ExecuteQuery($sql);
    }
    if(isset($_POST["txtDienThoai"]) && isset($_POST["txtMaTaiKhoan"]) && $_POST["txtDienThoai"] != "")
    {
        $maTaiKhoan = $_POST["txtMaTaiKhoan"];
        $dienThoai = $_POST["txtDienThoai"];
        $sql = "UPDATE taikhoan
        SET DienThoai = '$dienThoai'
        WHERE MaTaiKhoan = '$maTaiKhoan' and BiXoa = 0";
        DataProvider::ExecuteQuery($sql);
    }
    if(isset($_POST["Email"]) && isset($_POST["txtMaTaiKhoan"]) && $_POST["Email"] != "")
    {
        $maTaiKhoan = $_POST["txtMaTaiKhoan"];
        $email = $_POST["Email"];
        $sql = "UPDATE taikhoan
        SET Email = '$email'
        WHERE MaTaiKhoan = '$maTaiKhoan' and BiXoa = 0";
        DataProvider::ExecuteQuery($sql);
    }
    if(isset($_POST["txtMaLoaiTaiKhoan"]) && isset($_POST["txtMaTaiKhoan"]) && $_POST["txtMaLoaiTaiKhoan"] != "")
    {
        $maTaiKhoan = $_POST["txtMaTaiKhoan"];
        $maLoaiTaiKhoan = $_POST["txtMaLoaiTaiKhoan"];
        $sql = "UPDATE taikhoan
        SET MaLoaiTaiKhoan = '$maLoaiTaiKhoan'
        WHERE MaTaiKhoan = '$maTaiKhoan' and BiXoa = 0";
        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL("index.php?a=14");
}
if(isset($_GET["b"]) && $_GET["b"] == 5 ){
if(isset($_POST["txtMaDonDatHang"]) && isset($_POST["dtNgayLap"]) && $_POST["dtNgayLap"] != ""){
    $maDonDatHang = $_POST["txtMaDonDatHang"];
    $ngayLap = $_POST["dtNgayLap"];
    $sql = "UPDATE dondathang
    SET NgayLap = '$ngayLap'
    WHERE MaDonDatHang = '$maDonDatHang'";
    DataProvider::ExecuteQuery($sql);
}
if(isset($_POST["txtMaDonDatHang"]) && isset($_POST["txtTongTien"]) && $_POST["txtTongTien"] != ""){
    $maDonDatHang = $_POST["txtMaDonDatHang"];
    $tongTien = $_POST["txtTongTien"];
    $sql = "UPDATE dondathang
    SET TongThanhTien = '$tongTien'
    WHERE MaDonDatHang = '$maDonDatHang'";
    DataProvider::ExecuteQuery($sql);
}
if(isset($_POST["txtMaDonDatHang"]) && isset($_POST["txtMaTaiKhoan"]) && $_POST["txtMaTaiKhoan"] != ""){
    $maDonDatHang = $_POST["txtMaDonDatHang"];
    $maTaiKhoan = $_POST["txtMaTaiKhoan"];
    $sql = "UPDATE dondathang
    SET MaTaiKhoan = '$maTaiKhoan'
    WHERE MaDonDatHang = '$maDonDatHang'";
    DataProvider::ExecuteQuery($sql);
}
if(isset($_POST["txtMaDonDatHang"]) && isset($_POST["txtMaTinhTrang"]) && $_POST["txtMaTinhTrang"] != ""){
    $maDonDatHang = $_POST["txtMaDonDatHang"];
    $maTinhTrang = $_POST["txtMaTinhTrang"];
    $sql = "UPDATE dondathang
    SET MaTinhTrang = '$maTinhTrang'
    WHERE MaDonDatHang = '$maDonDatHang'";
    DataProvider::ExecuteQuery($sql);
}
DataProvider::ChangeURL("index.php?a=17");
}
?>