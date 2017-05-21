<?php require "/includes/config.php"; ?>

<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>

	<?php include "includes/head-meta.php"; ?>
	<!-- Document Title
	============================================= -->
	<title>Наша команда | ЦОК</title>

</head>

	<body class="stretched">

		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

			<!-- Header
			============================================= -->
			<header id="header" class="full-header">

				<?php include "includes/primary-menu.php"; ?>

			</header><!-- #header end -->

			<!-- Page Title
			============================================= -->
			<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('images/team-bg.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">

				<div class="container clearfix">
					<h1><?php echo $config['title'];?></h1>
					<!-- <span>По дороге встретил текст рукопись</span> -->
					<ol class="breadcrumb">
						<li><a href="index.php">Главная</a></li>
						<li class="active">Наша команда</li>
					</ol>
				</div>

			</section><!-- #page-title end -->

			<!-- Content
			============================================= -->
			<section id="content">

				<div class="content-wrap">

					<div class="container clearfix">

					<div class="row">

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/polikarpova.jpg" alt="Polikarpova">
								</div>

								<div class="team-desc">
									<div class="team-title"><h4><a href="#myModal" data-toggle="modal" data-content="memeber_LVP">Лилиана Владимировна Поликарпова</a></h4><span>Руководитель Центра оценки квалификаций АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>Зам.генерального директора по организационному развитию и управлению персоналом АО «НИИМЭ»<br> ЭКСПЕРТ ПО ОЦЕНКЕ</p>
									</div>
									<!--<a href="#" class="social-icon si-rounded si-small si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>-->
								</div>
							</div>

						</div>

						<div class="col-md-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/zabodaeva.jpg" alt="Zabodaeva">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#myModal" data-toggle="modal" data-content="NNZ">Нина Николаевна Забодаева</a></h4><span>Заместитель руководителя Центра оценки квалификаций АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ЭКСПЕРТ ПО ОЦЕНКЕ</p>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/novozhilova.jpg" alt="Novozhilova">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Галина Игоревна Новожилова</a></h4><span>Руководитель проектов внедрения программ обучения, развития и оценки ЦОК АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ЭКСПЕРТ ПО ОЦЕНКЕ</p>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/kotlyarov.jpg" alt="Kotlyarov">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Евгений Юрьевич Котляров</a></h4><span>Старший научный сотрудник АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>
						</div>

					</div>					

					<div class="row">

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/kravtsov.jpg" alt="Kravtsov">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Александр Сергеевич Кравцов</a></h4><span>Начальник отдела разработки ИС АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/pankratov.jpg" alt="pankratov">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Александр Львович Панкратов</a></h4><span>Начальник отдела проектирования фотошаблонов АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/yanovich.jpg" alt="Yanovich">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Сергей Игоревич Янович</a></h4><span>Главный специалист АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/burdin.jpg" alt="Burdin">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Юрий Сергеевич Бурдин</a></h4><span>Зам. начальника ОПиКС ПАО «Микрон»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/egorov.jpg" alt="Egorov">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Александр Александрович Егоров</a></h4><span>Руководитель ГТП ПАО «МИКРОН»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/ivanov.jpg" alt="Ivanov">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Владимир Викторович Иванов</a></h4><span>Начальник лаборатории Отдел проектирования фотошаблонов АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>
						</div>

					</div>	

					<div class="row">

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/kirushina.jpg" alt="Kirushina">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Ирина Васильевна Кирюшина</a></h4><span>Главный специалист ПАО «Микрон»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/markin.jpg" alt="Markin">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Александр Викторович Маркин</a></h4><span>Начальник  лаборатории  ЧПП АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/mytnyk.jpg" alt="Mytnyk">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Константин Яковлевич Мытник</a></h4><span>Начальник отдела разработки программного обеспечения для смарт-карт АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/nuikin.jpg" alt="Nuikin">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Андрей Валерьевич Нуйкин</a></h4><span>Заместитель начальника отдела АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>
						</div>

					</div>					

					<div class="row">

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/pronin.jpg" alt="Pronin">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><a href="#">Алексей Александрович Пронин</a></h4><span>Ведущий инженер-конструктор АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>

						</div>

						<!--<div class="col-md-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/team/markin.jpg" alt="Markin">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4>Андрей Валерьевич Нуйкин</h4><span>Заместитель начальника отдела АО «НИИМЭ»</span></div>
									<div class="team-content">
										<p>ТЕХНИЧЕСКИЙ ЭКСПЕРТ</p>
									</div>
								</div>
							</div>
						</div>-->

					</div>			

					<div class="clear"></div>

					</div>

				</div>

						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-body">
									<div class="modal-content">
										<div class="modal-body">
											<!-- memeberI D -->
											<h4>Overflowing text to show scroll behavior</h4>
											<div class="team-image">
												<img src="images/team/polikarpova.jpg" alt="Polikarpova">
											</div>
											<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
											<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
											<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
											<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
											<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
											<p class="nobottommargin">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
											<!-- <button type="button" class="btn btn-primary">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>


			</section><!-- #content end -->

			<!-- Footer
			============================================= -->
			<?php include "includes/footer.php"; ?>
			<!-- #footer end -->

		</div><!-- #wrapper end -->

		<!-- Go To Top
		============================================= -->
		<div id="gotoTop" class="icon-angle-up"></div>

		<!-- External JavaScripts
		============================================= -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>

		<script src="js/menu-hilight.js"></script>

		<!-- Footer Scripts
		============================================= -->
		<script type="text/javascript" src="js/functions.js"></script>

	</body>
</html>