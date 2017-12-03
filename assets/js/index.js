import $ from 'jquery';
import customScrollBar from './scrollBar.js';
import panelGestures from './gestures.js';


$(document).ready(() => {

  // after loading
  setTimeout(() => $('#whitesail').fadeOut(800), 250);

  // init

  panelGestures.panelsSize();
  customScrollBar('.leftpanel', '#000', 6);
  // customScrollBar('.rightpanel', '#ddd', 6);

  // resize

  $(window).resize(() => {
    panelGestures.panelsSize();
  });

  // click actions

  $('.menubutton').click(() => panelGestures.buttonClicked());
  $('.rightpanel').click(() => panelGestures.state.open ? panelGestures.buttonClicked() : '' );

  $('.leftpanel .main-menu a').click( e => {
    $('#whitesail').fadeIn(800);
    setTimeout( () => window.location.href = e.target.href, 800);
    e.preventDefault();
  });

});
