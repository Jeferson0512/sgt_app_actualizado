
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="CalendarioWeb"></div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>
   -->
    <!-- Modal -->
    <div class="modal fade" id="ejemploEvent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleEvent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="descriptionEvent"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de Equipo a Mantenimiento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('CalendarioWeb');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'es', //En que zona y lenguaje esta el calendario
                // navLinks: true,
                // allDaySlot: false, // Para que no aparezca un chiste debajo de la cabezera
                now: '2023-01-07',
                // editable: true, //Esto puede hacer mover los eventos que tengamos registrados dentro del calendario
                aspectRatio: 2, // Nos indica el tamaño del alto del calendario
                // scrollTime: '00:00',
                themeSystem: 'bootstrap5',
                dayMaxEvents: true, // Esto nos permite que cada dia puede tener mas de 10 eventos y no se reajustan el tamaño, pero si hay un click se podra visualizar lo que hay
                headerToolbar: {
                    left: 'NewBtn today prev,next',
                    center: 'title',
                    right: ''
                    // right: 'timeGridWeek,dayGridMonth'
                },
                customButtons: { // Se puede crear botones a tu antojo y decir que evento puede realizar
                    NewBtn: {
                        id: 'hola',
                        text: 'Registrar',
                        click: function () {
                            console.log('Nuevo Evento lanzado')
                            $('#exampleModal').modal('show')
                        }
                    }
                },
                eventSources: [{
                    events: [
                        {
                            id: '1', start: '2023-01-07T02:00:00', end: '2023-01-10T07:00:00', title: 'Evento 1 de prueba',
                            description: 'Descripcion del Evento de prueba', color: 'red'
                        },
                        { id: '2', start: '2023-01-07', end: '2023-01-07', title: 'event 2', description: 'Evento 2', color: 'blue' },
                        { id: '3', start: '2023-01-06', end: '2023-01-09', title: 'event 3' },
                        { id: '4', start: '2023-01-07T03:00:00', end: '2023-01-07T08:00:00', title: 'event 4' },
                        { id: '5', start: '2023-01-07T00:30:00', end: '2023-01-07T02:30:00', title: 'event 5' }
                    ],
                    color: 'green',
                    textColor: 'white'
                }],
                dateClick: function (info) { // Puede hacer click en cualquier dia del calendario
                    // alert('Click on ' + info.date)
                    console.log(info)
                    console.log(info.date.toLocaleDateString('es-ES', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }))
                    // Devuelve martes, 3 de enero de 2023
                    console.log(info.date.toLocaleDateString('es-ES'))
                    // Devuelve 3/1/2023
                    console.log(info.date.toLocaleDateString("en-GB"))
                    // Devuelve 03/01/2023
                    // alert('Coordinadas' + info.jsEvent.pageX + ',' + info.jsEvent.oageY)
                    console.log(info.jsEvent.pageX)
                    // alert('Nombre del dia' + info.view.name)
                    console.log(info.view.type)
                    // // // var ejemplo = document.getElementById('exampleModal');
                    // // // console.log("estoy en DATACLICK")
                    // // // console.log(ejemplo);
                    // // // // ejemplo.addEventListener('shown.bs.modal', function () {
                    // // // //     // myInput.focus()
                    // // // // })
                    // // // var modal = bootstrap.Modal.getInstance(ejemplo)
                    // // // // ejemplo.modal()
                    $(this).css('background-color', 'red')
                    $('#exampleModal').modal('show')
                },
                eventClick: function (info) {
                    console.log(info.event.title)
                    console.log(info.event.extendedProps.description)
                    $('#ejemploEvent').modal('show')
                    $('#titleEvent').html(info.event.title)
                    $('#descriptionEvent').html(info.event.extendedProps.description)

                },
                initialView: 'dayGridMonth',//Con que se inicializa el calendario
                views: {//Personalizar nombres de los botones predefinidos
                    dayGridMonth: {
                        // type: 'resourceTimeline',
                        // duration: { days: 3 },
                        buttonText: 'Mes',
                        titleFormat: { month: 'long', year: 'numeric' },
                        dayHeaderFormat: { weekday: 'long' },
                        // multiMonthTitleFormat: { day: 'long'},
                        // titleFormat: { year: 'numeric', month: '2-digit', day: '2-digit' }
                    }
                    // resourceTimelineThreeDays: {
                    //     type: 'resourceTimeline',
                    //     duration: { days: 3 },
                    //     buttonText: '3 days'
                    // }
                },
                // resourceAreaWidth: '30%',
                // resourceAreaColumns: [
                //     {
                //         headerContent: 'Room',
                //         field: 'title'
                //     },
                //     {
                //         headerContent: 'Occupancy',
                //         field: 'occupancy'
                //     }
                // ],
                // resourceOrder: '-occupancy,title', // when occupancy tied, order by title
                // resources: [
                //     { id: 'a', title: 'Auditorium A', occupancy: 40 },
                //     { id: 'b', title: 'Auditorium B', occupancy: 40, eventColor: 'green' },
                //     { id: 'c', title: 'Auditorium C', occupancy: 40, eventColor: 'orange' },
                //     { id: 'd', title: 'Auditorium D', occupancy: 40 },
                //     { id: 'e', title: 'Auditorium E', occupancy: 40 },
                //     { id: 'f', title: 'Auditorium F', occupancy: 40, eventColor: 'red' },
                //     { id: 'g', title: 'Auditorium G', occupancy: 40 },
                //     { id: 'h', title: 'Auditorium H', occupancy: 40 },
                //     { id: 'i', title: 'Auditorium I', occupancy: 50 },
                //     { id: 'j', title: 'Auditorium J', occupancy: 50 },
                //     { id: 'k', title: 'Auditorium K', occupancy: 40 },
                //     { id: 'l', title: 'Auditorium L', occupancy: 40 },
                //     { id: 'm', title: 'Auditorium M', occupancy: 40 },
                //     { id: 'n', title: 'Auditorium N', occupancy: 80 },
                //     { id: 'o', title: 'Auditorium O', occupancy: 80 },
                //     { id: 'p', title: 'Auditorium P', occupancy: 40 },
                //     { id: 'q', title: 'Auditorium Q', occupancy: 40 },
                //     { id: 'r', title: 'Auditorium R', occupancy: 40 },
                //     { id: 's', title: 'Auditorium S', occupancy: 40 },
                //     { id: 't', title: 'Auditorium T', occupancy: 40 },
                //     { id: 'u', title: 'Auditorium U', occupancy: 40 },
                //     { id: 'v', title: 'Auditorium V', occupancy: 40 },
                //     { id: 'w', title: 'Auditorium W', occupancy: 40 },
                //     { id: 'x', title: 'Auditorium X', occupancy: 40 },
                //     { id: 'y', title: 'Auditorium Y', occupancy: 40 },
                //     { id: 'z', title: 'Auditorium Z', occupancy: 40 }
                // ],
            });

            calendar.render();
        });
    </script>