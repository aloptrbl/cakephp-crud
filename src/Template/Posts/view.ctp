<p><?php echo $post->title; ?></p>
<p><?php echo $post->description; ?></p>
<p><?php echo $post->timestamp; ?></p>
<?php echo $this->html->link('Back', ['action'=>'index'], ['class'=>'btn btn-primary']) ?>