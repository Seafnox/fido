<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="UTF-8">
	<title>Записки Николая Федоткина | Бизнес-школа Имсайдер</title>
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="favicon/browserconfig.xml">
	<meta name="viewport" content="width=970">
	<link rel="stylesheet" media="screen" href="css/screen.css">
	<link rel="stylesheet" href="css/social-likes_classic.css">
	<link rel="stylesheet" href="css/reject.css">

</head>
<body>
    <div id="preloader">
        <!-- Google Analytics counter -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-29022975-1', 'imsider.ru');
            ga('send', 'pageview');
        </script>
        <!-- / Google Analytics counter -->

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter12922898 = new Ya.Metrika({id:12922898, enableAll: true, webvisor:true});
                    } catch(e) {}
                });

                var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="//mc.yandex.ru/watch/12922898" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- / Yandex.Metrika counter -->

        <!-- Oh My Stats tracking code -->
        <script type="text/javascript">
            //<![CDATA[
            var _oms = window._oms || [];

            _oms.push(["set_project_id", "atlfqdjiipmbpuiwguywuqdbunemyzoojqujvlpp"]);
            _oms.push(["set_domain", ".imsider.ru"]);
            (function() {
                var oms = document.createElement("script");
                oms.type = "text/javascript";
                oms.async = true;
                oms.src = "//ohmystats.com/oms.js";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(oms, s);
            })();
            //]]>
        </script>
        <!-- / Oh My Stats tracking code -->

    </div>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<ul class="menu js-nav">
				<li><a href="#about"><span>Кто автор</span></a></li>
				<li><a href="#skills"><span>Какие навыки вы получите</span></a></li>
				<li><a href="#video"><span>Видео-анонс</span></a></li>
				<li><a href="#testimonials"><span>Отзывы</span></a></li>
				<li class="menu__btn"><a href="#feedback"><span><em>Получить материалы</em></span></a></li>
			</ul>
		</div>
	</nav>
	<!-- /.navbar -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h1 class="h1 contenteditable" id="header_h1"><? include("editable/header_h1.html");?></h1>
					<div class="header__intro contenteditable" id="header_intro">
                        <? include("editable/header_intro.html");?>
					</div>
					<!-- /.header__intro -->
					<p>
						<span class="btn-row js-nav">
							<a href="#feedback" class="btn btn-primary">Получить материалы</a>
						</span>
					</p>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</header>
	<!-- /.header -->

	<div class="page">

		<section id="about" class="section section_about">
			<div class="container">
				<div class="about">
					<h2 class="h2 title contenteditable" id="about_h1">
                        <? include("editable/about_h1.html");?></h2>
					<div class="row">
						<div class="col-md-6">
							<div class="about__quote contenteditable" id="about_quote">
                                <? include("editable/about_quote.html");?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="about__author contenteditable" id="about_author">
                                <? include("editable/about_author.html");?>
							</div>
						</div>
					</div>
				</div>
				<!-- /.about -->
				<div class="why contenteditable" id="why">
                    <? include("editable/why.html");?>
                </div>
				<!-- /.why -->
			</div>
		</section>
		<!-- /.section -->

		<section id="skills" class="section section_skills">
			<div class="container">
				<div class="skills">
					<h2 class="h2 title contenteditable" id="skills_h1">
                        <? include("editable/skills_h1.html");?></h2>
					<div class="row">
						<div class="col-md-3">
							<div class="skills__item skills__item_1 contenteditable" id="skills_item_1">
                                <? include("editable/skills_item_1.html");?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="skills__item skills__item_2 contenteditable" id="skills_item_2">
                                <? include("editable/skills_item_2.html");?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="skills__item skills__item_3 contenteditable" id="skills_item_3">
                                <? include("editable/skills_item_3.html");?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="skills__item skills__item_4 contenteditable" id="skills_item_4">
                                <? include("editable/skills_item_4.html");?>
							</div>
						</div>
					</div>
				</div>
				<!-- .skills -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.section -->

		<section id="video" class="section section_video">
			<div class="container">
				<div class="video">
					<div class="video__viewport">
						<a href="/" class="video_link" data-videoid="WnAuONzdujw">
							<span class="image"><img src="img/video.jpg" alt="img"><span class="video__play"></span></span>
						</a>
						<!-- /.video_link -->
					</div>
				</div>
				<!-- /.video -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.section -->

		<section id="testimonials" class="section section_testimonials">
			<div class="container">
				<div class="testimonials">
					<h2 class="h2 title contenteditable" id="testimonials_h1">
                        <? include("editable/testimonials_h1.html");?></h2>
					<div class="testimonials__in">
						<div class="row">
							<div class="col-md-4">
								<article class="testimonial contenteditable" id="testimonial_comment_1">
                                    <? include("editable/testimonial_comment_1.html");?>
								</article>
							</div>
							<div class="col-md-4">
								<article class="testimonial contenteditable" id="testimonial_comment_2">
                                    <? include("editable/testimonial_comment_2.html");?>
								</article>
							</div>
							<div class="col-md-4">
								<article class="testimonial contenteditable" id="testimonial_comment_3">
                                    <? include("editable/testimonial_comment_3.html");?>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<article class="testimonial contenteditable" id="testimonial_comment_4">
                                    <? include("editable/testimonial_comment_4.html");?>
								</article>
							</div>
							<div class="col-md-4">
								<article class="testimonial contenteditable" id="testimonial_comment_5">
                                    <? include("editable/testimonial_comment_5.html");?>
								</article>
							</div>
							<div class="col-md-4">
								<article class="testimonial contenteditable" id="testimonial_comment_6">
                                    <? include("editable/testimonial_comment_6.html");?>
								</article>
							</div>
						</div>
						<div class="row is-hidden">
							<div class="col-md-4">
								<article class="testimonial contenteditable" id="testimonial_comment_7">
                                    <? include("editable/testimonial_comment_7.html");?>
								</article>
							</div>
							<div class="col-md-4">
								<article class="testimonial contenteditable" id="testimonial_comment_8">
                                    <? include("editable/testimonial_comment_8.html");?>
								</article>
							</div>
							<div class="col-md-4">
								<article class="testimonial contenteditable" id="testimonial_comment_9">
                                    <? include("editable/testimonial_comment_9.html");?>
								</article>
							</div>
						</div>
					</div>
					<div class="testimonials__moar">
						<a href="#" class="btn btn-default js-testimonials"><span>Показать еще отзывы</span></a>
					</div>
				</div>
				<!-- /.testimonials -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.section -->

		<div class="section section_gifts">
			<div class="container">
				<div class="gifts">
					<h2 class="h2 contenteditable" id="gifts_h1">
                        <? include("editable/gifts_h1.html");?></h2>
					<div class="row">
						<div class="col-md-6">
							<div class="gifts__item gifts__item_1 contenteditable" id="gifts_item_1">
                                <? include("editable/gifts_item_1.html");?>
							</div>
							<!-- /.gift -->
						</div>
						<div class="col-md-6">
							<div class="gifts__item gifts__item_2 contenteditable" id="gifts_item_2">
                                <? include("editable/gifts_item_2.html");?>
							</div>
							<!-- /.gift -->
						</div>
					</div>
				</div>
				<!-- .gifts -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.section -->


		<section id="feedback" class="section section_request">
			<div class="container">
				<div class="request">
					<article class="contenteditable" id="feedback_article">
                        <? include("editable/feedback_article.html");?></article>
					<div class="row">
						<div class="col-md-5">
							<div class="request__form">
								<form action="#" role="form" class="rf">
                                    <input type="hidden" value="">
									<div class="form-group">
										<label for="name">Как к вам обращаться?</label>
										<input type="text" class="form-control rj" id="name" name="name" placeholder="" value="">
									</div>
									<div class="form-group">
										<label for="email">Электронная почта</label>
										<input type="text" class="form-control rj" id="email" name="email" placeholder="" value="">
									</div>
									<div class="form-group">
										<label>Ваша роль в бизнесе</label>
										<div class="select js-select">
											<span><em class="js-select-text">Владелец</em><i></i></span>
											<input type="hidden" class="js-select-input" name="ownertype" value="">
											<div class="select__drop js-select-drop">
												<ul>
													<li data-id="1" class="is-selected">Владелец</li>
													<li data-id="2">Директор</li>
													<li data-id="3">Сотрудник</li>
													<li data-id="4">Я хочу открыть бизнес</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="request__formfield">
										<div id="website" class="request__formfield-trigger">У меня есть сайт</div>
										<div class="form-group">
											<label>Адрес сайта</label>
											<input type="text" class="form-control" id="site" name="site" value="" placeholder="">
										</div>
									</div>
									<input type="submit" class="btn btn-primary btn_submit" value="Получить материалы" />
								</form>
							</div>
							<!-- /.request__form -->
						</div>
						<div class="col-md-7">
							<div class="bonus contenteditable" id="feedback_bonus">
                                <? include("editable/feedback_bonus.html");?>
							</div>
							<!-- /.bonus -->
						</div>
					</div>
				</div>
				<!-- /.request -->
				<div class="requestsuccess contenteditable" id="feedback_requestsuccess" style="display: none;">
                    <? include("editable/feedback_requestsuccess.html");?>
				</div>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.section -->

	</div>
	<!-- /.page -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer__tel">
						<span class="footer__telnum">8 800 333-07-63</span> круглосуточно
					</div>
					<!-- /.footer__tel -->
					<div class="footer__mail">
						<i></i><a href="mailto:support@imsider.ru">support@imsider.ru</a>
					</div>
					<!-- /.footer__mail -->
				</div>
				<div class="col-md-4">
					<div class="footer__social">
						<h3 class="h3">Мы в социальных сетях</h3>
						<ul class="footer__sociallist">
							<li class="footer__socialitem footer__socialitem_yt"><a target="_blank" href="http://youtube.com/user/ImsiderTV">&#240;</a></li>
							<li class="footer__socialitem footer__socialitem_fb"><a target="_blank" href="http://facebook.com/groups/IMsider">&#228;</a></li>
							<li class="footer__socialitem footer__socialitem_vk"><a target="_blank" href="http://vk.com/club35101030">&#230;</a></li>
							<li class="footer__socialitem footer__socialitem_tw"><a target="_blank" href="http://twitter.com/#!/imsider">&#229;</a></li>
						</ul>
					</div>
					<!-- /.social -->
				</div>
				<div class="col-md-4">
					<div class="footer__docs">
						<h3 class="h3">Клиентам</h3>
						<ul>
							<li><a data-toggle="modal" href="#modalOffer">Договор оферты</a></li>
							<li><a data-toggle="modal" href="#modalPrivacy">Политика конфиденциальности</a></li>
							<li><a data-toggle="modal" href="#modalEssential">Реквизиты</a></li>
						</ul>
					</div>
					<!-- /.footer__docs -->
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="footer__likes">
						Рассказать друзьям
						<div class="social-likes">
							<div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
							<div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
							<div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
							<div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
						</div>
					</div>
					<!-- /.footer__share -->
				</div>
			</div>
		</div>
		<!-- /.container -->
	</footer>
	<!-- /.footer -->


	<div class="modal fade" id="modalOffer" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title contenteditable" id="modalOffer_title"><? include("editable/modalOffer_title.html");?></h4>
				</div>
				<div class="modal-body contenteditable" id="modalOffer_body"><? include("editable/modalOffer_body.html");?></div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /#modalOffer -->

	<div class="modal fade" id="modalPrivacy" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h2 class="modal-title contenteditable" id="modalPrivacy_title"><? include("editable/modalPrivacy_title.html");?></h2>
				</div>
				<div class="modal-body contenteditable" id="modalPrivacy_body"><? include("editable/modalPrivacy_body.html");?></div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /#modalPrivacy -->

	<div class="modal fade" id="modalEssential" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title contenteditable" id="modalEssential_title"><? include("editable/modalEssential_title.html");?></h4>
				</div>
				<div class="modal-body contenteditable" id="modalEssential_body"><? include("editable/modalEssential_body.html");?>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /#modalEssential -->

<script type="application/javascript" src="js/lib/head.js" data-headjs-load="js/init.js"></script>
<script type="application/javascript" src="ckeditor/ckeditor.js"></script>
</body>
</html>