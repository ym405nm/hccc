<?php get_header(); ?>
	<?php get_sidebar(); ?>
		<!-- 中央メイン画像 -->
		<div id="viewer">
			<img src="<?php bloginfo('template_directory');?>/images/main.jpg" width="615" height="300" alt="" />
			<img src="<?php bloginfo('template_directory');?>/images/main2.jpg" width="615" height="300" alt="" />
			<img src="<?php bloginfo('template_directory');?>/images/main3.jpg" width="615" height="300" alt="" />
			<img src="<?php bloginfo('template_directory');?>/images/main4.jpg" width="615" height="300" alt="" />
			<img src="<?php bloginfo('template_directory');?>/images/main5.jpg" width="615" height="300" alt="" />
			<img src="<?php bloginfo('template_directory');?>/images/main7.jpg" width="615" height="300" alt="" />
			<img src="<?php bloginfo('template_directory');?>/images/main8.jpg" width="615" height="300" alt="" />
			<img src="<?php bloginfo('template_directory');?>/images/main9.jpg" width="615" height="300" alt="" />
			
		</div>
		<!-- / 中央メイン画像 -->
 
		<!-- 中央カラム -->
		<div id="main">
 
			<h2>姫路キャンプカウンセラーズクラブ</h2>
			<p>ようこそ姫路キャンプカウンセラーズクラブ (H.C.C.C.)の公式ウェブサイトへ！！</p>
			<p>本クラブの活動内容や、姫路市立太尾青少年キャンプ場について紹介しています。</p>
			</p>

			<h2>最新情報</h2>
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  rpp: 4,
			  interval: 30000,
			  width: 618,
			  height: 80,
			  theme: {
			    shell: {
			      background: '#ffffff',
			      color: '#333333'
			    },
			    tweets: {
			      background: '#ffffff',
			      color: '#333333',
			      links: '#278200'
			    }
			  },
			  features: {
			    scrollbar: false,
			    loop: false,
			    live: false,
			    hashtags: true,
			    timestamp: true,
			    avatars: false,
			    behavior: 'all'
			  }
			}).render().setUser('hccc_info').start();
			</script>
	
 
<?php /*			<h2>見出し</h2>
			<!-- 小画像 -->
			<div class="box">
				ご不明な点、気になる点などございましたらお気軽にお問い合わせください。
				<p class="button"><a href="#">ボタンテキスト</a></p>
			</div>
			<div class="box">
				ご不明な点、気になる点などございましたらお気軽にお問い合わせください。
				<p class="button"><a href="#">ボタンテキスト</a></p>
			</div>
			<div class="box last">
				ご不明な点、気になる点などございましたらお気軽にお問い合わせください。
				<p class="button"><a href="#">ボタンテキスト</a></p>
			</div>
			<!-- / 小画像 一番最後の画像にのみ class="last" を入力してください。-->*/ ?>
 
		</div>
		<!-- / 中央カラム -->

<?php get_footer(); ?>
