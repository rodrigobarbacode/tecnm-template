<script>
  fetch('data/banners').then(response => {
    return response.json();
  }).then(datos => {
    var carouselInner = document.querySelector('.carousel-inner');
    // Sort data by date and limit to the first 5 elements.
    datos.sort(function(a, b) {
      return new Date(b.date) - new Date(a.date);
    });
    datos = datos.slice(0, 5);

    datos.forEach(function(value, key) {
      // Determine if this is the first element (active).
      var activeClass = (key === 0) ? 'active' : '';

      // Create an element for each carousel item.
      var carouselItem = document.createElement('div');
      carouselItem.className = 'carousel-item ' + activeClass;
      carouselItem.style.borderRadius = '20px';

      // Create an image element for the carousel item.
      var carouselImage = document.createElement('img');
      carouselImage.className = 'd-block';
      carouselImage.style.width = '100%';
      carouselImage.style.height = '100%';
      carouselImage.src = value.image;

      // Create a tag element for the carousel item.
      var carouselTag = document.createElement('a');
      carouselTag.href = value.url;

      carouselTag.appendChild(carouselImage);
      carouselItem.appendChild(carouselTag);

      carouselInner.appendChild(carouselItem);
    });
  }).catch(err => {
    console.log('Error: ', err);
  });
</script>

<!-- Carousel Indicators -->
<div id="carousel-full" class="carousel slide mb-3" data-ride="carousel" style="z-index: 1500;">
  <ol class="carousel-indicators">
    <li data-target="#carousel-full" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-full" data-slide-to="1"></li>
    <li data-target="#carousel-full" data-slide-to="2"></li>
    <li data-target="#carousel-full" data-slide-to="3"></li>
    <li data-target="#carousel-full" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <!-- Banner items will be added here. -->
  </div>
  <a class="carousel-control-prev" href="#carousel-full" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa-solid fa-angle-left carousel-object"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-full" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa-solid fa-angle-right carousel-object"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<style>
  .carousel-object {
    font-size: 2rem;
    color: black;
  }

  .carousel-indicators {
    color: black;
  }

  .fa-angle-left {
    margin-left: -10.5rem;
  }

  .fa-angle-right {
    margin-right: -10.5rem;
  }

  @media (max-width: 768px) {
    .fa-angle-left {
      display: none;
    }

    .fa-angle-right {
      display: none;
    }
  }
</style>