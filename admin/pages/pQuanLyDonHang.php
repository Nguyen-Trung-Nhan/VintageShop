<h1><b>Quản Lý Đơn Đặt Hàng</b></h1>
<strong>Nhập thông tin đơn hàng cần thêm</strong>
<form action="index.php?a=3&b=5" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Mã Đơn Đặt Hàng</td>
        <td>Ngày Lặp</td>
        <td>Tổng Tiền</td>
        <td>Mã Tài Khoản</td>
        <td>Mã Tình Trạng</td>
    </tr>
    <tr>
        <td><input type="text" name="txtMaDonDatHang" id="txtMaDonDatHang" size="16"></td>
        <td><input type="text" name="dtNgayLap" id="dtNgayLap" size="8"></td>
        <td><input type="text" name="txtTongTien" id="txtTongTien" size="8"></td>
        <td><input type="text" name="txtMaTaiKhoan" id="txtMaTaiKhoan" size="12"></td>
        <td><input type="text" name="txtMaTinhTrang" id="txtMaTinhTrang" size="13"></td>
    </tr>
</table>
    <input type="submit" value="Thêm">
</form>

<strong>Nhập thông tin đơn hàng cần sửa</strong>
<form action="index.php?a=4&b=5" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Mã Đơn Đặt Hàng</td>
        <td>Ngày Lặp</td>
        <td>Tổng Tiền</td>
        <td>Mã Tài Khoản</td>
        <td>Mã Tình Trạng</td>
    </tr>
    <tr>
        <td><input type="text" name="txtMaDonDatHang" id="txtMaDonDatHang" size="16"></td>
        <td><input type="text" name="dtNgayLap" id="dtNgayLap" size="8"></td>
        <td><input type="text" name="txtTongTien" id="txtTongTien" size="8"></td>
        <td><input type="text" name="txtMaTaiKhoan" id="txtMaTaiKhoan" size="12"></td>
        <td><input type="text" name="txtMaTinhTrang" id="txtMaTinhTrang" size="13"></td>
    </tr>
</table>
    <input type="submit" value="Sửa"></a>
</form>

<span><strong>Nhấn vào Liệt kê để xem thông tin các đơn hàng: </strong></span>
<a href="index.php?a=18"><input type="submit" value="Liệt kê"></a>


<form action="index.php?a=19" method="POST">
    Tìm Kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem"><input type="submit" value="Tìm"></a>
</form>
