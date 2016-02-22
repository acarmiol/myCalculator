<?php

class CalculadoraService {

    // Lista de posibles operaciones
    const SUMA = 'suma';
    const RESTA = 'resta';
    const MULTIPLICACION = 'multiplicacion';
   
    const DIVISION = 'division';

    /**
     * Toma el $primerValor y lo suma al $segundoValor;
     *
     * @param integer   $primerValor
     * @param integer   $segundoValor
     * @return integer
     */
    public function sumar($primerValor, $segundoValor) {

        // Si $primerValor y $segundoValor estan definidos
        if (isset($primerValor, $segundoValor)) {
            return $primerValor + $segundoValor;
        }

        return null;
    }
    
   
    
    public function restar($primerValor, $segundoValor) {

        // Si $primerValor y $segundoValor estan definidos
        if (isset($primerValor, $segundoValor)) {
            return $primerValor - $segundoValor;
        }

        return null;
    }
    
    public function multiplicar($primerValor, $segundoValor) {

        // Si $primerValor y $segundoValor estan definidos
        if (isset($primerValor, $segundoValor)) {
            return $primerValor * $segundoValor;
        }

        return null;
    }
    
    public function dividir($primerValor, $segundoValor) {

        // Si $primerValor y $segundoValor estan definidos
        if (isset($primerValor, $segundoValor)) {
            return $primerValor / $segundoValor;
        }

        return null;
    }
    
}
