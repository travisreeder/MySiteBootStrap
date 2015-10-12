<?php
require_once("../../includes/initialize.php");

if($session->is_logged_in()) {
  redirect_to("index.php");
}

// Remember to give your form's submit tag a name="submit" attribute!
if (isset($_POST['submit'])) { // Form has been submitted.

  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  
  // Check database to see if username/password exist.
  $found_user = User::authenticate($username, $password);
	
  if ($found_user) {
    $session->login($found_user);
		log_action('Login', "{$found_user->username} logged in.");
    redirect_to("index.php");
  } else {
    // username/password combo was not found in the database
    $message = "Username/password combination incorrect.";
  }
  
} else { // Form has not been submitted.
  $username = "";
  $password = "";
}

?>
<?php include_layout_template('login_header.php'); ?>
<header>
    <div id="headline" class="gradient">
        <h1 class="gradient opposite">Welcome to Travis' Administration Site</h1>
    </div>
</header>

<div class="container-fluid" id="container">
    <div class="display_content">
        <div class="row">
            <div class="col-xs-12">
		      <h1>Administration</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
		      <h2>Login</h2>
            </div>
        </div>
		<?php echo output_message($message); ?>

		<form action="login.php" method="post">
		  <table class="table table-condensed borderless">
		    <tr>
		      <td width="10%">Username:</td>
		      <td widht="90%">
		        <input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>" />
		      </td>
		    </tr>
		    <tr>
		      <td>Password:</td>
		      <td>
		        <input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>" />
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
		        <input class="btn btn-info" type="submit" name="submit" value="Login" />
		      </td>
		    </tr>
		  </table>
		</form>
    </div>
</div>

