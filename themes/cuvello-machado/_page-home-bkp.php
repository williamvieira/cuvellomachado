<?php require_once("timeline/home.php"); ?>

<?php
/**
 * Template Name: Home BACKUP
 */
get_header(); 

?>

	<?php get_template_part( 'banner-home'); ?>


	<!-- BLOG -->
	<section class="section-blog">
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
								<img src="<?php bloginfo('template_directory');?>/img/img-blog.png" alt="" class="img-responsive">
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
	<section class="section-services">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-offset-1">
					<div class="title-section">
						<h3>Áreas de Atuação</h3>
						<div class="border-title"></div>
						<p class="subtitle">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="services-content">
						<div class="row">
							<div class="col-md-6">
								<div class="service-title">Relações de consumo</div>
								<ul>
									<li>Imobiliário</li>
									<li>Consumidor</li>
									<li>Telecomunicações</li>
									<li>Aeronáutico</li>
									<li>Bancário</li>
									<li>Plano de saúde</li>
								</ul>
							</div>
							<div class="col-md-6">
								<div class="service-title">Relações da pessoa</div>
								<ul>
									<li>Previdência</li>
									<li>Inventário</li>
									<li>Divórcio</li>
									<li>Alimentos</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ÁREAS DO CLIENTE -->
	<section class="section-client">
		<div class="container">
			<div class="row">
				<div class="title-section">
					<h3>Área do Cliente</h3>
					<div class="border-title"></div>
				</div>
				<div class="col-md-12">
					<div class="body-client">
						<p>
							Lorem ipsum dolor sit amet, eam an meis solum eloquentiam, option labores et per. Et vel consul splendide, utieniam munerenam oblique ex sed. Vide homero malorum id est, has ut affert aperiri admodum. Solet forensibus sea at. Veniam munere sapientem ius te.Vix ludus meliore facilis at, placerat efficiantur vel ut. Veniam munere simet dolor solet appellantur 
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
	<section class="section-team">
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
							<button class="button-reverse" data-toggle="modal" data-target="#modalJoao">Ver Currículo</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="body-team">
							<h4 class="team-title">Carlos Eduardo Cuvello</h4>
							<p class="cargo">Advogado</p>
							<p>
								Especialista em Direito e Operações Imobiliárias. Especializando em Direito Previdenciário.
							</p>
							<button class="button-reverse" data-toggle="modal" data-target="#modalCarlos">Ver Currículo</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="body-team">
							<h4 class="team-title">Antônio Carlos da Mota</h4>
							<p class="cargo">Administrador</p>
							<p>
								Assessor, Consultor e Avaliador Imobiliário. Bacharelando em Direito.
							</p>
							<button class="button-reverse" data-toggle="modal" data-target="#modalAntonio">Ver Currículo</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row padding-team">
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
			</div>
		</div>
	</section>

	<!-- CONTATO -->
	<section class="section-contact">
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
											<p>11 0000-0000</p>
										</div>
	  								</div>
	  								<div class="body-img-icon">
	  									<figure>
											<img src="<?php bloginfo('template_directory');?>/img/icon-email.png" alt="">
										</figure>
										<div class="body-icon-text">
											<p>Email</p>
											<p>contato@cuvelloemachado.com.br</p>
										</div>
	  								</div>
	  								<div class="body-img-icon">
	  									<figure>
											<img src="<?php bloginfo('template_directory');?>/img/icon-facebook.png" alt="">
										</figure>
										<div class="body-icon-text">
											<p>Facebook</p>
											<p>www.facebook.com/cuvelloemachado</p>
										</div>
	  								</div>
	                            </div>
	                            <div class="col-md-7">
	                                <div id="contato-form">
	                                     <form class="form">
	                                        <?php echo do_shortcode( '[contact-form-7 id="17" title="Contato"]' ); ?>
	                                    </form>
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