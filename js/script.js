     
/*var init = function(){
        

    var $href = 'home.html';
    

    var initDom = function(){
        $('a').on('click', function(e){
            if($href == $(this).attr('href') || $href == '#') return false;
            e.preventDefault();
            loadPage($(this).attr('href'));
        });
    };

    var loadPage = function(href){
    
        $.ajax({
            url : href,
            type : "GET",
            dataType : "html",
            success : function(data){
                $('.loader').slideUp();
                $('.page').empty();
                $('.page').append(data);
    
                initDom();

                var url = window.location.href;
                var elem = url.split('/')
                elem.pop();
                var newUrl = elem.toString();
                newUrl = newUrl.replace(/\,/g,'/');
                
                console.log("url : "+newUrl+$href);

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
   
}); */   