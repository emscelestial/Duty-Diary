     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-solid fa-book"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Duty Diary <sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href= "{{route('diaries.index')}}">
                <i class="fas fa-solid fa-book-open"></i>
                <span>Diaries</span></a>
        </li>

        <!-- Nav Item - Documentations -->
        <li class="nav-item">
            <a class="nav-link" href= "{{route('documentations.index')}}">
                <i class="fas fa-solid fa-camera-retro"></i>
                <span>Documentations</span></a>
        </li>

          <!-- Nav Item - Approval Request -->
          <li class="nav-item">
            <a class="nav-link" href= "{{route('approval-requests.index')}}">
                <i class="fas fa-solid fa-check-double"></i>
                <span>Approval Request</span></a>
        </li>

          <!-- Nav Item - Users -->
          <li class="nav-item">
            <a class="nav-link" href= "{{route('users.index')}}">
                <i class="fas fa-solid fa-users"></i>
                <span>Users</span></a>
        </li>


    </ul>
    <!-- End of Sidebar -->
