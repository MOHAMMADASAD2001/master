document.addEventListener("DOMContentLoaded", function() {
    const addToCartButton = document.querySelector(".add-to-cart-btn");
    const quantityInput = document.getElementById("quantity");
    
    function updateRatingText(selectedStars) {
        const ratingText = document.querySelector(".rating-text");
        ratingText.textContent = `(${selectedStars})`;
    }
});
