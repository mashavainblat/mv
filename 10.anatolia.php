<?php include("php/formattop.php"); ?>

  <title>Masha Vainblat Portfolio</title>
  </head>

  <body class="mashaVainblatPortfolio anatoliaContentContainer container-fluid">
            <?php include("php/navigation.php"); ?>
                  

                  <div class="row projectInfoContentContainer">
                    <div class="col-md-3 col-sm-3 col-xs-1"></div>
                    <div class="projectInfoContainer col-md-6 col-sm-6 col-xs-10 noPadding">
                      <div class="projectInfo">
                          <h2>Anatolia Winery</h2>
                          <h4>branding</h4>
                          <p>Anatolia is an artisanal Greek winery. The strong agricultural roots in the region of Anatolia allow for an exquisite wine tasting experience. </p>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-1" id="emptyPlaceHolderRow"></div>
                  </div>

                  <div class="row projectPhotoContainer">
                  <!-- 
                    when scrolling down the page, remove paddingColumnLeft (target by id) 
                    when scrolling up the page, prepend "<div class="col-md-3 col-sm-3 col-xs-1" id="paddingColumnLeft"></div>" to projectPhotoContainer
                    http://api.jquery.com/prepend/
                  -->
                    <div class="col-md-3 col-sm-3 col-xs-1" id="paddingColumnLeft"></div>
                    <div id="imageContainerWidthNoPadding" class="col-md-7 col-sm-7 col-xs-10 noPadding">

                      <div class="row" id="blackBackgroundWhiteLogo">
                          <center><img src="img/10.anatolia/logoThysusWhite.png"></center>
                      </div>

                      <div class="row noPadding" id="anatoliaOpeningVineyardImage">
                        <img src="img/10.anatolia/vineyard001.png">
                      </div>

                      <div class="row whiteBackgroundColor" id="logoAcornNameImage">
                        <center><img src="img/10.anatolia/logoAcornName.png"></center>
                      </div>

                      <div class="row" id="anatoliaMagazineSpreads">
                        <img src="img/10.anatolia/magazine001.png">
                        <img src="img/10.anatolia/magazine002.png">
                        <img src="img/10.anatolia/magazine003.png">
                        <img src="img/10.anatolia/magazine004.png">
                      </div>

                      <div class="row whiteBackgroundColor" id="anatoliaStationary">
                        <div class="col-md-3 col-sm-3 col-xs-6 noPadding">
                          <img src="img/10.anatolia/letterheadFront.jpg">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 noPadding">
                          <img src="img/10.anatolia/letterheadBack.jpg">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-4 noPadding">
                          
                          
                        
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-8 noPadding">
                        </div>
                      </div>

                      <div class="row row-fluid" id="anatoliaBottles">
                        <div class="col-md-3 col-sm-3 col-xs-12 noPadding">
                          <img src="img/10.anatolia/bottle001.jpg">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 noPadding">
                          <img src="img/10.anatolia/bottle002.jpg">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 noPadding">  
                          <img src="img/10.anatolia/bottle003.jpg">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 noPadding">  
                          <img src="img/10.anatolia/bottle004.jpg">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-1" id="paddingColumnRight"></div>
                    <!-- 
                    when scrolling down the page, remove paddingColumnRight (target by id) 
                    when scrolling up the page, append "<div class="col-md-3 col-sm-3 col-xs-1" id="paddingColumnRight"></div>" to projectPhotoContainer
                    http://api.jquery.com/append/
                  -->
                  </div>

                </div>
              <?php include("php/formatbottom.php"); ?>
