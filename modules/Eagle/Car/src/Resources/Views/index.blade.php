@extends("Dashboard::Layouts.main")

@section("content")
    <div class="main-content">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route("car.index") }}">لیست خودرو ها</a>
                <a class="tab__item" href="{{ route("car.create") }}">ایجاد خودرو جدید</a>
            </div>
        </div>
        <div class="table__box">
            <table class="table">

                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>نام صاحب خودرو</th>
                    <th>نام خودرو</th>
                    <th>پلاک حودرو</th>
                    <th>زنگ</th>
                    <th>مدل</th>
                    <th>وضعیت</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr role="row" class="">
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->user->name }}</td>
                        <td>@lang($car->car_type)</td>
                        <td>{{ $car->tag }}</td>
                        <td>@lang($car->color)</td>
                        <td>@lang($car->model)</td>
                        <td>
                            <a href="{{ route("car.delete",$car->id) }}"
                               onclick="hanleDeleteItem(event,'{{ $car->id }}')" class="item-delete mlg-15"
                               title="حذف"></a>
                            <a href="" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                            <a href="{{ route("car.edit",$car->id) }}" class="item-edit " title="ویرایش"></a>
                        </td>
                    </tr>
                    <form id="delete_car_{{ $car->id }}" action="{{ route("car.delete",$car->id) }}"
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
            var deleteItem = "#delete_car_" + id;
            $(deleteItem).submit();
        }
    </script>
@endsection
