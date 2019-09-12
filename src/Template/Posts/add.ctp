<?php echo $this->Form->create($post); ?>
<h4 class="text-center">Add Posts</h4>

  <fieldset>
  <div class="form-group">
   <div class="col-lg-10">
   <?php echo $this->Form->input('title',['class'=>'form-control', 'placeholder'=>'Title']); ?>
   <?php echo $this->Form->input('description',['class'=>'form-control', 'placeholder'=>'Description', 'type'=>'textarea']); ?>
   </div>
    </div>
    </fieldset>
    <div class="form-group">
    <div class="col-lg-10">
    <?php echo $this->Form->button(__('Add Post'), ['class'=>'btn btn-primary']); ?>
    <?php echo $this->html->link('Back', ['action'=>'index'], ['class'=>'btn btn-success']); ?>
    </div>
    </div>
  </fieldset>

<?php echo $this->Form->end(); ?>


