<h2>Sản Phẩm Tìm Kiếm</h2>
<a href="index.php?a=19"><input type="button" name="btnNangCao" id="btnNangCao" value="Nâng Cao"></a><br>
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
        DataProvider::ChangeURL("index.php");
    }
?>