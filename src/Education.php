<?php 

namespace dynamikaweb\brazilinfo;

/**
 * Education
 * 
 * @var array LIST_NAMES full name of Brazilian Education
 */
class Education 
{

    const LIST_NAMES = [
        1 => 'Ensino Fundamental Incompleto',
        2 => 'Ensino Fundamental Completo',
        3 => 'Ensino Médio Incompleto',
        4 => 'Ensino Médio Completo',
        5 => 'Ensino Superior Incompleto',
        6 => 'Ensino Superior Completo',
        7 => 'Pós-Graduação Incompleto',
        8 => 'Pós-Graduação Completo',
        9 => 'Mestrado Incompleto',
        10 => 'Mestrado Completo',
        11 => 'Doutorado Incompleto',
        12 => 'Doutorado Completo',    
    ];

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