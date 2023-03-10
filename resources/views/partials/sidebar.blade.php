<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="">
            <img src="{{asset('admin/images//icon/icon_leebrary_login.png')}}" alt="leebrary" />
        </a>
    </div>

    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                <li>
                    <a href={{route('books.index')}}>
                        <i class="fas fa-chart-bar"> </i>List Data Buku</a>
                </li>

                <li>
                    <a href={{route('books.create')}}>
                        <i class="fas fa-table"> </i>Tambah Buku</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
