// import './bootstrap';
import Trix from "trix";

document.addEventListener(("DOMContentLoaded"), function() {

    Trix.config.toolbar.getDefaultHTML = toolbarDefaultHTML;

    function toolbarDefaultHTML() {
        const { lang } = Trix.config;

        return `<div class="trix-button-row">
                    <span class="trix-button-group trix-button-group--text-tools" data-trix-button-group="text-tools">
                        <button type="button" class="trix-button trix-button--icon trix-button--icon-bold" data-trix-attribute="bold" data-trix-key="b" title="${lang.bold}" tabindex="-1">${lang.bold}</button>
                        <button type="button" class="trix-button trix-button--icon trix-button--icon-italic" data-trix-attribute="italic" data-trix-key="i" title="${lang.italic}" tabindex="-1">${lang.italic}</button>
                        <button type="button" class="trix-button trix-button--icon trix-button--icon-strike" data-trix-attribute="strike" title="${lang.strike}" tabindex="-1">${lang.strike}</button>
                    </span>
      
                    <span class="trix-button-group trix-button-group--history-tools" data-trix-button-group="history-tools">
                        <button type="button" class="trix-button trix-button--icon trix-button--icon-undo" data-trix-action="undo" data-trix-key="z" title="${lang.undo}" tabindex="-1">${lang.undo}</button>
                        <button type="button" class="trix-button trix-button--icon trix-button--icon-redo" data-trix-action="redo" data-trix-key="shift+z" title="${lang.redo}" tabindex="-1">${lang.redo}</button>
                    </span>
                </div>`;
    }

    document.addEventListener("trix-before-initialize", updateToolbars, { onece: true } );

    function updateToolbars(event) {
        const toolbars = document.querySelectorAll("trix-toolbar");
        const html = Trix.config.toolbar.getDefaultHTML();
        toolbars.forEach((toolbar) => (toolbar.innerHTML = html));
    }

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
                const grandParent = btn.closest("div").parentElement;
                const elementsToToggle = grandParent.querySelectorAll(".hidden-when-medium");

                elementsToToggle.forEach((element) => {
                    element.classList.toggle("hidden-when-medium")
                })
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
                const elementsToToggle = parent.querySelectorAll(".btn-wrapper, .public-label, .edit-icon");

                elementsToToggle.forEach((element) => {
                    element.classList.toggle("hidden-when-medium")
                })
                btn.classList.toggle("hidden-when-medium");
            });

        });
    }

    const toggleIconList = () => {
        const toggleBtn = document.querySelector(".user-icon-input-btn");
        if (!toggleBtn) return;

        toggleBtn.addEventListener("click", () => {
            const iconList = document.querySelector(".icon-list");
            iconList.classList.toggle("hidden");
        });
    }

    // TODO update alert function
    const editCancelBtnFunction = () => {
        const toggleBtns = document.querySelectorAll(".edit-btn");

        toggleBtns.forEach((btn) => {
            const grandParent = btn.closest("div").parentElement;
            const checkBox = grandParent.querySelector(".small-checkbox");
            let originallyIsChecked;
            if (checkBox) {originallyIsChecked = checkBox.checked;}
            const trixInput = grandParent.querySelector(".trix-input");
            const originalContentText = trixInput.value;
            const trixEditor = grandParent.querySelector("#trix-editor");
            const trixToolbar = grandParent.querySelector(".small-toolbar");
            
            btn.addEventListener("click", function() {
                const btnsToToggle = grandParent.querySelectorAll(".btn-to-toggle");
                const isEditable = trixEditor.getAttribute("contenteditable") === "true"

                if (isEditable) {
                    alert(`The change you made won't be saved. 
Are you sure to cancel the edit?`);
                    if (checkBox) {checkBox.checked = originallyIsChecked;}
                    trixInput.value = originalContentText;
                    trixEditor.editor.loadHTML(originalContentText);
                    trixEditor.setAttribute("contenteditable", "false");
                    btn.innerText = "Edit";
                } else {
                    trixEditor.setAttribute("contenteditable", "true");
                    btn.innerText = "Cancel";
                }

                trixToolbar.classList.toggle("hidden");
                trixEditor.classList.toggle("editor-abled");
                if (checkBox) {checkBox.disabled = !checkBox.disabled;}
                btnsToToggle.forEach((btnToToggle) => {
                    btnToToggle.classList.toggle("hover-effect");
                    btnToToggle.disabled = !btnToToggle.disabled;
                });

            });
        });
    }

    const resetBtnOnExpanded = () => {
        const resetBtn = document.getElementById("content-reset-btn");
        if (!resetBtn) return;

        const input = document.querySelector(".trix-input-to-edit");
        const originalContentText = input.value;
        const checkBox = document.querySelector(".small-checkbox");
        let originallyIsChecked;
        if (checkBox) {originallyIsChecked = checkBox.checked;}
        const trixEditor = document.getElementById("trix-editor");

        resetBtn.addEventListener("click", () => {
            alert(`The change you made won't be saved. 
Are you sure to cancel the edit?`);
            if (checkBox) {checkBox.checked = originallyIsChecked;}
            input.value = originalContentText;
            trixEditor.editor.loadHTML(originalContentText);            
        });
    }

    const toggleTag = () => {
        const toggleBtns = document.querySelectorAll(".tag-wrapper");
        if (!toggleBtns) return;

        toggleBtns.forEach((btn) => {
            btn.addEventListener("click", async () => {
                const contentId = btn.dataset.id;

                try {
                    const response = await fetch(`/content/${contentId}/restore-tag`, {
                        method: "PATCH",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").content,
                            "Accept": "application/json",
                            "Content-Type": "application/json"
                        }
                    });

                    const result = await response.json();

                    if (result.success) {
                        document.querySelectorAll(`.tag-wrapper[data-id='${contentId}']`).forEach((btn) => {
                            btn.classList.toggle("hidden");
                        });
                    }

                } catch (error) {
                    console.log("failed to restore the tag", error);
                }

            })
        })
    }

    // TODO make simplify the three similar fucntions below
    // 1
    const togglePublicTag = () => {
        const toggleBtns = document.querySelectorAll(".p-tag-wrapper");
        if (!toggleBtns) return;

        toggleBtns.forEach((btn) => {
            btn.addEventListener("click", async () => {
                const contentId = btn.dataset.id;

                try {
                    const response = await fetch(`/everyone/${contentId}/restore-tag`, {
                        method: "PATCH",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").content,
                            "Accept": "application/json",
                            "Content-Type": "application/json"
                        }
                    });

                    const result = await response.json();

                    if (result.success) {
                        document.querySelectorAll(`.p-tag-wrapper[data-id='${contentId}']`).forEach((btn) => {
                            btn.classList.toggle("hidden");
                        });
                    }

                } catch (error) {
                    console.log("failed to restore the tag", error);
                }

            })
        })
    }

    // 2
    const toggleHeart = () => {
        const toggleBtns = document.querySelectorAll(".heart-wrapper");
        if (!toggleBtns) return;

        toggleBtns.forEach((btn) => {
            btn.addEventListener("click", async () => {
                const contentId = btn.dataset.id;
                const isSentHeart = btn.dataset.heart;

                try {
                    const response = await fetch(`/everyone/${contentId}/restore-heart`, {
                        method: "PATCH",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").content,
                            "Accept": "application/json",
                            "Content-Type": "application/json"
                        }
                    });

                    const result = await response.json();

                    if (result.success) {
                        btn.dataset.heart = !isSentHeart;
                        const imagesToToggle = btn.querySelectorAll(".toggle")
                        imagesToToggle.forEach((img) => {
                            img.classList.toggle("hidden");
                        });
                    }

                } catch (error) {
                    console.log("failed to restore the heart", error);
                }

            })
        })
    }

    // 3
    const toggleHug = () => {
        const toggleBtns = document.querySelectorAll(".hug-wrapper");
        if (!toggleBtns) return;

        toggleBtns.forEach((btn) => {
            btn.addEventListener("click", async () => {
                const contentId = btn.dataset.id;
                const isSentHug = btn.dataset.hug;

                try {
                    const response = await fetch(`/everyone/${contentId}/restore-hug`, {
                        method: "PATCH",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").content,
                            "Accept": "application/json",
                            "Content-Type": "application/json"
                        }
                    });

                    const result = await response.json();

                    if (result.success) {
                        btn.dataset.hug = !isSentHug;
                        const imagesToToggle = btn.querySelectorAll(".toggle")
                        imagesToToggle.forEach((img) => {
                            img.classList.toggle("hidden");
                        });
                    }

                } catch (error) {
                    console.log("failed to restore the heart", error);
                }

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
            if (currentPath.startsWith("/content")) {
                newPath ="/content/filter";
            } else if (currentPath.startsWith("/everyone")) {
                newPath ="/everyone/filter";
            }
            url.pathname = newPath;
            url.searchParams.set("order", ev.target.value);
            window.location.href = url.toString();
        });
    }

    // adjust form inputs to include the order
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
        
    const profileSettingResetBtn = () => {
        const resetBtns = document.querySelectorAll(".filter-reset-btn");
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

    const profileHiddenUserIconInput = () => {
        const iconListItems = document.querySelectorAll(".icon-li-btn");
        if (!iconListItems) return;
        const hiddenInput = document.getElementById("hidden-input");
        const selectedUserIcon = document.querySelector(".user-icon-profile");

        iconListItems.forEach((li) => {
            li.addEventListener("click", () => {
                hiddenInput.value = li.dataset.id;
                selectedUserIcon.src = li.dataset.src;
            });
        });
    }
    
    // TODO make confirmation function to delete a content

    toggleSidebar();
    toggleFilter();
    toggleEdit();
    toggleEditReverse();
    toggleIconList();
    editCancelBtnFunction();
    toggleTag();
    togglePublicTag();
    toggleHeart();
    toggleHug();
    toTop();
    orderDropdown();
    adjustForm();
    profileSettingResetBtn();
    resetBtnOnExpanded();
    profileHiddenUserIconInput();
});
