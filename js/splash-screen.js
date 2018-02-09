
$(document).ready(function () {
  if (sessionStorage.getItem('splashScreen') !== 'true'){

  var quotes = [
    {
      quote: "Life is like a box of chocolate its sweet doesn't last long and in the end you feel nothing at all",
      author: "Forest Gump"
    },
    {
      quote: "A wise man once said you should not bealive in something simply becasue you want to bealive it",
      author: "Tyrion Lannister"
    },
    {
      quote: "You shall not pass",
      author: "Gandalf the grey"
    }
];
  var randomQuote = quotes[Math.floor(Math.random() * quotes.length)];


  $('body').prepend('<header id="splashScreen"></header>');
  $('#splashScreen').prepend('<blockquote></blockquote>');
  $('blockquote').prepend('<footer id="author"></footer>');
  $('blockquote').prepend('<p id="quote"></p>');
  $('#quote').html(randomQuote.quote);
  $('#author').html(randomQuote.author);
  $("#splashScreen").show().delay(2500).fadeOut();
  sessionStorage.setItem('splashScreen', 'true');
 }
});
