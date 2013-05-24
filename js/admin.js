var valid = function()
{
    
    $('#valid-user').on('click', function(){
       
        var id = $(this).attr('data-id');
       
        var name = $('#nameArtist').val();
        var firstname = $('#firstnameArtist').val();
        var mailArtist = $('#mailArtist').val();
        var password = $('#passwordArtist').val();
        var repassword = $('#passwordArtistConfirm').val();
        var phone = $('#phoneArtist').val();
        var website = $('#websiteArtist').val();
        
        var newuser = $(this).attr('data-newuser');
        
        $.ajax({
            type: 'post',
            url: '',
            data: {
                newuser: newuser,
                id: id,
                name: name,
                firstname: firstname,
                mailArtist: mailArtist,
                password: password,
                repassword: repassword,
                phone: phone,
                website: website
            },
            success: function(data){
                
                $('#valid-user').attr('data-newuser', "false");
        
                if("true" == newuser){
                    
                    var e = "<tr id='tr-user-" + id + "'>";
                    e = e + "<td>" + id + "</td>";
                    e = e + "<td><div id='div-nom-" + id + "'>" + name + "</div></td>";
                    e = e + "<td><div id='div-prenom-" + id + "'>" + firstname + "</div></td>";
                    e = e + "<td><div id='div-mail-" + id + "'>" + mailArtist + "</div></td>";
                    e = e + "<td><div id='div-password-" + id + "'>" + password + "</div></td>";
                    e = e + "<td><div id='div-phone-" + id + "'>" + phone + "</div></td>";
                    e = e + "<td><div id='div-web-" + id + "'>" + website + "</div></td>";
                    e = e + "<td>";
                    e = e + "<a data-id=" + id + " href='#modal-user' role='button' class='button green edit-user' data-toggle='modal'>Edit</a>";
                    e = e + "<a data-id=" + id + " href='#modal-confirm' role='button' class='button red delete-user' data-toggle='modal'>Supprimer</a>";
                    e = e + "</td>";
                    e = e + "</tr>";
                    
                    $('#user-tab tr:last').after(e);
        
                    var new_id = parseInt(id) + 1;
        
                    $('.add-user').attr('data-new-id', new_id);
       
                    
                } else {
                    
                    $('#div-nom-' + id).text(name);
                    $('#div-prenom-' + id).text(firstname);
                    $('#div-mail-' + id).text(mailArtist);
                    $('#div-password-' + id).text(password);
                    $('#div-phone-' + id).text(phone);
                    $('#div-web-' + id).text(website);
                    
                }  
                
            }, 
            error: function(data){
                
                alert('err');
                
            }
        });
       
    });
    
    $('#valid-customer').on('click', function(){
       
        var id = $(this).attr('data-id');
       
        var mailCustomer = $('#mailCustomer').val();
        var password = $('#passwordCustomer').val();
        var repassword = $('#passwordCustomerConfirm').val();
                        
        var newcustomer = $(this).attr('data-newcustomer');
        
        $.ajax({
            type: 'post',
            url: '',
            data: {
                newcustomer: newcustomer,
                id: id,
                mailCustomer: mailCustomer,
                password: password,
                repassword: repassword
            },
            success: function(data){
                
                $('#valid-customer').attr('data-newcustomer', "false");
        
                if("true" == newcustomer){
                    
                    var e = "<tr id='tr-customer-" + id + "'>";
                    e = e + "<td>" + id + "</td>";
                    e = e + "<td><div id='div-mailcustomer-" + id + "'>" + mailCustomer + "</div></td>";
                    e = e + "<td><div id='div-passwordcustomer-" + id + "'>" + password + "</div></td>";
                    e = e + "<td>";
                    e = e + "<a data-id=" + id + " href='#modal-customer' role='button' class='button green edit-customer' data-toggle='modal'>Edit</a>";
                    e = e + "<a data-id=" + id + " href='#modal-confirm' role='button' class='button red delete-customer' data-toggle='modal'>Supprimer</a>";
                    e = e + "</td>";
                    e = e + "</tr>";
                    
                    $('#customer-tab tr:last').after(e);
        
                    var new_id = parseInt(id) + 1;
        
                    $('.add-customer').attr('data-new-id', new_id);
       
                    
                } else {
                    
                    $('#div-mailcustomer-' + id).text(mailCustomer);
                    $('#div-passwordcustomer-' + id).text(password);
                    
                }  
                
            }, 
            error: function(data){
                
                alert('err');
                
            }
        });
       
    });
    
    $('#valid-cart').on('click', function(){
       
        var id = $(this).attr('data-id');
       
        var cartNumber = $('#numberCart').val();
        var cartCustomer = $('#clientCart option:selected').text();
        var id_customer =  $('#clientCart option:selected').val();
        var newcart = $(this).attr('data-newcart');
        alert(id_customer);
        $('#valid-cart').attr('data-newcart', "false");
        
        $.ajax({
            type: 'post',
            url: '',
            data: {
                newcart: newcart,
                id: id,
                cartNumber: cartNumber,
                id_customer: id_customer
            },
            success: function(data){
                
                if("true" == newcart){
                    
                    var e = "<tr id='tr-cart-" + id + "'>";
                    e = e + "<td>" + id + "</td>";
                    e = e + "<td><div id='div-numbercart-" + id + "'>" + cartNumber + "</div></td>";
                    e = e + "<td><div id='div-clientcart-" + id + "'>" + cartCustomer + "</div></td>";
                    e = e + "<td>";
                    e = e + "<a data-id=" + id + " href='#modal-cart' role='button' class='button green edit-cart' data-toggle='modal'>Edit</a>";
                    e = e + "<a data-id=" + id + " href='#modal-confirm' role='button' class='button red delete-cart' data-toggle='modal'>Supprimer</a>";
                    e = e + "</td>";
                    e = e + "</tr>";
                    
                    $('#cart-tab tr:last').after(e);
        
                    var new_id = parseInt(id) + 1;
        
                    $('.add-cart').attr('data-new-id', new_id);
       
                    
                } else {
                    
                    $('#div-numbercart-' + id).text(cartNumber);
                    $('#div-clientcart-' + id).text(cartCustomer);
                }  
                
            }, 
            error: function(data){
                
                alert('err');
                
            }
        });
       
    });
    
    $('#valid-product').on('click', function(){
       
        var id = $(this).attr('data-id');
       
        var name = $('#nameProduct').val();
        var price = $('#priceProduct').val();
        var description = $('#descriptionProduct').val();
        var dimx = $('#dimxProduct').val();
        var dimy = $('#dimyProduct').val();
        var dimz = $('#dimzProduct').val();
        
        var newproduct = $(this).attr('data-newproduct');
        
        $('#valid-product').attr('data-newproduct', "false");
        
        $.ajax({
            type: 'post',
            url: '',
            data: {
                newproduct: newproduct,
                id: id,
                name: name,
                price: price,
                description: description,
                dimx: dimx,
                dimy: dimy,
                dimz: dimz
            },
            success: function(data){
                
                if("true" == newproduct){
                    
                    var e = "<tr id='tr-product-" + id + "'>";
                    e = e + "<td>" + id + "</td>";
                    e = e + "<td><div id='div-productname-" + id + "'>" + name + "</div></td>";
                    e = e + "<td><div id='div-productprice-" + id + "'>" + price + "</div></td>";
                    e = e + "<td><div id='div-productdescription-" + id + "'>" + description + "</div></td>";
                    e = e + "<td><div id='div-dimx-" + id + "'>" + dimx + "</div></td>";
                    e = e + "<td><div id='div-dimy-" + id + "'>" + dimy + "</div></td>";
                    e = e + "<td><div id='div-dimz-" + id + "'>" + dimz + "</div></td>";
                    e = e + "<td>";
                    e = e + "<a data-id=" + id + " href='#modal-product' role='button' class='button green edit-product' data-toggle='modal'>Edit</a>";
                    e = e + "<a data-id=" + id + " href='#modal-confirm' role='button' class='button red delete-product' data-toggle='modal'>Supprimer</a>";
                    e = e + "</td>";
                    e = e + "</tr>";
                    
                    $('#product-tab tr:last').after(e);
        
                    var new_id = parseInt(id) + 1;
        
                    $('.add-product').attr('data-new-id', new_id);
       
                    
                } else {
                    
                    $('#div-productname-' + id).text(name);
                    $('#div-productprice-' + id).text(price);
                    $('#div-productdescription-' + id).text(description);
                    $('#div-dimx-' + id).text(dimx);
                    $('#div-dimy-' + id).text(dimy);
                    $('#div-dimz-' + id).text(dimz);
                }  
                
            }, 
            error: function(data){
                
                alert('err');
                
            }
        });
       
    });
    
    $('#valid-project').on('click', function(){
       
        var id = $(this).attr('data-id');
       
        var name = $('#nameProject').val();
        var description = $('#descriptionProject').val();
        var artistename = $('#artistProject option:selected').text();
        var artiste_id =  $('#artistProject option:selected').val();
        var price = $('#prixProject').val();
        
        var newproject = $(this).attr('data-newproject');
        
        $('#valid-project').attr('data-newproject', "false");
        
        $.ajax({
            type: 'post',
            url: '',
            data: {
                newproject: newproject,
                id: id,
                name: name,
                description: description,
                artiste_id: artiste_id,
                price: price
            },
            success: function(data){
                
                if("true" == newproject){
                    
                    var e = "<tr id='tr-user-" + id + "'>";
                    e = e + "<td>" + id + "</td>";
                    e = e + "<td><div id='div-projectname-" + id + "'>" + name + "</div></td>";
                    e = e + "<td><div id='div-projectdescription-" + id + "'>" + description + "</div></td>";
                    e = e + "<td><div id='div-projectartist-" + id + "'>" + artistename + "</div></td>";
                    e = e + "<td><div id='div-projectprice-" + id + "'>" + price + "</div></td>";
                    e = e + "<td><div id='div-projectimg-" + id + "'>" + '' + "</div></td>";
                    e = e + "<td>";
                    e = e + "<a data-id=" + id + " href='#modal-project' role='button' class='button green edit-project' data-toggle='modal'>Edit</a>";
                    e = e + "<a data-id=" + id + " href='#modal-confirm' role='button' class='button red delete-project' data-toggle='modal'>Supprimer</a>";
                    e = e + "</td>";
                    e = e + "</tr>";
                    
                    $('#project-tab tr:last').after(e);
        
                    var new_id = parseInt(id) + 1;
        
                    $('.add-project').attr('data-new-id', new_id);
       
                    
                } else {
                    
                    $('#div-projectname-' + id).text(name);
                    $('#div-projectdescription-' + id).text(description);
                    $('#div-projectartist-' + id).text(artistename);
                    $('#div-projectprice-' + id).text(price);
                    $('#div-projectimg-' + id).text('');
                }  
                
            }, 
            error: function(data){
                
                alert('err');
                
            }
        });
       
    });
    
};

