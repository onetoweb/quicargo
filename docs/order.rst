.. _top:
.. title:: Order

`Back to index <index.rst>`_

=====
Order
=====

.. contents::
    :local:


Create order
````````````

.. code-block:: php
    
    $order = [
        'type' => 'DRYFOOD',
        'offerType' => 'PREMIUM',
        'weight' => 30,
        'referenceNumber' => [
            'shipper' => '319287348-ASD',
            'loading' => '8912321444-YHS',
            'delivery' => '2229923922-NSH'
        ],
        'option' => [
            'closedBox' => true,
            'electricPlateCart' => false,
            'sidedoor' => false,
            'hydraulic' => false,
            'stackable' => false,
            'mountedForkLift' => true,
            'isB2C' => false,
            'cargoTypeOtherText' => ''
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
            'timeFrom' => '2026-07-01T06:00:00.000Z',
            'timeTo' => '2026-07-01T15:00:00.000Z',
            'accessibility' => 'TRAILER',
            'requirement' => 'BACKLIFT'
        ],
        'destination' => [
            'address' => '',
            'streetName' => 'Leyenbroekerweg',
            'streetNumber' => '68',
            'city' => 'Sittard',
            'country' => 'NL',
            'zipcode' => '6132 AC',
            'contactComments' => '<340 cm doorrijhoogte',
            'contactCompanyName' => 'Roering BV',
            'contactName' => 'Jonas',
            'contactPhone' => '+31612345678',
            'timeFrom' => '2026-07-03T06:00:00.000Z',
            'timeTo' => '2026-07-03T15:00:00.000Z',
            'accessibility' => 'BOXTRUCK',
            'requirement' => 'SIDEDOOR'
        ],
        'items' => [
            [
                'type' => 'PALLET',
                'length' => 80,
                'width' => 120,
                'height' => 120,
                'count' => 3,
                'barcodes' => [
                    'BARCODE-1',
                    'BARCODE-2',
                    'BARCODE-3'
                ]
            ]
        ]
    ];
    $result = $client->order->create($order);


Get order status
````````````````

.. code-block:: php
    
    $orderId = 42;
    $result = $client->order->status($orderId);


Cancel order
````````````

.. code-block:: php
    
    $orderId = 40158;
    $data  = [
        'reason' => 'mistake'
    ];
    $result = $client->order->cancel($orderId, $data);


Obtain an price offer
`````````````````````

.. code-block:: php
    
    $offer = [
        'type' => 'DRYFOOD',
        'weight' => 30,
        'referenceNumber' => [
            'shipper' => '319287348-ASD',
            'loading' => '8912321444-YHS',
            'delivery' => '2229923922-NSH'
        ],
        'option' => [
            'closedBox' => true,
            'electricPlateCart' => false,
            'sidedoor' => false,
            'hydraulic' => false,
            'stackable' => false,
            'mountedForkLift' => true,
            'isB2C' => false,
            'isDeliveryOnPickupDayFlexibility' => false,
            'isPickupOnDeliveryDayFlexibility' => false,
            'cargoTypeOtherText' => ''
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
            'timeFrom' => '2026-07-01T06:00:00.000Z',
            'timeTo' => '2026-07-01T15:00:00.000Z',
            'accessibility' => 'TRAILER',
            'requirement' => 'BACKLIFT'
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
            'timeFrom' => '2026-07-03T06:00:00.000Z',
            'timeTo' => '2026-07-03T15:00:00.000Z',
            'accessibility' => 'BOXTRUCK',
            'requirement' => 'BACKLIFT'
        ],
        'items' => [
            [
                'type' => 'PALLET',
                'length' => 80,
                'width' => 120,
                'height' => 120,
                'count' => 3
            ]
        ]
    ];
    
    $result = $client->offer->offer($offer);


Obtain an price offer
`````````````````````

.. code-block:: php
    
    $offer = [
        'type' => 'DRYFOOD',
        'weight' => 30,
        'referenceNumber' => [
            'shipper' => '319287348-ASD',
            'loading' => '8912321444-YHS',
            'delivery' => '2229923922-NSH'
        ],
        'option' => [
            'closedBox' => true,
            'electricPlateCart' => false,
            'sidedoor' => false,
            'hydraulic' => false,
            'stackable' => false,
            'mountedForkLift' => true,
            'isB2C' => false,
            'isDeliveryOnPickupDayFlexibility' => false,
            'isPickupOnDeliveryDayFlexibility' => false,
            'cargoTypeOtherText' => ''
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
            'timeFrom' => '2026-07-01T06:00:00.000Z',
            'timeTo' => '2026-07-01T15:00:00.000Z',
            'accessibility' => 'TRAILER',
            'requirement' => 'BACKLIFT'
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
            'timeFrom' => '2026-07-03T06:00:00.000Z',
            'timeTo' => '2026-07-03T15:00:00.000Z',
            'accessibility' => 'BOXTRUCK',
            'requirement' => 'BACKLIFT'
        ],
        'items' => [
            [
                'type' => 'PALLET',
                'length' => 80,
                'width' => 120,
                'height' => 120,
                'count' => 3
            ]
        ]
    ];
    
    $result = $client->order->offer($offer);


`Back to top <#top>`_