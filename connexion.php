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

			<form name="authentification" class="form-horizontal">
				<div id="login-control-group" class="control-group">
					<label for="login" class="control-label">Identifiant : </label>
					<div class="controls">
						<input data-error-selector="login-message" type="text" id="login" name="login" placeholder="identifiant"/>
						<span class="help-inline" style="display:none;" id="login-message"> Veuillez utiliser votre E-mail pour vous authentifier. </span>
					</div>
				</div>
				<div id="password-control-group" class="control-group">
					<label for="password" class="control-label">Mot de passe : </label>
					<div class="controls">
						<input data-error-selector="password-message" type="password" id="password"  name="password" placeholder="Mot de passe"/>
						<span class="help-inline" style="display:none;" id="password-message"> Ce champ est obligatoire. </span>
					</div>
				</div>
				<input type="submit" class="button red noborder pull-right" value="Connexion"/>
			</form>
				
		</section>
		<section class="span5">
			<section class="page-header">
				<h2>Inscription</h2>
			</section>
			<ul id="inscription-form" class="nav nav-tabs">
			  <li class="active">
			  	<a href="#customer" data-toggle="tab">Membre</a>
			  </li>
			  <li >
			    <a href="#artist" data-toggle="tab">Artiste</a>
			  </li>
			</ul>
			<section class="tab-content">
				
				<form name="form-artist" class="form-horizontal tab-pane fade" id="artist">
					<div id="nameArtist-control-group" class="control-group">
						<label for="nameArtist" class="control-label">Nom  * : </label>
						<div class="controls">
							<input data-error-selector="nameArtist-message" type="text" id="nameArtist"  name="nameArtist" placeholder="Votre nom"/>
							<span class="help-inline" style="display:none;" id="nameArtist-message"> Ce champ est obligatoire. </span>
						</div>
					</div>
					<div id="firstnameArtist-control-group" class="control-group">
						<label for="firstnameArtist" class="control-label">Prénom  * : </label>
						<div class="controls">
							<input data-error-selector="firstnameArtist-message" type="text" id="firstnameArtist"  name="firstnameArtist" placeholder="Prénom"/>
							<span class="help-inline" style="display:none;" id="firstnameArtist-message"> Ce champ est obligatoire. </span>
						</div>
					</div>
					<div id="mailArtist-control-group" class="control-group">
						<label for="mailArtist" class="control-label">E-mail  * : </label>
						<div class="controls">
							<input data-error-selector="mailArtist-message" type="text" id="mailArtist"  name="mailArtist" placeholder="vote-mail@mail.com"/>
							<span class="help-inline" style="display:none;" id="mailArtist-message"> Veuillez entrer un E-mail valide. </span>
						</div>
					</div>
					<div id="passwordArtist-control-group" class="control-group">
						<label for="passwordArtist" class="control-label">Mot de passe * : </label>
						<div class="controls">
							<input data-error-selector="passwordArtist-message" type="password" id="passwordArtist"  name="passwordArtist" placeholder="Mot de passe"/>
							<span class="help-inline" style="display:none;" id="passwordArtist-message"> Ce champ est obligatoire. </span>
						</div>
					</div>
					<div id="passwordArtistConfirm-control-group" class="control-group">
						<label for="passwordArtistConfirm" class="control-label">Confirmation  * : </label>
						<div class="controls">
							<input data-error-selector="passwordArtistConfirm-message" type="password" id="passwordArtistConfirm"  name="passwordArtistConfirm" placeholder="Confirmation"/>
							<span class="help-inline" style="display:none;" id="passwordArtistConfirm-message"> Les deux mots de passes sont différents. </span>
						</div>
					</div>
					<div id="phoneArtist-control-group" class="control-group">
						<label for="phoneArtist" class="control-label">Téléphone  * : </label>
						<div class="controls">
							<input data-error-selector="phoneArtist-message" type="text" id="phoneArtist"  name="phoneArtist" placeholder="Téléphone"/>
							<span class="help-inline" style="display:none;" id="phoneArtist-message"> Ce champ est obligatoire. </span>
						</div>
					</div>
					<div id="websiteArtist-control-group" class="control-group">
						<label for="websiteArtist" class="control-label">Site web : </label>
						<div class="controls">
							<input data-error-selector="websiteArtist-message" type="text" id="websiteArtist"  name="websiteArtist" placeholder="www.votre-site.com"/>
							<span class="help-inline" style="display:none;" id="websiteArtist-message">  </span>
						</div>
					</div>
					<input type="submit" class="button red noborder pull-right" value="Inscription"/>
				</form>

				<form name="form-customer" class="form-horizontal tab-pane active in" id="customer">
					
					<div id="mailCustomer-control-group" class="control-group">
						<label for="mailCustomer" class="control-label">E-mail  * : </label>
						<div class="controls">
							<input data-error-selector="mailCustomer-message" type="text" id="mailCustomer"  name="mailCustomer" placeholder="vote-mail@mail.com"/>
							<span class="help-inline" style="display:none;" id="mailCustomer-message"> Veuillez entrer un E-mail valide. </span>
						</div>
					</div>
					<div id="passwordCustomer-control-group" class="control-group">
						<label for="passwordCustomer" class="control-label">Mot de passe * : </label>
						<div class="controls">
							<input data-error-selector="passwordCustomer-message" type="password" id="passwordCustomer"  name="passwordCustomer" placeholder="Mot de passe"/>
							<span class="help-inline" style="display:none;" id="passwordCustomer-message"> Ce champ est obligatoire. </span>
						</div>
					</div>
					<div id="passwordCustomerConfirm-control-group" class="control-group">
						<label for="passwordCustomerConfirm" class="control-label">Confirmation  * : </label>
						<div class="controls">
							<input data-error-selector="passwordCustomerConfirm-message" type="password" id="passwordCustomerConfirm"  name="passwordArtistConfirm" placeholder="Confirmation"/>
							<span class="help-inline" style="display:none;" id="passwordCustomerConfirm-message"> Les deux mots de passe sont différents. </span>
						</div>
					</div>
					<input type="submit" class="button red noborder pull-right" value="Inscription"/>
				</form>
			</section>
		</section>
	</section>
