<?php 

namespace dynamikaweb\brazilinfo;

/**
 * Occupation
 * 
 * @var array LIST_NAMES full name of Brazilian Occupation
 */
class Occupation 
{

    const LIST_NAMES = [
        1 => 'Empregado - Setor Privado',
        2 => 'Empresário/Empreendedor',
        3 => 'Estudante',
        4 => 'Jornada',
        5 => 'Pesquisador',
        6 => 'Professor',
        7 => 'Profis. Liberal/Autônomo',
        8 => 'Servidor Público Municipal',
        9 => 'Servidor Público Estadual',
        10 => 'Servidor Público Federal',
        11 => 'Não Informado',    
        12 => 'Outro'
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
