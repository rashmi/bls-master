<!--<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="<?= h($class) ?>"><?= h($message) ?></div> -->


<div class="alert alert-info alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong><?= h($message) ?></strong>
                </div>