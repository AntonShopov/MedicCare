<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.style')
<body background="../images/test.jpg" style="background-size: cover;">
	@include('layouts.navBar')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.scripts')
</body>
</html>