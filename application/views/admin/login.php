<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url()?>assets/lte/tambahan/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/lte/tambahan/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>assets/lte/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- <link href="<?php //echo base_url()?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">-->


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="" method="post">     

                <?php if (!empty($error)):?>
                <div class="alert alert-error">
                    <?php echo $error ?>
                </div>  
                <?php endif?> 

                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="usr" class="form-control" placeholder="User ID" value="admin" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="pwd" class="form-control" placeholder="Password" value="admin" />
                    </div>          
                </div>
                <div class="footer">                                                               
                    <button type="submit" name="submit" value="submit" class="btn bg-olive btn-block">Sign me in</button>  
                </div>
            </form>
        </div>

        <script src="<?php echo base_url()?>assets/lte/tambahan/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/lte/tambahan/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>