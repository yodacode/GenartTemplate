
<div id="modal-product" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="modal-label-product">Edition du produit</h3>
    </div>
    <div class="divider-slice"></div>
    <div class="modal-body">
        <div id="nameProduct-control-group" class="control-group">
            <label for="nameProduct" class="control-label">Nom  * : </label>
            <div class="controls">
                <input data-error-selector="nameProduct-message" type="text" id="nameProduct"  name="nameProduct" placeholder="Prénom"/>
                <span class="help-inline" style="display:none;" id="nameProduct-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
        <div id="priceProduct-control-group" class="control-group">
            <label for="priceProduct" class="control-label">Prix  * : </label>
            <div class="controls">
                <input data-error-selector="priceProduct-message" type="text" id="priceProduct"  name="priceProduct" placeholder="Prix"/>
                <span class="help-inline" style="display:none;" id="firstnameProduct-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
        <div id="descriptionProduct-control-group" class="control-group">
            <label for="descriptionProduct" class="control-label">Description  * : </label>
            <div class="controls">
                <input data-error-selector="descriptionProduct-message" type="text" id="descriptionProduct"  name="descriptionProduct" placeholder="product-description"/>
                <span class="help-inline" style="display:none;" id="descriptionProduct-message"> Veuillez entrer une description. </span>
            </div>
        </div>
        <div id="dimxProduct-control-group" class="control-group">
            <label for="dimxProduct" class="control-label">Longueur * : </label>
            <div class="controls">
                <input data-error-selector="dimxProduct-message" type="text" id="dimxProduct"  name="dimxProduct" placeholder="x"/>
                <span class="help-inline" style="display:none;" id="dimxProduct-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
        <div id="dimyProduct-control-group" class="control-group">
            <label for="dimyProduct" class="control-label">Largeur * : </label>
            <div class="controls">
                <input data-error-selector="dimyProduct-message" type="text" id="dimyProduct"  name="dimyProduct" placeholder="y"/>
                <span class="help-inline" style="display:none;" id="dimyProduct-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
        <div id="dimzProduct-control-group" class="control-group">
            <label for="dimzProduct" class="control-label">Profondeur * : </label>
            <div class="controls">
                <input data-error-selector="dimzProduct-message" type="text" id="dimzProduct"  name="dimzProduct" placeholder="z"/>
                <span class="help-inline" style="display:none;" id="dimzProduct-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="button red" data-dismiss="modal" aria-hidden="true">Annuler</div>
        <div id="valid-product" data-newproduct="false" data-dismiss="modal" class="button green">Valider</div>
    </div>
</div>