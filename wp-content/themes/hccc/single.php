<?php get_header(); ?>



<div id="main">



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2><?php the_title();?></h2>

<div id="date"><?php the_date('Y-m-d'); ?></div>

<?php the_content(); ?>

<!--<div id="date">カテゴリー: <?php the_category(', '); ?>　<?php the_tags('タグ: ', ', '); ?></div>-->

<div id="next">
<?php previous_post_link('←「%link」前の記事へ　'); ?>
<?php next_post_link('　次の記事へ「%link」→'); ?>
</div>


<?php endwhile; else: ?>

<p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
