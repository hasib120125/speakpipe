@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col_md_12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section One Banner</div>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" enctype="multipart/form-data" id="form" method="post" action="{{ route('admin_section_one_banner_save') }}">
                        @csrf
                        <div class="form-group {{ $errors->has('title') ? ' has_error' : '' }}">
                            <label>Title</label>
                            <div class="d_flex_inline">
                                <input type="text" name="title" class="form_global " placeholder="Title" value="{{ !empty($banner->title) ? $banner->title : '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Upload Banner Image</label>
                            <div class="file_input">
                                <input type="file" name="image" class="form_global">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea rows="10" cols="50" name="description" class="form_global">{{ !empty($banner->description) ? $banner->description : '' }}</textarea>
                        </div>
                        <div class="form-group ">
                            <div class="form_radio">
                                <input type="radio" id="activeStatus" name="status" value="1" {{ empty(old('status')) ? ($banner->status == 1 ? 'checked' : '') : (old('status') == 1 ? 'checked' : '') }}>
                                <label for="activeStatus">Active</label>

                                <input type="radio" id="inactiveStatus" value="0" name="status" {{ empty(old('status')) ? ($banner->status == 0 ? 'checked' : '') : (old('status') == 0 ? 'checked' : '') }}>
                                <label for="inactiveStatus">Inactive</label>
                            </div>
                        </div>
                        <div class="d_flex_end">
                            <button class="btn  btn_success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop


@section('additionalJS')

@stop
