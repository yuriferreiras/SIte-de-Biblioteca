<h1>Listar Usuário</h1>
<?php 
    $sql = "SELECT * FROM usuario";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    if($qtd > 0 ){
        print "<p> Encontrou <b>$qtd</b> resultado(s) </p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome do Usuário</th>";
        print "<th>Email do Usuário</th>";
        print "<th>Telefone do Usuário</th>";
        print "<th>CPF do Usuário</th>";
        print "<th>Data de Nascimento do Usuário</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_usuario."</td>";
            print "<td>".$row->nome_usuario."</td>";
            print "<td>".$row->email_usuario."</td>";
            print "<td>".$row->fone_usuario."</td>";
            print "<td>".$row->cpf_usuario."</td>";
            print "<td>".$row->dt_nasc_usuario."</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "nenhum resultado encontrado";
    }
?>