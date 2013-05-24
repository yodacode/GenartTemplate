
<div id="modal-cart" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="modal-label-cart">Edition de la commande</h3>
    </div>
    <div class="divider-slice"></div>
    <div class="modal-body">
        <div id="numberCart-control-group" class="control-group">
            <label for="numberCart" class="control-label">Numero  * : </label>
            <div class="controls">
                <input data-error-selector="numberCart-message" type="text" id="numberCart"  name="numberCart" placeholder="Numero"/>
                <span class="help-inline" style="display:none;" id="numberCart-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
        <div id="clientCart-control-group" class="control-group">
            <label for="clientCart" class="control-label">Client  * : </label>
            <div class="controls">
                <input data-error-selector="clientCart-message" type="text" id="clientCart"  name="clientCart" placeholder="Prénom"/>
                <span class="help-inline" style="display:none;" id="firstnameCart-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="button red" data-dismiss="modal" aria-hidden="true">Annuler</div>
        <div id="valid-cart" data-newcart="false" data-dismiss="modal" class="button green">Valider</div>
    </div>
</div>