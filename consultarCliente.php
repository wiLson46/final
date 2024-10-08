<?php

try {
    $repo_perros = $entityManager->getRepository('Perro');
    $perros = $repo_perros->findAll();

    $çliente = [];
    foreach ($perros as $pe) {
        $cliente[] = [
            'tipo' => 'id',
            'datos' => (string) $pe,
            'id' => $pe->getId(),
        ];
    }
    
    $respuesta['error'] = false;
    $respuesta['empleados'] = $cliente;
} catch (Exception $e) {
    $respuesta['error'] = true;
    $respuesta['detalle_error'] = $e->getMessage();
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($respuesta);

