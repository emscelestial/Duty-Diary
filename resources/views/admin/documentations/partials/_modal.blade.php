<div class="modal fade" id="newDocumentations" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fixed-top" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newDocumentations">Add your documentations here</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('documentations.store') }}" id="documentation-upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="file" class="dropify" name="doc_img" id="doc_img" data-max-file-size="2M" data-show-errors="true">
                    <input type="text" name="caption" id="caption" class="form-control mt-3" placeholder="Write your caption here">
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Exit</button>
                    <input type="submit" value="Save" id="submit-doc" class="btn btn-primary btn-sm">
                </div>
            </form>
        </div>
    </div>
</div>
{{--
<!-- Modal -->
<div class="modal fade" id="newDocumentations" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fixed-top" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newDocumentations">Add your documentations here</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('documentations.store') }}" id="documentation-upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="file" class="dropify" name="doc_img" id="doc_img" data-max-file-size="2M" data-show-errors="true" data-max-file-size="2M" data-show-errors="true">
                    <input type="text" name="caption" id="caption" class="form-control mt-3" placeholder="write your caption here">
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Exit</button>
                    <input type="submit" value="Save" id="submit-doc"  class="btn btn-primary btn-sm">
                </div>
            </form>

        </div>
    </div>
</div>
 --}}
