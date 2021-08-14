<div class="news-archive">
	<?php if (have_posts()) : ?>
		<ul class="news-archive__list">
			<?php while (have_posts()) : the_post(); ?>
				<li class="news-archive__item">
					<a href="<?php the_permalink(); ?>" class="news-archive__item--link">
						<date class="news-archive__item--date"><?php echo get_the_date(); ?></date>
						<p class="news-archive__item--title"><?php the_title(); ?></p>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>