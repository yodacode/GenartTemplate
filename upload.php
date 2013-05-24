<?php include('header.php');?>
<header class="header">
    <section class="container">
        <h3>Mes oeuvres</h3>
    </section>
</header>

<section class="content">
    <section class="container">
        <section class="span9">
            <section class="page-header">
                <h2>Uploader des nouvelles oeuvres</h2>
            </section>

            <form name="form-contact" class="form-horizontal">
                <div id="name-control-group" class="control-group">
                    <label for="name" class="control-label">Titre de l'oeuvre * : </label>
                    <div class="controls">
                        <input type="text" id="name" name="name" data-error-selector="name-message" placeholder="Titre de l'oeuvre"/>
                        <span class="help-inline" style="display: none;" id="name-message">
                            Ce champ est obligatoire
                        </span>
                    </div>
                </div>
                <div id="mail-control-group" class="control-group">
                    <label for="mail" class="control-label">Image de l'oeuvre * : </label>
                    <div class="controls">
                        <input type="file" name="image" placeholder="Iamge"/>
                        <span class="help-inline" style="display: none;" id="mail-message">
                            Ce champ est obligatoire.
                        </span>
                    </div>
                </div>
                <div id="content-control-group" class="control-group">
                    <label for="content" class="control-label">Description * : </label>
                    <div class="controls">
                        <textarea type="text" id="content" name="content" data-error-selector="content-message" placeholder="Description de l'oeuvre" style="width:100%;height:250px;"></textarea>
                        <span class="help-inline" style="display: none;" id="content-message">
                            Ce champ est obligatoire.
                        </span>
                    </div>
                </div>
                
                
                <input type="submit" class="button red noborder pull-right" value="Envoyer"/>
            </form>         
        </section>
    </section>
</section><!--end content-->
<?php include('footer.php');?>