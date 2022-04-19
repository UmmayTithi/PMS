<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
           <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li> 

          <li class="nav-item">
            <a class="nav-link {{Request::is('admin/category')? 'active' :''}}" href="{{route('admin.category.show')}}">
              <span data-feather="shopping-cart"></span>
              Category
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('admin/generic')? 'active' :''}}" href="{{route('admin.generic.show')}}">
              <span data-feather="shopping-cart"></span>
              Generic
            </a>
          </li>
          
          
          
          <li class="nav-item">
            <a class="nav-link {{Request::is('admin/product')? 'active' :''}}" href="{{route('admin.product.show')}}">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link {{Request::is('admin/customer')? 'active' :''}}" href="{{route('admin.customer.show')}}">
              <span data-feather="users"></span>
              Customers
            </a>
          </li> 
           <li class="nav-item">
            <a class="nav-link {{Request::is('admin/order')? 'active' :''}}" href="{{route('admin.order.show')}}">
              <span data-feather="bar-chart-2"></span>
              Order
            </a>
          </li> 

          <li class="nav-item">
            <a class="nav-link {{Request::is('admin/payment')? 'active' :''}}" href="#">
              <span data-feather="payment"></span>
            Payment
            </a>
          </li> 
        </ul>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
  <!-- <span>Saved reports</span>
  <a class="link-secondary" href="#" aria-label="Add a new report">
    <span data-feather="plus-circle"></span> -->
  </a>
</h6>
<ul class="nav flex-column mb-2">
  <!-- <li class="nav-item">
    <a class="nav-link" href="#">
      <span data-feather="file-text"></span>
      Current month
    </a>
  </li> -->
  <!-- <li class="nav-item">
    <a class="nav-link" href="#">
      <span data-feather="file-text"></span>
      Last quarter
    </a>
  </li> -->
  <!-- <li class="nav-item">
    <a class="nav-link" href="#">
      <span data-feather="file-text"></span>
      Social engagement
    </a>
  </li> -->
  <!-- <li class="nav-item">
    <a class="nav-link" href="#">
      <span data-feather="file-text"></span>
      Year-end sale
    </a>
  </li> -->
</ul>
</div>
</nav>  
         