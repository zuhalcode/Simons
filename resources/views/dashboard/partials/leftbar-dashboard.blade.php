<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <h3 class="text-center bg-dark text-white p-2" style="margin-top:-64px;">SIMONS ADMIN</h3>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link {{ Request::is('dashboard*') ? 'active' : '' }} waves-effect waves-dark sidebar-link" href="/dashboard"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Request::is('quest*') || Request::is('personality*') ? 'active' : '' }} waves-effect waves-dark sidebar-link" href="/quest"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">List Soal</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <form action="/logout" method="POST" class="sidebar-link waves-effect waves-dark sidebar-link">
                                @csrf
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <button class="hide-menu border-0 " 
                                style="background: none; margin-left:-5px; outline:none;">Logout</button>
                            </form>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->