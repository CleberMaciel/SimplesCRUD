<div>
    <div class="container">

        <div class="row" style="padding-top:18px;">
            <div class="col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0">
                <?php echo form_open('pessoa/atualizar_pessoa', 'id="form-usuario"', 'class="ui large form"'); ?>
                <fieldset>
                    <legend><strong>Editar Pessoa</strong></legend>
                </fieldset>
                <input type="hidden" id="id" name="id" value="<?php echo $pessoa_editar[0]->id; ?>"/>
                <label>Nome </label>
                <input class="form-control" type="text" name="nome" required="" placeholder="nome" maxlength="20" minlength="1" value="<?php echo $pessoa_editar[0]->nome; ?>">
                <label style="margin-top:6px;">Sobrenome </label>
                <input class="form-control" type="text" name="sobrenome" required="" placeholder="sobrenome" maxlength="20" minlength="1" value="<?php echo $pessoa_editar[0]->sobrenome; ?>">
                <button class="btn btn-success btn-block" type="submit" style="margin-top:10px;">Salvar </button>
                <button class="btn btn-danger btn-block" href="<?php echo base_url();?>">Cancelar </button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
