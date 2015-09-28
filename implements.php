<?php

interface ControleVelocidade {

    function ligar();

    function desligar();

    function freiar();

    function acelerar();

    function trocarMarcha();
}

interface MultimidiaVeiculo {

    function ligarCDPlayer();

    function desligarCDPlayer();

    function trocarRadio();
}

interface ControleEstacionamento {

    function cameraRe();
    
    function autoAjusteEspelhos();
}
