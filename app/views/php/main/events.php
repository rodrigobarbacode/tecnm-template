<style>
    .events {
        margin-top: 1rem;
        max-height: 550px;
    }
    @media (max-width: 768px) {
        .events {
            height: 66vh;
            max-height: 66vh;
        }
    }

    /* Para telefonos */
    @media (max-width: 576px) {
        .events {
            margin-top: 2.5rem;
        }
    }
</style>

<script>
    fetch('/data/events')
        .then(response => response.json())
        .then(data => {
            // Mostrar el spinner por un máximo de 3 segundos
            setTimeout(() => {
                document.querySelector('.spinner-border').style.display = 'none';
                document.querySelector('.spinner-outer').style.display = 'none';

                var eventsOuter = document.querySelector(".events-outer");
                var html = "";

                if (data.length === 0) {
                    // Si no hay eventos, mostrar un mensaje
                    html = `
                        <div class="no-events-message text-center">
                            <i class="fa-solid fa-circle-info" style="color: #fab005; font-size: 3rem;"></i>
                            <p style="color: white; font-size: 1.5rem; margin-top: 1rem;">No hay eventos disponibles por el momento</p>
                        </div>
                    `;
                } else {
                    // Generar HTML para cada evento
                    data.forEach(function(event) {
                        html += `
                            <div class="event">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-4 col-4 text-center bordered-con">
                                        <p style="color: #2f476f; font-size: 3vh; font-weight: bolder;">${event.month} ${event.day}</p>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-1 separator-link">
                                        <style>
                                            .ln {
                                                border-left: 2px solid white;
                                                height: 10vh;
                                            }
                                        </style>
                                        <div class="ln"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <h6 style="color: white;"><span><i style="color: #fab005; padding-right: 1vh;" class="fa-regular fa-clock"></i></span>Hora: ${event.start} - ${event.end}</h6>
                                        <h6 style="color: white;" class="mb-2"><span><i style="color: #fab005; padding-right: 1vh;" class="fa-solid fa-calendar-check"></i></span>Título: ${event.title}</h6>
                                        <a href="${event.url}">
                                            <span style="color: #fab005; text-decoration: underline;">Ver información...</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                }

                eventsOuter.innerHTML = html;
            }, 1500); // Mostrar el spinner por 3 segundos
        })
        .catch(error => {
            console.error('Error fetching data:', error);
            // Opcional: Mostrar mensaje de error en caso de fallo en la carga de datos
        });
</script>

<section class="container events neomorphic-defase px-5 ml-auto mr-auto pt-3 pb-3" style="height: 100%; overflow-y: scroll; z-index: 2000;">
    <div class='row'>
        <div class='col-12 display-2 text-left my-0 py-3'>
            <a role='button' href='?vista=Noticias'>
                <h1 style="color: white; font-size: 4vh;"><span><i style="color: #fab005; padding-right: 2vh;" class="fa-solid fa-calendar-days"></i></span>Eventos</h1>
            </a>
        </div>
    </div>
    <div class="events-outer overflow"></div>
    <div class="text-center mt-3 spinner-outer">
        <div class="spinner-border text-warning" style="width: 5rem; height: 5rem; font-weight: bolder;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
        <p class="mt-3" style="color: white; font-weight: bold; font-size: 1.5rem;">Cargando eventos...</p>
    </div>
</section>