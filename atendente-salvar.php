<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome_atendente = $_POST ["nome_atendente"];
            $cpf_atendente = $_POST ["cpf_atendente"];
            $email_atendente = $_POST ["email_atendente"];
            $fone_atendente = $_POST ["fone_atendente"];
            

            $sql = "INSERT INTO atendente (nome_atendente, cpf_atendente, email_atendente, fone_atendente) VALUES ('{$nome_atendente}', '{$cpf_atendente}', '{$email_atendente}', '{$fone_atendente}')";
            
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