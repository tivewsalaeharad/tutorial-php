<?php
if (filter_has_var(INPUT_POST, 'test')) {
    echo "Имеется параметр 'test'";
} elseif (filter_has_var(INPUT_POST, 'textformodifying')) {
    echo filter_input(INPUT_POST, 'textformodifying');
    echo '<br>';
    echo filter_input(INPUT_POST, 'textformodifying', FILTER_CALLBACK, ['options' => 'htmlspecialchars']);
}
