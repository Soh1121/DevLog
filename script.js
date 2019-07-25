document.getElementById('responsive-btn').addEventListener('click', function (e) {
    const menu_btn = document.getElementById('menu-btn')
    const close_btn = document.getElementById('close-btn')
    const nav = document.getElementById('nav')

    if (menu_btn.style.display === "") {
        menu_btn.style.display = "none"
    } else {
        menu_btn.style.display = ""
    }
    if (close_btn.style.display === "") {
        close_btn.style.display = "inline"
    } else if (close_btn.style.display === "none") {
        close_btn.style.display = "inline"
    } else {
        close_btn.style.display = "none"
    }
    console.log(nav.style.display)
})
