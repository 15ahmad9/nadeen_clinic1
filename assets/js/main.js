const casesSwiper = new Swiper(".cases-coverflow", {


effect:"coverflow",


grabCursor:true,


centeredSlides:true,


slidesPerView:"auto",


loop:true,


autoplay:{


delay:2500,


disableOnInteraction:false


},



coverflowEffect:{


rotate:0,


stretch:0,


depth:200,


modifier:2,


slideShadows:false


},



navigation:{


nextEl:".swiper-button-next",

prevEl:".swiper-button-prev"


},



breakpoints:{


320:{

slidesPerView:1.5

},


768:{

slidesPerView:3

},


1200:{

slidesPerView:5

}


}


});