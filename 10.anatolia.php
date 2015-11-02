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
                      <div class="centerImage">
                        <div class="row" id="blackBackgroundWhiteLogo">
                            <img src="img/10.anatolia/logoThysusWhite.png"></div>
                        </div>

                        <div class="row noPadding" id="anatoliaOpeningVineyardImage">
                          <img src="img/10.anatolia/vineyard001.png">
                        </div>

                        <div class="row whiteBackgroundColor" id="logoAcornNameImage">
                          <center><img src="img/10.anatolia/logoAcornName.png"></center>
                        </div>

                        <div class="row whiteBackgroundColor" id="anatoliaMagazineSpreads">
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
                          <div class="col-md-2 col-sm-2 col-xs-4 noPadding" id="anatoliaBusinessCards"> <!-- business cards -->
                              <img src="img/10.anatolia/anatoliaBusinessCards.jpg">
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-8 noPadding" id="anatoliaEnvelopes"><!--envelopes-->
                            <img src="img/10.anatolia/anatoliaEnvelopes.jpg">
                          </div>
                        </div> <!--end of anatoliaStationery-->


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
                        </div><!-- end of anatoliaBottles-->

                        <div class="row row-fluid" id="anatoliaBottleRacksContainer">
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaBottleRackCloseup">
                            <img src="img/10.anatolia/anatoliaBottleRackCloseup.jpg">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaBottleRack">
                            <img src="img/10.anatolia/anatoliaBottleRack.jpg">
                          </div>
                        </div>

                        <div class="row row-fluid" id="corkScrewAndGlassesContainer">
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaCorkScrew">
                            <img src="img/10.anatolia/anatoliaCorkScrew.jpg">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaWinteGlasses">
                            <img src="img/10.anatolia/anatoliaWineGlasses.jpg">
                          </div>
                        </div>

                        <div class="row row-fluid" id="anatoliaStoreFrontDisplayContainer">
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaStoreFront">
                            <img src="img/10.anatolia/anatoliaStoreFront.jpg">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaBottleDisplay">
                            <img src="img/10.anatolia/anatoliaBottleDisplay01.jpg">
                          </div>
                        </div>

                        <div class="row row-fluid" id="anatoliaBarrelsContainer">
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaBarrels">
                            <img src="img/10.anatolia/anatoliaBarrels.jpg">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaBarrelsCloseup">
                            <img src="img/10.anatolia/anatoliaBarrelsCloseup.jpg">
                          </div>
                        </div>

                        <div class="row row-fluid" id="anatoliaVineyardCoastContainer">
                          <div class="col-md-12 col-sm-12 col-xs-12 noPadding" id="anatoliaVineyardCoast">
                            <img src="img/10.anatolia/anatoliaVineyardCoast.jpg">
                          </div>
                        </div>

                        <div class="row row-fluid" id="anatoliaVineyardCloseupContainer">
                          <div class="col-md-12 col-sm-12 col-xs-12 noPadding" id="anatoliaVineyardCloseup">
                            <img src="img/10.anatolia/anatoliaVineyardCloseup.jpg">
                          </div>
                        </div>

                        <div class="row row-fluid whiteBackgroundColor" id="anatoliaVineyardPickerContainer">
                          <div class="col-md-7 col-sm-7 col-xs-12 noPadding" id="anatoliaVineyardPicker01">
                            <img src="img/10.anatolia/vineyardPicker01.jpg">
                          </div>
                          <div class="col-md-5 col-sm-5 col-xs-12 noPadding" id="anatoliaVineyardPicker02">
                            <img src="img/10.anatolia/vineyardPicker02.jpg">
                          </div>
                        </div>

                        <div class="row row-fluid whiteBackgroundColor" id="anatoliaVineyardPickerGrapesContainer">
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaVineyardPicker03">
                            <img src="img/10.anatolia/vineyardPicker03.jpg">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="grapes">
                            <img src="img/10.anatolia/grapes01.jpg">
                          </div>
                        </div>

                        <div class="row row-fluid whiteBackgroundColor" id="anatoliaWebsiteAndAdContainer">
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaWebsiteDesktop">
                            <img src="img/10.anatolia/anatoliaWebsiteDesktop.jpg">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaAd01">
                            <img src="img/10.anatolia/anatoliaAd01.jpg">
                          </div>
                        </div>

                        <div class="row row-fluid whiteBackgroundColor" id="anatoliaTabletAndAdContainer">
                          <div class="col-md-5 col-sm-5 col-xs-12 noPadding" id="anatoliaAd02">
                            <img src="img/10.anatolia/anatoliaAd02.jpg">
                          </div>
                          <div class="col-md-7 col-sm-7 col-xs-12 noPadding" id="anatoliaTablet">
                            <img src="img/10.anatolia/anatoliaTablet.jpg">
                          </div>
                        </div>

                        <div class="row row-fluid whiteBackgroundColor" id="anatoliaApparelAndMobileContainer">
                          <div class="col-md-3 col-sm-3 col-xs-12 noPadding" id="anatoliaShirt">
                            <img src="img/10.anatolia/anatoliaShirt.jpg">
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-12 noPadding" id="anatoliaTote02">
                            <img src="img/10.anatolia/anatoliaTote02.jpg">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 noPadding" id="anatoliaMobile">
                            <img src="img/10.anatolia/anatoliaMobile.jpg">
                          </div>
                        </div>




                      </div><!--end of imageContainerWidthNoPadding-->  
                    </div><!--end of projectPhotoContainer-->

                    <div class="col-md-3 col-sm-3 col-xs-1" id="paddingColumnRight"></div>
                    <!-- 
                    when scrolling down the page, remove paddingColumnRight (target by id) 
                    when scrolling up the page, append "<div class="col-md-3 col-sm-3 col-xs-1" id="paddingColumnRight"></div>" to projectPhotoContainer
                    http://api.jquery.com/append/
                  -->
                  </div>

                </div>
              <?php include("php/formatbottom.php"); ?>
