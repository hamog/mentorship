@extends('layouts.admin.master')

@section('content')
    <!--Page header-->
    <div class="page-header d-lg-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Empty</h4>
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

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="payment_date_show" class="control-label">تاریخ پرداخت</label> <span class="text-danger">&starf;</span>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div>
                                        <input class="form-control fc-datepicker" id="payment_date_show" placeholder="تاریخ پرداخت" type="text" autocomplete="off" value="{{ verta(old('payment_date', today()->format('Y-m-d')))->format('Y-m-d') }}">
                                        <input name="payment_date" id="payment_date" type="hidden" value="{{ old('payment_date', today()->format('Y-m-d')) }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">

                                    <label for="tags">برچسب ها</label>

                                    <select class="form-control js-tags-example" name="tags[]" id="tags" multiple>
                                        <option value="item1">item1</option>
                                        <option value="item2">item2</option>
                                        <option value="item3">item3</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <h6>منوها</h6>
                        <form action="{{ route('sort') }}" method="post">
                            @csrf

                            <ul id="items" class="list-group">
                                <li class="list-group-item">
                                    <input type="hidden" value="1" name="menu[]"> Item 1
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#modelId">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </li>
                                <li class="list-group-item"><input type="hidden" value="2" name="menu[]"> item 2</li>
                                <li class="list-group-item"><input type="hidden" value="3" name="menu[]"> item 3</li>
                            </ul>
                            <button class="btn btn-primary mt-3" type="submit">ذخیره مرتب سازی</button>
                        </form>

                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                         aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Body
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->
@endsection

@section('scripts')
    <script>
        $('#payment_date_show').MdPersianDateTimePicker({
            targetDateSelector: '#payment_date',
            targetTextSelector: '#payment_date_show',
            englishNumber: false,
            toDate:true,
            enableTimePicker: false,
            dateFormat: 'yyyy-MM-dd',
            textFormat: 'yyyy-MM-dd',
            groupId: 'rangeSelector1',
        });

        //tags
        $('.js-tags-example').select2({
            tags:true
        });

        //sortablejs
        var el = document.getElementById('items');
        var sortable = Sortable.create(el);
    </script>
@endsection
