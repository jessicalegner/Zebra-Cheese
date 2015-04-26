<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li class="@yield('dashboard.class')"><a href="{{ URL::route('dash'); }}"> <i class="fa fa-home"></i> Dashboard</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li class="nav-header">Admin</li>
    <li class="@yield('manage.devices.class')"><a href="{{ URL::route('manage.devices'); }}"><i class="fa fa-mobile"></i> Manage Devices</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li class="nav-header">Intake</li>
    <li class="@yield('ticket.class')"><a href="{{ URL::route('createTicket'); }}"><i class="fa fa-briefcase"></i> New Work Ticket</a></li>
    <li><a href="#"><i class="fa fa-users"></i> Customers</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li><a href="">Nav item</a></li>
    <li><a href="">Nav item again</a></li>
    <li><a href="">One more nav</a></li>
    <li><a href="">Another nav item</a></li>
    <li><a href="">More navigation</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li><a href="">Nav item again</a></li>
    <li><a href="">One more nav</a></li>
    <li><a href="">Another nav item</a></li>
  </ul>
</div>