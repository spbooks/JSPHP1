<?php require_once('includes/temps/header.php'); ?>
<br/>
<?php if(!empty($error)): ?>
    <div class="alert alert-error">~<?php echo $error; ?></div>
<?php endif; ?>
<br/>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal offset2">
	<h3>Admin Login</h3>
    <div class="control-group <?php echo (!empty($error)? 'error': ''); ?>">
    	<label class="control-label" for="inputEmail">Username</label>
    	<div class="controls">
    		<input type="text" name="username" id="inputEmail" placeholder="Username">
    	</div>
    </div>
    <div class="control-group <?php echo (!empty($error)? 'error': ''); ?>">
    	<label class="control-label" for="inputPassword">Password</label>
    	<div class="controls">
    		<input type="password" name="password" id="inputPassword" placeholder="Password">
    	</div>
    </div>
    <div class="control-group">
    	<div class="controls">
    		<button type="submit" class="btn">Sign in</button>
    	</div>
    </div>
</form>
<?php require_once('includes/temps/footer.php'); ?>