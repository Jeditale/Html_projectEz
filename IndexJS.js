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
document.querySelector('.start-button').addEventListener('click', function(event) {
  event.preventDefault();
  const whatifarm = document.querySelector('.whatifarm');
  const y = whatifarm.getBoundingClientRect().top + window.pageYOffset - 60; // Adjust scroll position by 100px
  window.scrollTo({top: y, behavior: 'smooth'});
});
window.onload = function() {
  fetch('./LoginAndRegister/loginstatus.php')
      .then(response => response.json())
      .then(data => {
          var profileLink = document.querySelector('.profile-link');
          if (data.loggedIn) {
              profileLink.href = './LoginAndRegister/home.php';
              profileLink.textContent = 'Profile';
          } else {
              profileLink.href = './LoginAndRegister/login.php';
              profileLink.textContent = 'Login';
          }
      });
}