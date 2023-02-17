const grid = document.querySelector('.cont_series')
const series = document.querySelectorAll('.serie')

series.forEach((serie) => {
	serie.addEventListener('mouseenter', (e) => {
		const elemento = e.currentTarget;
		setTimeout(() => {
			series.forEach(serie => serie.classList.remove('hover'));
			elemento.classList.add('hover');
		}, 100);
	});
});

grid.addEventListener('mouseleave', () => {
	series.forEach(serie => serie.classList.remove('hover'));
});

series.forEach((serie) => {
	serie.addEventListener('mouseenter', (e) => {
		const elemento = e.currentTarget;
		setTimeout(() => {
			series.forEach(serie => serie.classList.remove('hover'));
			elemento.classList.add('hover');
		}, 100);
	});
});

grid.addEventListener('mouseleave', () => {
	series.forEach(serie => serie.classList.remove('hover'));
});