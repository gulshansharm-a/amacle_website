// navbar-toggle
$(".threeliner").on('click', function () {
    $(this).toggleClass('active');
    $(".m-navbar").toggleClass('dnone');
})

setInterval(() => {
    $(".swiper-button-next").click();
  }, 5000);
$(document).ready(function () {
    var canScroll = true,
        scrollController = null;

    // Mousewheel event handler
    $(window).on('mousewheel DOMMouseScroll', function (event) {
        event.preventDefault();
        // deltaY represents the vertical scroll amount
        var deltaY = event.originalEvent.deltaY;

        if (deltaY > 50 && canScroll) {

            // Scrolling down
            console.log('Scrolling down');
            updateHelper(1);
            // Delay scroll re-enable by 1 second
        }
        // Prevent default scrolling behavior
    });

    // Touch swipe event handler
    var targetElement = document.getElementById("bord");
    if (targetElement) {
        var mc = new Hammer(targetElement);
        mc.get('swipe').set({
            direction: Hammer.DIRECTION_VERTICAL,
        });
        mc.on('swipeup swipedown', function (e) {
            updateHelper(e);
        });
    }

    // Keyboard arrow key event handler
    $(document).keyup(function (e) {
        e.preventDefault();
        updateHelper(e);
    });
});

function updateHelper(param) {
    var curActive = $('.side-nav').find('.dblock'),
        curPos = $('.side-nav').children().index(curActive),
        lastItem = $('.side-nav').children().length - 1,
        nextPos = 0;
    if (param.type === "swipeup" || param.type === "swipedown" || param.keyCode === 40 || param > 0) {
        if (curPos !== lastItem) {
            nextPos = curPos + 1;
            updateNavs(nextPos);
            updateContent(curPos, nextPos, lastItem);
        }

    }
}

function updateNavs(nextPos) {

    $('.side-nav, .outer-nav').children().removeClass('dblock');
    $('.side-nav').children().eq(nextPos).addClass('dblock');
    $('.outer-nav').children().eq(nextPos).addClass('dblock');

}

function updateContent(curPos, nextPos, lastItem) {

    $('.main-content').children().removeClass('section--is-active');
    $('.main-content').children().eq(nextPos).addClass('section--is-active');
    $('.main-content .section').children().removeClass('section--next section--prev');

    if (curPos === lastItem && nextPos === 0 || curPos === 0 && nextPos === lastItem) {
        $('.main-content .section').children().removeClass('section--next section--prev');
    } else if (curPos < nextPos) {
        $('.main-content').children().eq(curPos).children().addClass('section--next');
    } else {
        $('.main-content').children().eq(curPos).children().addClass('section--prev');
    }

    if (nextPos !== 0 && nextPos !== lastItem) {
        $('.header--cta').addClass('is-active');
    } else {
        $('.header--cta').removeClass('is-active');
    }

}


   
    setInterval(() => {
        $(".av").attr('id','av');
    }, 2000);
    setInterval(() => {
        $(".av").removeAttr('id','av');
    }, 1000);

// categoey scroll

const category = document.querySelector('.category-scroll');

function cateleft() {
    category.scrollBy({
        left: -120,
        behavior: 'smooth'
    });
}

function cateright() {
    category.scrollBy({
        left: 120,
        behavior: 'smooth'
    });
}



// banner slider
var testimonialsSlider = new Splide('.splide5', {
    type: 'loop',
    autoplay: true,
    arrows: true,
    pagination: false,
    perPage: 1,
    breakpoints: {
        600: {
            arrows: false,
        },
    }
}).mount();

var blog = new Splide('.splide6', {
    type: 'loop',
    arrows: true,
    pagination: false,
    perPage: 3,
    gap:30,
    breakpoints: {
        1075: {
            arrows: false,
            perPage:2
        },
        750: {
            arrows: false,
            perPage:1
        },
    }
}).mount();

var blog = new Splide('.splide7', {
    type: 'loop',
    arrows: true,
    pagination: false,
    perPage: 3,
    gap:30,
    breakpoints: {
        1075: {
            arrows: false,
            perPage:2
        },
        750: {
            arrows: false,
            perPage:1
        },
    }
}).mount();

var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    slidesPerView: 5,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    arrow:true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    coverflowEffect: {
      rotate: 30,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
      
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
        0:{
            slidesPerView: 1,
        },
        550: {
            slidesPerView: 3,
          },
        
        1024: {
          slidesPerView: 5,
        }
    }
  });




  
var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    spaceBetween:30,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
    },
    autoplay: {
        delay: 2000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});

// Start autoplay

