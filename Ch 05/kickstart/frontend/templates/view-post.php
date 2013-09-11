<?php require_once('includes/temps/header.php'); ?>
<br/>
<a href="<?php echo $this->base->url; ?>" class="btn btn-primary">Return to Post List</a>
<article>
<?php foreach($posts as $post): ?>
	<h3><?php echo (!empty($post['title'])? $post['title']: 'Post #'.$post['id']); ?></h3>
		<?php echo $post['content']; ?>
	<hr/>
<?php endforeach; ?>
<h3>Comments</h3>
<?php foreach($postcomments as $comment): ?>
	<section class="span3">
		<figure>
			<img src="http://www.gravatar.com/avatar/<?php echo md5($comment['email']); ?>" alt="">
		</figure>
		<h4><?php echo $comment['name']; ?></h4>
		<p><small><?php echo $comment['email']; ?></small></p>
	</section>
	<section class="span8">
		<p><?php echo $comment['comment']; ?></p>
	</section>
	<hr style="clear:both;"/>
<?php endforeach; ?>
<br/>
<h3>Leave Comment</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal">
	<input type="hidden" value="<?php echo $_GET['id']; ?>" name="comment[postid]" />
    <div class="control-group <?php echo (!empty($error)? 'error': ''); ?>">
    	<label class="control-label" for="email">Email</label>
    	<div class="controls">
    		<input type="email" name="comment[email]" id="email" placeholder="Your Email Address"/>
    	</div>
    </div>
    <div class="control-group <?php echo (!empty($error)? 'error': ''); ?>">
    	<label class="control-label" for="name">Full Name</label>
    	<div class="controls">
    		<input type="text" name="comment[fullname]" id="name" placeholder="Your Full Name"/>
    	</div>
    </div>
    <div class="control-group <?php echo (!empty($error)? 'error': ''); ?>">
    	<label class="control-label" for="comment">Comment</label>
    	<div class="controls">
    		<textarea id="comment" name="comment[context]"></textarea>
    	</div>
    </div>
    <div class="control-group">
    	<div class="controls">
    		<button type="submit" class="btn">Submit Comment</button>
    	</div>
    </div>
</form>
</article>

<?php require_once('includes/temps/footer.php'); ?>