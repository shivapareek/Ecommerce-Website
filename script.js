// Function to add an item to the cart
function addToCart(product, price) {
    var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
    cartItems.push({ product: product, price: price });
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
        li.textContent =  item.product + " - ₹" + item.price;
        var deleteButton = document.createElement("button");
        deleteButton.textContent = "X";
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
  
  // Function to handle the checkout process
  function checkout() {
    var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
    // Perform the necessary actions for checkout, such as payment processing, order confirmation, etc.
    // You can customize this function according to your requirements.
    alert("Checkout completed!");
    localStorage.removeItem("cartItems"); // Clear the cart after checkout
    displayCart(); // Refresh the cart display
  }
  