<?php require_once('_inc/header.php'); ?>
	<a href="<?php echo $this->base->url.'/posts.php?action=create'; ?>" class="btn btn-info">Create Post</a>
	<a href="<?php echo $this->base->url.'/comments.php'; ?>" class="btn btn-info">Comments</a>
	<table>
		<thead>
			<tr>
				<td>Post Title</td>
				<td>Post Content</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		<?php foreach($posts as $post): ?>
			<tr>
				<td><h3><?php echo (!empty($post['title'])? $post['title']: 'Post #'.$post['id']); ?></h3></td>
				<td><p><?php echo implode(' ', array_slice(explode(' ', strip_tags($post['content'])), 0, 10)); ?> [...]</p></td>
				<td><a href="<?php echo $this->base->url."/posts.php?id=".$post['id']."&action=edit"; ?>" class="btn btn-primary">Edit Post</a><a href="<?php echo $this->base->url."/posts.php?id=".$post['id']."&action=delete"; ?>" class="btn btn-primary">Delete Post</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php require_once('_inc/footer.php'); ?>