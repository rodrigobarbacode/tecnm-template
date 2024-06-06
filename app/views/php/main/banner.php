<script>
    // Function to fetch a local JSON file.
    function fetchLocalJSON(file, callback) {
        var xhr = new XMLHttpRequest();
        xhr.overrideMimeType("application/json");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                callback(JSON.parse(xhr.responseText));
            }
        };
        xhr.open("GET", file, true);
        xhr.send(null);
    }

    // Get banner data from the JSON and create carousel elements.
    fetchLocalJSON('/json/banner-list.json', function(datos) {
        var carouselOuter = document.querySelector('.carousel-outer');

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
            carouselItem.style.backgroundImage = 'url(' + value.image + ')';

            // Create a link for the image.
            var link = document.createElement('a');
            link.href = value.url;
            link.target = '_blank';

            // Create a div to cover the image.
            var div = document.createElement('div');
            div.style.width = '100%';
            div.style.height = '100%';

            // Attach the div to the link.
            link.appendChild(div);
            carouselItem.appendChild(link);
            carouselOuter.appendChild(carouselItem);
        });
    });
</script>

<!-- Carousel Indicators -->
<div id="carouselExampleIndicators" class="carousel slide neomorphic-defase m-3" data-ride="carousel" style="z-index: 999;" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="border-radius: 50px;">
    <div class="carousel-item active" style="border-radius: 50px; background-image: url('/assets/banners/2024/cursos_2024-1.jpeg');">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Carousel Indicators -->