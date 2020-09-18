/*
// select2
*/
$(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
			'Accept': 'application/json',
		}
	});
	var selects = $('#bdDistrict');
	selects.select2({
		width: ''
	});
	selects.on('select2:select', function(e) {
		var state = e.params.data.id;
		$.post('/api/shipping/price', {
				id: state
			}).done(function(response) {
				$("#shippingPrice").text(response.cost);
				var total = $('#total').text();
				$('#finalPrice').text(parseFloat(parseFloat(total) + parseFloat(response.price)).toFixed(2));
			})
			.fail(function(response) {
				swal('Error', 'an error occured, please contact admin', 'error');
			});
	});
});
