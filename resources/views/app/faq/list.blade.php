@extends('app.layouts.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="nav-icon fas fa-user-shield"></i> Manage FAQ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url(Helper::sitePrefix().'dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">FAQ</li>
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
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <a href="{{url(Helper::sitePrefix().'faq/create')}}" class="btn btn-success pull-right">Add Faq <i class="fa fa-plus-circle pull-right mt-1 ml-2"></i></a>
                        </div>
                        <div class="card-body">
                            <table class="dataTable table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <!-- <th>Sort Order</th>
                                        <th>Popular</th> -->
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th class="not-sortable">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=1@endphp@foreach($faqLists as $faqList)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        
                                        <td>{!! $faqList->faq_title !!}</td>
                                        <!-- <td>
                                            <input type="text" name="sort_order" id="sort_order_{{$loop->iteration}}" data-extra="id"
                                                   data-extra_key="{{$faqList->id}}" data-table="Faq"
                                                   data-id="{{ $faqList->id }}" class="common_sort_order" style="width:25%"
                                                   value="{{$faqList->sort_order}}">
                                        </td>
                                        <td><input id="switch-state-{{$i}}" type="checkbox" class="display_to_home" data-url="faq/popular" data-size="mini" title="Team" data-id="{{ $faqList->id}}" <?php if($faqList->popular=="Yes"){ ?>checked="checked"<?php }?>></td> -->

                                        <td>
                                            <label class="switch">
                                                <input id="switch-state" type="checkbox" class="status_check"
                                                        data-size="mini" data-url="/status-change"
                                                        data-table="Faq"
                                                        data-field="status" data-pk="{{ $faqList->id }}"
                                                    {{($faqList->status=="Active")?'checked':''}}>
                                                <span class="slider"></span>
                                            </label>
                                        </td>
                                        <td>{{ date("d-M-Y", strtotime($faqList->created_at)) }}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{url(Helper::sitePrefix().'faq/edit/'.$faqList->id)}}" class="btn btn-success mr-2 tooltips" title="Edit Faq"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger mr-2 delete_entry tooltips" title="Delete Faq" data-url="faq/delete" data-id="{{$faqList->id}}"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @php $i++@endphp@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection