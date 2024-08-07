<h1>Listar Livro</h1>
<?php 
    $sql = "SELECT * FROM livro";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    
    if($qtd > 0 ){
        print "<p> Encontrou <b>$qtd</b> resultado(s) </p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Categoria</th>";        
        print "<th>Titulo</th>";        
        print "<th>Autor</th>";        
        print "<th>Editora</th>";        
        print "<th>Edição</th>";        
        print "<th>Localidade</th>";
        print "<th>Ano</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_livro."</td>";
            print "<td>".$row->categoria_id_categoria."</td>";
            print "<td>".$row->titulo_livro."</td>";
            print "<td>".$row->autor_livro."</td>";
            print "<td>".$row->editora_livro."</td>";            
            print "<td>".$row->edicao_livro."</td>";            
            print "<td>".$row->localidade_livro."</td>";            
            print "<td>".$row->ano_livro."</td>";
            print "<td>";
            print "</td>";
        }
        print "</table>";
    }else{
        print "nenhum resultado encontrado";
    }
?>