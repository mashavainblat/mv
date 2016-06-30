  $(document).ready(function(){

    console.log("Hello World");

    $("#testDiv").click(function(){
      console.log("clicked");
      $(this).css("background-color", "blue");
    })

    // $(".navButton").hover(function(){
    //   console.log("hovering");
    //   $(".buttonName").css("visibility", "visible")
    // })

 $(window).resize(function() {
  if ($(window).width() < 960) {
     alert('Less than 960');
  } else {
    alert('More than 960');
 }
});

    $(".navButton").mouseover(function(){
      $(this).next().css("visibility", "visible")
    })

    $(".navButton").mouseout(function(){
      $(this).next().css("visibility", "hidden")
    })














    $(window).scroll(function(){
      reactToScroll();
    });

    function reactToScroll(){
      if($(window).scrollTop()>1){
        changeOpacityOfNavButtons();
      }

      else{
        makeNavButtonOpaque();
      }

      if($(window).scrollTop()>450){
        expandPics();
      }
      else{
       contractPics();
     }
    }

    function changeOpacityOfNavButtons(){
      $(".navigation").css("opacity","0.3");
      console.log("changing opacity");
    }

    function expandPics(){
      //get rid of column padding
      //change classes from col-md-7 col-sm-7 col-xs-10 ==> col-md-12 col-sm-12 col-xs-12
      //set .container width to 100%
      console.log("expanding!")
      
      $("#paddingColumnLeft, #paddingColumnRight").hide();
      $("#imageContainerWidthNoPadding").attr("class", "col-md-12 col-sm-12 col-xs-12 noPadding");
      //$(".navButton").css("opacity", "0.5");

    }

    function contractPics(){
      console.log("contracting");
      $("#paddingColumnLeft, #paddingColumnRight").show();
      $("#imageContainerWidthNoPadding").attr("class", "col-md-7 col-sm-7 col-xs-10 noPadding");
      //$(".navButton").css("opacity", "1");
      //reverse

    };

    function makeNavButtonOpaque(){
      $(".navigation").css("opacity","1");
    }



  });