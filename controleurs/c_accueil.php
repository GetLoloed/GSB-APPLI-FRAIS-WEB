<?php
/**
 * Gestion de l'accueil
 */
if ($estConnecte) {
    include 'vues/v_accueil.php';
} else {
    include 'vues/v_connexion.php';
}
