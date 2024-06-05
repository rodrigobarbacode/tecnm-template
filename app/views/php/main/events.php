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

    fetchLocalJSON("/json/events.json", function(data) {
        var eventsOuter = document.querySelector(".events-outer");
        var html = "";

        data.forEach(function(event) {
            html +=`
                <div class="event">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-4 text-center bordered-con">
                            <p style="color: #2f476f; font-size: 3vh; font-weight: bolder;">${event.date}</p>
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
                            <h6 style="color: white;"><span><i style="color: #fab005; padding-right: 1vh;" class="fa-regular fa-clock"></i></span>Hora: ${event.time}</h6>
                            <h6 style="color: white;" class="mb-2"><span><i style="color: #fab005; padding-right: 1vh;" class="fa-solid fa-calendar-check"></i></span>Título: ${event.title}</h6>
                            <a href="${event.link}">
                                <span style="color: #fab005; text-decoration: underline;">Ver información...</span>
                            </a>
                        </div>
                    </div>
                </div>
            `;
        });
        eventsOuter.innerHTML = html;
    });
</script>

<section class="container neomorphic-defase px-5 ml-auto mr-auto mt-3 pt-3 pb-3 hide-scroll" style="max-height: 64vh; overflow-y: scroll">
    <div class='row'>
        <div class='col-12 display-2 text-left my-0 py-3'>
            <a role='button' href='?vista=Noticias'>
                <h1 style="color: white; font-size: 6vh;"><span><i style="color: #fab005; padding-right: 1vh;" class="fa-solid fa-calendar-days"></i></span>Eventos</h1>
            </a>
        </div>
    </div>

    <div class="events-outer overflow"></div>
</section>