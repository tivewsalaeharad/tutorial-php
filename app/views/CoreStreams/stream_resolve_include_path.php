<?php

var_dump(stream_resolve_include_path("stream_resolve_include_path.php"));
echo "<br>";
var_dump(stream_resolve_include_path("file_that_doesnt_exist"));
echo "<br>";
var_dump(stream_resolve_include_path("../app/views/CoreShell/exec.php"));

