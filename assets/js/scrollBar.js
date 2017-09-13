import $ from 'jquery';

const customScrollBar = (selector) => {

  const parent = $(selector);
  const child = $(selector).children();
  let level = 0;

  parent.css({ 'overflow': 'hidden' });
  child.css({ 'transition-duration': '300ms'});

  const init = () => {
    if (child.height() > parent.height()) {
    //
    //   parent.bind('mousewheel', evt => {
    //     level += (evt.originalEvent.wheelDelta)/2;
    //     if (level > 0)
    //       level = 0;
    //     else if (level < parent.height()-child.height())
    //       level = parent.height()-child.height();
    //     child.css('margin-top', level);
    //   });
    // } else {
    //   parent.unbind('mousewheel');
    //   child.css({ marginTop: 0 });
    //   level = 0;
    //   child.css('margin-top', level);

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
        level += (evt.originalEvent.wheelDelta)/2;
        if (level > 0)
          level = 0;
        else if (level < parent.height()-child.height())
          level = parent.height()-child.height();
        child.css('margin-top', level);
      });

    }
  };

  init();
  $(window).resize(() => init());

};

export default customScrollBar;
