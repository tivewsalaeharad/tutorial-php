<?

class Routine extends Controller {

    private $file_upload_txt = '../app/files/file.txt';
    private $file_write_file = '../app/files/write.txt';
 
    public function upload_txt() {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($this->file_upload_txt).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: '.filesize($this->file_upload_txt));
        readfile($this->file_upload_txt);
    }

    public function write_file() {
        $all='Name: '.$_POST['name']."\r\n".'Message: '.$_POST['message']."\r\n";
        if (!$handle = fopen($this->file_write_file, 'a')) {
            echo "Не могу открыть файл ($this->file_write_file)";
            exit;
        }
        if (fwrite($handle, $all) === false) {
            echo "Не могу произвести запись в файл ($this->file_write_file)";
            exit;
        }
        header('Location: /corefile/fread');
    }

}

?>
