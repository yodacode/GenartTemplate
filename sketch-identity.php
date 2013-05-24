<?php include('header.php'); ?>
<header class="header">
    <section class="container">
        <h1>L'oeuvre crystal</h1>
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
            <canvas id="wordcloud" data-processing-sources="pde/wordcloud.pde">	</canvas>


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


        <!-- 
            DOCUMENTATION :
            la div control-group doit avoir pour id : <nom_du_champ_associe>-control-group
            le input doit avoir un attribut : data-error-selector="<nom_du_champ_associe>-message"
            le span help-inline doit avoir le même id que la valeur de data-error-selector et par défaut doit avoir un display: none;

        -->
        <div class="span4">
            <div class="myform">
                
                <form name="form-contact" id="form-art">
                    <div id="subject-control-group" class="control-group">
                        <label for="re" class="control-label">Quelle est votre date de naissance ?</label>
                        <div class="controls">
                            <input type="date" name="bday"/>                          
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="re" class="control-label">Quelle est votre minute de naissance ?</label>
                        <div class="controls">
                            <input type="text" id="re" name="re" placeholder="entre 1 et 60" />                            
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="brothersister" class="control-label">combien avez vous de freres et soeurs ?</label>
                        <div class="controls">
                            <input type="text" id="brothersister" name="brothersister" />                            
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="brothersister" class="control-label">Vous êtes ?</label>
                        <input type="radio" style="width:auto" name="sex" value="1"><span style="margin-left:7px">Un homme</span><br>
                        <input type="radio" style="width:auto" name="sex" value="2"><span style="margin-left:7px">Une femme</span>
                    </div>

                    
                    <div class="control-group">
                        <label for="zipcode" class="control-label">Quel est votre département de naissance ?</label>
                        <div class="controls">
                            <input type="text" id="zipcode" name="zipcode" placeholder="entre 1 et 99"/>                            
                        </div>
                    </div>
                   
                    <input type="submit" class="button red noborder pull-right" value="Envoyer"/>
                    <?php //include_once 'formsArt/_form_wordcloud.php'; ?>
                </form>
                
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="spacer"></div>
        <section class="page-header">
            <h2>Les oeuvres du meme artiste</h2>
        </section>
        <article class="span4 article-thumb">
            <figure>
                <img src="img/picture2.jpg"/>
                <section class="pict-descr">
                    <h4>Titre : Art concept</h4>
                    <p>Auteur : Bernado de Zoro</p>
                </section>
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
                <section class="pict-descr">
                  <h4>Titre : Art concept</h4>
                  <p>Auteur : Bernado de Zoro</p>
                </section>
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
                <section class="pict-descr">
                  <h4>Titre : Art concept</h4>
                  <p>Auteur : Bernado de Zoro</p>
                </section>
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

<?php include('footer.php'); ?>
