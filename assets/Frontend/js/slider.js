const glide1 = document.getElementById("glide1");
const glide2 = document.getElementById("glide2");
const glide3 = document.getElementById("glide3");

if (glide1)
    new Glide(glide1, {
        type: "carousel",
        startAt: 0,
        autoplay: 3000,
        hoverpause: true,
        perView: 1,
        animationDuration: 800,
        animationTimingFunc: "linear",
    }).mount();