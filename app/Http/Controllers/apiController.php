<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use illuminate\App\Models\Modelo;


class apiController extends Controller
{
    Public function Api()
    {
        $cliente = new \GuzzleHttp\Client(); 
        $response = $cliente->request('GET', 'https://dog.ceo/api/breeds/list/all');
        $datos = json_decode($response->getBody()->getContents(), true);

        $los_perros =[]; 
        array($los_perros, $datos['message']); 

        return view('Templates.api', ['datos' => $datos]);

        foreach ($datos['message'] as $key => $value) {
            $perro = new \App\Models\Modelo();
            $perro->nombre = $key;
            $perro->save();
        }

    }
}
