<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Car Bar</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">DashBoard</a></li>
        <li><a href="{{ route('findRide') }}">Find a Ride</a></li>
        <li><a href="{{ route('postRide') }}">Offer Ride</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          @if (Storage::disk('local')->has(Auth::user()->first_name . '-' . Auth::user()->id . '.jpg'))
              <img src="{{ route('account.image', ['filename' => Auth::user()->first_name . '-' . Auth::user()->id . '.jpg']) }}" alt="AS" class="img-circle" width="50" height="50" style="margin-top:5px;"></li>
              <li><a href="{{ route('account') }}">&nbsp;&nbsp;{{ Auth::user()->first_name }}</a></li>
          @else
            <a href="{{ route('account') }}"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;{{ Auth::user()->first_name }}</a></li>
          @endif
        
        
        <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Logout</a></li>
      </ul>
    </div>
  </div>
</nav>