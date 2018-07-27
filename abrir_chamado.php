
<?php
require_once('header.php');

?>
     <div class="container">
                  <section id="servicos">
                     <div calss="page-header">
                   <h1> Abrir novo chamado</h1>
                  <p>Por favor complete o formulário abaixo para abrir um novo chamado.</p>

                </div> 

      <div class="row">
      <div class="col-md-8">

        <form method="psot" action ="cadastrar_chamado.php" id="form_ inclui" name="form_incluir">
          <div class="form-group">
    <label for="nome">Seu nome</label>
    <input type="text" class="form-control" id="nome_user" name="nome_user" placeholder="Seu nome" required autofocus>
  </div>
  <div class="form-group">
  <label for="unidade">Sua Unidade</label>
    <select name="unidade">
  <option value="a">A</option>
  <option value="b">B</option>
  <option value="c">C</option>
  <option value="d">D</option>
</select>
  </div>
  <div class="form-group">
  <label for="setor">Setor</label>
    <input type="text" class="form-control" id="setor_user" name="setor_user" placeholder="Setor" required>
  </div>

  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" id="num_telefone" nome="num_telefone" placeholder="Telefone" required>
  </div>

  <div class="form-group">
    <label for="telefone">Assunto</label>
    <input type="text" class="form-control" id="tit_assunto" nome="tit_assunto" placeholder="assunto">
  </div>
  <div class="form-group">
    <p>Coloque o máximo de informação que puder, assim poderemos encontrar a melhor solução para o problema. * </p>
    <label for="mensagem">Informe o problema</label>
    <p><textarea id="texto_mensagem" name="texto_mensagem" rows="10" cols="80">
    </textarea></p>

  </div>
  
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
</div>

<div class="col-md-4">
  <section>
    <h1>Meus Chamados</h1>
  </section>

</div>
</div>
</section>
      
    
      <?php
      require_once('footer.php');
      ?>
