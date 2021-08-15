<li class="news-item">
	<a href="<?php the_permalink(); ?>" class="news-item__link">
		<p class="news-item__term">
			<?php echo get_the_terms($post->ID, 'news_kind')[0]->name; ?>
		</p>
		<time class="news-item__date"><?php echo get_the_date(); ?></time>
		<p class="news-item__title"><?php the_title(); ?></p>
	</a>
</li>