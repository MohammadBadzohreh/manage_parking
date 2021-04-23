@extends("Dashboard::Layouts.main")

@section("content")
    <div class="main-content padding-0">
        <p class="box__title">ویرایش خودرو </p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{ route("car.update",$car->id) }}" method="post" class="padding-30">
                    @csrf
                    @method("put")
                    <select name="car_type">
                        <option value="">نوع خودرو</option>
                        @foreach(\Eagle\Car\Models\Car::$CARS_TYPE as $type)
                            <option value="{{ $type }}" @if($type == $car->car_type) selected @endif>@lang($type)</option>
                        @endforeach
                    </select>
                    @error("car_type")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <input type="text" name="tag" value="{{ $car->tag }}" class="text"
                           placeholder="پلاک خودرو">

                    @error("tag")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <select name="color">
                        <option value="">رنگ خودرو</option>
                        @foreach(\Eagle\Car\Models\Car::$COLORS as $color)
                            <option value="{{ $color }}"
                                    @if($color == $car->color) selected @endif>@lang($color)</option>
                        @endforeach
                    </select>

                    @error("color")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror


                    <select name="model">
                        <option value="">مدل خودرو</option>
                        @foreach(range(1380,1400) as  $model)
                            <option value="{{ $model }}"
                                    @if($model == $car->model) selected @endif>{{ $model }}</option>
                        @endforeach
                    </select>


                    @error("model")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror


                    <button class="btn btn-webamooz_net">ویرایش خودرو</button>
                </form>
            </div>
        </div>
    </div>
@endsection

