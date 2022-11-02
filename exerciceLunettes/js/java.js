const imgList = document.getElementsByClassName('rotate')

console.log(imgList)

Array.from(imgList).forEach((img)=> {
    img.addEventListener('click', function () {
        img.style.transform = 'rotate(5deg)';
    })
})

// img.addEventListener('click', function () {
//         img.style.transform = 'rotate(5deg)';
//     })