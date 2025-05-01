// import './bootstrap';


document.addEventListener(("DOMContentLoaded"), function() {

    // toggle sidebar
    const toggleSidebar = () => {
        const toggleBtns = document.querySelectorAll(".sidebar-icon");
        const sidebar = document.getElementById("sidebar");

        toggleBtns.forEach((btn) => {
            btn.addEventListener("click", function() {
                sidebar.classList.toggle("open");
            });
        });
    }

    // toggle filter group
    const toggleFilter = () => {
        const toggleBtn = document.querySelector(".filter-btn");
        const filterGroup = document.getElementById("filter-weapper");

        toggleBtn.addEventListener("click", function() {
            filterGroup.classList.toggle("hidden-when-medium");
        });
    }

    // YOUR JOURNALS PAGE

    // toggle edit icon and small btn wrapper
    const toggleEdit = () => {
        const toggleBtns = document.querySelectorAll(".edit-icon");
        
        toggleBtns.forEach((btn) => {
            btn.addEventListener("click", function() {
                const parent = btn.closest("div");
                const smallBtnsWrapper = parent.querySelector(".btn-wrapper");
                const editRemoveIcon = parent.querySelector(".edit-remove-icon")

                smallBtnsWrapper.classList.toggle("hidden-when-medium");
                editRemoveIcon.classList.toggle("hidden-when-medium");
                btn.classList.toggle("hidden-when-medium");
            });

        });
    }

    // do the same as above but in reverse
    const toggleEditReverse = () => {
        const toggleBtns = document.querySelectorAll(".edit-remove-icon");
        
        toggleBtns.forEach((btn) => {
            btn.addEventListener("click", function() {
                const parent = btn.closest("div");
                const smallBtnsWrapper = parent.querySelector(".btn-wrapper");
                const editIcon = parent.querySelector(".edit-icon")

                smallBtnsWrapper.classList.toggle("hidden-when-medium");
                btn.classList.toggle("hidden-when-medium");
                editIcon.classList.toggle("hidden-when-medium");
            });

        });
    }

    // Make it to be able when clicking "edit"
    const toggleHoverEffect = () => {
        const toggleBtns = document.querySelectorAll(".edit-btn");

        toggleBtns.forEach((btn) => {
            btn.addEventListener("click", function() {
                const parent = btn.closest("div");
                const btnsToToggle = parent.querySelectorAll(".btn-to-toggle");
                const checkBox = parent.querySelector(".small-checkbox");
                const editText = btn.innerText;

                checkBox.disabled = !checkBox.disabled;
                btnsToToggle.forEach((btnToToggle) => {
                    btnToToggle.classList.toggle("hover-effect");
                });

                if (editText === "Edit") {
                    btn.innerText = "Cancel";
                    return;
                }

                btn.innerText = "Edit";

            });
        });
    }

    const toggleTag = () => {
        const toggleBtns = document.querySelectorAll(".tag-wrapper");

        toggleBtns.forEach((btn) => {
            btn.addEventListener("click", function() {
                const parent = btn.closest("div");
                const tags = parent.querySelectorAll(".tag-wrapper")

                tags.forEach((tag) => {
                    tag.classList.toggle("hidden");
                });
            })
        })
    }

    const toggleHeartHug = () => {
        const toggleBtns = document.querySelectorAll(".toggle");

        toggleBtns.forEach((btn) => {
            btn.addEventListener("click", function() {
                const parent = btn.closest("button");
                const tags = parent.querySelectorAll(".toggle")

                tags.forEach((tag) => {
                    tag.classList.toggle("hidden");
                });
            })
        })
    }


    const toTop = () => {
        const btns = document.querySelectorAll(".toTopBtn");

        btns.forEach((btn) => {
            btn.addEventListener("click", function() {
                window.scrollTo({top:0, behavior: "auto"})
            })
        })
    }

    const orderDropdown = () =>  {
        const orderDropdown = document.querySelector(".order-dropdown");
        if (!orderDropdown) return;

        const url = new URL(window.location.href);
        const orderValue = url.searchParams.get("order");

        if (orderValue) {
            orderDropdown.value = orderValue;
        }

        orderDropdown.addEventListener("change", function(ev) {
            const url = new URL("/filter", window.location.origin);
            url.searchParams.set("order", ev.target.value);
            window.location.href = url.toString();
        });
    }

    // adjust fotm inputs to include the order
    const formAdjust = () => {
        const searchForms = document.querySelectorAll(".search-form");
        if(!searchForms) return;

        const url = new URL(window.location.href);
        const orderValue = url.searchParams.get("order");
        if(!orderValue) return;

        searchForms.forEach((form) => {
            form.addEventListener("submit", function(ev) {
                const input = document.createElement("input");
                input.type = "hidden";
                input.name = "order";
                input.value = orderValue;
                form.appendChild(input);
            });
        });
        


    }

    toggleSidebar();
    toggleFilter();
    toggleEdit();
    toggleEditReverse();
    toggleHoverEffect();
    toggleTag();
    toggleHeartHug();
    toTop();
    orderDropdown();
    formAdjust();

})
