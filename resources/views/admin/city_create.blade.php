<div class="site-action" data-target="#exampleFormModal" data-toggle="modal">
    <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating waves-effect waves-classic">
        <i class="front-icon md-plus animation-scale-up" aria-hidden="true"></i>
        <i class="back-icon md-close animation-scale-up" aria-hidden="true"></i>
    </button>
    <div class="site-action-buttons">
        <button type="button" data-action="trash"
            class="btn-raised btn btn-success btn-floating animation-slide-bottom waves-effect waves-classic">
            <i class="icon md-delete" aria-hidden="true"></i>
        </button>
        <button type="button" data-action="folder"
            class="btn-raised btn btn-success btn-floating animation-slide-bottom waves-effect waves-classic">
            <i class="icon md-folder" aria-hidden="true"></i>
        </button>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel" role="dialog"
    tabindex="-1">
    <div class="modal-dialog modal-simple">
        <div class="modal-content">
            <form action="{{ url('admin/city') }}" method="POST" role="form">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Create New City</h4>
                </div>
                <div class="modal-body">
                   
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="City Name">
                    </div>

                    <div class="form-group">
                        <label for="parent">Parent</label>
                        <select class="form-control" name="state_id" id="parent">
                            @foreach ($states as $list)                          
                            <option value="{{ $list->id }}">{{ $list->name }}</option>
                            @endforeach

                        </select>
                    </div>

                </div>
                <div class="modal-footer text-left">
                    <button type="submit" class="btn btn-primary waves-effect waves-classic">Create</button>
                    <a class="btn btn-sm btn-white btn-pure waves-effect waves-classic" data-dismiss="modal"
                        href="javascript:void(0)">Cancel</a>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Modal -->