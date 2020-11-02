
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/my_css.css">
    
</head>

<div class="jumbotron"><h1 class="my-h1">Seznam knih</h1></div>
<hr>
<div class="my-container">
<div class="table-striped" style="">
    <table class="table table-bordered">
        
        <tr class="thead-dark">
            <th>Název</th>
            <th>Autor</th>
            <th>Anotace</th>
            <th>Kategorie</th>
        </tr>
        <?php
        if($get_knihy->num_rows() > 0)
        {
            foreach($get_knihy->result() as $row)
            {
            ?>
        <tr>
            <td><?php echo $row->nazev_knihy ?></td>
            <td><?php echo $row->autor_knihy ?></td>
            <td><?php echo $row->anotace ?></td>
            <td><?php echo $row->kategorie_id_kategorie ?></td>
        </tr>
            <?php
            }
        }
        else
        {
        ?>
        <tr>
            <td>Chybí data</td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
    </div>