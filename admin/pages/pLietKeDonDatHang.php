<h2>Liệt Kê Đơn Đặt Hàng</h2>
<table width="600" border="1">
    <tr>
        <td>Mã Đơn Đặt Hàng</td>
        <td>Ngày Lặp</td>
        <td>Tổng Thành Tiền</td>
        <td>Mã Tài Khoản</td>
        <td>Mã Tình Trạng</td>
    </tr>
<?php
    $sql = "SELECT MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang
    FROM dondathang";
    $list = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($list)){
            $maDonDatHang = $row["MaDonDatHang"];
            $ngayLap = $row["NgayLap"];
            $tongThanhTien = $row["TongThanhTien"];
            $maTaiKhoan = $row["MaTaiKhoan"];
            $maTinhTrang = $row["MaTinhTrang"];
            include ("templates/tempLietKeDonDatHang.php");
        }
?>
</table>