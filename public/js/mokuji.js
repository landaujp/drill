$( function() {
  $('#side-menu p.chapter').click(function(){
    console.log('click');
    $(this).next().toggleClass("active");
  });
});