@extends('app.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content-header gloss_breadcrumbs">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>About Us</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url(Helper::sitePrefix().'dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">

                <form role="form" id="formWizard" class="form--wizard" enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <div class="gloss_card">
                        <div class="gloss_card-body">
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
                                    <label> Title*</label>
                                    <input type="text" name="title" id="title" placeholder="Title"
                                           class="form-control required" autocomplete="off"
                                           value="{{ old('title',isset($about)?$about->title:'') }}"
                                           maxlength="255">
                                    <div class="help-block with-errors" id="title_error"></div>
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> Sub Title</label>
                                    <input type="text" name="sub_title" id="sub_title"
                                           placeholder="Sub Title"
                                           class="form-control " autocomplete="off"
                                           value="{{ old('sub_title',isset($about)?$about->sub_title:'') }}"
                                           maxlength="255">
                                    <div class="help-block with-errors" id="sub_title_error"></div>
                                    @error('sub_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label> Short Description</label>
                                    <textarea name="short_description" id="short_description"
                                              class="form-control"
                                              placeholder="Short Description"
                                    >{{ old('short_description',isset($about)?$about->short_description:'') }}</textarea>
                                    <div class="help-block with-errors" id="short_description_error"></div>
                                    @error('short_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label> Description*</label>
                                    <textarea name="description" id="description"
                                              class="form-control tinyeditor required"
                                              placeholder="Description"
                                    >{{ old('description',isset($about)?$about->description:'') }}</textarea>
                                    <div class="help-block with-errors" id="description_error"></div>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label> Image*</label>
                                    <div class="file-loading">
                                        <input id="image" name="image" class="" type="file" accept="image/*">
                                    </div>
                                    <span class="caption_note">Note: Image size must be 250 X 251</span>
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>

                                    @enderror
                                    <div class="help-block with-errors" id="image_error"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label> Image Attribute *</label>
                                    <input type="text" class="form-control placeholder-cls required"
                                           id="image_attribute"
                                           name="image_attribute" placeholder="Alt='Home Image Attribute'"
                                           value="{{ old('image_attribute',isset($about)?$about->image_attribute:'') }}"
                                           maxlength="255">
                                           <div class="help-block with-errors" id="image_attribute_error"></div>
                                    @error('image_attribute')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Alternate Description</label>
                                    <textarea name="alternate_description" id="alternate_description"
                                              class="form-control tinyeditor "
                                              placeholder="Alternate Description"
                                    >{{ old('alternate_description',isset($about)?$about->alternate_description:'') }}</textarea>
                                    <div class="help-block with-errors" id="alternate_description_error"></div>
                                    @error('alternate_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="id" id="id" value="{{isset($about)?$about->id:'0'}}">
                            <input type="submit" name="btn_save" value="Submit"
                                   class="btn btn-primary pull-left submitBtn">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#image").fileinput({
                'theme': 'explorer-fas',
                validateInitialCount: true,
                overwriteInitial: false,
                autoReplace: true,
                layoutTemplates: {actionDelete: ''},
                removeLabel: "Remove",
                initialPreviewAsData: true,
                dropZoneEnabled: false,
                required: false,
                allowedFileTypes: ['image'],
                minImageWidth: 250,
                minImageHeight: 251,
                maxImageWidth: 250,
                maxImageHeight: 251,
                maxFileSize: 512,
                showRemove: true,
                @if(isset($about) && $about->image!=NULL)
                initialPreview: ["{{asset($about->image)}}",],
                initialPreviewConfig: [{
                    caption: "{{last(explode('/',$about->image))}}",
                    width: "120px",
                    key: "{{'AboutUs/image/'.$about->id.'/webp_image' }}",
                }]
                @endif
            });
        });

    </script>
@endsection
