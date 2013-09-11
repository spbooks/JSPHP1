<?php require_once('includes/temps/header.php'); ?>
<?php foreach($posts as $post): ?>
	<h3><?php echo (!empty($post['title'])? $post['title']: 'Post #'.$post['id']); ?></h3>
		<p><?php echo implode(' ', array_slice(explode(' ', strip_tags($post['content'])), 0, 10)); ?> [...]</p>
		<a href="<?php echo $this->base->url."/?id=".$post['id']; ?>" class="btn btn-primary">Read More</a><p>comments: <?php echo $post['comments']; ?></p>
	<hr/>
<?php endforeach; ?>

<?php require_once('includes/temps/footer.php'); ?>