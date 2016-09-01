"use strict";

$(document).ready(function() {

	var mailbtn = $('#mail-btn');
	var form = $('#popup-section');
	var overlay = $('#overlay');

  //PopUp Triggers

  mailbtn.bind('click', function() {
     overlay.fadeIn(500);
     form.fadeIn(500);
  });

$(document).mouseup(function (e)
{
    var container = form;

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut(500);
        overlay.fadeOut(500);
    }
});

});