
        <div class="listing  ">

          <ul class="nav md-pills pills-secondary d-flex flex-column">
            <div class="user-name">
              <i class="bx bxs-user-circle"></i> <br>
              <span>{{ Auth::user()->name }}</span>

            </div>

            <li class="nav-item ">
              <a class="nav-link" data-toggle="tab" href="{{ url('customer/dashboard') }}" role="tab">
                <i class="bx bxs-user-account"></i>
                User Profile</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{ url('customer/course-purchase-list') }}">
                <i class="bx bx-package"></i>
                Course purchase List</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{ url('customer/transaction-list') }}">
                <i class="bx bx-package"></i>
                Loan Transaction List</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('customer/course-transaction-list') }}">
                <i class="bx bx-package"></i>
                Course Transaction List</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('customer/logout') }}" onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();"><i class="bx bx-log-out"></i>Logout</a>
              <form id="logout-form" action="{{ url('customer/logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>

        </div>
       