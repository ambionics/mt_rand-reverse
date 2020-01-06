#!/usr/bin/env php
<?php

if($argc < 3)
{
	print($argv[0] . ' <seed> <n>' . "\n");
	print('' . "\n");
	print('Parameters:' . "\n");
	print('  seed:   Seed to initialize mt_rand() with' . "\n");
	print('  offset: Number of calls to mt_rand() before printing the first');
	print(' output' . "\n");
	print('' . "\n");
	print('Output:' . "\n");
	print('  <offset>\'s call to mt_rand() and <offset+227>\'s call');
	print(' to mt_rand()' . "\n");
	exit();
}

mt_srand($argv[1]);
for($i=0;$i<$argv[2];$i++)
    mt_rand();

print mt_rand() . " ";
for($i=0;$i<226;$i++)
    mt_rand();
print mt_rand() . "\n";
