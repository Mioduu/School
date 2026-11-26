function changeImg(clickedImg) {
    let mainImg = document.querySelector(".obraz")
    if(!mainImg) {
        console.log("Nie odnaleziono elementu o klasie obraz")
    }

    let imageName = clickedImg.getAttribute('src')
    mainImg.setAttribute('src', imageName)
}

function openWindow() {
    let obrazOkno = document.querySelector(".obrazOkno")
    let okno = document.querySelector(".okno")

    okno.style.display = "block"
    let imgToCopy = document.querySelector(".obraz")
    if (!imgToCopy) {
        console.log("Nie odnaleziono elementu o klasie obraz")
    }

    let imgSource = imgToCopy.getAttribute('src')
    obrazOkno.setAttribute('src', imgSource)
}

function closeWindow() {
    let okno = document.querySelector(".okno")
    okno.style.display = "none"
    
}