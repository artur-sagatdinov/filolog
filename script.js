var menuBtn = document.querySelector(".menu__btn");
var isScrollEnabled = true;

menuBtn.addEventListener("click", function () {
    if (isScrollEnabled) {
        menuBtn.style.position = "fixed";
        isScrollEnabled = false;
    } else {
        menuBtn.style.position = "relative";
        isScrollEnabled = true;
    }
});
