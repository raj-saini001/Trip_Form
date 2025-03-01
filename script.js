let form = document.getElementById('tripForm');


form.addEventListener('submit', function(event) {
    event.preventDefault();

    let name = document.querySelector('#name').value.trim();
    let age = document.querySelector('#age').value.trim();
    let email = document.querySelector('#email').value.trim();
    let gender = document.querySelector('#gender').value.trim();
    let description = document.querySelector('#desc').value.trim();

    if (!name || !age || !email || !gender || !description) {
        alert('All fields are required.');
        return;
    }

})

let formData = new FormData(this);

let xhr = new XMLHttpRequest();

xhr.open('POST', 'http://localhost/pro/', true);

xhr.onload = function() {
    if (xhr.status>=200 && xhr.status<300){
        alert("Form submitted successfully!");
        console.log("Response: ", xhr.responseText);
        document.getElementById("tripForm").reset();
    } else {
        alert("Error submitting form: ");
        console.error("Error:",xhr.responseText);
    }
};

xhr.onerror = function() {
    alert("Requestfailed.");
};