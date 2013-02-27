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

                <h3>Titre de l'oeuvre</h3>
                <p>
                    Processing is an open source programming language and environment for people who want to create images, animations, and interactions. 
                    Initially developed to serve as a software sketchbook and to teach there are tens of thousands of students.
                </p>
            </div>
        </div>

        <div class="span8">
            <div id="appercu">

            </div>
        </div>
        <div class="span4">
            <form id="form-art">
                <div class="span3">
                    Value 1 : <input type="text" name="val1">
                </div>
                <div class="span3">
                    Value 2 : <input type="text" name="val2">
                </div>
                <div class="span3">
                    Value 3 : <input type="text" name="val3">
                </div>
                <div class="span3">
                    Value 4 : <input type="text" name="val4">
                </div>
                <div class="span3">
                    <a class="button grey"value="Reset">Reset</a> 
                    <input class="button red noborder" type="submit" value="Valider">
                </div>

            </form>

        </div>
    </section>
</section>

<?php include('footer.php'); ?>