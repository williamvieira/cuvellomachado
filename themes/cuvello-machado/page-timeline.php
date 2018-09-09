<?php 

	require_once("timeline/timeline.php");

?>

<?php
/**
 * Template Name: Timeline
 */
get_header(); 

?>
	<?php if ($dados->tipo_usuario == 'cliente') : ?>
		<section class="timeline-client">
	        <div class="container">
	        	 <div class="row timeline">
	            	<div class="col-md-12 no-padding">
		                <h5 class="title-black">Histórico</h5>
					    <ul class="list-unstyled timeline widget">
			        		<?php if (count($timeline)) : ?>
				        		<?php foreach ($timeline as $row) : ?>
							    	<li>
							    		<div class="block">
								    		<div class="block_content">
							    				<h6 class="timeline-title">
							    					<?php echo strip_tags(date('d/m/Y H:i:s', strtotime($row->data))); ?>
							    				</h6>
							    				<div class="byline">                              
							    					<p>
							    						<?php echo strip_tags($row->conteudo) ?>
							    					</p>
							    				</div>
								    		</div>
							    		</div>
							    	</li> 
					    		<?php endforeach; ?>
				            <?php else : ?>
				            	<div class="byline">                              
			    					<p>
			    						Não há histórico...
			    					</p>
			    				</div>
				            <?php endif; ?>
				    	</ul>
	            	</div>
	            </div>
	        </div>
	        <div class="clear"></div>
	    </section>
	<?php endif; ?>

	<?php if ($dados->tipo_usuario == 'admin') : ?>
	    <section class="timeline-admin">
	        <div class="container">
	            <div class="row">
	            	<div class="col-md-12">
		                <h5 class="title-black">Clientes</h5>
		                <div class="row">
		                	<div class="col-md-12 no-padding"> 		
		                		<a href="" class="btn btn-success pull-right btn-md" data-toggle="modal" data-target="#modalCadastrar">Cadastrar Usuário</a>		                	
		                	</div>
		                </div>
		                <div class="row">
		                	<?php if (strlen($sucesso)) : ?>

		                		<?php $msg->success($sucesso); ?>
		                		<?php $msg->display(); ?>

							<?php endif; ?>
							<?php if (strlen($erro)) : ?>

								<?php $msg->error($erro); ?>
								<?php $msg->display(); ?>
							<?php endif; ?>
		                </div>
			        	<div class="row">
			        		<div class="col-md-12 no-padding">
				        		<table id="example" class="table table-bordered nowrap" cellspacing="0" width="100%">
							        <thead>
							            <tr>
							                <th>Nome do Cliente</th>
							                <th>Status</th>
							                <th>Ações</th>
							            </tr>
							        </thead>
							        <tfoot>
							            <tr>
							                <th>Nome do Cliente</th>
							                <th>Status</th>
							                <th>Ações</th>
							            </tr>
							        </tfoot>
							        <tbody>
							        	<?php foreach ($usuarios as $row) : ?>
							            <tr>
							                <td><a href='<?php echo get_home_url() . "/processo/?&id=" . $row->idusuario;?>' class="anchor-grid"><?php echo $row->nome; ?></a></td>
							                <td><?php echo $row->status; ?></td>
							                <td class="last" width="100px">
								                <?php if($row->status == "Ativo") : ?>
						                        	<a href="<?php echo get_home_url() . "/timeline/?&id=" . $row->idusuario . "&status=Bloqueado"?>"><i class="fa fa-unlock-alt" aria-hidden="true"></i></a>
						                        <?php else : ?>
						                        	<a href="<?php echo get_home_url() . "/timeline/?&id=" . $row->idusuario . "&status=Ativo"?>"><i class="fa fa-lock" aria-hidden="true"></i></a>
						                        <?php endif; ?>
						                        <i class="fa fa-pencil-square-o" data-idusuario="<?php echo $row->idusuario ?>" data-nome="<?php echo $row->nome ?>" data-usuario="<?php echo $row->usuario ?>" data-email="<?php echo $row->email ?>" aria-hidden="true" data-toggle="modal" data-target="#modalEditar"></i></a>
						                        <i class="fa fa-trash-o" data-idusuario="<?php echo $row->idusuario ?>" data-deletado="Sim" aria-hidden="true" data-toggle="modal" data-target="#modalExcluir"></i>
					                        </td>
							            </tr>
							        	<?php endforeach; ?>
							    	</tbody>
				    			</table>
			        		</div>
			        	</div>
	            	</div>
	            </div>
	        </div>
			<!-- MODAL EXCLUIR -->
	        <div class="modal fade" id="modalExcluir" role="dialog">
	        	<div class="modal-dialog modal-sm">
	        		<div class="modal-content">

	        			<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
	        				</button>
	        				<h4 class="modal-title" id="myModalLabel2">Atenção!</h4>
	        			</div>
	        			<div class="modal-body">
	        				<h4>Deseja realmente excluir?</h4>
	        			</div>
	        			<div class="modal-footer">

	        				<button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Não</button>
	        				<a href="" id="ancoraExcluir">
	        					<button type="button" class="btn btn-success">Sim</button>
	        				</a>
	        			</div>

	        		</div>
	        	</div>
	        </div>

			<!-- MODAL CADASTRAR -->
			<div class="modal fade" id="modalCadastrar">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h4 class="modal-title">Cadastrar Usuário</h4>
						</div>
		            	<form method="post" action="">
							<div class="modal-body">
			            			<div class="form-group">
			            				<label for="nome">Nome:</label>
			            				<input type="nome" class="form-control" id="nome" placeholder="Nome" name="nome">
			            			</div>
			            			<div class="form-group">
			            				<label for="usuario">Usuário:</label>
			            				<input type="usuario" class="form-control" id="usuario" placeholder="Usuário" name="usuario">
			            			</div>
			            			<div class="form-group">
			            				<label for="email">E-mail:</label>
			            				<input type="email" class="form-control" id="email" placeholder="Email" name="email">
			            			</div>
			            			<div class="form-group">
			            				<label for="senha">Senha:</label>
			            				<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
			            			</div>
							</div>
							<div class="modal-footer">
								<input type="submit" name="cadastrarCliente" value="Salvar" class="btn btn-primary"></input>
							</div>
		            	</form>
					</div>
				</div>
			</div>

			<!-- MODAL EDITAR -->
			<div class="modal fade" id="modalEditar" role="dialog">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h4 class="modal-title">Editar Usuário</h4>
						</div>
		            	<form method="post" action="">
							<div class="modal-body">
			            			<div class="form-group">
			            				<label for="nome">Nome:</label>
			            				<input type="nome" class="form-control" id="nomeEditar" placeholder="Nome" name="nome" value="">
			            			</div>
			            			<div class="form-group">
			            				<label for="usuario">Usuário:</label>
			            				<input type="usuario" class="form-control" id="usuarioEditar" placeholder="Usuário" name="usuario" value="">
			            			</div>
			            			<div class="form-group">
			            				<label for="email">E-mail:</label>
			            				<input type="email" class="form-control" id="emailEditar" placeholder="Email" name="email" value="">
			            			</div>
			            			<div class="form-group">
			            				<label for="senha">Nova Senha:</label>
			            				<input type="password" class="form-control" id="senhaEditar" placeholder="Senha" name="senha" value="">
			            				<input type="hidden" class="form-control" id="idEditar" name="idEditar" value="">
			            			</div>
							</div>
							<div class="modal-footer">
								<input type="submit" name="editarCliente" value="Salvar" class="btn btn-primary"></input>
							</div>
		            	</form>
					</div>
				</div>
			</div>
	
	    </section>

    <?php endif; ?>


    <?php $urlBack = get_home_url() . "/home"?>
    <script type="text/javascript">
		window.onload = function () {
			history.pushState(null, null, '<?php echo $_SERVER["REQUEST_URI"]; ?>');
			window.addEventListener('popstate', function(event) {
				var urlBack = <?php echo "'" . $urlBack . "'";?>;
					window.location.assign(urlBack);
			});

			$(".fa-trash-o").click(function(){
				var id  = $(this).attr("data-idusuario");
				var deletado = $(this).attr("data-deletado");
				var url = "<?php echo $url ?>/timeline/?id= " + id + "&deletado=" + deletado;
				$('#ancoraExcluir').attr('href',url);
			});

			$(".fa-pencil-square-o").click(function(){

				var id = $(this).attr("data-idusuario");
				var nome = $(this).attr("data-nome");
				var usuario = $(this).attr("data-usuario");
				var email = $(this).attr("data-email");
				var senha = $(this).attr("data-senha");

				$('#idEditar').val(id);
				$('#nomeEditar').val(nome);
				$('#usuarioEditar').val(usuario);
				$('#emailEditar').val(email);

			});
		};
	</script>




<?php get_footer(); ?>