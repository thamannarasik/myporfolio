function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}

document.getElementById("contact-form").addEventListener("submit", function (e) {
  e.preventDefault(); 

  const formData = new FormData(this); 
  
  // Send the form data using AJAX
  $.ajax({
    url: "contact.php", 
    method: "POST", // HTTP method
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

  
