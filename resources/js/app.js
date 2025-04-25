// import './bootstrap';


document.addEventListener(("DOMContentLoaded"), function() {

    // YOUR JOURNALS PAGE

    // toggle sidebar
    const toggleSidebar = () => {
        const toggleBtns = document.querySelectorAll(".sidebar-icon")
        const sidebar = document.getElementById("sidebar")

        toggleBtns.forEach((Btn) => {
            Btn.addEventListener(("click"), function() {
                sidebar.classList.toggle("open")
            })
        })
    }

    toggleSidebar();


})
