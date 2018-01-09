<h2>Sản Phẩm Tìm Kiếm</h2>
<h4><form action="index.php?a=7" method="POST">
    Tìm Kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem"><input type="submit" value="Tìm"></a>
</form></h4>
<?php
    if(isset($_POST["txtTimKiem"]) && ($_POST["txtTimKiem"] != "")){
    $timKiem = $_POST['txtTimKiem'];
    $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.GiaSanPham, sp.HinhURL
            FROM SanPham sp 
            WHERE sp.BiXoa = 0 and sp.TenSanPham like '%$timKiem%'" ;
    $list = DataProvider::executeQuery($sql);
    while($row = mysqli_fetch_array($list)){
        $maSanPham = $row["MaSanPham"];
        $tenSanPham = $row["TenSanPham"];
        $giaSanPham = $row["GiaSanPham"];
        $hinhURL = $row["HinhURL"];
        include ("templates/tempThumbProduct.php");
        }
    }
    else{
        DataProvider::ChangeURL("index.php?a=2");
    }
?>