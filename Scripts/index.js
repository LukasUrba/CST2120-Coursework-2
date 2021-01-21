
let slideIndex = 1;
showSlide(slideIndex);

function nextSlide(n) {
    showSlide(slideIndex += n);
}

function currentSlide(n) {
    showSlide(slideIndex = n);
}

function showSlide(n) {
    let slides = document.getElementsByClassName("slideshow");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"
    }
    // for (let i = 0; dots.length; i++) {
    //     console.log(dots[0]);
    //     let searchFunc = (dots[0]);
    //     let searchFor = searchFunc.className;
    //     if (searchFor.search(" active") != 0) {
    //         //searchFor = searchFor.replace(" active", "");
    //         console.log(searchFor);
    //     }
    // }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}