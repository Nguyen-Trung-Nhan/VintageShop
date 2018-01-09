<h2>Sản Phẩm Tìm Kiếm</h2>
<h4><form action="index.php?a=19" method="POST">
    Tìm Kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem"><input type="submit" value="Tìm"></a>
</form></h4>
<table width="600" border="1">
    <tr>
        <td>Mã Đơn Đặt Hàng</td>
        <td>Ngày Lặp</td>
        <td>Tổng Thành Tiền</td>
        <td>Mã Tài Khoản</td>
        <td>Mã Tình Trạng</td>
    </tr>
<?php
    if(isset($_POST["txtTimKiem"]) && ($_POST["txtTimKiem"] != "")){
    $timKiem = $_POST['txtTimKiem'];
    $sql = "SELECT MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang
            FROM dondathang 
            WHERE MaDonDatHang like '%$timKiem%'" ;
    $list = DataProvider::executeQuery($sql);
    while($row = mysqli_fetch_array($list)){
        $maDonDatHang = $row["MaDonDatHang"];
        $ngayLap = $row["NgayLap"];
        $tongThanhTien = $row["TongThanhTien"];
        $maTaiKhoan = $row["MaTaiKhoan"];
        $maTinhTrang = $row["MaTinhTrang"];
        include ("templates/tempLietKeDonDatHang.php");
        }
    }
    else{
        DataProvider::ChangeURL("index.php?a=17");
    }
?>
</table>