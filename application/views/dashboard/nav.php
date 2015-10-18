<!-- Navigation begin-->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/dashboard">Musy.me Administration panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"><?php echo Request::current()->uri() != "dashboard" ? HTML::anchor('dashboard', Auth::instance()->get_user()->username) : Auth::instance()->get_user()->username; ?> </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><?php echo HTML::anchor('dashboard/logout', '<i class="fa fa-sign-out fa-fw"></i> '.__('Logout')); ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
<!--                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                             /input-group 
                        </li>-->
                        <li>
                            <a href="<?php echo URL::base()?>dashboard" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo URL::base()?>catalog" ><i class="fa fa-dashboard fa-fw"></i> Catalog</a>
                        </li>
                        <li>
                            <a href="<?php echo URL::base()?>dashboard/movies"><i class="fa fa-video-camera fa-fw"></i>Movies</a>                            
                        </li>
                        <li>
                            <a href="<?php echo URL::base()?>dashboard/songs"><i class="fa fa-music fa-fw"></i> Songs</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Books</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User managements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="dashboard/users">View users</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Add user</a>
                                </li>                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<!-- Navigation end-->