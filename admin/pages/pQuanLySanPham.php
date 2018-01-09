<h1><b>Quản Lý Sản Phẩm</b></h1>
<strong>Nhập thông tin sản phẩm cần thêm</strong>
<form action="index.php?a=3&b=1" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Tên Sản Phẩm</td>
        <td>Giá Sản Phẩm</td>
        <td>Số Lượng</td>
        <td>Mô Tả</td>
        <td>Mã Loại</td>
        <td>Mã Hãng</td>
        <td>Hình URL</td>
    </tr>
    <tr>
        <td><input type="text" name="txtTenSanPham" id="txtTenSanPham" size="10"></td>
        <td><input type="number" name="nbGiaSanPham" id="nbGiaSanPham" size="8"></td>
        <td><input type="text" name="txtSoLuong" id="txtSoLuong" size="6"></td>
        <td><input type="text" name="txtMoTa" id="txtMoTa"></td>
        <td><input type="text" name="txtMaLoai" id="txtMaLoai" size="5"></td>
        <td><input type="text" name="txtMaHang" id="txtMaHang" size="5"></td>
        <td><input type="text" name="txtHinh" id="txtHinh" size="7"></td>

    </tr>
</table>
    <input type="submit" value="Thêm">
</form>

<strong>Nhập thông tin sản phẩm cần sửa</strong>
<form action="index.php?a=4&b=1" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td width="10">Mã Sản Phẩm cần Sửa</td>
        <td width="10">Tên Sản Phẩm</td>
        <td width="10">Giá Sản Phẩm</td>
        <td width="10">Số Lượng</td>
        <td width="10">Ngày Nhập</td>
        <td width="10">Mô Tả</td>
        <td width="10">Mã Loại</td>
        <td width="10">Mã Hãng</td>
        <td width="10">Hình URL</td>
    </tr>
    <tr>
        <td><input type="number" name="nbMaSanPham" id="nbMaSanPham" size="1"></td>
        <td><input type="text" name="txtTenSanPham" id="txtTenSanPham" size="15"></td>
        <td><input type="number" name="nbGiaSanPham" id="nbGiaSanPham" size="3"></td>
        <td><input type="text" name="txtSoLuong" id="txtSoLuong" size="2"></td>
        <td><input type="datetime" name="dtNgayNhap" id="dtNgayNhap" size="3"></td>
        <td><input type="text" name="txtMoTa" id="txtMoTa" size="10"></td>
        <td><input type="text" name="txtMaLoai" id="txtMaLoai" size="1"></td>
        <td><input type="text" name="txtMaHang" id="txtMaHang" size="1"></td>
        <td><input type="text" name="txtHinh" id="txtHinh" size="5"></td>

    </tr>
</table>
    <input type="submit" value="Sửa"></a>
</form>

<strong>Chọn mã sản phẩm muốn xóa</strong>
<form action="index.php?a=5&b=1" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Mã Sản Phẩm</td>
    </tr>
    <tr>
        <td><input type="number" name="nbMaSanPham" id="nbMaSanPham" size="8"></td>
    </tr>
</table>
    <input type="submit" value="Xóa">
</form>

<span><strong>Nhấn vào Liệt kê để xem thông tin sản phẩm: </strong></span>
<a href="index.php?a=6"><input type="submit" value="Liệt kê"></a>
<form action="index.php?a=7" method="POST">
    Tìm Kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem"><input type="submit" value="Tìm"></a>
</form>