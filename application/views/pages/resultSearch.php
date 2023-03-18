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
                <th scope="col">Intitule</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i=0;$i<count($list);$i++)
                {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $list[$i]['num'];?></th>
                        <td><?php echo $list[$i]['intitule'];?></td>
                        <td>
                            <form action="<?php echo base_url('Pages/updatePCG');?>" method="post">
                                <input type="hidden" name="id_pcg" value="<?php echo $list[$i]['id_pcg'];?>">
                                <input type="hidden" name="num" value="<?php echo $list[$i]['num'];?>">
                                <input type="hidden" name="intitule" value="<?php echo $list[$i]['intitule'];?>">
                                <button type="submit" class="btn btn-success" style="color:white"><i class="bi bi-pencil-square"></i></button>
                            </form>
                        </td>
                        <td>
                            <form action="<?php echo base_url('InsertForm/deletePCG');?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $list[$i]['id_pcg'];?>">
                                <button type="submit" class="btn btn-danger" style="color:white"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                   <?php
                }
            ?>
        </tbody>
    </table>
    <hr>
</body>
</div>
</div>
</section>
</main>
<br>