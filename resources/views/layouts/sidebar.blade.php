<!-- Main Sidebar Container -->
<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="admin.dashboard" class="active">Admin Dashboard</a></li>
                                <li><a href="guru.dashboard">Teacher Dashboard</a></li>
                                <li><a href="siswa.dashboard">Student Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-users"></i> <span> Account</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('TabelUsers')}}">Account List</a></li>
                                <li><a href="{{route('AddUser')}}">Account Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-check"></i> <span> Admin/Staf</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('tabelAdmins')}}">Admin/Staf List</a></li>
                                <li><a href="{{route('AddAdmins')}}">Admin/Staf Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('tabelStudents')}}">Student List</a></li>
                                <li><a href="">Student View</a></li>
                                <li><a href="{{route('AddStudents')}}">Student Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span>Teachers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('TabelTeachers')}}">Teacher List</a></li>
                                <li><a href="">Teacher View</a></li>
                                <li><a href="{{route('AddTeacher')}}">Teacher Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('TabelSubjects')}}">Subject List</a></li>
                                <li><a href="{{route('AddSubjects')}}">Subject Add</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>