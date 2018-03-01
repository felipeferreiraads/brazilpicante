<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Brazil Picante</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript">
			var template = '<?php echo get_template_directory_uri();?>/';
			var base_url = '<?php echo site_url('/');?>';
		</script>
		<style>@font-face{font-family:'FontAwesome';src:url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?v=4.7.0);src:url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'),url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0) format('woff2'),url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff?v=4.7.0) format('woff'),url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf?v=4.7.0) format('truetype'),url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-times:before{content:"\f00d"}.fa-facebook-square:before{content:"\f082"}.fa-facebook:before{content:"\f09a"}.fa-bars:before{content:"\f0c9"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-instagram:before{content:"\f16d"}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'),local('OpenSans-Regular'),url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'),local('OpenSans-Regular'),url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'),local('OpenSans-Regular'),url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'),local('OpenSans-Regular'),url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'),local('OpenSans-Regular'),url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'),local('OpenSans-Regular'),url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'),local('OpenSans-Regular'),url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOX-hpOqc.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOVuhpOqc.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOXuhpOqc.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOUehpOqc.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOXehpOqc.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOXOhpOqc.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Satisfy';font-style:normal;font-weight:400;src:local('Satisfy Regular'),local('Satisfy-Regular'),url(https://fonts.gstatic.com/s/satisfy/v8/rP2Hp2yn6lkG50LoCZOIHQ.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}html,body,div,span,iframe,h1,h2,p,a,img,header,nav,section{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-font-smoothing:subpixel-antialiased!important}header,nav,section{display:block}body{line-height:1}img{display:block}a{display:block;text-decoration:none}body{position:relative;width:100%;font-family:'Open Sans',sans-serif;background-color:#fff;font-size:10px;color:#000}h1,h2{font-family:'Open Sans',sans-serif;font-weight:700}::-webkit-input-placeholder{opacity:1;color:#fff}:-moz-placeholder{opacity:1;color:#333}::-moz-placeholder{opacity:1;color:#333}:-ms-input-placeholder{opacity:1;color:#333}html{font-size:62.5%}body{padding-top:100px}header{width:100%;height:100px;background:#fff;position:fixed;top:0;left:0;z-index:1;box-shadow:0 0 2px rgba(0,0,0,.3)}header .container{width:1200px;max-width:95%;height:100%;margin:0 auto;display:flex;justify-content:space-between;align-items:center}header nav{width:40%;display:flex;justify-content:space-between;margin-left:auto}header nav a{font-size:21px;color:#060;font-family:'Satisfy',cursive}header .social{display:flex;margin-left:40px}header .social a{font-size:22px;color:#060}header .social a:first-child{margin-right:10px}.menu-mobile-link{font-size:25px;color:#060;display:none}.menu-mobile{width:300px;height:100%;background:#060;position:fixed;top:0;right:0;padding:6rem 3rem 3rem;display:none;flex-flow:column;align-items:flex-end;z-index:3}.menu-mobile .links{width:100%;padding:3rem;border-top:1px solid #fff;border-bottom:1px solid #fff}.menu-mobile .links a{font-size:1.6rem;color:#fff;margin-bottom:2rem}.menu-mobile .links a:last-child{margin:0}.social-mobile{width:100%;display:flex;justify-content:center;margin-top:1rem}.social-mobile a{margin-right:5px;width:35px;height:35px;border-radius:35px;display:block;line-height:35px;text-align:center;border:1px solid #fff;font-size:1.6rem;color:#fff}.close-menu{position:absolute;top:1rem;left:3rem;font-size:2.5rem;color:#fff}.overlay-menu{width:100%;height:100%;background:rgba(0,102,0,.4);position:fixed;top:0;left:0;z-index:2;display:none}@media (max-width:1220px){header nav{width:60%}}@media (max-width:768px){header nav{display:none}header .social{display:none}.menu-mobile-link{display:block}}#banner{width:100%;height:500px}#banner .container{width:1200px;max-width:95%;height:100%;margin:0 auto;display:flex;justify-content:flex-end;align-items:center}#banner .cardapio{width:500px;max-width:100%;padding:25px;border-radius:25px;background:rgba(255,255,255,.9)}#banner h1{font-family:'Satisfy',cursive;font-size:30px;color:#060;padding-bottom:10px;border-bottom:1px dotted #060;font-weight:400;text-align:center}#banner p{font-size:16px;color:#333;margin-bottom:15px;text-align:center;padding-top:10px;line-height:25px}#banner a{width:300px;max-width:100%;height:55px;background:#004d00;margin:0 auto;display:block;text-align:center;line-height:55px;font-size:22px;font-family:'Satisfy',cursive;color:#fff;margin-top:20px}@media (max-width:768px){#banner{justify-content:center;padding:0}}#quem-somos{width:100%}#quem-somos .container{width:1200px;max-width:95%;margin:0 auto;display:flex;padding:50px 0}#quem-somos .text{flex:1;padding-right:5%}#quem-somos .text h2{font-family:'Satisfy',cursive;font-size:30px;color:#060;padding-bottom:10px;border-bottom:1px dotted #060;font-weight:400;margin-bottom:20px}#quem-somos p{font-size:16px;color:#333;line-height:26px;margin-bottom:10px;text-align:justify}.gallery{width:530px;max-width:100%;display:flex;align-items:center;flex-flow:column;position:relative;padding-top:40px}.container-gallery{width:100%;height:300px;position:relative}.gallery .carousel{width:100%;height:100%;overflow:hidden;position:relative}.gallery .item{width:100%;height:100%}.gallery .item img{width:100%;height:100%;object-fit:cover;object-position:center}.prev{width:30px;height:30px;border-radius:30px;display:flex;justify-content:center;align-items:center;border:2px solid #fff;font-size:20px;color:#fff;position:absolute;left:20px;top:50%;transform:translateY(-50%);display:none}.next{width:30px;height:30px;border-radius:30px;display:flex;justify-content:center;align-items:center;border:2px solid #fff;font-size:20px;color:#fff;position:absolute;right:20px;top:50%;transform:translateY(-50%);display:none}@media (max-width:992px){#quem-somos .container{flex-flow:column;align-items:center}#quem-somos .text{padding:0}}@media (max-width:560px){.prev,.next{display:block!important}.container-gallery{height:auto}}.map-item{width:100%;height:100%;display:none}.map iframe{width:100%!important;height:100%!important}@media (max-width:768px){.map iframe{display:none}}</style>
	</head>

	<body>
		<header class="nav-down">
			<div class="container">
				<div class="logo">
					<a href="#home" title="Brasil Picante">
						<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Brasil Picante">
					</a>
				</div>

				<nav class="menu">
					<a href="#home" title="Home">Home</a>
					<a href="#quem-somos" title="A Brasil Picante">A Brazil Picante</a>
					<a href="#dicas-do-chefe" title="Dicas do Chefe">Dicas do Chefe</a>
					<a href="#contato" title="Contato">Contato</a>
				</nav>

				<div class="social">
					<a href="#" title="Facebook"><span class="fa fa-facebook-square"></span></a>
					<a href="#" title="Instagram"><span class="fa fa-instagram"></span></a>
				</div>

				<a href="#" class="menu-mobile-link"><span class="fa fa-bars"></span></a>
			</div>
		</header>

		<nav class="menu-mobile">
			<a href="#" class="close-menu"><span class="fa fa-times"></span></a>

			<div class="links">
				<a href="#home">Home</a>
				<a href="#quem-somos">Quem Somos</a>
				<a href="#dicas-do-chef">Dicas do Chef</a>
				<a href="#contato">Contato</a>

			</div>

			<div class="social-mobile">
				<a href="#" title="Facebook" class="facebook">
					<span class="fa fa-facebook"></span>
				</a>

				<a href="#" title="Instagram" class="instagram">
					<span class="fa fa-instagram"></span>
				</a>
			</div>
		</nav>

		<div class="overlay-menu"></div>

		<div class="home"></div>

		<section id="banner">
			<div class="container">
				<div class="cardapio">
					<h1>Somos a Brazil Picante</h1>
					<p>Preparamos sempre a melhor refeição para você e sua familia!</p>
					<a href="#quem-somos">Saiba mais</a>
				</div>
			</div>
		</section>

		<section id="quem-somos">
			<div class="container">
				<div class="text">
					<h2>A Brasil Picante</h2>
					<?php
						$post = get_post(4);
						echo apply_filters('the_content', $post->post_content);
					?>
				</div>

				<div class="gallery">
					<?php $images = get_field('galeria', 4);?>
					<div class="container-gallery">
						<div class="carousel" data-slider-id="1">
							<?php foreach($images as $img):?>
							<div class="item">
								<img src="<?php echo $img['url'];?>">
							</div>
							<?php endforeach;?>
						</div>
						<div class="prev"><span class="fa fa-angle-left"></span></div>
						<div class="next"><span class="fa fa-angle-right"></span></div>
					</div>

					<div class="thumbs owl-thumbs" data-slider-id="1">
						<?php foreach($images as $img):?>
						<img src="<?php echo $img['url'];?>">
						<?php endforeach;?>
					</div>

				</div>
			</div>
		</section>

		<section id="dicas-do-chefe" class="chef">
			<div class="container">
				<h2>Dicas do Chef</h2>
				<div class="items">
				<?php
				$posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3));
				while($posts->have_posts()): $posts->the_post();?>
					<div class="item">
						<a href="<?php echo the_permalink();?>" title="<?php echo get_the_title();?>">
							<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">
						</a>
						<a href="<?php echo the_permalink();?>" title="<?php echo get_the_title();?>">
							<h3><?php echo get_the_title();?></h3>
						</a>
					</div><?php
				endwhile;
				?>
				</div>
			</div>

			<a href="#" title="Veja Mais" class="see-more">Veja mais</a>
		</section>

		<section id="contato">
			<div class="map">
				<div class="map-item" id="agua-verde">				
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.9054590076953!2d-49.264712985436645!3d-25.44142408378319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce45dea0a9a6f%3A0xb79c1889a9c7777a!2sAv.+Pres.+Get%C3%BAlio+Vargas%2C+259+-+Rebou%C3%A7as%2C+Curitiba+-+PR!5e0!3m2!1spt-BR!2sbr!4v1518138237746" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

				<div class="map-item" id="alto-gloria">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.0316815382103!2d-49.25988108543757!3d-25.40375008380057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce69c3689de4f%3A0xa8561c4271404555!2sAv.+Anita+Garibaldi%2C+888+-+Cabral%2C+Curitiba+-+PR!5e0!3m2!1spt-BR!2sbr!4v1518138555647" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

				<div class="map-item" id="ahu">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.650335224076!2d-49.26692418543714!3d-25.41651258379464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce418638d596f%3A0x4e3fd77d6724934f!2sR.+Mau%C3%A1%2C+1099+-+Alto+da+Gl%C3%B3ria%2C+Curitiba+-+PR%2C+80030-200!5e0!3m2!1spt-BR!2sbr!4v1518138656009" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>

			<div class="form">
				<h2>Venha nos visitar!</h2>
				<div class="address">
					<div class="info">
						<h3>Unidade Água Verde</h3>
						<address>Av. Pres. Getúlio Vargas, 2591</address>
						<address>Água Verde - Curitiba / PR</address>
						<a href="#" data-map="#agua-verde">Ver mapa</a>
					</div>

					<div class="info">
						<h3>Unidade Alto da Glória</h3>
						<address>Av. Anita Garibaldi, 888</address>
						<address>Alto da Glória - Curitiba / PR</address>
						<a href="#" data-map="#alto-gloria">Ver mapa</a>
					</div>

					<div class="info">
						<h3>Unidade Ahú</h3>
						<address>Rua Mauá, 1099</address>
						<address>Ahú - Curitiba / PR</address>
						<a href="#" data-map="#ahu">Ver mapa</a>
					</div>
				</div>

				<h2 class="fale-conosco">Fale Conosco</h2>
				<form id="form-contact">
					<input type="text" name="nome" placeholder="Nome" required>
					<input type="email" name="email" placeholder="E-mail" required>
					<input type="tel" name="telefone" placeholder="Telefone" required>
					<textarea name="mensagem" placeholder="Mensagem"></textarea>
					<button type="submit">Enviar mensagem</button>
				</form>
			</div>
		</section>

		<footer>
			<p>&copy; Brazil Picante 2017 - Todos os direitos reservados</p>
		</footer>

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.min.css">
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bundle.min.js"></script>
	</body>
</html>	