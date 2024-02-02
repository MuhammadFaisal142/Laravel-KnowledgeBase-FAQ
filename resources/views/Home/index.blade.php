<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, Fox-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Uicod Admin - Dashboard</title>
  
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="css/master_style.min.css">

	<!-- Aries_admin Skins. Choose a skin from the css/skins
	folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="css/skins/_all-skins.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<style>
		ul.common li {
			display: inline-block;
			line-height: 40px;
			list-style: outside circle none;
			width: 48%;
		}
	</style>
	
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition sidebar-collapse skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Uicod</b>Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope"></i>
              <span class="label label-success">5</span>
            </a>            
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell"></i>
              <span class="label label-warning">7</span>
            </a>            
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag"></i>
              <span class="label label-danger">6</span>
            </a>            
          </li>          
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">

        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active">
          <a href="#installation">
            <i class="fa fa-microchip"></i> <span>Documentation</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
    
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DOCUMENTATION PAGE
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Documentation Page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div id="installation" class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-blue"><i class="fa fa-flag"></i> Introduction</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>Uicod Admin is a popular open source WebApp template for admin dashboards and control panels. It is a responsive HTML template that is based on the CSS framework Bootstrap 4 It utilizes all of the Bootstrap components in its design and re-styles many commonly used plugins to create a consistent design that can be used as a user interface for backend applications. Uicod Admin is based on a modular design, which allows it to be easily customized and built upon. This documentation will guide you through installing the template and exploring the various components that are bundled with the template.</p>
          	</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
      <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-blue"><i class="fa fa-microchip"></i> Installation Guide</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>First of all, choose you desire folder & copy that folder and also copy that <b>assets</b> folder. </p>
          		
          		<p>example : <i class="fa fa-folder text-warning"></i> <strong>Uicod Admin</strong> + <i class="fa fa-folder text-warning"></i> <strong>assets (Required)</strong> <strong>= Enjoy your demo.</strong></p>
          		
          	</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
      <div id="plugins" class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-blue"><i class="fa fa-plug"></i> Dependencies & Plugins</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<h4 class="text-red">Dependencies</h4>
				<p>Uicod Admin depends on two main frameworks.
					The downloadable package contains both of these libraries, so you don't have to manually download them.</p>
				<ul class="bring-up">
					<li><a href="http://getbootstrap.com" target="_blank">Bootstrap  v4.2.1</a></li>
					<li><a href="http://jquery.com/" target="_blank">jQuery 1.11+</a></li>
				</ul>          		
          	</div>
          	<div class="col-sm-12 clearfix"><br></div>
          	<div class="col-md-12 col-sm-12">
          		<h4 class="text-red">Plugins</h4>
				<p>Uicod Admin makes use of the following plugins. For documentation, updates or license information, please visit
            the provided links.</p>
				
				<div class="row">
					<div class="col-sm-3">
						<ul class="list-unstyled">
							<li><h4>Charts</h4></li>
							<li><a href="http://www.chartjs.org/" target="_blank">ChartJS</a></li>
							<li><a href="http://www.flotcharts.org/" target="_blank">Flot</a></li>
							<li><a href="http://morrisjs.github.io/morris.js/" target="_blank">Morris.js</a></li>
							<li><a href="http://omnipotent.net/jquery.sparkline/" target="_blank">Sparkline</a></li>
							<li><a href="http://benpickles.github.io/peity/" target="_blank">peity</a></li>
							<li><a href="https://apexcharts.com/" target="_blank">apexcharts</a></li>
						</ul>
					</div><!-- /.col -->
					<div class="col-sm-3">
						<ul class="list-unstyled">
							<li><h4>Form Elements</h4></li>
							<li><a href="https://github.com/seiyria/bootstrap-slider/">Bootstrap Slider</a></li>
							<li><a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">Ion Slider</a></li>
							<li><a href="http://bootstrap-datepicker.readthedocs.org/" target="_blank">Date Picker</a></li>
							<li><a href="http://www.daterangepicker.com/" target="_blank">Date Range Picker</a></li>
							<li><a href="http://mjolnic.com/bootstrap-colorpicker/" target="_blank">Color Picker</a></li>
							<li><a href="https://github.com/jdewit/bootstrap-timepicker/" target="_blank">Time Picker</a></li>
							<li><a href="http://fronteed.com/iCheck/" target="_blank">iCheck</a></li>
							<li><a href="https://github.com/RobinHerbots/jquery.inputmask/" target="_blank">Input Mask</a></li>
							<li><a href="http://reactiveraven.github.io/jqBootstrapValidation/" target="_blank">Form Validation</a></li>
							<li><a href="http://www.jquery-steps.com/" target="_blank">Form Wizard</a></li>
							<li><a href="http://firstopinion.github.io/formatter.js/" target="_blank">Mask Form Elements</a></li>
							<li><a href="https://github.com/toopay/bootstrap-markdown" target="_blank">Markdown</a></li>
						</ul>
					</div><!-- /.col -->
					<div class="col-sm-3">
						<ul class="list-unstyled">
							<li><h4>Editors</h4></li>
							<li><a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg/" target="_blank">Bootstrap WYSIHTML5</a></li>
							<li><a href="http://ckeditor.com/" target="_blank">CK Editor</a></li>
							<li><a href="https://ace.c9.io/" target="_blank">ACE Editor</a></li>
						</ul>
					</div><!-- /. col -->
					<div class="col-sm-3">
						<ul class="list-unstyled">
							<li><h4>Other</h4></li>
							<li><a href="https://datatables.net/examples/styling/bootstrap.html" target="_blank">DataTables</a>
							</li>
							<li><a href="http://fullcalendar.io/" target="_blank">Full Calendar</a></li>
							<li><a href="http://jqueryui.com/" target="_blank">jQuery UI</a></li>
							<li><a href="http://anthonyterrien.com/knob/" target="_blank">jQuery Knob</a></li>
							<li><a href="http://jvectormap.com/" target="_blank">jVector Map</a></li>
							<li><a href="http://rocha.la/jQuery-slimScroll/" target="_blank">Slim Scroll</a></li>
							<li><a href="http://github.hubspot.com/pace/docs/welcome/" target="_blank">Pace</a></li>
							<li><a href="http://weathericons.char95.com/" target="_blank">Weather Icons</a></li>
							<li><a href="https://github.com/dimsemenov/Magnific-Popup" target="_blank">Magnific Popup</a></li>
							<li><a href="https://github.com/ashleydw/lightbox" target="_blank">lightbox master</a></li>
							<li><a href="https://sweetalert.js.org/" target="_blank">Sweetalert</a></li>
						</ul>
					</div><!-- /.col -->
				</div><!-- /.row -->
          	</div>
          	
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->      
      
      <div class="box box-solid box-success color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-html5"></i> Layout (HTML)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          	   <h4 class="text-green">The layout consists of four major parts:</h4>
          		<ul>
				<li>Wrapper <code>.wrapper</code>. A div that wraps the whole site.</li>
				<li>Main Header <code>.main-header</code>. Contains the logo and navbar.</li>
				<li>Sidebar <code>.sidebar-wrapper</code>. Contains the user panel and sidebar menu.</li>
				<li>Content <code>.content-wrapper</code>. Contains the page header and content.</li>
			</ul>
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          	   <h4 class="text-green">Layout Options</h4>
          	    <div class="callout callout-danger">
					<h4>Note!</h4>
					<p>You cannot use both layout-boxed and fixed at the same time. Anything else can be mixed together.</p>
				</div>
          		<p>Uicod Admin provides a set of options to apply to your main layout. Each one of these classes can be added
					to the body tag to get the desired goal.</p>
				<ul>
					<li><b>Fixed:</b> use the class <code>.fixed</code> to get a fixed header and sidebar.</li>
					<li><b>Collapsed Sidebar:</b> use the class <code>.sidebar-collapse</code> to have a collapsed sidebar upon
						loading.
					</li>
					<li><b>Boxed Layout:</b> use the class <code>.layout-boxed</code> to get a boxed layout that stretches only
						to 1250px.
					</li>					
				</ul>
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          	   <h4 class="text-green">Skins</h4>
          	    <p>Skins can be found in the <code>css/skins</code> folder.
					Choose the skin file that you want and then add the appropriate
					class to the body tag to change the template's appearance. Here is the list of available skins:</p>
          		
          		<table id="layout-skins-list" class="table table-striped bring-up nth-2-center">
                    <thead>
                    <tr>
                        <th style="width: 210px;">Skin Class</th>
                        <th>Preview</th>
                        <th style="width: 210px;">Skin Class</th>
                        <th>Preview</th>
                        <th style="width: 210px;">Skin Class</th>
                        <th>Preview</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><code>skin-blue</code></td>
                        <td>
                            <a href="#" data-skin="skin-blue" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                        </td>
                        <td><code>skin-yellow</code></td>
                        <td><a href="#" data-skin="skin-yellow" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i></a>
                        </td>
                        <td><code>skin-red</code></td>
                        <td><a href="#" data-skin="skin-red" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                   
                    <tr>
                        <td><code>skin-green</code></td>
                        <td><a href="#" data-skin="skin-green" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                        </td>
                        <td><code>skin-purple</code></td>
                        <td>
                            <a href="#" data-skin="skin-purple" class="btn bg-purple btn-xs"><i class="fa fa-eye"></i></a>
                        </td>
                        <td><code>skin-black</code></td>
                        <td><a href="#" data-skin="skin-black" class="btn bg-black btn-xs"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                   
                   
                    </tbody>
                </table>
          		
          	</div>
          	
          	
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
       <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-blue"><i class="fa fa-hand-o-right"></i> Main Header (HTML)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>The main header contains the logo and navbar. Construction of the navbar differs slightly from Bootstrap because it has components that Bootstrap doesn't provide. The navbar can be constructed in two ways. This is an example for the normal navbar.</p>
          		<p><b>Below code is used at the main header of all HTML pages</b></p>
          	</div>
          	
          	
          	<div class="col-md-12 col-sm-12">
          		<img src="images/doce/img-1.png" alt="img-1" class="img-responsive margin-bottom" />
          	</div>
          	<div class="col-md-12 col-sm-12">
          		<pre class="active">
