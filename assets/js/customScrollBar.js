import $ from 'jquery';


const customScrollBar = (e, color) => {

  const parent = $(e);
  const child = $(e).children();

  let level = 0;
  let parentSize = parent.height();
  let childSize = child.height();

  parent.css({ 'overflow': 'hidden' });
  child.css({ 'transition-duration': '300ms'});

  const scrollbarId = `scrollbar-${e.substring(1, e.length)}`;
  parent.append(`<div id="${scrollbarId}"></div>`);

  $(`#${scrollbarId}`).css({
    position: 'absolute',
    background: color,
    height: ( parentSize * 100 ) / childSize,
    width: 1,
    top: 0,
    left: $(e).width() - 2
  });

  if (childSize > parentSize) {
    parent.bind('mousewheel', evt => {
      level += (evt.originalEvent.wheelDelta)/2;
      if (level > 0)
        level = 0;
      else if (level < parentSize-childSize)
        level = parentSize-childSize;

      child.css('margin-top', level);
      $(`#${scrollbarId}`).css({
        top: - level
      });
    });
  }

  // $(window).bind('resize', () => {
  //   parentSize = parent.height();
  //   childSize = child.height();
  //   level = 0;
  //   child.css('margin-top', level);
  // });


};

export default customScrollBar;
