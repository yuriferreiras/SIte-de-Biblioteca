<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $titulo_livro = $_POST ["titulo_livro"];
            $autor_livro = $_POST ["autor_livro"];
            $editora_livro = $_POST ["editora_livro"];
            $edicao_livro = $_POST ["edicao_livro"];
            $localidade_livro = $_POST ["localidade_livro"];
            $ano_livro = $_POST ["ano_livro"];
            
            $sql = "INSERT INTO livro (categoria_id_categoria, titulo_livro, autor_livro, editora_livro, edicao_livro, localidade_livro, ano_livro) 
            VALUES(
                '".$_POST["categoria_id_categoria"]."', 
                '".$_POST["titulo_livro"]."', 
                '".$_POST["autor_livro"]."', 
                '".$_POST["editora_livro"]."', 
                '".$_POST["edicao_livro"]."', 
                '".$_POST["localidade_livro"]."', 
                '".$_POST["ano_livro"]."'
            )";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrou com sucesso');</script>";
                print "<script>location.href='?page=livro-lista';</script>";
            }else{
                print "<script>alert('Não foi possível');</script>";
                print "<script>location.href='?page=livro-listar';</script>";
            }
            break;

        case 'editar':
            //code
            break;
        
        case 'excluir':
            //code
            break;

    }
?>