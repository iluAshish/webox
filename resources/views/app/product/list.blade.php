@extends('app.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content-header list_breadcrumb">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Manage Containers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{url(Helper::sitePrefix().'dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Container List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
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


                        <div class="gloss_card-header">
                            <a href="{{url(Helper::sitePrefix().'containers/create')}}"
                               class="btn btn-success pull-right">Add Container <i
                                    class="fa fa-plus-circle pull-right mt-1 ml-2"></i></a>
                        </div>

                        <div class="gloss_card">
                            <div class="gloss_card-body">
                                <table class="table table-bordered table-hover dataTable" width="100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                         <th>Category</th>
                                         <th>Sort Order</th> 
                                        {{-- <th>Specification</th>
                                        <th>Gallery</th> --}}
                                        <th>Status</th>
{{--                                        <th>Display to Home</th>--}}
                                        <th class="not-sortable">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productList as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>
                                                @foreach($categories as $category)
                                                    @if($category->id == $product->category_id)
                                                        {{ $category->title }}
                                                    @endif
                                                @endforeach
                                            </td> 
                                            <!-- <td><a href="{{url(Helper::sitePrefix().'product/overview/'.$product->id)}}"
                                                   class="btn btn-sm btn-success mr-2 tooltips" title="Add Overview">Overview</a>
                                            </td> -->
                                            <!-- <td>
                                                <a href="{{url(Helper::sitePrefix().'product/key-feature/'.$product->id)}}"
                                                   class="btn btn-sm btn-info mr-2 tooltips"
                                                   title="Add KeyFeature">KeyFeature</a>
                                            </td>-->
                                            <td>
                                                <input type="text" name="sort_order"
                                                       id="sort_order_{{$loop->iteration}}" data-extra="id"
                                                       data-extra_key="{{$product->id}}" data-table="DhabiProduct"
                                                       data-id="{{ $product->id }}" class="common_sort_order"
                                                       style="width:25%"
                                                       value="{{$product->sort_order}}" maxlength="10">
                                            </td>
                                            {{-- <td>
                                                <a href="{{url(Helper::sitePrefix().'containers/specification/'.$product->id)}}"
                                                   class="btn btn-sm btn-danger mr-2 tooltips"
                                                   title="Add Specification">Specification</a>
                                            </td> 
                                            <td><a href="{{url(Helper::sitePrefix().'containers/gallery/'.$product->id)}}"
                                                   class="btn btn-sm btn-primary mr-2 tooltips" title="Add Gallery">Gallery</a>
                                            </td> --}}
                                            <!-- <td><a href="{{url(Helper::sitePrefix().'product/offer/'.$product->id)}}"
                                                   class="btn btn-sm btn-warning mr-2 tooltips"
                                                   title="Add Offer">Offer</a></td> -->
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" class="status_check"
                                                           data-url="/status-change" data-table="DhabiProduct"
                                                           data-field="status" data-pk="{{ $product->id}}"
                                                        {{($product->status=="Active")?'checked':''}}>
                                                    <span class="slider"></span>
                                                </label>
                                            </td>
                                            <!--<td>-->
                                            <!--    <label class="switch">-->
                                            <!--        <input type="checkbox" class="bool_status"-->
                                            <!--               data-url='change-bool-status' data-table="DhabiProduct"-->
                                            <!--               data-id="{{$product->id}}" data-field="display_to_home"-->
                                            <!--            {{($product->display_to_home == "Yes")?'checked':''}}>-->
                                            <!--        <span class="slider"></span>-->
                                            <!--    </label>-->
                                            <!--</td>-->
                                            <!-- <td>
                                                <span  class="badge bg-primary bookingStatusChange"
                                                data-toggle="modal" data-target="#websiteModal{{ $product->id }}"
                                                data-id="{{ $product->id }}"
                                                data-status="{{ $product->type }}" role="button">{{ $product->type }}
                                                                    <i class="fas fa-exchange-alt"></i></span>
                                            </td> -->
{{--                                             <td>--}}
{{--                                                <label class="switch">--}}
{{--                                                    <input type="checkbox" class="bool_status"--}}
{{--                                                           data-url='change-bool-status' data-table="DhabiProduct"--}}
{{--                                                           data-id="{{$product->id}}" data-field="is_featured"--}}
{{--                                                        {{($product->is_featured == "Yes")?'checked':''}}>--}}
{{--                                                    <span class="slider"></span>--}}
{{--                                                </label>--}}
{{--                                            </td>--}}
{{--                                             <td>--}}
{{--                                                <label class="switch">--}}
{{--                                                    <input type="checkbox" class="bool_status"--}}
{{--                                                           data-url='change-bool-status' data-table="Product"--}}
{{--                                                           data-id="{{$product->id}}" data-field="new_arrival"--}}
{{--                                                        {{($product->new_arrival == "Yes")?'checked':''}}>--}}
{{--                                                    <span class="slider"></span>--}}
{{--                                                </label>--}}
{{--                                            </td>--}}
                                            <!-- <td>
                                                <label class="switch">
                                                    <input type="checkbox" class="bool_status"
                                                           data-url='change-bool-status' data-table="Product"
                                                           data-id="{{$product->id}}" data-field="best_seller"
                                                        {{($product->best_seller == "Yes")?'checked':''}}>
                                                    <span class="slider"></span>
                                                </label>
                                            </td> -->

                                            <td class="text-right py-0 align-middle">

                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{url(Helper::sitePrefix().'containers/edit/'.$product->id)}}"
                                                       class="btn btn-success mr-2 tooltips" title="Edit Product"><i
                                                            class="fas fa-edit"></i></a>
{{--                                                    <a href="{{url(Helper::sitePrefix().'product/copy/'.$product->id)}}" class="btn btn-primary mr-2 product_replica tooltips"--}}
{{--                                                       data-id="{{$product->id}}" title="Copy this product"><i--}}
{{--                                                            class="fas fa-copy"></i></a>--}}
                                                    <a href="#" class="btn btn-danger mr-2 delete_entry tooltips"
                                                       data-url="containers/delete" data-id="{{$product->id}}"
                                                       title="Delete Product"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="websiteModal{{$product->id}}">
                                            <div class="modal-dialog" id="modalContent">
                                                <div class="modal-content">

                                                        <div class="modal-body">
                                                            <div class="form-row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="status">Choose websites*</label>
                                                                        <input type="hidden" name="product_id" value="{{ @$product->id }}">
                                                                        <select class="form-control select2 bool_status"
                                                                        data-url='change-bool-status' data-table="Product"
                                                                        data-id="{{$product->id}}" data-field="type">
                                                                            <option value="">Select Website</option>
                                                                            <option value="all">Common</option>
                                                                           <option value="ecommerce">Ecommerce</option>
                                                                           <option value="Corporate">Corporate</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="booking_id" id="booking_id" class="required" value="">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection -->
