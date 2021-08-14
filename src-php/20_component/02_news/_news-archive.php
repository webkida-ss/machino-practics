<?php

$the_query = $args; // 引数で投稿を渡す
?>
<div class="news-archive">
	<?php if ($the_query) : ?>
		<ul class="news-archive__list">
			<?php foreach ($the_query as $post) : setup_postdata($post); ?>
				<li class="news-archive__item">
					<a href="<?php the_permalink(); ?>" class="news-archive__item--link">
						<p class="news-archive__item--term">
							<?php echo get_the_terms($post->ID, 'news_kind')[0]->name; ?>
						</p>
						<date class="news-archive__item--date"><?php echo get_the_date(); ?></date>
						<p class="news-archive__item--title"><?php the_title(); ?></p>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>