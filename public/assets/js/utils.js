const toggleMenu = ()=>{
    document.getElementById('mobileMenu').classList.toggle('hidden')
    document.getElementsByTagName('body')[0].classList.toggle('overflow-hidden')
}

const toggleModalSearching = ()=>{
    document.getElementById('modalSearching').classList.toggle('hidden')
    document.getElementsByTagName('body')[0].classList.toggle('overflow-hidden')
}