<article class="row">
<div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <h2>Contato<?=@$contato[0]["title"];?></h2>

      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" role="form" method="post" action="sucesso.php">

          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">        
              <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">        
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
            </div>
          </div>

          <div class="form-group">
            <label for="subject" class="col-sm-2 control-label">Assunto</label>
            <div class="col-sm-10">        
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto">
            </div>
          </div>

          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Mensagem</label>
            <div class="col-sm-10">        
              <textarea class="form-control" id="message" name="message" placeholder="Mensagem"></textarea>
            </div>
          </div>      

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
     <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.173107912138!2d-43.85356758508634!3d-19.874910986634582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69cb916e46277%3A0x46574d8590f9f002!2sR.%20Ita%C3%BAna%2C%20601%20-%20Itacolomi%2C%20Sabar%C3%A1%20-%20MG%2C%2034580-100!5e0!3m2!1spt-BR!2sbr!4v1628360776215!5m2!1spt-BR!2sbr" width="1400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>
    </div>
  </article>
 