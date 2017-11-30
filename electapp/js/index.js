var content = $('.content'),
  form = $('.form'),
  message = $('#message'),
  animatable = $('.animatable'),
  signedIn = 'signed-in',
  signedUp = 'signed-up';

//Toggle between forms
$('.sign--type .link').click(function() {
  content.hide();
  if ($(this).hasClass('signin')) {
    $('.signin--content').show();
  } 
  else if ($(this).hasClass('signup')) {
    $('.signup--content').show();
  }
});

//On form submit
$('form').submit(function () {
  sendForm($(this).attr('id'));
  return false;
});

//Animate form and wait for reset
function sendForm(form) {
  setTimeout(function() {
    animateForm(form);
  }, 200);
  setTimeout(reset, 5000);
}

function animateForm(frm) {
  animatable.addClass(frm);
  content.hide(300);

  //check which form to call appropriate animation
  if (frm == signedIn) {
    message.text("INFORMATION SUBMITTED SUCCESSFULLY");
  } else if (frm == signedUp) {
    message.text("welcome to")
    $('.container').addClass(signedUp);
  }
}