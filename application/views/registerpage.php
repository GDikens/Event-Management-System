<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="register-img3-body">

    <div class="container">

      <form class="register-form" action="<?php echo base_url()?>index.php/Registerpage_model/form_insert" method="post">
       <div class="register-wrap">
         <?php echo form_open('register_controller'); ?>

           <div class="input-group">
             <span class="input-group-addon"><i class="icon_profile"></i></span>
             <?php echo form_error('fname'); ?>
             <input type="text" id ="fname" class="form-control" placeholder="First Name" autofocus>
           </div>

           <div class="input-group">
             <span class="input-group-addon"><i class="icon_profile"></i></span>
             <?php echo form_error('lname'); ?>
             <input type="text" id="lname" class="form-control" placeholder="Last Name" autofocus>
           </div>

           <div class="input-group">
             <span class="input-group-addon"><i class="icon_id"></i></span>
             <?php echo form_error('nic'); ?>
             <input type="text" id="nic" class="form-control" placeholder="NIC Number" autofocus>
           </div>

          <div class="input-group">
          <span class="input-group-addon"><i class="icon_calendar"></i></span>
          <?php echo form_error('email'); ?>
            <input type="text" id="email" class="form-control" placeholder="E-Mail" autofocus>
          </div>

           <div class="input-group">
                                     <label class="control-label col-lg-5" for="inputSuccess">Gender&emsp;&emsp;&emsp;&emsp;</label>
                                     <div class="col-lg-7">
                                         <label class="radio-inline">
                                             <input type="radio" name= "Gender" id="male" value="Male"><font size="10"> <i class="fa fa-male" aria-hidden="true"></i></font>
                                         </label>
                                         <label class="radio-inline">
                                             <input type="radio" name="Gender" id="female" value="Female"><font size="10"> <i class="fa fa-female" aria-hidden="true"></i></font>
                                         </label>

                                     </div> </div>

           <div class="input-group">
             <span class="input-group-addon"><i class="icon_house_alt"></i></span>
             <?php echo form_error('address'); ?>
             <input type="text" id="address" class="form-control" placeholder="Address" autofocus>
           </div>

           <div class="input-group">
             <span class="input-group-addon"><i class="icon_phone"></i></span>
             <?php echo form_error('mobile'); ?>
             <input type="text" id="mobile" class="form-control" placeholder="Mobile Number" autofocus>
           </div>

           <div class="input-group">
             <span class="input-group-addon"><i class="  icon_pens"></i></span>
             <input type="text" id="faculty" class="form-control" placeholder="Faculty" autofocus>
           </div>

           <div class="input-group">
             <span class="input-group-addon"><i class="icon_genius"></i></span>
             <input type="text" id="position" class="form-control" placeholder="Position" autofocus>
           </div>

           <div class="input-group">
               <span class="input-group-addon"><i class="icon_key_alt"></i></span>
               <input type="text" id="function" class="form-control" placeholder="Function">
           </div>

           <div class="input-group">
               <span class="input-group-addon"><i class="icon_key_alt"></i></span>
               <?php echo form_error('pwd'); ?>
               <input type="password" id="pwd" class="form-control" placeholder="Create Password">
           </div>

           <button class="btn btn-primary btn-lg btn-block" type="submit">Let's Register!</button>

       </div>
     </form>

    <div class="text-right">

        </div>
    </div>


  </body>
</html>
