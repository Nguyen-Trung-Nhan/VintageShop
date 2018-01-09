<!-- <style>
.error{
    color: red;
    display: none;
    font-size: 11px;
}
</style>
<form action="index.php?a=15" method="POST" onSubmit="return KTDangNhap()">
    <div>
        <h1 align="center">TẠO TÀI KHOẢN MỚI</h1>
        <fieldset class="fieldset">
        <legend><strong>Thông Tin Tài Khoản</strong></legend>
        <table align="center" border="0" width="350" height="150">              
        <tr>
            <td width="300"><strong>Tên Đăng Nhập:</strong><span>*</span></td>
            <td><input type="text" name="txtTenDangNhap" id="txtTenDangNhap"></td>
        </tr>
        <tr>
            <td></td>
            <td><strong><span class="error" id="errorTenDangNhap"></span></strong></td>
        </tr>
        <tr>
            <td><strong>Mật Khẩu:</strong><span>*</span></td>
            <td><input type="password" name="txtMatKhau" id="txtMatKhau"></td>
        </tr>
        <tr>
            <td></td>
            <td><strong><span class="error" id="errorMatKhau"></strong></span></td>
        </tr>
        <tr>
            <td><strong>Nhập Lại Mật Khẩu:</strong><span>*</span></td>
            <td><input type="password" name="txtMatKhauAgain" id="txtMatKhauAgain"></td>
        </tr>
        <tr>
            <td></td>
            <td><strong><span class="error" id="errorMatKhauAgain"></strong></span></td>
        </tr>               
        </table>
        </fieldset>
        <hr width="53%">
        <fieldset class="fieldset">
        <legend><strong>Thông Tin Liên Hệ</strong></legend>
        <table align="center" border="0" width="340" height="200">
            <tr>
                <td width="300"><strong>Họ Tên Của Bạn:</strong><span>*</span></td>
                <td><input type="text" name="txtTenHienThi" id="txtTenHienThi"></td>
            </tr>
            <tr>
                <td></td>
                <td><strong><span class="error" id="errorTenHienThi"></strong></span></td>
            </tr>
            <tr>
                <td><strong>Địa Chỉ:</strong><span>*</span></td>
                <td><input type="text" name="txtDiaChi" id="txtDiaChi"></td>
            </tr>
            <tr>
                <td></td>
                <td><strong><span class="error" id="errorDiaChi"></strong></span></td>
            </tr>
            <tr>
                <td><strong>Điện Thoại:<span>*</span></strong></td>
                <td><input type="text" name="txtDienThoai" id="txtDienThoai"></td>
            </tr>
            <tr>
                <td></td>
                <td><strong><span class="error" id="errorDienThoai"></strong></span></td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td><input type="text" name="txtEmail" id="txtEmail"></td>
            </tr>
            </table>
            </fieldset>
            <br>
            <div align="center">
                <button type="submit" name="btnDK" > <strong>Đăng ký</strong></button>
            </div>          
        </div>
</form>

