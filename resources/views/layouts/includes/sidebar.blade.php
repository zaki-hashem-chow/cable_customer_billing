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

   <script>

//        sub-menu selection active
            if(window.location.href.indexOf("/doctor/schedule") != -1){
                $('#scheduleMenuItem').addClass('activeMenuItem');
            }else if(window.location.href.indexOf("/doctor/settings/chamber") != -1){
                $('#chamberSubMenuItem').addClass('activeMenuItem');
            }else if(window.location.href.indexOf("/doctor/settings/education") != -1){
                $('#educationSubMenuItem').addClass('activeMenuItem');
            }else if(window.location.href.indexOf("/doctor/settings/personal-info") != -1){
                $('#personalInfoSubMenuItem').addClass('activeMenuItem');
            }else if(window.location.href.indexOf("/doctor/settings/specialties") != -1){
                $('#specialtySubMenuItem').addClass('activeMenuItem');
            }else if(window.location.href.indexOf("/doctor/settings/work-history") != -1){
                $('#workHistoryPersonalSubMenuItem').addClass('activeMenuItem');
            }else{
                $('#dashboardMenuItem').addClass('activeMenuItem');
            }

  //        Sub-menu hold collapse
            if(window.location.href.indexOf("/doctor/settings/") != -1){
              let settingMenuItem = document.getElementById("settingCollapseMenuItemLI");
              let submenuCollapse = document.getElementById("submenu-collapse");

                settingMenuItem.classList.remove("collapsed");
                settingMenuItem.classList.add("active");
                settingMenuItem.setAttribute('aria-expanded', 'true');

                submenuCollapse.classList.remove("sub-menu");
                submenuCollapse.classList.add("in");
                submenuCollapse.setAttribute("aria-expanded", "true");
                submenuCollapse.setAttribute("style", "");
            }
    </script>
@show
