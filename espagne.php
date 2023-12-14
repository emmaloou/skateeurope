<!-- donc la c'est le code pour ma page sur le spot du macba en espagne -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SkateEurope">
    <meta name="author" content="Paul Villaret">
    <!-- ici le titre de ma page qui sera affiché en haut au navigateur -->
    <title>Skate Europe</title>
    <!-- mon lien Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
  </head>
  <!-- la couleur de mon fond -->
  <body style='background-color: #ffff'>
    <!-- debut du HEADER -->
    <header style="background-color: #000;">
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
          <ul class="nav pull-left">
            <!-- ici c'est pour relié ma page avec mon index -->
                <li><a href="index.php" class="brand brand-bootbus"><img src="img/Seurope70.png" width="50" class="thumbnail"></a></li>
                <li><a href="index.php" class="brand brand-bootbus"><h1>Skate Europe</h1></a></li>
                </ul>
              <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <!-- pareille mais la je le relie avec les 2 autres pages de presentation-->
                <li><a href="france.php"><h3>Palais de Tokyo &nbsp;&nbsp;|</h3></a></li>
                <li><a href="allemagne.php"><h3>KulturForum</h3></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- fin de mon HEADER -->
    
      <div class="container">
          <div class="row bottom-space">
            <div class="span12">
              <div class="page-header">
                <!-- la je saute 3 espace et je met en titre h1 "macba" et en plus petit "espagne" que je met en rouge en css   -->
                <br><br><br><h1>Macba<small style="color:red;"> Espagne</small></h1>
              </div>
            </div>
            <div class="row">
            <div class="span12 offset1">
              <!-- je met l'image e_pano (espagne panorama) en-->
              <img src="img/e_pano.png"  width="1000">            
            </div>
            </div>
          </div>
          <div class="row">
            <div class="span10 offset1" style="text-align:justify;">
            <!-- ici j'ecrit mon texte en taille normal pour présenter macba -->
              <p><br>
                Le Musée d'art contemporain de Barcelone (Museu d'Art Contemporani de Barcelona), ou MACBA, est un musée consacré principalement à l'exposition d'œuvres réalisées pendant la seconde moitié du xxe siècle. 
                <br><br>Il se trouve dans le quartier d'El Raval de la capitale catalane, très proche du Centre de culture contemporaine de Barcelone (CCCB). Bartomeu Marí est l'actuel directeur.
                L'idée de créer à Barcelone un musée d'art contemporain est due à l'historien et critique d'art Alexandre Cirici-Pellicer qui, en 1959, a commencé à réunir une collection. 
                <br><br>Cirici-Pellicer a bénéficié de l'aide d'autres amateurs d'art qui ont contribué à accroître cette collection, présentée lors de différentes expositions itinérantes avec également des œuvres d'artistes de cette période; cependant, en 1963, l'exposition El arte y la paz aux accents antifranquistes évidents sonne le glas de l'idée de Cirici-Pellicer. 
                La collection est alors déposée dans le Musée Víctor Balaguer.
                <br><br>L'idée est reprise en 1985, avec la création, par la municipalité de Barcelone et la Generalitat de Catalunya d'un consortium et la décision d'installer un nouveau musée dans l'ancienne Maison de la Charité. L'idée est à nouveau en sommeil jusqu'en 1986, quand le maire de Barcelone, Pasqual Maragall, propose la construction d'un nouvel édifice afin d'abriter le siège du nouveau musée. En 1987, est constituée la Fundació privada Museu d'Art Contemporani, qui a été réunie au consortium formé par les deux administrations publiques.
                <br>Construit de 1987 à 1995, le MACBA a ouvert ses portes le 28 novembre 1995.
              </div>
          </div><br>
           <!-- ici j'ai choisie un selection de photo de macba sur pearltrees que j'ai join a ma page  -->
          <iframe src="https://www.pearltrees.com/paulmmv/barcelone/id63348773?embed=2&d=20230212113" width="1200" height="310" style="border:2px solid red;" allowtransparency="true"></iframe>
           <!-- j'ecrit ce sous tire en h3 pour structurer ma page -->
            <h3>CARACTÉRISTIQUES:</h3>
              <div class="container">
                <div class="row">
                  <div class="span4 offset1" style="text-align:justify;"></div>
                   <!-- ici je fais mon tableau en html comme la consigne du projet le demande -->y
                    <!-- le tableau présente alors histoir , emplacement ect du lieu -->
                  <table class="table table-bordered">
                    <tr>
                      <th>Adresse</th>
                      <td>1 Plaça dels Àngels, 08001 Barcelona, España</td>
                    </tr>
                    <tr>
                      <th>Coordonnées GPS</th>
                      <td>41,38302° N, 2,16747° E</td>
                    </tr>
                    <tr>
                      <th>Musée</th>
                      <td>Musée d'Art Contemporain</td>
                    </tr>
                    <tr>
                      <th>Dates de construction</th>
                      <td>Entre 1987 et 1995</td>
                    </tr>
                    <tr>
                      <th>Architecte</th>
                      <td>Richard Meier</td>
                    </tr>
                    <tr>
                      <th>Architecture</th>
                      <td>Rationalisme, inspiré par Le Corbusier</td>
                    </tr>
                  </table>
                </div>
                </div>
               <!-- un nouveau sous titre en h3 pur structurer -->
          <h3>VIDÉOS:</h3> 
           <!-- donc la j'ai selectionné deux video qui resume bien l'ambiance du spot et les legend qui y sont passer -->
            <!-- donc je lie mes video en strucutant format ( width="560" height="315) et le moment auquelle je veux quelle démarre (start=...) -->  
          <iframe width="560" height="315" src="https://www.youtube.com/embed/bDiblF9BDaU?controls=0&amp;start=17" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OfRdB9451fE?controls=0&amp;start=45" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
           <!-- encore un sous titre -->
          <h3>PLAN:</h3> 
           <!-- j'ai trouver interessant de mettre un lien google map qui affiche le lieu pour connaitre son emplacement precisement -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.5956563999744!2d2.165555165674098!3d41.38286885423779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f5ac8c5ed1%3A0x8efd28fd5e2c7b2a!2sMus%C3%A9e%20d&#39;art%20contemporain%20de%20Barcelone!5e0!3m2!1sfr!2sfr!4v1676161240793!5m2!1sfr!2sfr" width="1130" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
            <!-- donc ici mon dernier sous titre -->
          <h3>VOIR PLUS:</h3> 
          <div class="row">
            <div class="span10 offset1">
              <div class="span3">
                <!-- le site officiel du musée macba -->
                <a style="border: 2px solid red;" class="btn btn-large btn-block" target="_blank" href="https://www.macba.cat/">Site Officiel</a>
              </div>
              <div class="span3">
                <!-- son wiki -->
                <a style="border: 2px solid red;" class="btn btn-large btn-block" target="_blank" href="https://fr.wikipedia.org/wiki/Mus%C3%A9e_d%27Art_contemporain_de_Barcelone">Wikipédia</a>
              </div>
              <div class="span3">
                <!-- le site officiel du macbalife pour le skate -->
                <a style="border: 2px solid red;" class="btn btn-large btn-block" target="_blank" href="https://www.macbalife.com/">#MACBALIFE</a>
              </div>            
            </div>
          </div>
      </div>
    </div>
  </div><br><br>
</body>
<!-- debut du FOOTER ou j'inclu mon footer php(la meme pour toute pages-->
<?php

    include "footer.php";
    ?>

  <!-- fin du FOOTER  en php-->
</html>
