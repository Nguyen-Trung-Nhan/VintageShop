<h2>Sản Phẩm Tìm Kiếm Theo Hãng</h2>
<h4><form action="index.php?a=13" method="POST">
    Tìm Kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem"><input type="submit" value="Tìm"></a>
</form></h4>
<table width="600" border="1">
    <tr>
        <td>Mã Hãng Sản Xuất</td>
        <td>Tên Hãng Sản Xuất</td>
        <td>Logo URL</td>
    </tr>
<?php
    if(isset($_POST["txtTimKiem"]) && ($_POST["txtTimKiem"] != "")){
    $timKiem = $_POST['txtTimKiem'];
    $sql = "SELECT MaHangSanXuat, TenHangSanXuat, LogoURL
            FROM hangsanxuat
            WHERE BiXoa = 0 and TenHangSanXuat like '%$timKiem%'" ;
    $list = DataProvider::executeQuery($sql);
    while($row = mysqli_fetch_array($list)){
        $maHangSanXuat = $row["MaHangSanXuat"];
        $tenHangSanXuat = $row["TenHangSanXuat"];
        $logoURL = $row["LogoURL"];
        include ("templates/tempLietKeHangSanXuat.php");
        }
    }
    else{
        DataProvider::ChangeURL("index.php");
    }
?>
</table>