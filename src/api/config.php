<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cedric
 * Date: 25/04/2018
 * Time: 15:05
 */

$testnet = false;
$cacheLocation = $testnet ? 'cache-testnet' : 'cache';
$rpcPort = $testnet ? 48081 : 38081;
$coinSymbol = 'msr';