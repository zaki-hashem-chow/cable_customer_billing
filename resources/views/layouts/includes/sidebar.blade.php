@section('sidebar')
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div id="sidebar" class="sidebar-sticky">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Menu Items</span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a href="/company" class="nav-link active">Company Info</a>
                </li>
                <li class="nav-item">
                    <a href="/home" class="nav-link active">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="/services" class="nav-link active">Services</a>
                </li>
                <li class="nav-item">
                    <a href="/user" class="nav-link active">Users</a>
                </li>
                <li class="nav-item">
                    <a href="reports" class="nav-link active">Reports</a>
                </li>
            </ul>
        </div>
    </nav>

@show
