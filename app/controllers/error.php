<?php
class ErrorController extends Controller
{
    public function unknownPage($page)
    {
        return $this->view('error/unknownPage', ['page' => $page]);
    }

    public function error500($e)
    {
        return $this->view('error/error500', [$e->getMessage(), $e->getLine(), $e->getFile()]);
    }

}
