<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <form action="{{ route('inspector.do.sync') }}" method="POST" id="formSyncInspector">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Synchronization users from server (LDAP)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf                  
                <div class="mb-3">
                    <label class="form-label">Host/IP</label>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-sm rounded-0" placeholder="Host/IP address" value="10.200.170.2"
                                name="host" readonly>
                        </div>                       
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-success rounded-0"><i class='fas fa-sync-alt'></i> Start Sync</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
