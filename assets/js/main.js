$(window).on("load", function() {

    $(".preloader").fadeOut(600)

    let slideIndex = $(".slide.active").index();
    const slideLen = $(".slide").length;

    function slideShow() {
        $(".slide").removeClass("active").eq(slideIndex).addClass("active");
        if (slideIndex == slideLen - 1) {
            slideIndex = 0;
        } else {
            slideIndex++;
        }
        setTimeout(slideShow, 3000);
    }
    slideShow();
    // audio
    $(".fa-music").click(function() {
        if ($(this).hasClass("pause")) {
            $("#myAudio")[0].play();

        } else {
            $("#myAudio")[0].pause();
        }
        $(this).toggleClass("pause");
    })
})

// countdown
let hariItem = document.querySelector("#hari");
let jamItem = document.querySelector("#jam");
let menitItem = document.querySelector("#menit");
let detikItem = document.querySelector("#detik");

let countDown = () => {
    let futureDate = new Date("1 August 2021");
    let currentDate = new Date();
    let myDate = futureDate - currentDate;

    let hari = Math.floor(myDate / 1000 / 60 / 60 / 24);
    let jam = Math.floor(myDate / 1000 / 60 / 60) % 24;
    let menit = Math.floor(myDate / 1000 / 60) % 60;
    let detik = Math.floor(myDate / 1000) % 60;

    hariItem.innerHTML = hari;
    jamItem.innerHTML = jam;
    menitItem.innerHTML = menit;
    detikItem.innerHTML = detik;
}
countDown();
setInterval(countDown, 1000);


$(document).ready(function() {

    // nav toggle
    $(".hamburger-btn").click(function() {
        $(".header .nav").slideToggle();
    })
    $(".header .nav a").click(function() {
        if ($(window).width() < 768) {
            $(".header .nav").slideToggle();
        }
    })

    // fixed header
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $(".header").addClass("fixed");
        } else {
            $(".header").removeClass("fixed");
        }
    })

    // scrollt
    $.scrollIt({
        topOffset: -50
    });

    // gallery
    const wHeight = $(window).height();
    $(".gallery-popup .gp-img").css("max-height", wHeight + "px");

    let itemIndex = 0;
    const totalGalleryItems = $(".gallery-item").length;

    $(".gallery-item").click(function() {
        itemIndex = $(this).index();
        $(".gallery-popup").addClass("open");
        $(".gallery-popup .gp-img").hide();
        gpSlideShow()
    })
    $(".gp-controls .next").click(function() {
        if (itemIndex == totalGalleryItems - 1) {
            itemIndex = 0;
        } else {
            itemIndex++;
        }
        $(".gallery-popup .gp-img").fadeOut(function() {
            gpSlideShow();
        })
    })

    $(".gp-controls .prev").click(function() {
        if (itemIndex === 0) {
            itemIndex = totalGalleryItems - 1;
        } else {
            itemIndex--;
        }
        $(".gallery-popup .gp-img").fadeOut(function() {
            gpSlideShow();
        })
    })

    function gpSlideShow() {
        const imgSrc = $(".gallery-item").eq(itemIndex).find("img").attr("data-large");
        $(".gallery-popup .gp-img").fadeIn().attr("src", imgSrc);
        $(".gp-counter").text((itemIndex + 1) + "/" + totalGalleryItems);
    }

    // close

    $(".gp-close").click(function() {
        $(".gallery-popup").removeClass("open");
    })

    // hide gallery 
    $(".gallery-popup").click(function(event) {
        if ($(event.target).hasClass("open")) {
            $(".gallery-popup").removeClass("open");
        }
    })
})