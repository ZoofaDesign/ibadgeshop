$(function(){
  $(".dial").knob();
  
  for (var a=[],i=0;i<20;++i) a[i]=i;

  // http://stackoverflow.com/questions/962802#962890
  function shuffle(array) {
    var tmp, current, top = array.length;
    if(top) while(--top) {
      current = Math.floor(Math.random() * (top + 1));
      tmp = array[current];
      array[current] = array[top];
      array[top] = tmp;
    }
    return array;
  }

  $(".sparklines").each(function(){
    $(this).sparkline(shuffle(a), {
          type: 'line',
          width: '150',
          lineColor: '#333',
          spotRadius: 2,
          spotColor: "#000",
          minSpotColor: "#000",
          maxSpotColor: "#000",
          highlightSpotColor: '#EA494A',
          highlightLineColor: '#EA494A',
          fillColor: '#FFF'});
  });
  
  $(".sortable").tablesorter();
  
  $(".pbar").peity("bar", {
    colours: ["#EA494A"],
    strokeWidth: 4,
    height: 32,
      max: null,
      min: 0,
      spacing: 4,
      width: 58
  });
});

$(document).ready(function() {
    fixThumbnailMargins();
    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
      events: 'http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic',
			
      			eventClick: function(event) {
      				// opens events in a popup window
      				window.open(event.url, 'gcalevent', 'width=700,height=600');
      				return false;
      			},
			
      			loading: function(bool) {
      				if (bool) {
      					$('#loading').show();
      				}else{
      					$('#loading').hide();
      				}
      			}
    })

});

/**
 * Adds 0 left margin to the first thumbnail on each row that don't get it via CSS rules.
 * Recall the function when the floating of the elements changed.
 */
function fixThumbnailMargins() {
    $('.row-fluid .thumbnails').each(function () {
        var $thumbnails = $(this).children(),
            previousOffsetLeft = $thumbnails.first().offset().left;
        $thumbnails.removeClass('first-in-row');
        $thumbnails.first().addClass('first-in-row');
        $thumbnails.each(function () {
            var $thumbnail = $(this),
                offsetLeft = $thumbnail.offset().left;
            if (offsetLeft < previousOffsetLeft) {
                $thumbnail.addClass('first-in-row');
            }
            previousOffsetLeft = offsetLeft;
        });
    });
}

// Fix the margins when potentally the floating changed
$(window).resize(fixThumbnailMargins);

