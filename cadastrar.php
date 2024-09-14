<pre>
<?php
    if($_SERVER["REQUEST_METHOD"] != "POST"):
        header("Location: index.php");
    endif;

    var_dump(json_encode($_REQUEST));