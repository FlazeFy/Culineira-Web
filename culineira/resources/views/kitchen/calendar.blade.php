<style>
    #calendar {
        max-width: 1100px;
        margin: 40px auto;
    }
    .fc-event-main{
        background:#Eb7336;
        padding:0px 10px;
        border-radius:6px;
    }
    .fc-h-event{
        border:none;
        border-radius:6px;
    }
    .fc-daygrid-event-dot{
        border:calc(var(--fc-daygrid-event-dot-width,8px)/ 2) solid var(--fc-event-border-color, #198553);
    }
    .fc .fc-daygrid-day.fc-day-today{
        background:#eb7336;
        opacity:40%;
    }

</style>

<div id="calendar"></div>

<!-- Add daily recipe -->
<div class="modal fade" id="addDailyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/kitchen/addDishCalendar" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <div class="row w-100">
                    <div class="col-md-6">
                        <h5 class="modal-title" id="exampleModalLabel">Add Daily Dish on</h5>
                    </div>
                    <div class="col-md-5">
                        <input required class='form-control' name='date' type='date' id="modalDate"></input>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="recipe_list_add_holder">
                @foreach($recipe as $r)
                    <div class="card mb-2 rounded w-100 shadow p-3">
                        <div class='row'>
                            <div class='col-md-3'>
                                <img src="http://127.0.0.1:8000/storage/{{ $r->recipe_url }}?>" alt='{{$r->recipe_name}}'
                                    class='rounded img-fluid'>
                            </div>
                            <div class='col-md-7'>
                                <h6>{{$r->recipe_name}}</h6>
                                <a>{{$r->recipe_type}}</a><br>
                                <a>{{$r->recipe_main_ing}}</a>
                            </div>
                            <div class='col-md-1 h-40 mt-1 pt-2 pb-2'>
                                <div class="form-check">
                                    <input class="form-check-input" name="recipe_id[]" title="Select" style="cursor:pointer; height:25px; width:25px;" type="checkbox" value="{{$r->id}}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <div class="row w-100">
                    <div class="col-md">
                        <select class="form-select" name="calendar_type" aria-label="Default select example">
                            @foreach (\App\Models\search_config::all() as $item)
                                @if($item->config_type == 'calendar')
                                <option value="{{$item->config_value}}">{{$item->config_value}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md">
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Add To Calendar</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth'
            //right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        selectable: true,
        events: [
        // {
        //     title: 'All Day Event',
        //     start: '2022-07-01'
        // },
        // {
        //     title: 'Long Event',
        //     start: '2022-07-07',
        //     end: '2022-07-10'
        // },
        // {
        //     groupId: '999',
        //     title: 'Repeating Event',
        //     start: '2022-07-09T16:00:00'
        // },
        // {
        //     groupId: '999',
        //     title: 'Repeating Event',
        //     start: '2022-07-16T16:00:00'
        // },
        // {
        //     title: 'Conference',
        //     start: '2022-07-11',
        //     end: '2022-07-13'
        // },
        // {
        //     title: 'Meeting',
        //     start: '2022-07-12T10:30:00',
        //     end: '2022-07-12T12:30:00'
        // },
        // {
        //     title: 'Lunch',
        //     start: '2022-07-12T12:00:00'
        // },
        // {
        //     title: 'Meeting',
        //     start: '2022-07-12T14:30:00'
        // },
        // {
        //     title: 'Birthday Party',
        //     start: '2022-07-13T07:00:00'
        // },
        // {
        //     title: 'Click for Google',
        //     url: 'http://google.com/',
        //     start: '2022-07-28'
        // }
        ],
        dateClick: function(info, date) {
            document.getElementById("modalDate").defaultValue = info.dateStr;
            $('#addDailyModal').modal('show');
        }
    });

    calendar.render();
    });
</script>
