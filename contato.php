<?php
  require 'requires/header.htm';
?>
    <!-- short -->
    <div class="using-border py-3">
      <div class="inner_breadcrumb  ml-4">
        <ul class="short_ls">
          <li>
            <a href="index.php">Home</a>
            <span> / </span>
          </li>
          <li>Contato</li>
        </ul>
      </div>
    </div>
    <!-- //short-->
    <!--contact -->
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Entre em contato</h3>
        <div class="address_mail_footer_grids">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3699.2247033551685!2d-47.900806484434234!3d-22.002699611767643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b870c966074a71%3A0xab4d0b9ef89dad35!2sAv.%20Trab.%20S%C3%A3o%20Carlense%2C%20400%20-%20Parque%20Arnold%20Schimidt%2C%20S%C3%A3o%20Carlos%20-%20SP%2C%2013564-002!5e0!3m2!1spt-BR!2sbr!4v1601037533523!5m2!1spt-BR!2sbr"></iframe>
        </div>
        <div class="row w3pvt-info-para pt-lg-5 pt-md-4 pt-3">
          <!--contact-map -->
          <div class="col-lg-6 col-md-6">
            <form action="#" method="post">
              <div class="w3pvt-wls-contact-mid">
                <div class="form-group contact-forms">
                  <input type="text" class="form-control" placeholder="Nome" required="">
                </div>
                <div class="form-group contact-forms">
                  <input type="email" class="form-control" placeholder="E-mail" required="">
                </div>
                <div class="form-group contact-forms">
                  <input type="text" class="form-control" placeholder="Telefone" required=""> 
                </div>
                <div class="form-group contact-forms">
                  <textarea class="form-control" placeholder="Mensagem" rows="3" required=""></textarea>
                </div>
                <button type="submit" class="btn sent-butnn">Enviar</button>
              </div>
            </form>
          </div>
          <!--//contact-map -->
          <!--contact-form-->
          <div class="col-lg-6 col-md-6 contact-form">
            <div class="contact-list-grid">
              <h4>Endereço</h4>
              <p class="pt-2">Av. Trabalhador São Carlense, 400 – Caixa Postal 440</p>
              <p>CEP 13566-590 – São Carlos/SP</p>
            </div>
            <div class="contact-list-grid mt-3">
              <h4>E-mail</h4>
              <p class="pt-2"><a href="mailto:pcidadao@sc.usp.br">pcidadao@sc.usp.br</a> 
              </p>
            </div>
            <div class="contact-list-grid mt-3">
              <h4>Telefones</h4>
              <p class="pt-2">+55 (16) 3373-9105</p>
              <p>+55 (16) 3373-8294</p>
            </div>
            <div class="contact-list-grid mt-3">
              <h4>Siga nas redes!</h4>
              <p class="pt-2">
                <a target="_blank" href="https://www.facebook.com/profile.php?id=100009499227880"><span class="fa fa-facebook" style="font-size: xx-large;"></span></a>&nbsp;&nbsp;
                <a target="_blank" href="https://instagram.com/biblioteca.ottaviano.fiore?igshid=5j6dkx97x0xw"><span class="fa fa-instagram" style="font-size: xx-large;"></span></a>&nbsp;&nbsp;
                <a target="_blank" href="https://www.youtube.com/channel/UCCY8AvGNmta_jTok6KM38fg"><span class="fa fa-youtube" style="font-size: xx-large;"></span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--//contact  -->
    <!-- footer -->
<?php
  require 'requires/footer.htm';
?>