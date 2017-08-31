import $ from 'jquery';


const panelGestures = {
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
      $('#header-mobile').css('filter', open ? 'blur(10px)' : 'blur(0px)');
    }
  }
};

export default panelGestures;
