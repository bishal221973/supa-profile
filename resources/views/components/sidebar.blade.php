<nav id="sidebar">
    <div class="py-4 pl-5">
        <img class="img-reponsive" src="{{ asset(config('constants.nep_gov.logo_sm')) }}" alt="Nepal Government Logo" height="80px">
    </div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="glyphicon glyphicon-home"></i>
                Home
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li><a href="#">Home 1</a></li>
                <li><a href="#">Home 2</a></li>
                <li><a href="#">Home 3</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="glyphicon glyphicon-briefcase"></i>
                About
            </a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="glyphicon glyphicon-duplicate"></i>
                Pages
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="glyphicon glyphicon-link"></i>
                Portfolio
            </a>
        </li>
        <li>
            <a href="#">
                <i class="glyphicon glyphicon-paperclip"></i>
                FAQ
            </a>
        </li>
        <li>
            <a href="#">
                <i class="glyphicon glyphicon-send"></i>
                Contact
            </a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
        <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
    </ul>
</nav>
