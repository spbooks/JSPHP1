<?php require_once('_inc/header.php'); ?>
	<form action="<?php echo $this->base->url.'/posts.php?action=save'; ?>" method="POST">
		<h3>New Post</h3>
	    <div class="control-group">
	    	<label class="control-label" for="content">Content</label>
	    	<div class="controls">
	    		<textarea name="post[content]" id="content"></textarea>
	    	</div>
	    </div>
	    <div class="control-group">
	    	<div class="controls">
	    		<button type="submit" class="btn">Save Post</button>
	    	</div>
	    </div>
	</form>
<?php require_once('_inc/footer.php'); ?>