&lt;header class=&quot;main-header&quot;&gt;
      &lt;!-- Sidebar toggle button--&gt;
      &lt;a href=&quot;#&quot; class=&quot;sidebar-toggle&quot; data-toggle=&quot;push-menu&quot; role=&quot;button&quot;&gt;
        &lt;span class=&quot;sr-only&quot;&gt;Toggle navigation&lt;/span&gt;
      &lt;/a&gt;
		&lt;!-- Logo --&gt;
		&lt;a href=&quot;index.html&quot; class=&quot;logo&quot;&gt;
		  &lt;!-- mini logo --&gt;
		  &lt;b class=&quot;logo-mini&quot;&gt;
			  &lt;span class=&quot;light-logo&quot;&gt;&lt;img src=&quot;../images/logo-light.png&quot; alt=&quot;logo&quot;&gt;&lt;/span&gt;
			  &lt;span class=&quot;dark-logo&quot;&gt;&lt;img src=&quot;../images/logo-dark.png&quot; alt=&quot;logo&quot;&gt;&lt;/span&gt;
		  &lt;/b&gt;
		  &lt;!-- logo--&gt;
		  &lt;span class=&quot;logo-lg&quot;&gt;
			  &lt;img src=&quot;../images/logo-light-text.png&quot; alt=&quot;logo&quot; class=&quot;light-logo&quot;&gt;
			  &lt;img src=&quot;../images/logo-dark-text.png&quot; alt=&quot;logo&quot; class=&quot;dark-logo&quot;&gt;
		  &lt;/span&gt;
		&lt;/a&gt;
    &lt;!-- Header Navbar --&gt;
    &lt;nav class=&quot;navbar navbar-static-top&quot;&gt;
		&lt;div class=&quot;ml-10 app-menu&quot;&gt;
			&lt;ul class=&quot;header-megamenu nav&quot;&gt;
				&lt;li class=&quot;btn-group nav-item&quot;&gt;
					&lt;a href=&quot;#&quot; class=&quot;nav-link rounded&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
						&lt;i class=&quot;nav-link-icon mdi mdi-view-dashboard text-white mx-5&quot;&gt; &lt;/i&gt;
                        Mega Menu
						&lt;i class=&quot;fa fa-angle-down ml-2&quot;&gt;&lt;/i&gt;
					&lt;/a&gt;
					&lt;div class=&quot;dropdown-menu dropdown-grid&quot;&gt;
						&lt;div class=&quot;dropdown-mega-menu&quot;&gt;
							&lt;div class=&quot;row&quot;&gt;
								&lt;div class=&quot;col-lg-4 col-12&quot;&gt;
									&lt;ul class=&quot;nav flex-column&quot;&gt;
										&lt;li class=&quot;nav-item-header nav-item&quot;&gt;
											Overview
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;
												&lt;i class=&quot;nav-link-icon fa fa-inbox&quot;&gt;
												&lt;/i&gt;
												&lt;span&gt;
													Contacts
												&lt;/span&gt;
											&lt;/a&gt;
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;
												&lt;i class=&quot;nav-link-icon fa fa-book&quot;&gt;
												&lt;/i&gt;
												&lt;span&gt;
													Incidents
												&lt;/span&gt;
												&lt;div class=&quot;ml-auto badge badge-pill badge-danger&quot;&gt;5
												&lt;/div&gt;
											&lt;/a&gt;
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;
												&lt;i class=&quot;nav-link-icon fa fa-picture-o&quot;&gt;
												&lt;/i&gt;
												&lt;span&gt;
													Companies
												&lt;/span&gt;
											&lt;/a&gt;
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a disabled=&quot;&quot; href=&quot;javascript:void(0);&quot; class=&quot;nav-link disabled&quot;&gt;
												&lt;i class=&quot;nav-link-icon fa fa-dashboard&quot;&gt;
												&lt;/i&gt;
												&lt;span&gt;
													Dashboards
												&lt;/span&gt;
											&lt;/a&gt;
										&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/div&gt;
								&lt;div class=&quot;col-lg-4 col-12 bx-1&quot;&gt;
									&lt;ul class=&quot;nav flex-column&quot;&gt;
										&lt;li class=&quot;nav-item-header nav-item&quot;&gt;
											Favourites
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;
												Reports Conversions
											&lt;/a&gt;
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;
												Quick Start
												&lt;div class=&quot;ml-auto badge badge-success&quot;&gt;New&lt;/div&gt;
											&lt;/a&gt;
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;Users &amp; Groups&lt;/a&gt;
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;Proprieties&lt;/a&gt;
										&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/div&gt;
								&lt;div class=&quot;col-lg-4 col-12&quot;&gt;
									&lt;ul class=&quot;nav flex-column&quot;&gt;
										&lt;li class=&quot;nav-item-header nav-item&quot;&gt;
											Sales & Marketing
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;Queues
											&lt;/a&gt;
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;Resource Groups
											&lt;/a&gt;
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;Goal Metrics
												&lt;div class=&quot;ml-auto badge badge-warning&quot;&gt;3
												&lt;/div&gt;
											&lt;/a&gt;
										&lt;/li&gt;
										&lt;li class=&quot;nav-item&quot;&gt;
											&lt;a href=&quot;javascript:void(0);&quot; class=&quot;nav-link&quot;&gt;Campaigns
											&lt;/a&gt;
										&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/div&gt;
							&lt;/div&gt;
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/li&gt;
				&lt;li class=&quot;btn-group nav-item&quot;&gt;
					&lt;a href=&quot;#&quot; class=&quot;nav-link rounded&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
						&lt;span class=&quot;badge badge-pill badge-danger ml-0 mr-2&quot;&gt;4&lt;/span&gt;
						Settings
						&lt;i class=&quot;fa fa-angle-down ml-2&quot;&gt;&lt;/i&gt;
					&lt;/a&gt;
					&lt;div class=&quot;dropdown-menu&quot;&gt;
						&lt;div class=&quot;dropdown-menu-header-inner bg-img&quot; style=&quot;background-image: url('../images/gallery/landscape1.jpg');&quot; data-overlay=&quot;5&quot;&gt;
							&lt;div class=&quot;px-10 py-20 w-250 text-center&quot;&gt;
								&lt;h5 class=&quot;text-white&quot;&gt;Overview&lt;/h5&gt;
								&lt;h6 class=&quot;text-white mb-0&quot;&gt;Dropdown menus for everyone&lt;/h6&gt;
							&lt;/div&gt;
						&lt;/div&gt;
						&lt;div&gt;
							&lt;h4 class=&quot;dropdown-header py-15 text-success font-size-18&quot;&gt;Key Figures&lt;/h4&gt;
							&lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-flat btn-primary w-p100 text-left no-radius&quot;&gt;&lt;i class=&quot;fa fa-folder mr-10&quot;&gt; &lt;/i&gt;Service Calendar&lt;/button&gt;
							&lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-flat btn-primary w-p100 text-left no-radius&quot;&gt;&lt;i class=&quot;fa fa-folder mr-10&quot;&gt; &lt;/i&gt;Knowledge Base&lt;/button&gt;
							&lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-flat btn-primary w-p100 text-left no-radius&quot;&gt;&lt;i class=&quot;fa fa-folder mr-10&quot;&gt; &lt;/i&gt;Accounts&lt;/button&gt;
							&lt;div tabindex=&quot;-1&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
							&lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-flat btn-primary w-p100 text-left no-radius&quot;&gt;&lt;i class=&quot;fa fa-folder mr-10&quot;&gt; &lt;/i&gt;Products&lt;/button&gt;
							&lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-flat btn-primary w-p100 text-left no-radius&quot;&gt;&lt;i class=&quot;fa fa-folder mr-10&quot;&gt; &lt;/i&gt;Rollup Queries&lt;/button&gt;
						&lt;/div&gt;
						&lt;ul class=&quot;nav flex-column p-20&quot;&gt;
							&lt;li class=&quot;nav-item-divider nav-item&quot;&gt;&lt;/li&gt;
							&lt;li class=&quot;nav-item-btn nav-item&quot;&gt;
								&lt;button class=&quot;btn-wide btn-shadow btn btn-danger btn-sm&quot;&gt;Cancel&lt;/button&gt;
							&lt;/li&gt;
						&lt;/ul&gt;
					  &lt;/div&gt;
				&lt;/li&gt;
				&lt;li class=&quot;dropdown nav-item&quot;&gt;
					&lt;a href=&quot;#&quot; aria-haspopup=&quot;true&quot;  data-toggle=&quot;dropdown&quot; class=&quot;nav-link rounded&quot; aria-expanded=&quot;false&quot;&gt;
						&lt;i class=&quot;nav-link-icon fa fa-cogs mx-5 text-white&quot;&gt;&lt;/i&gt;
						Projects
						&lt;i class=&quot;fa fa-angle-down ml-2&quot;&gt;&lt;/i&gt;
					&lt;/a&gt;
					&lt;div class=&quot;dropdown-menu&quot;&gt;
						&lt;div class=&quot;dropdown-menu-header-inner bg-img&quot; style=&quot;background-image: url('../images/gallery/landscape1.jpg');&quot; data-overlay=&quot;5&quot;&gt;
							&lt;div class=&quot;p-30 text-left w-250&quot;&gt;
								&lt;h5 class=&quot;text-white&quot;&gt;Overview&lt;/h5&gt;
								&lt;h6 class=&quot;text-white&quot;&gt;Unlimited options&lt;/h6&gt;
								&lt;div class=&quot;menu-header-btn-pane&quot;&gt;
									&lt;button class=&quot;mr-2 btn btn-success btn-sm&quot;&gt;Settings&lt;/button&gt;
									&lt;button class=&quot;btn-icon btn-icon-only btn btn-info btn-sm&quot;&gt;
										&lt;i class=&quot;fa fa-cog&quot;&gt;&lt;/i&gt;
									&lt;/button&gt;
								&lt;/div&gt;
							&lt;/div&gt;
						&lt;/div&gt;
						&lt;div class=&quot;p-10&quot;&gt;
							&lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-flat btn-primary w-p100 text-left&quot;&gt;&lt;i class=&quot;fa fa-folder mr-10&quot;&gt; &lt;/i&gt;Graphic Design&lt;/button&gt;
							&lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-flat btn-primary w-p100 text-left&quot;&gt;&lt;i class=&quot;fa fa-folder mr-10&quot;&gt; &lt;/i&gt;App Development&lt;/button&gt;
							&lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-flat btn-primary w-p100 text-left&quot;&gt;&lt;i class=&quot;fa fa-folder mr-10&quot;&gt; &lt;/i&gt;Icon Design&lt;/button&gt;
							&lt;div tabindex=&quot;-1&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
							&lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-flat btn-primary w-p100 text-left&quot;&gt;&lt;i class=&quot;fa fa-folder mr-10&quot;&gt; &lt;/i&gt;Miscellaneous&lt;/button&gt;
							&lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-flat btn-primary w-p100 text-left&quot;&gt;&lt;i class=&quot;fa fa-folder mr-10&quot;&gt; &lt;/i&gt;Frontend Dev&lt;/button&gt;
						&lt;/div&gt;
					  &lt;/div&gt;
				&lt;/li&gt;
			&lt;/ul&gt; 
		&lt;/div&gt;

      &lt;div class=&quot;navbar-custom-menu&quot;&gt;
        &lt;ul class=&quot;nav navbar-nav&quot;&gt;
		  
		  &lt;li class=&quot;search-box&quot;&gt;
            &lt;a class=&quot;nav-link hidden-sm-down&quot; href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;iconsmind-Magnifi-Glass2&quot;&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;form class=&quot;app-search&quot; style=&quot;display: none;&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Search &amp; enter&quot;&gt; &lt;a class=&quot;srh-btn&quot;&gt;&lt;i class=&quot;ti-close&quot;&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/form&gt;
          &lt;/li&gt;	
          &lt;!-- Notifications --&gt;
          &lt;li class=&quot;dropdown notifications-menu&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;
              &lt;i class=&quot;iconsmind-Bell&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;ul class=&quot;dropdown-menu scale-up&quot;&gt;
              &lt;li class=&quot;header&quot;&gt;You have 7 notifications&lt;/li&gt;
              &lt;li&gt;
                &lt;!-- inner menu: contains the actual data --&gt;
                &lt;ul class=&quot;menu inner-content-div&quot;&gt;
                  &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;
                      &lt;i class=&quot;fa fa-users text-info&quot;&gt;&lt;/i&gt; Curabitur id eros quis nunc suscipit blandit.
                    &lt;/a&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;
                      &lt;i class=&quot;fa fa-warning text-warning&quot;&gt;&lt;/i&gt; Duis malesuada justo eu sapien elementum, in semper diam posuere.
                    &lt;/a&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;
                      &lt;i class=&quot;fa fa-users text-danger&quot;&gt;&lt;/i&gt; Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                    &lt;/a&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;
                      &lt;i class=&quot;fa fa-shopping-cart text-success&quot;&gt;&lt;/i&gt; In gravida mauris et nisi
                    &lt;/a&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;
                      &lt;i class=&quot;fa fa-user text-primary&quot;&gt;&lt;/i&gt; Praesent eu lacus in libero dictum fermentum.
                    &lt;/a&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;
                      &lt;i class=&quot;fa fa-user text-danger&quot;&gt;&lt;/i&gt; Nunc fringilla lorem 
                    &lt;/a&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;
                      &lt;i class=&quot;fa fa-user text-danger&quot;&gt;&lt;/i&gt; Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                    &lt;/a&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
              &lt;li class=&quot;footer&quot;&gt;&lt;a href=&quot;#&quot;&gt;View all&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/li&gt;
          &lt;!-- Control Sidebar Toggle Button --&gt;
          &lt;li&gt;
            &lt;a href=&quot;#&quot; data-toggle=&quot;control-sidebar&quot;&gt;&lt;i class=&quot;iconsmind-Gears-2&quot;&gt;&lt;/i&gt;&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/nav&gt;
  &lt;/header&gt;
