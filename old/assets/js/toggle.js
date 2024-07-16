function toggleLogo() {
    var logoElement = document.getElementById('logo');

    // Check if there's a state stored in localStorage
    var isLogo1 = localStorage.getItem('isLogo1') === 'true';

    if (isLogo1) {
        logoElement.src = "img/logo/Logo-2.png";
    } else {
        logoElement.src = "img/logo/Logo.png";
    }

    // Toggle the state for the next click and store it in localStorage
    isLogo1 = !isLogo1;
    localStorage.setItem('isLogo1', isLogo1.toString());
}

// Call toggleLogo() when the page loads
window.onload = function() {
    toggleLogo();
};