var edit = function()
{
    
    $('.edit-user').live('click', function(){
        
        var elem = $(this);
        var id = elem.attr('data-id');
        
        var nom = $('#div-nom-' + id).text();
        var prenom = $('#div-prenom-' + id).text();
        var mail = $('#div-mail-' + id).text();
        var pass = $('#div-password-' + id).text();
        var phone = $('#div-phone-' + id).text();
        var web = $('#div-web-' + id).text();
        var isAdmin = $('#div-isAdmin-' + id).text();
        
        $('#valid-user').attr('data-id', id);
        $('#valid-user').attr('data-newuser', "false");
        
        $('#nameArtist').val(nom);
        $('#firstnameArtist').val(prenom);
        $('#mailArtist').val(mail);
        $('#passwordArtist').val(pass);
        $('#passwordArtistConfirm').val(pass);
        $('#phoneArtist').val(phone);
        $('#websiteArtist').val(web);
        
        $('#modal-label-user').text("Edition de l'utilisateur " + nom + " " +  prenom);
        
    });
    
    $('.edit-customer').live('click', function(){
        
        var elem = $(this);
        var id = elem.attr('data-id');
        
        var mail = $('#div-mailcustomer-' + id).text();
        var pass = $('#div-passwordcustomer-' + id).text();
        
        $('#valid-customer').attr('data-id', id);
        $('#valid-customer').attr('data-newcustomer', "false");
        
        $('#mailCustomer').val(mail);
        $('#passwordCustomer').val(pass);
        $('#passwordCustomerConfirm').val(pass);
        
        $('#modal-label-customer').text("Edition du client " + mail);
        
    });
    
    $('.edit-product').live('click', function(){
        
        var elem = $(this);
        var id = elem.attr('data-id');
        
        var nom = $('#div-productname-' + id).text();
        var prix = $('#div-productprice-' + id).text();
        var dimx = $('#div-dimx-' + id).text();
        var dimy = $('#div-dimy-' + id).text();
        var dimz = $('#div-dimz-' + id).text();
        var description = $('#div-productdescription-' + id).text();
        
        $('#valid-product').attr('data-id', id);
        $('#valid-product').attr('data-newproduct', "false");
        
        $('#nameProduct').val(nom);
        $('#priceProduct').val(prix);
        $('#descriptionProduct').val(description);
        $('#dimxProduct').val(dimx);
        $('#dimyProduct').val(dimy);
        $('#dimzProduct').val(dimz);
        
        $('#modal-label-product').text("Edition du produit " + nom);
        
    });
    
    $('.edit-project').live('click', function(){
        
        var elem = $(this);
        var id = elem.attr('data-id');
        
        var nom = $('#div-projectname-' + id).text();
        var prix = $('#div-projectprice-' + id).text();
        var description = $('#div-projectdescription-' + id).text();
        var artist = $('#div-projectartist-' + id).text();
        
        $('#valid-project').attr('data-id', id);
        $('#valid-project').attr('data-newproject', "false");
        
        $('#nameProject').val(nom);
        $('#prixProject').val(prix);
        $('#descriptionProject').val(description);
        $('#artistProject').val(artist);
        
        $('#modal-label-project').text("Edition du projet " + nom);
        
    });
    
    $('.edit-cart').live('click', function(){
        
        var elem = $(this);
        var id = elem.attr('data-id');
        
        var num = $('#div-numbercart-' + id).text();
        var client = $('#div-clientcart-' + id).text();
        
        $('#valid-cart').attr('data-id', id);
        $('#valid-cart').attr('data-newcart', "false");
        
        $('#numberCart').val(num);
        $('#clientCart').val(client);
        
        $('#modal-label-project').text("Edition de la commande " + num);
        
    });
    
};

