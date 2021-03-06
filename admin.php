<?php include('admin_header.php'); ?>
<header class="header">
    <section class="container">
        <h3>Panel Admin</h3>
    </section>
</header>

<section class="container">
    <div class="">
        <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#users" data-toggle="tab">Artistes</a></li>
            <li class=""><a href="#clients" data-toggle="tab">Clients</a></li>
            <li class=""><a href="#carts" data-toggle="tab">Commandes</a></li>
            <li class=""><a href="#products" data-toggle="tab">Products</a></li>
            <li class=""><a href="#projects" data-toggle="tab">Process-projects</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="users">
                <div class="span9">
                    <h3>Artists List</h3>
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
                            <div id="div-web-1">http://google.fr</div>
                        </td>
                        <td>
                            <a data-id="1" href="#modal-user" role="button" class="button green edit-user" data-toggle="modal">Edit</a>
                            <a data-id="1" href="#modal-confirm" role="button" class="button red delete-user" data-toggle="modal">Supprimer</a>
                        </td>
                    </tr>
                    
                </table>
                
                <div data-new-id="6" href="#modal-user" role="button" class="button green add-user" data-toggle="modal">Add User</div>
            
            </div>
            <div class="tab-pane fade" id="clients">
                <div class="span9">
                    <h3>Customers List</h3>
                </div>
                <table id="customer-tab" class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>E-mail</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    <tr id="tr-customer-1" data-id="999">
                        <td>
                            1
                        </td>
                        <td>
                            <div id="div-mailcustomer-1">Dupond</div>
                        </td>
                        <td>
                            <div id="div-passwordcustomer-1">Password</div>
                        </td>
                        <td>
                            <a data-id="1" href="#modal-customer" role="button" class="button green edit-customer" data-toggle="modal">Edit</a>
                            <a data-id="1" href="#modal-confirm" role="button" class="button red delete-customer" data-toggle="modal">Supprimer</a>
                        </td>
                    </tr>
                    
                </table>
                
                <div data-new-id="6" href="#modal-customer" role="button" class="button green add-customer" data-toggle="modal">Add Customer</div>
            
            </div>
            
            <div class="tab-pane fade" id="carts">
                <div class="span9">
                    <h3>Cart List</h3>
                </div>
                <table id="cart-tab" class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Numero</th>
                        <th>Client</th>
                        <th>Action</th>
                    </tr>
                    <tr id="tr-cart-1">
                        <td>
                            1
                        </td>
                        <td>
                            <div id="div-numbercart-1">TEH582-558R</div>
                        </td>
                        <td>
                            <div id="div-clientcart-1">jeanclaude dupond</div>
                        </td>
                        <td>
                            <a data-id="1" href="#modal-cart" role="button" class="button green edit-cart" data-toggle="modal">Edit</a>
                            <a data-id="1" href="#modal-confirm" role="button" class="button red delete-cart" data-toggle="modal">Supprimer</a>
                        </td>
                    </tr>
                    
                </table>
                
                <div data-new-id="6" href="#modal-cart" role="button" class="button green add-cart" data-toggle="modal">Add cart</div>
            
            </div>


            <div class="tab-pane fade" id="products">
                <div class="span9">
                    <h3>Products List</h3>
                </div>
                <table  class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Longueur</th>
                        <th>Largeur</th>
                        <th>Profondeur</th>
                        <th>Actions</th>
                        
                    </tr>
                    <tr id="tr-product-1">
                        <td>
                            1
                        </td>
                        <td>
                            <div id="div-productname-1">produit 1</div>
                        </td>
                        <td>
                            <div id="div-productprice-1">20</div>
                        </td>
                        <td>
                            <div id="div-productdescription-1">description 1</div>
                        </td>
                        <td>
                            <div id="div-dimx-1">20</div>
                        </td>
                        <td>
                            <div id="div-dimy-1">40</div>
                        </td>
                        <td>
                            <div id="div-dimz-1">20</div>
                        </td>
                        <td>
                            <a data-id="1" href="#modal-product" role="button" class="button green edit-product" data-toggle="modal">Edit</a>
                            <a data-id="1" href="#modal-confirm" role="button" class="button red delete-product" data-toggle="modal">Supprimer</a>
                        </td>
                    </tr>
                </table>
                <div data-new-id="6" href="#modal-product" role="button" class="button green add-product" data-toggle="modal">Add Product</div>
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
                        <th>Artiste</th>
                        <th>Prix</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    <tr id="tr-project-1">
                        <td>
                            1
                        </td>
                        <td>
                            <div id="div-projectname-1">projet 1</div>
                        </td>
                        <td>
                            <div id="div-projectdescription-1">description 1</div>
                        </td>
                        <td>
                            <div id="div-projectartist-1">jeanclaude dupond</div>
                        </td>
                        <td>
                            <div id="div-projectprice-1">40</div>
                        </td>
                        <td>
                            <div id="div-projectimg-1"><img src=""></div>
                        </td>
                        <td>
                            <a data-id="1" href="#modal-project" role="button" class="button green edit-project" data-toggle="modal">Edit</a>
                            <a data-id="1" href="#modal-confirm" role="button" class="button red delete-project" data-toggle="modal">Supprimer</a>
                        </td>
                    </tr>
                </table>
                <div data-new-id="6" href="#modal-project" role="button" class="button green add-project" data-toggle="modal">Add Project</div>
            </div>
        </div>
    </div>
</section><!--end content-->

<?php include('modal-confirm.php'); ?>
<?php include('modal-user.php'); ?>
<?php include('modal-customer.php'); ?>
<?php include('modal-cart.php'); ?>
<?php include('modal-product.php'); ?>
<?php include('modal-project.php'); ?>

<?php include('footer.php'); ?>