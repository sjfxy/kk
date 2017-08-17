<?php
// $bar="Es";
// apcu_add('foo', $bar);
// var_dump(apcu_fetch('foo'));
// $sj="ss";
// apcu_add('foo', $sj);
// var_dump(apcu_fetch('foo'));
// echo "\n";
// print_r(apcu_cache_info());
// apcu_cas("foo", $bar, $sj);
// print_r(apcu_fetch('foo'));
echo "Let's do something with success", PHP_EOL;

apcu_store('anumber', 42);

echo apcu_fetch('anumber'), PHP_EOL;

echo apcu_dec('anumber'), PHP_EOL;
echo apcu_dec('anumber', 10), PHP_EOL;
echo apcu_dec('anumber', 10, $success), PHP_EOL;

var_dump($success);

echo "Now, let's fail", PHP_EOL, PHP_EOL;

apcu_store('astring', 'foo');

$ret = apcu_dec('astring', 1, $fail);

var_dump($ret);
var_dump($fail);


$bar = 'BAR';
apcu_store('foo', $bar);
apcu_delete('foo');


$fruit  = 'apple';
$veggie = 'carrot';

apcu_store('foo', $fruit);
apcu_store('bar', $veggie);

if (apcu_exists('foo')) {
    echo "Foo exists: ";
    echo apcu_fetch('foo');
} else {
    echo "Foo does not exist";
}

echo PHP_EOL;
if (apcu_exists('baz')) {
    echo "Baz exists.";
} else {
    echo "Baz does not exist";
}

echo PHP_EOL;

$ret = apcu_exists(array('foo', 'donotexist', 'bar'));
var_dump($ret);

$bar = 'BAR';
apcu_store('foo', $bar);
var_dump(apcu_fetch('foo'));


$bar = 'BARw';
apcu_store('foo', $bar);
var_dump(apcu_fetch('foo'));


//add store(set) fetch store add cas exites