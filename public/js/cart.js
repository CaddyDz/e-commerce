/*----------------------------------
	Product Quantity
-----------------------------------*/
$('.qty-btn').on('click', function() {
	var $this = $(this);
	var oldValue = $this.siblings('input').val();
	if ($this.hasClass('plus')) {
		var newVal = parseFloat(oldValue) + 1;
	} else {
		// Don't allow decrementing below zero
		if (oldValue > 1) {
			var newVal = parseFloat(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	var product_id = $this.data('product');
	var price = $('#price-' + product_id).text();
	$('#sum-' + product_id).text(price * newVal);
	$this.siblings('input').val(newVal);
	var total = 0;
	$(".product_sum").each(function(index) {
		var sum = $(this).text();
		if (sum) {
			total += parseInt(sum);
		}
	});
	$('#cart-total').text(total);
});
