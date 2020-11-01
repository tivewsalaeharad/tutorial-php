<?php
echo '<pre>';
print_r(password_get_info('$2y$10$cRBQKlfSlaJHs3U2XuobAObvTpPJAbox0z19utXYaWv4HyXPj/mly'));
var_export(password_needs_rehash('$2y$10$cRBQKlfSlaJHs3U2XuobAObvTpPJAbox0z19utXYaWv4HyXPj/mly', PASSWORD_DEFAULT));
echo PHP_EOL;
print_r(password_get_info('$2y$10$hTA9zcHiU0qRqacnDnTRnO8BZBsqo1adF8GsgxwS4DFNFptohzfNO'));
var_export(password_needs_rehash('$2y$10$hTA9zcHiU0qRqacnDnTRnO8BZBsqo1adF8GsgxwS4DFNFptohzfNO', PASSWORD_BCRYPT));
echo PHP_EOL;
print_r(password_get_info('$argon2i$v=19$m=65536,t=4,p=1$Z3R3NlB3UUNoZFJTZVl6dg$+6yhhUO71tQPwDE2McifmDk+OsnUvbSf74LdqZq7jjY'));
var_export(password_needs_rehash('$argon2i$v=19$m=65536,t=4,p=1$Z3R3NlB3UUNoZFJTZVl6dg$+6yhhUO71tQPwDE2McifmDk+OsnUvbSf74LdqZq7jjY', PASSWORD_BCRYPT));
echo PHP_EOL;
print_r(password_get_info('$argon2id$v=19$m=65536,t=4,p=1$T0RGWEJJaDRNWmtkMDAxbQ$zu+8GTCvOfc+xNPo/kUjdXujpn3UiGbjF9amclruNHA'));
var_export(password_needs_rehash('$argon2id$v=19$m=65536,t=4,p=1$T0RGWEJJaDRNWmtkMDAxbQ$zu+8GTCvOfc+xNPo/kUjdXujpn3UiGbjF9amclruNHA', PASSWORD_ARGON2ID));
echo '</pre>';
