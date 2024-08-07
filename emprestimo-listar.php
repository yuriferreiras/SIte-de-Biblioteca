<h1>Listar Empréstimo</h1>
<?php 
    $sql = "SELECT * FROM emprestimo";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>Livro</th>";
        print "<th>Usuário</th>";
        print "<th>Atendente</th>";
        print "<th>Data de empréstimo</th>";
        print "<th>Data de devolução</th>";
        print "</tr>";

        while ($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->livro_id_livro."</td>";
            print "<td>".$row->usuario_id_usuario."</td>";
            print "<td>".$row->atendente_id_atendente."</td>";
            print "<td>".$row->data_emprestimo."</td>";
            print "<td>".$row->data_devolucao."</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "Não encontrou resultado";
    }
 ?>