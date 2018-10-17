<?php
    include_once LIB_DAO.DS.'DaoBanner.class.php';
        
    
    $passo = (isset($_GET['passo'])) ? $_GET['passo'] : 'listar';
    switch($passo){
        case 'detalhesEletiva' : { detalhesEletiva($db); break; }
        case 'quantidadeDeInscritos' : { quantidadeDeInscritos($db); break; }
        default : { listarEletivas($db); break; }
    }
    function detalhesEletiva($db){
        $daoBanner = new DaoBanner();
        return $daoBanner->getBannerPorId($id);
        
        response($consulta->fetchAll(PDO::FETCH_ASSOC));
    }
     function response($dados){
        header("Content-type: application/json");
        echo json_encode($dados);
        exit;
    }
}