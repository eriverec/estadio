<?php

namespace Drupal\no_views_php\Plugin\views\field;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Random;
use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

class CustomViewsField {

  public $puntoVictoria = 3;
  public $puntoEmpate = 1;

  public function resultados($uid){
    $query = \Drupal::database()->query("SELECT n.nid, n.title, nfeldata.nid eqlid, nfevdata.nid eqvid, 
       nfeldata.title eqlocal, nfevdata.title eqvit,
       nfrl.field_resultado_local_value rl, nfrv.field_resultado_visitante_value rv,
       (CASE
            WHEN nfeldata.nid = {$uid} THEN
                (CASE WHEN nfrl.field_resultado_local_value > nfrv.field_resultado_visitante_value THEN 1 ELSE 0 END)
            WHEN nfevdata.nid = {$uid} THEN
                (CASE WHEN nfrv.field_resultado_visitante_value > nfrl.field_resultado_local_value THEN 1 ELSE 0 END)
            ELSE 0
        END) ganados,
       (CASE
            WHEN nfeldata.nid = {$uid} THEN
                (CASE WHEN nfrl.field_resultado_local_value = nfrv.field_resultado_visitante_value THEN 1 ELSE 0 END)
            WHEN nfevdata.nid = {$uid} THEN
                (CASE WHEN nfrv.field_resultado_visitante_value = nfrl.field_resultado_local_value THEN 1 ELSE 0 END)
            ELSE 0
        END) empatados,
       (CASE
            WHEN nfeldata.nid = {$uid} THEN
                (CASE WHEN nfrl.field_resultado_local_value < nfrv.field_resultado_visitante_value THEN 1 ELSE 0 END)
            WHEN nfevdata.nid = {$uid} THEN
                (CASE WHEN nfrv.field_resultado_visitante_value < nfrl.field_resultado_local_value THEN 1 ELSE 0 END)
            ELSE 0
        END) perdidos
    FROM node_field_data n
    left join node__field_equipo_local nfel on n.nid = nfel.entity_id
    left join node_field_data nfeldata on nfel.field_equipo_local_target_id  = nfeldata.nid
    left join node__field_equipo_visitante nfev on n.nid = nfev.entity_id
    left join node_field_data nfevdata on nfev.field_equipo_visitante_target_id  = nfevdata.nid
    left join node__field_resultado_local nfrl on n.nid = nfrl.entity_id
    left join node__field_resultado_visitante nfrv on n.nid = nfrv.entity_id
    where n.type = 'partido' and (nfel.field_equipo_local_target_id = {$uid} or nfev.field_equipo_visitante_target_id = {$uid})");
    return $query->fetchAll();
  }

  public function partidosGanados($uid){
    $results = $this->resultados($uid);
    $ganados = 0;
    foreach ($results as $key => $result) {
      $ganados = $ganados + $result->ganados;
    }
    return $ganados;
  }

  public function partidosEmpatados($uid){
    $results = $this->resultados($uid);
    $empatados = 0;
    foreach ($results as $key => $result) {
      $empatados = $empatados + $result->empatados;
    }
    return $empatados;
  }

  public function partidosPerdidos($uid){
    $results = $this->resultados($uid);
    $perdidos = 0;
    foreach ($results as $key => $result) {
      $perdidos = $perdidos + $result->perdidos;
    }
    return $perdidos;
  }

  public function partidosGolesAFavor($uid){
    $results = $this->resultados($uid);
    $gf = 0;
    foreach ($results as $key => $result) {
      if($result->eqlid == $uid){
        $gf = $gf + $result->rl;
      }else if($result->eqvid == $uid){
        $gf = $gf + $result->rv;
      }
    }
    return $gf;
  }

  public function partidosGolesEnContra($uid){
    $results = $this->resultados($uid);
    $gf = 0;
    foreach ($results as $key => $result) {
      if($result->eqlid == $uid){
        $gf = $gf + $result->rv;
      }else if($result->eqvid == $uid){
        $gf = $gf + $result->rl;
      }
    }
    return $gf;
  }

  public function partidosGolesDiferencia($uid){
    $golesAFavor = $this->partidosGolesAFavor($uid);
    $golesEnContra = $this->partidosGolesEnContra($uid);
    return $golesAFavor - $golesEnContra;
  }

  public function puntos($uid){
    $pGanados = $this->partidosGanados($uid);
    $pEmpatados = $this->partidosEmpatados($uid);
    return ($pGanados * $this->puntoVictoria) + ($pEmpatados * $this->puntoEmpate);
  }
}
