@if (url()->current() === route('admin.categories.index'))
    {{-- Creating category --}}
    <div class="modal fade" id="m_category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="m_category_title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" id="m_category_header">
                    <h5 class="modal-title text-white" id="m_category_title">{{-- Modal Title --}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="category_form" autocomplete="off">
                        <div class="form-group">
                            <label class="form-label">Category *</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn float-end btn_add_category btn-primary"
                        onclick="c_store('.category_form','.category_dt', 'admin.categories.store')">Submit</button>
                    <button type="button" class="btn float-end btn_update_category btn-info"
                        onclick="c_update('.category_form','.category_dt', 'admin.categories.update', event)">Update</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Creating category --}}
@endif

@if (url()->current() === route('admin.municipalities.index'))
    {{-- Creating municipality --}}
    <div class="modal fade" id="m_municipality" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="m_municipality_title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" id="m_municipality_header">
                    <h5 class="modal-title text-white" id="m_municipality_title">{{-- Modal Title --}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="municipality_form" autocomplete="off">
                        <div class="form-group">
                            <label class="form-label">Municipality *</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn float-end btn_add_municipality btn-primary"
                        onclick="c_store('.municipality_form','.municipality_dt', 'admin.municipalities.store')">Submit</button>
                    <button type="button" class="btn float-end btn_update_municipality btn-info"
                        onclick="c_update('.municipality_form','.municipality_dt', 'admin.municipalities.update', event)">Update</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Creating municipality --}}
@endif
