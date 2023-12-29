@extends('layouts.admin.master')

@section('content')
    <!--Page header-->
    <div class="page-header d-lg-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Menu Groups</h4>
        </div>
        <div class="page-leftheader mr-md-auto">
            <div class=" btn-list">
                <button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                <button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                <button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @foreach($menuGroups->chunk(3) as $chunk)
                        <div class="row">
                            @foreach($chunk as $menuGroup)
                                <div class="col">
                                    <div class="mt-0 text-right"> <h5 class="">
                                            <a href="{{ route('admin.menu.index', ['menu_group_id' => $menuGroup->id]) }}">{{ $menuGroup->label }}</a>
                                        </h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->
@endsection

