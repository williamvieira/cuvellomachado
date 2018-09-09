<?php require_once("timeline/processo.php"); ?>

<?php

/**
 * Template Name: Processo
 */

get_header(); ?>

    <?php if ($dados->tipo_usuario == 'admin') : ?>
    <section class="timeline-history">
        <div class="container">
            <div class="row">
                <div class="col-md-12 no-padding body-back">
                    <a href="<?php echo get_home_url(); ?>/timeline" class="btn btn-primary btn-md"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Voltar</a>
                </div>
            </div>
            <div class="row textarea-admin">
                <div class="col-md-12 no-padding">
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
                        <form method="post" action="">
                            <textarea name="conteudo" class="summernote"></textarea>
                            <input type="submit" name="processo" class="btn btn-primary pull-right" value="Salvar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row timeline">
                <div class="col-md-12 no-padding">
                    <h5 class="title-black">Timeline</h5>
                    <ul class="list-unstyled timeline widget">
                        <?php if (count($timeline)) : ?>
                        <?php foreach ($timeline as $row) : ?>
                        <?php $iddoconteudo = $row->id; ?>
                        <li>
                            <div class="block">
                                <div class="'block_content'">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="timeline-title">
                                                <?php echo strip_tags(date('d/m/Y H:i:s', strtotime($row->data))); ?>
                                            </h6>
                                        </div>
                                        <div class="col-md-6" style="text-align: right">
                                            <form action="" method="post">
                                                <div data-toggle="modal" data-target="#<?php echo $iddoconteudo;?>">deletar</div>
                                            </form>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="byline">
                                                <p>
                                                    <?php echo strip_tags($row->conteudo) ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <div class="modal fade" id="<?php echo $iddoconteudo;?>" role="dialog">
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
                                        <form method="post" action="">
                                            <input type="hidden" name="iddoconteudo" class="summernote" value="<?php echo $iddoconteudo;?>">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Não</button>
                                            <button type="submit" name="excluirconteudo" class="btn btn-success" value="Sim">Sim</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <?php endif; ?>

    <?php $urlBack = get_home_url() . "/timeline"?>
    <script type="text/javascript">
        history.pushState(null, null, '<?php echo $_SERVER["REQUEST_URI"]; ?>');
        window.addEventListener('popstate', function(event) {
            var urlBack = <?php echo "'" . $urlBack . "'";?>;
            window.location.assign(urlBack);
        });

    </script>

    <?php get_footer(); ?>
