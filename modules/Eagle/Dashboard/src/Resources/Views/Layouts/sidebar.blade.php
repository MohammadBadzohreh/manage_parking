<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href="https://webamooz.net"></a>

    @auth()
        <div class="profile__info border cursor-pointer text-center">
            <div class="avatar__img"><img src="{{ auth()->user()->banner }}" class="avatar___img">
                <input type="file" accept="image/*" class="hidden avatar-img__input">
                <div class="v-dialog__container" style="display: block;"></div>
                <div class="box__camera default__avatar"></div>
            </div>
            <span class="profile__name">کاربر : {{ auth()->user()->name }}</span>
        </div>
    @endauth

    <ul style="margin-top: 6.5em">
        <li class="item-li @if(request()->routeIs("user.*")) is-active @endif">
            <a href="{{ route("user.index") }}"><i class="fas fa-users"></i><span>کاربران</span></a>
        </li>
        <li class="item-li @if(request()->routeIs("parking.*")) is-active @endif">
            <a href="{{ route('parking.index') }}"><i class="fas fa-parking"></i><span>پارکینگ</span></a>
        </li>
        <li class="item-li @if(request()->routeIs("permissions.*")) is-active @endif">
            <a href="{{ route("permissions.index") }}"><i class="fas fa-user-shield"></i><span>نقش کاربری</span></a>
        </li>
        <li class="item-li @if(request()->routeIs("car.*")) is-active @endif">
            <a href="/car"><i class="fas fa-car"></i><span>خودرو</span></a>
        </li>

        <li class="item-li @if(request()->routeIs("transactions.*")) is-active @endif">
            <a href="{{ route("transactions.index") }}"><i class="fas fa-money-check-alt"></i><span>تراکنش ها</span></a>
        </li>


    </ul>

</div>
