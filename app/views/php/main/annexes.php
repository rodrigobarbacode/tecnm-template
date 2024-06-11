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

    // Get annexes data from JSON file to display them.
    fetchLocalJSON("json/annexes-list.json", function (data) {
        var annexes = document.querySelector(".annexes-outer");
        var html = "";

        data.forEach(function (annex) {
            html += "<div class='card' style='height: 6rem; margin: 1rem; border-radius: 1rem;'>";
            html += "<a target='_blank' href='" + annex.link + "'>";
            html += "<img loading='lazy' src='" + annex.image + "' style='height: 100%; padding: 10px'>";
            html += "</a>";
            html += "</div>";
        });

        annexes.innerHTML = html;
    });


</script>

<!-- Anexos -->
<section class="neomorphic-defase ml-3 mr-3 mt-4">
    <div class='row w-100 justify-content-center pt-3 m-0'>
    <h2 style="color: white; font-size: 6vh; padding-top:15px;"><span>
        <i class="fa-solid fa-circle-info" style="color: #fab005; padding-right: 2vh;"></i></span>Anexos</h2>
    </div>
    <div class='row w-100 justify-content-center py-3'>
        <section class='anexos annexes-outer pb-2 anexo sitios'></section>
    </div>
</section>
<br />