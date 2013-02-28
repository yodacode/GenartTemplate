<?php include('header.php');?>
<header class="header">
    <section class="container">
        <h1>Information sur l'oeuvre : MegaSuper</h1>
    </section>
</header>

<section class="content">
    <section class="container-fluid">
        <div class="span8">
            <div id="info-oeuvre">
                <p>
                    Processing is an open source programming language and environment for people who want to create images, animations, and interactions. 
                    Initially developed to serve as a software sketchbook and to teach there are tens of thousands of students.
                </p>
            </div>
        </div>

        <div class="span8" id="app-span">

            <div id="appercu"></div>
            <div class="span3">
                <div class="btn-group">
                    <button class="btn btn-large">Selectionner un support</button>
                    <button class="btn btn-large dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul id="choix-support" class="dropdown-menu">
                        <li>Aucun</li>
                        <li class="divider"></li>
                        <li>
                            <figure>
                                <img src="img/products/product-1.jpg"/>
                            </figure>
                            <span data-value="15" class="badge">
                                15€
                            </span>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <figure>
                                <img src="img/products/product-2.jpg"/>
                            </figure>
                            <span data-value="25" class="badge">
                                25€
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="span1">Oeuvre : <span id="badge-price-oeuvre" data-price-oeuvre="15" class="badge">15€</span></div>
            <div class="span1">Support : <span id="badge-price-support" class="badge">15€</span></div>
            <div class="span1">Total : <span id="badge-price-total" class="badge">30€</span></div>
            <a id="add-oeuvre" class="button red" name="Add">Ajouter à mes oeuvres</a> 
        </div>
        <!-- DOCUMENTATION :
            
        -->

        <script type="text/javascript">
            $(function() {
                $("#choix-support li").on("click",function(){
                    var price_support = $(this).find("span.badge").attr("data-value");
                    var price_oeuvre = $("#badge-price-oeuvre").attr("data-price-oeuvre");
                    var price_total = parseInt(price_support) + parseInt(price_oeuvre);
                
                    $("#badge-price-support").empty().text(price_support+"€");
                    $("#badge-price-total").empty().text(price_total+"€");
                });
            });
        </script>

        <!-- 
            DOCUMENTATION :
            la div control-group doit avoir pour id : <nom_du_champ_associe>-control-group
            le input doit avoir un attribut : data-error-selector="<nom_du_champ_associe>-message"
            le span help-inline doit avoir le même id que la valeur de data-error-selector et par défaut doit avoir un display: none;

        -->
        <div class="span4">
            <div class="myform">
                <form id="form-art">
                    <div id="val1-control-group" class="control-group">
                        <label for="val1">Email : *</label>
                        <div class="controls">
                            <input type="text" data-error-selector="val1-message" id="val1" name="val1">
                            <span style="display:none;" id="val1-message" class="help-inline">Vous devez saisir un Email valide.</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="val2">Value 2 : </label><input type="text" id="val2" name="val2">
                    </div>
                    <div id="val3-control-group" class="control-group">
                        <label for="val3">Telephone : *</label>
                        <div class="controls">    
                            <input type="text" data-error-selector="val3-message" id="val3" name="val3">
                            <span style="display:none;" id="val3-message" class="help-inline">Vous devez remplir ce champ.</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="val4">Value 4 : </label><input type="text" id="val4" name="val4">
                    </div>
                    <div class="control-group">
                        <a class="button grey" name="Reset">Reset</a> 
                        <input class="button red noborder" type="submit" value="Valider">
                    </div>
                </form>
            </div>
        </div>

        <div class="span8">

        </div>



    </section>

    <script type="text/javascript">
        $(function() {
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
        });
    </script>

    <section class="container-fluid">
        <div class="spacer"></div>
        <section class="page-header">
            <h2>Les oeuvres du meme artiste</h2>
        </section>
        <article class="span4 article-thumb">
            <figure>
                <img src="img/picture2.jpg"/>
            </figure>
            <h3>Titre de l'oeuvre</h3>
            <p>
                Processing is an open source programming language and environment for people who want to create images, animations, and interactions. 
                Initially developed to serve as a software sketchbook and to teach there are tens of thousands of students.
            </p>
            <a href="detail.php" class="button green">en savoir plus</a>
        </article>
        <article class="span4 article-thumb">
            <figure>
                <img src="img/picture2.jpg"/>
            </figure>
            <h3>Titre de l'oeuvre</h3>
            <p>
                Processing is an open source programming language and environment for people who want to create images, animations, and interactions. 
                Initially developed to serve as a software sketchbook and to teach there are tens of thousands of students.
            </p>
            <a href="detail.php" class="button green">en savoir plus</a>
        </article>
        <article class="span4 article-thumb">
            <figure>
                <img src="img/picture2.jpg"/>
            </figure>
            <h3>Titre de l'oeuvre</h3>
            <p>
                Processing is an open source programming language and environment for people who want to create images, animations, and interactions. 
                Initially developed to serve as a software sketchbook and to teach there are tens of thousands of students.
            </p>
            <a href="detail.php" class="button green">en savoir plus</a>
        </article>
    </section>
</section>

<?php include('footer.php');?>
