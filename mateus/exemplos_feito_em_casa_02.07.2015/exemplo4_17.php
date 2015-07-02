<?php
    ...
    if (empty($nome) OR empty($email) OR empty($cpf))
    {
        echo "Você deve preencher os campos nome, email e CPF!";
        exit;
    }
    ...