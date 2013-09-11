<?php foreach($posts as $post): ?>
	<h1>Post #<?php echo $post['id']; ?></h1>
	<hr/>
	<?php echo $post['content']; ?>
	<a href="<?php echo "http://localhost/experiments/posts.php"; ?>">Back to Post List</a>
<?php endforeach; ?>