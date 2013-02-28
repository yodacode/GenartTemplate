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
			<ul id="myTab" class="nav nav-tabs">
			  <li class="active">
			    <a href="#home" data-toggle="tab">Membre</a>
			  </li>
			  <li><a href="#member" data-toggle="tab">artiste</a></li>
			</ul>
			<section class="tab-content">
				
				<form class="form-horizontal tab-pane fade active in" id="home">
					<div class="control-group">
						<label for="login" class="control-label">Identifiant* : </label>
						<input type="text" id="login" name="login" placeholder="Identifiant"/>
					</div>
					<div class="control-group">
						<label for="pass" class="control-label">E-mail* : </label>
						<input type="text" id="pass"  name="pass" placeholder="vote-mail@mail.com"/>
					</div>
					<div class="control-group">
						<label for="pass" class="control-label">Mot de passe* : </label>
						<input type="password" id="pass"  name="pass" placeholder="Mot de passe"/>
					</div>
					<div class="control-group">
						<label for="passConfirm" class="control-label">Confirmation mot de passe* : </label>
						<input type="password" id="passConfirm"  name="passConfirm" placeholder="Confirmation"/>
					</div>
					<input type="submit" class="button red noborder pull-right" value="Inscription"/>
				</form>

				<form class="form-horizontal tab-pane fade " id="member">
					<div class="control-group">
						<label for="login" class="control-label">Identifiant* : </label>
						<input type="text" id="login" name="login" placeholder="Identifiant"/>
					</div>
					<div class="control-group">
						<label for="pass" class="control-label">E-mail* : </label>
						<input type="text" id="pass"  name="pass" placeholder="vote-mail@mail.com"/>
					</div>

					<input type="submit" class="button red noborder pull-right" value="Inscription"/>
				</form>

			</section>
		</section>
	</section>
</section><!--end content-->

<?php include('footer.php');?>