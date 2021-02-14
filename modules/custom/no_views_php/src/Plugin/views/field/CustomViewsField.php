<?php

namespace Drupal\no_views_php\Plugin\views\field;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Random;
use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

class CustomViewsField {

  public $puntoVictoria = 3;
  public $puntoEmpate = 1;

  public function resultados($uid, $currentDisplay){
    $competicionId = 2;
    if($currentDisplay == "etapa"){
      $etapaId = " and nfe.field_etapa_target_id = 1"; 
    }else{
      $etapaId = "";
    }
    
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
    LEFT JOIN node__field_partido_competicion nfpc ON n.nid = nfpc.entity_id AND nfpc.deleted = '0'
    left join node__field_etapa nfe ON n.nid = nfe.entity_id AND nfe.deleted = '0'
    where n.type = 'partido' and (nfel.field_equipo_local_target_id = {$uid} or nfev.field_equipo_visitante_target_id = {$uid})
    and nfpc.field_partido_competicion_target_id = {$competicionId} {$etapaId}");
    return $query->fetchAll();
  }

  public function partidosGanados($uid, $currentDisplay){
    $results = $this->resultados($uid, $currentDisplay);
    $ganados = 0;
    foreach ($results as $key => $result) {
      $ganados = $ganados + $result->ganados;
    }
    return $ganados;
  }

  public function partidosEmpatados($uid, $currentDisplay){
    $results = $this->resultados($uid, $currentDisplay);
    $empatados = 0;
    foreach ($results as $key => $result) {
      $empatados = $empatados + $result->empatados;
    }
    return $empatados;
  }

  public function partidosPerdidos($uid, $currentDisplay){
    $results = $this->resultados($uid, $currentDisplay);
    $perdidos = 0;
    foreach ($results as $key => $result) {
      $perdidos = $perdidos + $result->perdidos;
    }
    return $perdidos;
  }

  public function partidosGolesAFavor($uid, $currentDisplay){
    $results = $this->resultados($uid, $currentDisplay);
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

  public function partidosGolesEnContra($uid, $currentDisplay){
    $results = $this->resultados($uid, $currentDisplay);
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

  public function partidosGolesDiferencia($uid, $currentDisplay){
    $golesAFavor = $this->partidosGolesAFavor($uid, $currentDisplay);
    $golesEnContra = $this->partidosGolesEnContra($uid, $currentDisplay);
    return $golesAFavor - $golesEnContra;
  }

  public function puntos($uid, $currentDisplay){
    $pGanados = $this->partidosGanados($uid, $currentDisplay);
    $pEmpatados = $this->partidosEmpatados($uid, $currentDisplay);
    return ($pGanados * $this->puntoVictoria) + ($pEmpatados * $this->puntoEmpate);
  }

  public function partidosJugados($uid, $currentDisplay){
    $results = $this->resultados($uid, $currentDisplay);
    $p_jugados = 0;
    foreach ($results as $key => $result) {
      if($result->eqlid == $uid){
        $p_jugados++;
      }else if($result->eqvid == $uid){
        $p_jugados++;
      }
    }
    return $p_jugados;
  }
}
