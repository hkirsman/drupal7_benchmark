/**
 * @file
 * Do the benchmarking using ajax.
 */

(function($) {
  var timeBest = 0;
  var timeWorst = 0;
  var timesAll = [];
  var testCount = 0;

  var ping = function() {
    var now = new Date().getTime();
    $.get(Drupal.settings.basePath + 'admin/config', function(data) {
      var then = new Date().getTime();
      var time = then - now;
      timesAll[timesAll.length] = time;

      $('.simple-benchmark .log .content').prepend('<div>' + time + '</div>');
      if (timeBest === 0 || time < timeBest) {
        timeBest = time;
      }
      if (timeWorst === 0 || time > timeWorst) {
        timeWorst = time;
      }

      var totalTime = 0;
      $.each(timesAll, function(index, value) {
        totalTime += value;
      });
      var timesAverage = totalTime / timesAll.length;

      $('.simple-benchmark .current').html(
        '<strong>' + Drupal.t('Best') + '</strong>' + ': ' +  timeBest + '<br>' +
        '<strong>' + Drupal.t('Average') + '</strong>' + ': ' +  Math.round(timesAverage)
        //'<strong>' + Drupal.t('Worst') + '</strong>' + ': ' +  timeWorst*/
      );

      testCount++;

      if (testCount < 20) {
        setTimeout(ping, 500);
      }
    });
  };

  // Wait for test to start.
  setTimeout(ping, 1000);
})(jQuery);
