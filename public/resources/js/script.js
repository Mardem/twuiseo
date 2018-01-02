/**
 * Created by Marden on 13/12/2017.
 */
$(document).ready(function () {
  $(".counter").counterUp({
    delay: 100,
    time: 1200
  });

  alert('Seja bem vindo a área do usuário. Aqui você tem acesso a todas as suas ferramentas para administração. Se você é um dos nossos parceiros, aqui você poderá ver seus ganhos mensais e também suas vendas.');

  $('.calendar').pignoseCalendar({
    theme: 'light', // light, dark, blue
    lang: 'pt'
  });
  // $('.postit').postitall();
  // $.fn.postitall.globals = {
  //   prefix: '#postit',
  //   filter: 'domain',
  //   savable : true,
  //   randomColor: true,
  //   toolbar: true,
  //   autoHideToolBar: true,
  //   removable: true,
  //   askOnDelete: false,
  //   draggable: true,
  //   resizable: true,
  //   editable: true,
  //   changeoptions: true,
  //   blocked: true,
  //   minimized: true,
  //   expand: true,
  //   fixed: true,
  //   addNew: true,
  //   showInfo: false,
  //   pasteHtml: false,
  //   htmlEditor: false,
  //   autoPosition: true,
  //   addArrow: 'back'
  // };
  //
  // $.fn.postitall.defaults = {
  //   content: 'Teste'
  // };

  let sparklineLogin = function () {
    $('#sparklinedash').sparkline([1, 2, 3, 4, 5, 6, 10], {
      type: 'bar',
      height: '40',
      barWidth: '5',
      resize: true,
      barSpacing: '5',
      barColor: '#65febb',
    });

    $('#sparklinedash2').sparkline([1, 2, 3, 4, 5, 6, 10], {
      type: 'bar',
      height: '40',
      barWidth: '5',
      resize: true,
      barSpacing: '5',
      barColor: '#388480',
    });
    $('#sparklinedash3').sparkline([1, 2, 3, 4, 5, 6, 10], {
      type: 'bar',
      height: '40',
      barWidth: '5',
      resize: true,
      barSpacing: '5',
      barColor: '#6a9aef',
    });

    $('#ganhos').sparkline([10, 5], {
      type: 'pie',
      height: '40',
      barWidth: '5',
      resize: true,
      barSpacing: '5',
      barColor: '#ef4122',
    });

  };

  let sparkResize;
  $(window).on("resize", function () {
    clearTimeout(sparkResize);
    sparkResize = setTimeout(sparklineLogin, 1000);
  });
  sparklineLogin();

  $('#panel-widgets').removeClass('hidden');
});

$('img').on('dragstart', function (event) {
  event.preventDefault();
});