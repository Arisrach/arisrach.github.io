<?php 
$data = file_get_contents('https://covid19.mathdro.id/api');
$menu = json_decode($data, true);
$covind = file_get_contents('https://covid19.mathdro.id/api/countries/indonesia');
$menu_covind = json_decode($covind, true);
// var_dump($menu['confirmed']['value']);
// echo $menu['confirmed']['value'];
$total = $menu_covind['recovered']['value']+ $menu_covind['confirmed']['value']+$menu_covind['deaths']['value'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>COVID19</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<style>
 @import url("https://fonts.googleapis.com/css?family=Fira+Sans&display=swap");

body{
    font-family: 'Fira Sans', sans-serif !important;
}

h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
    font-family: 'Fira Sans', sans-serif !important;
    font-weight: 800 !important;
    color: #111111;
}
</style>

</head>

<body class="py-4 bg-light" >
  <div class="text-center">
  <h1>COVID19</h1>
  <img src="https://image.flaticon.com/icons/svg/2151/2151395.svg" alt="" width="10%">
  <p class="mb-0">INDONESIA</p>
  <p><small>Live Data</small></p>
  <p><small>Last Update <?php echo date($menu_covind['lastUpdate']); ?></small></p>
  </div>
<!-- indonesia -->
  <div class="container">

    

  <div class="row">

    <div class="col-lg">
    <div class="card text-white border-warning mb-3 text-dark">
      <div class="card-header text-uppercase bg-warning font-weight-bolder">Total laporan</div>
      <div class="card-body">
        <div class="row">
          <div class="col my-auto">

          <h5 class="card-title mb-0"><?php echo $total; ?></h5>
          <p class="text-uppercase mt-0"><small>orang</small></p>
          </div>
          <div class="col text-right my-auto">
          <img src="https://image.flaticon.com/icons/svg/1747/1747852.svg" alt="" width="50%">
          </div>
        </div>

      </div>
    </div>
    </div>

    <div class="col-lg">
    <div class="card text-white border-info mb-3 text-dark" >
      <div class="card-header text-uppercase bg-info font-weight-bolder">Total positif</div>
      <div class="card-body">
        <div class="row">
          <div class="col my-auto">
            <h5 class="card-title mb-0"><?php echo $menu_covind['confirmed']['value']; ?></h5>
            <p class="text-uppercase mt-0"><small>orang</small></p>
          </div>
          <div class="col text-right my-auto">
            <img src="https://image.flaticon.com/icons/svg/1747/1747888.svg" alt="" width="50%">
          </div>
        </div>
        
      </div>
    </div>
    </div>

    <div class="col-lg">
    <div class="card text-white border-success mb-3 text-dark" >
      <div class="card-header text-uppercase bg-success font-weight-bolder">Total Sembuh</div>
      <div class="card-body">
        <div class="row">
          <div class="col my-auto">
          <h5 class="card-title mb-0"><?php echo $menu_covind['recovered']['value']; ?></h5>
        <p class="text-uppercase mt-0"><small>orang</small></p>
          </div>
          <div class="col text-right my-auto">
          <img src="https://image.flaticon.com/icons/svg/1747/1747870.svg" alt="" width="50%">
          </div>
        </div>
        
      </div>
    </div>
    </div>

    <div class="col-lg">
    <div class="card text-white mb-3 border-danger text-dark" >
      <div class="card-header text-uppercase bg-danger font-weight-bolder">Total Kematian</div>
      <div class="card-body">
        <div class="row">
          <div class="col my-auto">
          <h5 class="card-title mb-0"><?php echo $menu_covind['deaths']['value']; ?></h5>
        <p class="text-uppercase mt-0"><small>orang</small></p>
          </div>
          <div class="col text-right my-auto">
            <img src="https://image.flaticon.com/icons/svg/1747/1747879.svg" alt="" width="50%">
          </div>
        </div>
        
      </div>
    </div>
    </div>

  </div>
<!-- row -->
  </div>
<!-- indonesia -->


  <a href="https://covid19.mathdro.id/api/countries/indonesia"></a>

  <p class="text-center">	&copy; Arisrach</p>
  

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
