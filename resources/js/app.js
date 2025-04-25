// import './bootstrap';


document.addEventListener(("DOMContentLoaded"), function() {

    // toggle sidebar
    const toggleSidebar = () => {
        const toggleBtns = document.querySelectorAll(".sidebar-icon");
        const sidebar = document.getElementById("sidebar");

        toggleBtns.forEach((btn) => {
            btn.addEventListener(("click"), function() {
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

    // YOUR JOURNALS PAGE

    // toggle edit icon and small btn wrapper
    const toggleEdit = () => {
        const toggleBtns = document.querySelectorAll(".edit-icon");
        
        toggleBtns.forEach((btn) => {
            btn.addEventListener(("click"), function() {
                const parent = btn.closest("div");
                const smallBtnsWrapper = parent.querySelector(".btn-wrapper");
                const editRemoveIcon = parent.querySelector(".edit-remove-icon")

                smallBtnsWrapper.classList.toggle("hidden-when-medium");
                editRemoveIcon.classList.toggle("hidden-when-medium");
                btn.classList.toggle("hidden-when-medium");
            })

        })
    }

    // do the same as above but in reverse
    const toggleEditReverse = () => {
        const toggleBtns = document.querySelectorAll(".edit-remove-icon");
        
        toggleBtns.forEach((btn) => {
            btn.addEventListener(("click"), function() {
                const parent = btn.closest("div");
                const smallBtnsWrapper = parent.querySelector(".btn-wrapper");
                const editIcon = parent.querySelector(".edit-icon")

                smallBtnsWrapper.classList.toggle("hidden-when-medium");
                btn.classList.toggle("hidden-when-medium");
                editIcon.classList.toggle("hidden-when-medium");
            })

        })
    }

    toggleSidebar();
    toggleFilter();
    toggleEdit();
    toggleEditReverse();

})
