<?php

namespace Onetoweb\Quicargo\Endpoint\Endpoints;

use Onetoweb\Quicargo\Endpoint\AbstractEndpoint;

/**
 * Order Endpoint.
 */
class Order extends AbstractEndpoint
{
    /**
     * @param array $data
     * 
     * @return array|NULL
     */
    public function create(array $data): ?array
    {
        return $this->client->post('/shipper/orders/new-request', $data);
    }
    
    /**
     * @param int $orderId
     * 
     * @return array|NULL
     */
    public function status(int $orderId): ?array
    {
        return $this->client->get("/shipper/orders/$orderId/status/");
    }
    
    /**
     * @param int $orderId
     * @param array $data
     * 
     * @return array|NULL
     */
    public function cancel(int $orderId, array $data): ?array
    {
        return $this->client->post("/shipper/orders/$orderId/cancel/", $data);
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function offer(array $data): array
    {
        return $this->client->post('/shipper/new-offer', $data);
    }
}
