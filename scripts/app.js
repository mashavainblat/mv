$(document).ready(function(){
  console.log("Hello World");



  // if ( $("#contact") ){
  //   // console.log("on contact page");
  //   $("#contactButton").this($("#contactButtonName").css("opacity", "1"));
  // }



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
    }

    function changeOpacityOfNavButtons(){
      $(".navigation").css("opacity","0.6");
      console.log("changing opacity");
    }

    function makeNavButtonOpaque(){
      $(".navigation").css("opacity","1");
    }



  });