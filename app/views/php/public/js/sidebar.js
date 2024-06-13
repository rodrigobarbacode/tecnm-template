
function toggleSubmenu(classname) {
    const elements = document.querySelectorAll('.'+classname);

    elements.forEach(element =>{
        element.classList.toggle('d-none')
    })
}