<?php
ob_start();

?>

<div class=""conta>

</div>
<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
