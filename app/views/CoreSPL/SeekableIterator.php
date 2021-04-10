<?php

class MySeekableIterator implements SeekableIterator
{

    private $position;

    private $array = ["первый элемент", "второй элемент", "третий элемент", "четвёртый элемент"];

    /* Метод, требуемый для интерфейса SeekableIterator */

    public function __construct()
    {
        $this->position = 0;
    }

    public function seek($position)
    {
        if (!isset($this->array[$position])) {
            throw new OutOfBoundsException("недействительная позиция ($position)");
        }

        $this->position = $position;
    }

    /*  Методы, требуемые для интерфейса Iterator */

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }
}

try {

    echo "<pre>";

    $it = new MySeekableIterator;
    echo $it->current(), "\n";

    $it->seek(2);
    echo $it->current(), "\n";

    $it->seek(1);
    echo $it->current(), "\n";

    $it->seek(10);
    echo "<pre>";

} catch (OutOfBoundsException $e) {
    echo $e->getMessage();
}
