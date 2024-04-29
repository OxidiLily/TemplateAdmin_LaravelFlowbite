document.addEventListener("DOMContentLoaded", function() {
    const darkModeToggle = document.getElementById("darkModeToggle");
    const darkIcon = document.getElementById("dark-icon");
    const lightIcon = document.getElementById("light-icon");
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
    const currentTheme = localStorage.getItem("color-theme");

    if (currentTheme === "dark" || (!currentTheme && prefersDarkScheme.matches)) {
        document.body.classList.add("dark");
        lightIcon.classList.remove('hidden');
    } else {
        document.body.classList.remove("dark");
        darkIcon.classList.remove('hidden');
    }

    darkModeToggle.addEventListener("click", function() {
        lightIcon.classList.toggle('hidden');
        darkIcon.classList.toggle('hidden');
        if (document.body.classList.contains("dark")) {
            document.body.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.body.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    });

    prefersDarkScheme.addEventListener("change", function(e) {
        const newTheme = e.matches ? "dark" : "light";
        localStorage.setItem("color-theme", newTheme);

        if (newTheme === "dark") {
            document.body.classList.add("dark");
        } else {
            document.body.classList.remove("dark");
        }
    });
});