<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="active">
                <a href="{{route('dashboard')}}"><img src="{{asset('assets/img/icons/dashboard.svg')}}" alt="img"><span> Dashboard</span> </a>
            </li>
       
            <li class="submenu">
                <a href="javascript:void(0);"><i class="fa fa-square-o" aria-hidden="true"></i><span>Blog</span><span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="{{route('addblog')}}">Add Blog</a></li>
                    <li><a href="{{route('blog_list')}}">Blog List</a></li>
                </ul>   
            </li>
            
            {{-- <li class="submenu">
                <a href="#"><img src="{{asset('assets/img/icons/users1.svg')}}" alt="img"><span>About</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="{{route('admin.about.create')}}">Add About </a></li>
                    <li><a href="{{route('admin.about.index')}}">About List</a></li>
                </ul>
            </li> --}}
            <li class="submenu">
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span>Testimonial</span> <span class="menu-arrow"></span></a>
                <ul> 
                    <li><a href="{{route('admin.testimonials.create')}}">Add Testimonials</a></li>
                    <li><a href="{{route('admin.testimonials.index')}}">Testimonials List</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><i class="fa fa-question-circle" aria-hidden="true"></i><span> FAQ</span><span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="{{route('general_setting')}}">Add FAQ</a></li>
                    
                <li><a href="{{route('setting_list')}}">FAQ List</a></li>
                </ul>   
            </li>
        
            <li class="submenu">
                <a href="#"><img src="{{asset('assets/img/icons/purchase1.svg')}}" alt="img"><span>Contact-Us</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="{{route('contact_list')}}">Contact View Details</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#"><img src="{{asset('assets/img/icons/purchase1.svg')}}" alt="img"><span>Costumer-Details</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="{{route('customer_list')}}"> View Costumer Details</a></li>
                </ul>
            </li>
        </ul>
      </div>
    </div>
  </div>
