<style>
    html, body { height: 100%; }

    .top{
        padding-top: 5em;
    }
</style>

<div class="ui one column stackable center aligned page grid top">
    <div class="column twelve wide">
        <?php echo form_open('pessoa/inserir', 'id="form-usuario"', 'class="ui large form"'); ?>

        <div class="ui input">
            <div class="ui top attached label" >
                Nome
            </div>    
            <input type="text" name="nome" placeholder= "Nome"> 
        </div>

        <div class="ui input">
            <div class="ui top attached label">
                Sobrenome
            </div>
            <input type="text" name="sobrenome" class="form-control" placeholder= "Sobrenome" required> 
        </div>
        <br>
        <br>        
        <button type="submit" class="ui primary button"><i class="add user icon"></i> Cadastrar </button>
    </div>
</div>

<?php echo form_close(); ?>

<h3>Lista de Pessoa Cadastradas</h3>
<table class="ui celled table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Função</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($pessoas as $p): ?>
            <tr>
                <td><?php echo $p->nome ?></td>
                <td><?php echo $p->sobrenome ?></td>
                <td><a title="Deletar" href="<?php echo base_url() . 'pessoa/excluir/' . $p->id; ?>">Deletar</a></td>
            </tr>
            <?php
        endforeach;


        