     
var init = function(){
        

    var $href = 'home.html';
    var isAllow = true;

    var initDom = function(){
        $('a').on('click', function(e){
            e.preventDefault();
            loadPage($(this).attr('href'));
        });
    };

    var loadPage = function(href){
        if(href != $href && isAllow)
            isAllow = false;
        $.ajax({
            url : href,
            type : "GET",
            dataType : "html",
            success : function(data){
                $('.loader').slideUp();
                $('.page').empty();
                $('.page').append(data);
                isAllow = true;
                initDom();
            },
            error : function(){
                return false;
            }
        });
    };
        
    loadPage($href);
        
        

}
      
$('document').ready(function(){
   
   init();
   
});    