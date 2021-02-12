<?php

/**
 * @file
 * Contains no_views_php\no_views_php.views.inc..
 * Provide a custom views field data that isn't tied to any other module. */


/**
* Implements hook_views_data().
*/
function no_views_php_views_data() {

    $data['views']['table']['group'] = t('Custom Global');
    $data['views']['table']['join'] = [
      // #global is a special flag which allows a table to appear all the time.
      '#global' => [],
    ];

    $data['views']['pg_views_field'] = [
        'title' => t('League PG'),
        'help' => t('Campo de partidos ganados'),
        'field' => [
            'id' => 'pg_views_field',
        ],
    ];
    $data['views']['pe_views_field'] = [
        'title' => t('League PE'),
        'help' => t('Campo de partidos empatados'),
        'field' => [
            'id' => 'pe_views_field',
        ],
    ];
    $data['views']['pp_views_field'] = [
        'title' => t('League PP'),
        'help' => t('Campo de partidos perdidos'),
        'field' => [
            'id' => 'pp_views_field',
        ],
    ];
    $data['views']['gf_views_field'] = [
        'title' => t('League GF'),
        'help' => t('Campo de goles a favor'),
        'field' => [
            'id' => 'gf_views_field',
        ],
    ];
    $data['views']['gc_views_field'] = [
        'title' => t('League GC'),
        'help' => t('Campo de goles en contra'),
        'field' => [
            'id' => 'gc_views_field',
        ],
    ];
    $data['views']['dg_views_field'] = [
        'title' => t('League DG'),
        'help' => t('Campo de diferencia de goles'),
        'field' => [
            'id' => 'dg_views_field',
        ],
    ];
    $data['views']['pts_views_field'] = [
        'title' => t('League Ptos'),
        'help' => t('Campo de puntos por partido'),
        'field' => [
            'id' => 'pts_views_field',
        ],
    ];
    return $data;
}
