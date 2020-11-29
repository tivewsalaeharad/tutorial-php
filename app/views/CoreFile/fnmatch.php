<?php
echo fnmatch('o[bv]o', 'obo') ? '+' : '-';
echo fnmatch('o[bv]o', 'obvo') ? '+' : '-';
echo fnmatch('o[bv]o', 'ovo') ? '+' : '-';
echo fnmatch('o[bv]o', 'ovoo') ? '+' : '-';
echo fnmatch('o[bv]o', 'ovvo') ? '+' : '-';
echo fnmatch('o[bv]o', 'owo') ? '+' : '-';
echo "<br>";
echo fnmatch('o[bv]o*', 'obo') ? '+' : '-';
echo fnmatch('o[bv]o*', 'obvo') ? '+' : '-';
echo fnmatch('o[bv]o*', 'ovo') ? '+' : '-';
echo fnmatch('o[bv]o*', 'ovoo') ? '+' : '-';
echo fnmatch('o[bv]o*', 'ovvo') ? '+' : '-';
echo fnmatch('o[bv]o*', 'owo') ? '+' : '-';
