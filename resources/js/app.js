// import './bootstrap';
import Trix from "trix";

document.addEventListener(("DOMContentLoaded"), function() {

    // TODO figure out how to overwrite the toolbar
    // document.addEventListener("trix-before-initialize", () => {
    //     Trix.config.toolbar.getDefaultHTML = () => {
    //         return `<div class="trix-button-row">
    //         <span class="trix-button-group trix-button-group--text-tools" data-trix-button-group="text-tools">
    //           <button type="button" class="trix-button trix-button--icon trix-button--icon-bold" data-trix-attribute="bold" data-trix-key="b" title="${lang.bold}" tabindex="-1">${lang.bold}</button>
    //           <button type="button" class="trix-button trix-button--icon trix-button--icon-italic" data-trix-attribute="italic" data-trix-key="i" title="${lang.italic}" tabindex="-1">${lang.italic}</button>
    //           <button type="button" class="trix-button trix-button--icon trix-button--icon-strike" data-trix-attribute="strike" title="${lang.strike}" tabindex="-1">${lang.strike}</button>
    //         </span>
      
    //         <span class="trix-button-group trix-button-group--history-tools" data-trix-button-group="history-tools">
    //           <button type="button" class="trix-button trix-button--icon trix-button--icon-undo" data-trix-action="undo" data-trix-key="z" title="${lang.undo}" tabindex="-1">${lang.undo}</button>
    //           <button type="button" class="trix-button trix-button--icon trix-button--icon-redo" data-trix-action="redo" data-trix-key="shift+z" title="${lang.redo}" tabindex="-1">${lang.redo}</button>
    //         </span>
    //       </div>`;
    //     };
    // });

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
        if (!toggleBtn) return

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
            const url = new URL(window.location.href)
            const currentPath = url.pathname;
            let newPath = "";
            if (currentPath.startsWith("/journal")) {
                newPath ="/journal/filter";
            } else if (currentPath.startsWith("/everyone")) {
                newPath ="/everyone/filter";
            }
            url.pathname = newPath;
            url.searchParams.set("order", ev.target.value);
            window.location.href = url.toString();
        });
    }

    // adjust fotm inputs to include the order
    const adjustForm = () => {
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
        
    const resetBtn = () => {
        const resetBtns = document.querySelectorAll(".reset-btn");
        if(!resetBtns) return;

        resetBtns.forEach((btn) => {
            btn.addEventListener("click", function() {
                const url = new URL(window.location.href);
                const orderValue = url.searchParams.get("order");
                url.search = "";
                if (orderValue) {
                    url.searchParams.set("order", orderValue);
                }

                window.location.href = url.toString();
            })
        })
    }

    // const expandBtn = () => {
    //     const expandBtns = document.querySelectorAll(".expand-btn");
    //     if(!expandBtns) return;

    //     expandBtns.forEach((btn) => {
    //         btn.addEventListener("click", () => {

    //         })
    //     })
    // }

    toggleSidebar();
    toggleFilter();
    toggleEdit();
    toggleEditReverse();
    toggleHoverEffect();
    toggleTag();
    toggleHeartHug();
    toTop();
    orderDropdown();
    adjustForm();
    resetBtn();

})
