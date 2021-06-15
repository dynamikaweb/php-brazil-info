<?php 

namespace dynamikaweb\brazilinfo;

/**
 * Calendar
 * 
 * @var array LIST_MONTHS full name of Brazilian months
 * @var array LIST_MONTHS_SHORT short name of Brazilian months
 * @var array LIST_WEEKDAYS full name of Brazilian weekdays
 * @var array LIST_WEEKDAYS_SHORT short name of Brazilian weekdays
 * @var array LIST_WEEKDAYS_ABBREV abbreviations name of Brazilian weekdays
 */
class Calendar 
{
    const LIST_MONTHS = [
        'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
    ];

    const LIST_MONTHS_SHORT = [
        'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'
    ];

    const LIST_WEEKDAYS = [
        'Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado'
    ];

    const LIST_WEEKDAYS_SHORT = [
        'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'
    ];

    const LIST_WEEKDAYS_ABBREV = [
        'D', 'S', 'T', 'Q', 'Q', 'S', 'S'
    ];

}