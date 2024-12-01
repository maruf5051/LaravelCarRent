  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar">
      <div class="sidebar-header">
          <a href="#" class="sidebar-brand">
              RENTA<span>CAR</span>
          </a>
          <div class="sidebar-toggler not-active">
              <span></span>
              <span></span>
              <span></span>
          </div>
      </div>
      <div class="sidebar-body">
          <ul class="nav">
              <li class="nav-item nav-category">Main</li>
              <li class="nav-item">
                  <a href="{{route('admin.dashboard')}}" class="nav-link">
                      <i class="link-icon" data-feather="box"></i>
                      <span class="link-title">Dashboard</span>
                  </a>
              </li>
              <li class="nav-item nav-category">web apps</li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#cars" role="button" aria-expanded="false" aria-controls="emails">
                      <i class="link-icon" data-feather="mail"></i>
                      <span class="link-title">Manage Cars</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="cars">
                      <ul class="nav sub-menu">
                          <li class="nav-item">
                              <a href="{{route('all.car')}}" class="nav-link">All Car</a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('add.car')}}" class="nav-link">Add Car</a>
                          </li>

                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#rentals" role="button" aria-expanded="false" aria-controls="emails">
                      <i class="link-icon" data-feather="mail"></i>
                      <span class="link-title">Manage Rentals</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="rentals">
                      <ul class="nav sub-menu">
                          <li class="nav-item">
                              <a href="{{route('all.Rental')}}" class="nav-link">All Rentals</a>
                          </li>


                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#customer" role="button" aria-expanded="false" aria-controls="emails">
                      <i class="link-icon" data-feather="mail"></i>
                      <span class="link-title">Manage Customer</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="customer">
                      <ul class="nav sub-menu">
                          <li class="nav-item">
                              <a href="{{route('all.Customer')}}" class="nav-link">All Customer</a>
                          </li>


                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="pages/apps/chat.html" class="nav-link">
                      <i class="link-icon" data-feather="message-square"></i>
                      <span class="link-title">Chat</span>
                  </a>
              </li>



              <li class="nav-item nav-category">Docs</li>
              <li class="nav-item">
                  <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                      <i class="link-icon" data-feather="hash"></i>
                      <span class="link-title">Documentation</span>
                  </a>
              </li>
          </ul>
      </div>
  </nav>