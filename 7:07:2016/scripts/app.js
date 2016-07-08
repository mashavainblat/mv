$(document).ready(function(){
  console.log("Hello World");

// function largeScreen(){
//   if ($(window).width() > 768){
//     $(".buttonName").css("visibility", "hidden");
//   }
// }


// function screenBiggerThan768(){
//   //if screen > 768, on navButton mouseover show buttonName
//   //if resizing the window and width is >768, show
//   revealButtonName();
// }

// function revealButtonName(){
//   if ($(window).width()>768){
//     $(".navButton").mouseover(function(){
//       console.log("mousing over")
//       $(this).next().css("visibility", "visible")
//     })
//     $(".navButton").mouseout(function(){
//       console.log("mousing out")
//       $(this).next().css("visibility", "hidden")
//     })
//   }
// }

// screenBiggerThan768();

// $(window).resize(function(){
//   if ( $(window).width() > 768 ){
//     $(".navButton").mouseover(function(){
//       console.log("mousing over")
//       $(this).next().css("visibility", "visible")
//     })
//     $(".navButton").mouseout(function(){
//       console.log("mousing out")
//       $(this).next().css("visibility", "hidden")
//     })
//   } else {
//     $(".navButton").mouseover(function(){
//       console.log("mousing over")
//       $(this).next().css("visibility", "visible")
//     })
//     $(".navButton").mouseout(function(){
//       console.log("mousing out")
//       $(this).next().css("visibility", "visible")
//     })
//   }
// })


 //  function mousingOverButtons(){
 //    if ( $(window).width () > 768 ){
 //      $(".navButton").mouseover(function(){
 //        console.log("mousing over")
 //        $(this).next().css("visibility", "visible")
 //      })
 //      $(".navButton").mouseout(function(){
 //        console.log("mousing out")
 //        $(this).next().css("visibility", "hidden")
 //      })
 //  }

 //  mousingOverButtons();

 //  $(window).resize(function() {
 //    showButtonNameOnMouseOver()
 //  });



 // function showButtonNameOnMouseOver(){

 //    if ($(window).width() > 768) {
 //      console.log('Mess than 768');
      
 //      $(".navButton").mouseover(function(){
 //        console.log("mousing over")
 //        $(this).next().css("visibility", "visible")
 //      })

 //      $(".navButton").mouseout(function(){
 //        console.log("mousing out")
 //        $(this).next().css("visibility", "hidden")
 //      })

 //    } else {
 //      console.log('Less than 768');
 //   }
    
 // }













// function mousingOverButtons(){
//   console.log("mousingOverButtons() activated");
//   if ($(window).width() > 768){
//     console.log("width is >768")
    
//     $(".navButton").mouseover(function(){
//       $(this).next().css("visibility", "visible")
//     })

//     $(".navButton").mouseout(function(){
//       $(this).next().css("visibility", "hidden")
//     })

//   }
// }

// mousingOverButtons();













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