let tabElements = document.querySelectorAll('button[id^="transparency-tab-"]');
tabElements.forEach((tab) => {
    tab.addEventListener("show.bs.tab", function (event) {
        tabElements.forEach((tabEl) => {
            tabEl.classList.remove("active");
        });
        const id = event.target.id;
        let foundedTab;
        if (id.includes("-mobile")) {
            const newId = id.replace("-mobile", "");
            foundedTab = document.querySelector(`#${newId}`);
        } else {
            foundedTab = document.querySelector(`#${id}-mobile`);
        }

        if (foundedTab) {
            foundedTab.classList.add("active");
        }
    });
});
