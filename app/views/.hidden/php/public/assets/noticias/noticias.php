<!-- Shinia / Yogurt -->
<!-- Script to fetch a local JSON file and create slider elements -->
<script>
  // Function to fetch a local JSON file.
  function getJSONFile(path, callback) {
    var request = new XMLHttpRequest();
    request.overrideMimeType("application/json");
    request.open("GET", path, true);
    request.onreadystatechange = function() {
      if (request.readyState === 4 && request.status == "200") {
        callback(request.responseText);
      }
    }
    request.send(null);
  }

  // Function to display news on the page.
  getJSONFile("public/json/noticias-list.json", function(response) {
    var news = JSON.parse(response);
    var newsHTML = "";

    // Sort news by date in descending order.
    news.sort(function(a, b) {
        return new Date(b.date) - new Date(a.date);
    });

    // Loop through each news item and create HTML elements.
    for (var i = 0; i < news.length; i++) {
      newsHTML += `
          <div class="slide">
            <div class="card border-info">
              <div class="card img-fluid">
                <img alt="Noticia" class="card-img-top noticias" src="${news[i].image}" alt="Card image cap">
                <div>
                  <p class="p-2 fechanot">${news[i].date_title}</p>
                </div>
              </div>
              <div class="card-body">
                <p class="card-title">${news[i].title}</p>
                <p class="card-text">${news[i].description}
                  <a href="${news[i].pdf}" class="btn btn-primary">Leer Más...</a>
                </p>
              </div>
            </div>
          </div>
        `;
    }
    // Append the generated HTML to the designated container.
    document.querySelector(".regular").innerHTML = newsHTML;
  });
</script>
<!-- Script to fetch a local JSON file and create slider elements -->

<section class="gray pb-3">
  <section class="container">
    <h2 class="text-center">Noticias</h2>
    <!-- Container for the news carousel -->
    <section class="regular slide">
    </section>
    <!-- Container for the news carousel -->
  </section>
</section>