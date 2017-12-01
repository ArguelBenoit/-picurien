import $ from 'jquery';


const customScrollBar = (selector) => {

  const parent = $(selector);
  const child = $(selector).children();

  parent.css({ 'overflow': 'hidden' });

  // const scrollbarName = `scrollbar-${selector.substring(1, selector.length)}`;
  // const scrollbarId = '#' + scrollbarName;
  // $( '#' + scrollbarName ).remove();
  // parent.append(`<div class="customScrollBar" id="${scrollbarName}"></div>`);

  const init = () => {

    const parentHeight = parent.height();
    const childHeight = child.outerHeight();
    const parentFullSize =
      (parentHeight - parseInt(parent.css('padding-top')));
    let ToolDivHeight = 0;

    const toolDivId = 'marginToolDiv_' + selector.substring(1, selector.length);
    $( '#' + toolDivId ).remove();
    parent.prepend(`<div id="${toolDivId}"></div>`);
    $( '#' + toolDivId ).css({
      'margin-top': 0,
      'transition-duration': '200ms'
    });

    // $(scrollbarId).css({
    //   background: color,
    //   position: 'absolute',
    //   top: 0,
    //   width: width + 'px',
    //   height: parentFullSize * (parentFullSize / child.height()),
    //   left: parseInt(parent.css('margin-left')) + parent.outerWidth() - width
    // });

    if (child.outerHeight() > parent.height()) {
      let elementIsOver = false;
      $('body').bind('mousewheel', e => {
        if (elementIsOver) {
          if(e.preventDefault)
            e.preventDefault();
          e.returnValue = false;
          return false;
        }
      });
      parent.mouseenter( () => elementIsOver = true );
      parent.mouseleave( () => elementIsOver = false );

      parent.bind('mousewheel', evt => {
        ToolDivHeight += evt.originalEvent.wheelDelta / 3;
        if (ToolDivHeight > 0)
          ToolDivHeight = 0;
        else if (ToolDivHeight < parentFullSize - childHeight)
          ToolDivHeight = parentFullSize - childHeight;
        $( '#' + toolDivId ).css('margin-top', ToolDivHeight);
      });

    } else {
      parent.unbind('mousewheel');
    }
  };

  init();
  $(window).resize(() => init());

};

export default customScrollBar;
