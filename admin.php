<?php include('admin_header.php'); ?>
<header class="header">
    <section class="container">
        <h3>Panel Admin</h3>
    </section>
</header>

<section class="container">
    <div class="">
        <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#users" data-toggle="tab">Users</a></li>
            <li class=""><a href="#products" data-toggle="tab">Products</a></li>
            <li class=""><a href="#projects" data-toggle="tab">Process-projects</a></li>
            <li class=""><a href="#galery" data-toggle="tab">Galleries</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="users">
                <div class="span9">
                    <h3>Users List</h3>
                </div>
                <table id="user-tab" class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>E-mail</th>
                        <th>Password</th>
                        <th>Telephone</th>
                        <th>Site Web</th>
                        <th>Is Artist</th>
                        <th>Action</th>
                    </tr>
                    <tr id="tr-user-1">
                        <td>
                            1
                        </td>
                        <td>
                            <div id="div-nom-1">Dupond</div>
                        </td>
                        <td>
                            <div id="div-prenom-1">Jean-Claude</div>
                        </td>
                        <td>
                            <div id="div-mail-1">D.JeanClaude@mail.fr</div>
                        </td>
                        <td>
                            <div id="div-password-1">Password</div>
                        </td>
                        <td>
                            <div id="div-phone-1">0102030405</div>
                        </td>
                        <td>
                            <div id="div-web-1">httpd://google.fr</div>
                        </td>
                        <td>
                            <div id="div-isartist-1">Oui</div>
                        </td>
                        <td>
                            <a data-id="1" href="#modal-user" role="button" class="button green edit-user" data-toggle="modal">Edit</a>
                            <a data-id="1" href="#modal-confirm" role="button" class="button red delete-user" data-toggle="modal">Supprimer</a>
                        </td>
                    </tr>
                    <tr id="tr-user-2">
                        <td>
                            2
                        </td>
                        <td>
                            <div id="div-nom-2">Dupond</div>
                        </td>
                        <td>
                            <div id="div-prenom-2">Jean-Claude</div>
                        </td>
                        <td>
                            <div id="div-mail-2">D.JeanClaude@mail.fr</div>
                        </td>
                        <td>
                            <div id="div-password-2">Password</div>
                        </td>
                        <td>
                            <div id="div-phone-2">0202030405</div>
                        </td>
                        <td>
                            <div id="div-web-2">httpd://google.fr</div>
                        </td>
                        <td>
                            <div id="div-isartist-2">Oui</div>
                        </td>
                        <td>
                            <a data-id="2" href="#modal-user" role="button" class="button green edit-user" data-toggle="modal">Edit</a>
                            <a data-id="2" href="#modal-confirm" role="button" class="button red delete-user" data-toggle="modal">Supprimer</a>
                        </td>
                    </tr>
                    <tr id="tr-user-3">
                        <td>
                            3
                        </td>
                        <td>
                            <div id="div-nom-3">Dupond</div>
                        </td>
                        <td>
                            <div id="div-prenom-3">Jean-Claude</div>
                        </td>
                        <td>
                            <div id="div-mail-3">D.JeanClaude@mail.fr</div>
                        </td>
                        <td>
                            <div id="div-password-3">Password</div>
                        </td>
                        <td>
                            <div id="div-phone-3">0302030405</div>
                        </td>
                        <td>
                            <div id="div-web-3">httpd://google.fr</div>
                        </td>
                        <td>
                            <div id="div-isartist-3">Oui</div>
                        </td>
                        <td>
                            <a data-id="3" href="#modal-user" role="button" class="button green edit-user" data-toggle="modal">Edit</a>
                            <a data-id="3" href="#modal-confirm" role="button" class="button red delete-user" data-toggle="modal">Supprimer</a>
                        </td>
                    </tr>
                    <tr id="tr-user-4">
                        <td>
                            4
                        </td>
                        <td>
                            <div id="div-nom-4">Dupond</div>
                        </td>
                        <td>
                            <div id="div-prenom-4">Jean-Claude</div>
                        </td>
                        <td>
                            <div id="div-mail-4">D.JeanClaude@mail.fr</div>
                        </td>
                        <td>
                            <div id="div-password-4">Password</div>
                        </td>
                        <td>
                            <div id="div-phone-4">0402030405</div>
                        </td>
                        <td>
                            <div id="div-web-4">httpd://google.fr</div>
                        </td>
                        <td>
                            <div id="div-isartist-4">Oui</div>
                        </td>
                        <td>
                            <a data-id="4" href="#modal-user" role="button" class="button green edit-user" data-toggle="modal">Edit</a>
                            <a data-id="4" href="#modal-confirm" role="button" class="button red delete-user" data-toggle="modal">Supprimer</a>
                        </td>
                    </tr>
                    <tr id="tr-user-5">
                        <td>
                            5
                        </td>
                        <td>
                            <div id="div-nom-5">Dupond</div>
                        </td>
                        <td>
                            <div id="div-prenom-5">Jean-Claude</div>
                        </td>
                        <td>
                            <div id="div-mail-5">D.JeanClaude@mail.fr</div>
                        </td>
                        <td>
                            <div id="div-password-5">Password</div>
                        </td>
                        <td>
                            <div id="div-phone-5">0502030405</div>
                        </td>
                        <td>
                            <div id="div-web-5">httpd://google.fr</div>
                        </td>
                        <td>
                            <div id="div-isArtist-5">Oui</div>
                        </td>
                        <td>
                            <a data-id="5" href="#modal-user" role="button" class="button green edit-user" data-toggle="modal">Edit</a>
                            <a data-id="5" href="#modal-confirm" role="button" class="button red delete-user" data-toggle="modal">Supprimer</a>
                        </td>
                    </tr> 
                </table>
                
                <div data-new-id="6" href="#modal-user" role="button" class="button green add-user" data-toggle="modal">Add User</div>
            
            </div>



            <div class="tab-pane fade active" id="products">
                <div class="span9">
                    <h3>Products List</h3>
                </div>
                <table  class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </table>
            </div>
            <div class="tab-pane fade" id="projects">
                <div class="span9">
                    <h3>Projects List</h3>
                </div>
                <table  class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Artiste_id</th>
                        <th>Code</th>
                        <th>Prix</th>
                    </tr>
                </table>
            </div>
            <div class="tab-pane fade" id="galery">
                <div class="span9">
                    <h3>Galery List</h3>
                </div>
                <table  class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Catégorie</th>
                        <th>Ids_products</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section><!--end content-->

<?php include('modal-confirm.php'); ?>
<?php include('modal-user.php'); ?>
<?php include('modal-product.php'); ?>
<?php include('modal-project.php'); ?>
<?php include('modal-galery.php'); ?>

<?php include('footer.php'); ?>