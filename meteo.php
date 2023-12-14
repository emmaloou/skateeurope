<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SkateEurope">
    <meta name="author" content="Paul Villaret">
    <title>SkateEurope</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
  </head>
  <body><br><br>
    <!-- Start: HEADER -->
    <?php
      include "header.php";
    ?>
    <!-- End: HEADER -->
    

<!-- Start: Widgets -->
<div class="container">
  <div class="page-header">
    <hr class="border border-dark border-3">
    <br><h3>Vérifie la météo avant de te rendre sur place: <small>grâce à l'API OpenWeatherMap</small></h3>
  </div>
</div>
<div class="container">
  <div class="row-fluid">
    <ul class="thumbnails">
      <li class="span4">
        <div class="thumbnail" style="border: 1px solid red;">
          <img src="img/m_f.png" width="850px">
          <div class="caption">
            <h3>Palais de Tokyo</h3>
            <?php
            $apiKey = "cf1df266c83c61c93c4e66702241bcc4";
            $cityId = "2988507";
            $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=fr&units=metric&APPID=" . $apiKey;
            
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            
            curl_close($ch);
            $data = json_decode($response);
            $currentTime = time();
            ?>
            <div>
              <div><strong>Ville:</strong> <?php echo $data->name; ?></div>
              <div><strong>Température:</strong> <?php echo $data->main->temp; ?>°C</div>
              <div><strong>Description:</strong> <?php echo ucwords($data->weather[0]->description); ?></div>
            </div>
          </div>
        </div>
      </li>
      <li class="span4">
        <div class="thumbnail" style="border: 1px solid red;">
          <img src="img/m_a.png" width="850px">
          <div class="caption">
            <h3>KulturForum</h3>
            <?php
            $apiKey = "cf1df266c83c61c93c4e66702241bcc4";
            $cityId = "2950159";
            $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=fr&units=metric&APPID=" . $apiKey;
            
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            
            curl_close($ch);
            $data = json_decode($response);
            $currentTime = time();
            ?>
            <div>
              <div><strong>Ville:</strong> <?php echo $data->name; ?></div>
              <div><strong>Température:</strong> <?php echo $data->main->temp; ?>°C</div>
              <div><strong>Description:</strong> <?php echo ucwords($data->weather[0]->description); ?></div>
            </div>
          </div>
        </div>
      </li>
      <li class="span4">
        <div class="thumbnail" style="border: 1px solid red;">
          <img src="img/m_e.png" width="850px" height="597px">
          <div class="caption">
            <h3>Macba</h3>
            <?php
            $apiKey = "cf1df266c83c61c93c4e66702241bcc4";
            $cityId = "3128760";
            $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=fr&units=metric&APPID=" . $apiKey;
            
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            
            curl_close($ch);
            $data = json_decode($response);
            $currentTime = time();
            ?>
            <div>
              <div><strong>Ville:</strong> <?php echo $data->name; ?></div>
              <div><strong>Température:</strong> <?php echo $data->main->temp; ?>°C</div>
              <div><strong>Description:</strong> <?php echo ucwords($data->weather[0]->description); ?></div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
<!-- End: Widgets -->
</div><br><br>
</body>
    <!-- Start: FOOTER -->
    <?php
    include "footer.php";
    ?>

    <!-- End: FOOTER -->
    
</html>
