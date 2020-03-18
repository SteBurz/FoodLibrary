<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFood">
    Add Food
</button>

<!-- Modal -->
<div class="modal fade" id="addFood" tabindex="-1" role="dialog" aria-labelledby="addFood" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add food</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addNewFood_form">
                    <div class="form-group">
                        <label for="foodName">Name</label>
                        <input type="text" class="form-control" id="foodName" aria-describedby="LebensmittelName" placeholder="Name" required>
                        <small id="LebensmittelName" class="form-text text-muted">Name of your food.</small>
                        <div class="invalid-feedback">
                            Please provide a name.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control" id="foodAmount" placeholder="Amount" required>
                        <small id="LebensmittelName" class="form-text text-muted">Without unit of measure.</small>
                    </div>
                    <div class="form-group">
                        <label for="foodAmountType">Unit of measure</label>
                        <select class="form-control" id="foodAmountType" required>
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
                        <label for="amount">Best before</label>
                        <input type="text" class="form-control" id="foodBestBefore" placeholder="Best before" required>
                        <small id="LebensmittelMHD" class="form-text text-muted">Format: YYYY-MM-DD</small>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="addNewFood_submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>