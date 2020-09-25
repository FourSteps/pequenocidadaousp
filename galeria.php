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
          <li>Galeria</li>
        </ul>
      </div>
    </div>
    <!-- //short-->
    <!--Gallery-->
    <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3">

      <?php
        $pastas = scandir('images/galeria');
        $n=1;
        foreach($pastas as $pasta){
          if($pasta != '.' && $pasta != '..'){
            // Aqui vamos rodar uma vez para cada item das pastas, vamos pegar as fotos dela!
            
            // ABRE A GALERIA COM OS DADOS INICIAIS E O TÍTULO
            $directory = "images/galeria/".$pasta;
            $images = glob($directory . "/*.jpg");
            echo '<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
                    <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">'.$pasta.'</h3>
                      <div class="row gallery-info">';


            // FOR DAS IMAGENS DA GALERIA
            foreach($images as $image){
              //echo $image;
              echo '<div class="col-lg-3 col-md-3 col-sm-3 gallery-img-grid mt-lg-3 mt-3">
                      <div class="gallery-grids">
                        <a href="#gal'.$n.'"><img src="'.$image.'" alt="'.$pasta.'" class="img-fluid"></a>
                      </div>
                    </div>';

              echo '<div id="gal'.$n.'" class="popup-effect">
                      <div class="popup">
                        <img src="'.$image.'" alt="'.$pasta.'" class="img-fluid" />
                        <a class="close" href="#gallery">&times;</a>
                      </div>
                    </div>';
              $n++;
            }
            echo '</div></div>';
          }
        }
      ?>
      
    </section>
    <!--//Gallery-->
<?php
  require 'requires/footer.htm';
?>