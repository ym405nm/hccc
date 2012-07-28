<?php get_header(); ?>



<div id="main">


<!-- if 投稿が存在するかを確認する条件文 *1 -->
        <?php if (have_posts()) : ?>

<!-- 投稿一覧の最初を取得 -->
       <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<!-- カテゴリーアーカイブの場合 *2 -->
       <?php /* If this is a category archive */ if (is_category()) { ?>
<!-- カテゴリー名を表示 -->
        <h2 class="pagetitle"><?php printf(__('Archive for the &#8216;%s&#8217; Category', 'kubrick'), single_cat_title('', false)); ?></h2>
<!-- タグアーカイブの場合 *2 -->
       <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<!-- タグ名を表示 -->
        <h2 class="pagetitle"><?php printf(__('Posts Tagged &#8216;%s&#8217;', 'kubrick'), single_tag_title('', false) ); ?></h2>
<!-- 日別アーカイブの場合 *2 -->
       <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<!-- 年月日を表示 -->
        <h2 class="pagetitle"><?php printf(_c(' %s|Daily archive page', 'kubrick'), get_the_time(__('F jS, Y', 'kubrick'))); ?>年</h2>
<!-- 月別アーカイブの場合 *2 -->
       <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<!-- 年月を表示 -->
        <h2 class="pagetitle"><?php printf(_c(' %s|Monthly archive page', 'kubrick'), get_the_time(__('F, Y', 'kubrick'))); ?>年</h2>
<!-- 年別アーカイブの場合 *2 -->
       <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<!-- 年を表示 -->
        <h2 class="pagetitle"><?php printf(_c('Archive for %s|Yearly archive page', 'kubrick'), get_the_time(__('Y', 'kubrick'))); ?></h2>
<!-- 著者アーカイブの場合 *2 -->
      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
<!-- 著者を表示 -->
        <h2 class="pagetitle"><?php _e('Author Archive', 'kubrick'); ?></h2>
<!-- 複数ページになるアーカイブの場合 *2 -->
       <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<!-- ブログアーカイブを表示 -->
        <h2 class="pagetitle"><?php _e('Blog Archives', 'kubrick'); ?></h2>
<!-- *2 の終了 -->
       <?php } ?>



<!-- 投稿データを取得するループ *3 -->
        <?php while (have_posts()) : the_post(); ?>
<!-- the_ID() は 記事の ID -->
<!-- the_permalink() は 記事の URL -->
<!-- the_title_attribute() は 記事のタイトル出力 -->
                <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<!-- 年月日を表示 -->
<div id="date"><?php the_time(__('Y-m-d')) ?></div>

<!-- the_content() は 本文を表示する -->
                    <?php the_content() ?>

<!-- the_tags() は タグを表示する -->
<!-- get_the_category_list() は カテゴリを表示する : the_category() の別名? -->
<!-- edit_post_link() は 投稿を編集するためのリンクを表示する (ログイン中のみ) -->
<!-- comments_popup_link() はコメントをポップアップ表示する -->
                <!--<div id="date"><?php the_tags(__('Tags:', 'kubrick'), ', ', '<br />'); ?> <?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?> | <?php edit_post_link(__('Edit', 'kubrick'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?><br /><br /></div>-->


<!-- *3 の終わり -->
        <?php endwhile; ?>

<!-- 次へのリンクを表示 -->
           <?php next_posts_link(__('&laquo; Older Entries', 'kubrick')); ?>
<!-- 前へのリンクを表示 -->
           <?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')); ?>
<!-- *1 が成り立たない場合 -->
    <?php else :
        if ( is_category() ) { // If this is a category archive
            printf("<h2 class='center'>".__("Sorry, but there aren't any posts in the %s category yet.", 'kubrick').'</h2>', single_cat_title('',false));
        } else if ( is_date() ) { // If this is a date archive
            echo('<h2>'.__("Sorry, but there aren't any posts with this date.", 'kubrick').'</h2>');
        } else if ( is_author() ) { // If this is a category archive
            $userdata = get_userdatabylogin(get_query_var('author_name'));
            printf("<h2 class='center'>".__("Sorry, but there aren't any posts by %s yet.", 'kubrick')."</h2>", $userdata->display_name);
        } else {
            echo("<h2 class='center'>".__('No posts found.', 'kubrick').'</h2>');
        }
      get_search_form();
    endif;
?>
    </div>



<!-- サイドバーを埋め込む -->
<?php get_sidebar(); ?>

<!-- フッターを埋め込む -->
<?php get_footer(); ?>
