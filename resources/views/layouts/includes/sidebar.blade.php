@section('sidebar')
    <nav id="sidebar-nav">
        <ul class="nav nav-pills nav-stacked">
            <li>
                <a href="/company" class="list-group-item list-group-item-action bg-light">Company Info</a>
            </li>
            <li>
                <a href="/home" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            </li>
            <li>
                <a href="/services" class="list-group-item list-group-item-action bg-light">Services</a>
            </li>
            <li>
                <a href="/users" class="list-group-item list-group-item-action bg-light">Users</a>
            </li>
            <li>
                <a href="reports" class="list-group-item list-group-item-action bg-light">Reports</a>
            </li>
        </ul>

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
