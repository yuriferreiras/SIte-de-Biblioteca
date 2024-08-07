<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome_usuario = $_POST ["nome_usuario"];
            $email_usuario = $_POST ["email_usuario"];
            $fone_usuario = $_POST ["fone_usuario"];
            $cpf_usuario = $_POST ["cpf_usuario"];
            $dt_nasc_usuario = $_POST ["dt_nasc_usuario"];

            $sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario, cpf_usuario, dt_nasc_usuario) VALUES ('{$nome_usuario}', '{$email_usuario}', '{$fone_usuario}', '{$cpf_usuario}', '{$dt_nasc_usuario}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrou com sucesso');</script>";
                print "<script>location.href='?page=categoria-lista';</script>";
            }else{
                print "<script>alert('Não foi possível');</script>";
                print "<script>location.href='?page=categoria-listar';</script>";
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