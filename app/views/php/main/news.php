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

            var card = document.createElement('div');
            card.className = 'card';
            card.style.width = 'auto';
            card.style.margin = '0 1rem';
            card.style.borderRadius = '1rem';

            var img = document.createElement('img');
            img.className = 'card-img-top';
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
            cardTitle.style.textAlign = 'center';
            cardTitle.textContent = value.title;

            cardBody.appendChild(cardTitle);

            var cardText = document.createElement('p');
            cardText.className = 'card-text';
            cardText.style.color = '#000000';
            cardText.style.fontSize = '1.5vh'
            cardText.style.textAlign = 'justify';
            cardText.textContent = value.date_title + ' ' + '\n' + value.description;

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

            newsOuter.appendChild(sliderItem);
            
        });
    });
</script>

<div id='desface' style='display: none; background-color: #2f476f;'>
    <div class='container-fluid m-auto'>
        <!-- Comunicación -->
        <div class='row w-100 justify-content-center m-0'>
            <div class="col-lg-8 col-md-8 col-12">
                <section class='container px-5 ml-auto mr-auto mt-3 pt-3 pb-3 neomorphic-defase hide-scroll' id='desface_noticias' style='display: none; height: 64vh; max-height: 64vh; overflow: scroll;'>
                    <div class='row'>
                        <div class='col-12 display-2 text-left my-0 py-3'>
                            <a role='button' href='?vista=Noticias'>
                                <h1 style="color: white; font-size: 6vh;"><span><i style="color: #fab005; padding-right: 2vh;" class="fa-solid fa-newspaper"></i></span>Noticias</h1>
                            </a>
                        </div>
                    </div>
                    <div class='center slider my-0 news-outer' id='noticias' ></div>
                </section>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <?php require 'events.php' ?>
            </div>
        </div>
        <br/>