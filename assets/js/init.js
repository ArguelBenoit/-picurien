import $ from 'jquery';
import customScrollBar from './scrollBar.js';
import panelGestures from './gestures.js';


$(document).ready(() => {

  // after loading

  setTimeout(() => $('#whitesail').fadeOut(800), 250);

  // init

  panelGestures.panelsSize();
  customScrollBar('#leftpanel', 8, '#000', false);
  customScrollBar('.rightpanel', 8, '#eee', true);

  // resize

  $(window).resize(() => {
    panelGestures.panelsSize();
  });

  // click actions

  $('#closebutton').click(() => panelGestures.buttonClicked());
  $('.rightpanel').click(() => panelGestures.state.open ? panelGestures.buttonClicked() : '' );

  $('#leftpanel ul li a').click( e => {
    $('#whitesail').fadeIn(800);
    setTimeout( () => window.location.href = e.target.href, 800);
    e.preventDefault();
  });

});
