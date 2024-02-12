@extends('layouts.admin.master')

@section('content')
    <!--Page header-->
    <div class="page-header d-lg-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">جراحی ها</h4>
        </div>
        <div class="page-leftheader mr-md-auto">
            <div class=" btn-list">
                <a href="{{ route('admin.surgeries.create') }}" class="btn btn-primary">ایجاد جراحی جدید</a>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th>شناسه</th>
                            <th>دکترها</th>
                            <th>نام بیمار</th>
                            <th>عمل (ها)</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($surgeries as $surgery)
                            <tr>
                                <td>{{ $surgery->id }}</td>
                                <td>

                                </td>
                                <td>{{ $surgery->patient_name }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->
@endsection

