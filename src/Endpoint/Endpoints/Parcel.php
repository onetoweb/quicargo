<?php

namespace Onetoweb\Quicargo\Endpoint\Endpoints;

use Onetoweb\Quicargo\Endpoint\AbstractEndpoint;

/**
 * Parcel Endpoint.
 */
class Parcel extends AbstractEndpoint
{
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->client->post('/shipper/orders/parcels/new-request', $data);
    }
    
    /**
     * @param array $data
     *  
     * @return array
     */
    public function offer(array $data): array
    {
        return $this->client->post('/shipper/parcels/new-offer', $data);
    }
}
