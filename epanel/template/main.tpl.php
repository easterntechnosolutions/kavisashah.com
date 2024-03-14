<?php include "includes/header.php"; ?>
<body>
  <section id="container">
	<!--header start-->
		<header class="header white-bg">
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
			</div>
            <!--logo start-->
            <a href="index.php" class="logo">EASTERN<span>Admin</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <!--search & user info start-->
				<ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <!--<img alt="" src="img/avatar1_small.jpg">-->
                            <span class="username"><?=$_SESSION['username']?></span>
                            <b class="caret"></b>
                        </a>
						<?php
						$flag = 0;
						if($_SESSION['group'] == 1)
						{
							$flag = 1;
						}

						?>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
							<?php
							if($flag == 1)
							{
							echo '	
							
							<li><a href="index.php?controller=user&action=usergroup&subaction=listData" title="Manage Permission"><i class="fa fa-user"></i>&nbsp;Manage<br>User Groups</a></li>
                            <li><a href="index.php?controller=user&action=user&subaction=listData" title="Manage Permission"><i class="fa fa-user"></i>&nbsp;Manage<br>Users</a></li>
                            <li><a href="index.php?controller=permission&action=permission&subaction=listData" title="Manage Permission"><i class="fa fa-lock"></i>&nbsp;Manage<br>Permission</a></li>
							';
							}
							?>




						<li><a href="index.php?controller=user&action=changepwd" title="Change Password"><i class="fa fa-asterisk"></i>&nbsp;Change<br>Password</a></li>
						<li><a href="logoff.php" title="Logout"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
                        </ul>
					</li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
					<?php
					if($_REQUEST['controller'] == ""){
						$class='class="active"';
					}
					else
					{
						$class='';
					}
					?>
                      <a <?php echo $class; ?> href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <?php

				  if($_SESSION['group'] == 1)
				  {
					  echo '<li><a ';
					  if($_REQUEST['controller'] == 'analytics')
						  echo 'class="active"';
					  echo ' href="index.php?controller=analytics&action=dashboard&subaction=listData">
                          <i class="fa fa-bar-chart"></i>
                          <span>Google Analytics</span>
                      </a>
                      </li>';
				  }

				  ?>

				  <?php
$q = "select * from permission_master where group_id = '".$_SESSION['group']."'";
$r = ets_db_query($q);

$per = array();

while($arr = ets_db_fetch_array($r))
{
	$q1 = "select module_controller from module_master where module_id = '".$arr['module_id']."'";
	$r1 = ets_db_query($q1);
	$controller = ets_db_fetch_assoc($r1);
	$p = $arr['permissions'];
	$per[$controller['module_controller']] = $arr['permissions'];
}

?>
				 <!-- --><?php
/*				  if($per['pages'])
				  {
//					 if(strpos($_SESSION['userper'],'v') !== false) {
						 echo '<li class="sub-menu">
						  <a href="javascript:;" class="';
						  if($_REQUEST['controller'] == 'pages')
						  echo 'active';
						  echo   '"><i class="fa fa-file-text-o"></i>
							  <span>Pages</span>
						  </a>
						  <ul class="sub">
							<li><a href="index.php?controller=pages&action=pages&subaction=listData">List Page</a></li>
							<li><a href="index.php?controller=pages&action=pageimages&subaction=listData">Page Images</a></li>
							<li><a href="index.php?controller=pages&action=homecontent&subaction=editmaincontentform">Manage Home Content</a></li>
						  </ul>
						</li>';
//					 }
				  }
				  */?>







                  <?php
                  if ($per['works']) {
                      echo '<li class="sub-menu">
                          <a href="javascript:;" class="';
                      if ($_REQUEST['controller'] == 'work')
                          echo 'active';
                      echo '"><i class="fa fa-building"></i>
                              <span>Works</span>
                          </a>
                          <ul class="sub">
							<li><a href="index.php?controller=work&action=work&subaction=listData">Manage Works</a></li>
							<!--<li><a href="index.php?controller=work&action=desktoppage&subaction=listData">Dektop Page</a></li>
							<li><a href="index.php?controller=work&action=brandingpage&subaction=listData">Brandig Page</a></li>-->
						  </ul>
                        </li>';
                  }
                  ?>



                  <?php
                  if($per['contact'])
                  {
                      echo '<li>
							  <a href="index.php?controller=contact&action=contact&subaction=listData" class="';
                      if($_REQUEST['controller'] == 'contact')
                          echo 'active';
                      echo '">
								  <i class="fa fa-users"></i>
								  <span>Inquiry</span>
							  </a>
						  </li>';
                  }
                  ?>



				  <?php
				  if($per['settings'])
				  {
//					  if(strpos($_SESSION['userper'],'v') !== false) {
						 echo '<li class="sub-menu">
						  <a href="javascript:;" class="';
						  if($_REQUEST['controller'] == 'settings')
						  echo 'active';
						  echo   '"><i class="fa fa-cog"></i>
							  <span>Settings</span>
						  </a>
						  <ul class="sub">
							<li><a href="index.php?controller=settings&action=epanel&subaction=addForm">e-Panel Settings</a></li>
							<li><a href="index.php?controller=settings&action=website&subaction=addForm">Website Settings</a></li>
						  </ul>
						</li>';
//					  }
				  }
				  ?>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
		<section class="wrapper">
            <!--state overview start-->
            <div class="container-fluid">
				<div class="row admin-container">
					<div class="box col-sm-12">
						<?php  include $header_include; ?>
						<div class="box-content">
							<?php 	include $content_include;?>
						</div>
					</div>
				</div>
			</div>
		</section>
      </section>
	  <footer class="site-footer">
          <div class="text-right">
             <?php
				$powered = unserialize($epanel_arr['powered_by']);
			 ?>
			  <strong>Copyright &copy; <?php echo $powered['title']; ?> | Powered By : <strong><a href="<?php echo $powered['link']; ?>" target="_blank" class="footer"> Eastern Techno Solutions.</a></strong></strong>
          </div>
      </footer>
      <!--footer end-->
  </section>
	<!-- DONT TOUCH --  js placed at the end of the document so the pages load faster -->
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
  </body>
</html>
