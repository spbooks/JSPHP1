<?php require_once('_inc/header.php'); ?>
	<form action="<?php echo $this->base->url.'/posts.php?action=save'; ?>" class="row" method="POST">
		<section class="span7">
			<h3>New Post</h3>
			<div class="control-group">
		    	<label class="control-label" for="content">Title</label>
		    	<div class="controls">
		    		<input type="text" name="post[title]" id="title" placeholder="Your Post Title" />
		    	</div>
		    </div>
		    <div class="control-group">
		    	<label class="control-label" for="wmd-input">Content</label>
			    <div class="wmd-panel controls">
				     <div id="wmd-button-bar"></div>
				     <textarea class="wmd-input" name="post[content]"  id="wmd-input">*Start Typing Here*</textarea>
				</div>
		    </div>
		    <div class="control-group">
		    	<div class="controls">
		    		<button type="submit" class="btn">Save Post</button>
		    	</div>
		    </div>
		</section>
		<section class="span4" style="padding-left:20px; border-left:1px solid #eee;">
	    	<div id="wmd-preview" class="wmd-panel wmd-preview"></div>
	    </section>
	</form>
<?php require_once('_inc/footer.php'); ?>