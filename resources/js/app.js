require("./bootstrap");

var multipleCardCarousel = document.querySelector("#photos-carousel");
if (window.matchMedia("(min-width: 768px)").matches) {
    var carousel = new bootstrap.Carousel(multipleCardCarousel, {
        interval: false,
    });
    var carouselWidth = $(".carousel-inner")[0].scrollWidth;
    var cardWidth = $(".carousel-item").width();
    var scrollPosition = 0;
    $("#photos-carousel .carousel-control-next").on("click", function () {
        if (scrollPosition < carouselWidth - cardWidth * 4) {
            scrollPosition += cardWidth;
            $("#photos-carousel .carousel-inner").animate(
                {
                    scrollLeft: scrollPosition,
                },
                600
            );
        }
    });
    $("#photos-carousel .carousel-control-prev").on("click", function () {
        if (scrollPosition > 0) {
            scrollPosition -= cardWidth;
            $("#photos-carousel .carousel-inner").animate(
                {
                    scrollLeft: scrollPosition,
                },
                600
            );
        }
    });
} else {
    $(multipleCardCarousel).addClass("slide");
}
