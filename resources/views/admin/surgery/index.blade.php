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
                            <th>مبلغ (تومان)</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($surgeries as $surgery)
                            <tr>
                                <td>{{ $surgery->id }}</td>
                                <td>
                                    {{ implode(', ', $surgery->doctors->pluck('name')->all()) }}
                                </td>
                                <td>{{ $surgery->patient_name }}</td>
                                <td>
                                    {{ implode(', ', $surgery->operations->pluck('name')->all()) }}
                                </td>
                                <td>{{ number_format($surgery->getTotalPrice()) }}</td>
                                <td>

                                    <a href="{{ route('admin.surgeries.edit', $surgery->id) }}" class="btn btn-warning">ویرایش</a>

                                    <a href="#" class="btn btn-danger" onclick="event.preventDefault();
                                                     document.getElementById('delete-surgery-{{ $surgery->id }}').submit();">حذف</a>
                                    <form id="delete-surgery-{{ $surgery->id }}" action="{{ route('admin.surgeries.destroy', $surgery->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
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

