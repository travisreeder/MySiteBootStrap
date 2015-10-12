<?php
require_once("../../includes/initialize.php");

if(!$session->is_logged_in()) {
  redirect_to("login.php");
}

include_layout_template('header3.php'); 
include_layout_template('admin_navigation.php'); 
?>

            <div class="container-fluid" id="container">
                <div class="display_content">
                    
                    <div class="row">
                        <div class="col-xs-12"> 
                            <?php echo output_message($message); ?>
                            <h1>Manage Visitors</h1>

                            <table class="table table-condensed table-striped">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                                <?php echo Visitor::get_visitor_list(); ?>

                            </table>

                        </div>
                    </div>
                </div>
            </div>

<?php include_layout_template('footer2.php');  ?>  