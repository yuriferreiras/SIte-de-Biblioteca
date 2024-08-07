<h1>Listar Categoria</h1>
<?php 
    $sql = "SELECT * FROM categoria";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    
    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome da Categoria</th>";
        print "</tr>";
        
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_categoria."</td>";
            print "<td>".$row->nome_categoria."</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "nenhum resultado encontrado";
    }
?>