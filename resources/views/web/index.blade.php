@extends('layout.layout')
@section('content')
<div id="top"></div>
<!-- Start Header Area -->
<header class="default-header">
	<div class="sticky-header">
		<div class="container">
			<div class="header-content d-flex justify-content-between align-items-center">
				<div class="logo">
					<a href="#top" class="smooth"><img src="img/logo.png" alt=""></a>
				</div>
				<div class="right-bar d-flex align-items-center">
					<nav class="d-flex align-items-center">
						<ul class="main-menu">
							<li><a href="#top">Home</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#protfolio">Portfolio</a></li>
							<li><a href="#team">Team</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
						<a href="#" class="mobile-btn"><span class="lnr lnr-menu"></span></a>
					</nav>
					<div class="search relative">
						<span class="lnr lnr-magnifier"></span>
						<!-- <form action="#" class="search-field">
							<input type="text" placeholder="Search here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search here'">
							<button class="search-submit"><span class="lnr lnr-magnifier"></span></button>
						</form> -->
					</div>
					<div class="header-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
                    <div class="header-social d-flex align-items-center">
                        <a href="#"><img src="/flags/en.png" alt="" style="width:20px; height:20px; position:absolute; top:10px;  border-radius:50%"></a>
                        <a href="#"><img src="/flags/am.png" alt="" style="width:20px; height:20px; position:absolute; top:10px;  border-radius:50%"></a>
                       <a href="#"><img src="/flags/ru.png" alt="" style="width:20px; height:20px; position:absolute; top:10px;  border-radius:50%"></a>
				</div>

                </div>
			</div>
		</div>
	</div>
</header>
<!-- End Header Area -->
<!-- Start Banner Area -->
<section class="banner-area relative">
	<div class="overlay overlay-bg">
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>
	</div>
	<div class="container">
		<div class="row fullscreen justify-content-center align-items-center">
			<div class="col-lg-12">
				<div class="banner-content text-center">
					<p class="text-uppercase text-white">«Нужно расти, чтобы перерасти проблему»</p>
					<h1 class="text-white">LifeBeget порождает новые идеи</h1>
					<a href="#" class="primary-btn banner-btn">Заказать Сайт</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!-- Start About Area -->
<section class="section-full gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h3 class="text-uppercase">МЫ ОБЪЕДИНИЛИ <span style="color: #3d89b5;">ВСЕ САМЫЕ НУЖНЫЕ DIGITAL УСЛУГИ</span> В ОДНОМ МЕСТЕ</h3>
				</div>
			</div>
		</div>
    <div class="row services-block">
			<div class="col-md-3 text-center">
         <a href="#" class="services">
         	   <img src="{{asset('svg/digital-graphic.svg')}}" alt="">
						 <p>Дизайн</p>
         </a>
			</div>
			<div class="col-md-3 text-center">
				<a href="#" class="services">
						<img src="{{asset('svg/coding.svg')}}" alt="">
						<p>Разработка сайтов</p>
				</a>
			</div>
			<div class="col-md-3 text-center">
				<a href="#" class="services">
						<img src="{{asset('svg/smartphone.svg')}}" alt="">
						<p>Моб приложения</p>
				</a>
			</div>
			<div class="col-md-3 text-center">
				<a href="#" class="services">
						<img src="{{asset('svg/seo-1.svg')}}" alt="">
						<p>Интернет Маркетинг</p>
				</a>
			</div>
    </div>
		<div class="row justify-content-center">
			  <div class="col-lg-6">
					 <h2 class="text-center mt-2 mb-3 advantages-title">Наши преимущества</h2>
					 <div class="bottom-line mb-4"></div>
			  </div>
				<div class="col-lg-10">
					<p class="about-description text-center mt-3">Главные причины, по которым стоит отдать предпочтение именно студии интернет-решений <span>LifeBeget</span></p>
				</div>
		</div>
		<div class="row mt-3">
			 <div class="col-md-4 text-center">
           <div class="advantages">
           	    <img src="{{asset('assets/img/advantages/benefit_ic_1.png')}}" alt="">
								<h3>Индивидуальный подход</h3>
								<p class="advantages-desc">
									Команда наших специалистов – профессионалы
									своего дела с опытом работы более 6 лет.
								</p>
           </div>
			 </div>
			 <div class="col-md-4 text-center">
          <img src="{{asset('assets/img/advantages/benefit_ic_2.png')}}" alt="">
					<h3>Надежность и стабильность</h1>
						<p class="advantages-desc">
							Мы никогда ничего не делаем наполовину и
							никогда не повторяемся. Наши решения долговечны
							и практичны.
						</p>
			 </div>
			 <div class="col-md-4 text-center">
				 <img src="{{asset('assets/img/advantages/benefit_ic_3.png')}}" alt="">
				 <h3>Поддержка и консультации</h1>
					 <p class="advantages-desc">
						По любым вопросам, возникающим
						в процессе работы с сайтами,
						мы даем содержательные консультации.
					 </p>
			 </div>
		</div>
		<div class="row mt-3">
			 <div class="col-md-4 text-center">
           <div class="advantages">
           	    <img src="{{asset('assets/img/advantages/benefit_ic_4.png')}}" alt="">
								<h3>Готовые решения</h3>
								<p class="advantages-desc">
									Разработка и внедрение готовых решений, позволяющих быстро и
									эффективно использовать сайт для развития вашего бизнеса.
								</p>
           </div>
			 </div>
			 <div class="col-md-4 text-center">
          <img src="{{asset('assets/img/advantages/benefit_ic_5.png')}}" alt="">
					<h3>Гарантия результатов</h3>
						<p class="advantages-desc">
							Мы разработали и реализовали систему
							 мониторинга позиций сайтов в поисковых системах.
						</p>
			 </div>
			 <div class="col-md-4 text-center">
				 <img src="{{asset('assets/img/advantages/benefit_ic_6.png')}}" alt="">
				 <h3>Экономия денег и времени</h3>
					 <p class="advantages-desc">
						Мы даем бесплатные рекомендации по улучшению
						Вашего сайта и консультации по текущей работе с сайтом.
					 </p>
			 </div>
		</div>
	</div>
