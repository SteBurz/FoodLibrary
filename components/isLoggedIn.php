<div class="row heading align-self-center">
    <h1>Food Library</h1>
</div>
<div class="row intro">
    <p>
        In der Tabelle werden deine Lebensmittel angezeigt.
        Mit "Lebensmittel hinzufügen" kannst du neue Lebensmittel in die Tabelle eintragen.
        Benutze das Zahnrad um ein Lebensmittel zu löschen oder zuverändern.
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
            <span class="danger"></span> MHD überschritten.
        </li>
        <li>
            <span class="warning"></span> Lebensmittel erreicht in 7 Tagen das MHD.
        </li>
        <li>
            <span class="good"></span> MHD ist mehr als 7 Tage entfernt.
        </li>
    </ul>
</div>