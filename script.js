// Function to add an item to the cart
function addToCart(product, price, image) {
  var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
  cartItems.push({ product: product, price: price, image: image });
  localStorage.setItem("cartItems", JSON.stringify(cartItems));
  window.location.href = "cart.html"; // Redirect to the cart page
}

// Function to remove an item from the cart
function removeFromCart(index) {
  var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
  cartItems.splice(index, 1);
  localStorage.setItem("cartItems", JSON.stringify(cartItems));
  displayCart(); // Refresh the cart display
}

function checkout() {
  var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
  // Perform the necessary actions for checkout, such as payment processing, order confirmation, etc.
  // You can customize this function according to your requirements.
  // location.href = "https://buy.stripe.com/test_14k4ibaZa10Zgtq9AA";
  localStorage.removeItem("cartItems"); // Clear the cart after checkout
  displayCart(); // Refresh the cart display
  }

// Function to display the items in the cart
function displayCart() {
  var cartItemsDiv = document.getElementById("cartItems");
  var totalItemsDiv = document.getElementById("totalItems");
  var totalPriceDiv = document.getElementById("totalPrice");
  var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

  cartItemsDiv.innerHTML = ""; // Clear previous items

  if (cartItems.length > 0) {
    var ol = document.createElement("ol");
    var totalPrice = 0;

    cartItems.forEach(function(item, index) {
      var li = document.createElement("li");
      li.classList.add("cart-item");

      // Create an image element
      var imageElement = document.createElement("img");
      imageElement.src = item.image;
      imageElement.alt = item.product;
      imageElement.classList.add("cart-item-image");
      li.appendChild(imageElement);

      // Create a span element for the product name
      var productSpan = document.createElement("span");
      productSpan.textContent = item.product;
      productSpan.classList.add("cart-item-name");
      li.appendChild(productSpan);

      // Create a span element for the price
      var priceSpan = document.createElement("span");
      priceSpan.textContent = "₹" + item.price;
      priceSpan.classList.add("cart-item-price");
      li.appendChild(priceSpan);

      // Create a delete button
      var deleteButton = document.createElement("button");
      deleteButton.textContent = "X";
      deleteButton.classList.add("cart-item-delete");
      deleteButton.onclick = function() {
        removeFromCart(index);
      };
      li.appendChild(deleteButton);

      ol.appendChild(li);

      totalPrice += parseFloat(item.price);
    });

    cartItemsDiv.appendChild(ol);
    totalItemsDiv.textContent = "Total items in cart: " + cartItems.length;
    totalPriceDiv.textContent = "Total price: ₹" + totalPrice.toFixed(2);
  } else {
    cartItemsDiv.innerHTML = "Your cart is empty.";
    totalItemsDiv.textContent = "Total items in cart: 0";
    totalPriceDiv.textContent = "Total price: ₹0.00";
  }
}


