<h1><b>Quản Lý Nhà Sản Xuất</b></h1>
<strong>Nhập thông tin hãng sản xuất cần thêm</strong>
<form action="index.php?a=3&b=3" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Tên Hãng Sản Xuất</td>
        <td>Logo URL</td>
    </tr>
    <tr>
        <td><input type="text" name="txtTenHangSanXuat" id="txtTenHangSanXuat" size="17"></td>
        <td><input type="text" name="txtLogoURL" id="txtLogoURL" size="8"></td>
    </tr>
</table>
    <input type="submit" value="Thêm">
</form>

<strong>Nhập thông tin hãng sản xuất cần sửa</strong>
<form action="index.php?a=4&b=3" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Mã Hãng Sản Xuất Nào Sửa</td>
        <td>Tên Hãng Sản Xuất</td>
        <td>Logo URL</td>
    </tr>
    <tr>
        <td><input type="text" name="txtMaHangSanXuat" id="txtMaHangSanXuat" size="27"></td>
        <td><input type="text" name="txtTenHangSanXuat" id="txtTenHangSanXuat" size="17"></td>
        <td><input type="text" name="txtLogoURL" id="txtLogoURL" size="8"></td>
    </tr>
</table>
    <input type="submit" value="Sửa"></a>
</form>

<strong>Nhập thông tin mã hãng sản phẩm muốn xóa</strong>
<form action="index.php?a=5&b=3" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Mã Hãng Sản Phẩm</td>
    </tr>
    <tr>
        <td><input type="text" name="txtMaHangSanXuat" id="txtMaHangSanXuat" size="17"></td>
    </tr>
</table>
    <input type="submit" value="Xóa">
</form>

<span><strong>Nhấn vào Liệt kê để xem liệt kê hãng sản xuất: </strong></span>
<a href="index.php?a=12"><input type="submit" value="Liệt kê"></a>


<form action="index.php?a=13" method="POST">
    Tìm Kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem"><input type="submit" value="Tìm"></a>
</form>