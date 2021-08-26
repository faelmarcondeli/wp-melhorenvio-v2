<?php

namespace Services;

use Models\Seller;
use Models\ShippingService;
use Helpers\SessionHelper;

class ClearDataStored
{
    public function __construct()
    {
        SessionHelper::initIfNotExists();
    }
    /**
     * Function to clear data about seller stored in session or database.
     *
     * @return void
     */
    public function clear()
    {
        (new Seller())->destroy();
        (new ShippingService())->destroy();

        foreach ($_SESSION as $key => $sessionItem) {
            if ($key != 'notices_melhor_envio') {
                unset($_SESSION[$key]);
            }
        }
    }
}
