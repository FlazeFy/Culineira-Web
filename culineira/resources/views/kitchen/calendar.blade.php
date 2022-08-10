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
        background: rgba(235, 115, 54, 0.4);
    }
    .fc-event-time{
        display:none;
    }

    .fc-day-today .fc-event-title{
        color: #414141 !important;
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

<!-- Recipe detail -->
<div class="modal fade" id="recipeDetailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <img src="" alt='' id="recipeImage"
                style='margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
            <h5 style='font-size:16px; text-align:center;' id="recipeName"></h5>
            <div class='container' id='headingCard' style='padding:5px;'>
                <div class='row' style='justify-content:center; width:110%;'>
                    <div class='col-md-5'>
                        <a style='font-size:12px; color:#5cb85c;' id="recipeLevel"></a>
                    </div>
                    <div class='col-md-5'>
                        <a style='font-size:12px;' id="recipeType"></a>
                    </div>
                </div>
            </div>
            <div class='container mt-2'>
                <div class='row' style='justify-content:center; width:110%;'>
                    <div class='col-md-3'>
                        <a style='font-size:15px; font-weight:bold; text-align:center;' id="recipeTimeSpend"></a>
                        <p style='font-size:12px;'>min</p>
                    </div>
                    <div class='col-md-3'>
                        <a style='font-size:15px; font-weight:bold; text-align:center;' id="recipeCal"></a>
                        <p style='font-size:12px;'>cal</p>
                    </div>
                    <div class='col-md-4'>
                        <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;' id="recipeMainIng"></p>
                    </div>
                </div>
            </div>
            <a class='btn btn-primary' id="recipeHref" href=""><i class="fa-solid fa-arrow-right"></i> See More</a>
        </div>
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
            //     groupId: '992',
            //     title: 'All Day Test',
            //     start: '2022-07-09'
            // },
            // {
            //     groupId: '992',
            //     title: 'Long Event',
            //     start: '2022-07-09T16:00:00'
            // },
            <?php
                foreach($calendar as $cl){
                    echo"
                        {
                            title: '".$cl->recipe_name."',
                            start: '".$cl->created_at."',
                            extendedProps: {
                                id: '/detail/".$cl->id_recipe."',
                                level: '".$cl->level."',
                                type: '".$cl->type."',
                                timeSpend: '".$cl->timeSpend."',
                                cal: '".$cl->cal."',
                                mainIng: '".$cl->mainIng."',
                                image: 'http://127.0.0.1:8000/storage/".$cl->image."'
                            },
                        },
                    ";
                }
            ?>
        ],

        //Show recipe detail
        eventClick:  function(info, jsEvent, view) {
            $('#recipeName').html(info.event.title);
            $('#recipeLevel').html(info.event.extendedProps.level);
            $('#recipeType').html(info.event.extendedProps.type);
            $('#recipeTimeSpend').html(info.event.extendedProps.timeSpend);
            $('#recipeCal').html(info.event.extendedProps.cal);
            $('#recipeMainIng').html(info.event.extendedProps.mainIng);
            document.getElementById("recipeImage").src = info.event.extendedProps.image;
            document.getElementById("recipeHref").href = info.event.extendedProps.id;
            $('#recipeDetailModal').modal('show');
        },

        //Add daily dish
        dateClick: function(info, date) {
            document.getElementById("modalDate").defaultValue = info.dateStr;
            $('#addDailyModal').modal('show');
        }
    });

    calendar.render();
    });
</script>
