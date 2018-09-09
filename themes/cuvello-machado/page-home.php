<?php require_once("timeline/home.php"); ?>

<?php
/**
 * Template Name: Home
 */
get_header(); 

?>

	<?php get_template_part( 'banner-home'); ?>


	<!-- BLOG -->
	<section id="blog-section" class="section-blog">
		<div class="container">
			<div class="row">
				<div class="title-section">
					<h1>Blog</h1>
					<div class="border-title"></div>
				</div>
				<div class="col-md-12">
					<?php $query = new WP_Query(array('posts_per_page' => '3')); ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-md-4">
							<div class="body-blog">
								<?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ));?>
								<h2 class="title"><?php the_title()?></h2>
								<p>
									<?php the_excerpt()?>
								</p>
								<a href="<?php the_permalink()?>" class="anchor-orange">Ler Artigo</a>
							</div>
						</div>
					 <?php endwhile; ?>
					 <?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- ÁREAS DE ATUAÇÃO -->
	<section id="services-section" class="section-services">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-offset-1">
					<div class="title-section">
						<h3>Áreas de Atuação</h3>
						<div class="border-title"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="services-content">
						<div class="row">
							<div class="col-md-6">
								<div class="service-title">Relações de consumo</div>
								<ul>
									<li><a href="<?php echo esc_url(home_url('/'));?>imobiliario">Imobiliário</li>
									<li><a href="<?php echo esc_url(home_url('/'));?>consumidor">Consumidor</li>
									<li><a href="<?php echo esc_url(home_url('/'));?>telecomunicacoes">Telecomunicações</li>
									<li><a href="<?php echo esc_url(home_url('/'));?>aeronautico">Aeronáutico</li>
									<li><a href="<?php echo esc_url(home_url('/'));?>bancario">Bancário</li>
									<li><a href="<?php echo esc_url(home_url('/'));?>plano-de-saude">Plano de saúde</li>
								</ul>
							</div>
							<div class="col-md-6">
								<div class="service-title">Relações da pessoa</div>
								<ul>
									<li><a href="<?php echo esc_url(home_url('/'));?>previcenciario">Previdência</li>
									<li><a href="<?php echo esc_url(home_url('/'));?>inventario">Inventário</li>
									<li><a href="<?php echo esc_url(home_url('/'));?>familia">Família</li>
									<li><a href="<?php echo esc_url(home_url('/'));?>acidente-de-trabalho">Acidente de trabalho</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ÁREAS DO CLIENTE -->
	<section id="client-area" class="section-client">
		<div class="container">
			<div class="row">
				<div class="title-section">
					<h3>Área do Cliente</h3>
					<div class="border-title"></div>
				</div>
				<div class="col-md-12">
					<div class="body-client">
						<p>
							Sistema de Informação de Processos. Nossa transparência online para clientes de todo o Brasil.
						</p>
						<?php if (!isset($_SESSION['logado'])) : ?>
							<button class="button-orange" data-toggle="modal" data-target="#modalLogin">Acessar</button>
					    <?php else : ?>
					    	<a href="<?php echo get_home_url(); ?>/timeline" class="button-orange">Acessar</a>
					    <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- NOSSA EQUIPE -->
	<section id="team-section" class="section-team">
		<div class="container">
			<div class="row">
				<div class="title-section">
					<h4>Nossa equipe</h4>
					<div class="border-title"></div>
				</div>
				<div class="col-md-12">
					<div class="col-md-4">
						<div class="body-team">
							<h4 class="team-title">João Claudio Machado</h4>
							<p class="cargo">Advogado</p>
							<p>
								Mestre em Direitos Difusos, Coletivos e Sociais. Especialista em Direito Ambiental e Gestão Estratégica da Sustentabilidade.
							</p>
						
						</div>
					</div>
					<div class="col-md-4">
						<div class="body-team">
							<h4 class="team-title">Carlos Eduardo Cuvello</h4>
							<p class="cargo">Advogado</p>
							<p>
								Especialista em Direito e Operações Imobiliárias. Especializando em Direito Previdenciário.
							</p>
							
						</div>
					</div>
					<div class="col-md-4">
						<div class="body-team">
							<h4 class="team-title">Antônio Carlos da Mota</h4>
							<p class="cargo">Administrador</p>
							<p>
								Assessor, Consultor e Avaliador Imobiliário. Bacharelando em Direito.
							</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-4 col-sm-4 align-center">
						<button class="button-reverse" data-toggle="modal" data-target="#modalJoao">Ver Currículo</button>
					</div>
					<div class="col-md-4 col-sm-4 align-center">
						<button class="button-reverse" data-toggle="modal" data-target="#modalCarlos">Ver Currículo</button>
					</div>
					<div class="col-md-4 col-sm-4 align-center">
						<button class="button-reverse" data-toggle="modal" data-target="#modalAntonio">Ver Currículo</button>
					</div>
				</div>
			</div>
