     
var init = function(){
        

    $('#inscription-form a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    
    $('.button').on('mouseover' , function(){
        $(this).stop().fadeTo('fast', 0.6);
    });
    
    $('.button').on('mouseleave' , function(){
        $(this).stop().fadeTo('fast', 1);
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

        $elem.css({
            'height' : $height
        })
        $elem.show();
        $elem.stop().animate({
            opacity : 0.8
        },500);
    
    });

    $article.on('mouseleave', function(){
        
        var $height = getGoodHeight($(this).find('figure').height(), $(this).find('img').height());
        var $elem = $(this).find('.pict-descr');

        $elem.css({
            'height' : $height
        })
        $elem.stop().animate({
            opacity : 0
        },500, function(){
            $elem.hide();
        });
    });
        

}


var processing = function(){

    $('#generate-pk').on("click", function(){
        var id = $(this).attr('data-val');
        var pjs = Processing.getInstanceById(id);
        pjs.goAnimation();
    });
    
    $('#generate-wordcloud').on("click", function(){
        var id = $(this).attr('data-val');
        var pjs = Processing.getInstanceById(id);
        pjs.stopAnimation();
    });
    
    $('#generate-creature').on("click", function(){
        var id = $(this).attr('data-val');
        var pjs = Processing.getInstanceById(id);
        pjs.stopAnimation();
    });
    
    $('#generate').live("click", function(){
        
        var id = $(this).attr('data-val');
        var pjs = Processing.getInstanceById(id);
        //var text = document.getElementById('inputtext').value;
        // var json = $.get("http://api.nytimes.com/svc/search/v1/article?format=json&query=science&begin_date=19890110&end_date=19890111&api-key=9e8ba0bc4ac74914aeed8c9a91f79320:1:67375507");
        var json = {
            "offset" : "0" , 
            "results" : [{
                "body" : "LEAD: To the Editor: To the Editor: The summary of my view of the relationship between the greenhouse effect and the 1988 heat wave and drought (''Scientists Link '88 Drought to Natural Cycle in Tropical Pacific.'' Science Times, Jan. 3) is misleading. It states that I agree with Kevin Trenberth's analysis relating the drought to equatorial Pacific" , 
                "date" : "19890111" , 
                "title" : "Thou Shalt Not Mess With the Global Environment; Hot Summers in 1990's" , 
                "url" : "http:\/\/www.nytimes.com\/1989\/01\/11\/opinion\/l-thou-shalt-not-mess-with-the-global-environment-hot-summers-in-1990-s-524589.html"
            } , {
                "body" : "LEAD: To the Editor: To the Editor: A letter by Henry Etzkowitz, a State University of New York professor (''New York Can Learn From U. of California,'' Dec. 28) questions the commitment to research in public higher education in this state. He does not note that the City University of New York ranks among the top 15 university systems in the" , 
                "date" : "19890111" , 
                "title" : "City University Has a Proud Academic Record" , 
                "url" : "http:\/\/www.nytimes.com\/1989\/01\/11\/opinion\/l-city-university-has-a-proud-academic-record-250989.html"
            } , {
                "body" : "LEAD: Reflecting the growing rage of car owners over soaring insurance premiums, Gov. Thomas H. Kean today proposed scrapping New Jersey's 16-year-old system of ''no fault'' automobile insurance, an experiment originally intended to save drivers money. Reflecting the growing rage of car owners over soaring insurance premiums, Gov. Thomas H. Kean" , 
                "byline" : "By PETER KERR, Special to the New York Times" , 
                "date" : "19890111" , 
                "title" : "Kean Urges Ending 'No Fault' Car Insurance" , 
                "url" : "http:\/\/www.nytimes.com\/1989\/01\/11\/nyregion\/kean-urges-ending-no-fault-car-insurance.html"
            } , {
                "body" : "LEAD: Marshall Harvey Stone, a prodigious and influential American mathematician, died Monday in Madras, India, apparently of a stroke. Dr. Stone, who was 85 years old, had gone to India to attend a music festival. Marshall Harvey Stone, a prodigious and influential American mathematician, died Monday in Madras, India, apparently of a stroke. Dr." , 
                "byline" : "By GINA KOLATA" , 
                "date" : "19890111" , 
                "title" : "M.H. Stone, Acclaimed Mathematician, Dies at 85" , 
                "url" : "http:\/\/www.nytimes.com\/1989\/01\/11\/obituaries\/mh-stone-acclaimed-mathematician-dies-at-85.html"
            } , {
                "body" : "LEAD: Twenty-five years after the Surgeon General of the United States jolted the nation with the first official warning of the health perils of cigarettes, a Federal report has concluded that smoking has caused more death and disease than previously believed. Twenty-five years after the Surgeon General of the United States jolted the nation with" , 
                "byline" : "By RICHARD L. BERKE, Special to the New York Times" , 
                "date" : "19890111" , 
                "title" : "U.S. Report Raises Estimate of Smoking Toll" , 
                "url" : "http:\/\/www.nytimes.com\/1989\/01\/11\/us\/us-report-raises-estimate-of-smoking-toll.html"
            } , {
                "body" : "LEAD: Richard M. Stallman is a computer programmer obsessed with a mission. He wants to bring back the good old days when programming was a communal activity and those toiling at the craft freely shared their ideas - and their source code, the internal instructions that tell the computer what to do. Richard M. Stallman is a computer programmer" , 
                "byline" : "By JOHN MARKOFF" , 
                "date" : "19890111" , 
                "title" : "BUSINESS TECHNOLOGY; One Man's Fight for Free Software" , 
                "url" : "http:\/\/www.nytimes.com\/1989\/01\/11\/business\/business-technology-one-man-s-fight-for-free-software.html"
            } , {
                "body" : "LEAD: A chance decision not to sit down one day last June may have saved the life of Prime Minister Turgut Ozal of Turkey and preserved political stability in his country. A chance decision not to sit down one day last June may have saved the life of Prime Minister Turgut Ozal of Turkey and preserved political stability in his country. Instead of" , 
                "byline" : "By CLYDE HABERMAN, Special to the New York Times" , 
                "date" : "19890111" , 
                "title" : "Favor Fading, Premier Faces Turkish Vote" , 
                "url" : "http:\/\/www.nytimes.com\/1989\/01\/11\/world\/favor-fading-premier-faces-turkish-vote.html"
            } , {
                "body" : "LEAD: THE goods, so to speak, were on the table, and 50 high-school and college students were bidding fiercely for the job attributes that would satisfy them most. ''How much for intellectual status?'' It starts at $50 and is quickly bid up to $650. ''What about working alone?'' Sold, to the young lady in the front row for $450. THE goods, so to" , 
                "byline" : "By CLAUDIA H. DEUTSCH" , 
                "date" : "19890111" , 
                "title" : "No Headline" , 
                "url" : "http:\/\/www.nytimes.com\/1989\/01\/11\/garden\/no-headline-491189.html"
            } , {
                "body" : "LEAD: Following are excerpts from the prepared text of Gov. Thomas H. Kean's State of the State address to the New Jersey Legislature: Following are excerpts from the prepared text of Gov. Thomas H. Kean's State of the State address to the New Jersey Legislature: As I took the oath of office seven years ago, New Jersey was sliding into the worst" , 
                "byline" : "AP" , 
                "date" : "19890111" , 
                "title" : "Excerpts From Address by Kean" , 
                "url" : "http:\/\/www.nytimes.com\/1989\/01\/11\/nyregion\/excerpts-from-address-by-kean.html"
            } , {
                "body" : "LEAD: Reserve Doubleday Field for the night of the Baseball Hall of Fame induction next summer. Don't worry about turning on the lights. We can play this one from memory. Reserve Doubleday Field for the night of the Baseball Hall of Fame induction next summer. Don't worry about turning on the lights. We can play this one from memory. You can have" , 
                "byline" : "By George Vecsey" , 
                "date" : "19890111" , 
                "title" : "SPORTS OF THE TIMES; The Outcasts Challenge The Famers" , 
                "url" : "http:\/\/www.nytimes.com\/1989\/01\/11\/sports\/sports-of-the-times-the-outcasts-challenge-the-famers.html"
            }] , 
            "tokens" : ["science"] , 
            "total" : 21
        }
        if(json) {
            for(i=0; i <= 15; i++){
                var article = json.results[''+i+''];
                var y = 30*i;
                var x = Math.floor((Math.random()*100)+1);
                var title = article['title'];
                var color = document.getElementById('color').value;
                console.log(title);
                console.log(color);
                pjs.addTitles(title, x, y, color);
            }
        }
    });
}

var choixsupport = function(){
    $("#choix-support li").on("click",function(){
        var price_support = $(this).find("span.badge").attr("data-value");
        var price_oeuvre = $("#badge-price-oeuvre").attr("data-price-oeuvre");
        var price_total = parseInt(price_support) + parseInt(price_oeuvre);
                
        $("#badge-price-support").empty().text(price_support+"€");
        $("#badge-price-total").empty().text(price_total+"€");
    });
}

var validatorformart = function(){
    var validator = new FormValidator("form-art",
        [
        {
            name: "val1", //name du champ.
            rules: 'required|valid_email' //choix du validator chainé par des pipes
        },
        {
            name: "val3",
            rules: 'required'
        }
        ],function(errors, event){
            if (errors.length > 0) {
                for(var index in errors){
                    console.log(errors[index]);
                    var idElement = errors[index].id;
                    var helperSelector = $("#"+idElement).attr("data-error-selector");
                    $("#"+helperSelector).show();
                    var groupSelector = "#"+errors[index].name+"-control-group";
                    $(groupSelector).addClass("error");
                }
            }
        });
}

var deletecartline = function(){
    
    $('tr td #deleteline').on('click', function(){
        
        var elem = $(this).parent("td").parent('tr');
        
        elem.hide(500, function () {
            elem.remove();
        });
    
    });
}

      
$('document').ready(function(){

    init();
    processing();
    choixsupport();
    validatorformart();
    deletecartline();
});
