<?php 

namespace dynamikaweb\brazilinfo;

/**
 * Education
 * 
 * @var array LIST_NAMES full name of Brazilian education
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

}