
<div id="modal-customer" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="modal-label-customer">Edition du client</h3>
    </div>
    <div class="divider-slice"></div>
    <div class="modal-body">
        <div id="mailCustomer-control-group" class="control-group">
            <label for="mailCustomer" class="control-label">E-mail  * : </label>
            <div class="controls">
                <input data-error-selector="mailCustomer-message" type="text" id="mailCustomer"  name="mailCustomer" placeholder="user-mail@mail.com"/>
                <span class="help-inline" style="display:none;" id="mailCustomer-message"> Veuillez entrer un E-mail valide. </span>
            </div>
        </div>
        <div id="passwordCustomer-control-group" class="control-group">
            <label for="passwordCustomer" class="control-label">Mot de passe * : </label>
            <div class="controls">
                <input data-error-selector="passwordCustomer-message" type="password" id="passwordCustomer"  name="passwordCustomer" placeholder="user-passe"/>
                <span class="help-inline" style="display:none;" id="passwordCustomer-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
        <div id="passwordCustomerConfirm-control-group" class="control-group">
            <label for="passwordCustomerConfirm" class="control-label">Confirmation  * : </label>
            <div class="controls">
                <input data-error-selector="passwordCustomerConfirm-message" type="password" id="passwordCustomerConfirm"  name="passwordCustomerConfirm" placeholder="Confirmation"/>
                <span class="help-inline" style="display:none;" id="passwordCustomerConfirm-message"> Les deux mots de passes sont différents. </span>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="button red" data-dismiss="modal" aria-hidden="true">Annuler</div>
        <div id="valid-customer" data-newcustomer="false" data-dismiss="modal" class="button green">Valider</div>
    </div>
</div>