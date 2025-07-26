 <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.php"><span class="fa fa-area-chart"></span> Admin
			<span class="dashboard_text"> dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
			<?php if(isset($_SESSION['login']))
			{
			?>
			<li class="treeview">
                <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  
			  <li class="treeview">
                <a href="cars.php">
                <i class="fa fa-table"></i> <span>Add cars</span>
                </a>
                
              </li>
			  <li class="treeview">
                <a href="view_user.php">
                <i class="fa fa-table"></i> <span>View User</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="view_book.php">
                <i class="fa fa-table"></i> <span>View Cars</span>
                </a>
              </li> <li class="treeview">
                <a href="view_bookings.php">
                <i class="fa fa-table"></i> <span>View Bookings</span>
                </a>
              </li>
			 
			  <li class="treeview">
                <a href="logout.php">
                <i class="fa fa-sign-out"></i> <span>Logout</span>
                </a>
              </li>
			<?php
			}
else
{
	?>
	
	<li class="treeview">
                <a href="login.php">
                <i class="fa fa-sign-in"></i> <span>Login</span>
                </a>
              </li>
	<?php
}	
			?>
              
			  
			  
			 <!-- <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Components</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="grids.php"><i class="fa fa-angle-right"></i> Grids</a></li>
                  <li><a href="media.php"><i class="fa fa-angle-right"></i> Media Css</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="charts.php">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <span class="label label-primary pull-right">new</span>
                </a>
              </li>
              <li class="treeview">
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="general.php"><i class="fa fa-angle-right"></i> General</a></li>
                  <li><a href="icons.php"><i class="fa fa-angle-right"></i> Icons</a></li>
                  <li><a href="buttons.php"><i class="fa fa-angle-right"></i> Buttons</a></li>
                  <li><a href="typography.php"><i class="fa fa-angle-right"></i> Typography</a></li>
                </ul>
              </li>
			  <li>
                <a href="widgets.php">
                <i class="fa fa-th"></i> <span>Widgets</span>
                <small class="label pull-right label-info">08</small>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="forms.php"><i class="fa fa-angle-right"></i> General Forms</a></li>
                  <li><a href="validation.php"><i class="fa fa-angle-right"></i> Form Validations</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="tables.php"><i class="fa fa-angle-right"></i> Simple tables</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox </span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                <ul class="treeview-menu">
                  <li><a href="inbox.php"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
                  <li><a href="compose.php"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="login.php"><i class="fa fa-angle-right"></i> Login</a></li>
                  <li><a href="signup.php"><i class="fa fa-angle-right"></i> Register</a></li>
                  <li><a href="404.php"><i class="fa fa-angle-right"></i> 404 Error</a></li>
                  <li><a href="500.php"><i class="fa fa-angle-right"></i> 500 Error</a></li>
                  <li><a href="blank-page.php"><i class="fa fa-angle-right"></i> Blank Page</a></li>
                </ul>
              </li>
              <li class="header">LABELS</li>
              <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
            </ul>
          </div>-->
          <!-- /.navbar-collapse -->
      </nav>