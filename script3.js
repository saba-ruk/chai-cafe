document.addEventListener('DOMContentLoaded', function() {
	var splide = new Splide('.splide', {
		type: 'loop',
		perPage: 5, // Display 5 slides by default
		rewind: true,
		gap: 20, // Add a gap between slides
		breakpoints: {
			1200: {
				perPage: 3, // 3 slides for screens smaller than 1200px
			},
			992: {
				perPage: 3, // 3 slides for screens smaller than 992px
			},
			768: {
				perPage: 3, // 3 slides for screens smaller than 768px
			},
			576: {
				perPage: 3, // 1 slide for screens smaller than 576px
			},
		},
	});
	splide.mount();
});

splide.mount();
document.addEventListener('DOMContentLoaded', function () {
	const menuToggle = document.querySelector('.menu-toggle');
	const navbar = document.getElementById('navbar1');
  
	menuToggle.addEventListener('click', function () {
	  navbar.classList.toggle('active');
	});
  });
  


  