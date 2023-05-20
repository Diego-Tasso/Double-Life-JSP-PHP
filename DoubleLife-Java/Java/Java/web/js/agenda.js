(function(win,doc){
  'use strict';

  //Captura o elemento HTML marcado com a classe
  var calendarEl = doc.querySelector('.calendar');

  //Cria uma instância
  //dayGridMonth - Abre por mês, pode ser semana ou display 
 var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    //headerToolBar - configuração da barra superior. O que vai no início, no meio ou no fim
    headerToolbar:{
        start: 'prev,next,today',
        center: 'title',
        end: 'dayGridMonth, timeGridWeek, timeGridDay'
    },
    //buttonText - personaliza o texto dos botões da headerToolBar
    buttonText:{
        today:    'hoje',
        month:    'mês',
        week:     'semana',
        day:      'dia'
    },
    //locale - troca a linguagem
    locale:'pt-br',
    //Captura o evento clique
    dateClick: function(info) {
        alert('Clicked on: ' + info.dateStr);
        alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        alert('Current view: ' + info.view.type);
        // change the day's background color just for fun
        info.dayEl.style.backgroundColor = 'red';
    },
    //Marca eventos no calendário
    events: [
        {
            title: 'Escrevi texto',
            start: '2022-07-01',
            end: '2020-07-02'
        },
        {
            title: 'Um outro texto',
            start: '2022-07-05',
            end: '2022-07-07'
        }
    ]
});
calendar.render();

})(window,document);