<dl>
<dt>Hãng sản xuất</dt>
<?php
    $sql = "SELECT hsx.MaHangSanXuat, hsx.TenHangSanXuat
            FROM HangSanXuat hsx
            WHERE hsx.BiXoa = 0";
    $list = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($list)){
        $name = $row["TenHangSanXuat"];
        $url = "index.php?a=2&id=".$row["MaHangSanXuat"];
        include "templates/tempMenu.php";
    }
?>
</dl>