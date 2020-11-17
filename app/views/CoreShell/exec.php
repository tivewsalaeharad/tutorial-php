<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    print("<pre>");
    foreach ($result as $line) {
        print($line . "\n");
    }
    print("</pre>");
}
execPrint('git pull https://tivewsalaeharad:Everglades311506Miami@github.com/tivewsalaeharad/phptutorial master');
execPrint("git status");

