@auth
<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
        <h5>Info user</h5>
        <p>
            <a href="javascript:void(0)"><i class="fas fa-user-edit"></i> Profile</a>
        </p>
        <p>
            <a href="javascript:void(0)"><i class="fas fa-eye-slash"></i> Change password</a>
        </p>
        <p>
            <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('fLogout').submit()"><i
                    class="fas fa-user-lock"></i> Logout</a>
        <form action="{{ route('logout') }}" class="hidden" id="fLogout" method="POST">
            @csrf
        </form>
        </p>
    </div>
</aside>
@endauth

@auth
<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <strong>Copyright &copy; 2023 <a href="#"></a>.</strong> All rights
    reserved.
</footer>
@endauth
