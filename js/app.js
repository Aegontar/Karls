/* shrinks nav bar on large screens */

if(screen.width > 856) {
    window.onscroll = function changeNavBarColor() { 

        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.querySelector(".page-header").style.height  = "73px";
          } else {
            document.querySelector(".page-header").style.height  = "80px";
          }
    }
}
