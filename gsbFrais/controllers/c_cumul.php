<?php
include 'views/v_sommaire_comptable.php';

$pdo = PdoGsb::getPdoGsb();

$action = $_REQUEST['action'] ?? 'afficherFormulaire';

switch ($action) {
    case 'afficherFormulaire':

        include 'views/v_cumul.php';
        break;

    case 'afficherCumul':

        $moisAnnee = $_REQUEST['moisAnnee'];
        
        $KM  = $pdo->getCumulFrais($moisAnnee, 'KM');
        $ETP = $pdo->getCumulFrais($moisAnnee, 'ETP');
        $REP = $pdo->getCumulFrais($moisAnnee, 'REP');
        $NUI = $pdo->getCumulFrais($moisAnnee, 'NUI');
        $HAB = $pdo->getCumulFrais($moisAnnee, 'HAB');

        
        include("views/v_affichage_cumul.php"); 
        break;
        
} 
?>