</pre>
          	</div>
          	
          	
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    
     <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-blue"><i class="fa fa-hand-o-right"></i> Control Sidebar (HTML)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>Control sidebar is the right side bar. It can be used for many purposes and is extremely easy to create. The sidebar ships with two different show/hide styles. The first allows the sidebar to slide over the content. The second pushes the content to make space for the sidebar. Either of these methods can be set through the Javascript options.</p>
          		<p>The following code should be placed within the <code>.wrapper</code> div. I prefer to place it right after the footer.</p>
          		<p><b>Below code is used at the Right sidebar (Dark Markup) of all HTML pages</b></p>
          	</div>
          	
          	<div class="col-md-10 col-sm-10">
          		<pre class="active">
&lt;!-- The Right Sidebar --&gt;
&lt;aside class=&quot;control-sidebar control-sidebar-dark&quot;&gt;
  &lt;!-- Content of the sidebar goes here --&gt;
&lt;/aside&gt;
&lt;!-- The sidebar&#39;s background --&gt;
&lt;!-- This div must placed right after the sidebar for it to work--&gt;
&lt;div class=&quot;control-sidebar-bg&quot;&gt;&lt;/div&gt;
</pre>
         	<p>
            Once you create the sidebar, you will need a toggle button to open/close it.
            By adding the attribute <code>data-toggle="control-sidebar"</code> to any button, it will
            automatically act as the toggle button.
        </p>
          	</div>
          	
          	<div class="col-md-2 col-sm-2">
          		<img src="images/doce/img-3.png" alt="img-3" class="img-responsive margin-bottom" />
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          		<p><b>Below code is used at the Right sidebar (Light Markup) of all HTML pages</b></p>
          	</div>
          	
          	<div class="col-md-10 col-sm-10">
          		<pre class="active">
