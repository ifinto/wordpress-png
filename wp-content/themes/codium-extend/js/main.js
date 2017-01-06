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

  $('.tnp form').on('submit', function (e) {
    e.preventDefault()
    var $form = $(this)
    $.post({
      url: $form.attr('action'),
      data: $form.serialize(),
      success: function () {
        $form.append('<div class="form-success">Thanks, your email is added!</div>')
      },
      error: function () {
        $form.append('<div class="form-error">Sorry, something happened on server,<br>please reload the page and try again.</div>')
      }
    })
  })
})

function initSearchFilters() {
  var UI = {
    sizeSlider:      $('.js-size-slider'),
    sizeSliderFrom:  $('.js-size-slider-from'),
    sizeSliderTo:    $('.js-size-slider-to'),
    imageType:       $('.js-image-type .btn'),
    colorpicker:     $('.jscolor')
  }
  var query = {
    's':      getParameterByName('s'),
    'w_from': getParameterByName('w_from'),
    'w_to':   getParameterByName('w_to'),
    'img_type': getParameterByName('img_type')
  }
  var SLIDER_VALUES = [0, 2000]

  UI.sizeSlider.slider({
    range: true,
    min: SLIDER_VALUES[0],
    max: SLIDER_VALUES[1],
    values: [SLIDER_VALUES[0], SLIDER_VALUES[1]],
    slide: function(event, ui) {
      UI.sizeSliderFrom.html(ui.values[0] +' px')
      if (ui.values[1] === SLIDER_VALUES[1]) {
        UI.sizeSliderTo.html('<i>&infin;</i>')
      } else {
        UI.sizeSliderTo.html(ui.values[1] +' px')
      }
    },
    stop: function (event, ui) {
      query['w_from'] = ui.values[0]
      console.log(ui.values[1], SLIDER_VALUES[1])
      if (ui.values[1] === SLIDER_VALUES[1]) {
        query['w_to'] = null
        UI.sizeSliderTo.html('<i>&infin;</i>')
      } else {
        query['w_to']   = ui.values[1]
      }
      sendSearchQuery()
    }
  })

  if (query['w_from']) {
    UI.sizeSliderFrom.html(query['w_from'] +' px')
    UI.sizeSlider.slider('values', 0, query['w_from'])
  }

  if (query['w_to']) {
    UI.sizeSliderTo.html(query['w_to'] +' px')
    UI.sizeSlider.slider('values', 1, query['w_to'])
  }

  if (query['img_type']) {
    UI.imageType.filter('[data-type="'+ query['img_type'] +'"]').addClass('active')
  } else {
    UI.imageType.filter('[data-type="any"]').addClass('active')
  }

  UI.imageType.on('click', function (e) {
    e.preventDefault()
    if ($(this).hasClass('active')) return

    $(this).addClass('active').siblings().removeClass('active')
    query['img_type'] = $(this).data('type')
    sendSearchQuery()
  })

  UI.colorpicker.on('change', function () {
    var hex = '#' + this.value
    setCustomImgBg(hex)
  })

  setCustomImgBg()

  function setCustomImgBg(hex) {
    if (!hex) {
      hex = window.localStorage.getItem('customImgBg')
      UI.colorpicker.val(hex)
    } else {
      window.localStorage.setItem('customImgBg', hex)
    }
    if (!hex) return

    var css = `.custom-img-bg { background-color: ${hex} !important; }`

    if ($('style').length === 0) {
      $('head').append('<style type="text/css"></style>')
    }
    $('style').append(css)
  }

  function sendSearchQuery() {
    var params = _.reduce(query, function (arr, val, key) {
      if (_.isNull(val) || _.isUndefined(val)) {
        return arr
      } else {
        arr.push(`${key}=${val}`)
        return arr
      }
    }, [])
    var newQuery = '?'+ params.join('&')
    window.location.href = newQuery
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

(function(doc, script) {
  var js, 
      fjs = doc.getElementsByTagName(script)[0],
      frag = doc.createDocumentFragment(),
      add = function(url, id) {
          if (doc.getElementById(id)) {return;}
          js = doc.createElement(script);
          js.src = url;
          id && (js.id = id);
          frag.appendChild( js );
      };
      
    // Google+ button
    add('https://apis.google.com/js/plusone.js');
    // Facebook SDK
    add('//connect.facebook.net/en_US/all.js#xfbml=1', 'facebook-jssdk');
    // Twitter SDK
    add('//platform.twitter.com/widgets.js');

    fjs.parentNode.insertBefore(frag, fjs);
}(document, 'script')); 