</section>
<!-- End About Area -->
<!-- Start Digital Studio -->
<!-- Start shuffle Area -->
<section id="protfolio" class="section-full portfolio-content">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="product-area-title text-center">
					<h3 class="text-w text-uppercase mt-20">Портфолио</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="controls d-flex flex-wrap justify-content-center">
			<a class="filter active" data-filter="all">Все</a>
			<a class="filter" data-filter=".category-1">Lading Page</a>
			<a class="filter" data-filter=".category-2">Мобильные Приложвния</a>
			<a class="filter" data-filter=".category-3">Интернет Магазины</a>
			<a class="filter" data-filter=".category-4">Индивидуальный заказ</a>
			<a class="filter" data-filter=".category-5">Дизайн</a>
			<a class="filter" data-filter=".category-6">Сео</a>
		</div>
	</div>

    <div id="filter-content" class="row no-gutters mt-50">
        @foreach($portfolios as $portfolio)
            <div class="mix category-3 col-lg-3 col-md-4 col-sm-6 single-filter-content" data-myorder="1">
                <img class=" mix category-1 col-lg-12 col-md-12 col-sm-12 single-filter-content"
                     src="/img_portfolio/{{$portfolio->image}}">
                <div class="overlay overlay-bg-content d-flex align-items-center justify-content-center flex-column">
                    <p class="text-white">{{$portfolio->link}}</p>
                    <div class="line"></div>
                    <h5 class="text-white text-uppercase">{{$portfolio->name}}</h5>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- End shuffle Area -->
<section class="section-full">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<h3 class="text-b text-center mt-5 mb-3">Наши Клиенты</h3>
				<div class="bottom-line mb-4"></div>
			</div>
		</div>
	</div>
</section>
<!-- Start Pricing Area -->
<section class="section-full partners-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="product-area-title text-center">
					<div class="owl-carousel owl-theme mb-5">
            <div class="item">
              <img src="{{asset('assets/img/partners/1.png')}}" alt="">
            </div>
            <div class="item">
              <img src="{{asset('assets/img/partners/2.png')}}" alt="">
            </div>
            <div class="item">
              <img src="{{asset('assets/img/partners/3.png')}}" alt="">
            </div>
						<div class="item">
              <img src="{{asset('assets/img/partners/4.png')}}" alt="">
            </div>
						<div class="item">
              <img src="{{asset('assets/img/partners/5.png')}}" alt="">
            </div>
						<div class="item">
              <img src="{{asset('assets/img/partners/6.png')}}" alt="">
            </div>
          </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Pricing Area -->

