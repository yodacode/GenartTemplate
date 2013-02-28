     
var init = function(){
        

    $('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
        
        

}
      
$('document').ready(function(){
   
   init();
   
});   