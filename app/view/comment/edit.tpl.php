<div class='comment-form'> 
    <form method=post> 
        <fieldset> 
        <legend>Editera en kommentar</legend> 
        <p><label>Comment:<br/><textarea name='content'><?=$content?></textarea></label></p> 
        <p><label>Name:<br/><input type='text' name='name' value='<?=$name?>'/></label></p> 
        <p><label>Homepage:<br/><input type='text' name='web' value='<?=$web?>'/></label></p> 
        <p><label>Email:<br/><input type='text' name='mail' value='<?=$mail?>'/></label></p> 
        <p class=buttons> 
		  <input type='hidden' name="redirect" value="<?=$this->url->create('')?>"> 
            <input type='submit' name='saveEdit' value='Spara' onClick="this.form.action = '<?=$this->url->create('comment/savecomment'.'/'.$id)?>'" /> 
            <input type='submit' name='doCancel' value='Cancel' onClick="this.form.action = ''"/> 
        </p> 
        </fieldset> 
    </form> 
</div> 