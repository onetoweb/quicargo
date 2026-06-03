.. _top:
.. title:: Parcel

`Back to index <index.rst>`_

======
Parcel
======

.. contents::
    :local:


Create new parcel order
```````````````````````

.. code-block:: php
    
    $parcel = [
        'requestType' => 'PARCEL',
        'referenceNumber' => [
            'shipper' => 'ABC13',
            'loading' => '123',
            'delivery' => 'AAA11'
        ],
        'pickup' => [
            'address' => 'Johan Huizingalaan 763a, 1066 VH Amsterdam, Netherlands',
            'streetName' => 'Johan Huizingalaan',
            'streetNumber' => '763a',
            'city' => 'Amsterdam',
            'country' => 'NL',
            'zipcode' => '1066 VH',
            'contactComments' => 'Pickup comments',
            'contactCompanyName' => 'Pickup Company',
            'contactName' => 'contactname',
            'contactPhone' => 'contactphone',
            'contactEmail' => 'pickup@quicargo.com',
            'loadingDate' => '2026-07-01',
            'sendTrackAndTrace' => false
        ],
        'destination' => [
            'address' => 'Keukenhof, Stationsweg 166A, 2161 AM Lisse, Netherlands',
            'streetName' => 'Stationsweg',
            'streetNumber' => '166A',
            'city' => 'lisse',
            'country' => 'NL',
            'zipcode' => '2161 AM',
            'contactComments' => 'Delivery comment',
            'contactCompanyName' => 'Delivery Company',
            'contactName' => 'contactname',
            'contactPhone' => 'contactphone',
            'contactEmail' => 'destination@quicargo.com',
            'sendTrackAndTrace' => true
        ],
        'items' => [
            [
                'description' => 'item description',
                'type' => 'BOX',
                'length' => 80,
                'width' => 120,
                'height' => 120,
                'count' => 1,
                'weight' => 3
            ]
        ],
        'options' => [
            'isB2C' => false
        ]
    ];
    
    $result = $client->parcel->create($parcel);


Get a offer
```````````

.. code-block:: php
    
    $parcel = [
        'requestType' => 'PARCEL',
        'referenceNumber' => [
            'shipper' => 'ABC12',
            'loading' => '123',
            'delivery' => 'AAA11'
        ],
        'pickup' => [
            'address' => 'Herengracht 234, 1016 BT Amsterdam, Netherlands',
            'streetName' => 'Herengracht',
            'streetNumber' => '234',
            'city' => 'Amsterdam',
            'country' => 'NL',
            'zipcode' => '1016 BT',
            'contactComments' => 'Even aanbellen aan de poort bij aankomst',
            'contactCompanyName' => 'Janssen BV',
            'contactName' => 'Michael Janssen',
            'contactPhone' => '+31612345678',
            'contactEmail' => 'pickup@quicargo.com',
            'loadingDate' => '2026-06-23',
            'sendTrackAndTrace' => false
        ],
        'destination' => [
            'address' => 'Leyenbroekerweg 68, 6132 AC, Sittard, Netherlands',
            'streetName' => 'Leyenbroekerweg',
            'streetNumber' => '68',
            'city' => 'Sittard',
            'country' => 'NL',
            'zipcode' => '6132 AC',
            'contactComments' => '<340 cm doorrijhoogte',
            'contactCompanyName' => 'Roering BV',
            'contactName' => 'Jonas',
            'contactPhone' => '+31612345678',
            'contactEmail' => 'destination@quicargo.com',
            'sendTrackAndTrace' => false
        ],
        'items' => [
            [
                'description' => 'test',
                'type' => 'TIRE',
                'length' => 80,
                'width' => 120,
                'height' => 120,
                'count' => 3,
                'weight' => 31.5
            ],
            [
                'description' => 'test',
                'type' => 'BOX',
                'length' => 40,
                'width' => 110,
                'height' => 110,
                'count' => 2,
                'weight' => 10
            ]
        ],
        'options' => [
            'isB2C' => false
        ]
    ];
    
    $result = $client->parcel->offer($parcel);


`Back to top <#top>`_