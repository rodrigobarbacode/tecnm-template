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
        var annexes = document.querySelector(".annexes-outer");
        var html = "";

        data.forEach(function(annex) {
            html += "<div>";
            html += "<a target='_blank' href='" + annex.link + "'>";
            html += "<img loading='lazy' src='" + annex.image + "' style='width: 100%; height: 100%; object-fit: cover; padding: 10px'>";
            html += "</a>";
            html += "</div>";
        });

        annexes.innerHTML = html;
    });
    
    
</script>

<!-- Anexos -->
<div class='row w-100 justify-content-center bg-light py-3 m-0'>
    <section class='anexos annexes-outer bg-light pb-2 anexo sitios'></section>
</div>
<br/>