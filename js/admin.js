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
        var is_artist = $('#isArtist option:selected').val();
        var is_admin = $('#isAdmin option:selected').val();
        
        var is_admin_txt = $('#isAdmin option:selected').text();
        var is_artist_txt = $('#isArtist option:selected').text();
        
        var newuser = $(this).attr('data-newuser');
        
        $('#valid-user').attr('data-newuser', "false");
        
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
                website: website,
                is_admin: is_admin,
                is_artist: is_artist
            },
            success: function(data){
                
                if("true" == newuser){
                    
                    var e = "<tr id='tr-user-" + id + "'>";
                    e = e + "<td>" + id + "</td>";
                    e = e + "<td><div id='div-nom-" + id + "'>" + name + "</div></td>";
                    e = e + "<td><div id='div-prenom-" + id + "'>" + firstname + "</div></td>";
                    e = e + "<td><div id='div-mail-" + id + "'>" + mailArtist + "</div></td>";
                    e = e + "<td><div id='div-password-" + id + "'>" + password + "</div></td>";
                    e = e + "<td><div id='div-phone-" + id + "'>" + phone + "</div></td>";
                    e = e + "<td><div id='div-web-" + id + "'>" + website + "</div></td>";
                    e = e + "<td><div id='div-isartist-" + id + "'>" + is_artist_txt + "</div></td>";
                    e = e + "<td><div id='div-isadmin-" + id + "'>" + is_admin_txt + "</div></td>";
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
                    $('#div-isArtist-' + id).text();
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
        var isArtist = $('#div-isArtist-' + id).text();
        
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
    
};

var add = function()
{

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
        
        $('#modal-label-user').text("Ajout d'un nouvel utilisateu");
        
        $('#valid-user').attr('data-newuser', "true");
        
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
