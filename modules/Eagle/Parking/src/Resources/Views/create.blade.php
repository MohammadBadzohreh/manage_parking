@extends("Dashboard::Layouts.main")

@section("content")

    <div class="main-content padding-0">
        <p class="box__title">ایجاد پارکینگ جدید</p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{ route("parking.store") }}" method="post" class="padding-30"
                      enctype="multipart/form-data">
                    @csrf
                    @method("post")
                    <input type="text" name="title" value="{{ old("title") }}" class="text" placeholder="عنوان پارکینگ">

                    @error("title")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror


                    <input type="number" name="capacity" value="{{ old("capacity") }}" class="text"
                           placeholder="ظرفیت پارکینگ">
                    @error("capacity")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <input type="number" name="price" value="{{ old("price") }}" class="text"
                           placeholder="قیمت پارکینگ">
                    @error("price")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <select name="type">
                        <option value="0">نوع پارکینگ</option>
                        @foreach(\Eagle\Parking\Models\Parking::$TYPES as $type)
                            <option value="{{ $type }}" @if($type == old("type")) selected @endif>@lang($type)</option>
                        @endforeach
                    </select>
                    @error("type")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <select name="status">
                        <option value="0">وضعیت پارکینگ</option>
                        @foreach(\Eagle\Parking\Models\Parking::$STATUSES as $status)
                            <option value="{{$status}}"
                                    @if($status == old("status")) selected @endif>@lang($status)</option>
                        @endforeach
                    </select>

                    @error("status")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="file-upload">
                        <div class="i-file-upload">
                            <span>آپلود بنر پارکینگ</span>
                            <input type="file" class="file-upload" id="files" name="avatar">
                        </div>
                        <span class="filesize"></span>
                        <span class="selectedFiles">فایلی انتخاب نشده است</span>
                    </div>
                    @error("avatar")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <div>
                        <input type="text" class="text" placeholder="آدرس" name="address" value="{{ old("address") }}">
                    </div>
                    @error("address")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <textarea placeholder="توضیحات پارکینگ" name="description"
                              class="text h">{!! old("description") !!}</textarea>
                    @error("description")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <button class="btn btn-webamooz_net">ایجاد پارکینگ</button>
                </form>
            </div>
        </div>
    </div>

@endsection
