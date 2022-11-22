var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
    },
});

// ------------------ Start Go To Top
let ScrolTop = document.querySelector(".go-top"),
    stickyNavbar = document.querySelector('.sticky_navbar'),
    body = document.querySelector("html , body");
window.addEventListener("scroll", () => {
    if (body.scrollTop >= 200) {
        ScrolTop.style.display = "block";
        ScrolTop.addEventListener("click", () => {
            window.scrollTo(0, 0);
        });
    } else {
        ScrolTop.style.display = "none";
    }
});
// ------------------ End Go To Top

// ------------------ Start side menu
let sideMenu = document.querySelector('.side_menu'),
    overlayMenu = document.querySelector('.overlay-menu'),
    btnMenu = document.querySelector('.menu_icon');

    btnMenu.addEventListener('click', ()=>{
        sideMenu.classList.add('open')
        overlayMenu.classList.add('showOverlayBlock')
        setTimeout(function() {
            overlayMenu.classList.add('showOverlayOpacity');
        }, 100);
    })

    overlayMenu.addEventListener('click', ()=>{
        sideMenu.classList.remove('open')
        overlayMenu.classList.remove('showOverlayOpacity')
        setTimeout(function() {
            overlayMenu.classList.remove('showOverlayBlock');
        }, 700);
    })










// window.addEventListener('scroll', () => {
//     if (body.scrollTop >= 200) {
//         stickyNavbar.style.display = "block"
//     } else {
//         stickyNavbar.style.display = "none"
//     }
// })
