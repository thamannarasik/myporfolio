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
    e.preventDefault(); // Prevent the default form submission
  
    const formData = new FormData(this); // Collect the form data
    
    // Send the form data using AJAX
    $.ajax({
      url: "contact.php", 
      method: "POST", 
      data: formData, 
      processData: false, 
      contentType: false, 
      success: function (data) {
        
        $('#formResponse').html('<p>' + data + '</p>').css('color', 'green');
      },
      error: function () {
        
        $('#formResponse').html('<p>Error sending your message. Please try again later.</p>').css('color', 'red');
      }
    });
  });
  