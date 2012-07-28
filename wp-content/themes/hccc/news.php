<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>



<div id="main">


<?php //previous_post_link('Prev &raquo; %link'); ?>
<?php //next_post_link('Next &laquo; %link'); ?>

<h2>おしらせ一覧</h2>
<dl class="news" style="margin-bottom:20px;">
<?php $posts = get_posts('numberposts=5&order=desc');
foreach($posts as $post): ?>
<dt><?php echo date("Y年m月d日", strtotime($post->post_date)); ?></dt>
<dd><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></dd>
<?php endforeach; ?>
</dl>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
