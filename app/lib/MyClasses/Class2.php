<?php
namespace MyClasses;

class Class2 {
    
    function __construct()
    {
        echo "<pre class='prettyprint' style='padding: 10px;'>".htmlspecialchars(file_get_contents(__FILE__))."</pre>";
    }

}
