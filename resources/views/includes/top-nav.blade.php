<nav class="navbar navbar-expand-lg bg-body-tertiary" id="topNav" style=" box-shadow: 0px 3px 12px #91919138;">
    <div class="container-fluid px-md-5 px-3">
      <button class="btn border-0 shadow-none px-0 me-3" onclick="collapseSidenav()">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand text-dark" href="{{route('client.index')}}">
        <span class="fw-bold text-brown">CRM App</span>
      </a>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-0 mb-lg-0">

          <li class="nav-item dropdown">

            <a class="d-inline-flex nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="fs-14 pe-3 fw-300 d-none d-md-block m-auto text-brown">
                    {{Auth::user()->name}}
                </span>
                <span class="contain-nav-img">
                  @if (Auth::user()->avatar)
                    <img class="topnav-icon" src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" >
                  @else
                    <span class="rounded-circle border p-1 bg-brown">
                      <i class="bi bi-person-fill text-white"></i>
                    </span>
                  @endif
                </span>
                <span class="dropdown-toggle my-auto ms-3"></span>
            </a>
            <ul class="dropdown-menu py-3 px-3 mt-2 rounded border-0 shadow" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item fs-14 py-md-2 fw-300 " href="{{ route('profile.show') }}">Profile</a></li>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li><a class="dropdown-item fs-14 py-md-2 fw-300 " href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" role="button">{{ __('Logout') }}</a></li>
                </form>
            </ul>
        </li>
        </ul>
        
      </div>
    </div>
</nav>

<style>
  .contain-nav-img span.rounded-circle{
    width: 2.5rem;
    display: inline-flex;
    text-align: center;
    height: 2.5rem;
    justify-content: center;
  }
  .contain-nav-img i.bi{
    font-size: 1.25rem;
    height: min-content;
    width: min-content;
    margin: auto;
  }
  #topNav .container-fluid{
    flex-wrap: initial;
  }
  /* `md` applies to small devices (landscape phones, less than 768px) */
    @media (max-width: 767.98px) {
      #topNav .dropdown-menu {
          position: absolute !important;
          left: -100%;
      }
  }
</style>