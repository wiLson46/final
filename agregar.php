<?php

try {
    
    //   $entityManager->persist($emp);
    //   $entityManager->flush();
    //   $respuesta['bd'] = "Se guardó exitosamente";

} catch (\Exception $e) {
    $respuesta['bd'] = "Error: " . $e->getMessage();
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($respuesta);
