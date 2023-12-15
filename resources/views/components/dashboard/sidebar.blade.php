<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('dashboard_assets') }}/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a class="js-arrow" href="{{ route('dashboard.index' )}}">
                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('patients.index' )}}">
                        <i class="fas fa-table"></i>Patient</a>
                </li>
                <li>
                    <a href="{{ route('doctors.index' )}}">
                        <i class="fas fa-table"></i>Doctor</a>
                </li>
                <li>
                    <a href="{{ route('departments.index' )}}">
                        <i class="fas fa-table"></i>Department</a>
                </li>
                <li>
                    <a href="{{ route('treatments.index' )}}">
                        <i class="fas fa-table"></i>Treatment</a>
                </li>
                <li>
                    <a href="{{ route('appointments.index' )}}">
                        <i class="fas fa-table"></i>Appointment</a>
                </li>
                <li>
                    <a href="{{ route('medical_records.index' )}}">
                        <i class="fas fa-table"></i>Medical Record</a>
                </li>
                <li>
                    <a href="{{ route('medications.index' )}}">
                        <i class="fas fa-table"></i>Medication</a>
                </li>
                <li>
                    <a href="{{ route('surgeries.index' )}}">
                        <i class="fas fa-table"></i>Surgery</a>
                </li>
                <li>
                    <a href="{{ route('invoices.index' )}}">
                        <i class="fas fa-table"></i>Invoice</a>
                </li>
                <li>
                    <a href="{{ route('contacts.index' )}}">
                        <i class="fas fa-table"></i>Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
