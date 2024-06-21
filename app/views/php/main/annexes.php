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

    // Get annexes data from JSON file to display them.
    fetchLocalJSON("json/annexes-list.json", function(data) {
        var sliderContainer = document.querySelector(".slider-container-annexes");
        var html = "";

        data.forEach(function(slide) {
            html += "<div class='swiffy-slider-item'>";
            html += "<div class='card' style='width: auto; height: 6rem; margin: 1rem; border-radius: 1rem; display: flex; align-items: center; justify-content: center; overflow: hidden;'>";
            html += "<a target='_blank' href='" + slide.link + "'>";
            html += "<img loading='lazy' src='" + slide.image + "' style='max-height: 100%; max-width: 100%; object-fit: contain; border-radius: 1rem;'>";
            html += "</a>";
            html += "</div>";
            html += "</div>";
        });

        sliderContainer.innerHTML = html;

        // Inicializar Swiffy Slider
        new SwiffySlider(document.querySelector('.swiffy-slider-annexes'));
    });
</script>

<!-- Anexos -->
<section class="neomorphic-defase ml-3 mr-3 mt-4">
    <div class='row w-100 justify-content-center pt-3 m-0'>
        <h2 style="color: white; font-size: 4vh; padding-top:15px;"><span>
                <i class="fa-solid fa-circle-info" style="color: #fab005; padding-right: 2vh;"></i></span>Anexos</h2>
    </div>
    <div class='row w-100 justify-content-center py-3'>
        <div class="w-50 swiffy-slider swiffy-slider-annexes slider-nav-autoplay slider-nav-visible slider-nav-chevron slider-item-show4">
            <div class="slider-container slider-container-annexes">
                <!-- Los elementos generados por JavaScript se insertarán aquí -->
            </div>
            <button type="button" class="slider-nav" aria-label="Go to previous" style="margin-left: -3rem;"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go to next" style="margin-right: -3rem;"></button>
        </div>
    </div>
</section>
<br />