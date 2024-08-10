$(window).scroll((function() {
    var scroll;
    $(window).scrollTop() <= 80 ? $("nav.navbar").removeClass("nav-active") : $("nav.navbar").addClass("nav-active")
}))


$('.owl-carousel-1').owlCarousel({
    loop: true,
    margin: 0,
    // autoplay: true,
    // autoplayTimeout: 2500,
    // autoplaySpeed: 2000,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,

        },
        1000: {
            items: 1,


        }
    }
})

$('.owl-carousel-2').owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplaySpeed: 2000,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,

        },
        1000: {
            items: 3,


        }
    }
})
$('.owl-carousel-3').owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplaySpeed: 500,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 6,

        },
        1000: {
            items: 6,


        }
    }
})




// window.onscroll = function() { myFunction() };

// var header = document.getElementById("myHeader");
// var sticky = header.offsetTop;

// function myFunction() {
//     if (window.pageYOffset > sticky) {
//         header.classList.add("sticky");
//     } else {
//         header.classList.remove("sticky");
//     }
// }
let rangeMin = 100;
const range = document.querySelector(".range-selected");
const rangeInput = document.querySelectorAll(".range-input input");
const rangePrice = document.querySelectorAll(".range-price input");

rangeInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        let minRange = parseInt(rangeInput[0].value);
        let maxRange = parseInt(rangeInput[1].value);
        if (maxRange - minRange < rangeMin) {
            if (e.target.className === "min") {
                rangeInput[0].value = maxRange - rangeMin;
            } else {
                rangeInput[1].value = minRange + rangeMin;
            }
        } else {
            rangePrice[0].value = minRange;
            rangePrice[1].value = maxRange;
            range.style.left = (minRange / rangeInput[0].max) * 100 + "%";
            range.style.right = 100 - (maxRange / rangeInput[1].max) * 100 + "%";
        }
    });
});

rangePrice.forEach((input) => {
    input.addEventListener("input", (e) => {
        let minPrice = rangePrice[0].value;
        let maxPrice = rangePrice[1].value;
        if (maxPrice - minPrice >= rangeMin && maxPrice <= rangeInput[1].max) {
            if (e.target.className === "min") {
                rangeInput[0].value = minPrice;
                range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
            } else {
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
        }
    });
});