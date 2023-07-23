<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="../../index3.html" class="brand-link">
    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    
    <div class="sidebar">
    
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
    <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="#" class="d-block">Alexander Pierce</a>
    </div>
    </div>
    
    <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
    <button class="btn btn-sidebar">
    <i class="fas fa-search fa-fw"></i>
    </button>
    </div>
    </div>
    </div>
    
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
    <li class="nav-item">
    <a href="{{route('dashboard')}}" class="nav-link">
    <i class="nav-icon fa-solid fa-gauge fa-lg"></i>
  
    <p> Dashboard</p>
    </a>
    </li>



        <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Categories
            <i class="right fas fa-angle-left"></i> 
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
            <p>All Category</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{route('category.create')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add Category</p>
            </a>
            </li>
            
         
            </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                SubCategories
                <i class="right fas fa-angle-left"></i> 
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('subcategory.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                <p>All SubCategory</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('subcategory.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add SubCategory</p>
                </a>
                </li>
                
             
                </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Posts
                    <i class="right fas fa-angle-left"></i> 
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{route('post.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                    <p>Create Post</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('post.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Post</p>
                    </a>
                    </li>
                    
                 
                    </ul>
                    </li>


    <li class="nav-item">
        <a href="#" class="nav-link" onclick="document.getElementById('form-logout').submit()">
        <i class="nav-icon fa-solid fa-right-from-bracket"></i>
      
        
        <p>
        Logout
        <form action="{{route('logout')}}" method="POST" id="form-logout">
        @csrf
        </form>
        </p>
        </a>
        </li>
    </ul>
    </nav>
    </div>
    
    </aside>