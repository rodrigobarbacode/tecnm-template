<style>
    .news {
        height: 100%;
        max-height: 550px;
    }
    .swiffy-slider .slider-nav:focus,
    .swiffy-slider .slider-nav:active {
        outline: none;
        box-shadow: none;
    }
</style>
<script>
    //Function to limit the text length to only 100 characters.
    function truncateDescription(text) {
        const maxLength = 100;
        if (text.length <= maxLength) {
            return text;
        }

        // Find the last space within the allowed length
        let truncated = text.substr(0, maxLength);
        const lastSpaceIndex = truncated.lastIndexOf(' ');

        // If there's a space within the truncated part, truncate up to the last full word
        if (lastSpaceIndex > 0) {
            truncated = truncated.substr(0, lastSpaceIndex);
        }

        // Add ellipsis
        return truncated + '...';
    }

    // Function to limit the text length to only 30 characters.
    function truncateTitle(text) {
        const maxLength = 30;
        if (text.length <= maxLength) {
            return text;
        }

        // Find the last space within the allowed length
        let truncated = text.substr(0, maxLength);
        const lastSpaceIndex = truncated.lastIndexOf(' ');

        // If there's a space within the truncated part, truncate up to the last full word
        if (lastSpaceIndex > 0) {
            truncated = truncated.substr(0, lastSpaceIndex);
        }

        // Add ellipsis
        return truncated + '...';
    }

    // Fetch the maximum number of news to show.
    var limit;
    fetch('data/news/max').then(response => {
        return response.json();
    }).then(a => {
        var limit = a.max;
        // Fetch the maximum number of news to show.
        fetchNews(limit);
    });

    function fetchNews(limit) {
        // Function to fetch a remote JSON file.
        fetch('data/news').then(response => {
            return response.json();
        }).then(datos => {
            // Get the news slider container.
            var newsOuter = document.querySelector('.swiffy-slider .slider-container');

            // Sort data by date.
            datos.sort(function(a, b) {
                return new Date(b.date) - new Date(a.date);
            });

            // Limit the number of news to show.
            datos = datos.slice(0, limit);

            datos.forEach(function(value, key) {
                // Create an element for each slider item.
                var sliderItem = document.createElement('div');
                sliderItem.className = 'swiffy-slider-item';
                sliderItem.style.position = 'relative';

                var card = document.createElement('div');
                card.className = 'card';
                card.style.width = '100%';
                card.style.height = '100%';
                card.style.borderRadius = '1rem';

                var img = document.createElement('img');
                img.className = 'card-img-top';
                img.style.width = '100%';
                img.style.height = '10vh';
                img.style.borderRadius = '1rem 1rem 0 0';
                img.src = value.image;
                img.alt = value.title;

                card.appendChild(img);

                var cardBody = document.createElement('div');
                cardBody.className = 'card-body';

                var cardTitle = document.createElement('h5');
                cardTitle.className = 'card-title';
                cardTitle.style.color = '#fab005';
                cardTitle.style.fontSize = '2vh';
                cardTitle.style.fontWeight = 'bolder';
                var limitTitle = truncateTitle(value.title);
                cardTitle.textContent = limitTitle;

                cardBody.appendChild(cardTitle);

                var cardText = document.createElement('p');
                cardText.className = 'card-text';
                cardText.style.color = '#000000';
                cardText.style.fontSize = '1.5vh';
                cardText.style.textAlign = 'justify';
                var limitDescription = truncateDescription(value.description);
                cardText.textContent = value.date_title + ' | ' + '\n' + limitDescription;

                cardBody.appendChild(cardText);

                var cardLink = document.createElement('a');
                cardLink.href = value.pdf;
                cardLink.target = '_blank';
                cardLink.className = 'btn btn-primary mt-2';
                cardLink.style.backgroundColor = '#fab005';
                cardLink.style.borderColor = '#fab005';
                cardLink.textContent = 'Leer más';

                cardBody.appendChild(cardLink);

                card.appendChild(cardBody);

                sliderItem.appendChild(card);

                // Añadir el elemento al contenedor del slider
                newsOuter.appendChild(sliderItem);
            });

            // Inicializar Swiffy Slider
            new SwiffySlider(document.querySelector('.swiffy-slider'));
        }).catch(err => {
            console.log('Error: ', err);
        });
    }
</script>

<!-- HTML structure for the Swiffy Slider -->
<div id='desface' style='display: none; background-color: #2f476f;'>
    <div class='container-fluid m-auto'>
        <!-- Comunicación -->
        <div class='row w-100 justify-content-center m-0'>
            <div class="col-lg-8 col-md-8 col-12">
                <section class='container news px-5 ml-auto mr-auto mt-3 pt-3 pb-4 neomorphic-defase hide-scroll' id='desface_noticias' style='display: none; height: 100%; max-height: auto; overflow: scroll; z-index: 1500;'>
                    <div class='row'>
                        <div class='col-12 display-2 text-left my-0 py-3'>
                            <a role='button' href='?vista=Noticias'>
                                <h1 style="color: white; font-size: 4vh;"><span><i style="color: #fab005; padding-right: 2vh;" class="fa-solid fa-newspaper"></i></span>Noticias</h1>
                            </a>
                        </div>
                    </div>
                    <div class="swiffy-slider slider-nav-autoplay slider-nav-visible slider-nav-chevron slider-item-show4">
                        <div class="slider-container">
                            <!-- Los elementos generados por JavaScript se insertarán aquí -->
                        </div>
                        <button type="button" class="slider-nav" aria-label="Go to previous" style="margin-left: -3rem;"></button>
                        <button type="button" class="slider-nav slider-nav-next" aria-label="Go to next" style="margin-right: -3rem;"></button>
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <?php require 'events.php' ?>
            </div>
        </div>
        <br />