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