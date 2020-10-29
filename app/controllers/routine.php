<?php

class Routine extends Controller {

    private $file_upload_txt = '../app/files/file.txt';
    private $file_write_file = '../app/files/write.txt';
 
    public function upload_txt()
    {
        require_once('../app/functions/upload_txt.php');
    }

    public function write_file()
    {
        require_once('../app/functions/write_file.php');
    }

    public function generate_pdf()
    {
        require_once('../app/functions/generate_pdf.php');
    }

    public function filters()
    {
        require_once('../app/functions/filters.php');
    }

}
