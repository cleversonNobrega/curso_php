<?php

$tans = ['hello' => 'hi', 'hi' => 'hello'];
echo strtr('hi all, i said hello ', $trans);

echo str_replace(['hello', 'hi'],['hi', 'hello'],'hi all, i said hello '  );