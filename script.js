document.addEventListener("DOMContentLoaded", function () {
    //document.querySelector("form").addEventListener("submit", (event) => {
      //  console.log("Form submission intercepted.");
        //event.preventDefault(); 
    //});
        console.log("DOM fully loaded and parsed!");
        const preloader = document.getElementById("preloader");
        if (preloader) {
          console.log("Hiding preloader...");
          preloader.style.display = "none";
        } else {
          console.error("Preloader element not found!");
        }
    
      document.getElementById('email').addEventListener('input', function () {
        // Trim and remove hidden characters from the email input
        this.value = this.value.trim().replace(/[\u200B-\u200D\uFEFF]/g, '');
    });
    document.getElementById('email').addEventListener('focusout', function () {
        this.value = this.value.trim().replace(/[\u200B-\u200D\uFEFF]/g, '');
    });
    
    
    
      document.getElementById('contactForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission
    
        const form = event.target;
        const formData = new FormData(form);
        const name = formData.get('name').trim();
        const email = formData.get('email').trim();
        const message = formData.get('message').trim();
    
        if (!name || !email  || !message) {
            alert("All fields are required.");
            return;
        }
        for (let [key, value] of formData.entries()) {
            console.log(key, value); // Logs all key-value pairs
        }
        const emailField = document.getElementById('email');
        emailField.value = emailField.value.trim().replace(/[\u200B-\u200D\uFEFF]/g, ''); // Normalize email
        formData.set('email', emailField.value);
        
        setTimeout(() => {
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                    'Cache-Control': 'no-cache',
                'Accept': 'application/json',
            },
        })
        .then((response) => {
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
    }, 100); 
    });
});
