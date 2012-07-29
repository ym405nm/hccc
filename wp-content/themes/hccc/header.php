<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta name="author" content="H.C.C.C." />
<meta name="keyword" content="キャンプ, キャンプ場, 姫路市, 教育委員会委員,　太尾キャンプ場", />
<meta name="description" content="姫路市で活動している姫路キャンプカウンセラーズクラブの公式サイトです。" />
<title><?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21240310-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
	$(function(){
	    var setImg = '#viewer';
	    var fadeSpeed = 1500;
	    var switchDelay = 5000;
	 
	$(setImg).children('img').css({opacity:'0'});
	$(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);
	 
	setInterval(function(){
		$(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
	    },switchDelay);
	});
</script>
</head>

<body>

<div id="wrapper">
 
	<!-- ヘッダー -->
	<div id="header">
		<h1>姫路キャンプカウンセラーズクラブ公式サイト</h1>
		<!-- ロゴ --><a href="/"><img src="<?php bloginfo('template_directory');?>/images/logo.png" width="220" height="55" alt="Sample site" /></a><!-- / ロゴ -->
	</div>    
	<!-- / ヘッダー -->



	<!-- トップナビゲーション -->
	<div id="topnav">
			<?php // ページ
			$pageslist = wp_list_pages('title_li=&depth=1&echo=0');
			if ($pageslist) : ?>
			<ul>
			<?php echo $pageslist; ?>
			</ul>
			<?php endif; ?>
	</div>
	<!-- トップナビゲーション -->   


    
	<!-- コンテンツ -->
	<div id="container">
