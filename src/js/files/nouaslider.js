import * as noUiSlider from 'nouislider';

var connectSlider = document.getElementById('filter');

if (connectSlider) {
	noUiSlider.create(connectSlider, {
		start: 0,
		connect: true,
		range: {
			'min': 0,
			'max': 10000
		}
	});

	const input = document.getElementById('ui-value');
	// const inputValue = document.getElementById('ui-value');

	connectSlider.noUiSlider.on('update', function (handle) {
		input.value = Math.round(handle);
	});

	input.addEventListener('change', function () {
		connectSlider.noUiSlider.set(input.value);
	});
}


