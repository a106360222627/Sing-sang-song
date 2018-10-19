<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">
  <title>Playgroup</title>
</head>

<body>
    <?php
      require 'config.php';

      $old_url = $_SERVER["REQUEST_URI"];
      $check = strpos($old_url, '?');
      if($check !== false){
        $refer=base64_decode($_GET['refer']);
          if($refer== 'nolog'){ ?>
            
            <nav class="navbar navbar-expand-xl navbar-light header-font">
              <a class="navbar-brand float-left" href="#">
                <img src="http://140.131.114.155/playgroup/pic/title.png" class="header-logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <form class="form-inline mr-auto ml-lg-5">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="搜尋" aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-info" type="submit"><span class="fas fa-search"/></button>
                    </div>
                  </div>
                </form>

                <ul class="navbar-nav">
                  <li class="nav-item ml-auto">
                    <a href="login.php" class="nav-link">
                      <i class="fas fa-sign-in-alt"></i>
                      <span class="header-font">註冊/登入</span>
                    </a>
                  </li>
                  <li class="nav-item ml-auto">
                    <a href="#" class="nav-link">
                        <i class="fas fa-filter"></i>
                        <span class="header-font">篩選</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>

       <?php }elseif($refer != 'nolog'){ ?>
              <nav class="navbar navbar-light header-font">
                <a class="navbar-brand float-left" href="#">
                  <img src="http://140.131.114.155/playgroup/pic/title.png" class="header-logo">
                </a>
              </nav>
                
      <?php } 
        }else{
          require 'insession.php';
        }
       ?>


  <!--Carousel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators" id="cindicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="http://140.131.114.155/playgroup/pic/head.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="http://140.131.114.155/playgroup/pic/head.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="http://140.131.114.155/playgroup/pic/head.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 
  <div id="tr_space"></div>

  <div class="container-fluid">
    <div class="card-deck">
      <?php
      require 'config.php';

      $old_url = $_SERVER["REQUEST_URI"];
      $check = strpos($old_url, '?');
      if($check !== false){

        $refer=$_GET['refer'];

        $sql = "SELECT course.courseNo, course, city, district, price, image FROM course INNER JOIN coursePic
                 ON course.courseNo = coursePic.courseNo";
        $stmt = sqlsrv_query( $conn, $sql );
        $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);

        echo'<div class="col-xs-12 col-md-6 col-lg-3 courseitem">
              <a href="course.php?refer='.$refer.'&cNo='.$row[0].'">
                <div class="card">
                  <img class="card-img-top" src="'.$row[5].'" alt="Card image cap">
                  <div class="card-body">
                    <h3>'.$row[1].'</h3>
                    <div id="DIV1">
                      <i class="fas fa-map-marker-alt" width="18" height="18" style="color: #33D4C6;"></i>
                    </div>
                    <p id="city">'.$row[2].'&nbsp;'.$row[3].'</p>
                    <p align=right>
                      <span id="twd">TWD</span> 
                      <span id="price">'.$row[4].'</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>';
        }
      ?>
    </div>
  </div>
  
  <div id="tr_space"></div>

  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("fab").style.visibility = "hidden";
    document.getElementById("cindicators").style.visibility = "hidden";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("fab").style.visibility = "visible";
    document.getElementById("cindicators").style.visibility = "visible";
  }
  </script>


  <!--script-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>