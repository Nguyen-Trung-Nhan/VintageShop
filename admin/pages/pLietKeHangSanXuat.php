<h2>Liệt Kê Hãng Sản Phẩm</h2>
<table width="600" border="1" cellspacing="0">
    <tr>
        <td>Mã Hãng Sản Phẩm</td>
        <td>Tên Hãng Sản Phẩm</td>
        <td>Logo URL</td>
    </tr>
<?php
    $sql = "SELECT MaHangSanXuat, TenHangSanXuat, LogoURL
    FROM hangsanxuat
    WHERE BiXoa = 0";
    $list = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($list)){
            $maHangSanXuat = $row["MaHangSanXuat"];
            $tenHangSanXuat = $row["TenHangSanXuat"];
            $logoURL = $row["LogoURL"];
            include ("templates/tempLietKeHangSanXuat.php");
        }
?>
</table>