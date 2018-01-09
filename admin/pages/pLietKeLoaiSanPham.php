<h2>Liệt Kê Loại Sản Phẩm</h2>
<table width="600" border="1" cellspacing="0">
    <tr>
        <td>Mã Loại Sản Phẩm</td>
        <td>Tên Loại Sản Phẩm</td>
    </tr>
<?php
    $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham
    FROM loaisanpham
    WHERE loaisanpham.BiXoa = 0";
    $list = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($list)){
            $maLoaiSanPham = $row["MaLoaiSanPham"];
            $tenLoaiSanPham = $row["TenLoaiSanPham"];
            include ("templates/tempLietKeLoaiSanPham.php");
        }
?>
</table>