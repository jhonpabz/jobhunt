<h1><?php echo $heading; ?></h1>
<?php foreach($jobs as $jobs): ?>
  <h2><?php echo $jobs['title']; ?></h2>
  <p><?php echo $jobs['description']; ?></p>
<?php endforeach; ?>