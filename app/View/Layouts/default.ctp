<?php
$description = __d('title', 'Your Kanban Board');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $description ?>:
            <?php echo $title_for_layout; ?>
        </title>

                
                 <style type="text/css">
                    body {
                        padding-top: 60px;
                        padding-bottom: 40px;
                    }
                    .sidebar-nav {
                        padding: 9px 0;
                    }
                </style>

            <?php
            echo $this->Html->meta('icon');

            echo $this->Html->css(array('bootstrap.min'));

            echo $this->Html->script(array('jquery-1.7.1.min', 'bootstrap.min'));

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
            ?>

            <script type="text/javascript">
                $(document).ready(function() {
                    $("div.index table").addClass("table table-striped");
                    $("div.paging").addClass('pagination');
                    
                    $('.tabs').click(function(e) {
                        e.preventDefault();
                        alert('tab clicked!');
                    });
                    
                    
                
                });
            </script>
    </head>
    <body data-spy="scroll" data-target=".subnav" data-offset="50">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                  
                    <?php echo $this->Html->link(__($app_name), array('controller' => 'pages', 'action' => 'home'), array('class' => 'brand')); ?> 
                       
                    <?php if ($user_details) { ?>
                        <div class="nav-collapse">
                            <ul class="nav">
     
                       
                       
                                <li><?php echo $this->Html->link(__('Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
								<li><?php echo $this->Html->link(__('Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
                                <li><?php echo $this->Html->link(__('Students'), array('controller' => 'lecturers', 'action' => 'index')); ?> </li>
								<li><?php echo $this->Html->link(__('Lecturers'), array('controller' => 'lecturers', 'action' => 'index')); ?> </li>
                       
                            </ul>

                            <ul class="nav pills pull-right">
                                <li class="navbar-text">Logged in as </li>
                                <li class="dropdown" id="menu1">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                                        <?php echo $user_details['fullname']; ?>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="icon-user"></i>Profile</a></li>
                                        <li class=""><a href="#"><i class="icon-cog"></i> Settings</a></li>
                                        <li class=""><a href="#"><i class="icon-flag"></i> Help</a></li>


                                        <li class="divider"></li>
                                        <li><?php echo $this->Html->link(__('  Logout'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
                       
                                  
                                    </ul>
                                </li>
                                ...
                            </ul>
                        </div><!--/.nav-collapse -->
                    <?php } ?>
                </div>
            </div>
        </div>





        <div id="container" class="container">
            <?php if($this->Html->getCrumbList()) { ?>
            <div id="" class="breadcrumb">
                <?php
                echo $this->Html->getCrumbs(' / ', array(
                    'text' => 'Dashboard',
                    'url' => array('controller' => 'pages', 'action' => 'display', 'home'),
                    'escape' => false
                ));
                ?>
            </div>
            <?php } ?>

            <div id="content">



                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>



            <hr>

                <footer>
                    <p>National Training Institute</p>

                </footer>
        </div>


        <?php echo $this->element('sql_dump'); ?>
    </body>


</html>
