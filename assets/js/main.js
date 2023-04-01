// loader
$(document).ready(function(){
    setTimeout(()=> {
        $('.loader').remove();
    } , 900); // after 8 sec it will remove.
  });

  
//   $(document).ready(function() {
//     var fill = "#d6d6d6";
//     var stroke = "black";
//     var radio = 5;
//     $("body").mousemove(function(e) {
//       mouseX = e.pageX;
//       mouseY = e.pageY;
//       render();
//     });
  
//     $("body").mousedown(function(e){
//       radio = 7;
//       fill = "black";
//       stroke = "#d6d6d6";
//       render();
//     });
//     $("body").mouseup(function(e){
//       fill = "#d6d6d6";
//       stroke = "black";
//       radio = 5;
//       render();
//     });
  
//     function render(){
//       document.getElementById("SVG").innerHTML = 
//         '<line x1="0" y1="0" x2="'+mouseX+'" y2="'+mouseY+'" stroke="#555" stroke-width="0.8"></line>'+
//         '<line x1="0" y1="100%" x2="'+mouseX+'" y2="'+mouseY+'" stroke="#555" stroke-width="0.8"></line>'+
//         '<line x1="100%" y1="100%" x2="'+mouseX+'" y2="'+mouseY+'" stroke="#555" stroke-width="0.8"></line>'+
//         '<line x1="100%" y1="0" x2="'+mouseX+'" y2="'+mouseY+'" stroke="#555" stroke-width="0.8"></line>'+
//         '<circle cx="'+mouseX+'" cy="'+mouseY+'" r="'+radio+'" stroke="'+stroke+'" stroke-width="2" fill="'+fill+'" id="mouse"/>'
//     };
//   });

  

//hero slider
$('.hero-right-slider').slick({
    infinite: true,
    slidesToShow: 1,
    margin: 10,
    slidesToScroll: 1,
    // autoplay: true,
    dots: false,
    arrows: true,
    responsive: [{
            breakpoint: 1099,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
  });
  

// client carousel
$('.client-slider').owlCarousel({
    loop:true,
    margin:10,
   autoplay:true,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})



// latest-project-slider
$(document).ready(function(){
    $('.latest-project-slider').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoplay:true,
        navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1.5
            },
            1300:{
                items:2.2
            },
            1500:{
                items:2.5
            }
        }
      })
});


// testimonial slider


//testimonial slider
$('.testimonialCarousel').slick({
    infinite: true,
    slidesToShow: 2,
    margin: 10,
    slidesToScroll: 1,
    // autoplay: true,
    dots: false,
    arrows: true,
    responsive: [{
            breakpoint: 1099,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});








// interior slider 
$(document).ready(function(){
    $('.interior-design-slider').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        dots:true,
        autoplay:false,
        navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1300:{
                items:1
            },
            1500:{
                items:1
            }
        }
      })
});