var add = function()
{

    $('.add-customer').on('click', function(){
        
        var new_id = $(this).attr('data-new-id');
        
        $('#valid-customer').attr('data-id', new_id);
        
        $('#mailCustomer').val('');
        $('#passwordCustomer').val('');
        $('#passwordCustomerConfirm').val('');
        
        $('#modal-label-customer').text("Ajout d'un nouveau client");
        
        $('#valid-customer').attr('data-newcustomer', "true");
        
    });
    
    $('.add-user').on('click', function(){
        
        var new_id = $(this).attr('data-new-id');
        
        $('#valid-user').attr('data-id', new_id);
        
        $('#nameArtist').val('');
        $('#firstnameArtist').val('');
        $('#mailArtist').val('');
        $('#passwordArtist').val('');
        $('#passwordArtistConfirm').val('');
        $('#phoneArtist').val('');
        $('#websiteArtist').val('');
        
        $('#modal-label-user').text("Ajout d'un nouvel utilisateur");
        
        $('#valid-user').attr('data-newuser', "true");
        
    });
    
    $('.add-cart').on('click', function(){
        
        var new_id = $(this).attr('data-new-id');
        
        $('#valid-cart').attr('data-id', new_id);
        
        $('#numberCart').val('');
        $('#clientCart').val('');
        
        $('#modal-label-cart').text("Ajout d'une nouvelle commande");
        
        $('#valid-cart').attr('data-newcart', "true");
        
    });
    
    $('.add-product').on('click', function(){
        
        var new_id = $(this).attr('data-new-id');
        
        $('#valid-product').attr('data-id', new_id);
        
        $('#nameProduct').val('');
        $('#priceProduct').val('');
        $('#descriptionProduct').val('');
        $('#dimxProduct').val('');
        $('#dimyProduct').val('');
        $('#dimzProduct').val('');
        
        $('#modal-label-user').text("Ajout d'un nouvel utilisateur");
        
        $('#valid-product').attr('data-newproduct', "true");
        
    });
    
    $('.add-project').on('click', function(){
        
        var new_id = $(this).attr('data-new-id');
        
        $('#valid-project').attr('data-id', new_id);
        
        $('#nameProject').val('');
        $('#prixProject').val('');
        $('#descriptionProject').val('');
        $('#artistProject').val('');
        
        $('#modal-label-project').text("Ajout d'un nouveau projet");
        
        $('#valid-project').attr('data-newproject', "true");
        
    });
  
};

