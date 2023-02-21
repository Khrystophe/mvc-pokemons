<?php

namespace Src\Controllers;

use Src\Models\Pokemon;
use Src\Models\Type;

class MainController extends Controller
{
    function home()
    {
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAll();
        $this->show('pokemon-list', [
            'pokemonsList' => $pokemons,
        ]);
    }

    function type()
    {
        $typeModel = new Type();
        $types = $typeModel->findAll();
        $this->show('type', [
            'typesList' => $types,
        ]);
    }

    function typeDetail($params)
    {
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAllByType($params['id']);
        $this->show('pokemon-list', [
            'pokemonsList' => $pokemons,
        ]);
    }

    function detail($params)
    {
        $pokemonModel = new Pokemon();
        $pokemon = $pokemonModel->findById($params['id']);

        $typeModel = new Type();
        $pokemonTypes = $typeModel->findByPokemon($pokemon->getNumber());

        $this->show('detail', [
            'pokemon' => $pokemon,
            'pokemonTypes' => $pokemonTypes,
        ]);
    }
}
