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

    // Get news data from the JSON and create slider elements.
    fetchLocalJSON('/json/news-list.json', function(datos) {
        // Get the news slider container.
        var newsOuter = document.querySelector('.news-outer');

        // Sort data by date.
        datos.sort(function(a, b) {
            return new Date(b.date) - new Date(a.date);
        });

        datos.forEach(function(value, key) {
            // Create an element for each slider item.
            var sliderItem = document.createElement('div');
            sliderItem.className = 'row justify-concent-center';
            sliderItem.style.position = 'relative';

            // Create an image for the slider item.
            var img_div = document.createElement('div');
            img_div.className = 'col-12';

            var img = document.createElement('img');
            img.className = 'img-fluid mx-auto w-100';
            img.style.height = '150px';
            img.src = value.image;
            img.alt = '';

            img_div.appendChild(img);

            // Create a date over the image.
            var date = document.createElement('div');
            date.className = 'h6 col-8 py-2 mb-4';
            date.style.position = 'absolute';
            date.style.top = '0px';
            date.style.left = '15px';
            date.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
            date.style.color = 'white';
            date.textContent = value.date_title;

            img_div.appendChild(date);

            // Create a title for the slider item.
            var title = document.createElement('div');
            title.className = 'h6 col-12 py-2 mb-4';
            title.textContent = value.title;

            // Create a link for the slider item.
            var button = document.createElement('div');
            button.className = 'col-12';
            button.style.position = 'absolute';
            button.style.bottom = '0px';

            var link = document.createElement('a');
            link.href = value.pdf;
            link.target = '_blank';
            link.textContent = 'Leer Más';

            button.appendChild(link);

            // Attach the elements to the slider item.
            sliderItem.innerHTML = '';
            sliderItem.appendChild(img_div);
            sliderItem.appendChild(title);
            sliderItem.appendChild(button);

            // Attach the slider item to the news slider container.
            newsOuter.appendChild(sliderItem);
        });
    });
</script>

<section class="container neomorphic-defase px-5 ml-auto mr-auto mt-3 pt-3 pb-3" style="" >
    <div class="container-fluid events-outer">
        <div class="row">
            <div class='row'>
        <div class='col-12 display-2 text-left my-0 py-3'>
            <a role='button' href='?vista=Noticias'>
                <h1 style="color: white; font-size: 6vh;"><span><i style="color: #fab005; padding-right: 1vh;" class="fa-solid fa-calendar-days"></i></span>Eventos</h1>
            </a>
        </div>
    </div>

    <div class="events-outer">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-4 col-4 text-right bordered-con">
                <h1 style="color: #2f476f;">MAY 02</h1>
            </div>
            <div class="col-lg-1 col-md-1 col-1">
                <style>
                    .ln {
                        border-left: 2px solid white;
                        height: 10vh;
                    }
                </style>
                <div class="ln"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
                <h6 style="color: white;"><span><i style="color: #fab005; padding-right: 1vh;" class="fa-regular fa-clock"></i></span>Hora: 9:00</h6>
                <h6 style="color: white;"><span><i style="color: #fab005; padding-right: 1vh;" class="fa-solid fa-calendar-check"></i></span>Título: Lorem Inpsun</h6>
                <a href="/">
                    <p class="mt-2" style="color: #fab005; text-decoration: underline;">Ver información...</p>
                </a>
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
</section>