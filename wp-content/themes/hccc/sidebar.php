		<!-- 左 カラム -->
		<div id="sidebar">

			<div style="text-align:center; margin-bottom:15px;">
				<a href="/syusai"><img src="/img/syusaibutton.png"></a>
			</div>

			<h3>最新のお知らせ一覧</h3>
			<ul class="sidemenu">
				<?php
				$my_query = new WP_Query('showposts=10');
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
            
			<h3>過去のお知らせ一覧</h3>
			<ul class="sidemenu">
				<?php get_archives('monthly',36); ?>
			</ul>

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<?php endif; ?>
<?php /*
			<p>
				<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
				<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="正当なCSSです!" /></a>
			</p>*/ ?>

		</div>
		<!-- /  左 カラム  -->
