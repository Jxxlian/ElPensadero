let myCalendar = document.getElementById('CalendarioWeb');
let myModal = document.getElementById('modalAdd');

let btnAdd = document.getElementById('btnAdd');
let btnDelete = document.getElementById('btnDelete');
let btnModify = document.getElementById('btnModify');

let titleEvent = document.getElementById('titleEvent');
let txtDescription = document.getElementById('txtDescription');
let txtID = document.getElementById('txtID');
let txtTitle = document.getElementById('txtTitle');
let txtColor = document.getElementById('txtColor');
let txtDate = document.getElementById('txtDate');
let txtHour = document.getElementById('txtHour');

var NewEvent;

    $(btnAdd).click(function(){
        GetInformation()
        SendInformation('add',NewEvent);        

    })

    $(btnDelete).click(function(){
        GetInformation()
        SendInformation('delete',NewEvent)
    })

    $(btnModify).click(function(){
        GetInformation()
        SendInformation('modify',NewEvent)
    })

    function GetInformation(){
        NewEvent= {
                ID:$(txtID).val(),
                title:$(txtTitle).val(),
                start:$(txtDate).val()+" "+$(txtHour).val(),
                color:$(txtColor).val(),
                description:$(txtDescription).val(),            
                textColor:'#FFFFF',
                end:$(txtDate).val()+" "+$(txtHour).val()
        }
    }

    function SendInformation(action, objEvent, modal){
        $.ajax({
            type:'POST',
            url:'event.php?action='+action,
            data:objEvent,
            success:function(msg) {
                if(msg) {                
                    $(myCalendar).fullCalendar('refetchEvents');
                    if(!modal){
                        $(myModal).modal('toggle');
                    }
                    }
                },
            error:function(){
                alert('error');
            }
    
        });
    }

    $('.clockpicker').clockpicker();

    function CleanForm(){
    $(txtID).val(''),
    $(txtTitle).val(''),
    $(txtColor).val(''),
    $(txtDescription).val('')
}

$(document).ready(function() {
    $(myCalendar).fullCalendar({
        header: {          
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'                         
        },
        dayClick:function(date,jsEvent,view){
            $(btnAdd).prop('disabled', false);
            $(btnDelete).prop('disabled', true);
            $(btnModify).prop('disabled', true);

            CleanForm(); 
            $(txtDate).val(date.format());
            $(myModal).modal();
        },
        
        events: 'http://localhost/Portafolio/elPensadero/event.php',

        eventClick:function(calEvent,jsEvent,view) {

            $(btnAdd).prop('disabled', true);
            $(btnDelete).prop('disabled', false);
            $(btnModify).prop('disabled', false);

            $(titleEvent).html(calEvent.title),
            
            $(txtDescription).val(calEvent.description),
            $(txtID).val(calEvent.id),
            $(txtTitle).val(calEvent.title),
            $(txtColor).val(calEvent.color),

            DateTime= calEvent.start._i.split(" ");
            $(txtDate).val(DateTime[0]);
            $(txtHour).val(DateTime[1]);

            $(myModal).modal();
        },
        editable:true,
        eventDrop:function(calEvent){
            $(txtID).val(calEvent.id),
            $(txtTitle).val(calEvent.title),
            $(txtColor).val(calEvent.color),
            $(txtDescription).val(calEvent.description),

            DateTime= calEvent.start.format().split(" ")
            $(txtDate).val(DateTime[0]);
            $(txtHour).val(DateTime[1]);

            GetInformation()
            SendInformation('modify',NewEvent, true)
        }
    });
})

