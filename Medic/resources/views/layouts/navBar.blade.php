    <nav class="navbar navbar-inverse">
    <a class="navbar-brand" href="/">MedicCare</a>
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-4">
          <ul class="nav navbar-nav navbar-right">
            @guest
            <li style="float: right;"><a href="{{ route('login') }}">Login</a></li>
            <li style="float: right;"><a href="{{ route('register') }}">Register</a></li>
            @else
            <li> <a href="/index">Profile</a></li>
            <li><a href="/decease"> Add Decease </a></li>
                <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
            @endguest
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>