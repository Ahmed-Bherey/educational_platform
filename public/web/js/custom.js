var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
    },
});

// let imgBtn = document.querySelectorAll('.imgBtn'),
//     overlay = document.querySelector('#overflew'),
//     video = document.querySelectorz('#subject_video')

// for (let i = 0; i < imgBtn.length; i++) {
//     imgBtn[i].addEventListener('click',()=>{
//         overlay.classList.add('showOverlay')

//         video.classList.add('video')
//     })
// }

// overlay.addEventListener('click',()=>{
//     overlay.classList.remove('showOverlay')
//     video.classList.remove('video')
// })

// dark mood

let SkinIcon = document.querySelector('#skin_icon'),
    DarkTheme = document.querySelector('.dark_mood'),
    LightTheme = document.querySelector('.light_mood');

DarkTheme.addEventListener('click', () => {
    SkinIcon.setAttribute("href", "public/web/css/dark_style.css");
    localStorage.setItem('dark_theme', "public/web/css/dark_style.css");
});

if (localStorage.getItem('dark_theme')) {
    SkinIcon.setAttribute("href", "public/web/css/dark_style.css");
}

LightTheme.addEventListener('click', () => {
    SkinIcon.setAttribute("href", "public/web/css/style.css");
    localStorage.removeItem('dark_theme');
});
