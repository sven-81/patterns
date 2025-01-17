<?php

declare(strict_types=1);

namespace patterns\behavioral\strategy;

class FreightCenterManager
{
    private TransportStrategy $transportStrategy;


    public function setTransportStrategy(TransportStrategy $transportStrategy): void
    {
        $this->transportStrategy = $transportStrategy;
    }


    public function deliverMail(Mail $mail): void
    {
        $this->transportStrategy->deliver($mail);
    }
}
