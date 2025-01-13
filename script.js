function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}

document.addEventListener("DOMContentLoaded", () => {
    console.log("DOM fully loaded and parsed!");
    const preloader = document.getElementById("preloader");
    if (preloader) {
      console.log("Hiding preloader...");
      preloader.style.display = "none";
    } else {
      console.error("Preloader element not found!");
    }
  });
