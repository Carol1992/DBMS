<div>
    Go back to <a href="index.php">Portfolio</a>
</div>
<br>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        
        <tr class="warning">
            <td>Symbol</td>
            <td>Company</td>
            <td>Share</td>
            <td>Price</td>
            <td>Total</td>
            <td>Time</td>
        </tr>
        <?php foreach ($positions as $position): ?>
            <tr>
                <td><?= $position["symbol"] ?></td>
                <td><?= $position["name"] ?></td>
                <td><?= $position["shares"] ?></td>
                <td><?= $position["price"] ?></td>
                <td><?= $position["total"] ?></td>
                <td><?= $position["time"] ?></td>
            </tr>
        <?php endforeach ?>

    </table>
</div>
<br><br>
