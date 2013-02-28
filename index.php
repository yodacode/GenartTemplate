<?php include('header.php');?>
    <header class="header visible-desktop">
      <section class="slice">
        <section class="container">
          <div id="carousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">

                <div class="active item">
                  <img src="img/schema.png" class="auto"/>
                </div>

                <div class="item">
                  <img src="img/schema.png" class="auto"/>
                </div>
                
              </div>
              <!-- Carousel nav -->
              <a class="control" href="#carousel" data-slide="prev">&lsaquo;</a>
              <a class="control" href="#carousel" data-slide="next">&rsaquo;</a>
            </div>
       
        </section>
      </section><!--end slice desktop-->
  </header>


  <section class="content">
    <section class="container-fluid">
      <section class="page-header">
        <h1>Les oeuvres les plus populaires</h1>
      </section>
      <article class="span4 article-thumb">
        <figure>
          <img src="img/picture.jpg"/>
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
          <img src="img/picture3.jpg"/>
        </figure>
        <h3>Titre de l'oeuvre</h3>
        <p>
          Processing is an open source programming language and environment for people who want to create images, animations, and interactions. 
          Initially developed to serve as a software sketchbook and to teach there are tens of thousands of students.
        </p>
        <a href="detail.php" class="button green">en savoir plus</a>
      </article>
    </section>
    
    <div class="spacer"></div>

    <section class="container">
      <h2>Gen<strong>art</strong> c'est quoi ?</h2>
      <section class="span5">
        <p>
          Processing is an open source programming language and environment for people who want to create images, animations, and interactions. Initially developed to serve as a software sketchbook and to teach fundamentals of computer programming within a visual context, Processing also has evolved into a tool for generating finished professional work. Today.
          Processing is an open source programming language and environment for people who want to create images, animations, and interactions. Initially developed to serve as a software sketchbook and to teach fundamentals of computer programming within.
        </p>
      </section>
       <section class="span5">
        <p>
          Processing is an open source programming language and environment for people who want to create images, animations, and interactions. Initially developed to serve as a software sketchbook and to teach fundamentals of computer programming within a visual context, Processing also has evolved into a tool for generating finished professional work. Today, there are tens of thousands of students, artists, designers, researchers, and hobbyists who use Processing for learning, prototypingn.
        </p>
      </section>
    </section>

    <div class="spacer"></div>

    <section class="container">
      <h2>Nos artistes</h2>
      <ul class="artist-list">
        <?php for($i=0; $i < 6; $i++) : ?>
          <li>
            <a href="artist-detail.php">
              <img src="img/artist.jpg" class="img-circle img-polaroid"/>
            </a>
          </li>  
        <?php endfor;?>
  
      </ul>
    </section>
  </section><!--end content-->

<?php include('footer.php');?>