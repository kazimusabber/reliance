<div class="col-md-12 short_menu" >
                    <a style="padding: 10px;font-weight: 700;color: #ffffff" class="{!!  Request::is('payment') ? 'current-menu-item current_page_item' : ''  !!}" href="{!!  url('payment')!!}">Payment</a>
                     <a style="padding: 10px;font-weight: 700;color: #ffffff" class="{!!  Request::is('home') ? 'current-menu-item current_page_item' : ''  !!}" href="{!!  url('home')!!}">History</a>
                     <a style="padding: 10px;font-weight: 700;color: #ffffff" class="{!!  Request::is('form-four') ? 'current-menu-item current_page_item' : ''  !!}" class="student_admin" href="{{url('form-four')}}">Profile</a>
                     <a style="padding: 10px;font-weight: 700;color: #ffffff" href="{!!  url('logout')!!}">Logout</a>
                 
                </div>