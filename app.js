// Fetch and insert footer content
fetch('/footer.html')
  .then(response => response.text())
  .then(data => {
    document.getElementById('footer').innerHTML = data;  // Inject footer content
  })
  .catch(error => {
    console.error("Error loading footer:", error);
  });

// Fetch and insert header content
fetch('/header.html')
  .then(response => response.text())
  .then(data => {
    document.getElementById('header').innerHTML = data;  // Inject header content

    // Mobile menu functionality
    const menu = document.querySelector('#mobile-menu');
    const menuLinks = document.querySelector('.navbar__menu');

    menu.addEventListener('click', function() {
      menu.classList.toggle('is-active');
      menuLinks.classList.toggle('active');
    });
  })
  .catch(error => {
    console.error("Error loading header:", error);
  });
