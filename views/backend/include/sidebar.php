   <!-- Menu -->

   <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
       <?php
        $actual_link =  "$_SERVER[REQUEST_URI]";
        $homeMenuPaths = ["/breadcrumb", "/section_1", "/section_2", "/section_3", "/section_4", "/footer",];

        $isHomeMenuOpen = in_array($actual_link, $homeMenuPaths);
        $users = ["/users",  "/block", "/active",];

        $isusers = in_array($actual_link, $users);
        ?>

       <div class="app-brand demo ">
           <a href="index.html" class="app-brand-link">
               <span class="app-brand-logo demo">
                   <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                           fill="#7367F0" />
                       <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                           d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                       <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                           d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                       <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                           fill="#7367F0" />
                   </svg>
               </span>
               <span class="app-brand-text demo menu-text fw-bold">Mazia</span>
           </a>

           <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
               <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
               <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
           </a>
       </div>

       <div class="menu-inner-shadow"></div>



       <ul class="menu-inner py-1">
           <!-- Dashboards -->
           <li class="menu-item <?php if ($_SERVER['REQUEST_URI'] == '/admin') {
                                    echo 'active';
                                } ?> ">
               <a href="/admin" class="menu-link ">
                   <div data-i18n="Dashboards">Dashboards</div>
               </a>

           </li>



           <!-- Layouts -->
           <li class="menu-item <?php if ($isHomeMenuOpen) { ?>open<?php } ?>">
               <a href="javascript:void(0);" class="menu-link menu-toggle">
                   <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                   <div data-i18n="Home">Home</div>
               </a>

               <ul class="menu-sub">

                   <li class="menu-item <?php if ($actual_link == "/breadcrumb") { ?>open active <?php } ?>">
                       <a href="/breadcrumb" class="menu-link">
                           <div data-i18n="Breadcrumb ">Breadcrumb</div>
                       </a>
                   </li>
                   <li class="menu-item <?php if ($actual_link == "/section_1") { ?>open active <?php } ?>">
                       <a href="/section_1" class="menu-link">
                           <div data-i18n="Section 1">Section 1</div>
                       </a>
                   </li>
                   <li class="menu-item <?php if ($actual_link == "/section_2") { ?>open active <?php } ?>">
                       <a href=" /section_2" class="menu-link">
                           <div data-i18n="Section 2">Section 2</div>
                       </a>
                   </li>



                   <li class="menu-item <?php if ($actual_link == "/section_3") { ?>open active <?php } ?>">
                       <a href=" /section_3" class="menu-link">
                           <div data-i18n="Section 3">Section 3</div>
                       </a>
                   </li>
                   <li class="menu-item <?php if ($actual_link == "/section_4") { ?>open active <?php } ?>">
                       <a href=" /section_4" class="menu-link">
                           <div data-i18n="Section 4">Section 4</div>
                       </a>
                   </li>
                   <li class="menu-item <?php if ($actual_link == "/footer") { ?>open active <?php } ?>">
                       <a href=" /footer" class="menu-link">
                           <div data-i18n="Footer">Footer</div>
                       </a>
                   </li>
               </ul>
           </li>



            <!-- Layouts -->
            <li class="menu-item <?php if ($isusers) { ?>open<?php } ?>">
               <a href="javascript:void(0);" class="menu-link menu-toggle">
                   <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                   <div data-i18n="Users">Users</div>
               </a>

               <ul class="menu-sub">

                   <li class="menu-item <?php if ($actual_link == "/users") { ?>open active <?php } ?>">
                       <a href="/users" class="menu-link">
                           <div data-i18n="Users ">Users</div>
                       </a>
                   </li>
                   <li class="menu-item <?php if ($actual_link == "/active") { ?>open active <?php } ?>">
                       <a href="/active" class="menu-link">
                           <div data-i18n="Active ">Active</div>
                       </a>
                   </li>
                   <li class="menu-item <?php if ($actual_link == "/block") { ?>open active <?php } ?>">
                       <a href="/block" class="menu-link">
                           <div data-i18n="Block ">Block</div>
                       </a>
                   </li>
                 
               </ul>
           </li>






   </aside>
   <!-- / Menu -->



   <!-- Layout container -->
   <div class="layout-page">