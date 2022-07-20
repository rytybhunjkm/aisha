      <!-- Left Panel -->
      <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                  <div id="main-menu" class="main-menu collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                              <li class="active">
                                    <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                              </li>
                              <li class="menu-title">UI elements</li><!-- /.menu-title -->

                              <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                                     <i class="menu-icon fa fa-cogs"></i>الجداول</a>
                                    <ul class="sub-menu children dropdown-menu">
                                          <li>
                                                <i class="fa fa-puzzle-piece"></i>
                                                <a href="{{route('admin.teacher.index')}}">المُعلِّمين</a>
                                          </li>
                                          <li>
                                                <i class="fa fa-puzzle-piece"></i>
                                                <a href="{{route('admin.student.index')}}">الطلاب</a>
                                          </li>
                                          <li>
                                                <i class="fa fa-puzzle-piece"></i>
                                                <a href="{{route('admin.user.index')}}">المستخدمين</a>
                                          </li>
                                          <li>
                                                <i class="fa fa-puzzle-piece"></i>
                                                <a href="{{route('admin.group.index')}}">المجموعات</a>
                                          </li>
                                          <li>
                                                <i class="fa fa-puzzle-piece"></i>
                                                <a href="{{route('admin.exam.index')}}">الاختبارات</a>
                                          </li>
                                          <li>
                                                <i class="fa fa-puzzle-piece"></i>
                                                <a href="{{route('admin.attend.index')}}">الحضور</a>
                                          </li>
                                          <li>
                                                <i class="fa fa-puzzle-piece"></i>
                                                <a href="{{route('admin.Payment.index')}}">المدفوعات</a>
                                          </li>
                                          <li>
                                                <i class="fa fa-puzzle-piece"></i>
                                                <a href="{{route('admin.examstudent.index')}}">إختبارات الطلاب</a>
                                          </li>
                                          <li>
                                                <i class="fa fa-puzzle-piece"></i>
                                                <a href="{{route('admin.lesson.index')}}"> الدروس</a>
                                          </li>
                                    </ul>
                              </li>
                        </ul>
                  </div><!-- /.navbar-collapse -->
            </nav>
      </aside>
      <!-- /#left-panel -->
