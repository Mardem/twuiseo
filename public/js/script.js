$('.twuiseo-scroll').scrolly();
$('img').on('dragstart', function (event) {
  event.preventDefault();
});
$("#responsive-type").typewriter({
  prefix: "Veja seu site em ",
  text: ["computadores", "notebooks", "tablets", "celulares."],
  typeDelay: 100,
  waitingTime: 1000,
  blinkSpeed: 1000
});
$.elevator({
  item_top: $('#home'),
  item_bottom: $('#footer'),
  show_top: true,
  show_bottom: true,
  align: 'top right',
  glass: true,
  auto_hide: false,
  speed: 3000
});

function modal(id) {
  let modalProperties = document.getElementById(id);

  let title = modalProperties.dataset.twuiseoTitle;
  let content = modalProperties.dataset.twuiseoContent;

  $.sweetModal({
    title: title,
    content: content,
    theme: $.sweetModal.THEME_DARK
  });
}