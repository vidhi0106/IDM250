


document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const modal = document.querySelector('.modal');
    const closeIcon = document.querySelector('.close-icon');

    menuToggle.addEventListener('click', function() {
        modal.style.display = 'block';
        modal.classList.add('open');
        menuToggle.innerHTML = '&times;'; // Change icon to 'x'
    });

    closeIcon.addEventListener('click', function() {
        modal.style.display = 'none';
        modal.classList.remove('open');
        menuToggle.innerHTML = '&#9776;'; // Change icon back to hamburger
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            modal.classList.remove('open');
            menuToggle.innerHTML = '&#9776;'; // Change icon back to hamburger
        }
    });
});




