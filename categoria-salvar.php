<?php 
switch ($_REQUEST['acao']) { 
    case 'cadastrar':
        $sql = "INSERT INTO categoria (nome_categoria) VALUES ('".$_POST['nome_categoria']."')";
        
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