document.addEventListener("DOMContentLoaded", function () {
    const url = new URL(window.location.href);
    const selectedTab = url.searchParams.get("tab");
    if (selectedTab) {
        const tab = document.getElementById(`transparency-tab-${selectedTab}`);
        tab.click();
    }
});