&lt;!-- The Right Sidebar --&gt;
&lt;aside class=&quot;control-sidebar control-sidebar-light&quot;&gt;
  &lt;!-- Content of the sidebar goes here --&gt;
&lt;/aside&gt;
&lt;!-- The sidebar&#39;s background --&gt;
&lt;!-- This div must placed right after the sidebar for it to work--&gt;
&lt;div class=&quot;control-sidebar-bg&quot;&gt;&lt;/div&gt;
</pre>
         	<p>
            Once you create the sidebar, you will need a toggle button to open/close it.
            By adding the attribute <code>data-toggle="control-sidebar"</code> to any button, it will
            automatically act as the toggle button.
        </p>
          	</div>
          	
          	<div class="col-md-2 col-sm-2">
          		<img src="images/doce/img-4.png" alt="img-4" class="img-responsive margin-bottom" />
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          		<p><b>Sidebar Toggle Markup</b></p>
          	</div>
          	
          	<div class="col-md-10 col-sm-10">
          		<pre class="active">
&lt;button class=&quot;btn btn-default&quot; data-toggle=&quot;control-sidebar&quot;&gt;Toggle Right Sidebar&lt;/button&gt;</pre>
         	
          	</div>
          	
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box --> 
      
       <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-blue"><i class="fa fa-hand-o-right"></i> Box Component (HTML)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>The box component is the most widely used component through out this template. You can use it for anything from displaying charts to just blocks of text.</p>
          		<p><b>Below code is used at the box component of all HTML pages</b></p>
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          		<img src="images/doce/img-5.png" alt="img-5" class="img-responsive margin-bottom" />
          	</div>
          	
          	<div class="col-md-6 col-sm-12">
          		<pre class="active">
&lt;div class=&quot;box&quot;&gt;
  &lt;div class=&quot;box-header with-border&quot;&gt;
    &lt;h3 class=&quot;box-title&quot;&gt;Default Box Example&lt;/h3&gt;
    &lt;div class=&quot;box-tools pull-right&quot;&gt;
      &lt;!-- Buttons, labels, and many other things can be placed here! --&gt;
      &lt;!-- Here is a label for example --&gt;
      &lt;span class=&quot;label label-primary&quot;&gt;Label&lt;/span&gt;
    &lt;/div&gt;
    &lt;!-- /.box-tools --&gt;
  &lt;/div&gt;
  &lt;!-- /.box-header --&gt;
  &lt;div class=&quot;box-body&quot;&gt;
    The body of the box
  &lt;/div&gt;
  &lt;!-- /.box-body --&gt;
  &lt;div class=&quot;box-footer&quot;&gt;
    The footer of the box
  &lt;/div&gt;
  &lt;!-- box-footer --&gt;
&lt;/div&gt;
&lt;!-- /.box --&gt;
</pre>
          	</div>
          	
          	<div class="col-md-6 col-sm-12">
          	<p><b>Box Tools</b></p>
          	<p>Boxes can contain tools to deploy a specific event or provide simple info. The following examples makes use of multiple Uicod Admin components within the header of the box.</p>
          	<p><code>Data-widget</code> attribute provides boxes with the ability to collapse or be removed. The buttons are placed in the box-tools which is placed in the box-header.</p>
          		<pre class="active">
&lt;div class=&quot;box box-default&quot; data-widget=&quot;box-widget&quot;&gt;
  &lt;div class=&quot;box-header&quot;&gt;
    &lt;h3 class=&quot;box-title&quot;&gt;Box Tools&lt;/h3&gt;
    &lt;div class=&quot;box-tools&quot;&gt;
      &lt;!-- This will cause the box to be removed when clicked --&gt;
      &lt;button class=&quot;btn btn-box-tool&quot; data-widget=&quot;remove&quot; data-toggle=&quot;tooltip&quot; title=&quot;Remove&quot;&gt;&lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;&lt;/button&gt;
      &lt;!-- This will cause the box to collapse when clicked --&gt;
      &lt;button class=&quot;btn btn-box-tool&quot; data-widget=&quot;collapse&quot; data-toggle=&quot;tooltip&quot; title=&quot;Collapse&quot;&gt;&lt;i class=&quot;fa fa-minus&quot;&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
          		</pre>
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          		<p><b>Solid Box</b></p>
          		<p>Solid Boxes are alternative ways to display boxes. They can be created by simply adding the box-solid class to the box component. You may also use contextual classes with you solid boxes.</p>
          	</div>
          	
          	<div class="col-md-7 col-sm-12">
          		<pre class="active">
