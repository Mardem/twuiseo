//        Counter Up
  $(".counter").counterUp({
    delay: 100,
    time: 1200
  });

//        Sparkline
  var sparklineLogin = function () {
    $('#sparklinedash').sparkline([1, 2, 3, 4, 5, 6, 10], {
      type: 'bar',
      height: '40',
      barWidth: '5',
      resize: true,
      barSpacing: '5',
      barColor: '#7460ee'
    });

    $('#sparklinedash3').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
      type: 'bar',
      height: '40',
      barWidth: '5',
      resize: true,
      barSpacing: '5',
      barColor: '#ee5452'
    });
    $('#sparklinedash2').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
      type: 'bar',
      height: '40',
      barWidth: '5',
      resize: true,
      barSpacing: '5',
      barColor: '#1c9991'
    });
  }

  var sparkResize;
  $(window).on("resize", function (e) {
    clearTimeout(sparkResize);
    sparkResize = setTimeout(sparklineLogin, 1000);
  });
  sparklineLogin();
