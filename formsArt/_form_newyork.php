
<!--
<div id="val1-control-group" class="control-group">
    <label for="val1">Email : *</label>
    <div class="controls">
        <input type="text" data-error-selector="val1-message" id="val1" name="val1">
        <span style="display:none;" id="val1-message" class="help-inline">Vous devez saisir un Email valide.</span>
    </div>
</div>
<div class="control-group">
    <label for="val2">Value 2 : </label><input type="text" id="val2" name="val2">
</div>
<div id="val3-control-group" class="control-group">
    <label for="val3">Telephone : *</label>
    <div class="controls">    
        <input type="text" data-error-selector="val3-message" id="val3" name="val3">
        <span style="display:none;" id="val3-message" class="help-inline">Vous devez remplir ce champ.</span>
    </div>
</div>
<div class="control-group">
    <label for="val4">Value 4 : </label><input type="text" id="val4" name="val4">
</div>
-->
<div class="control-group">
    <label for="inputtext">Date de naissance     : </label>
    <div class="controls">
        <input type="text" id="inputtext" placeholder="Tapez n'importe quoi ...">
        <span class="help-inline"></span>
    </div>
</div>
<div id="color-control-group" class="control-group">
    <label>Selectionnez votre humeur : </label>
    <div class="controls">
        <select data-error-selector="color-message" name="color" id="color">
            <option>Selectionner un model...</option>
            <option value="black">black</option>
            <option value="red">Dynamisme</option>
            <option value="green">calme</option>
        </select>
        <span id="color-message" class="help-inline">Ce champ est obligatoire.</span>
    </div>
</div>

<div class="control-group">
    <a class="button grey" name="Reset">Reset</a> 
    <input class="button red noborder" id="generate" data-val="newyork" type="submit" value="Generez">
</div>

