<?php include('header.php');?>
<header class="header">
    <section class="container">
      <h1>Connexion</h1>
    </section>
</header>

<section class="content">
	<section class="container">
		<section class="span5">
			<section class="page-header">
				<h2>Déjà membre</h2>
			</section>

			<form name="form-contact" class="form-horizontal">
				<div id="name-control-group" class="control-group">
					<label for="name" class="control-label">Nom : </label>
					<div class="controls">
						<input type="text" id="name" name="name" data-error-selector="name-message" placeholder="Votre prénom"/>
						<span class="help-inline" style="display: none;" id="name-message">
							Ce champ est obligatoire.
						</span>
					</div>
				</div>
				<div id="subject-control-group" class="control-group">
					<label for="subject" class="control-label">Sujet * : </label>
					<div class="controls">
						<input type="text" id="subject" name="subject" data-error-selector="subject-message" placeholder="Le sujet"/>
						<span class="help-inline" style="display: none;" id="subject-message">
							Ce champ est obligatoire.
						</span>
					</div>
				</div>
				<div id="mail-control-group" class="control-group">
					<label for="mail" class="control-label">E-mail * : </label>
					<div class="controls">
						<input type="text" id="mail" name="mail" data-error-selector="mail-message" placeholder="Votre E-mail"/>
						<span class="help-inline" style="display: none;" id="mail-message">
							Ce champ est obligatoire.
						</span>
					</div>
				</div>
				<div id="content-control-group" class="control-group">
					<label for="content" class="control-label">Message * : </label>
					<div class="controls">
						<textarea type="text" id="content" name="content" data-error-selector="content-message" placeholder="Votre message"></textarea>
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

<script type="text/javascript">
	$(function() {
	        var validator = new FormValidator("form-contact",
            [
                {
                    name: "mail", //name du champ.
                    rules: 'required|valid_email' //choix du validator chainé par des pipes
                },
                {
                    name: "message",
                    rules: 'required'
                },
                {
                    name: "subject",
                    rules: 'required'
                },
                {
                    name: "content",
                    rules: 'required'
                }
            ],
            function(errors, event){
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

<?php include('footer.php');?>