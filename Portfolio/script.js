window.addEventListener("scroll", function(){
    var nav = document.querySelector("nav");
    nav.classList.toggle("sticky", window.scrollY > 50);
})

$(document).ready(function() {
    $(window).on("scroll", function() {
      console.log($(this).scrollTop())
      if($(this).scrollTop() >= 50){
        // set to new image
        $(".logo img").attr("src","LogoGblanc.png");
      } else {
        //back to default
        $(".logo img").attr("src","LogoG.png");
      }
    })
  })
