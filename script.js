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
  document.getElementById("contact-form").addEventListener("submit", function (e) {

    e.preventDefault();
  
    const formData = new FormData(this);
    const responseDiv = document.getElementById("formResponse");
  
    fetch("contact.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        responseDiv.innerHTML = `<p>${data}</p>`;
        responseDiv.style.color = "green";
      })
      .catch((error) => {
        responseDiv.innerHTML = `<p>Error sending your message. Please try again later.</p>`;
        responseDiv.style.color = "red";
      });
  });
  
