<?php
get_header();
?>

	<div class="top-page">
		<div class="content-area">
			<div class="glide">
				<div data-glide-el="track" class="glide__track">
					<ul class="glide__slides">
						<li class="slide">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slide1-sp.webp" media="(max-width: 480px)" type="image/webp">
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slide1-sp.jpg" media="(max-width: 480px)">
								<img src="<?php echo content_url() ?>/themes/oz/assets/img/slide1.jpg" alt="" class="glide__slide">
							</picture>
						</li>
						<li class="slide">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slide2-sp.webp" media="(max-width: 480px)" type="image/webp">
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slide2-sp.jpg" media="(max-width: 480px)">
								<img src="<?php echo content_url() ?>/themes/oz/assets/img/slide2.jpg" alt="" class="glide__slide">
							</picture>
						</li>
						<li class="slide">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slide3-sp.webp" media="(max-width: 480px)" type="image/webp">
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slide3-sp.jpg" media="(max-width: 480px)">
								<img src="<?php echo content_url() ?>/themes/oz/assets/img/slide3.jpg" alt="" class="glide__slide">
							</picture>
						</li>
					</ul>
				</div>
			</div>
			<main class="site-main">
			<section class="sec about">
				<h2 class="heading2">私たちについて</h2>
				<div class="desc-wrapper">
					<p class="desc">
						バドミントンサークルOZ（オズ）は<br>
						練馬区 大泉学園で活動しています<br>
						20代半ば～後半くらいのメンバーが<br>
						中心です
					</p>
				</div>
			</section>
			<section class="sec recruit">
				<h2 class="heading2">こんな方を<br class="sp">募集しています</h2>
				<div class="recruit-box-wrapper">
					<div class="recruit-box">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit1.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit1.png" alt="">
						</picture>
						<div class="desc-wrapper">
							<p class="desc">
									スポーツとして真剣に取り組みたい
							</p>
						</div>
					</div>
					<div class="recruit-box">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit2.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit2.png" alt="">
						</picture>
						<div class="desc-wrapper">
							<p class="desc">近いレベル同士でストレスなく練習したい</p>
						</div>
					</div>
					<div class="recruit-box">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit3.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit3.png" alt="">
						</picture>
						<div class="desc-wrapper">
							<p class="desc">継続して参加するクラブを探している</p>
						</div>
					</div>
				</div>
				<img src="<?php echo content_url() ?>/themes/oz/assets/img/to_you.svg" alt="" class="to-you">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/yeah.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/yeah.png" alt="" class="yeah">
				</picture>
				<div class="heading3-wrapper">
					<h3 class="heading3">ぜひ私たちと練習しましょう！</h3>
				</div>
			</section>
				<section class="sec practice-contents">
					<h2 class="heading2">練習内容</h2>
					<p class="desc">ダブルスの基礎練習を3～4パターン(1時間)→ゲーム練習(2時間)</p>
					<div class="chase-wrapper">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/chase.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/chase.png" alt="">
						</picture>
					</div>
				</section>
				<section class="sec">
					<h2 class="heading2">参加条件</h2>
					<div class="bg-white-wrapper">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/ryusei_cat.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ryusei_cat.png" alt="">
						</picture>
						<div class="text">
							<h4 class="heading4">① 20歳～30代前半</h4>
							<p class="desc">大学・専門学生可</p>
						</div>
					</div>
					<div class="bg-white-wrapper">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/jumping_smash.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/jumping_smash.png" alt="">
						</picture>
						<div class="text">
							<h4 class="heading4">② バドミントン経験者</h4>
							<p class="desc">高校の部活等 <br />
						</div>
					</div>
					<div class="bg-white-wrapper">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/doubles.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/doubles.png" alt="">
						</picture>
						<div class="text">
							<h4 class="heading4">③ ダブルスのできる方</h4>
							<p class="desc">ローテーション等基本的な動きが出来る方</p>
						</div>
					</div>
				</section>
				<section class="sec">
					<h2 class="heading2">参加費</h2>
					<div class="card-wrapper">
						<div class="plan-wrapper">
						<h3 class="heading3">Visitor</h3>
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/visitor.webp" type="image/webp">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/visitor.png" alt="" class="card-img visitor-img">
							</picture>
							<p class="second-terms-price"><em class="em">700～800</em>円</p>
						</div>
					</div>
				</section>
				<section class="sec practice-day">
					<h2 class="heading2">練習日</h2>
					<div class="bg-white-wrapper">
						<div class="text">
							<p><em class="em">日</em>曜日</p>
							<p class="desc">14:00～17:00（最大18:00）</p>
						</div>
					</div>
				</section>
				<section class="sec practice-place">
					<h2 class="heading2">場所</h2>
					<p class="place">練馬区立大泉小学校</p>
					<p>(西武池袋線・大泉学園駅徒歩5分)</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1382.0176401436095!2d139.5850805999004!3d35.75043861207746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m5!1s0x6018eec652b6132f%3A0x6b462e04223e5db0!2z5aSn5rOJ5a2m5ZyS6aeF77yI5p2x5Lqs77yJ!3m2!1d35.7495482!2d139.5865493!4m3!3m2!1d35.7514199!2d139.5848992!5e0!3m2!1sja!2sjp!4v1556687629427!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0" allowfullscreen loading="lazy"></iframe>
				</section>
				<section class="sec ban">
					<h2 class="heading2">学校利用時の<br class="sp">禁止事項</h2>
					<div class="bg-white-wrapper">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/eat.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.png" alt="">
						</picture>
						<div class="text">
							<h4 class="heading4">① 飲食禁止・禁煙</h4>
							<p class="desc">飲み物は可</p>
						</div>
					</div>
					<div class="bg-white-wrapper">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/car.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/car.png" alt="">
						</picture>
						<div class="text">
							<h4 class="heading4">② 車で来校禁止</h4>
							<p class="desc">バイクは可</p>
						</div>
					</div>
				</section>
				<section class="sec schedule">
					<h2 class="heading2">今月の練習予定</h2>
					<div class="calendar-wrapper">
						<iframe src="https://calendar.google.com/calendar/embed?src=oz.badcircle%40gmail.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
					</div>
				</section>
				<section class="sec">
					<h2 class="heading2">よくある質問</h2>
					<div class="qa">
						<p class="question question-close">参加方法は？</p>
						<p class="answer"><a href="#signup">参加申し込み</a>から必要事項を記入してお申し込みください</p>
					</div>
					<div class="qa">
						<p class="question question-close">いつまでに申し込めばいいですか？</p>
						<p class="answer">練習日の<em class="strong">２日前</em>までにお願いします</p>
					</div>
					<div class="qa">
						<p class="question question-close">サークルのレベルはどのくらいですか？どの程度のレベルが必要ですか？</p>
						<p class="answer">
						「部活で3年以上の経験があってダブルスができる人」が参加の基本条件になります。高校で部活経験があり、その後も継続または20代の前半から再開している方が多いです。
