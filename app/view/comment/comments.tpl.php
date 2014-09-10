<hr>


<?php if (is_array($comments)) : ?>
<h2>Kommentarer (<?=count($comments);?>)</h2>
<div class='comments'>
<?php foreach ($comments as $id => $comment) : ?>

<div class="commentRow">
	<p class="commentHeader"><?="User: " . $comment['name'] . "&emsp;" . "Email: " . $comment['mail'];?></p>
	<img class="commentIcon" src='<?=$this->url->asset("img/anax.png")?>' alt='Anax Logo'/>
	<p class="commentContent"><?=$comment['content']?></p>
	
	<form method=post>
	
	<input type=hidden name="redirect" value="<?=$this->url->create('')?>">
	<div class="commentAction">
	<input type='submit' name='doEdit' value='edit' onClick="this.form.action = '<?=$this->url->create('comment/edit'.'/'.$id)?>'"/>
	<input type='submit' name='doDelete' value='Delete' onClick="this.form.action = '<?=$this->url->create('comment/delete'.'/'.$id)?>'"/>
	</div>
	</form>
</div>
<div class="clearer"></div>

<?php endforeach; ?>
</div>
<?php endif; ?>

<?php


?>