<!-- 			<div class="row padding-team">
				<div class="col-md-12">
					<div class="col-md-offset-2 col-md-4">
						<div class="body-team">
							<h4 class="title">Lorem Ipsum Dolor Sit</h4>
							<p>
								Has ei erroribus assueverit persequeris, mei ex amet etiam congue, ei aeque scripta his. Mollis bonorum imperdiet nam in, ea vis dolor.
							</p>
							<button class="button-reverse" data-toggle="modal" data-target="#modalTeam">Ver Currículo</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="body-team">
							<h4 class="title">Lorem Ipsum Dolor Sit</h4>
							<p>
								Has ei erroribus assueverit persequeris, mei ex amet etiam congue, ei aeque scripta his. Mollis bonorum imperdiet nam in, ea vis dolor.
							</p>
							<button class="button-reverse" data-toggle="modal" data-target="#modalTeam">Ver Currículo</button>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</section>

	<!-- CONTATO -->
	<section id="contact-section" class="section-contact">
        <div class="container">
            <div class="row">
                <h5 class="title-black">Contato</h5>
                <div class="col-md-12">
                    <div class="body-contact">
                        <div class="row">
                        	<div class="body-contact">
	                            <div class="col-md-5">
	  								<div class="body-img-icon">
	  									<figure>	
											<img src="<?php bloginfo('template_directory');?>/img/icon-phone.png" alt="">
	  									</figure>	
										<div class="body-icon-text">
											<p>Telefones</p>
											<p>12 98125-9948</p>
											<p>11 98410-6094</p>
										</div>
	  								</div>
	  								<div class="body-img-icon">
	  									<figure>
											<img src="<?php bloginfo('template_directory');?>/img/icon-email.png" alt="">
										</figure>
										<div class="body-icon-text">
											<p>Email</p>
											<p>contato@cmadvo.com</p>
										</div>
	  								</div>
	                            </div>
	                            <div class="col-md-7">
	                                <div id="contato-form">
	                                     <div class="form">
	                                        <?php echo do_shortcode( '[contact-form-7 id="49" title="Contato"]' ); ?>
	                                    </div>
	                                </div>                                    
		                        </div>
		                    </div>
	                    </div>
	                </div>
	            </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>

<?php get_footer(); ?>

 <script>  
	 $(document).ready(function(){  
	      $('#login_button').click(function(){  
	      	   var login = "login";
	           var usuario = $('#usuario').val();  
	           var senha = $('#senha').val();  
	           if(usuario != '' && senha != '')  
	           {  
	                $.ajax({  
	                     url:"<?php echo get_stylesheet_directory_uri() . '/timeline/home.php' ?>",  
	                     method:"POST",  
	                     data: {login:login, usuario:usuario, senha:senha},  
	                     success:function(data)  
	                     {  
	                          if(data == 'No')  
	                          {  
	                               	alert("Nome de usuário ou senha está incorreto!");  
	                          }  
	                          else  
	                          {  
	                          		var url = "<?php echo get_home_url(); ?>/timeline";
	                               	window.location.href = url;
	                          }  
	                     }  
	                });  
	           }  
	           else  
	           {  
	                alert("Ambos os campos são obrigatórios");  
	           }  
	      });   
	 });  
 </script>  