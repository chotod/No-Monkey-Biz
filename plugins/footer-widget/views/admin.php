<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('telephone_title'); ?>">Telephone Label:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('telephone_title'); ?>" name="<?php echo $this->get_field_name('telephone_title'); ?>" type="text" value="<?php echo $telephone_title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('telephone_input'); ?>">Telephone No:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('telephone_input'); ?>" name="<?php echo $this->get_field_name('telephone_input'); ?>" type="text" value="<?php echo $telephone_input; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('email_title'); ?>">Email Label:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('email_title'); ?>" name="<?php echo $this->get_field_name('email_title'); ?>" type="text" value="<?php echo $email_title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('email_input'); ?>">Email Address:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('email_input'); ?>" name="<?php echo $this->get_field_name('email_input'); ?>" type="text" value="<?php echo $email_input; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('hours_title'); ?>">Business Hours Label</label>
		<input class="widefat" id="<?php echo $this->get_field_id('hours_title'); ?>" name="<?php echo $this->get_field_name('hours_title'); ?>" type="text" value="<?php echo $hours_title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('hours_input'); ?>">Business Hours Info</label>
		<input class="widefat" id="<?php echo $this->get_field_id('hours_input'); ?>" name="<?php echo $this->get_field_name('hours_input'); ?>" type="text" value="<?php echo $hours_input; ?>">
   </p>
</div>
