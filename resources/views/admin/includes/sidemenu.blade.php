    <div class="site-menubar">
        <div class="site-menubar-body">
            <div>
                <div>
                    <ul class="site-menu" data-plugin="menu">
                        <li class="site-menu-category">General</li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{ url('admin') }}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard</span>
                            </a>
                        </li>
                       
                        <li class="site-menu-item has-sub active open">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                                <span class="site-menu-title">Master Records</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{ url('admin/category') }}">
                                        <span class="site-menu-title">Categories</span>
                                    </a>
									
                                </li> <li class="site-menu-item">
                                    <a class="animsition-link" href="{{ url('admin/customers') }}">
                                        <span class="site-menu-title">Customers</span>
                                    </a>
                                </li>
                                


                                
                               
                            </ul>
                        </li>

                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                                <span class="site-menu-title">Products</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{ url('admin/products') }}">
                                        <span class="site-menu-title">Products</span>
                                    </a>
                                </li> <li class="site-menu-item">
                                    <a class="animsition-link" href="{{ url('admin/products/create') }}">
                                        <span class="site-menu-title">New Product </span>
                                    </a>
                                </li>
                                


                                
                               
                            </ul>
                        </li>
                       
                    </ul>
                    <div class="site-menubar-section">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="site-menubar-footer">
            <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
                data-original-title="Settings">
                <span class="icon md-settings" aria-hidden="true"></span>
            </a>
            <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
                <span class="icon md-eye-off" aria-hidden="true"></span>
            </a>
            <a  href="{{ route('logout') }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
                <span class="icon md-power" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <div class="site-gridmenu">
        <div>
            <div>
                <ul>
                    <li>
                        <a href="../apps/mailbox/mailbox.html">
                            <i class="icon md-email"></i>
                            <span>Mailbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="../apps/calendar/calendar.html">
                            <i class="icon md-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="../apps/contacts/contacts.html">
                            <i class="icon md-account"></i>
                            <span>Contacts</span>
                        </a>
                    </li>
                    <li>
                        <a href="../apps/media/overview.html">
                            <i class="icon md-videocam"></i>
                            <span>Media</span>
                        </a>
                    </li>
                    <li>
                        <a href="../apps/documents/categories.html">
                            <i class="icon md-receipt"></i>
                            <span>Documents</span>
                        </a>
                    </li>
                    <li>
                        <a href="../apps/projects/projects.html">
                            <i class="icon md-image"></i>
                            <span>Project</span>
                        </a>
                    </li>
                    <li>
                        <a href="../apps/forum/forum.html">
                            <i class="icon md-comments"></i>
                            <span>Forum</span>
                        </a>
                    </li>
                    <li>
                        <a href="../index.html">
                            <i class="icon md-view-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>