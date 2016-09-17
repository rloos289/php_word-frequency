//<!-- Back End -->
console.log('basic javascript is functioning')

//<!-- Front End  -->
$(document).ready(function(){
  $('form').submit(function(event){
    var sentence = $('#sentence').val();
    var word = $('#word').val();
    if (!word || !sentence){
      alert('please fill out both forms');
      event.preventDefault();
    }
  });
});
