<div>
    <h3>User: <a href="chpwd.php"><?= $username ?></a></h3>
    <h3>Cash Balance: <?= $cashBalance ?></h3>
</div>
<br>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        
        <tr class="info">
            <td>Symbol</td>
            <td>Company</td>
            <td>Share</td>
            <td>Price</td>
            <td>Total</td>
        </tr>
        <?php foreach ($positions as $position): ?>
            <tr>
                <td><?= $position["symbol"] ?></td>
                <td><?= $position["name"] ?></td>
                <td><?= $position["shares"] ?></td>
                <td><?= $position["price"] ?></td>
                <td><?= $position["total"] ?></td>
            </tr>
        <?php endforeach ?>

    </table>
</div>
<br><br>