<script type="text/javascript">
    function KTDangNhap(){
        if(document.getElementById("txtTenDangNhap").value == ""){
            document.getElementById("txtTenDangNhap").focus();
            // alert("Tên đăng kí không được rỗng");
            $('#errorTenDangNhap').css({'display':'inline'});
            $('#errorTenDangNhap').html('Tên đăng kí không được rỗng');

            return false;
        }
        if(document.getElementById("txtMatKhau").value == ""){
            document.getElementById("txtMatKhau").focus();
            // alert("Mật khẩu không được rỗng");
            $('#errorMatKhau').css({'display':'inline'});
            $('#errorMatKhau').html('Mật khẩu không được rỗng');

            return false;
        }

        if(document.getElementById("txtMatKhau").value != document.getElementById("txtMatKhauAgain").value){
            document.getElementById("txtMatKhau").focus();
            // alert("Mật khẩu không khớp");
            $('#errorMatKhauAgain').css({'display':'inline'});
            $('#errorMatKhauAgain').html('Mật khẩu xác nhận không khớp');

            return false;
        }

        if(document.getElementById("txtTenHienThi").value == ""){
            document.getElementById("txtTenHienThi").focus();
            // alert("Tên Hiển Thị không được rỗng");
            $('#errorTenHienThi').css({'display':'inline'});
            $('#errorTenHienThi').html('Tên Hiển Thị không được rỗng');

            return false;
        }

        if(document.getElementById("txtDiaChi").value == ""){
            document.getElementById("txtDiaChi").focus();
            // alert("Địa chỉ không được rỗng");
            $('#errorDiaChi').css({'display':'inline'});
            $('#errorDiaChi').html('Địa chỉ không được rỗng');

            return false;
        }

        if(document.getElementById("txtDienThoai").value == ""){
            document.getElementById("txtDienThoai").focus();
            // alert("Điện Thoại không được rỗng");
            $('#errorDienThoai').css({'display':'inline'});
            $('#errorDienThoai').html('Điện Thoại không được rỗng');

            return false;
        }
        return true;
    }
</script> -->
<style> /*css inline*/
.error{
    color: red;
    display: none;
    font-size: 11px;
}
</style>
<form action="index.php?a=15" method="POST" onSubmit="return KTDangNhap()">
    <div>
        <h1 align="center">TẠO TÀI KHOẢN MỚI</h1>
        <fieldset class="fieldset">
        <legend><strong>Thông Tin Tài Khoản</strong></legend>
        <table align="center" border="0" width="350" height="150">              
        <tr>
            <td width="300"><strong>Tên Đăng Nhập:</strong><span>*</span></td>
            <td><input type="text" name="txtTenDangNhap" id="txtTenDangNhap"></td>
        </tr>
         <tr> <!-- Báo lỗi tên đăng ký không được rỗng -->
            <td></td>
            <td><strong><span class="error" id="errorTenDangNhap"></span></strong></td>
        </tr>
        <tr>
            <td><strong>Mật Khẩu:</strong><span>*</span></td>
            <td><input type="password" name="txtMatKhau" id="txtMatKhau"></td>
        </tr>
        <tr> <!-- Báo lỗi Mật khẩu không được rỗng -->
            <td></td>
            <td><strong><span class="error" id="errorMatKhau"></strong></span></td>
        </tr>
        <tr>
            <td><strong>Nhập Lại Mật Khẩu:</strong><span>*</span></td>
            <td><input type="password" name="txtMatKhauAgain" id="txtMatKhauAgain"></td>
        </tr>
        <tr> <!-- Báo lỗi Mật khẩu xác nhận không chính xác-->
            <td></td>
            <td><strong><span class="error" id="errorMatKhauAgain"></strong></span></td>
        </tr>               
        </table>
        </fieldset>
        <hr width="53%">
        <fieldset class="fieldset">
        <legend><strong>Thông Tin Liên Hệ</strong></legend>
        <table align="center" border="0" width="340" height="200">
            <tr>
                <td width="300"><strong>Họ Tên Của Bạn:</strong><span>*</span></td>
                <td><input type="text" name="txtTenHienThi" id="txtTenHienThi"></td>
            </tr>
            <tr> <!-- Báo lỗi Tên Hiển Thị không được rỗng -->
                <td></td>
                <td><strong><span class="error" id="errorTenHienThi"></strong></span></td>
            </tr>
            <tr>
                <td><strong>Địa Chỉ:</strong><span>*</span></td>
                <td><input type="text" name="txtDiaChi" id="txtDiaChi"></td>
            </tr>
            <tr> <!-- Báo lỗi Địa chỉ không được rỗng -->
                <td></td>
                <td><strong><span class="error" id="errorDiaChi"></strong></span></td>
            </tr>
            <tr>
                <td><strong>Điện Thoại:<span>*</span></strong></td>
                <td><input type="text" name="txtDienThoai" id="txtDienThoai"></td>
            </tr>
            <tr> <!-- Báo lỗi Điện Thoại không được rỗng -->
                <td></td>
                <td><strong><span class="error" id="errorDienThoai"></strong></span></td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td><input type="text" name="txtEmail" id="txtEmail"></td>
            </tr>
            </table>
            </fieldset>
            <br>
            <div align="center">
                <button type="submit" name="btnDK" > <strong>Đăng ký</strong></button>
            </div>          
        </div>
