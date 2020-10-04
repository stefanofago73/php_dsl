<?php
use Fago\Samples\Arrays\KeyValue;

/**
 *
 * @template T
 * @param T $value
 * @return KeyValue<T>
 */
function entry(string $key, $value): KeyValue
{
    return new KeyValue($key, $value);
}

/**
 *
 * @template R
 * @param array<KeyValue<R>> $pairs
 * @param class-string<R> $clazz
 * @return array<string,R>
 * @psalm-suppress UnusedParam
 */
function entriesForValueClass(string $clazz, array $pairs): array
{
    $result = array();
    foreach ($pairs as $pair) {
        $result[$pair->key()] = $pair->value();
    }
    return $result;
}

/**
 *
 * @param array<KeyValue<string>> $pairs
 * @return array<string,string>
 */
function entriesForStringValue(array $pairs): array
{
    $result = array();
    foreach ($pairs as $pair) {
        $result[$pair->key()] = $pair->value();
    }
    return $result;
}

/**
 *
 * @param array<KeyValue<int>> $pairs
 * @return array<string,int>
 */
function entriesForIntValue(array $pairs): array
{
    $result = array();
    foreach ($pairs as $pair) {
        $result[$pair->key()] = $pair->value();
    }
    return $result;
}

