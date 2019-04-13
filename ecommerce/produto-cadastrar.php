<?php include("php/header.php"); ?>
	
<script>
  $(function () {
    $('.carousel').carousel()
  });
</script>
<style>
  .content{
    padding: 20px;
    background-color: #fcfcfc;
  }
  .texto-categoria{
    font-size: 18px;
  }
</style>
<div class="container-fluid content">
  <div class="row">
    <div class="col-md-6">
      <h1>Cadastrar Produto</h1>
      <form action="produto-adicionar.php" method="post">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Produto">
        </div>
        <div class="form-group">
          <label for="marca">Marca</label>
          <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca Produto">
        </div>
        <div class="form-group">
          <label for="preco_original">Preço Original</label>
          <input type="text" class="form-control" id="preco_original" name="preco_original" placeholder="Preço Original">
        </div>
        <div class="form-group">
          <label for="preco_desconto">Preço Desconto</label>
          <input type="text" class="form-control" id="preco_desconto" name="preco_desconto" placeholder="Preço Desconto">
        </div>
        <div class="categoria">
          <h2>Categoria</h2>
          <!-- Inicio da Categoria Pai -->
          <div class="categoria-pai">
            <p class="texto-categoria">Categoria Pai</p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="arvore_categoria_pai" id="arvore_categoria_pai1" value="option1">
              <label class="form-check-label" for="arvore_categoria_pai1">
                Masculino
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="arvore_categoria_pai" id="arvore_categoria_pai2" value="option2">
              <label class="form-check-label" for="arvore_categoria_pai2">
                Feminino
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="arvore_categoria_pai" id="arvore_categoria_pai3" value="option3">
              <label class="form-check-label" for="arvore_categoria_pai3">
                Unissex
              </label>
            </div>
          </div>
          <!-- Fim da Categoria Pai -->
          <!-- Começo da Categoria Filho -->
          <div class="categoria-filho">
            <p class="texto-categoria">Categoria Filho</p>
            <div class="categoria-filho-1">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="arvore_categoria_filho" id="arvore_categoria_filho1" value="masculino">
                <label class="form-check-label" for="arvore_categoria_filho1">
                  Masculino
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="arvore_categoria_filho" id="arvore_categoria_filho2" value="feminino">
                <label class="form-check-label" for="arvore_categoria_filho2">
                  Feminino
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="arvore_categoria_filho" id="arvore_categoria_filho3" value="unissex">
                <label class="form-check-label" for="arvore_categoria_filho3">
                  Unissex
                </label>
              </div>
            </div>
          </div>
          <!-- Fim da Categoria Filho -->
        </div>
        <div class="form-group">
          <label for="preco_desconto_produto">Quantidade</label>
          <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
  </div>
</div>
<?php include("php/footer.php"); ?>
