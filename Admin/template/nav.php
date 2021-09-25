<?php if (!defined('nav_file')) {exit("Page Not Found!!!");} ?>
<nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            
                        <button class="btn btn-xs" id="btn" style="margin-top:15px;">Full Screen</button>
                    

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                   

                    <!-- Messages: style can be found in dropdown.less-->
                   <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="#" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small>
                                                    <i class="fa fa-clock-o"></i> 5 mins
                                                </small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">See All Messages</a>
                            </li>
                        </ul>
                    </li>

                  

                   <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li> 
                            <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li> 

                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-flag-o"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    
                                        <li>
                                            <a rel="alternate" href="#">
                                                
                                            </a>
                                        </li>
                                 
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $img;?>avatar04.png" class="user-image" alt="User Image">
                            <span class="hidden-xs">Mohammed Kamaran</span>
                        </a>
                        <ul class="dropdown-menu">

                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo $img;?>avatar04.png" class="img-circle" alt="User Image">

                                <p>
                                   
                                <small>Date</small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">

                            <a href="#" class="btn btn-default btn-flat">logout</a>
                            

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>