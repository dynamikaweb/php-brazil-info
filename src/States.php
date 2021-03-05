<?php 

namespace dynamikaweb\brazilinfo;

/**
 * States
 * 
 * @var array LIST_ACRON abbreviations of the Brazilian states
 * @var array LIST_NAMES full name of Brazilian states
 */
class States 
{
    const LIST_ACRON = [
        'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'
    ];

    const LIST_NAMES = [
        'Acre', 'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará', 'Distrito Federal', 'Espírito Santo', 'Goiás', 'Maranhão', 'Mato Grosso', 'Mato Grosso do Sul', 'Minas Gerais', 'Pará', 'Paraíba', 'Paraná', 'Pernambuco', 'Piauí', 'Rio de Janeiro', 'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondônia', 'Roraima', 'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins'
    ];

    /**
     * keys as acronyms and names as values list
     *
     * @return array
     */
    public static function list()
    {
        return array_combine(
            self::LIST_ACRON,
            self::LIST_NAMES
        );
    }
}