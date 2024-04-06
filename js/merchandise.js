$(document).ready(function() {
    $('.merchandise-item').click(function() {
        var item = {
            name: $(this).find('.merchandise-name').text(),
            price: $(this).find('.price-tag').text(),
            description: $(this).data('description'), // Assuming description is stored as a data attribute
            imgUrl: $(this).find('img').attr('src')
        };
        showModal(item);
    });

    function showModal(item) {
        $('.details-modal').remove(); // Remove existing modal to prevent duplicates

        const modalOverlay = $('<div>').addClass('details-modal').css('display', 'block');
        const modalContent = $('<div>').addClass('modal-content');
        const closeButton = $('<span>').addClass('close-button').text('×');
        const purchaseButton = $('<button>').addClass('purchase-button').text('Purchase');

        modalContent.append(
            closeButton,
            $('<img>').attr('src', item.imgUrl).addClass('modal-image'),
            $('<h2>').text(item.name),
            $('<p>').addClass('price-tag').text(item.price),
            $('<p>').addClass('item-description').text(item.description),
            purchaseButton
        );

        modalOverlay.append(modalContent).appendTo('body');

        closeButton.click(function() {
            modalOverlay.remove();
        });

        purchaseButton.click(function() {
            // Handle the purchase logic here, potentially sending an AJAX request to a PHP script
            alert('Purchase logic not implemented yet.');
        });

        modalOverlay.click(function(event) {
            if (event.target === modalOverlay[0]) {
                modalOverlay.remove();
            }
        });
    }
});
