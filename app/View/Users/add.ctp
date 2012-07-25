<h1 class="tit">Add User</h1>
<?php if ($this->Session->check('Message.flash')) $this->Session->flash(); ?>

    <?php echo $this->Form->create('User');?>
      <fieldset>
        <table class="nostyle">
          <tbody>
          <tr>
            <td class="va-top">Name:</td>
            <td><?php echo $this->Form->input('User.name', array('label' => '', 'class' => 'input-text')); ?></td>
          </tr>
          <tr>
            <td class="va-top">Group:</td>
            <td><?php echo $this->Form->input('User.group_id', array('label' => '', 'type' => 'select', 'options' => $groups, 'class' => 'input-text')); ?></td>
          </tr>
          <tr>
            <td class="va-top">Username:</td>
            <td><?php echo $this->Form->input('User.username', array('label' => '', 'class' => 'input-text')); ?></td>
          </tr>
          <tr>
            <td class="va-top">Password:</td>
            <td><?php echo $this->Form->input('User.password', array('label' => '', 'class' => 'input-text')); ?></td>
          </tr>
          <tr>
            <td class="t-right" colspan="2"><input type="submit" value="Submit" class="input-submit"/></td>
          </tr>
        </tbody></table>
      </fieldset>
    <?php echo $this->Form->end();?>