<form action="quote.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="symbol" placeholder="Stock Symbol" type="text"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-search"></span>
                Quote
            </button>
        </div>
    </fieldset>
</form>
<br>
 <table class="table table-bordered">
  <tr>
    <th>Symbol</th>
    <th>Company</th>
    <th>Price</th>
  </tr>
  <tr>
    <td><?= $symbol ?></td>
    <td><?= $name ?></td>
    <td><?= $price ?></td>
  </tr>
</table>
<br><br>


