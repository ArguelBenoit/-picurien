<?php
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
			<?php
			return;
		}
	}
	$oddcomment = 'class="comments-alt" '; ?>

	<?php if ($comments) : ?>
		<h2 class="h2-comment"><i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;commentaire(s)</h2>
		<div class="commentlist">
			<?php foreach ($comments as $comment) : ?>
				<div class="row one-comment" id="comment-<?php comment_ID() ?>">
					<span class="comment-author"><?php comment_author_link() ?></span>
					<br />
					<i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;<?php the_time('d/m/Y') ?>
					<br />
					<br />
					<?php if ($comment->comment_approved == '0') : ?>
						<p><b>Votre commentaire est en attente de modération.</b></p>
					<?php else : ?>
						<?php comment_text() ?>
					<?php endif; ?>
				</div>
			<?php
				$oddcomment = ( empty( $oddcomment ) ) ? 'class="comments-alt" ' : '';
			?>
		<?php endforeach; ?>
	</div>

	<?php else : ?>
		<?php if ('open' == $post->comment_status) : ?>
		 <?php else : ?>
			<p class="nocomments">Comments are closed.</p>
		<?php endif; ?>
	<?php endif; ?>


	<?php if ('open' == $post->comment_status) : ?>
		<h2 class="h2-comment" id="respond">Déposer un commentaire</h2>
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<p>Vous devez être identifier pour poster un commentaire. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">Connexion</a></p>
		<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ( $user_ID ) : ?>
				<p>Identifié en tant que : <b><?php echo $user_identity; ?></b></p>
			<?php else : ?>
				<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" placeholder="Name"/>
				<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" placeholder="Email (Non visible) "/>
			<?php endif; ?>
				<textarea name="comment" id="comment" cols="10" rows="20" tabindex="4" placeholder="Votre message"></textarea>
				<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
