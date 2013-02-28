     
var init = function(){
        

    $('#inscription-form a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });


    var $article = $('.article-thumb');

    $article.on('click', function(){
        var linkDetail = $(this).find('a').attr('href');
        window.location = linkDetail;
    });

    var getGoodHeight = function($heightFigure, $heightImg){
        var $height = null;
        if ($heightFigure < $heightImg){
            $height = $heightFigure;
        } else {
            $height = $heightImg;
        }

        return $height;
    };

    $article.on('mouseenter', function(){
        
        var $height = getGoodHeight($(this).find('figure').height(), $(this).find('img').height());
        var $elem = $(this).find('.pict-descr');

        $elem.css({'height' : $height })
        $elem.show();
        $elem.stop().animate({
            opacity : 0.8
        },500);
    
    });

    $article.on('mouseleave', function(){
        
        var $height = getGoodHeight($(this).find('figure').height(), $(this).find('img').height());
        var $elem = $(this).find('.pict-descr');

        $elem.css({'height' : $height})
        $elem.stop().animate({
            opacity : 0
        },500, function(){
            $elem.hide();
        });
    });
        

}
      
$('document').ready(function(){
   
   init();
   
});   