<!-- donc ici c'est ma page sur le spot en allemangne -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SkateEurope">
    <meta name="author" content="Paul Villaret">
    <!-- mon titre qui s'affiche en haut du navigateur -->
    <title>Skate Europe</title>
    <!-- mon lien Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
  </head>
  <body style='background-color: #ffff'>
    <!-- debut de mon HEADER -->
    <header style="background-color: #000;">
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
          <ul class="nav pull-left">
            <!-- je relie ma page avec mon index  -->
                <li><a href="index.php" class="brand brand-bootbus"><img src="img/Seurope70.png" width="50" class="thumbnail"></a></li>
                <li><a href="index.php" class="brand brand-bootbus"><h1>Skate Europe</h1></a></li>
                </ul>
              <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <!-- pareil mais pour mes 2 autres pages -->
                <li><a href="france.php"><h3>Palais de Tokyo &nbsp;&nbsp;|</h3></a></li>
                <li><a href="espagne.php"><h3>Macba</h3></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--fin du HEADER -->
   
      <div class="container">
          <div class="row bottom-space">
            <div class="span12">
              <div class="page-header">
                <!-- je saute 3 espace j'ecrit "kuturforum" en h1 et en plus petit j'ecrit "allemagne" que je met en rouge en css -->
                <br><br><br><h1>KULTURFORUM<small style="color:red;"> Allemagne</small></h1>
              </div>
            </div>
            <div class="row">
            <div class="span12 offset1">
              <!-- la je met mon image  panorama -->
              <img src="img/a_pano.jpg"  width="1000">            
            </div>
            </div>
          </div>
          <div class="row">
            <div class="span10 offset1" style="text-align:justify;">
            <!-- ici mon texte pour presenter le kulturforum-->           

              <p><br>
                Le Kulturforum est un ensemble d'édifices culturels situé à Berlin-Tiergarten, en Allemagne. Il a été construit dans les années 1950 et 60 à la limite du Mur, pour remplacer les bâtiments dont ce dernier privait Berlin-Ouest. Le forum culturel se caractérise par son architecture moderne novatrice, plusieurs édifices se distinguent par les dessins organiques de Hans Scharoun ou la Neue Nationalgalerie conçue par Mies van der Rohe.
                Dans la continuité de l'idée de Scharoun, Rolf Gutbrod (de) est chargé, en 1968, de la construction de plusieurs bâtiments prévus pour accueillir des musées sur le Kulturforum. Il érige le musée des Arts décoratifs (Kunstgewerbemuseum, à droite de l'entrée du complexe muséal) qui fait l'objet de très vives critiques en raison de ses proportions massives et de l'organisation peu fluide de ses espaces intérieurs.<br><br> 
                En 1988, les architectes Hilmer et Sattler poursuivent la construction du Kulturforum. Ils cherchent à intégrer en un ensemble harmonieux les édifices existants tout en concevant un nouveau musée, la galerie de Peinture (Gemäldegalerie), qui est achevée en 1998. Outre ces deux musées, le complexe muséal du Kulturforum héberge à présent aussi la bibliothèque d'Art (Kunstbibliothek) et le Cabinet des estampes (Kupferstichkabinett).
               Le Kulturforum fut conçu de manière à devenir le centre culturel de Berlin-Ouest, constituant ainsi un pendant à l'île aux Musées, qui se trouve dans Berlin-Est. Non loin à l'ouest de l'immense Potsdamer Platz, il est aujourd'hui situé au cœur de la capitale réunifiée.<br><br>
               Comme parler du Kulturforum sans évoquer le nom deux frères Kummer. Deux Skateurs remplis de talent originaire de la ville de Berlin. Hyun Kummer le cadet, plus connu sous le nom de « @Versace_plug » sur les réseaux, aujourd’hui reconnus par tous les plus grands dans le monde du skate. Transformant le ville de Berlin comme la destination de rêve des patineurs du monde entier.</p>        
            </div>
          </div><br>
          <!-- ici j'affiche mon image selectionner pour berlin sur pearltrees-->  
          <iframe src="https://www.pearltrees.com/paulmmv/berlin/id63346984?embed=2&d=202302112314" width="1200" height="310" style="border: 2px solid red;" allowtransparency="true"></iframe>
          <!-- mon premier sous titre pour srtucutrer ma page en h3-->  
          <h3>CARACTÉRISTIQUES:</h3>
              <div class="container">
                <div class="row">
                  <div class="span4 offset1" style="text-align:justify;"></div>
                  <table class="table table-bordered">
                    <!-- je fais mon tableau en html que presente en profondeur le lieu-->  
                    <tr>
                      <th>Adresse</th>
                      <td>4 Matthäikirchplatz, 10785 Berlin, Allemagne</td>
                    </tr>
                    <tr>
                      <th>Coordonnées GPS</th>
                      <td>52,50894° N, 13,36731° E</td>
                    </tr>
                    <tr>
                      <th>Musée</th>
                      <td>Musée des Arts décoratifs</td>
                    </tr>
                    <tr>
                      <th>Date de construction</th>
                      <td>1968</td>
                    </tr>
                    <tr>
                      <th>Architecte</th>
                      <td>Mies van der Rohe</td>
                    </tr>
                    <tr>
                      <th>Architecture</th>
                      <td>Moderne novatrice</td>
                    </tr>
                  </table>
                </div>
                </div>
              <!-- 2eme sous titre pour presenter des video resumant l'ambiance du spot et les legendes qui on skater la bas-->  
          <h3>VIDÉOS:</h3> 
          <!-- donc je lie mes video en strucutant format ( width="560" height="315) et le moment auquelle je veux quelle démarre (start=...) -->  
          <!-- jetter un coup d'oeil au video elles sont vraiment folles-->  
          <iframe width="560" height="315" src="https://www.youtube.com/embed/m9y3vUkzNIc?start=196"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/bVMeQh_P2eU?controls=0&amp;start=11"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <h3>PLAN:</h3>
            <!-- j'ai trouvé interessant de mettre un lien google map qui affiche le lieu pour connaitre son emplacement exact -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1214.1746359581207!2d13.364823208349872!3d52.50901792744401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skulturforum%20berlin!5e0!3m2!1sfr!2sfr!4v1676131862808!5m2!1sfr!2sfr" width="1130" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
          <!-- ici le dernier sous titre de ma page pour en savoir plus-->
          <h3>VOIR PLUS:</h3> 
          <div class="row">
            <div class="span10 offset1">
              <div class="span3">
                <!-- je fais attention a ce que les 3 sites s'ouvrent sur une autre page avec le "target" -->
                <!-- site officel-->
                <a style="border: 2px solid red;" class="btn btn-large btn-block" target="_blank" href="https://www.smb.museum/en/museums-institutions/kulturforum/home/">Site Officiel</a>
              </div>
              <div class="span3">
                <!-- wiki -->
                <a style="border: 2px solid red;" class="btn btn-large btn-block" target="_blank" href="https://fr.wikipedia.org/wiki/Kulturforum">Wikipédia</a>
              </div>
              <div class="span3">
                <!-- site sur berlin-->
                <a style="border: 2px solid red;" class="btn btn-large btn-block" target="_blank" href="https://www.visitberlin.de/fr/kulturforum">VisitBerlin</a>
              </div>            
            </div>
          </div>
      </div>
    </div>
  </div><br><br>
</body>
<!-- debut du FOOTER que je lie avec le footer.php qui est le meme pour toutes les pages-->
<?php
  include "footer.php";
?>
<!--fin duFOOTER -->
</html>
