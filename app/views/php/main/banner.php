<script>
  // Function to fetch a local JSON file.
  function fetchLocalJSON(file, callback) {
    var xhr = new XMLHttpRequest();
    xhr.overrideMimeType("application/json");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        callback(JSON.parse(xhr.responseText));
      }
    };
    xhr.open("GET", file, true);
    xhr.send(null);
  }

  // Get banner data from the JSON and create carousel elements.
  fetchLocalJSON('/json/banner-list.json', function (datos) {
    var carouselInner = document.querySelector('.carousel-inner');

    // Sort data by date and limit to the first 5 elements.
    datos.sort(function (a, b) {
      return new Date(b.date) - new Date(a.date);
    });
    datos = datos.slice(0, 5);

    datos.forEach(function (value, key) {
      // Determine if this is the first element (active).
      var activeClass = (key === 0) ? 'active' : '';

      // Create an element for each carousel item.
      var carouselItem = document.createElement('div');
      carouselItem.className = 'carousel-item ' + activeClass;
      carouselItem.style.backgroundImage = 'url(' + value.image + ')';
      carouselItem.style.borderRadius = '20px';

      carouselInner.appendChild(carouselItem);
    });
  });
</script>

<!-- Carousel Indicators -->
<div id="carousel-full" class="carousel slide neomorphic-defase ml-3 mr-3 mt-4 mb-3" data-ride="carousel"
  style="z-index: 999;">
  <ol class="carousel-indicators">
    <li data-target="#carousel-full" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-full" data-slide-to="1"></li>
    <li data-target="#carousel-full" data-slide-to="2"></li>
    <li data-target="#carousel-full" data-slide-to="3"></li>
    <li data-target="#carousel-full" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" style="border-radius: 20px;">
    <!-- Carousel Items -->
  </div>
  <a class="carousel-control-prev" href="#carousel-full" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"><i class="fa-regular fa-chevron-left" style="font-size: 300px;"></i></span>
  </a>
  <a class="carousel-control-next" href="#carousel-full" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Carousel Indicators -->