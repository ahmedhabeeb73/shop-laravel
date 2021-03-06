<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

        <h5 class="my-0 mr-md-auto font-weight-normal">
            <a href="{{route('home')}}">Dundung</a>
        </h5>

    <nav class="my-2 my-md-0 mr-md-3">

        <a class="p-2 text-dark" href="{{route('logout')}}">blog</a>



    </nav>
    @auth()
        @if(session()->has('currentOrders'))
        <a title="سلتي" class="p-2 text-dark" href="{{route('orders.create')}}">
            <i class="fas fa-shopping-bag"></i>
        </a>
        @endif
        <a class="p-2 text-dark" href="{{route('users.account')}}">الملف الشخصي</a>
        <a class="btn btn-outline-primary" href="{{route('logout')}}">خروج</a>
    @endauth
    @guest()
        <a class="btn btn-outline-primary" href="{{route('login')}}"> الدخول</a>
        <a class="btn btn-outline-primary" href="{{route('users.create')}}"> التسجيل</a>
    @endguest

</div>

