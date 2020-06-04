<?php

/**
 * Gestion de l'accueil des comptables.
 */
if ($estConnecte) {
    include 'vues/v_accueilComptable.php';
} else {
    include 'vues/v_connexion.php';
}
