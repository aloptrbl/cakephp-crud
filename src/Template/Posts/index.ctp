
<h5>All post</h5>
<?php echo $this->Flash->render(); ?>
<?php echo $this->Html->link('ADD POST', ['action'=>'add'], ['class'=>'btn btn-primary']); ?>


<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Timestamp</th>
    </tr>
  </thead>
  <tbody>
  <?php if(!empty($posts)):  ?>
  <?php foreach($posts as $post): ?>
    <tr>
      <th scope="row"><?php echo $post->title ?></th>
      <td><?php echo $post->description ?></td>
      <td><?php echo $post->timestamp ?></td>
      <td><?php echo $this->html->link('View', ['action'=>'view', $post->id], ['class'=>'btn btn-primary']); ?></td>
      <td><?php echo $this->html->link('Edit', ['action'=>'edit', $post->id], ['class'=>'btn btn-success']); ?></td>
      <td><?php echo $this->html->link('Delete', ['action'=>'delete', $post->id], ['class'=>'btn btn-danger'], ['confirm'=> 'Are you sure want to delete this post?']); ?></td>
    </tr>
<?php endforeach; ?>
<?php else: ?>
<td>No Record Found!</td>
<?php endif; ?>
  </tbody>
</table> 