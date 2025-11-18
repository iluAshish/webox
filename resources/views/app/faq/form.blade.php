@extends('app.layouts.main')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="nav-icon fas fa-user-shield"></i> {{ $title }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url(Helper::sitePrefix() . 'dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url(Helper::sitePrefix() . 'faq') }}">FAQ List</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <form role="form" id="formWizard" class="form--wizard" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                <div class="card card-info">
                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('success') }}
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">FAQ Title*</label>
                                <input type="text" name="title" id="title" placeholder="Faq Title"
                                    class="form-control for_canonical_url required" autocomplete="off"
                                    value="{{ isset($faq) ? $faq->faq_title : '' }}" maxlength="230">
                                <div class="help-block with-errors" id="title_error"></div>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Faq Id*</label>
                                <input type="text" name="short_url" id="short_url" placeholder="Faq id is auto generated" class="form-control required" autocomplete="off" value="{{ old('short_url', isset($faq)?$faq->short_url:'') }}" maxlength="230">
                                <div class="help-block with-errors" id="short_url_error"></div>
                            </div>

                            {{-- dynamic component  --}}
                            <div class="form-group col-md-6" id="services_ids_box">
                                {{-- This div will be populated dynamically based on the selected faq_type --}}
                                <label>Services</label>
                                <select name="services_ids[]" id="services_ids" class="form-control select2" multiple>
                                    {{-- Loop through doctors and create options --}}
                                    @php
                                        
                                        $selectedServicesIds = collect($faq->services_ids ?? [])->filter()->values();

                                    @endphp
                                    
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}" {{ $selectedServicesIds->contains($service->id) ? 'selected' : '' }}>
                                            {{ $service->title }}
                                        </option>
                                    @endforeach
                                </select>
                                
                                
                                <div class="help-block with-errors" id="services_ids_error"></div>
                            </div>

                            <div class="form-group col-md-6" id="sizes_ids_box">
                                {{-- This div will be populated dynamically based on the selected faq_type --}}
                                <label>Sizes</label>
                                <select name="sizes_ids[]" id="sizes_ids" class="form-control select2" multiple>
                                    {{-- Loop through doctors and create options --}}
                                    @php
                                        $selectedServicesIds = collect($faq->sizes_ids ?? [])->filter()->values();
                                    @endphp
                                    
                                    @foreach($sizes as $size)
                                        <option value="{{ $size->id }}" {{ $selectedServicesIds->contains($size->id) ? 'selected' : '' }}>
                                            {{ $size->title }}
                                        </option>
                                    @endforeach
                                </select>
                                
                                
                                <div class="help-block with-errors" id="sizes_ids_error"></div>
                            </div>


                            <div class="form-group col-md-12">
                                <label>Answer *</label>
                                <textarea name="answer" id="answer" class="form-control tinyeditor required" placeholder="Faq Answer">{{ isset($faq) ? $faq->answer : '' }}</textarea>
                                <div class="help-block with-errors" id="answer_error"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="submit" class="btn btn-primary pull-left submitBtn" value="Submit">
                                <input type="reset" class="btn btn-default" value="Reset">
                                <img class="animation__shake loadingImg" src="{{ url('app/dist/img/loading.gif') }}" style="display:none;">
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection

