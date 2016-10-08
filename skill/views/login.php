<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body style="background: ghostwhite;">
        <div class="container-fluid" style=" border: 0.001px solid buttonface; width: 30%; background: buttonface; margin-top: 5%;">
            <h2>Trang login</h2>
            <form action="index.php?controller=login" method="post">
                <input type="hidden" name="login">
                <?php if (isset($error['login'])) {
                    echo '<span style="color: red;">Ten Dang Nhap Hoac mat khau sai</span><br>';
                } ?>
                <span>Nhap ten tai khoan:</span><input type="text" class="form-control"name="user"<?php if (isset($error['login'])) {
                    echo 'value="' . $_POST['user'] . '"';
                } ?>><br>
                <span>Nhap password:</span> <input type="password" class="form-control"name="pass"><br>
                <input type="submit" value="Dang Nhap"class="btn btn-danger" style="margin-bottom: 5px;">
                <span>chua co tai khoan?</span><a href="index.php?controller=register">Dang Ky</a>
            </form>
        </div>
    </body>
</html>