<!-- Start Team member Area -->
<section id="team" class="bg-team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="product-area-title text-center">
					<h2 class="h1 our-workers mt-5 mb-3">Наши Сотрудники</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="single-member">
					<div class="thumb relative" style="background: url({{asset('assets/img/t1.jpg')}});">
						<div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
							<p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
							<div class="line"></div>
							<div class="social d-flex align-items-center justify-content-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
					<div class="desc text-center">
						<h5 class="text-uppercase"><a href="#">Ethel Davis</a></h5>
						<p>Managing Director (Sales)</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-member">
					<div class="thumb relative" style="background: url({{asset('assets/img/t2.jpg')}});">
						<div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
							<p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
							<div class="line"></div>
							<div class="social d-flex align-items-center justify-content-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
					<div class="desc text-center">
						<h5 class="text-uppercase"><a href="#">Rodney Cooper</a></h5>
						<p>Creative Art Director</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-member">
					<div class="thumb relative" style="background: url({{asset('assets/img/t3.jpg')}});">
						<div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
							<p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
							<div class="line"></div>
							<div class="social d-flex align-items-center justify-content-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
					<div class="desc text-center">
						<h5 class="text-uppercase"><a href="#">Dora Walker</a></h5>
						<p>Senior Core Developer</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-member">
					<div class="thumb relative" style="background: url({{asset('assets/img/t4.jpg')}});">
						<div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
							<p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
							<div class="line"></div>
							<div class="social d-flex align-items-center justify-content-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
					<div class="desc text-center">
						<h5 class="text-uppercase"><a href="#">Lena Keller</a></h5>
						<p>Creative Content Developer</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Team member Area -->

<!-- Start Contact Area -->
<section id="contact" class="section-full bg-animate">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="product-area-title text-center">
					<h2 class="h1">
              ЗАЯВКА НА РАЗРАБОТКУ САЙТА!
					</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 mt-30">
				<p>
					Мы всегда рады теплому общению с прекрасными людьми!
          Напишите нам и мы свяжемся с вами в ближайшее время!
				</p>
				<div class="row">
					<div class="col-sm-6">
						<div class="address mt-20">
							<h6 class="text-uppercase mb-15 bg-animate-h6">Наш адресс</h6>
							<p>Улица Ширакаци<br> 8-ой Военный городок <br> дом 18 кв 33 </p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="address mt-20">
							<h6 class="text-uppercase mb-15 bg-animate-h6">Контакты</h6>
							<a href="tel:0000">+374 93 44 66 07</a> <br>
							<a href="tel:0000">+374 93 44 66 07</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-30">
				<form id="myForm" role="form" method="POST" action="{{ action('HomeController@mail') }}" class="contact-form">
					{{ csrf_field() }}
					<div class="single-input color-2 mb-10">
						<input type="text" name="fname" placeholder="Имя" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required>
					</div>
					<div class="single-input color-2 mb-10">
						<input type="email" name="email" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required>
					</div>
					<div class="single-input color-2 mb-10">
						<input type="text" name="subject" placeholder="Телефон" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" required>
					</div>

					<div class="single-input color-2 mb-10">
						<textarea name="message" placeholder="Напишите Ваше сообщение" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type your message here...'" required></textarea>
					</div>
					<div class="d-flex justify-content-end"><button type="submit" class="mt-10 primary-btn d-inline-flex text-uppercase align-items-center">Send Message<span class="lnr lnr-arrow-right"></span></button></div>
					<div class="alert"></div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End Contact Area -->
<!-- Start Cta Area -->

<!-- End Cta Area -->
<!-- <footer class="section-full">
	<div class="container">
		<div class="footer-bottom d-flex justify-content-between align-items-center">
			<p class="footer-text m-0">Copyright &copy; 2017  |  All rights reserved to <a href="#">Datarc inc.</a> Designed by <a href="https://colorlib.com/wp">Colorlib</a>.</p>
			<div class="footer-social d-flex align-items-center">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
		</div>
	</div>
</footer> -->
@stop
