<!-- Modal -->
<div class="modal fade" id="changeFood" tabindex="-1" role="dialog" aria-labelledby="changeFood" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Settings of <span id="changeFood_foodName"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="btn-group" role="group" aria-label="Food settings">
                    <button type="button"
                            class="btn btn-light"
                            id="changeFood_button">Change
                    </button>
                    <button type="button"
                            class="btn btn-light"
                            id="deleteFood_button">Delete
                    </button>
                </div>
                <form id="changeFood_form" style="display: none">
                    <p>change food</p>
                    <div class="form-group">
                        <label for="changeFood_newFoodName">Name</label>
                        <input type="text" class="form-control" id="changeFood_newFoodName" value=""
                               placeholder="New name">
                    </div>
                    <div class="form-group">
                        <label for="changeFood_newAmount">Amount</label>
                        <input type="text" class="form-control" id="changeFood_newAmount" value="" placeholder="Amount">
                        <small class="form-text text-muted">Without the unit of measure.</small>
                    </div>
                    <div class="form-group">
                        <label for="changeFood_newAmountType">Unit of measure</label>
                        <select class="form-control" id="changeFood_newAmountType">
                            <option>g</option>
                            <option>kg</option>
                            <option>lbs</option>
                            <option>ml</option>
                            <option>l</option>
                            <option>Stk</option>
                            <option>pieces</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="changeFood_newBestBefore">Best before</label>
                        <input type="text" class="form-control" id="changeFood_newBestBefore" value=""
                               placeholder="YYYY-MM-DD">
                        <small class="form-text text-muted">Format: YYYY-MM-DD</small>
                    </div>
                    <input type="hidden" id="changeFood_currFoodName" value=""/>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="changeFood_submit">Change</button>
                    </div>
                </form>
                <form id="deleteFood_form" style="display: none">
                    <p>Do you really want to delete the entry?</p>
                    <input type="hidden" value="" name="foodName" id="deleteFood_name">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="deleteFood_submit">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>