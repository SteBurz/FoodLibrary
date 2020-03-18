<div class="table-responsive">
    <table class="table table-striped table-sm" id="foodTable">
        <thead>
        <tr>
            <th scope="col">Food</th>
            <th scope="col">Amount</th>
            <th scope="col">Best before</th>
            <th scope="col" style="width: 50px;"></th>
        </tr>
        </thead>
        <tbody>
        <?php $data->getExistingFood(); ?>
        </tbody>
    </table>
</div>
