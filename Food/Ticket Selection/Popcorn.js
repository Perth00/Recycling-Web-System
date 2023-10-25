$(document).ready(function() {
    function incrementValue(e) {
      e.preventDefault();
      var fieldName = $(e.target).data('field');
      var parent = $(e.target).closest('div');
      var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
      var total = calculateTotal();
  
      if (!isNaN(currentVal) && total < 10) {
        parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
      }
    }
  
    function decrementValue(e) {
      e.preventDefault();
      var fieldName = $(e.target).data('field');
      var parent = $(e.target).closest('div');
      var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
  
      if (!isNaN(currentVal) && currentVal > 0) {
        parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
      }
    }
  
    function calculateTotal() {
      var total = 0;
      $('.quantity-field').each(function() {
        var quantity = parseInt($(this).val(), 10);
        total += isNaN(quantity) ? 0 : quantity;
      });
      return total;
    }
  
    $('.input-group').on('click', '.button-plus', function(e) {
      incrementValue(e);
    });
  
    $('.input-group').on('click', '.button-minus', function(e) {
      decrementValue(e);
    });
  
    // Set the maximum value to 0 for specific categories
    $('input[name="quantity"][data-field="category1"]').attr('max', 0);
    $('input[name="quantity"][data-field="category2"]').attr('max', 0);
    // Set the maximum value to 10 for other categories
    $('input[name="quantity"][data-field!="category1"][data-field!="category2"]').attr('max', 10);
  });