var deletefunction = function()
{
    
    $('.delete-user').live('click', function(){
        var elem = $(this);
        var id = elem.attr('data-id');
        $('#confirm-delete').attr('data-value', 'tr-user-' + id);
        $('#confirm-message').text('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')
    });
    
    $('.delete-customer').live('click', function(){
        var elem = $(this);
        var id = elem.attr('data-id');
        $('#confirm-delete').attr('data-value', 'tr-customer-' + id);
        $('#confirm-message').text('Êtes-vous sûr de vouloir supprimer ce client ?')
    });
    
    $('.delete-cart').live('click', function(){
        var elem = $(this);
        var id = elem.attr('data-id');
        $('#confirm-delete').attr('data-value', 'tr-cart-' + id);
        $('#confirm-message').text('Êtes-vous sûr de vouloir supprimer cette commande ?')
    });
    
    $('.delete-product').live('click', function(){
        var elem = $(this);
        var id = elem.attr('data-id');
        $('#confirm-delete').attr('data-value', 'tr-product-' + id);
        $('#confirm-message').text('Êtes-vous sûr de vouloir supprimer ce produit ?')
    });
    
    $('.delete-project').live('click', function(){
        var elem = $(this);
        var id = elem.attr('data-id');
        $('#confirm-delete').attr('data-value', 'tr-project-' + id);
        $('#confirm-message').text('Êtes-vous sûr de vouloir supprimer ce projet ?')
    });
    
};

var confirm = function()
{
    $('#confirm-delete').live('click', function(){
        var c = $(this).attr('data-value');
        $('#' + c).remove();
        
    });
}

$('document').ready(function(){

    add();
    valid();
    edit();
    deletefunction();
    confirm();
    
});
