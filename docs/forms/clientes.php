<?php 
?>
  <div class="container form-responsive">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Gerenciamento</a></li>
      <li class="breadcrumb-item"><a href="#">Clientes</a></li>
    </ol>
    <div class="card text-muted modal-primary mb-3" style="max-width: 60rem;">

      <div class="card-header alert-info">
        <div class="card-image">
          <h5>    <!-- <img src="img/clientes.png" alt="Alterar imagem" class="img-circle" width="10%">-->
          Cadastro Clientes </h5>
        </div>
      </div>

      <div class="card-body form-responsive">
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Nome: </label>
            <input class="form-control" type="text" placeholder="DIVISAGUA - Empresa individualizadora de água">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">e-mail: </label>
            <input class="form-control" type="text" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Endereço:</label>
            <input class="form-control" type="text" placeholder="">
          </div>
        </form>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 60rem;" align="center">
      <div class="card-body"> 
        <a href="clientes/add" title="Incluir" tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-trigger="focus" data-content="Detalhar">Incluir</a> 
        <a href="clientes/atl" title="Alterar" tabindex="1" class="btn btn-success " role="button" data-toggle="popover" data-trigger="focus" data-content="Detalhar">Alterar</a> 
        <a href="clientes/del" title="Excluir" tabindex="2" class="btn btn-danger disabled" role="button" data-toggle="popover" data-trigger="focus" data-content="Detalhar">Excluir</a> 
      </div>
    </div>
    <div class="card text-muted modal-body mb-3" style="max-width: 60rem;">
      <div class="text-muted">315 usuários vinculados</div>
    </div>
    <div class="card text-muted modal-body mb-3" style="max-width: 60rem;">
      <div class="text-muted">Atualizado 11:59 PM</div>
    </div>
</div>

<?php
?>