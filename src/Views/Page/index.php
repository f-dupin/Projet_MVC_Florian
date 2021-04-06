<?php
ob_start();

?>

<p>coucou</p>
<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
