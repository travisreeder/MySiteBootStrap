<?php
require_once("../includes/initialize.php");

//$subjects = Subject::find_all();
$current_subject = "";
$current_page = "";
$current_subject = Subject::find_selected_subject(false);
$current_page = Page::find_selected_page(false);
//if($current_subject) {
//    $current_page = Page::find_default_page_for_subject($current_subject->id, false);
//} 



//var_dump($current_page);
//var_dump($current_subject);

include_layout_template('header.php'); 
include_layout_template('navigation2.php');
?>
		
            <!--
            <div id="main">
            -->
            <div class="container-fluid" id="container">
                <div class="display_content">
		    
            
		        <?php echo output_message($message); ?>
				<?php
		        if ($current_page) { ?>
                    <?php if ($current_page->show_menu == 1) { ?>
                        <div class="row">
                            <div class="col-xs-12">
                               <h2> <?php echo $current_page->menu_name; ?></h2>
                            </div>
                        </div>
                    <?php } ?>
		            <div class="row">
                        <div class="col-xs-12">
                            <?php echo ($current_page->content); ?>
		                  </div>
                    </div>
					<!-- <div class="dynamic_page"> -->
						<?php if($current_page->url != "") { include($current_page->url); } ?>
					<!-- </div> -->
		         <?php } else { ?>
 					<div class="display-content">
                        
 						<?php if($current_subject && $current_subject->url != "") { include($current_subject->url); } ?>
 					</div>
		        <?php } ?>
            
		      </div>
            </div>
            <!--
            </div>
            -->
			

<?php include_layout_template('footer.php'); ?>