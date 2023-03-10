document.addEventListener("scroll", () => {
    fadeOnScroll();
});

document.addEventListener("DOMContentLoaded", () => {
    fadeOnScroll();
});

function fadeOnScroll() {
    document.getElementById("main-header").style.opacity = Math.max(
        0,
        1 - (window.scrollY * 4) / window.innerHeight
    );

    if (document.getElementById("hero-image")) {
        document.getElementById("hero-image").style.opacity = Math.max(
            0,
            1 - (window.scrollY * 1.2) / window.innerHeight
        );
    }

    document.getElementById("hero-text").style.opacity = Math.max(
        0,
        1 - (window.scrollY * 2) / window.innerHeight
    );

    document.getElementById("main-header").style.transform = `translateY(${
        -window.scrollY / 2
    }px)`;
}
