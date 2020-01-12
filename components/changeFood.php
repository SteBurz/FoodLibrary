<!-- Modal -->
<div class="modal fade" id="changeFood" tabindex="-1" role="dialog" aria-labelledby="changeFood" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Einstellungen von <span id="changeFood_foodName"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="btn-group" role="group" aria-label="Food settings">
                    <button type="button"
                            class="btn btn-light"
                            id="changeFood_button">Ändern
                    </button>
                    <button type="button"
                            class="btn btn-light"
                            id="deleteFood_button">Löschen
                    </button>
                </div>
                <form id="changeFood_form" style="display: none">
                    <p>Lebensmittel abändern</p>
                    <div class="form-group">
                        <label for="changeFood_newFoodName">Name</label>
                        <input type="text" class="form-control" id="changeFood_newFoodName" value=""
                               placeholder="neuer Name">
                    </div>
                    <div class="form-group">
                        <label for="changeFood_newAmount">Menge</label>
                        <input type="text" class="form-control" id="changeFood_newAmount" value="" placeholder="Menge">
                        <small class="form-text text-muted">Ohne Einheit angeben.</small>
                    </div>
                    <div class="form-group">
                        <label for="changeFood_newAmountType">Mengeneinheit</label>
                        <select class="form-control" id="changeFood_newAmountType">
                            <option>g</option>
                            <option>kg</option>
                            <option>ml</option>
                            <option>l</option>
                            <option>Stk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="changeFood_newBestBefore">MHD</label>
                        <input type="text" class="form-control" id="changeFood_newBestBefore" value=""
                               placeholder="Menge">
                        <small class="form-text text-muted">Bitte im Format: YYYY-MM-DD eingeben.</small>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="changeFood_submit">Ändern</button>
                    </div>
                </form>
                <form id="deleteFood_form" style="display: none">
                    <p>Willst du das Lebensmittel wirklich löschen?</p>
                    <input type="hidden" value="" name="foodName" id="deleteFood_name">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="deleteFood_submit">Löschen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>