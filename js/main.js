$(function () {
  $(".slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });

  $(".review__slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 362,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  /* Header__Burger */
  $(document).ready(function () {
    $(".header__burger").click(function (event) {
      $(".header__burger, .header__top-menu ").toggleClass("active");
      $("body").toggleClass("lock");
    });
  });

  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 150) {
        $(".scrollup").fadeIn();
      } else {
        $(".scrollup").fadeOut();
      }
    });

    $(".scrollup").click(function () {
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });
  });

  /* Scroll to Section */
  $('a[href*="#"]').on("click", function (e) {
    e.preventDefault();

    $("html, body").animate(
      {
        scrollTop: $($(this).attr("href")).offset().top,
      },
      500,
      "linear"
    );
  });
});
