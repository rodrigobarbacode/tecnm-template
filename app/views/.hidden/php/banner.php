<!-- Shinia / Yogurt -->
<!-- Main page banner, functions as a carousel displaying various updates. -->
<div id="cambio" class="carousel slide" data-ride="carousel">
    <!-- Carousel Indicators -->
    <ol class="carousel-indicators">
        <!-- Indicator 1 -->
        <li data-target="#cambio" data-slide-to="0" class="active"></li>
        <!-- Indicator 2 -->
        <li data-target="#cambio" data-slide-to="1"></li>
        <!-- Indicator 3 -->
        <li data-target="#cambio" data-slide-to="2"></li>
        <!-- Indicator 4 -->
        <li data-target="#cambio" data-slide-to="3"></li>
        <!-- Indicator 5 -->
        <li data-target="#cambio" data-slide-to="4"></li>
    </ol>
    <!-- Carousel Indicators -->

    <!-- Script to fetch a local JSON file and create carousel elements -->
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

        // Call fetchLocalJSON function and create carousel elements.
        fetchLocalJSON('/public/json/banner-list.json', function(datos) {
            var carouselInner = document.createElement('div');
            carouselInner.className = 'carousel-inner';

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

                // Create a link for the image.
                var link = document.createElement('a');
                link.href = value.url;
                link.target = '_blank';

                // Create an image and set its source.
                var image = document.createElement('img');
                image.className = 'd-block w-100';
                image.src = value.image;

                // Attach the image to the link.
                link.appendChild(image);
                carouselItem.appendChild(link);
                carouselInner.appendChild(carouselItem);
            });

            // Append elements to the carousel.
            document.querySelector('.carousel').appendChild(carouselInner);
        });
    </script>
    <!-- Script to fetch a local JSON file and create carousel elements -->
</div>
<!-- Main page banner, functions as a carousel displaying various updates. -->

<!-- Carousel Navigation Buttons -->
<a class="carousel-control-prev" href="#cambio" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Antes</span>
</a>

<a class="carousel-control-next" href="#cambio" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
</a>
<!-- Carousel Navigation Buttons -->