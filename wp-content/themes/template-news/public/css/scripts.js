const toggle = document.querySelector('.toggle');
const nav_menu = document.querySelector('.nav-menu');
const nav_header = document.querySelector('.nav-header');

toggle.addEventListener("click", () => {
toggle.classList.toggle("active");
nav_menu.classList.toggle("active");
nav_header.classList.toggle("active");
           
});

document.querySelectorAll('.nav-link').forEach(n => n.addEventListener("click", () => {
toggle.classList.remove("active");
    nav_menu.classList.remove("active");
    nav_header.classList.remove("active");
            
}));

$('.items-staff').slick({
    infinite : true,
    slidesToShow: 3,
    slidesToScroll:1,
    draggable: true,
    autoplay: true,
    autoplaySpeed: 3000,
});
        
$('.items-place').slick({
    slidesToShow: 1,
    slidesToScroll:1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows:false,
    speed: 2000,
});
$('.icon-search').click(function(){
    $('.form-search').toggleClass('active-search');
});

AOS.init();