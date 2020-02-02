// class caroussel {

//     constructor(element, options = {}) {

//     }
// }

// document.addEventListener("DOMContentLoaded", () => {
//     new caroussel(document.querySelector(".caroussel"), {
//         slidesToScroll: 3,
//         slidesVisible: 3
//     })

// })







document.addEventListener("DOMContentLoaded", () => {

    const items = document.querySelectorAll(".caroussel-item")
    const arrowNext = document.querySelector(".arrow-next")
    const arrowBack = document.querySelector(".arrow-back")
    let carousselBool = false





    arrowNext.addEventListener("click", () => {

        if (carousselBool == false) {
            for (let item of items) {
                item.style.transform = "translateX(-108%)"
            }
            carousselBool = !carousselBool
            arrowNext.style.opacity = "0.3"
            arrowBack.style.opacity = "1"
        }
    })


    arrowBack.addEventListener("click", () => {

        if (carousselBool == true) {
            for (let item of items) {
                item.style.transform = "translateX(0%)"
            }
            carousselBool = !carousselBool
            arrowNext.style.opacity = "1"
            arrowBack.style.opacity = ".3"
        }
    })














})