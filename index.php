<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-md-6 col-sm-6">
        <div class="customer-login-register">
            <div class="form-login-title">
                <h2>Đăng nhập tài khoản</h2>
            </div>
            <div class="login-form">
                <form id="form_reg" action="login.php" method="post">
                    <div class="form-fild">
                        <p><label>Ten dang nhap<span class="required">*</span></label></p>
                        <input type="text" name="txtusername" class="form-control" id="username">
                    </div>
                    <div class="form-fild">
                        <p><label>Mat khau <span class="required">*</span></label></p>
                        <input type="password" name="txtPassword" class="form-control" id="password">
                    </div>

                    <button type="submit" name="btnlogin">Dang nhap</button>
                      
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>