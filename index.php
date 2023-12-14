<!--ici ma page index que va donc etre le premier apercu de ma page par l'utilisateur -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SkateEurope">
    <meta name="author" content="Paul Villaret">
    <title>SkateEurope</title>
    <!--mon lien Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Icone dans la barre du navigateur -->
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
  </head>
  <body><br><br>
    <!-- je lie  mon HEADER en php avec ma page html -->
    <?php
      include "header.php";
    ?>

    
   <br><br><br>
      <!-- debut du slider qui viens de mon template -->
      <div class="slider">
        <div class="container-fluid">
          <div id="heroSlider" class="carousel slide">
            <div class="carousel-inner">

            <!--mon 1er slide sur le spot de palais de tokyo -->
              <div class="active item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">

                      <h1>Palais de Tokyo</h1>
                      <p ><br>
                        Cette place située dans le 16e arrondissement de Paris est connue pour son gros ledge plus haut que la moyenne. 
                        En plus de ce ledge, il y a également une place skatable avec un long set de marches en 3-plat-3  et des curbs. 
                        Le sol roule bien, ce qui facilite la prise d’élan pour passer le 3-plat-3 qui est relativement long.
                        le spot de skate du Dôme est reconnaissable à son architecture unique et à son marbre idéal pour la pratique du skateboard. Si bien, que beaucoup considère le Palais de Tokyo comme un skatepark. <br>
                        Mais c’est avant tout un haut lieu du skateboard européen car la plaza comporte de nombreux modules non loin les uns des autres ce qui permet d’y réaliser une très bonne session et de filmer des lines incroyables.

                      </p>
                      <h3>
                        <a href="france.php" class="btn btn-display"style="border: 2px solid red;"></i> Voir plus</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="img/s_f.png" class="thumbnail" >
                    </div>
                  </div>                  
                </div>
              </div>
              <!--mon 2eme slide sur le spot du kutlturforum -->
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>KulturForum</h1>
                      <p><br>
                        Avec ses musées et ses salles de concert, le Berlin Kulturforum situé dans le quartier de Potsdamer Platz attire à la fois les passionnés d’art mais aussi les skateurs. 
                        Devenu un lieu de passage quasi obligé lors des tournées, la célèbre plaza avec son sol en granit lisse, ses curbs, ses marches, est un terrain de jeu idéal. <br>
                        Comme parler du Kulturforum sans évoquer le nom deux frères Kummer. Deux Skateurs remplis de talent originaire de la ville de Berlin. 
                        Hyun Kummer le cadet, plus connu sous le nom de « @Versace_plug » sur les réseaux, aujourd’hui reconnus par tous les plus grands dans le monde du skate. Transformant le ville de Berlin comme la destination de rêve des patineurs du monde entier.
                      </p>
                      <h3>
                        <a href="allemagne.php" class="btn btn-display"style="border: 2px solid red;"> Voir plus</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="img/s_a.png" class="thumbnail" >
                    </div>
                  </div>                  
                </div>
              </div>
              <!--mon 3eme slide sur le spot de macba -->
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>Macba</h1>
                      <p><br>
                        Considéré comme la Mecque du skate, 
                        le musée d’art contemporain de Barcelone est une large place avec une multitude de possibilités: curb, marche, gap, un vrai skatepark urbain! 
                        Si vous êtes en manque d’inspiration, allez faire un tour là-bas pour raviver la flamme de créativité en vous. <br>
                        Au vu de sa popularité, il ne serait pas étonnant que vous croisiez certains pros en train de filmer sur ce spot culte. 
                        C’est souvent en voyant  les tricks en live, que d’habitude nous voyons en vidéo, que l’on se rencontre du niveau des bonhommes. 
                        Posez-vous et admirez le spectacle!
                      </p>
                      <h3>
                        <a href="espagne.php" class="btn btn-display"style="border: 2px solid red;"> Voir plus</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="img/s_e.png" class="thumbnail" >
                    </div>
                  </div>                  
                </div>
              </div>              
            </div>

            <a class="left carousel-control" href="#heroSlider" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#heroSlider" data-slide="next">›</a>
          </div>
        </div>
      <!-- fin de mon slider -->

      <!-- le debut de mon introduction -->
      <div class="container">
            <div class="row">
              <div class="span10 offset1" style="text-align:justify;border: 2px solid red; padding-left: 20px;">
              <!--j'ai mis un lien de mon api meteo pour voir en temps reel la meteo sur chaque spots -->
                  <div class="page-header"><h3>API Météo <a href="meteo.php" class="btn btn-display" style="border: 2px solid red;"> En savoir plus</a></h3>
                    <p>Voir en temps réel la météo de tes spots préférés.</p>
                  </div>
                  <!--problematique d'accroche -->
                  <h3>Où pratiquer le skate ?</h3>
                  <!--texte court pour introduir -->
                  <p>
                    Le skateboard peut se pratiquer partout. Initialement, il est né dans la rue et dans les piscines vides de Californie mais au fil des décennies, de<br> 
                    nombreuses sous-pratiques sont apparues. Tant et si bien qu’aujourd’hui, un bon skateur de rampe peut être mauvais en street et un pratiquant de <br>
                    skatepark ne saura pas forcément faire de figures complexes en flat !
                  </p>
              </div>
            </div>
          </div>
      <br>
      <!--fin de mon Introduction -->

      <!--debut de mes Widgets -->
        <div class="container">
          <div class="page-header">
            <hr class="border border-dark border-3">
            <!--le titre de mes 3 widgets -->
            <h1>Les 3 meilleurs lieux pour skater en Europe:</h1>
          </div>
        </div>

        <!--le premier sur le palais de tokyo-->
        <div class="container">
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/m_f.png" width="850px">
                  <div class="caption">
                    <h3>Palais de Tokyo</h3>
                    <p>
                      Le spot de skate du Dôme est reconnaissable à son architecture unique et à son marbre idéal pour la pratique du skateboard. 
                      Si bien, que beaucoup considère le Palais de Tokyo comme un skatepark. 
                      Mais c’est avant tout un haut lieu du skateboard européen car la plaza comporte de nombreux modules non loin les uns des autres ce qui permet d’y réaliser une très bonne session et de filmer des lines incroyables.

                    </p>
                  </div>
                  <div class="widget-footer" style="background-image:url(img/w_f.png);padding:20px">
                    <p>
                      <a href="france.php" class="btn btn-display"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                      </svg> &nbsp;Lire plus</a>
                    </p>
                  </div>
                </div>
              </li>
              <!--le deuxieme sur le kulturforum-->
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/m_a.png" width="850px">
                  <div class="caption">
                    <h3>KulturForum</h3>
                    <p>
                      Comme parler du Kulturforum sans évoquer le nom deux frères Kummer. Deux Skateurs remplis de talent originaire de la ville de Berlin. 
                      <br>Hyun Kummer le cadet, plus connu sous le nom de « @Versace_plug » sur les réseaux, aujourd’hui reconnus par tous les plus grands dans le monde du skate. 
                      <br>Transformant le ville de Berlin comme la destination de rêve des patineurs du monde entier.
                    </p>
                  </div>
                  <div class="widget-footer"style="background-image:url(img/w_a.png);padding:20px">
                    <p>                      
                      <a href="allemagne.php" class="btn btn-display"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                      </svg> &nbsp;Lire plus</a>
                    </p>
                  </div>
                </div>
              </li>
              <!--et enfin le dernier sur macba-->
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/m_e.png" width="850px">
                  <div class="caption">
                    <h3>Macba</h3>
                    <p>
                      Le Spot de Macba est le meilleur endroit au monde pour skater et traîner avec ses potes. Tout peut se passer à MACBA.
                      Fondée en 2016 la marque Macba life était à l’origine un compte instagram qui relayait les sessions de skate du spot légendaire Macba en Espagne.
                      Aujourd’hui avec des centaines de milliers d'abonnés sur les réseaux sociaux Macba Life est devenu une véritable institution du skateboard Européen. 
                    </p>
                  </div>
                  <div class="widget-footer" style="background-image:url(img/w_e.png);padding:20px">
                    <p>
                      <a href="espagne.php" class="btn btn-display"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                      </svg> &nbsp;Lire plus</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
      <!-- fin de mes Widgets -->
    </div><br><br>
  </body>
  
    <!-- je lie ma page html avec mon FOOTER php  -->
    <?php
    include "footer.php";
    ?>

</html>
