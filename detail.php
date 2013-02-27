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
                        <a class="button grey" value="Reset">Reset</a> 
                        <input class="button red noborder" type="submit" value="Valider">
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>

<?php include('footer.php'); ?>