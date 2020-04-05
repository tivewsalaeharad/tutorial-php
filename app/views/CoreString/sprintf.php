<pre>

sprintf('There are %d monkeys in the %s', $num, $location) = 

sprintf('There are %d monkeys in the %s', 5, 'tree') = "<?=sprintf('There are %d monkeys in the %s', 5, 'tree')?>";

sprintf('The %2$s contains %1$d monkeys%3$sThat\'s a nice %2$s full of %1$d monkeys', 5, 'tree', "\n") = &lt;&lt;&lt;STR<br><?=sprintf('The %2$s contains %1$d monkeys%3$sThat\'s a nice %2$s full of %1$d monkeys', 5, 'tree', "\n")?><br>STR;

sprintf("%'.9d", 123) = "<?=sprintf("%'.9d", 123)?>";

sprintf("%'.09d", 123) = "<?=sprintf("%'.09d", 123)?>";

sprintf('The %2$s contains %1$04d monkeys', 5, 'tree') = "<?=sprintf('The %2$s contains %1$04d monkeys', 5, 'tree')?>:;

sprintf("%04d-%02d-%02d", 2020, 4, 1) = "<?=sprintf("%04d-%02d-%02d", 2020, 4, 1)?>";

sprintf("%01.2f", 68.75 + 54.35) = "<?=sprintf("%01.2f", 68.75 + 54.35)?>";

sprintf("%.3e", 362525200) = "<?=sprintf("%.3e", 362525200)?>";



</pre>
