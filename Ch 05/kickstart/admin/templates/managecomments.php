<?php require_once('_inc/header.php'); ?>
	<a href="<?php echo $this->base->url.'/posts.php?action=create'; ?>" class="btn btn-info">Create Post</a>
	<a href="<?php echo $this->base->url.'/comments.php'; ?>" class="btn btn-info">Comments</a>
	<table cellpadding="10">
		<thead>
			<tr>
				<td>Commenter</td>
				<td>Post ID</td>
				<td>Comment</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		<?php foreach($comments as $comment): ?>
			<tr>
				<td><h4><?php echo $comment['name']; ?></h4></td>
				<td><p><?php echo $comment['email']; ?></p></td>
				<td><p><?php echo $comment['comment']; ?></p></td>
				<td><a href="<?php echo $this->base->url."/comments.php?id=".$comment['id']."&action=delete"; ?>" class="btn btn-primary">Delete Comment</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php require_once('_inc/footer.php'); ?>