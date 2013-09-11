<h1>List of Blog Posts</h1>
<?php foreach($posts as $post): ?>
	<h3>Post #<?php echo $post['id']; ?></h3>
	<?php echo $post['content']; ?>
	<a href="<?php echo "http://localhost/experiments/posts.php?id=".$post['id']; ?>">Read More</a>
	<hr/>
<?php endforeach; ?>