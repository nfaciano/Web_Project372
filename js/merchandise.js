// Wait for the DOM to fully load before executing the script
document.addEventListener('DOMContentLoaded', function() {
    // Example array of merchandise items, each with properties like id, name, price, imgUrl, and description
    const merchandiseItems = [
        { 
            id: 1, 
            name: 'Example Merchandise', 
            price: '$29.99', 
            imgUrl: 'images/logo.png', 
            description: 'A detailed description of the item here. Perfect for all your needs!' 
        },
        // Potentially add more items here
    ];

    // Loop through each merchandise item to dynamically create and display it on the page
    merchandiseItems.forEach(item => {
        // Identify the container where merchandise items will be displayed
        const container = document.getElementById('merchandise-container');

        // Create a container div for each merchandise item
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('merchandise-item');

        // Create an image element for the merchandise and set its source and alt text
        const img = document.createElement('img');
        img.src = item.imgUrl;
        img.alt = item.name;
        img.classList.add('merchandise-img');

        // Create a container for the overlay info (name and price)
        const overlayInfo = document.createElement('div');
        overlayInfo.classList.add('overlay-info');
        
        // Create and append the merchandise name to the overlay
        const nameSpan = document.createElement('span');
        nameSpan.classList.add('merchandise-name');
        nameSpan.textContent = item.name;

        // Create and append the price to the overlay
        const priceSpan = document.createElement('span');
        priceSpan.classList.add('price-tag');
        priceSpan.textContent = item.price;

        overlayInfo.appendChild(nameSpan);
        overlayInfo.appendChild(priceSpan);

        // Append the image and overlay info to the merchandise item container
        itemDiv.appendChild(img);
        itemDiv.appendChild(overlayInfo);

        // Attach a click event listener to each merchandise item to show more details in a modal
        itemDiv.addEventListener('click', function() {
            showModal(item);
        });

        // Finally, append the merchandise item container to the designated container on the page
        container.appendChild(itemDiv);
    });

    // Function to display a modal with more details about the clicked merchandise item
    function showModal(item) {
        // First, check if a modal already exists and remove it to prevent duplicates
        const existingModal = document.querySelector('.details-modal');
        if (existingModal) {
            existingModal.remove();
        }

        // Create the modal overlay and immediately display it
        const modalOverlay = document.createElement('div');
        modalOverlay.className = 'details-modal';
        modalOverlay.style.display = 'block';

        // Create the container for the modal content
        const modalContent = document.createElement('div');
        modalContent.className = 'modal-content';

        // Create the close button for the modal
        const closeButton = document.createElement('span');
        closeButton.className = 'close-button';
        closeButton.textContent = '×';

        // Append the close button and the item details (name, price, description) to the modal content
        modalContent.appendChild(closeButton);
        modalContent.appendChild(createDetailElement('h2', item.name)); // Name
        modalContent.appendChild(createDetailElement('p', `Price: ${item.price}`, 'price-tag')); // Price
        modalContent.appendChild(createDetailElement('p', item.description, 'item-description')); // Description

        // Append the modal content to the overlay, and then the overlay to the document body
        modalOverlay.appendChild(modalContent);
        document.body.appendChild(modalOverlay);

        // Add event listeners for closing the modal
        closeButton.onclick = () => modalOverlay.remove();
        modalOverlay.onclick = event => {
            if (event.target === modalOverlay) {
                modalOverlay.remove();
            }
        };
    }

    // Helper function to create and return a detail element with text and optional class
    function createDetailElement(tag, text, className = '') {
        const element = document.createElement(tag);
        element.textContent = text;
        if (className) element.classList.add(className);
        return element;
    }
});

// Add a class to all images for a hover effect
window.addEventListener('load', () => {
    const images = document.querySelectorAll('.merchandise-img');
    images.forEach(img => {
        img.classList.add('merchandise-img-hover'); // Assume this class is defined in CSS
    });
});
