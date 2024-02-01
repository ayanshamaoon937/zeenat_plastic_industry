<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" id="indexli" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" id="settingsli" href="{{ route('settings') }}">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" id="productsli" href="{{ route('add_products') }}">
                <i class="bi bi-gear"></i>
                <span>Products</span>
            </a>
        </li>
    </ul>
</aside>
