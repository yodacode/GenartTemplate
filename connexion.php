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

			<form class="form-horizontal">
				<div class="control-group">
					<label for="login" class="control-label">Identifiant : </label>
					<input type="text" id="login" name="login" placeholder="identifiant"/>
				</div>
				<div class="control-group">
					<label for="password" class="control-label">Mot de passe : </label>
					<input type="password" id="password"  name="password" placeholder="Mot de passe"/>
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
				
				<form class="form-horizontal tab-pane fade active in" id="artist">
					<div class="control-group">
						<label for="nameArtist" class="control-label">Nom* : </label>
						<input type="text" id="nameArtist"  name="nameArtist" placeholder="Votre nom"/>
					</div>
					<div class="control-group">
						<label for="firstnameArtist" class="control-label">Prénom* : </label>
						<input type="text" id="firstnameArtist"  name="firstnameArtist" placeholder="Prénom"/>
					</div>
					<div class="control-group">
						<label for="mailArtist" class="control-label">E-mail* : </label>
						<input type="text" id="mailArtist"  name="mailArtist" placeholder="vote-mail@mail.com"/>
					</div>
					<div class="control-group">
						<label for="passwordArtist" class="control-label">Mot de passe* : </label>
						<input type="password" id="passwordArtist"  name="passwordArtist" placeholder="Mot de passe"/>
					</div>
					<div class="control-group">
						<label for="passwordArtistConfirm" class="control-label">Confirmation* : </label>
						<input type="password" id="passwordArtistConfirm"  name="passwordArtistConfirm" placeholder="Confirmation"/>
					</div>
					<div class="control-group">
						<label for="phoneArtist" class="control-label">Téléphone* : </label>
						<input type="text" id="phoneArtist"  name="phoneArtist" placeholder="Téléphone"/>
					</div>
					<div class="control-group">
						<label for="websiteArtist" class="control-label">Site web : </label>
						<input type="text" id="websiteArtist"  name="websiteArtist" placeholder="www.votre-site.com"/>
					</div>
					<input type="submit" class="button red noborder pull-right" value="Inscription"/>
				</form>

				<form class="form-horizontal tab-pane fade " id="customer">
					<div class="control-group">
						<label for="mailArtist" class="control-label">E-mail* : </label>
						<input type="text" id="mailArtist"  name="mailArtist" placeholder="vote-mail@mail.com"/>
					</div>
					<div class="control-group">
						<label for="passwordArtist" class="control-label">Mot de passe* : </label>
						<input type="password" id="passwordArtist"  name="passwordArtist" placeholder="Mot de passe"/>
					</div>
					<div class="control-group">
						<label for="passwordArtistConfirm" class="control-label">Confirmation* : </label>
						<input type="password" id="passwordArtistConfirm"  name="passwordArtistConfirm" placeholder="Confirmation"/>
					</div>
					<input type="submit" class="button red noborder pull-right" value="Inscription"/>
				</form>

			</section>
		</section>
	</section>
</section><!--end content-->

<?php include('footer.php');?>