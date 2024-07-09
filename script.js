function submitForm(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    const url = 'https://script.google.com/macros/s/AKfycbyiG89Q2t03eWP3XB6P4YX32pRL_p54f6yFFrl1htInUw6JL1u5QZBbn2Por1lInV56RQ/exec'; // Replace with your Web App URL

    fetch(url, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        alert(result);
        form.reset(); // Optionally reset the form after successful submission
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while submitting the form.');
    });
}

document.getElementById('eventForm').addEventListener('submit', submitForm);
