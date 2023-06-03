<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Student Name</label>
                            <input type="text" class="form-control" placeholder="1234 Main St">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Student ID</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <label>dropify</label>
                            <input type="file" class="dropify" data-allowed-file-extensions="pdf png psd" />
                        </div>
                        <div class="form-group">
                            <label>Class Group (select one):</label>
                            <select class="form-control" id="sel1">
                                <option>L01-B01</option>
                                <option>L01-B02</option>
                                <option>L01-B03</option>
                                <option>L01-B04</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success light">Save changes</button>
            </div>
        </div>
    </div>
</div>

