window.addEventListener('scroll', function() {// show header when scrowing down
    const navbar = document.getElementById('navbar');
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
  });
  document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('loginForm');

    if (form) {
        form.addEventListener('submit', function(event) {
            console.log('Form submitted'); // Add this line
            event.preventDefault();

            var formData = new FormData(this);

            console.log('Sending AJAX request'); // Add this line
            fetch('login.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data); // Add this line
                if (data.message) {
                    data.message.forEach((msg) => {
                        alert(msg);
                    });
                } else if (data.success) {
                    window.location.href = 'home.php';
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });
    }
});