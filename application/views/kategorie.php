
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
</head>
<body>
    <div class="jumbotron"><h1 class="my-h1">Kategorie</h1></div>
    <hr>
    <div class="my-container">

<div class="table-striped" style="margin-left: 200px; margin-right: 200px">
    <table class="table table-bordered">
        <tr class="thead-dark">
            
            <th>Číslo kategorie</th>
            <th>Název kategorie</th>
            
            
        </tr>
        <?php
        if($get_kategorie->num_rows() > 0)
        {
            foreach($get_kategorie->result() as $row)
            {
            ?>
        <tr>
            <td><?php echo $row->id_kategorie ?></td>
            <td><?php echo $row->kategorie ?></td>
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

</body>