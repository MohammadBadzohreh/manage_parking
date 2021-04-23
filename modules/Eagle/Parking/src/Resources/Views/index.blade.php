@extends("Dashboard::Layouts.main")

@section("content")
    <div class="main-content">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route("parking.index") }}">لیست پارکینگ ها</a>
                <a class="tab__item" href="{{ route("parking.create") }}">ایجاد پارکینگ جدید</a>
            </div>
        </div>
        <div class="table__box">
            <table class="table">

                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>تصویر</th>
                    <th>نام مدیر پارکینگ</th>
                    <th>عنوان</th>
                    <th>ظرفیت</th>
                    <th>نوع</th>
                    <th>وضعیت</th>
                    <th>استفاده شده</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($parkings as $parking)
                    <tr role="row" class="">
                        <td>{{ $parking->id }}</td>
                        <td><img width="150" height="100" src="{{ $parking->banner }}" alt="{{ $parking->title }}"></td>
                        <td>{{ $parking->user->name }}</td>
                        <td>{{$parking->title}}</td>
                        <td>{{ $parking->capacity }}</td>
                        <td>@lang($parking->type)</td>
                        <td>@lang($parking->status)</td>
                        <td>{{$parking->uses}}</td>
                        <td>
                            <a href="{{ route("parking.delete",$parking->id) }}"
                               onclick="hanleDeleteItem(event,'{{ $parking->id }}')" class="item-delete mlg-15"
                               title="حذف"></a>
                            <a href="" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                            <a href="{{ route("parking.edit",$parking->id) }}" class="item-edit " title="ویرایش"></a>
                        </td>
                    </tr>
                    <form id="delete_parking_{{ $parking->id }}" action="{{ route("parking.delete",$parking->id) }}"
                          method="post">
                        @csrf
                        @method("delete")
                    </form>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section("js")
    <script>
        function hanleDeleteItem(e, id) {
            e.preventDefault();
            var deleteItem = "#delete_parking_" + id;
            $(deleteItem).submit();
        }
    </script>
@endsection
