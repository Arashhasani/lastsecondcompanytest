<div class="top-panel top-panel-wide white-color" id="/webtemplate/js-panel">
    <div class="wrap wrap-wide">
        <div class="wrap_float">
            <div class="mode-check">
                <input type="checkbox" id="mode-checkbox" class="mode-checkbox-input">
                <label for="mode-checkbox" class="mode-checkbox-label" data-dark-title="Dark Mode" data-light-title="Light Mode"></label>
            </div>
            <div class="wrap">
                <a href="/" class="logo">
                    uipaper
                </a>
                <div class="wrap-center">
                    <div class="currency-wrap">
                        <label for="currency-select" class="currency-label">Currency</label>
                        <select class="currency-select" id="currency-select">
                            <option value="USD">USD</option>
                            <option value="RUB">RUB</option>
                            <option value="EUR">EUR</option>
                        </select>
                    </div>
                    <div class="menu" id="/webtemplate/js-menu">

                    </div>
                </div>
                <div class="user-panel">
                    <ul>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <a href="{{route('logoutt')}}" class="login-link ">Logout</a>

                        @else
                            <li class="login-li"><a data-href="#modal-login" class="login-link getModal">Login</a></li>

                        @endif
                    </ul>
                </div>
            </div>
            {{--                    <div class="search-button" id="btn-search"></div>--}}
        </div>
        <div class="socials">
            <a class="soc-link">
                <img src="/webtemplate/img/facebook-icon.svg" class="/webtemplate/img-svg" alt="">
            </a>
            <a class="soc-link">
                <img src="/webtemplate/img/twitter-soc-icon.svg" class="/webtemplate/img-svg" alt="">
            </a>
            <a class="soc-link">
                <img src="/webtemplate/img/behance-icon.svg" class="/webtemplate/img-svg" alt="">
            </a>
        </div>
        <div class="menu-close" id="/webtemplate/js-menu-close"></div>
    </div>
</div>
