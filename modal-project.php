
<div id="modal-project" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="modal-label-project">Edition du projet</h3>
    </div>
    <div class="modal-body">
        <div id="nameProject-control-group" class="control-group">
            <label for="nameProject" class="control-label">Nom  * : </label>
            <div class="controls">
                <input data-error-selector="nameProject-message" type="text" id="nameProject"  name="nameProject" placeholder="Prénom"/>
                <span class="help-inline" style="display:none;" id="nameProject-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
        <div id="descriptionProject-control-group" class="control-group">
            <label for="descriptionProject" class="control-label">Description  * : </label>
            <div class="controls">
                <input data-error-selector="descriptionProject-message" type="text" id="descriptionProject"  name="descriptionProject" placeholder="Description"/>
                <span class="help-inline" style="display:none;" id="descriptionProject-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
        <div id="artistProject-control-group" class="control-group">
            <label for="artistProject" class="control-label">Artiste  * : </label>
            <div class="controls">
               <select id="artistProject">
                    <option value="0">Selectionner un artiste</option>
                    <option value="1">Michel</option>
                    <option value="2">Jean Claude</option>
                </select>
            </div>
        </div>
        <div id="prixProject-control-group" class="control-group">
            <label for="prixProject" class="control-label">Prix : </label>
            <div class="controls">
                <input data-error-selector="prixProject-message" type="text" id="prixProject"  name="prixProject" placeholder="Prix"/>
                <span class="help-inline" style="display:none;" id="prixProject-message"> Ce champ est obligatoire. </span>
            </div>
        </div>
    </div>
     <div class="modal-footer">
        <div class="button red" data-dismiss="modal" aria-hidden="true">Annuler</div>
        <div id="valid-project" data-newproject="false" data-dismiss="modal" class="button green">Valider</div>
    </div>
</div>