<?php

function adicionar_livro(array &$listaLivros) {
    $livro = [
        "Título" => $titulo,
        "Autor" => $autor,
        "Status" => "Disponível"
    ];

    $listaLivros[] = $livro;
}

function empretar_livros(array &$listaLivros) {
    foreach ($listaLivros as $livro) {
        if ($livro["Título"] == $titulo_mudar) {
            if ($livro["Status"] == "Disponível") {
                $livro["Status"] = "Indisponivel";
            }
        } else {
            echo "Livro não encontrado";
        }
    }
}

function delvolver_livro(array &$listaLivros) {
    foreach ($listaLivros as $livro) {
        if ($livro["Título"] == $titulo_mudar2) {
            if ($livro["Status"] == "Indisponivel") {
                $livro["Status"] = "Disponível";
            }
        } else {
            echo "Livro não encontrado";
        }
    }

}