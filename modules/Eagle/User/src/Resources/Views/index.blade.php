@extends("Dashboard::Layouts.main")
@section("css")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
@endsection
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
                    <th>افزودن نقش کاربری</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr role="row" class="">
                        <td>{{ $user->id }}</td>
                        <td>
                            <img width="75" src="{{ $user->banner }}" alt="تصویر کاربر">
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <ul>
                                @foreach($user->roles as $userRole)
                                    <li>
                                        <a href="">@lang($userRole->name)</a>
                                        <a href=""
                                           onclick="deleteItem(event, '{{ route('give.role.user', ["user" => $user->id, "role" => $userRole->name]) }}', 'li')"
                                           class="item-delete mlg-15" title="حذف">
                                        </a>


                                    </li>
                                    <br>
                                @endforeach
                            </ul>
                            <p>
                                <a href="#rolsModal" rel="modal:open"
                                   onclick="setFormAction('{{$user->id}}')" data-modal>افزودن نقش کاربری</a>
                            </p>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="rolsModal" class="modal">
        <form id="selectModal" action="" method="post">
            @csrf
            <select name="role" id="">
                <option value="" style="display: none;">نقش کاربری</option>
                @foreach($roles as $role)
                    <option value="{{$role->name}}">{{$role->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-webamooz_net">اضافه کردن</button>
        </form>
    </div>
@endsection

@section("js")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>
        function setFormAction(userId) {
            $("#selectModal").attr('action', "{{route("add.role",0)}}".replace('/0/', '/' + userId + '/'))
        }

        function deleteItem(event, route, element = 'tr') {
            event.preventDefault();
            if(confirm('آیا از حذف این آیتم اطمینان دارید؟')){
                $.post(route, { _method: "delete", _token: $('meta[name="_token"]').attr('content') })
                    .done(function (response) {
                        event.target.closest(element).remove();
                        iziToast.show({
                            title: "عملیات موفقیت آمیز",
                            class: 'irs',
                            message: "با موفقیت انجام شد!",
                            rtl: true,
                            color:'green'
                        });
                    })
                    .fail(function (response) {
                        iziToast.show({
                            title: "خطا در عملیات",
                            class: 'irs',
                            message: "خطایی به وجود آمده است",
                            rtl: true,
                            color:'red'
                        });
                    })
            }
        }
    </script>
@endsection
