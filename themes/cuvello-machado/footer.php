<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cuvello-machado
 */


?>
		<!-- MODAL LOGIN -->
		<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="loginmodal-container">
					<img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="" class="img-responsive"><br>
				<!-- 	<form method="post" action=""> -->
						<input type="text" id="usuario" name="usuario" placeholder="Usuário">
						<input type="password" id="senha" name="senha" placeholder="Senha">
						<input type="submit" id="login_button" name="login" class="button-orange" value="Entrar">
					<!-- </form>  -->
				</div>
			</div>
		</div>

		<!-- MODAL ANTONIO -->
		<div class="modal fade" id="modalAntonio" role="dialog">
			<div class="modal-dialog modal-lg" role="dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title">Currículo</h4>
					</div>
					<div class="modal-body">
						<div class="">
							<h4>
								Antônio Carlos da Mota - Administrador. 
							</h4>
						</div>
						<div class="">
							<p>
								Assessor, consultor e avaliador imobiliário. Formado em Administração de Empresas pela UniRadial. Graduando em Direito. Corretor de Imóveis. Experiência em operações, avaliações e contratos imobiliários.

							</p>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- MODAL CARLOS -->
		<div class="modal fade" id="modalCarlos" role="dialog">
			<div class="modal-dialog modal-lg" role="dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title">Currículo</h4>
					</div>
					<div class="modal-body">
						<div class="">
							<h4>
								Carlos Eduardo Cuvello - Advogado.
							</h4>
						</div>
						<div class="">
							<p>
								Advogado. Formado pela Faculdade de Direito de São Bernardo do Campo. Extensão em Registro de Imóveis. Especialização em Direito e Operações Imobiliárias. Especializando em Direito Previdenciário. Membro da Comissão de Direito Notarial e Registral da OAB - São Paulo.
 
							</p>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>


		<!-- MODAL JOAO -->
		<div class="modal fade" id="modalJoao" role="dialog">
			<div class="modal-dialog modal-lg" role="dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title">Currículo</h4>
					</div>
					<div class="modal-body">
						<div class="">
							<h4>
								João Claudio Machado - Advogado.
							</h4>
						</div>
						<div class="">
							<p>
								Advogado. Formado pela Faculdade de Direito de São Bernardo do Campo. Especialização em Direito Ambiental e Gestão Estratégica da Sustentabilidade. Mestre em Direitos de Titularidade Difusa e Coletiva. Autor de artigos jurídicos científicos. Membro da Sociedade Brasileira de Direito Aeronáutico e Espacial.

							</p>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>Cuvello & Macahdo - Todos os direitos reservados</p>
					</div>
					<div class="col-md-8">
						<img src="<?php bloginfo('template_directory');?>/img/criaturo.png">
					</div>
				</div>
			</div>
		</footer>


		<!-- TEXTAREA EDITOR -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
	    <script src="<?php bloginfo('template_directory');?>/js/classie.js"></script>
	    <script src="<?php bloginfo('template_directory');?>/js/cbpAnimatedHeader.js"></script>

		<script type="text/javascript">
		   $(document).ready(function() {
		      $('.summernote').summernote({height: 200});
		      $(".note-toolbar").remove();
		   });
	    </script>

		<!-- DATATABLE -->
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> 
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script> 
		<script src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script> 
		<script src="https://cdn.datatables.net/responsive/2.2.0/js/responsive.bootstrap.min.js"></script> 

		<!-- SCROLL -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/jquery.easing.min.js"></script>
	    <script src="<?php bloginfo('template_directory');?>/js/scrolling-nav.js"></script>

		
		<script type="text/javascript">

			$(document).ready(function() {
			    var table = $('#example').DataTable( {
			        responsive: true,
			        "language": {
               			"url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
               		}
			    });
			});

		</script>

		<script>

			$('.nav-collapse').click('li', function() {
			    $('.nav-collapse').collapse('hide');
			});

			$(document).on('click','.navbar-collapse.in',function(e) {

			    if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
			        $(this).collapse('hide');
			    }

			});

		</script>


        <?php wp_footer(); ?>
    </body>
</html>  

