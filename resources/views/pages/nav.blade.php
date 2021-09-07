<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand me-auto mb-2 offset-md-1" href="#">
                <img src="{{asset('images/logo.png')}}" alt="" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#dhlNavContent" aria-controls="dhlNavContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="dhlNavContent">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                    <a class="nav-link" href="#">{{  trans('Help and Support') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link loc" href="#">{{  trans('Find a location') }}</a>
                </li>
                <li>
                    <div class="jhGf">
                        <label for="">
                            <span class="page-search-divider"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </label>
                    </div>
                </li>
                <li class="v2-vertical-divider"></li>
                <li>
                    <form>
                        <div class="form-item">
                            <input id="country_selector" type="text">
                            <label for="country_selector" style="display:none;">Select a country here...</label>
                        </div>
                        <div class="form-item" style="display:none;">
                            <input type="text" id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
                            <label for="country_selector_code">...and the selected country code will be updated here</label>
                        </div>
                        <button type="submit" style="display:none;">Submit</button>
                    </form>	
                </li>
            </ul>
            <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            </div>
        </div>
    </nav>
    <div class="iKjer"></div>
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 offset-md-1 col">
                    <ul class="header-navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-li">
                            <a href="#" class="top-nav">{{  trans('Home') }}</a>
                        </li>
                        <li class="nav-li">
                            <a href="#" class="top-nav">{{  trans('Ship') }}</a>
                        </li>
                        <li class="nav-li">
                            <a href="#" class="top-nav">{{  trans('Track') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 col">
                    <ul class="eriOl">
                        <li class="nav-li"><a href="#" class="top-nav">{{  trans('Register') }}</a></li>
                        <li class="nav-li"><a href="#" class="top-nav">{{  trans('Login') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>