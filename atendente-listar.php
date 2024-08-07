<h1>Listar Atendente</h1>
<?php 
    $sql = "SELECT * FROM atendente";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    if($qtd > 0 ){
        print "<p> Encontrou <b>$qtd</b> resultado(s) </p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome da Categoria</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_atendente."</td>";
            print "<td>".$row->nome_atendente."</td>";
            print "<td>".$row->cpf_atendente."</td>";
            print "<td>".$row->email_atendente."</td>";
            print "<td>".$row->fone_atendente."</td>";
            print "<td>";
            print "</td>";
        }
        print "</table>";
    }else{
        print "nenhum resultado encontrado";
    }
?>