@extends('app.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content-header gloss_breadcrumbs">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> {{$title}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{url(Helper::sitePrefix().'dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{url(Helper::sitePrefix().'containers/')}}">Container</a>
                            </li>
                            <li class="breadcrumb-item active">{{$title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <style>
            button.kv-file-remove.btn.btn-sm.btn-kv.btn-default.btn-outline-secondary {
                display: none;
            }
        </style>
        <section class="content">
            <div class="container-fluid">

                <form role="form" id="formWizard"
                action="{{@$key=='Copy'?url(Helper::sitePrefix().'product/create'):''}}" class="form--wizard"
                enctype="multipart/form-data" method="post">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label> Title*</label>
                                <input type="text" name="title" id="title" placeholder="Title" maxlength="70"
                                       class="form-control required for_canonical_url" autocomplete="off"
                                       value="{{ old('title', isset($product)?$product->title:'') }}">
                                <div class="help-block with-errors" id="title_error"></div>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 d-none">
                                <label> Short URL *</label>
                                <input type="text" name="short_url" id="short_url" placeholder="Short URL"
                                       class="form-control required" autocomplete="off"
                                       value="{{ isset($product)?$product->short_url:'' }}">
                                <div class="help-block with-errors" id="short_url_error"></div>
                                @error('short_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label> Category*</label>
                                <select name="category" id="category"
                                        class="form-control select2" >
                                    <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                {{ (@$category->id==@$product->category_id)?'selected':'' }}
                                            >{{$category->title}}</option>
                                        @endforeach
                                </select>
                                <div class="help-block with-errors" id="category_error"></div>
                                @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label> Thumbnail Image*</label>
                                <div class="file-loading">
                                    <input id="thumbnail_image" name="thumbnail_image" type="file"
                                           accept="image/*">
                                </div>
                                <span class="caption_note">Note: Image dimension must be 374 x 239 PX and Size must be less than 512 KB</span>

                                @if(@$key)
                                    @error('thumbnail_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label> Container Thumbnail Attribute</label>
                                <input type="text" name="thumbnail_image_attribute"
                                       id="thumbnail_image_attribute"
                                       placeholder="Alt='Product Thumbnail Attribute'"
                                       class="form-control placeholder-cls" autocomplete="off"
                                       value="{{ isset($product)?$product->thumbnail_image_attribute:'' }}">
                                @error('thumbnail_image_attribute')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{--
                         <div class="form-row">
                            <div class="form-group col-md-12">
                                <label> Container Description</label>
                                <textarea name="description" id="description"
                                          placeholder="Description" class="form-control  tinyeditor"
                                          autocomplete="off">{{ isset($product)?$product->short_description:'' }}</textarea>
                                <div class="help-block with-errors" id="description_error"></div>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea name="alternate_description" id="alternate_description"
                                          placeholder="Description" class="form-control  tinyeditor"
                                          autocomplete="off">{{ isset($product)?$product->description:'' }}</textarea>
                                <div class="help-block with-errors" id="description_error"></div>
                                @error('alternate_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                        {{-- <div class="form-row" id="">
                            <div class="form-group col-md-6">
                                <label> Banner Image</label>
                                <div class="file-loading">
                                    <input id="featured_image" name="featured_image" type="file"
                                           accept="image/*">
                                </div>
                                <span class="caption_note">Note: Image size should be minimum of 497 x 600</span>
                                @error('featured_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label> Banner Image Attribute</label>
                                <input type="text" name="featured_image_attribute"
                                       id="featured_image_attribute"
                                       placeholder="Alt='Featured Image Attribute'"
                                       class="form-control placeholder-cls" autocomplete="off"
                                       value="{{ isset($product)?$product->featured_image_attribute:'' }}">
                                @error('thumbnail_image_attribute')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label> Meta Title</label>
                                <textarea class="form-control" id="meta_title" name="meta_title"
                                          placeholder="Meta Title">{{ isset($product)?$product->meta_title:'' }}</textarea>
                                @error('meta_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label> Meta Description</label>
                                <textarea class="form-control" id="meta_description" name="meta_description"
                                          placeholder="Meta Description">{{ isset($product)?$product->meta_description:'' }}</textarea>
                                @error('meta_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label> Meta Keyword</label>
                                <textarea class="form-control" id="meta_keyword" name="meta_keyword"
                                          placeholder="Meta Keyword">{{ isset($product)?$product->meta_keyword:'' }}</textarea>
                                @error('meta_keyword')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label> Other Meta Tag</label>
                                <textarea class="form-control" id="other_meta_tag" name="other_meta_tag"
                                          placeholder="Other Meta Tag">{{ isset($product)?$product->other_meta_tag:'' }}</textarea>
                                @error('other_meta_tag')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="gloss_card-footer">
                            <input type="submit" id="btn_save" name="btn_save"
                                   data-id="{{isset($product)?$product->id:''}}" value="Submit"
                                   class="btn btn-primary pull-left submitBtn">
                                   @if(@$key)
                                   <input type="hidden" value="{{@$key}}" name="copy">
                                   <input type="hidden" value="{{@$product->id}}" name="copy_product_id">
                               @endif
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <input type="hidden" name="id" id="id" value="{{ isset($product)?$product->id:'0' }}">
                            <img class="animation__shake loadingImg" src="{{url('backend/dist/img/loading.gif')}}"
                                 style="display:none;">
                        </div>
                </form>
            </div>
        </section>
    </div>
    <script>
        function checkTinyEditorContent() {
            var editorContent = tinyMCE.get('alternate_description').getContent();
            var hasDescriptionError = true;
            var descriptionErrorDiv = document.getElementById('description_error');
            if (editorContent.trim() === '') {
                descriptionErrorDiv.innerHTML = '<p class="text-danger">Description is required.</p>';
                return false;
            } else {
                descriptionErrorDiv.innerHTML = '';
                return true;
            }
        }
        document.getElementById('formWizard').onsubmit = checkTinyEditorContent;
    </script>
    
    <script type="text/javascript">
        
        $(document).ready(function () {
            let type = '{{$title}}';
            if ( type=== "Create Product") {
                $('#category').select2().val($('#category option:nth-child(2)').val()).trigger('change');
            }
            $("#thumbnail_image").fileinput({
                'theme': 'explorer-fas',
                validateInitialCount: true,
                overwriteInitial: false,
                autoReplace: true,
                initialPreviewShowDelete: false,
                initialPreviewAsData: true,
                dropZoneEnabled: false,
                required: true,
                allowedFileExtensions: ['jpg','jpeg', 'png'],
                // minImageWidth: 374,
                // minImageHeight: 239,
                // maxImageWidth: 374,
                // maxImageHeight: 239,
                showRemove: true,
                @if(isset($product) && $product->thumbnail_image!=NULL)
                initialPreview: ["{{asset($product->thumbnail_image)}}",],
                initialPreviewConfig: [{
                    caption: "{{ ($product->thumbnail_image!=NULL)?last(explode('/',$product->thumbnail_image)):''}}",
                    width: "120px",
                    key: "{{'Product/thumbnail_image/'.$product->id.'/thumbnail_image' }}",
                }],
                @endif
            });

        });
    </script>
@endsection
