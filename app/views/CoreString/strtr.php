<?php
/**
    * Подстановка значений в плейсхолдеры сообщения.
    */
    function interpolate($message, array $context = array())
    {
      // Построение массива подстановки с фигурными скобками
      // вокруг значений ключей массива context.
      $replace = array();
      foreach ($context as $key => $val) {
          $replace['{' . $key . '}'] = $val;
      }
 
      // Подстановка значений в сообщение и возврат результата.
      return strtr($message, $replace);
    }
 
    // Сообщение с плейсхолдером, имя которого обрамлено
    // фигурными скобками.
    $message = "User {username} created";
 
    // Массив context с данными для замены плейсхолдера на
    // итоговое значение.
    $context = array('username' => 'bolivar');
 
    // Результат: "User bolivar created"
    echo interpolate($message, $context);
