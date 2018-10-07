<h3>Editar</h3>

<form method="POST">
        <div class="input-field col s12">
                <input type="text" id="icon_prefix2" class="materialize-textarea"value="<?php  $info['callType'];?>" name="callType">
                <label for="icon_prefix2"><?php echo $info['callType'];?></label>
        </div>
        <div class="row">
            <div class="input-field col s12">
                
                <textarea id="textarea1" class="materialize-textarea" value="<?php  $info['problem'];?>" name="problem"></textarea>
                <label for="textarea1"><?php echo $info['problem'];?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" value="<?php  $info['soluction'];?>" name="soluction"></textarea>
                <label for="textarea1"><?php echo $info['soluction'];?></label>
            </div>
        </div>  

	<input type="submit" value="Salvar" />

</form>