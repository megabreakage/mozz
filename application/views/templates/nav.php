<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
  <style media="screen">
  body {
    background: #f1f2f7;
    display: table;
    font-size: 16px;
    font-family: 'Advent Pro', sans-serif;
    width: 100%; }
  </style>
  <!-- Left Panel -->
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="<?php echo base_url(); ?>images/logo.png" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url(); ?>images/logo2.png" alt="Logo"></a>
      </div>

      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="<?php echo base_url(); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
          <li class="menu-item-has-children dropdown">
            <a href="<?php echo base_url(); ?>products/new_order" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>New Order</a>
          </li>

          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Brands</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
              <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
              <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Products</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="fa fa-table"></i><a href="<?php echo base_url();?>products">Curtains</a></li>
              <li><i class="fa fa-table"></i><a href="<?php echo base_url();?>products">Pillows</a></li>
              <li><i class="fa fa-table"></i><a href="<?php echo base_url();?>products">Bedcovers & Bedsheets</a></li>
              <li><i class="fa fa-table"></i><a href="<?php echo base_url();?>products">Track Suits</a></li>
              <li><i class="fa fa-table"></i><a href="<?php echo base_url();?>products">Mosquito Nets</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Orders</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
              <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
            </ul>
          </li>
          <h3 class="menu-title">Reports</h3><!-- /.menu-title -->
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Inventory Reports</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Sales</a></li>
              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Inventory</a></li>
              <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Payments</a></li>
            </ul>
          </li>
          <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
              <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </aside><!-- /#left-panel -->
  <!-- Left Panel -->

  <!-- Right Panel -->
  <div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
      <div class="header-menu">
        <div class="col-sm-7">
          <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
          <div class="header-left">
            <button class="search-trigger"><i class="fa fa-search"></i></button>
            <div class="form-inline">
              <form class="search-form">
                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
              </form>
            </div>

            <div class="dropdown for-notification">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="count bg-danger">5</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="notification">
                <p class="red">You have 3 Notification</p>
                <a class="dropdown-item media bg-flat-color-1" href="#">
                  <i class="fa fa-check"></i>
                  <p>Server #1 overloaded.</p>
                </a>
              </div>
            </div>

            <div class="dropdown for-message">
              <button class="btn btn-secondary dropdown-toggle" type="button"
                    id="message"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ti-email"></i>
                <span class="count bg-primary">9</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="message">
                <p class="red">You have 4 Mails</p>
                <a class="dropdown-item media bg-flat-color-1" href="#">
                  <span class="photo media-left"><img alt="avatar" src="<?php echo base_url(); ?>images/avatar/1.jpg"></span>
                  <span class="message media-body">
                    <span class="name float-left">David Martin</span>
                    <span class="time float-right">Just now</span>
                      <p>Hello, this is an example msg</p>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle" src="<?php echo base_url(); ?>images/admin.jpg" alt="User Avatar">
              </a>
              <div class="user-menu dropdown-menu">
                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>
                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
              </div>
            </div>
        </div>
      </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li class="active"><?php echo $title ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
