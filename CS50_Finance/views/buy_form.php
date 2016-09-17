   <form action="buy.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="symbol" placeholder="Stock's Symbol" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="shares" placeholder="Shares I want to buy" type="text"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-duplicate"></span>
                BUY
            </button>
        </div>
    </fieldset>
</form>
<div>
    or go back to <a href="index.php">Portfolio</a>
</div>
