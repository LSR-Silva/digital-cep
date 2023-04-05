<?php

namespace Luckas\DigitalCep;

use Luckas\DigitalCep\ws\ViaCep;

class Search
{
    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace("/[^0-9]/im", '', $zipCode);

        return $this->getFromServer($zipCode);
    }

    private function getFromServer(string $zipCode): array
    {
        $get = new ViaCep();

        return $get->get($zipCode);
    }

    private function processData($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = trim($value);
        }

        return $data;
    }
}
