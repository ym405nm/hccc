<?php global $is_ajax; $is_ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']); if (!$is_ajax) get_header(); ?>
<?php $wptouch_settings = bnc_wptouch_get_settings(); ?>

<div class="content" id="content<?php echo md5($_SERVER['REQUEST_URI']); ?>">
		
	<div class="result-text"><?php wptouch_core_body_result_text(); ?></div>

<h2>test</h2>
<dl class="news" style="margin-bottom:20px;">
<?php $posts = get_posts('numberposts=5&order=desc');
foreach($posts as $post): ?>
<dt><?php echo date("Y年m月d日", strtotime($post->post_date)); ?></dt>
<dd><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></dd>
<?php endforeach; ?>
</dl>

<!-- Here we're establishing whether the page was loaded via Ajax or not, for dynamic purposes. If it's ajax, we're not bringing in footer.php -->
<?php global $is_ajax; if (!$is_ajax) get_footer(); ?>
