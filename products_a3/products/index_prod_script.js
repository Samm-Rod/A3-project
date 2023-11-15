document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleDark'), {
      interval: 5000, // Set the interval (in milliseconds) for automatic rotation
      pause: 'hover', // Pause on hover
    });
  });
  