        <div class="row" id="wrapper">
            <nav class="navbar navbar-default navbar-fixed-top navbar-inverse navbar-custom gradient">
                <div class="navbar-header">
                    <a class="navbar-brand" href="manage_content.php"><img class="avatar" alt="Travis Reeder" src="../images/img_0047.jpg"></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                        <span class="sr-only">Toggle navigation</span>MENU
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="nav navbar-nav">
                        <?php if(isset($_GET["nav"])) {$selected_nav = $_GET["nav"];} else {$selected_nav="";}?>
                        <!--
                        <li
                        <?php 
                            if($selected_nav == 1) {
                                echo " class=\"active\"";
                            }
                            echo ">";
                        ?>
                        <a href="../admin/manage_content.php?nav=1" title="Manage Content">Manage Content</a></li>
-->
                        <li class="dropdown"><a href="#" data-toggle="dropdown">Manage Content<span class="caret"></span></a>
                            <?php echo Navigation::manage_content_navigation(); ?>                                   
                        </li>
                        
                        <li
                        <?php 
                            if($selected_nav == 2) {
                                echo " class=\"active\"";
                            }
                            echo ">";
                        ?>
                        <a href="../admin/manage_users.php?nav=2" title="Manage Users">Manage Users</a></li>
                        <li
                        <?php 
                            if($selected_nav == 3) {
                                echo " class=\"active\"";
                            }
                            echo ">";
                        ?>
                        <a href="../admin/manage_visitors.php?nav=3" title="Manage Visitors">Manage Visitors</a></li>
                        

                        <li><a href="../admin/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>