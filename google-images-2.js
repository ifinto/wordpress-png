
function imgSelector($) {
  var boxes = jQuery('.rg_di')
  var box = boxes.eq(0)
  var boxesLength = boxes.length

  if (!box) {
  	return
  }

  deHighlight(boxes)


  window.addEventListener('scroll', function () {
    addListeners()
  })

  function addListeners() {
    var newLength = boxes.length
    boxes = jQuery('.rg_di')
    boxes.slice(boxesLength, newLength)
      .on('mouseenter', function () {
        $(this).addClass('hovered')
      })
      .on('mouseleave', function () {
        $(this).removeClass('hovered')
      })
    boxesLength = boxes.length
  }

  document.addEventListener('keydown', function (e) {
    switch(e.keyCode) {
      case 17:
        //ctrl
        var _box = $('.rg_di.hovered')
        if (_box.hasClass('selected')) {
          _box.removeClass('selected')
          deHighlight(_box)
        } else {
          _box.addClass('selected')
          highlight(_box)
        }
        break;
      case 13:
        //enter
        generateData()
        break;
    }
  }, true)

  function highlight(box) {
    box.css({'box-shadow': '0 0 0 3px #33ff33'})
    box.find('a').css({'opacity': 1})
  }

  function deHighlight(box) {
    box.css({'box-shadow': 'none'})
    box.find('a').css({'opacity': 0.7})
  }

  function generateData() {
    var output = []
    var filtered = $('.rg_di.selected .rg_meta')

    filtered.each(function () {
      var raw = $(this).html()
      var j = JSON.parse(raw)
      output.push({
        img: j.ou,
        alt: j.s
      })
    })

    // console.log(output)
    console.log(JSON.stringify(output))
  }
}

imgSelector($)