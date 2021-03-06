<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/cookie.php');
  check_cookie("index");
  $_SESSION['randomNumber'] = mt_rand();
?>

<!DOCTYPE HTML>
<html>

  <head>
    <title>首頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="/css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    
    <script src="js/request.js"></script>
    <script src="js/aisu.js"></script>

    <!-- Dynamic Chat Box 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    Dynamic Chat Box -->

    <script>
      r = <?php echo $_SESSION['randomNumber']; ?>;
    </script>
  </head>

  <body>
    <div class="container-fluid h-100">

      <!-- Title bar -->
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/component/bar.php");
        display_title_bar("index");
      ?>
    <!--
      <div class="row justify-content-start align-content-center h-100" style="padding-top: 65px;">
        <div class="col-6 col-md-5">
          <div class="row justify-content-end align-content-center h-100" style="padding-left: 15px;">
            <img class="img-thumbnail" style="max-height: 600px; object-fit: contain;" src="me.jpg" alt="Me">
          </div>
        </div>
        <div class="col-6 col-md-7">
          <div class="row justify-content-start align-content-center h-100">

            <div class="col-12" style="margin-bottom: 15px;">
              <div class="card" id="login-form" style="max-width: 500px;">
                <div class="card-header" align="center">個人簡介</div>
                <div class="card-body">
                  <div class="form-group text-left">
                    <div>姓名：<br/>
                    　洪偉倫<br/>
                    綽號：<br/>
                    　冰塊<br/><br/>
                    目前就讀：<br/>
                    　台師大資工大二</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="card" id="login-form" style="max-width: 500px;">
                <div class="card-header" align="center">關於網站</div>
                <div class="card-body">
                  <div class="form-group text-left">
                    <div>目前總登入人數：</div>
                    <div id="total_login_turn"></div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      
    </div>
    -->  
    <section id="three" class="wrapper align-center">
			<div class="inner">
				<div class="flex flex-2">
						<article>
						<div class="image round">
							<img src="aisu.jpg" alt="Pic 01" width="150px"/>
						</div>
						<header>
							<h3>洪偉倫<br /> 40747026S</h3>
            </header>
            <!--
						<p>Morbi in sem quis dui placerat ornare. Pellentesquenisi<br />euismod in, pharetra a, ultricies in diam sed arcu. Cras<br />consequat  egestas augue vulputate.</p>
            -->
            <footer>
							<a href="https://www.facebook.com/aisu170232" class="button">See More</a>
						</footer>
					</article>
					<article>
						<div class="image round">
							<img src="cactus.jpg" alt="Pic 02" width="121px"/>
						</div>
						<header>
							<h3>劉紹楷<br /> 40747043S</h3>
						</header>
						<!--
              <p>Pellentesque fermentum dolor. Aliquam quam lectus<br />facilisis auctor, ultrices ut, elementum vulputate, nunc<br /> blandit ellenste egestagus commodo.</p>
						-->
            <footer>
							<a href="https://www.facebook.com/profile.php?id=100008353300825" class="button">See More</a>
						</footer>
          </article>
          <article>
						<div class="image round">
							<img src="black_su.jpg" alt="Pic 02" width="129px"/>
						</div>
						<header>
							<h3>蘇煜詠<br /> 40747005S</h3>
            </header>
            <!--
						<p>Pellentesque fermentum dolor. Aliquam quam lectus<br />facilisis auctor, ultrices ut, elementum vulputate, nunc<br /> blandit ellenste egestagus commodo.</p>
            -->
            <footer>
							<a href="https://www.facebook.com/profile.php?id=100002570883773" class="button" >See More</a>
						</footer>
					</article>
				</div>
			</div>
		</section>




  </body>

</html>