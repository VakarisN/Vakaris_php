<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <style>
           .debesuota_be_lietaus_be_saules {
               background-image: url("https://cdn4.iconfinder.com/data/icons/heavy-weather/100/Weather_Icons_02_cloud-512.png");
               height: 200px;
               width: 200px;
               background-size: cover;
           }
           .debesuota_su_lietumi_be_saules {
               background-image: url("https://cdn1.iconfinder.com/data/icons/weather-elements/512/Weather_CloudRain.png");
               height: 200px;
               width: 200px;
               background-size: cover;
           }
           .debesuota_su_lietumi_su_saule {
               background-image: url("https://cdn3.iconfinder.com/data/icons/sunnyday-2/142/light_cloudy_heavy_rain-512.png");
               height: 200px;
               width: 200px;
               background-size: cover;
           }
           .tik_sauleta {
               background-image: url("https://cdn1.iconfinder.com/data/icons/weather-elements/512/Weather_SunAbstract.png");
               height: 200px;
               width: 200px;
               background-size: cover;
           }
       </style>
       <?php

       $sun = rand(0,1);
       $rain = rand(0,1);

       ?>
       <?php if ($sun == true): ?>
           <?php if ($rain == true): ?>
               <div class="debesuota_su_lietumi_su_saule">Debesuota su lietumi ir su saule</div>
           <?php elseif ($rain == false): ?>
               <div class="tik_sauleta">Tik sauleta</div>
           <?php endif;?>
       <?php elseif ($sun == false): ?>
           <?php if ($rain == true): ?>
               <div class="debesuota_su_lietumi_be_saules">Debesuota su lietumi be saules</div>
           <?php elseif ($rain == false): ?>
               <div class="debesuota_be_lietaus_be_saules">Tik debesuota</div>
           <?php endif;?>
       <?php endif;?>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>
