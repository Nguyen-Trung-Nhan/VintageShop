<?php
    if(isset($_SESSION["TongTien"])){
        $tongTien = $_SESSION["TongTien"];
        if ($tongTien == 0){
            DataProvider::ChangeURL("index.php?a=6");
        }

    }
?>
<h2>Bạn Đã Đặt Hàng Thành Công</h2>
<img src="images/camon.jpg" alt="" width="700" height="500">
<?php
if(isset($_SESSION["gioHang"])){
    $maDonDatHang = mt_rand(1,100000);
    $maChiTietDonDatHang = mt_rand(100001,2147483647);
    if(isset($_SESSION["maTaiKhoan"])){
        $maTaiKhoan = $_SESSION["maTaiKhoan"];
    }
    $sql = "insert into dondathang (MaDonDatHang,NgayLap,TongThanhTien,MaTaiKhoan,MaTinhTrang)
        values('$maDonDatHang',now(),$tongTien,$maTaiKhoan,1)";
    DataProvider::ExecuteQuery($sql);

        $gioHang = unserialize($_SESSION["gioHang"]);
        $i = 1;
        $tongSoLuong = 0;
        foreach($gioHang->listProduct as $p)
        {
            $sql = "SELECT TenSanPham, HinhURL, GiaSanPham FROM SanPham WHERE MaSanPham = $p->id";
            $result = DataProvider::ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);
            $maSanPham = $p->id;
            $giaSanPham = $row['GiaSanPham'];
            $soLuong = $p->num;
            $sql = "INSERT into chitietdondathang(MaChiTietDonDatHang,SoLuong,GiaBan,MaDonDatHang,MaSanPham)
            values ('$maChiTietDonDatHang','$soLuong','$giaSanPham','$maDonDatHang','$maSanPham')";
            DataProvider::ExecuteQuery($sql);
            $sql = "UPDATE sanpham SET SoLuongTon = (SoLuongTon - $soLuong)
            WHERE MaSanPham = $maSanPham";
            DataProvider::ExecuteQuery($sql);
            $sql = "UPDATE sanpham SET SoLuongBan = (SoLuongBan + $soLuong)
            WHERE MaSanPham = $maSanPham";
            DataProvider::ExecuteQuery($sql);      
        }
    
    unset($_SESSION["TongTien"]);
    unset($_SESSION["gioHang"]);
    DataProvider::ChangeURL("index.php?a=18");
}
    
?>