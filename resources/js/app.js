// import './bootstrap';


document.addEventListener(("DOMContentLoaded"), function() {

    // YOUR JOURNALS PAGE

    // toggle sidebar
    const toggleSidebar = () => {
        const toggleBtns = document.querySelectorAll(".sidebar-icon");
        const sidebar = document.getElementById("sidebar");

        toggleBtns.forEach((Btn) => {
            Btn.addEventListener(("click"), function() {
                sidebar.classList.toggle("open");
            })
        })
    }

    // toggle filter group
    const toggleFilter = () => {
        const toggleBtn = document.querySelector(".filter-btn");
        const filterGroup = document.getElementById("filter-weapper");

        toggleBtn.addEventListener(("click"), function() {
            filterGroup.classList.toggle("hidden");
        })
    }

    toggleSidebar();
    toggleFilter();


})
