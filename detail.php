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
                    <ul class="dropdown-menu">
                        <li>Aucun</li>
                        <li class="divider"></li>
                        <li><figure><img src="img/products/product-1.jpg"/></figure><span class="badge">15€</span></li>
                        <li class="divider"></li>
                        <li><figure><img src="img/products/product-2.jpg"/></figure><span class="badge">15€</span></li>
                    </ul>
                </div>
            </div>

            <div class="span1">Oeuvre : <span class="badge">15€</span></div>
            <div class="span1">Support : <span class="badge">15€</span></div>
            <div class="span1">Total : <span class="badge">30€</span></div>
            <a id="add-oeuvre" class="button red" name="Add">Ajouter à mes oeuvres</a> 
        </div>

        <div class="span4">
            <div class="myform">
                <form id="form-art" class="form-horizontal">
                    <div class="control-group">
                        <label for="val1">Value 1 : </label><input type="text" id="val1" name="val1">
                    </div>
                    <div class="control-group">
                        <label for="val2">Value 2 : </label><input type="text" id="val2" name="val2">
                    </div>
                    <div class="control-group">
                        <label for="val3">Value 3 : </label><input type="text" id="val3" name="val3">
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
