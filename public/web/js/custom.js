var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
    },
});

let imgBtn = document.querySelectorAll('.imgBtn'),
    overlay = document.querySelector('#overflew'),
    video = document.querySelector('#subject_video')

for (let i = 0; i < imgBtn.length; i++) {
    imgBtn[i].addEventListener('click',()=>{
        overlay.classList.add('showOverlay')

        video.classList.add('video')
    })
}

overlay.addEventListener('click',()=>{
    overlay.classList.remove('showOverlay')
    video.classList.remove('video')
})