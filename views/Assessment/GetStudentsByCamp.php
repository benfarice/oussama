  <?php foreach($viewmodel as $item) : ?>
  <option value="<?php echo $item['student_id']; ?>">
  <?php echo $item['name']; ?>
  </option>
  <?php endforeach; ?>