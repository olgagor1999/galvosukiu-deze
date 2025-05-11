document.addEventListener('DOMContentLoaded', function () {
    console.log('JavaScript is loaded!'); // Debugging message

    // Mobile menu toggle functionality
    const toggleButton = document.querySelector('.mobile-nav-toggle');
    const popupMenu = document.querySelector('.mobile-menu-popup');
    const closeButton = document.querySelector('.mobile-menu-popup-close');

    if (toggleButton && popupMenu && closeButton) {
        // Toggle menu on mobile nav button click
        toggleButton.addEventListener('click', function () {
            popupMenu.classList.toggle('active');
        });

        // Close menu on close button click
        closeButton.addEventListener('click', function () {
            popupMenu.classList.remove('active');
        });
    }

    // Style menu items
    const menuItems = document.querySelectorAll('.nav-menu li');
    menuItems.forEach(function (menuItem) {
        menuItem.style.fontSize = '18px';
        menuItem.style.color = '#fff';
        menuItem.style.display = 'block';
    });

    // Delivery option logic
    const deliveryOption = document.getElementById('delivery-option');
    const addressContainer = document.getElementById('delivery-address-container');

    if (deliveryOption && addressContainer) {
        deliveryOption.addEventListener('change', function () {
            if (this.value === 'delivery') {
                addressContainer.style.display = 'block';
            } else {
                addressContainer.style.display = 'none';
            }
        });
    }

    // Form submission validation
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();

            if (!name || !email) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    }
});