</section><!--end content-->
<script type="text/javascript">
	$(function() {
            var validator = new FormValidator("authentification",
                [
                    {
                        name: "login", //name du champ.
                        rules: 'required|valid_email' //choix du validator chainé par des pipes
                    },
                    {
                        name: "password",
                        rules: 'required'
                    }
                ],function(errors, event){
                if (errors.length > 0) {
                    for(var index in errors){
                        var idElement = errors[index].id;
                        var helperSelector = $("#"+idElement).attr("data-error-selector");
                        $("#"+helperSelector).show();
                        var groupSelector = "#"+errors[index].name+"-control-group";
                        $(groupSelector).addClass("error");
                    }
                }
             });
// nameArtist
            var validator2 = new FormValidator("form-artist",
                [
                    {
                        name: "mailArtist", //name du champ.
                        rules: 'required|valid_email' //choix du validator chainé par des pipes
                    },
                    {
                        name: "passwordArtist",
                        rules: 'required'
                    },
                    {
                        name: "nameArtist",
                        rules: 'required'
                    },
                    {
                        name: "firstnameArtist",
                        rules: 'required'
                    },
                    {
                        name: "passwordArtistConfirm",
                        rules: 'required|matches[passwordArtist]'
                    },
                    {
                        name: "passwordArtistConfirm",
                        rules: 'required|matches[passwordArtist]'
                    },
                    {
                        name: "phoneArtist",
                        rules: 'required|max_length[10]|min_length[10]'
                    },
                    {
                        name: "passwordArtistConfirm",
                        rules: 'required|matches[passwordArtist]'
                    }

                ],function(errors, event){
                if (errors.length > 0) {
                    for(var index in errors){
                        var idElement = errors[index].id;
                        var helperSelector = $("#"+idElement).attr("data-error-selector");
                        $("#"+helperSelector).show();
                        var groupSelector = "#"+errors[index].name+"-control-group";
                        $(groupSelector).addClass("error");
                    }
                }
             });

            var validator3 = new FormValidator("form-customer",
                [
                    {
                        name: "mailCustomer", //name du champ.
                        rules: 'required|valid_email' //choix du validator chainé par des pipes
                    },
                    {
                        name: "passwordCustomer",
                        rules: 'required'
                    },
                    {
                        name: "passwordCustomerConfirm",
                        rules: 'required|matches[passwordArtist]'
                    }

                ],function(errors, event){
                if (errors.length > 0) {
                    for(var index in errors){
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