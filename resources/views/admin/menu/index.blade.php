@extends('layouts.admin.master')

@section('content')
    <!--Page header-->
    <div class="page-header d-lg-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">مدیریت منو - {{ $menuGroup->label }}</h4>
        </div>
        <div class="page-leftheader mr-md-auto">
            <div class=" btn-list">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create-menu">
                    ایجاد منو جدید
                </button>

                <!-- Modal -->
                <div class="modal fade" id="create-menu" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ثبت منو</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-12">
                                        <form action="" method="post">
                                            @csrf

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="title">عنوان</label>
                                                        <input class="form-control" type="text" name="title" id="title">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="linkable_type">نوع لینک</label>
                                                        <select class="form-control" name="linkable_type" id="linkable_type">
                                                            <option value="">نوع لینک را انتخاب کنید</option>
                                                            @foreach($models as $key => $value)
                                                                <option value="{{ $key }}">{{ $value }}</option>
                                                            @endforeach
                                                            <option value="">لینک دلخواه</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="linkable_id">آیتم لینک</label>
                                                        <select class="form-control" name="linkable_id" id="linkable_id" disabled>
                                                            @foreach($categories as $category)
                                                                <option value="{{ $category->id }}" class="model">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="link">آیتم لینک</label>
                                                        <input type="text" name="link" class="form-control" id="link" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <h6>منوها</h6>
                        <form action="{{ route('admin.menu.sort') }}" method="post">
                            @csrf

                            <ul id="items" class="list-group">

                                @foreach($menuItems as $menuItem)
                                <li class="list-group-item">
                                    <input type="hidden" value="{{ $menuItem->id }}" name="menu[]"> {{ $menuItem->title }}

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#edit-menu-{{ $menuItem->id }}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>

                                    <button class="btn btn-danger btn-sm text-white" onclick="confirmDelete('delete-{{ $menuItem->id }}')"><i class="fa fa-trash-o"></i></button>
                                </li>
                                @endforeach
                            </ul>
                            <button class="btn btn-warning mt-3" type="submit">ذخیره مرتب سازی</button>
                        </form>

                    @foreach($menuItems as $menuItem)
                        <!-- Modal -->
                        <div class="modal fade" id="edit-menu-{{ $menuItem->id }}" tabindex="-1" role="dialog"
                             aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $menuItem->title }}</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

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

                        <form action="{{ route('admin.menu.destroy', $menuItem->id) }}" method="post" id="delete-{{ $menuItem->id }}" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->
@endsection

@section('scripts')
    <script>
        //sortablejs
        let el = document.getElementById('items');
        let sortable = Sortable.create(el);

        $(document).ready(function () {
            $('#linkable_type').change(function () {
                let val = $(this).val();
                if (val) {
                    $('#linkable_id').removeAttr('disabled');
                    $('#link').attr('disabled', 'disabled');
                } else {
                    $('#link').removeAttr('disabled');
                    $('#linkable_id').attr('disabled', 'disabled');
                }
            });
        });
    </script>
@endsection
