<?php

$fis = [new SplFileInfo(__DIR__ . '\SplFileInfo.php'), new SplFileInfo(__DIR__ . '1\SplFileInfo.ph1')];
$fis[] = $fis[0]->getPathInfo();
$fis[] = $fis[1]->getPathInfo();

foreach ($fis as $fi) {
    echo
        "getBasename: " . $fi->getBasename() . "<br>" .
        "getExtension: " . $fi->getExtension() . "<br>" .
        "getFilename: " . $fi->getFilename() . "<br>" .
        "getPath: " . $fi->getPath() . "<br>" .
        "getPathname: " . $fi->getPathname() . "<br>" .
        "<b>getRealPath: " . $fi->getRealPath() . "</b><br>" .
        "isFile: " . ($fi->isFile() ? 'file' : 'not a file') . "<br>" .
        "isDir: " . ($fi->isDir() ? 'folder' : 'not a folder') .
        "<hr>";
}
