require('@fortawesome/fontawesome-free/js/all')

// var iconPlus = '<path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>'

// setTimeout(function(){
//     let icon = document.getElementsByClassName('fa-plus-square-o')
//     let arrayIcon = Array.from(icon)
//     console.log(arrayIcon)

//     arrayIcon.forEach(element => {
//         element.innerHTML = iconPlus
//     })
// }, 1500);


var type = document.getElementsByName('type')
var link = document.getElementsByName('link')

if (link[0] !== undefined) {
    if (link[0].value.length < 1) {
        type[1].checked = true
    }
}
