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
        events: [
        {
            title: 'All Day Event',
            start: '2022-07-01'
        },
        {
            title: 'Long Event',
            start: '2022-07-07',
            end: '2022-07-10'
        },
        {
            groupId: '999',
            title: 'Repeating Event',
            start: '2022-07-09T16:00:00'
        },
        {
            groupId: '999',
            title: 'Repeating Event',
            start: '2022-07-16T16:00:00'
        },
        {
            title: 'Conference',
            start: '2022-07-11',
            end: '2022-07-13'
        },
        {
            title: 'Meeting',
            start: '2022-07-12T10:30:00',
            end: '2022-07-12T12:30:00'
        },
        {
            title: 'Lunch',
            start: '2022-07-12T12:00:00'
        },
        {
            title: 'Meeting',
            start: '2022-07-12T14:30:00'
        },
        {
            title: 'Birthday Party',
            start: '2022-07-13T07:00:00'
        },
        {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2022-07-28'
        }
        ]
    });

    calendar.render();
    });
</script>