&lt;div class=&quot;box box-solid box-default&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;box box-solid box-primary&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;box box-solid box-info&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;box box-solid box-warning&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;box box-solid box-success&quot;&gt;...&lt;/div&gt;
&lt;div class=&quot;box box-solid box-danger&quot;&gt;...&lt;/div&gt;
</pre>
          	</div>
          	
          	<div class="col-md-5 col-sm-12">
          		<img src="images/doce/img-6.png" alt="img-6" class="img-responsive margin-bottom" />
          	</div>
          	
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box --> 
      
      
      <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-blue"><i class="fa fa-hand-o-right"></i> Info Box (HTML)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>Info boxes are used to display statistical snippets. There are two types of info boxes.</p>
          		<p><b>Below code is used at Info boxes <u>Type One</u> of all HTML pages</b></p>
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          		<img src="images/doce/img-7.png" alt="img-7" class="img-responsive margin-bottom" />
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          		<pre class="active">
&lt;div class=&quot;info-box&quot;&gt;
  &lt;!-- Apply any bg-* class to to the icon to color it --&gt;
  &lt;span class=&quot;info-box-icon bg-red&quot;&gt;&lt;i class=&quot;fa fa-star-o&quot;&gt;&lt;/i&gt;&lt;/span&gt;
  &lt;div class=&quot;info-box-content&quot;&gt;
    &lt;span class=&quot;info-box-text&quot;&gt;Likes&lt;/span&gt;
    &lt;span class=&quot;info-box-number&quot;&gt;93,139&lt;/span&gt;
  &lt;/div&gt;
  &lt;!-- /.info-box-content --&gt;
&lt;/div&gt;
&lt;!-- /.info-box --&gt;
</pre>
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          	<p><b>Below code is used at Info boxes <u>Type Two</u> of all HTML pages</b></p>
          		<img src="images/doce/img-8.png" alt="img-8" class="img-responsive margin-bottom" />
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          		<pre class="active">
&lt;!-- Apply any bg-* class to to the info-box to color it --&gt;
&lt;div class=&quot;info-box bg-red&quot;&gt;
  &lt;span class=&quot;info-box-icon&quot;&gt;&lt;i class=&quot;fa fa-comments-o&quot;&gt;&lt;/i&gt;&lt;/span&gt;
  &lt;div class=&quot;info-box-content&quot;&gt;
    &lt;span class=&quot;info-box-text&quot;&gt;Likes&lt;/span&gt;
    &lt;span class=&quot;info-box-number&quot;&gt;41,410&lt;/span&gt;
    &lt;!-- The progress section is optional --&gt;
    &lt;div class=&quot;progress&quot;&gt;
      &lt;div class=&quot;progress-bar&quot; style=&quot;width: 70%&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class=&quot;progress-description&quot;&gt;
      70% Increase in 30 Days
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;!-- /.info-box-content --&gt;
&lt;/div&gt;
&lt;!-- /.info-box --&gt;
</pre>
         	<p>
            The only thing you need to change to alternate between these style is change the placement of the bg-* class.
            For the first style apply any bg-* class to <code>.info-box-icon</code>. For the other style, apply the bg-* class to the
            <code>.info-box</code> div.
        </p>
          	</div>
			  
          	
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box --> 
      
       
      <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-blue"><i class="fa fa-hand-o-right"></i> Direct Chat (HTML)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>The direct chat widget extends the box component to create a beautiful chat interface. This widget consists of a required messages pane and an optional contacts pane. </p>
          		<p><b>Below code is used at Direct Chat of all HTML pages</b></p>
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          		<img src="images/doce/img-9.png" alt="img-9" class="img-responsive margin-bottom" />
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          		<pre class="active">
&lt;!-- DIRECT CHAT PRIMARY --&gt;
          &lt;div class=&quot;box box-primary direct-chat direct-chat-primary&quot;&gt;
            &lt;div class=&quot;box-header with-border&quot;&gt;
              &lt;h3 class=&quot;box-title&quot;&gt;Direct Chat&lt;/h3&gt;

              &lt;div class=&quot;box-tools pull-right&quot;&gt;
				&lt;span data-toggle=&quot;tooltip&quot; title=&quot;1 New Messages&quot; class=&quot;badge bg-light-blue&quot;&gt;1&lt;/span&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-box-tool&quot; data-toggle=&quot;tooltip&quot; title=&quot;Contacts&quot; data-widget=&quot;chat-pane-toggle&quot;&gt;
				  &lt;i class=&quot;fa fa-comments&quot;&gt;&lt;/i&gt;&lt;/button&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-box-tool&quot; data-widget=&quot;collapse&quot;&gt;&lt;i class=&quot;fa fa-minus&quot;&gt;&lt;/i&gt;
				&lt;/button&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-box-tool&quot; data-widget=&quot;remove&quot;&gt;&lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;
				&lt;/button&gt;
			  &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- /.box-header --&gt;
            &lt;div class=&quot;box-body&quot;&gt;
              &lt;!-- Conversations are loaded here --&gt;
              &lt;div class=&quot;direct-chat-messages inner-content-div&quot;&gt;
                &lt;!-- Message. Default to the left --&gt;
                &lt;div class=&quot;direct-chat-msg&quot;&gt;
				  &lt;div class=&quot;direct-chat-info clearfix&quot;&gt;
					&lt;span class=&quot;direct-chat-name pull-left&quot;&gt;James Anderson&lt;/span&gt;
					&lt;span class=&quot;direct-chat-timestamp pull-right&quot;&gt;April 14, 2017 18:00 &lt;/span&gt;
				  &lt;/div&gt;
				  &lt;!-- /.direct-chat-info --&gt;
				  &lt;img class=&quot;direct-chat-img&quot; src=&quot;../images/user1-128x128.jpg&quot; alt=&quot;message user image&quot;&gt;
				  &lt;!-- /.direct-chat-img --&gt;
				  &lt;div class=&quot;direct-chat-text&quot;&gt;
					Lorem Ipsum is simply dummy text industry.
				  &lt;/div&gt;
				  &lt;!-- /.direct-chat-text --&gt;
				&lt;/div&gt;
                &lt;!-- /.direct-chat-msg --&gt;

                &lt;!-- Message to the right --&gt;
                &lt;div class=&quot;direct-chat-msg right&quot;&gt;
				  &lt;div class=&quot;direct-chat-info clearfix&quot;&gt;
					&lt;span class=&quot;direct-chat-name pull-right&quot;&gt;Michael Jorden&lt;/span&gt;
					&lt;span class=&quot;direct-chat-timestamp pull-left&quot;&gt;April 14, 2017 18:00&lt;/span&gt;
				  &lt;/div&gt;
				  &lt;!-- /.direct-chat-info --&gt;
				  &lt;img class=&quot;direct-chat-img&quot; src=&quot;../images/user3-128x128.jpg&quot; alt=&quot;message user image&quot;&gt;
				  &lt;!-- /.direct-chat-img --&gt;
				  &lt;div class=&quot;direct-chat-text&quot;&gt;
					Lorem Ipsum is...
				  &lt;/div&gt;
				  &lt;!-- /.direct-chat-text --&gt;
				&lt;/div&gt;
                &lt;!-- /.direct-chat-msg --&gt;
              &lt;/div&gt;
              &lt;!--/.direct-chat-messages--&gt;

              &lt;!-- Contacts are loaded here --&gt;
              &lt;div class=&quot;direct-chat-contacts&quot;&gt;
                &lt;ul class=&quot;contacts-list&quot;&gt;
                  &lt;li&gt;
					&lt;a href=&quot;#&quot;&gt;
					  &lt;img class=&quot;contacts-list-img&quot; src=&quot;../images/user1-128x128.jpg&quot; alt=&quot;User Image&quot;&gt;

					  &lt;div class=&quot;contacts-list-info&quot;&gt;
							&lt;span class=&quot;contacts-list-name&quot;&gt;
							  Pavan kumar
							  &lt;small class=&quot;contacts-list-date pull-right&quot;&gt;April 14, 2017&lt;/small&gt;
							&lt;/span&gt;
						&lt;span class=&quot;contacts-list-email&quot;&gt;info@.multipurpose.com&lt;/span&gt;
					  &lt;/div&gt;
					  &lt;!-- /.contacts-list-info --&gt;
					&lt;/a&gt;
				  &lt;/li&gt;
				  &lt;!-- End Contact Item --&gt;
				  &lt;li&gt;
					&lt;a href=&quot;#&quot;&gt;
					  &lt;img class=&quot;contacts-list-img&quot; src=&quot;../images/user7-128x128.jpg&quot; alt=&quot;User Image&quot;&gt;

					  &lt;div class=&quot;contacts-list-info&quot;&gt;
							&lt;span class=&quot;contacts-list-name&quot;&gt;
							  Sonu Sud
							  &lt;small class=&quot;contacts-list-date pull-right&quot;&gt;March 14, 2017&lt;/small&gt;
							&lt;/span&gt;
						&lt;span class=&quot;contacts-list-email&quot;&gt;sonu@gmail.com&lt;/span&gt;
					  &lt;/div&gt;
					  &lt;!-- /.contacts-list-info --&gt;
					&lt;/a&gt;
				  &lt;/li&gt;
                  &lt;!-- End Contact Item --&gt;
                &lt;/ul&gt;
                &lt;!-- /.contatcts-list --&gt;
              &lt;/div&gt;
              &lt;!-- /.direct-chat-pane --&gt;
            &lt;/div&gt;
            &lt;!-- /.box-body --&gt;
            &lt;div class=&quot;box-footer&quot;&gt;
              &lt;form action=&quot;#&quot; method=&quot;post&quot;&gt;
                &lt;div class=&quot;input-group&quot;&gt;
                  &lt;input type=&quot;text&quot; name=&quot;message&quot; placeholder=&quot;Type Message ...&quot; class=&quot;form-control&quot;&gt;
                      &lt;span class=&quot;input-group-btn&quot;&gt;
                        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary btn-flat&quot;&gt;Send&lt;/button&gt;
                      &lt;/span&gt;
                &lt;/div&gt;
              &lt;/form&gt;
            &lt;/div&gt;
            &lt;!-- /.box-footer--&gt;
          &lt;/div&gt;
          &lt;!--/.direct-chat --&gt;

