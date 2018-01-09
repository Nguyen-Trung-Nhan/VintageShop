<h2>Sản Phẩm Tìm Kiếm Theo Loại</h2>
<h4><form action="index.php?a=10" method="POST">
    Tìm Kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem"><input type="submit" value="Tìm"></a>
</form></h4>
<table width="600" border="1">
    <tr>
        <td>Mã Loại Sản Phẩm</td>
        <td>Tên Loại Sản Phẩm</td>
    </tr>
<?php
    if(isset($_POST["txtTimKiem"]) && ($_POST["txtTimKiem"] != "")){
    $timKiem = $_POST['txtTimKiem'];
    $sql = "SELECT lsp.MaLoaiSanPham, lsp.TenLoaiSanPham
            FROM LoaiSanPham lsp
            WHERE lsp.BiXoa = 0 and lsp.TenLoaiSanPham like '%$timKiem%'" ;
    $list = DataProvider::executeQuery($sql);
    while($row = mysqli_fetch_array($list)){
        $maLoaiSanPham = $row["MaLoaiSanPham"];
        $tenLoaiSanPham = $row["TenLoaiSanPham"];
        include ("templates/tempLietKeLoaiSanPham.php");
        }
    }
    else{
        DataProvider::ChangeURL("index.php");
    }
?>
</table>