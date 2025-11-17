@extends('app.layouts.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header gloss_breadcrumbs">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{url('/admin/size')}}">Size</a></li>
                        <li class="breadcrumb-item active">{{$title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <form role="form" id="formWizard" class="form--wizard" enctype="multipart/form-data" method="post">
                {{csrf_field()}}


                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session('success') }}
                        </div>
                        @elseif(session('error'))
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session('error') }}
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Title *</label>
                                <input type="text" name="title" id="title" placeholder="Title " class="form-control for_canonical_url required" autocomplete="off" value="{{ old('title',isset($size)?@$size->title:'') }}" maxlength="230" >
                                <div class="help-block with-errors" id="title_error"></div>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                                                       <div class="form-group col-md-6">
                                <label> Short URL*</label>
                                <input type="text" name="short_url" id="short_url" placeholder="Short URL" class="form-control required" autocomplete="off" value="{{ @$size->short_url }}">
                                <div class="help-block with-errors" id="short_url_error"></div>
                                @error('short_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                         <!-- Service image -->
                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Featured Image*</label>
                                <div class="file-loading">
                                    <input id="image" name="image" type="file" accept=".jpg,.png" >
                                </div>
                                <span class="caption_note">Note: Image size must be 740 x 461 px and Size
                                    must be less than 600 KB</span>
                                     <div class="help-block with-errors" id="image_error"></div>
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Image Attribute</label>
                                <input type="text" class="form-control placeholder-cls" id="image_attribute" name="image_attribute" placeholder="Alt='Image Attribute'" value="{{ isset($size)?$size->image_attribute:'' }}" >
                                @error('image_attribute')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- Service image -->

                    
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="short_description">Short Description*</label>
                                <textarea class="form-control required" id="short_description" name="short_description" placeholder="Short Description " maxlength="500">{{ old('short_description',isset($size)?$size->short_description:'') }}</textarea>
                                <div class="help-block with-errors" id="short_description_error"></div>
                                @error('short_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- SHort Content-->
                       
                        <!-- Service Description -->
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="description">Description*</label>
                                <textarea class="form-control tinyeditor required" id="description" name="description" placeholder="Description " >
                                {{ old('description',isset($size)?$size->description:'') }}</textarea>
                                <div class="help-block with-errors" id="description_error"></div>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- Alternate Description -->
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="alternate_description">Alternate Description</label>
                                <textarea class="form-control tinyeditor" id="alternate_description" name="alternate_description" placeholder="Enter alternate description">{{ old('alternate_description', isset($size) ? $size->alternate_description : '') }}</textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Alternate Image</label>
                                <div class="file-loading">
                                    <input id="alternate_image" name="alternate_image" type="file" accept=".jpg,.png" >
                                </div>
                                <span class="caption_note">Note: Image size must be 740 x 461 px and Size
                                    must be less than 600 KB</span>
                                     <div class="help-block with-errors" id="alternate_image_error"></div>
                                @error('alternate_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Image Attribute</label>
                                <input type="text" class="form-control placeholder-cls" id="alternate_image_attribute" name="alternate_image_attribute" placeholder="Alt='Image Attribute'" value="{{ isset($size)?$size->alternate_image_attribute:'' }}" >
                                @error('alternate_image_attribute')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <!-- Alternate Description -->
                        <!-- Service image -->
                        <!--<div class="form-row">-->
                        <!--    <div class="form-group col-md-6">-->
                        <!--        <label>Banner Image</label>-->
                        <!--        <div class="file-loading">-->
                        <!--            <input id="banner_image" name="banner_image" type="file" accept=".jpg,.png" >-->
                        <!--        </div>-->
                        <!--        <span class="caption_note">Note: Image size must be 400 x 400 px and Size-->
                        <!--                    must be less than 600 KB</span>-->
                        <!--        <div class="help-block with-errors" id="image_error"></div>-->
                        <!--        @error('banner_image')-->
                        <!--        <div class="invalid-feedback">{{ $message }}</div>-->
                        <!--        @enderror-->
                        <!--    </div>-->
                        <!--    <div class="form-group col-md-6">-->
                        <!--        <label>Banner Attribute</label>-->
                        <!--        <input type="text" class="form-control placeholder-cls" id="banner_image_attribute" name="banner_image_attribute" placeholder="Alt='Image Attribute'" value="{{ isset($size)?$size->banner_image_attribute:'' }}" >-->
                        <!--        @error('banner_image_attribute')-->
                        <!--        <div class="invalid-feedback">{{ $message }}</div>-->
                        <!--        @enderror-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label> Meta Title</label>
                                <textarea class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title">{{ old('meta_title',isset($size)?$size->meta_title:'') }}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label> Meta Description</label>
                                <textarea class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description">{{ old('meta_description',isset($size)?$size->meta_description:'') }}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label> Meta Keyword</label>
                                <textarea class="form-control" id="meta_keyword" name="meta_keyword" placeholder="Meta Keyword">{{ old('meta_keyword',isset($size)?$size->meta_keyword:'') }}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label> Other Meta Tag</label>
                                <textarea class="form-control" id="other_meta_tag" name="other_meta_tag" placeholder="Other Meta Tag">{{ old('other_meta_tag',isset($size)?$size->other_meta_tag:'') }}</textarea>
                            </div>
                        </div>
                    <div class="card-footer">
                        <input type="submit" id="btn_save" name="btn_save" data-id="{{isset($size)?$size->id:''}}" value="Submit" class="btn btn-primary pull-left submitBtn">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <input type="hidden" name="id" id="id" value="{{ isset($size)?$size->id:'0' }}">
                        <img class="animation__shake loadingImg" src="{{url('app/dist/img/loading.gif')}}" style="display:none;">
                    </div>
            </form>
        </div>
    </section>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#banner_image").fileinput({
            'theme': 'explorer-fas',
            validateInitialCount: true,
            overwriteInitial: false,
            autoReplace: true,
            initialPreviewShowDelete: false,
            initialPreviewAsData: true,
            dropZoneEnabled: false,
            required: false,
            allowedFileTypes: ['image'],
            minImageWidth: 400,
            minImageHeight: 400,
            maxImageWidth: 400,
            maxImageHeight: 400,
            maxFileSize: 600,
            showRemove: true,
            @if(isset($size) && $size -> banner_image != NULL)
            required: false,
            initialPreview: ["{{asset($size->banner_image)}}"],
            initialPreviewConfig: [{
                caption: "{{last(explode('/',$size->banner_image))}}",
                width: "120px",
                key: "{{'Service/banner_image/'.$size->id.'/banner_image_webp' }}",
            }]
            @endif
        });
        // service image
        $("#image").fileinput({
            'theme': 'explorer-fas',
            validateInitialCount: true,
            overwriteInitial: false,
            autoReplace: true,
            layoutTemplates: {actionDelete: ''},
            initialPreviewShowDelete: false,
            initialPreviewAsData: true,
            dropZoneEnabled: false,
            allowedFileTypes: ['image'],
            minImageWidth: 740,
            minImageHeight: 461,
            maxImageWidth: 740,
            maxImageHeight: 461,
            maxFileSize: 600,
            showRemove: true,
            @if(isset($size) && $size -> image != NULL)
             required: false,
            initialPreview: ["{{asset($size->image)}}"],
            initialPreviewConfig: [{
                caption: "{{last(explode('/',$size->image))}}",
                width: "120px",
                key: "{{'Service/image/'.$size->id.'/image_webp' }}",
            }]
            @else
             required: true
            @endif
        });

        $("#alternate_image").fileinput({
            'theme': 'explorer-fas',
            validateInitialCount: true,
            overwriteInitial: false,
            autoReplace: true,
            // layoutTemplates: {actionDelete: ''},
            initialPreviewShowDelete: false,
            initialPreviewAsData: true,
            dropZoneEnabled: false,
            allowedFileTypes: ['image'],
            minImageWidth: 740,
            minImageHeight: 461,
            maxImageWidth: 740,
            maxImageHeight: 461,
            maxFileSize: 600,
            showRemove: true,
            @if(isset($size) && $size -> alternate_image != NULL)
             required: false,
            initialPreview: ["{{asset($size->alternate_image)}}"],
            initialPreviewConfig: [{
                caption: "{{last(explode('/',$size->alternate_image))}}",
                width: "120px",
                key: "{{'Service/alternate_image/'.$size->id.'/alternate_image_webp' }}",
            }]
            @else
             
            @endif
        });
       

    });
</script>
@endsection
