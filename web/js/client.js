$('#addToCart').on('click', (event) => {
  const inputSpinner = $('.pro-qty input');
  const quantity = inputSpinner.attr('value');
  const productId = inputSpinner.data('product-id');

  event.preventDefault();
  addToCart(productId, quantity);
});

$('#continueBtn').click(() => {
  $('#cartModal').modal('hide');
});

function addToCart(id, qty) {
  $.ajax({
    url: '/cart/add',
    method: 'GET',
    data: {
      productId: id,
      quantity: qty || 1,
    },
    success: (response) => {
      $('#cartModal .modal-body').html(response);
      $('#cartModal').modal({ show: true });
    },
  });
}