</form>

<script type="text/javascript">
    function KTDangNhap(){
        if(document.getElementById("txtTenDangNhap").value == "")
        {
            document.getElementById("txtTenDangNhap").focus();
            // alert("Tên đăng kí không được rỗng");
            $('#errorTenDangNhap').css({'display':'inline'});
            $('#errorTenDangNhap').html('Tên đăng kí không được rỗng');
            return false;
        }
        else
        {
            document.getElementById("txtTenDangNhap").focus();
            $('#errorTenDangNhap').css({'display':'none'});
            $('#errorTenDangNhap').html('Tên đăng kí không được rỗng');

        }

        if(document.getElementById("txtMatKhau").value == "")
        {
            document.getElementById("txtMatKhau").focus();
            // alert("Mật khẩu không được rỗng");
            $('#errorMatKhau').css({'display':'inline'});
            $('#errorMatKhau').html('Mật khẩu không được rỗng');

            return false;
        }
        else
        {
            document.getElementById("txtMatKhau").focus();
            $('#errorMatKhau').css({'display':'none'});
            $('#errorMatKhau').html('Mật khẩu không được rỗng');
        }

        if(document.getElementById("txtMatKhau").value != document.getElementById("txtMatKhauAgain").value)
        {
            document.getElementById("txtMatKhau").focus();
            // alert("Mật khẩu không khớp");
            $('#errorMatKhauAgain').css({'display':'inline'});
            $('#errorMatKhauAgain').html('Mật khẩu xác nhận không khớp');

            return false;
        }
        else
        {
            document.getElementById("txtMatKhau").focus();
            $('#errorMatKhauAgain').css({'display':'none'});
            $('#errorMatKhauAgain').html('Mật khẩu xác nhận không khớp');
        }

        if(document.getElementById("txtTenHienThi").value == "")
        {
            document.getElementById("txtTenHienThi").focus();
            // alert("Tên Hiển Thị không được rỗng");
            $('#errorTenHienThi').css({'display':'inline'});
            $('#errorTenHienThi').html('Tên Hiển Thị không được rỗng');

            return false;
        }
        else
        {
            document.getElementById("txtTenHienThi").focus();
            $('#errorTenHienThi').css({'display':'none'});
            $('#errorTenHienThi').html('Tên Hiển Thị không được rỗng');
        }

        if(document.getElementById("txtDiaChi").value == "")
        {
            document.getElementById("txtDiaChi").focus();
            // alert("Địa chỉ không được rỗng");
            $('#errorDiaChi').css({'display':'inline'});
            $('#errorDiaChi').html('Địa chỉ không được rỗng');

            return false;
        }
        else
        {
            document.getElementById("txtDiaChi").focus();
            $('#errorDiaChi').css({'display':'none'});
            $('#errorDiaChi').html('Địa chỉ không được rỗng');
        }

        if(document.getElementById("txtDienThoai").value == ""){
            document.getElementById("txtDienThoai").focus();
            // alert("Điện Thoại không được rỗng");
            $('#errorDienThoai').css({'display':'inline'});
            $('#errorDienThoai').html('Điện Thoại không được rỗng');

            return false;
        }
        else
        {
            document.getElementById("txtDienThoai").focus();
            $('#errorDienThoai').css({'display':'none'});
            $('#errorDienThoai').html('Điện Thoại không được rỗng');
        }
        return true;
    }
</script>