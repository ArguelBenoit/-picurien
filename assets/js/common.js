import $ from 'jquery';

// const customScrollBar = (e) => {
//   const el = document.querySelector(e);
//   el.style.display = 'none';
// };
//
//
//
// $(document).ready(() => {
//   customScrollBar('#leftpanel');
// });

const panelGestion = {
  state: {
    open: false,
    size: $(window).width()
  },
  panelsSize() {
    const { open } = this.state;
    this.state.size = $(window).width();
    let { size } = this.state;
    if (size >= 1000) {
      $('.rightpanel').css('filter', 'blur(0px)');
      $('#closebutton').css('display', 'none');
      $('#leftpanel').css({
        width: 380,
        left: 0
      });
      $('.rightpanel').css({
        width: size - 380,
        marginLeft: 380
      });
    } else if (size < 1000) {
      $('#closebutton').css('display', 'inherit');
      $('#leftpanel').css({
        width: '88%',
        left: open ? 0 : '-88%'
      });
      $('.rightpanel').css({
        width: size,
        marginLeft: 0
      });
    }
  },
  buttonClicked() {
    this.state.open = !this.state.open;
    const { size, open } = this.state;
    if (size < 1000) {
      $('#leftpanel').css({
        left: open ? 0 : '-88%'
      });
      $('.rightpanel').css('filter', open ? 'blur(10px)' : 'blur(0px)');
    }
  }
};

$(document).ready(() => {
  panelGestion.panelsSize();
  $(window).resize(() => panelGestion.panelsSize());

  setTimeout(() => $('#whitesail').fadeOut(800), 250);

  $('#leftpanel ul li a').click(e => {
    const link = e.target.href;
    if ($(window).width() >= 1000) {
      $('#whitesail').fadeIn(800);
      setTimeout( () => window.location.href = link, 800);
    } else {
      panelGestion.buttonClicked();
      setTimeout( () => $('#whitesail').fadeIn(800), 400);
      setTimeout( () => window.location.href = link, 1200);
    }
    e.preventDefault();
  });

  $('#closebutton').click(() => panelGestion.buttonClicked());
  $('.rightpanel').click(() => panelGestion.state.open ? panelGestion.buttonClicked() : '' );
});
