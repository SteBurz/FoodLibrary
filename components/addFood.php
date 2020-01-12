<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFood">
    Lebensmittel hinzufügen
</button>

<!-- Modal -->
<div class="modal fade" id="addFood" tabindex="-1" role="dialog" aria-labelledby="addFood" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lebensmittel hinzufügen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addNewFood_form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="foodName" aria-describedby="LebensmittelName" placeholder="Name eingeben" required>
                        <small id="LebensmittelName" class="form-text text-muted">Der Name des Lebensmittels.</small>
                        <div class="invalid-feedback">
                            Bitte ein Lebensmittel eingeben.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount">Menge</label>
                        <input type="text" class="form-control" id="foodAmount" placeholder="Menge" required>
                        <small id="LebensmittelName" class="form-text text-muted">Ohne Einheit angeben.</small>
                    </div>
                    <div class="form-group">
                        <label for="foodAmountType">Mengeneinheit</label>
                        <select class="form-control" id="foodAmountType" required>
                            <option>g</option>
                            <option>kg</option>
                            <option>ml</option>
                            <option>l</option>
                            <option>Stk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="amount">MHD</label>
                        <input type="text" class="form-control" id="foodBestBefore" placeholder="Mindestens Haltbar bis" required>
                        <small id="LebensmittelMHD" class="form-text text-muted">Bitte im Format: YYYY-MM-DD eingeben.</small>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="addNewFood_submit">Hinzufügen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>