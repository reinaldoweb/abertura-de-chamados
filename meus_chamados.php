
<?php
require_once('header.php');

?>
    <div class="container">
      <div class="page-header">
        
      </div>

      <div class="jumbotron">
        <h1>Bem vindo ao sistema de Chamados</h1>
        <p class="lead">A fim de agilizar as solicitações de suporte e melhor atendê-lo, nós utilizamos um sistema de ticket de suporte.
         Cada pedido de apoio é atribuído um número de chamado único. Para sua referência, o sistema oferece um histórico 
         com todos os seus chamados de suporte e status do atendimento.</p>
        <p><a class="btn btn-lg btn-success" href="abrir_chamado.php" role="button">Abra seu chamado</a></p>
      </div>

      <div class="container">
        <div class="col-md-6">
          <article>
          <h4>Abrir novo chamado</h4>
          <p>Por favor, forneça o máximo de detalhes possível para que possamos ajudá-lo. 
            Para atualizar um chamado já enviado, faça o login..</p>
          <p><a class="btn btn-lg btn-success" href="abrir_chamado.php" role="button">Abra seu chamado</a></p>
            </article>
        </div>

        <div class="col-md-6">
          <article>
          <h4>Checar status do seu chamado</h4>
          <p>Nós fornecemos o histórico de todos os seus pedidos de suporte atuais e do passado com as respectivas respostas.</p>
          <p><a class="btn btn-lg btn-success" href="meus_chamados.php" role="button">Checar status de um chamado</a></p>
        </article>
        </div>
      </div>
<?php
      require_once('footer.php');
      ?>
