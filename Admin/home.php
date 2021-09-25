<?php 
$css = 'public/css/';
$js = 'public/js/';
$plugin = 'public/plugins/';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo $css;?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $css;?>ionicons.min.css">
    <link rel="stylesheet" href="<?php echo $css;?>skin-blue.min.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="<?php echo $css;?>font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $css;?>AdminLTE.min.css">

     
</head>
<body class="login-page">

    
<div class="login-box">

    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div><!-- end of login lgo -->

    <div class="login-box-body">
        <p class="login-box-msg">Login Form</p>

        <form action="Panel.php">
            <input type="hidden" name="_token" value="6TxlhMexrXvqisupQRo46vvg5AAsVnRrfFO2TcTR">
            <input type="hidden" name="_method" value="post">

            
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="form-group">
                <label style="font-weight: normal;"><input type="checkbox" name="remember"> Remeber_Me</label>
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>

        </form><!-- end of form -->

    </div><!-- end of login body -->

</div><!-- end of login-box -->




 <!-- jQuery 3 -->
 <script src="<?php echo $js;?>jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $js;?>bootstrap.min.js"></script>

<script src="<?php echo $plugin;?>icheck/icheck.min.js"></script>

<script src="<?php echo $js;?>fastclick.js"></script>

</body>
</html>


