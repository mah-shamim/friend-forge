<?php require __DIR__.'/config/bootstrap.php';
$counts = array();
foreach (array('goals','tasks','notes','vocabulary') as $table) {
  $counts[$table] = (int)$db->pdo()->query('SELECT COUNT(*) c FROM '.$table)->fetch()['c'];
}
$pending = (int)$db->pdo()->query("SELECT COUNT(*) c FROM tasks WHERE status='pending'")->fetch()['c'];
?><!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width"><title><?=e($config['app_name'])?></title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"><link rel="stylesheet" href="assets/css/app.css"></head><body>
<nav class="navbar navbar-default"><div class="container"><div class="navbar-header"><a class="navbar-brand" href="index.php">FriendForge AI</a></div><ul class="nav navbar-nav"><li><a href="tasks.php">Tasks</a></li><li><a href="notes.php">Notes</a></li><li><a href="vocabulary.php">Vocabulary</a></li><li><a href="chat.php">AI Chat</a></li></ul></div></nav>
<div class="container"><div class="jumbotron"><h1>Build for a Friend</h1><p>Private local AI companion for learning, planning and personal notes.</p><a class="btn btn-primary" href="chat.php">Start AI practice</a></div><div class="row">
<?php foreach (array('goals'=>'Goals','tasks'=>'Tasks','notes'=>'Notes','vocabulary'=>'Vocabulary') as $k=>$label): ?><div class="col-sm-3"><div class="panel panel-default"><div class="panel-body"><h3><?=e($counts[$k])?></h3><p><?=e($label)?></p></div></div></div><?php endforeach; ?></div>
<div class="alert alert-info">Pending tasks: <?=e($pending)?> · Model: <?=e($config['ollama_model'])?></div></div></body></html>
