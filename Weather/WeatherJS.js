window.onload; {
    fetch('../LoginAndRegister/loginstatus.php')
        .then(response => response.json())
        .then(data => {
            var profileLink = document.querySelector('.profile-link');
            if (!data.loggedIn) {
                window.location.replace('../LoginAndRegister/login.php');
            } 
        });
    }
window.addEventListener('scroll', function() {// show header when scrowing down
    const navbar = document.getElementById('navbar');
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
  });
document.querySelectorAll('.toggle-pump').forEach(button => {
    button.addEventListener('click', event => {
        const statusElement = event.target.parentElement.querySelector('.status');
        const currentStatus = statusElement.textContent;
        const newStatus = currentStatus === 'Off' ? 'On' : 'Off';
        statusElement.textContent = newStatus;
    });
});
function checkPumpStatus() {
    const pumps = document.querySelectorAll('.pump');

    pumps.forEach(pump => {
        const statusElement = pump.querySelector('.status');
        const indicatorElement = pump.querySelector('.status-indicator');
        const onTimeElement = pump.querySelector('.on-time');
        const offTimeElement = pump.querySelector('.off-time');
        const useTimerElement = pump.querySelector('.use-timer');

        if (useTimerElement.checked) {
            const currentTime = new Date();
            const onTime = new Date();
            onTime.setHours(...onTimeElement.value.split(':'));
            const offTime = new Date();
            offTime.setHours(...offTimeElement.value.split(':'));

            if (currentTime >= onTime && currentTime <= offTime) {
                statusElement.textContent = 'On';
                indicatorElement.style.backgroundColor = 'green';
            } else {
                statusElement.textContent = 'Off';
                indicatorElement.style.backgroundColor = 'red';
            }
        } else {
            if (statusElement.textContent.trim() === 'On') {
                indicatorElement.style.backgroundColor = 'green';
            } else {
                indicatorElement.style.backgroundColor = 'red';
            }
        }
    });
}

// Call the function every second to check the pump status
setInterval(checkPumpStatus, 500);

// Also call the function when the toggle button is clicked
document.querySelectorAll('.toggle-pump').forEach(button => {
    button.addEventListener('click', checkPumpStatus);
});
window.onload = function() {
    fetch('../LoginAndRegister/loginstatus.php')
        .then(response => response.json())
        .then(data => {
            var profileLink = document.querySelector('.profile-link');
            if (data.loggedIn) {
                profileLink.href = '../LoginAndRegister/home.php';
                profileLink.textContent = 'Profile';
            } else {
                profileLink.href = '../LoginAndRegister/login.php';
                profileLink.textContent = 'Login';
            }
        });
  }