<br><br>経験が無い・短い方、学生時代からのブランクが10年以上など長い方、また逆に上級者の方(地区大会の最上位・1部クラスに出場しているようなレベルの方)も遠慮頂いております。<br><br>
						<br>※一定のレベル同士で練習がしたい、という考えのメンバーで活動していますので上記を踏まえてご応募いただければと思います。<br><br>
						</p>
					</div>
					<div class="qa">
						<p class="question question-close">友達と一緒に参加できますか？</p>
						<p class="answer">新規参加時は友達を連れての参加はご遠慮いただいております。</p>
					</div>
					<div class="qa">
						<p class="question question-close">他サークルに参加していますが参加可能ですか？</p>
						<p class="answer">
							可能ですが、練習日によっては人数の都合で参加の優先順位が低くなる場合があります<br>

						</p>
					</div>
				</section>
				<section class="sec signup">
					<h2 class="heading2" id="signup">参加申し込み</h2>
					<p class="desc">上記サークル概要をご確認頂いた上で参加申し込みをお願いします。</p>
					<?php echo apply_filters('the_content', get_post_field('post_content', 8)); ?>
				</section>
			</main><!-- .main -->
		</div><!-- .content-area -->
	</div><!-- top-page -->
	<script src="<?php echo content_url() ?>/themes/oz/assets/js/glide.min.js"></script>
	<script>
  		new Glide('.glide', {
			autoplay: 2500,
			hoverpause: false
		  }).mount()
	</script>
<?php
get_sidebar();
get_footer();
