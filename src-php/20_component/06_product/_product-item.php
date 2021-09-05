<li class="product-item">
	<a href="<?php the_permalink(); ?>" class="product-item__link">
		<time class="product-item__date"><?php echo get_the_date(); ?></time>
		<p class="product-item__title"><?php the_title(); ?></p>
	</a>
</li>