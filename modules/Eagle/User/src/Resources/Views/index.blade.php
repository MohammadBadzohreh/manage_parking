@extends("Dashboard::Layouts.main")
@section("content")
    <div class="main-content font-size-13">
        <div class="table__box">
            <table class="table">
                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>ای دی</th>
                    <th>تصویر</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr role="row" class="">
                    <td>{{ $user->id }}</td>
                    <td>
                        <img width="75"  src="{{ $user->banner }}" alt="تصویر کاربر">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
