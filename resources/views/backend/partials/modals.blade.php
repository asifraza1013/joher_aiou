<div class="modal fade" id="applications">
    <div class="modal-dialog" style="max-width: 800px">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Description</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{URL::TO('')}}/adddescription" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description')
                            }}</label>

                        <textarea type="text" class="form-control desc-application" name="description" value="" required
                            autofocus id="edescription"> </textarea>
                    </div>


                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category')
                            }}</label>

                            <select type="text" class="form-control " name="category" value="" required
                                autofocus>
                                <option value="" disabled selected>-- select --</option>
                                @foreach (config('constants.application_cate') as $key=>$item)
                                <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>
                        <input type="submit" class="form-control btn btn-success " name="pdffile"
                            value="Submit" required autofocus>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
