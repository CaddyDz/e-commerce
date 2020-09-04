// Coupon

new Vue({
	el: '#coupon',
	data() {
		return {
			coupon: ''
		}
	},
	methods: {
		applyCoupon() {
			axios.post('/applyCoupon', {
				coupon: this.coupon
			}).then(response => {
				console.log(response.data);
			});
		}
	}
})

/*
// select2
*/
$(function() {
	var selects = $('#bdDistrict');
	selects.select2({
		width: ''
	});
	selects.on('select2:select', function(e) {
		var selectedStateShippingPrice = e.params.data.id;
		document.getElementById('shippingPrice').innerText = selectedStateShippingPrice;
		var total = document.getElementById('finalPrice').innerText;
		var total = total.replace('.00', '');
		var total = total.replace(',', '');
		var total = parseInt(total);
		var shipping = parseInt(selectedStateShippingPrice);
		document.getElementById('finalPrice').innerText = (total + shipping);
	});
});
