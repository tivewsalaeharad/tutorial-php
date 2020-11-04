<?php
    ob_start(function ($buffer) { return strtoupper($buffer); } );
    echo "<pre>".print_r(ob_get_status(true), true)."</pre>";
    ob_end_flush();
