<?php
$description = __d('title', 'Your Kanban Board');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $description; ?>:
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
        

    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><?php echo $app_name;?></a>
                    <?php if ($user_details) { ?>
                        <div class="nav-collapse">
                            <ul class="nav">
                                <li class="active"><a href="#">Dashboard</a></li>
                                <li><a href="#about">Clients</a></li>
                                <li><a href="#contact">Boards</a></li>
                            </ul>
                            <p class="navbar-text pull-right">Logged in as <a href="#"><?php echo $user_details['fullname']; ?></a></p>
                        </div><!--/.nav-collapse -->
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    
                      <?php // echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
                    
                </div><!--/span-->
                <div class="span9">
    

                </div>
            </div>
        </div>
 



    </body>
</html>
