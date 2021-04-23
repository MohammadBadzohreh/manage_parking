@include("Dashboard::Layouts.head")
@include("Dashboard::Layouts.sidebar")
<div class="content">

    @include("Dashboard::Layouts.header")

    @include("Dashboard::Layouts.breadcrumb")

    @yield("content")

</div>
@include("Dashboard::Layouts.footer")
