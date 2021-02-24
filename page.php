<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		<div class="sidebar">
	<div class="new-article-wrapper">
		<h4 class="new-aticle sidebar-title">新着記事</h4>
		<!-- <ul>
			<?php
				$wp_query = new WP_Query();
				$param = array(
					'posts_per_page' => '6', //表示件数。-1なら全件表示
					'post_type' => 'column', //カスタム投稿タイプの名称を入れる
					'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
				);
				$wp_query->query($param);
				if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
			?>
			<li class="sidebar-article-list"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; endif; ?>
		</ul> -->
		<ul>
			<?php
			$args = array(
				'posts_per_page' => 5 // 表示件数の指定
			);
			$posts = get_posts( $args );
			foreach ( $posts as $post ): // ループの開始
			setup_postdata( $post ); // 記事データの取得
			?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
			<?php
			endforeach; // ループの終了
			wp_reset_postdata(); // 直前のクエリを復元する
			?>
		</ul>
	</div>
	<div class="category-wrapper">
		<h4 class="category sidebar-title">カテゴリー</h4>
		<ul class="category-list">
			<?php
				$args = array(
				'style'              => 'list',
				'title_li'           => __( '' ),
				'taxonomy'           => 'column_cat',
				);
				wp_list_categories( $args );
			?>
		</ul>
	</div><!-- category-wrapper -->
</div>
<div class="paging">
	<?php if (get_next_post()):?>
		 <!-- 次の記事がある場合にリンクを表示 -->
		<div class="next"><?php next_post_link('%link','%title',TRUE); ?></div>
	<?php endif; ?>

	<?php if (get_previous_post()):?>
		 <!-- 前の記事がある場合にリンクを表示 -->
		<div class="prev"><?php previous_post_link('%link','%title',TRUE); ?></div>
	<?php endif; ?>
</div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
