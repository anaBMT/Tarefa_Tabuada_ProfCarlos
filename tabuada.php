<html>
<body>
<?php 
//obter os dados, calcular e exibir
$numero = (int) $_POST ['numero'];
?>  <!--fechamos o php e codamos html-->
<table border="1">
        
<table>
    
    <thead>
        <tr>
            <th>Operação</th>
            <th>Resultado</th>
        </tr>
    </thead>
    <tbody>
    <?php //reabre o php
/*    for ($i = 1; $i <= 10; $i++)
    {
        $r = $numero * $i;
        echo "<tr>";
        echo "<td> $numero X $i =</td>";
        echo "<td>$r </td>";
        echo "</tr>";
    }*/

    $contador = 1;
    while($contador <= 10) {
        $r = $numero * $contador;
        echo "<tr>";
        echo "<td> $numero X $contador =</td>";
        echo "<td>$r </td>";
        echo "</tr>";
        $contador+=1;
    }
    ?>
        </tbody>
        <a href="index.html">Voltar</a>
</table>
</body>
</html>