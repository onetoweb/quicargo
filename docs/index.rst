.. title:: Index

Index
=====

.. contents::
    :local:

===========
Basic Usage
===========

Setup

.. code-block:: php
    
    require 'vendor/autoload.php';
    
    use Onetoweb\Quicargo\Client;
    
    // param
    $apiKey = 'api_key';
    $testModus = true;
    
    // setup client
    $client = new Client($apiKey, $testModus);


========
Examples
========

* `Order <order.rst>`_
* `Parcel <parcel.rst>`_
