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
  
  document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default form submission

    const form = event.target;
    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        const responseDiv = document.getElementById('formResponse');
        if (data.status === 'success') {
            responseDiv.innerHTML = `<p style="color: green;">${data.message}</p>`;
        } else {
            responseDiv.innerHTML = `<p style="color: red;">${data.message}</p>`;
        }
    })
    .catch(error => {
        document.getElementById('formResponse').innerHTML = `<p style="color: red;">An error occurred: ${error.message}</p>`;
    });
});

