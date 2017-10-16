<div>
    <div class="container">

        <div class="row" style="padding-top:18px;">
            <div class="col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0">
                <?php echo form_open('pessoa/inserir', 'id="form-usuario"', 'class="ui large form"'); ?>
                <fieldset>
                    <legend><strong>Cadastro de Pessoas</strong></legend>
                </fieldset>
                <label>Nome </label>
                <input class="form-control" type="text" name="nome" required="" placeholder="nome" maxlength="20" minlength="1">
                <label style="margin-top:6px;">Sobrenome </label>
                <input class="form-control" type="text" name="sobrenome" required="" placeholder="sobrenome" maxlength="20" minlength="1">
                <button class="btn btn-success btn-block" type="submit" style="margin-top:10px;">Salvar </button>
                <button class="btn btn-danger btn-block" type="reset">Cancelar </button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div class="row" style="margin-top:20px;">
            <div class="col-md-12">
                <fieldset>
                    <legend><strong>Lista de Pessoas</strong></legend>
                </fieldset>
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Nome </th>
                                <th>Sobrenome </th>
                                <th>Funções </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pessoas as $p): ?>
                                <tr>
                                    <td><?php echo $p->nome ?></td>
                                    <td><?php echo $p->sobrenome ?></td>
                                    <td><a class="btn btn-danger btn-sm" role="button" href="<?php echo base_url() . 'pessoa/excluir/' . $p->id; ?>">Excluir </a></td>
                                    <td><a class="btn btn-danger btn-sm" role="button" href="<?php echo base_url() . 'pessoa/editar_pessoas/' . $p->id; ?>">Editar </a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>