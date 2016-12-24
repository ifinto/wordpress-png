$(document).ready(function(){
  if ($('.js-search-filters').length > 0) {
    initSearchFilters()
  }

	$('#menu-maine li')
		.on('click mouseover', function () {
		  $(this).addClass('hover')
		})
		.on('mouseout', function () {
		  $(this).removeClass('hover')
		})
})

function initSearchFilters() {
  var UI = {
    sizeSlider:      $('.js-size-slider'),
    sizeSliderFrom:  $('.js-size-slider-from'),
    sizeSliderTo:    $('.js-size-slider-to')
  }
  var query = {
    search:    getParameterByName('s'),
    widthFrom: getParameterByName('w_from'),
    widthTo:   getParameterByName('w_to')
  }

  UI.sizeSlider.slider({
    range: true,
    min: 0,
    max: 2000,
    values: [0, 2000],
    slide: function(event, ui) {
      UI.sizeSliderFrom.html(ui.values[0] +' px')
      UI.sizeSliderTo.html(ui.values[1] +' px')
    },
    stop: function (event, ui) {
      var newQuery = '?s='+ query.search +'&w_from='+ ui.values[0] +'&w_to='+ ui.values[1]
      window.location.href = newQuery
    }
  })

  if (query.widthFrom && query.widthTo) {
    UI.sizeSliderFrom.html(query.widthFrom +' px')
    UI.sizeSliderTo.html(query.widthTo +' px')
    UI.sizeSlider.slider('values', [query.widthFrom, query.widthTo])
  }
}

function getParameterByName(name, url) {
  if (!url) {
    url = window.location.href;
  }
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}