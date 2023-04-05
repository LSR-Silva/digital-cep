<?php

use PHPUnit\Framework\TestCase;
use Luckas\DigitalCep\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado)
    {
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste()
    {
        return [
            "Endereço Rua Algodoeiro" => [
                "53250050",
                [
                    "cep" => "53250-050",
                    "logradouro" => "Rua Algodoeiro",
                    "complemento" => "",
                    "bairro" => "Fragoso",
                    "localidade" => "Olinda",
                    "uf" => "PE",
                    "ibge" => "2609600",
                    "gia" => "",
                    "ddd" => "81",
                    "siafi" => "2491"
                ]
            ],
            "Endereço Qualquer" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ]
        ];
    }
}