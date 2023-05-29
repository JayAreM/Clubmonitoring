<style>
    #calendar-container {
        width: 100%;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    }
    #calendar {
        padding: 10px;
        margin: 10px;
        width: 98.5%;
        height: 610px;
        border: 2px solid black;
        opacity: 0;
        animation: fade-in .8s forwards;
        background: linear-gradient(#fff, #f1f1f1);
    }
    .fc-header-toolbar {
        
    }
    .fc-event {
        background-color: #007bff !important;
        border-color: #007bff !important;
        color: #fff !important;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    }
    .fc-event:hover {
        background-color: #0056b3 !important;
        border-color: #0056b3 !important;
        color: #fff !important;
    }
    .fc-today-button {
        background-color: #007bff !important;
        border-color: #007bff !important;
        color: #fff !important;
        transition: transform 0.2s ease-in-out;
    }
    .fc-today-button:hover {
        transform: scale(1.1);
    }
    .fc-day {
        border: 1px solid #ccc !important;
    }
    .fc-event-container {
        animation: slide-in 0.5s forwards;
    }
    .fc-event-remove {
        animation: slide-out 0.5s forwards;
    }
    body {
  font-family: 'Open Sans', sans-serif;
}
   
    @keyframes fade-in {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    @keyframes slide-in {
        from {
            transform: translateX(-100%);
        }
        to {
            transform: translateX(0%);
        }
    }
    @keyframes slide-out {
        from {
            transform: translateX(0%);
        }
        to {
            transform: translateX(100%);
        }
    }
</style>

<body>
<div>
  <div id='calendar-container' wire:ignore>
    <div id='calendar'></div>
  </div>
</div>
</body>
@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>
    
    <script>
        document.addEventListener('livewire:load', function() {
            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;
            var calendarEl = document.getElementById('calendar');
            var checkbox = document.getElementById('drop-remove');
            var data =   @this.events;
            var calendar = new Calendar(calendarEl, {
            events: JSON.parse(data),
            dateClick(info)  {
               var title = prompt('Enter Event Title');
               var date = new Date(info.dateStr + 'T00:00:00');
               if(title != null && title != ''){
                 calendar.addEvent({
                    title: title,
                    start: date,
                    allDay: true
                  });
                 var eventAdd = {title: title,start: date};
                 @this.addevent(eventAdd);
                 alert('Event Added');
               }else{
                alert('Event Title Is Required');
               }
            },
            editable: true,
            selectable: true,
            displayEventTime: false,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function(info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                // if so, remove the element from the "Draggable Events" list
                info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            },
            eventDrop: info => @this.eventDrop(info.event, info.oldEvent),
            eventClick: function(info) {
                if(confirm("Are you sure you want to delete this event?")) {
                    var eventId = info.event.id;info.event.remove();
                    @this.deleteEvent(info.event.id);
                    alert('Event Deleted');
                }
            },
            loading: function(isLoading) {
                    if (!isLoading) {
                        // Reset custom events
                        this.getEvents().forEach(function(e){
                            if (e.source === null) {
                                e.remove();
                            }
                        });
                    }
                }
            });
            calendar.render();
            @this.on(`refreshCalendar`, () => {
                calendar.refetchEvents()
            });
        });
    </script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />
@endpush