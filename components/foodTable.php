
<div class="table-responsive">
    <table class="table table-striped table-sm" id="foodTable">
        <thead>
        <tr>
            <th scope="col">Lebensmittel</th>
            <th scope="col">Menge</th>
            <th scope="col">MHD</th>
            <th scope="col" style="width: 50px;"></th>
        </tr>
        </thead>
        <tbody>
        <?php $data->getExistingFood(); ?>
        </tbody>
    </table>
</div>
