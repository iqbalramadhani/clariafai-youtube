<?php 
  require_once('vendor/autoload.php');
  use PhpFanatic\clarifAI\ImageClient;
  use Madcoda\Youtube;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Membuat Sesuatu</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">    
          <br><br>
          <h1 class="header center orange-text">Upload Foto Barang Bekas Mu</h1>
          <div class="row center">
            <h5 class="header col s12 light">Dapatkan cara memanfaatkannya disini</h5>
          </div>
          <div class="row center">
            <div class="row">
              <div class="col s5">
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    <input type="file" id="userImage" name="userImage">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
              </div>
              <div class="col s2">
                <h4>ATAU</h4>                
              </div>
              <div class="col s5">
                <div class="input-field">
                  <i class="material-icons prefix">search</i>
                  <input id="url" name="url" type="text" class="validate">
                  <label for="url">URL Gambar</label>
                </div>
              </div>
            </div>
            <button id="proses" class="btn waves-effect waves-light" type="submit" name="action">Proses
              <i class="material-icons right">send</i>
            </button>
          </div>

          <div class="row">
            <div class="col s12">
              <h4 class="center">Result</h4>
              <div class="card">
                <div class="card-image">
<?php
  if(isset($_POST['action'])){
    if(is_array($_FILES)) {
      if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        $sourcePath = $_FILES['userImage']['tmp_name'];
        $targetPath = 'gambar/'.$_FILES['userImage']['name'];
        $namaGambar = $_FILES['userImage']['name'];
        if(move_uploaded_file($sourcePath,$targetPath)) {
          $client = new ImageClient('YOUR API CLARIFAI');
          $youtube = new Youtube(array('key' => 'YOUR API YOUTUBE'));
          $client->AddImage('https://samples.clarifai.com/metro-north.jpg');
          $result = $client->Predict();
          $hasil = json_decode($result,true);
?>
                  <img src="<?php echo $targetPath;?>">
                </div>
                <div class="card-content">
                  <h4>Hasil Prediksi Gambar</h4>
                  <div class="collection">
<?php
                  $hasil1= array();
                  $i=0;
                  foreach ($hasil['outputs'][0]['data']['concepts'] as $concept) {
                    echo '<a href="https://www.google.co.id/search?q='.$concept["name"].'" target="_blank" class="collection-item">'.$concept["name"].'</a>';
                    $videoList = $youtube->searchVideos('membuat sesuatu dengan '.$concept['name'],1);
                    foreach ($videoList as $hasil) {
                      $hasil1[$i] = $hasil;
                      $i++;
                    }//endforeach
                  }//endforeach
?>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
<?php
                  for($j=0;$j<count($hasil1);$j++){
?>        
            <div class="col s12">
              <h4 class="header"><?php echo $hasil1[$j]->snippet->title;?></h4>
              <div class="card horizontal">
                <div class="card-image">
                  <iframe class="materialboxed" src="//www.youtube.com/embed/<?php echo $hasil1[$j]->id->videoId;?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <p><?php echo $hasil1[$j]->snippet->description;?>.</p>
                  </div>
                  <div class="card-action">
                    <a href="https://www.youtube.com/watch?v=<?php echo $hasil1[$j]->id->videoId;?>" target="_blank">YouTube</a>
                  </div>
                </div>
              </div>
            </div>
<?php                    
                  }//endfor
?>
          </div>
<?php   
        }//endif
      }else{
        if(!empty($_POST["url"])){
          $foto = $_POST["url"];
          $client = new ImageClient('YOUR API CLARIFAI');
          $youtube = new Youtube(array('key' => 'YOUR API YOUTUBE'));
          $client->AddImage($foto);
          $result = $client->Predict();
          $hasil = json_decode($result,true);
         
?>
                  <img src="<?php echo $foto;?>">
                </div>
                <div class="card-content">
                  <div class="collection">
                  <h4>Hasil Prediksi Gambar</h4>  
<?php
                  $hasil1= array();
                  $i=0;
                  foreach ($hasil['outputs'][0]['data']['concepts'] as $concept) {
                    // echo $concept->name() . ': ' . $concept->value() . "\n";
                    echo '<a href="https://www.google.co.id/search?q='.$concept['name'].'" target="_blank" class="collection-item">'.$concept['name'].'</a>';
                    $videoList = $youtube->searchVideos('membuat sesuatu dengan '.$concept['name'],1);
                    foreach ($videoList as $hasil) {
                      $hasil1[$i] = $hasil;
                      $i++;
                    }
                  }
?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

<?php
                  for($j=0;$j<count($hasil1);$j++){
?>        
            <div class="col s12">
              <h4 class="header"><?php echo $hasil1[$j]->snippet->title;?></h4>
              <div class="card horizontal">
                <div class="card-image">
                  <iframe class="materialboxed" src="//www.youtube.com/embed/<?php echo $hasil1[$j]->id->videoId;?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <p><?php echo $hasil1[$j]->snippet->description;?>.</p>
                  </div>
                  <div class="card-action">
                    <a href="https://www.youtube.com/watch?v=<?php echo $hasil1[$j]->id->videoId;?>" target="_blank">YouTube</a>
                  </div>
                </div>
              </div>
            </div>
<?php                    
                  }
?>
          </div>
<?php   
        }
      }
    }
  }else{
    $data = array("plastic","no person","equipment","recycling","trash","box","luxury","garbage","indoors","container","paper","stock","desktop","shop","health","family","industry","shopping","technology","color");
?>
                  <img class="materialboxed" src="http://berinovasi.com/wp-content/uploads/2017/11/WK2-AM-10-Cara-Membuat-Barang-Bekas-Menjadi-Barang-Berguna-dan-Mudah-Dibuat.jpg">
                </div>
                <div class="card-content">
                  <h4>Hasil Prediksi Gambar</h4>
                  <div class="collection">
<?php 
                  for($k=0;$k<count($data);$k++){
                    echo '<a href="https://www.google.co.id/search?q='.$data[$k].'" target="_blank" class="collection-item">'.$data[$k].'</a>';
                  }
?>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="row">
<?php
      $youtube = new Youtube(array('key' => 'YOUR API YOUTUBE'));
      for($k=0;$k<count($data);$k++){
        $videoList = $youtube->searchVideos('membuat sesuatu dengan '.$data[$k],1);
        foreach ($videoList as $hasil) {
?>
          <div class="col s12">
              <h4 class="header"><?php echo $hasil->snippet->title;?></h4>
              <div class="card horizontal">
                <div class="card-image">
                  <iframe class="materialboxed" src="//www.youtube.com/embed/<?php echo $hasil->id->videoId;?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <p><?php echo $hasil->snippet->description;?>.</p>
                  </div>
                  <div class="card-action">
                    <a href="https://www.youtube.com/watch?v=<?php echo $hasil->id->videoId;?>" target="_blank">YouTube</a>
                  </div>
                </div>
              </div>
            </div>   
<?php
        }

      }
  }
?> 
        </div> 
      </div>
      <br>
      <br>
    </div>
  </form>


  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row center">
        <div class="col s6">
          <div class="">
            <img class="materialboxed responsive-img" src="https://www.gyanblog.com/assets/img/2018/05/xYoutubeDataApiV3.png.pagespeed.ic.OYLMUymKAz.png ">
            
          </div>
        </div>
        <div class="col s6">
          <div class="">
            <img class="materialboxed responsive-img" src="https://res-1.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/x2d9xny0gatskd34eait">
            
          </div>
        </div>
      </div>
      <br><br>
    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      
    </div>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://bale.web.id">Iqbal Ramadhani - ATOL 2018</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

      // $(document).on('on','.materialboxed',materialbox());
      $('.materialboxed').materialbox();
      $('.coba').click(function(){
        $('.coba').materialboxed();
      });


    });
  </script>
  </body>
</html>
