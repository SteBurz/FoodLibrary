
<div class="row">
    <a id="logout" class="logout">Logout</a>
</div>
<div class="foodTable-container">
    <div class="row heading align-self-center">
        <h1>Hamster burrow</h1>
    </div>
    <div class="row intro">
        <p>
            This table shows all your food you hamstered.
            You can "add food" or you can use the cog to change or delete an existing entry.
        </p>
    </div>
    <div class="row addFood">
        <?php include 'components/addFood.php' ?>
    </div>
    <div class="row">
        <?php include 'components/foodTable.php' ?>
    </div>
    <div class="row">
        <?php include 'components/changeFood.php' ?>
    </div>
    <div class="row legende font-weight-lighter text-muted">
        <ul>
            <li>
                <span class="danger"></span> "Best before" date is due.
            </li>
            <li>
                <span class="warning"></span> Your food will reach the "best before" date in 7 days.
            </li>
            <li>
                <span class="good"></span> "Best before" date is more than 7 days away.
            </li>
        </ul>
    </div>
</div>