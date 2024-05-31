<script>
  // Función para obtener un archivo JSON local.
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

  // Función para mostrar las noticias en la página.
  getJSONFile("public/json/noticias-list.json", function(response) {
    var news = JSON.parse(response);
    var newsHTML = "";

    news.sort(function(a, b) {
        return new Date(b.date) - new Date(a.date);
    });

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
    document.querySelector(".regular").innerHTML = newsHTML;
  });
</script>

<section class="gray pb-3">
  <section class="container">
    <h2 class="text-center">Noticias</h2>
    <section class="regular slide">
    </section>
  </section>
</section>