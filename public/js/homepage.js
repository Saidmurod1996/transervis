
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() 
{
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 145 || document.documentElement.scrollTop > 145) 
    {
        navbar.className = "container" + " w3-card-2" + " w3-animate-top";
    } 
    else 
    {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top", "");
    }
}

$(function(){
    $('.selectpicker').selectpicker();
});