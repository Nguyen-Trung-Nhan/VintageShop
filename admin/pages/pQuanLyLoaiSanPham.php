<h1><b>Quản Lý Loại Sản Phẩm</b></h1>
<strong>Nhập thông tin tên loại sản phẩm cần thêm</strong>
<form action="index.php?a=3&b=2" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Tên Loại Sản Phẩm</td>
    </tr>
    <tr>
        <td><input type="text" name="txtTenLoaiSanPham" id="txtTenLoaiSanPham" size="17"></td>
    </tr>
</table>
    <input type="submit" value="Thêm">
</form>

<strong>Nhập thông tin mã loại sản phẩm và tên loại sản phẩm cần sửa</strong>
<form action="index.php?a=4&b=2" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Mã Loại Sản Phẩm cần Sửa</td>
        <td>Tên Loại Sản Phẩm</td>
    </tr>
    <tr>
        <td><input type="text" name="txtMaLoaiSanPham" id="txtMaLoaiSanPham" size="25"></td>
        <td><input type="text" name="txtTenLoaiSanPham" id="txtTenLoaiSanPham" size="20"></td>
    </tr>
</table>
    <input type="submit" value="Sửa"></a>
</form>

<strong>Nhập thông tin mã loại sản phẩm muốn xóa</strong>
<form action="index.php?a=5&b=2" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Mã Loại Sản Phẩm</td>
    </tr>
    <tr>
        <td><input type="text" name="txtMaLoaiSanPham" id="txtMaLoaiSanPham" size="16"></td>
    </tr>
</table>
    <input type="submit" value="Xóa">
</form>

<span><strong>Nhấn vào Liệt kê để xem liệt kê sản phẩm theo loại: </strong></span>
<a href="index.php?a=9"><input type="submit" value="Liệt kê"></a>


<form action="index.php?a=10" method="POST">
    Tìm Kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem"><input type="submit" value="Tìm"></a>
</form>