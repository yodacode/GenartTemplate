<?php include('header.php'); ?>
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
            <canvas id="pixel_knitting" data-processing-sources="pde/pixel_knitting.pde">	</canvas>


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
                <form id="form-art">
                    <?php include_once 'formsArt/_form_pixel_knitting.php'; ?>
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
