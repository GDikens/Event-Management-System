<?php require 'templates/header.php' ;?>

<script type="text/javascript">
    
    function get() {

        var input= $('#text1').val();
        $('#feed1').prepend('<div>' +input + '<hr/>' + '</div>' );
        var input2= $('#selectedFile1').val();
        $('#feed1').prepend('<div>' +input2 + '<hr/>' + '</div>' );

        // var path=document.getElementById('selectedFile1').value;
        // var path=path.substr(12);
        // var relativepath="../images/";
        // var truepath=relativepath.concat(path);
        // var t1="<img src=\"";
        // var t2="\" style=\"width:800px;height:400px;\">";
        // var final=t1.concat(truepath).concat(t2);
        // document.getElementById('details').value="";
        // $(final)..insertAfter( '#feed1' );
        // $('#uploadFile').html("");

    }

</script>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">AIESEC <span class="lite">COLOMBO</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">

                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->

                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="profile"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <?php require '/templates/sidebar.php';?>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> News Feed</h3>
				</div>
			</div>
              
            <div class="row">

				
			</div><!--/.row-->

                <section class="panel" style="background-color: #dfe3ee">                        
                            
                    <div class="panel-body" >
           
                        <div class="well col-lg-6 col-md-offset-2" id="target"> 
                                   <form class="form-horizontal" role="form">
                                    <h4>Tell What you have</h4>
                                     <div class="form-group" style="padding:4px;">
                                      <textarea class="form-control" placeholder="Discription" id="text1" name="text1"></textarea>
                                    </div>
                                    <button class="btn btn-primary pull-right" type="button" value="post" onclick="get()">Post</button>
                                    <ul class="list-inline"><li><input type="file" multiple id="selectedFile1" style="display: none;" /><button type="button" value="" onclick="document.getElementById('selectedFile1').click();" ><i class="fa fa-picture-o" aria-hidden="true"></i></button>  Select Image</a></li><li>
                                       
                                    </li></ul>
                                  </form>
                        </div>
                        
                    </div>
                    <br>
                        <div id="feed1" class="col-lg-12 col-md-offset-2">
                            
                        </div>
                </section>
            </section>






      <!--main content end-->
            </section>
   <?php require 'templates/footer.php'; ?>