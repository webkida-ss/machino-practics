<li class="news-item">
	<a href="<?php the_permalink(); ?>" class="news-item__link">
		<date class="news-item__date"><?php echo get_the_date(); ?></date>
		<p class="news-item__title"><?php the_title(); ?></p>
	</a>
</li>