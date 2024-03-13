@extends('backend.dashboard.layouts.master')

@section('title')
    Edit website Info
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit website Info</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit website Info</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data"
                        action="{{ Route('websiteInfo.update', $websiteInfo->id) }}" autocomplete="off">

                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="key">الأسم </label>
                                    <input name="key" id="key" type="text" value="{{ $websiteInfo->key }}"
                                        class="form-control" />
                                    @error('key')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="value">القيمة</label>
                                    <input name="value" id="value" type="text" value="{{ $websiteInfo->value }}"
                                        class="form-control" />
                                    @error('value')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-md nextBtn btn-lg m-2">تعديل</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
