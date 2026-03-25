<?php

class ControleService {

    public static function refactoGroupControls($controles) {
        
        $controles_groupes = array();

            if($controles) {
                foreach ($controles as $controle) {
                    $id_controle = $controle->id_controle;
                    if (!isset($controles_groupes[$id_controle])) {
                        $controles_groupes[$id_controle] = array(
                            'date_controle' => $controle->date_controle,
                            'nom_membre_responsable' => $controle->nom_membre_responsable,
                            'nom_client' => $controle->nom_client,
                            'adresse_client' => $controle->adresse_client,
                            'animaux' => array()
                        );
                    }

                    $controles_groupes[$id_controle]['animaux'][] = $controle->nom_animal;
                }
            }

            return $controles_groupes;
        }
}