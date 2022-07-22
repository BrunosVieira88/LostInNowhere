<!DOCTYPE html  >
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<?php include('layout/essencial.php');?> 
</head>
<body id="ds-body">
 
  <div class="wrapper">
  <?php include('layout/navbar.php');?>
    <div class="row">
      <div class="fundo">
        <section class="container">
        <img src="assets/img/lnw.png" width="20%" class="mt-4 mb-3" alt="">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
            <img src="assets/img/vocal.jpg" class="img-fluid foto"alt="">        
            </div>
            <div class="col-md-3">
              <img src="assets/img/guitar.jpg" class="img-fluid foto" alt="">
            </div>
            <div class="col-md-3">
              <img src="assets/img/baterista.jpg" class="img-fluid foto" alt="">
            </div>
            <div class="col-md-3">
              <img src="assets/img/baixo.jpg" class="img-fluid foto" alt="">
            </div>
          </div>
        </section>
         
      </div>
    </div> 
  </div>
 

  <div style="text-align: center;" class="mt-5">
    <div class="row">
      <div class="col-md-6">
        <h1>RELEASE</h1>
        <div class="demo2"></div>
      </div>
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="320" height="300" src="https://www.youtube.com/embed/ToN2LW_1Q6s" allowfullscreen></iframe>
        </div>
      </div>
  </div>
   
   
  </div>
<?php $mensagem ="&text=Olá.%20Vim%20o%20pelo%20no%20Site!!"?>
  <div class="container text-center mt-3">
    <h3>Siga em nossas redes sociais</h3>
      <div class="row mt-5  mb-4 text-center">
      <div class="offset-md-1 col-md-2"><a href="https://www.instagram.com/lostinnowhereband/" target="blank"><i class="fa fa-instagram" style="font-size:48px;color:red"></i></a></div>
        <div class="offset-md-1 col-md-2"><a href="https://open.spotify.com/playlist/26ykmomUgmsiBaTUqT2IKA" target="blank"><i class="fa fa-spotify" style="font-size:48px;color:green" aria-hidden="true"></i></a> </div>
          <div class="offset-md-1 col-md-2"> <a data-bs-toggle="tooltip"href="https://www.youtube.com/channel/UCXMX4m-jKxSscqKDEFnnYqA" target="_blank" rel="noopener noreferrer"> <i class="fa fa-youtube-play" style="font-size:48px;color:red" aria-hidden="true"></i></a></div>
          <div class="offset-md-1 col-md-2" ><a href="https://api.whatsapp.com/send?phone=5511976388455<?=$mensagem?>" target="_blank" rel="noopener noreferrer"><i class="fa fa-whatsapp" style="font-size:48px;color:green" aria-hidden="true" ></i></a></div>
        </div> 

  </div>

</body>
</html>
<script src="assets/js/regressiva.js"></script>