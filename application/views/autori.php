
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
</head>

<div class="jumbotron"><h1 class="my-h1">Seznam autorů</h1></div>
<hr>
<div class="my-container">
<div class="table-striped" style="margin-left: 400px; margin-right: 400px">
    <table class="table table-bordered">
        <tr class="thead-dark">
            <th>Autoři</th>
            
        </tr>
        <?php
        if($get_autori->num_rows() > 0)
        {
            foreach($get_autori->result() as $row)
            {
            ?>
        <tr>
            <td><button class="btn"><?php echo $row->autor_knihy; ?></button></td>
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