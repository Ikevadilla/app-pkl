<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <li>
                <a href="{{ route('home') }}">Beranda</a>
            </li>
            <li>
                <a href="{{ route('pasien.index') }}">Data pasien</a>
            </li>
            <li>
                <a href="{{ route('dokter.index') }}">dokter </a>

            </li>
            
            </li>
        </ul>

    </div>
</div>