
function imgSelector($) {
  var boxes = jQuery('#isr_mc #rg .rg_di')
  var box = boxes.eq(0)
  var index

  if (!box) {
  	return
  }

  highlight(box)

  document.addEventListener('keydown', function (e) {
    var boxes = jQuery('#isr_mc #rg .rg_di')
    var boxesLength = boxes.length
    index = box.index('.rg_di')

    switch(e.keyCode) {
      case 37:
        //left
        console.log(index)
        if (index === 0) return
        deHighlight(box)
        box = boxes.eq(index - 1)
        highlight(box)
        console.log(index)
        e.preventDefault()
        e.stopPropagation()
        break;
      case 39:
        //right
        if (boxesLength == index + 1) return
        deHighlight(box)
        box = boxes.eq(index + 1)
        highlight(box)
        e.preventDefault()
        e.stopPropagation()
        break;
      case 38:
        //top
        unTrash(box)
        e.preventDefault()
        e.stopPropagation()
        break;
      case 40:
        //bottom
        deHighlight(box)
        trash(box)
        if (boxesLength == index + 1) return
        box = boxes.eq(index + 1)
        highlight(box)
        e.preventDefault()
        e.stopPropagation()
        break;
      case 13:
        //enter
        generateData()
        break;
    }
  }, true)

  function highlight(box) {
    var boxOffetTop = box.offset().top;
    box.css({'box-shadow': '0 0 0 3px #33ff33'})
    if (boxOffetTop + box.height() > window.pageYOffset + innerHeight ||
        boxOffetTop < window.pageYOffset) {
      $("html, body").animate({
        scrollTop: boxOffetTop
      }, 100)
    }
  }

  function deHighlight(box) {
    box.css({'box-shadow': 'none'})
  }

  function trash(box) {
    box.addClass('removed')
    box.find('a').css({'opacity': 0.1})
  }

  function unTrash(box) {
    box.removeClass('removed')
    box.find('a').css({'opacity': 1})
  }
  function generateData() {
    var output = []
    var filtered = $('.rg_di').slice(0, index + 1).not('.removed').find('.rg_meta')

    filtered.each(function () {
      var raw = $(this).html()
      var j = JSON.parse(raw)
      output.push({
        img: j.ou,
        alt: j.s
      })
    })

    console.log(output)
    //console.log(JSON.stringify(output))
  }
}

imgSelector($)