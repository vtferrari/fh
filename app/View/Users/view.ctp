<!-- File: /app/View/Users/view.ctp -->

<h1><?php echo $user['User']['username']?></h1>

<p><small>Created: <?php echo $user['User']['created']?></small></p>

<p><?php echo $user['User']['password']?></p>
<p><?php echo $user['User']['role']?></p>