﻿<?php include('header.php'); ?>


  <header class="header">
    <section class="container">
      <h3>Gallerie categorie : lorem ipsum</h3>
    </section>
  </header>

  <section class="content">

    <div class="container">
      <form class="form-inline pull-right">
        <label>Categorie : </label>
        <select>
          <option>1</option>
          <option>2</option>
        </select>
        <label for="date">Date :</label>
        <input id="date" type="text" name="date"/>
        <input class="button red noborder" type="submit" value="Filtrer">
      </form>
    </div>

    <div class="spacer"></div>
    <section class="container-fluid">

      <?php for($i=0; $i < 6; $i++) : ?>
        <article class="span4 article-thumb">
          <figure>
            <img src="img/picture2.jpg"/>
          </figure>
          <h3>Titre de l'oeuvre</h3>
          <p>
            Processing is an open source programming language and environment for people who want to create images, animations, and interactions. 
            Initially developed to serve as a software sketchbook and to teach there are tens of thousands of students.
          </p>
          <a href="./detail.php" class="button green">en savoir plus</a>
        </article>
      <?php endfor; ?>

    </section>
    
    <div class="spacer"></div>

   
  </section><!--end content-->

<?php include('footer.php');?>