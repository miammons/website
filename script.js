// Get all tab links
const tabLinks = document.querySelectorAll('.tab-links li');

// Get all tab content divs
const tabPanes = document.querySelectorAll('.tab-pane');

// Add event listener to each tab link
tabLinks.forEach(link => {
  link.addEventListener('click', function() {
    // Remove active class from all links and content
    tabLinks.forEach(link => link.classList.remove('active'));
    tabPanes.forEach(pane => pane.classList.remove('active'));

    // Add active class to the clicked link and its corresponding content
    const targetTab = document.querySelector(this.querySelector('a').getAttribute('href'));
    this.classList.add('active');
    targetTab.classList.add('active');
  });
});