</pre>
          	</div>
          	
          	<div class="col-md-12 col-sm-12">
          	<p><b>Solid Direct Chat</b></p>
          	<p>
				Of course you can use direct chat with a solid box by adding the class <code>solid-box</code> to the box.
				Here are a couple of examples:
			</p>
          		<img src="images/doce/img-10.png" alt="img-10" class="img-responsive margin-bottom" />
          	</div>
          	
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box --> 
      
      
      <div class="box box-solid box-warning color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-code"></i> Layout Plugin (JavaScript)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>The layout plugin manages the layout in case of css failure to reset the height or width of the content.</p>
          		<p><b>Usage</b></p>
          		<p>This plugin is activated automatically upon window load.</p>
          		<p><b>Options</b></p>
          		<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Name</th>
						<th>Type</th>
						<th>Default</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>slimscroll</td>
						<td>Boolean</td>
						<td>TRUE</td>
						<td>Whether to activate slimScroll for the sidebar.</td>
					</tr>
					<tr>
						<td>resetHeight</td>
						<td>Boolean</td>
						<td>TRUE</td>
						<td>
							Whether to reset height of the body to auto. You'd set this false if your main content div is
							scrollable rather than the body.
						</td>
					</tr>
					</tbody>
				</table>
         		<p><b>Methods</b></p>
          		<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Method</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>fix</td>
						<td>Fix the content part of the page.</td>
					</tr>
					<tr>
						<td>fixSidebar</td>
						<td>Fix the sidebar part of the page.</td>
					</tr>
					</tbody>
				</table>
				<p>
					Example: <code>$('body').layout('fix')</code>
				</p>
          	</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->      
      
       <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-green"><i class="fa fa-hand-o-right"></i> Push Menu Plugin (JavaScript)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>The PushMenu plugin controls the toggle button of the main sidebar.</p>
          		<p><b>Usage</b></p>
          		<p>This plugin can be activated as a jquery plugin or using the data api.</p>
          		<p><b>Data API</b></p>
          		<p>
					Add <code>data-toggle="push-menu"</code> to a button to activate the plugin.
				</p>
          		<pre>&lt;button class=&quot;btn btn-primary&quot; data-toggle=&quot;push-menu&quot;&gt;Toggle Sidebar&lt;/button&gt;</pre>
          		
          		<p><b>JQuery</b></p>
          		
          		<pre>$(&#39;.sidebar-toggle-btn&#39;).pushMenu(options)</pre>
          		
         		<p><b>Options</b></p>
          		<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Name</th>
						<th>Type</th>
						<th>Default</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>collapseScreenSize</td>
						<td>Number</td>
						<td>767</td>
						<td>Screen width in pixels for small screens.</td>
					</tr>
					<tr>
						<td>expandOnHover</td>
						<td>Boolean</td>
						<td>FALSE</td>
						<td>Whether to activate the expand on hover effect.</td>
					</tr>
					</tbody>
				</table>
				
				<p><b>Events</b></p>
          		<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Event Type</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>expanded.pushMenu</td>
						<td>Fired when the sidebar expands.</td>
					</tr>
					<tr>
						<td>collapsed.pushMenu</td>
						<td>Fired when the sidebar collapses.</td>
					</tr>
					</tbody>
				</table>
				
				
				<p>
					Example: <code>$(document).on('expanded.pushMenu', handleExpandedEvent)</code>
				</p>
         	
				<p><b>Methods</b></p>
          		<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Method</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>toggle</td>
						<td>Toggles the state of the menu between expanded and collapsed.</td>
					</tr>
					</tbody>
				</table>
								
				<p>
					Example: <code>$('[data-toggle="push-menu"]').pushMenu('toggle')</code>
				</p>
         	
          	</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->      
      
      <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-green"><i class="fa fa-hand-o-right"></i> Tree Plugin (JavaScript)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>The tree plugin converts a nested list into a tree view where sub menus can be expanded.</p>
          		<p><b>Usage</b></p>
          		<p>This plugin can be activated using the data-api or jQuery.</p>
          		<p><b>Data API</b></p>
          		<p>
					Add <code>data-widget="tree"</code> to any <code>ul</code> or <code>ol</code> element to activate the plugin.
					All options can be passed using the data api. Example: <code>data-animation-speed="1000"</code>.
				</p>

          		<pre class="active">
&lt;ul data-widget=&quot;tree&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;One Level&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;treeview&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;Multilevel&lt;/a&gt;
    &lt;ul class=&quot;treeview-menu&quot;&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Level 2&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
          		
          		<p><b>JQuery</b></p>
          		
          		<pre>$(&#39;ul&#39;).tree(options)</pre>
          		
         		<p><b>Options</b></p>
          		<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Name</th>
						<th>Type</th>
						<th>Default</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>animationSpeed</td>
						<td>Number</td>
						<td>500</td>
						<td>Speed of slide down/up animation in milliseconds.</td>
					</tr>
					<tr>
						<td>accordion</td>
						<td>Boolean</td>
						<td>TRUE</td>
						<td>Whether to collapse the open menu when expanding another.</td>
					</tr>
					<tr>
						<td>followLink</td>
						<td>Boolean</td>
						<td>FALSE</td>
						<td>Whether to follow the link in the <code>a</code> element instead of expanding the sub menu.</td>
					</tr>
					<tr>
						<td>trigger</td>
						<td>String</td>
						<td><code>.treeview a</code></td>
						<td>
							Selector of the element that should respond to the click and result in expanding or collapsing it
							sibling sub menu.
						</td>
					</tr>
					</tbody>
				</table>
				
				        	
				<p><b>Events</b></p>
          		 <table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>expanded.tree</td>
						<td>Triggered after a sub menu expands.</td>
					</tr>
					<tr>
						<td>collapsed.tree</td>
						<td>Triggered after a sub menu collapses.</td>
					</tr>
					</tbody>
				</table>
								
				<p>
					Example: <code>$('ul').on('expanded.tree', handleExpandedEvent)</code>
				</p>
         	
          	</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->  
      
       <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-green"><i class="fa fa-hand-o-right"></i> Control Sidebar Plugin (JavaScript)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>The control sidebar component is part of Uicod Admin layout as the right sidebar.</p>
          		<p><b>Usage</b></p>
          		<p>This plugin can be activated using the data-api or jQuery. To activate the plugin, you must first add the HTML markup to your layout, then create the toggle button as shown below.</p>
          		<p><b>HTML Markup</b></p>
          		<pre>
&lt;!-- Control Sidebar --&gt;
&lt;aside class=&quot;control-sidebar control-sidebar-dark&quot;&gt;
  &lt;!-- Content of control sidebar goes here --&gt;
&lt;/aside&gt;
&lt;!-- /.control-sidebar --&gt;
&lt;!-- Add the sidebar&#39;s background. This div must be placed
  immediately after the control sidebar --&gt;
&lt;div class=&quot;control-sidebar-bg&quot;&gt;&lt;/div&gt;
</pre>
          		<p><b>Data API</b></p>
          		<p>
					Add <code>data-toggle="control-sidebar"</code> to any <code>button</code> or
					<code>a</code> element to activate the plugin.
					All options can be passed using the data api. Example: <code>data-slide="false"</code>.
				</p>
          		
          		<p><b>HTML Markup</b></p>
          		<pre>&lt;a href=&quot;#&quot; data-toggle=&quot;control-sidebar&quot;&gt;Toggle Control Sidebar&lt;/a&gt;</pre>
          		
          		<p><b>JQuery</b></p>
          		
          		<p>You can also activate the toggle button using jQuery by running the following example.</p>
          		<pre>$(&quot;#my-toggle-button&quot;).controlSidebar(options);</pre>
          		
         		<p><b>Options</b></p>
          		<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Name</th>
						<th>Type</th>
						<th>Default</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>Slide</td>
						<td>Boolean</td>
						<td>true</td>
						<td>Whether the sidebar should slide over the content or push the content to make space for itself.</td>
					</tr>
					</tbody>
				</table>
				
				        	
				<p><b>Events</b></p>
          		 <table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>expanded.controlsidebar</td>
						<td>Triggered after the control sidebar is expanded.</td>
					</tr>
					<tr>
						<td>collapsed.controlsidebar</td>
						<td>Triggered after the control sidebar is collapsed.</td>
					</tr>
					</tbody>
				</table>
								
				<p>
					Example: <code>$('#toggle-button').on('expanded.controlsidebar', handleExpandedEvent)</code>
				</p>
         	
          	</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->      
                  
      <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title text-green"><i class="fa fa-hand-o-right"></i> Box Widget Plugin (JavaScript)</h3>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>The box widget plugin provides the functionality for collapsing, expanding and removing a box.</p>
          		<p><b>Usage</b></p>
          		<p>This plugin can be activated using the data-api or jQuery.</p>
          		
          		<p><b>Data API</b></p>
          		<p>
					This plugin provides two data-api attributes. Any element using one of the
					following attributes must be placed within the <code>.box-tools</code> div, which
					is usually in the box header.
					<code>data-widget="collapse"</code>
				</p>
         		<p>This attribute, when attached to a button, allows the box to be collapsed/expanded when clicked.</p>
          		 
				<img src="images/doce/img-11.png" class="img-responsive" alt="img-11"/>
         		
          		<p><b>HTML Markup</b></p>
          		<pre>
&lt;div class=&quot;box&quot;&gt;
  &lt;div class=&quot;box-header with-border&quot;&gt;
    &lt;h3 class=&quot;box-title&quot;&gt;Collapsible Box Example&lt;/h3&gt;
    &lt;div class=&quot;box-tools pull-right&quot;&gt;
      &lt;!-- Collapse Button --&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-box-tool&quot; data-widget=&quot;collapse&quot;&gt;
        &lt;i class=&quot;fa fa-minus&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;!-- /.box-tools --&gt;
  &lt;/div&gt;
  &lt;!-- /.box-header --&gt;
  &lt;div class=&quot;box-body&quot;&gt;
    The body of the box
  &lt;/div&gt;
  &lt;!-- /.box-body --&gt;
  &lt;div class=&quot;box-footer&quot;&gt;
    The footer of the box
  &lt;/div&gt;
  &lt;!-- box-footer --&gt;
&lt;/div&gt;
&lt;!-- /.box --&gt;
         		</pre>
         		<p><code>data-widget="remove"</code></p>
         		
         		<p><b>This attribute, when attached to a button, allows the box to be removed when clicked.</b></p>
         		
         		 <img src="images/doce/img-12.png" class="img-responsive" alt="img-12"/>
         		
         		<p><b>HTML Markup</b></p>
          		<pre>
&lt;div class=&quot;box&quot;&gt;
  &lt;div class=&quot;box-header with-border&quot;&gt;
    &lt;h3 class=&quot;box-title&quot;&gt;Removable Box Example&lt;/h3&gt;
    &lt;div class=&quot;box-tools pull-right&quot;&gt;
      &lt;!-- Remove Button --&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-box-tool&quot; data-widget=&quot;remove&quot;&gt;
        &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;!-- /.box-tools --&gt;
  &lt;/div&gt;
  &lt;!-- /.box-header --&gt;
  &lt;div class=&quot;box-body&quot;&gt;
    The body of the box
  &lt;/div&gt;
  &lt;!-- /.box-body --&gt;
  &lt;div class=&quot;box-footer&quot;&gt;
    The footer of the box
  &lt;/div&gt;
  &lt;!-- box-footer --&gt;
&lt;/div&gt;
&lt;!-- /.box --&gt;
         		</pre>
          		
          		<p><b>JQuery</b></p>
          		
          		<p> To activate any button using jQuery, you must provide the removeTrigger and collapseTrigger options.
            Otherwise, the plugin will assume the default <code>data-widget</code> selectors.</p>
          		<pre>
$(&#39;#my-box&#39;).boxWidget({
  animationSpeed: 500,
  collapseTrigger: &#39;#my-collapse-button-trigger&#39;,
  removeTrigger: &#39;#my-remove-button-trigger&#39;,
  collapseIcon: &#39;fa-minus&#39;,
  expandIcon: &#39;fa-plus&#39;,
  removeIcon: &#39;fa-times&#39;
})
         		</pre>
          		
         		<p><b>Options</b></p>
          		 <table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Name</th>
						<th>Type</th>
						<th>Default</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>animationSpeed</td>
						<td>Number</td>
						<td>500</td>
						<td>Slide animation speed in milliseconds</td>
					</tr>
					<tr>
						<td>collapseTrigger</td>
						<td>String</td>
						<td>[data-widget="collapse"]</td>
						<td>jQuery selector to the element responsible for collapsing the box</td>
					</tr>
					<tr>
						<td>removeTrigger</td>
						<td>String</td>
						<td>[data-widget="remove"]</td>
						<td>jQuery selector to the element responsible for removing the box</td>
					</tr>
					<tr>
						<td>collapseIcon</td>
						<td>String</td>
						<td>fa-minus</td>
						<td>The CSS class for the collapse icon</td>
					</tr>
					<tr>
						<td>expandIcon</td>
						<td>String</td>
						<td>fa-plus</td>
						<td>The CSS class for the expand icon</td>
					</tr>
					<tr>
						<td>removeIcon</td>
						<td>String</td>
						<td>fa-times</td>
						<td>The CSS class for the remove icon</td>
					</tr>
					</tbody>
				</table>
				
				        	
				<p><b>Events</b></p>
          		 <table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>expanded.boxwidget</td>
						<td>Triggered after the box is expanded.</td>
					</tr>
					<tr>
						<td>collapsed.boxwidget</td>
						<td>Triggered after the box is collapsed.</td>
					</tr>
					<tr>
						<td>removed.boxwidget</td>
						<td>Triggered after the box is removed.</td>
					</tr>
					</tbody>
				</table>
								
				<p>
					Example: <code>$('#my-box').on('expanded.boxwidget', handleExpandedEvent)</code>
				</p>
        	
        		<p><b>Methods</b></p>
          		 <table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Method</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>toggle</td>
						<td>Toggles the state of the box between expanded and collapsed</td>
					</tr>
					<tr>
						<td>expand</td>
						<td>Expands the box</td>
					</tr>
					<tr>
						<td>collapse</td>
						<td>Collapses the box.</td>
					</tr>
					<tr>
						<td>remove</td>
						<td>Removes the box.</td>
					</tr>
					</tbody>
				</table>
								
				<p>
					Example: <code>$('#my-box-widget').boxWidget('toggle')</code>
				</p>
         	
          	</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->  
      
      <div class="box box-solid box-success color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-support"></i> Browser Support</h3>
        </div>
        
        <div class="callout callout-warning margin-top-20">
            <h4>Note!</h4>
            <p>
                IE9 does not support transitions or animations. The template will function properly but it won't
                use animations/transitions on IE9.
            </p>
        </div>
        
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>Uicod Admin supports the following browsers:</p>
				<ul>
					<li><b>IE9+</b></li>
					<li><b>Edge (latest)</b></li>
					<li><b>Firefox (latest)</b></li>
					<li><b>Safari (latest)</b></li>
					<li><b>Chrome (latest)</b></li>
					<li><b>Opera (latest)</b></li>
				</ul>
          	</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
      <div class="box box-solid box-primary color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-thumbs-up"></i> Creadits</h3>
        </div>
        
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<ul class="common list-group-item">
					<li><a href="http://getbootstrap.com/">Bootstrap</a></li>
					<li><a href="https://jquery.com/">Jquery</a></li>
					<li><a href="http://fortawesome.github.io/Font-Awesome/">Font-Awesome</a></li>
					<li><a href="http://ionicons.com/" target="_blank">ionicons</a></li>
					<li><a href="http://www.chartjs.org/" target="_blank">ChartJS</a></li>
					<li><a href="http://www.flotcharts.org/" target="_blank">Flot</a></li>
					<li><a href="http://morrisjs.github.io/morris.js/" target="_blank">Morris.js</a></li>
					<li><a href="http://omnipotent.net/jquery.sparkline/" target="_blank">Sparkline</a></li>
					<li><a href="https://github.com/seiyria/bootstrap-slider/">Bootstrap Slider</a></li>
					<li><a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">Ion Slider</a></li>
					<li><a href="http://bootstrap-datepicker.readthedocs.org/" target="_blank">Date Picker</a></li>
					<li><a href="http://www.daterangepicker.com/" target="_blank">Date Range Picker</a></li>
					<li><a href="http://mjolnic.com/bootstrap-colorpicker/" target="_blank">Color Picker</a></li>
					<li><a href="https://github.com/jdewit/bootstrap-timepicker/" target="_blank">Time Picker</a></li>
					<li><a href="http://fronteed.com/iCheck/" target="_blank">iCheck</a></li>
					<li><a href="https://github.com/RobinHerbots/jquery.inputmask/" target="_blank">Input Mask</a></li>
					<li><a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg/" target="_blank">Bootstrap WYSIHTML5</a></li>
					<li><a href="http://ckeditor.com/" target="_blank">CK Editor</a></li>
					<li><a href="https://datatables.net/examples/styling/bootstrap.html" target="_blank">DataTables</a></li>
					<li><a href="http://fullcalendar.io/" target="_blank">Full Calendar</a></li>
					<li><a href="http://jqueryui.com/" target="_blank">jQuery UI</a></li>
					<li><a href="http://anthonyterrien.com/knob/" target="_blank">jQuery Knob</a></li>
					<li><a href="http://jvectormap.com/" target="_blank">jVector Map</a></li>
					<li><a href="http://rocha.la/jQuery-slimScroll/" target="_blank">Slim Scroll</a></li>
					<li><a href="http://github.hubspot.com/pace/docs/welcome/" target="_blank">Pace</a></li>
					<li><a href="http://jdewit.github.com/bootstrap-timepicker">Bootstrap-timepicker</a></li>
					<li><a href="http://www.eyecon.ro/bootstrap-colorpicker">Bootstrap Colorpicker</a></li>
					<li><a href="https://select2.github.io/">Select2</a></li>
					<li><a href="https://pexels.com/">Pexels (images)</a></li>					
					<li><a href="http://weathericons.char95.com/" target="_blank">Weather Icons</a></li>
					<li><a href="https://github.com/dimsemenov/Magnific-Popup" target="_blank">Magnific Popup</a></li>
					<li><a href="https://github.com/ashleydw/lightbox" target="_blank">lightbox master</a></li>
					<li><a href="https://sweetalert.js.org/" target="_blank">Sweetalert</a></li>
					<li><a href="https://ace.c9.io/" target="_blank">ACE Editor</a></li>
					<li><a href="http://reactiveraven.github.io/jqBootstrapValidation/" target="_blank">Form Validation</a></li>
					<li><a href="http://www.jquery-steps.com/" target="_blank">Form Wizard</a></li>
				</ul>

          	</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
      <div class="box box-solid box-primary color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-thumbs-up"></i> Support</h3>
        </div>
        
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12 col-sm-12">
          		<p>If you need any help or feel any query don't hasitate just mail me (with licence key) on <strong><a href="mailto:hello@multipurposethemes.com">hello@multipurposethemes.com</a></strong>, i would love to help you, Once again thanks for purchasing the Uicod Admin template, i hope you enjoy it. Thanks</p>

          	</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
		  </div>
		  Copyright &copy; 2019 <a href="https://www.multipurposethemes.com/">MultiPurpose Themes</a>. All Rights Reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- Bootstrap 3.3.7 -->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Aries_admin App -->
	<script src="js/template.min.js"></script>
	
	<!-- Aries_admin for demo purposes -->
	<script src="js/demo.min.js"></script>
</body>
</html>
