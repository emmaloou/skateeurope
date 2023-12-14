<!-- donc ici c'est ma page pour presenter le spot francais du palais de tokyo -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SkateEurope">
    <meta name="author" content="Paul Villaret">
    <!-- ici le titre de ma page qui sera affiché en haut au navigateur -->
    <title>Skate Europe</title>
    <!-- mon lien Bootstrap alternative au css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
   
  </head>
  <body style='background-color: #ffff'>
    <!-- debut du HEADER -->
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
                <li><a href="allemagne.php"><h3>KulturForum &nbsp;&nbsp;|</h3></a></li>
                <li><a href="espagne.php"><h3>Macba</h3></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- fin du HEADER -->
    
      <div class="container">
          <div class="row bottom-space">
            <div class="span12">
              <div class="page-header">
                <!-- je saute 3 espace j'ecrit "¨Palais de tokyo" en h1 et en plus petit j'ecrit "france" que je met en rouge en css -->
                <br><br><br><h1>Palais de Tokyo<small style="color:red;"> France</small></h1>
              </div>
            </div>
            <div class="row">
            <div class="span12 offset1">
              <!-- la je met mon image  panorama -->
              <img src="img/f_pano.png" class="thumbnail product-snap" width="1000">            
            </div>
            </div>
          </div>
          <div class="row">
            <div class="span10 offset1" style="text-align:justify;">
            <!-- ici mon texte pour presenter le palais de tokyo--> 
              <p><br>
              Le palais de Tokyo, dont le nom originel est palais des Musées d'art moderne, désigne un bâtiment consacré à l'art moderne et contemporain. Il est situé au 13, avenue du Président-Wilson dans le 16e arrondissement de Paris, en suivant les quais de Seine à quelques centaines de mètres du palais de Chaillot, dans un style architectural qui lui est proche. L'enveloppe externe du bâtiment est totalement revêtue de marbre.<br>
              Le palais de Tokyo est, avec le palais de Chaillot et le palais d’Iéna, l'un des trois édifices permanents résultant de l'Exposition internationale de 1937 et destiné, selon le projet de 1934, à remplacer le musée du Luxembourg.<br><br>
              Un arrêté municipal du 14 mai 1997 a attribué le nom de place de Tokyo à une aire de stationnement située devant l’entrée du palais, avenue du Président-Wilson, face au palais Galliera, musée de la Mode de la ville de Paris et entre la rue Maria-Brignole et la rue de Galliera qui enserrent le palais Galliera.
              La surface d'exposition est l'une des plus grandes pour l'art contemporain sur la scène internationale.
              Ce site est desservi par les stations de métro Alma - Marceau et Iéna.<br><br>
              Le palais de Tokyo, du fait de sa vaste esplanade et de ses marches en marbre, est un haut lieu du skateboard parisien. Surnommé le « Dôme », il est considéré comme un spot mythique. Nombreux sont les skateurs de haut niveau à s'y être essayé, comme Flo Marfaing (et), Lucas Puig ou Eniz Fazliov.
              Le palais de Tokyo apparaît dans le clip du morceau You du DJ Étienne de Crécy, ainsi que dans le clip du morceau Monsieur Sable des rappeurs Nekfeu et Alpha Wann du groupe de rap 1995. Il sert également de toile de fond au film The Smell of Us (2014) de Larry Clark, qui suit un groupe de skaters passant une grande partie de leur temps sur les terrasses, dans les escaliers et autour des bassins qui se trouvent à l'arrière du palais.
            </div>
          </div><br>
          <!-- ici j'affiche mon image selectionner pour paris sur pearltrees-->
          <iframe src="https://www.pearltrees.com/paulmmv/paris/id63347682?embed=2&d=202302112354" width="1200" height="310" style="border:2px solid red;" allowtransparency="true"></iframe>
          
            <!-- mon premier sous titre pour srtucutrer ma page en h3-->
          <h3>CARACTÉRISTIQUES:</h3>
              <div class="container">
                <div class="row">
                  <div class="span10 offset1" style="text-align:justify;"></div>
                  <table class="table table-bordered">
                    <!-- je fais mon tableau en html que presente en profondeur le lieu-->  
                    <tr>
                      <th>Adresse</th>
                      <td>13 avenue du Président-Wilson, 75016 Paris, France</td>
                    </tr>
                    <tr>
                      <th>Coordonnées GPS</th>
                      <td>48,86384° N,2,29721° E</td>
                    </tr>
                    <tr>
                      <th>Musée</th>
                      <td>Musée d'Art Moderne & Centre d'Art Contemporain</td>
                    </tr>
                    <tr>
                      <th>Date de construction</th>
                      <td>1932</td>
                    </tr>
                    <tr>
                      <th>Architectes</th>
                      <td>Jean-Claude Dondel, André Aubert, Paul Viard et Marcel Dastugue</td>
                    </tr>
                    <tr>
                      <th>Architecture</th>
                      <td>Art Déco</td>
                    </tr>
                  </table>
                </div>
                </div>
              <!-- 2eme sous titre pour presenter des video resumant l'ambiance du spot et les legendes qui on skater la bas-->  
          <h3>VIDÉOS:</h3> 
          <!-- donc je lie mes video en strucutant format ( width="560" height="315) et le moment auquelle je veux quelle démarre (start=...) -->   
          <iframe width="560" height="315" src="https://www.youtube.com/embed/F0Gno6ob-Y0?controls=0&amp;start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/oNT6PvtDASM?controls=0&amp;start=57" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <h3>PLAN:</h3> 
          <!-- j'ai trouver interessant de mettre un lien google map qui affiche le lieu pour connaitre son emplacement precisement -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1312.3428151496319!2d2.2959970083251173!3d48.864204809302834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fe6f937420b%3A0xc92ed17a5e1ca31d!2sPalais%20de%20Tokyo!5e0!3m2!1sfr!2sfr!4v1676154697358!5m2!1sfr!2sfr" width="1130" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
            <!-- ici le dernier sous titre de ma page pour en savoir plus-->
          <h3>VOIR PLUS:</h3> 
          <div class="row">
            <div class="span10 offset1">
              <!-- je fais attention a ce que les 3 sites s'ouvrent sur une autre page avec le "target" -->
              <div class="span3">
                <!-- le site officiel -->
                <a style="border: 2px solid red;" class="btn btn-large btn-block" target="_blank" href="https://palaisdetokyo.com">Site Officiel</a>
              </div>
              <div class="span3">
                <!-- le wiki -->
                <a style="border: 2px solid red;" class="btn btn-large btn-block" target="_blank" href="https://fr.wikipedia.org/wiki/Palais_de_Tokyo">Wikipédia</a>
              </div>
              <div class="span3">
                <!-- et la un site pour centre sur l'aspect skate du lieu -->
                <a style="border: 2px solid red;" class="btn btn-large btn-block" target="_blank" href="https://skateparkadvisor.com/palais-de-tokyo-skate-paris">SkateParkAdvisor</a>
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
