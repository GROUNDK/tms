@extends('admin.layouts.app')

@section('panel')

    <div class="row mb-none-30">


        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-50 border-bottom pb-2"> @lang('Logo & Icon') </h5>

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group col-xl-6">
                                <div class="image-upload">
                                    <div class="thumb">
                                        <div class="avatar-preview">

                                            <div class="profilePicPreview logoPicPrev" style="background-color: #000;background-size: 100%;background-image: url({{ getLogoImage('admin'), '?'.time() }})">
                                                <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="avatar-edit">
                                            <input type="file" class="profilePicUpload" id="profilePicUpload1" accept=".png, .jpg, .jpeg" name="logo">
                                            <label for="profilePicUpload1" class="bg-primary"> @lang('Select Logo') </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-xl-6">
                                <div class="image-upload">
                                    <div class="thumb">
                                        <div class="avatar-preview">
                                            <div class="profilePicPreview logoPicPrev" style="background-color: #000;background-size: 100%;background-image: url({{ getImage(imagePath()['logoIcon']['path'].'/favicon.png', '?'.time()) }})">
                                                <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="avatar-edit">
                                            <input type="file" class="profilePicUpload" id="profilePicUpload2" accept=".png" name="favicon">
                                            <label for="profilePicUpload2" class="bg-primary"> @lang('Select Favicon') </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn--primary btn-block btn-lg">@lang('Update')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

