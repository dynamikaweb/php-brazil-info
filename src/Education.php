<?php 

namespace dynamikaweb\brazilinfo;

/**
 * Education
 * 
 * @property array LIST_ESCOLARIDADE full name of Brazilian Education
 * @property array LIST_NAMES for retrocompatibily purposes
 */
class Education 
{
    const FUNDAMENTAL_INCOMPLETO = 1;
    const FUNDAMENTAL_COMPLETO = 2;
    const MEDIO_INCOMPLETO = 3;
    const MEDIO_COMPLETO = 4;
    const SUPERIOR_INCOMPLETO = 5;
    const SUPERIOR_COMPLETO = 6;
    const POS_GRADUACAO_INCOMPLETO = 7;
    const POS_GRADUACAO_COMPLETO = 8;
    const MESTRADO_INCOMPLETO = 9;
    const MESTRADO_COMPLETO = 10;
    const DOUTORADO_INCOMPLETO = 11;
    const DOUTORADO_COMPLETO = 12;

    const LIST_ESCOLARIDADE = [
        self::FUNDAMENTAL_INCOMPLETO => 'Ensino Fundamental Incompleto',
        self::FUNDAMENTAL_COMPLETO => 'Ensino Fundamental Completo',
        self::MEDIO_INCOMPLETO => 'Ensino Médio Incompleto',
        self::MEDIO_COMPLETO => 'Ensino Médio Completo',
        self::SUPERIOR_INCOMPLETO => 'Ensino Superior Incompleto',
        self::SUPERIOR_COMPLETO => 'Ensino Superior Completo',
        self::POS_GRADUACAO_INCOMPLETO => 'Pós-Graduação Incompleto',
        self::POS_GRADUACAO_COMPLETO => 'Pós-Graduação Completo',
        self::MESTRADO_INCOMPLETO => 'Mestrado Incompleto',
        self::MESTRADO_COMPLETO => 'Mestrado Completo',
        self::DOUTORADO_INCOMPLETO => 'Doutorado Incompleto',
        self::DOUTORADO_COMPLETO => 'Doutorado Completo',    
    ];

    const LIST_NAMES = self::LIST_ESCOLARIDADE;

    /**
     * Returns key value
     *
     * @param int $key
     * @return string|null
     */
    public static function value($key)
    {
        return isset(self::LIST_NAMES[$key])?self::LIST_NAMES[$key]:null;
    } 

}
