<main>
    <br>
	<section class="section">
        <br>
		<div class="container">
            <br>
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <br>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Numero de compte</th>
                <th scope="col">Debit</th>
                <th scope="col">Credit</th>
                <th scope="col">Date</th>
            </tr>
        </thead>

        <body>
            <?php
            for ($i = 0; $i < count($list); $i++) {
            ?>
                <tr>
                    <th scope="row"><?php echo $list[$i]['num_compte']; ?></th>
                    <td><?php echo $list[$i]['debit']; ?></td>
                    <td><?php echo $list[$i]['credit']; ?></td>
                    <td><?php echo $list[$i]['daty']; ?></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
    </table>

    <center>

        <form action="<?php echo base_url('PlanComptable/Jexporter'); ?>" method="POST">
            <input type="text" name="filename" placeholder="nom du fichier">
            <br>
            <button type="submit" class="btn btn-success">Exporter</button>
        </form>

        <center>

            <hr>
</body>
</div>
</div>
</section>
</main>
<br>