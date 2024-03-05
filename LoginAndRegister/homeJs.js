window.addEventListener('scroll', function() {// show header when scrowing down
    const navbar = document.getElementById('navbar');
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
  });
  
  window.addEventListener('scroll', function() {//hide footer when scroll to the bottom
    const footer = document.getElementById('footer');
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        footer.classList.add('hide');
    } else {
        footer.classList.remove('hide');
    }
  });
  window.onload = function() {
    fetch('loginstatus.php')
        .then(response => response.json())
        .then(data => {
            var profileLink = document.querySelector('.profile-link');
            if (data.loggedIn) {
                profileLink.href = '';
                profileLink.textContent = 'Profile';
            } else {
                profileLink.href = 'login.php';
                profileLink.textContent = 'Login';
            }
        });
  }
  $.ajax({
    url: 'Loginstatus.php',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
        if (!response.loggedIn) {
            window.location.href = "/login.php"; 
        }
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
    }
});