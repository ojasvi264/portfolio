<?php //
//$config = App\Backend\SiteConfiguration::first();
//?>
<footer class="main-footer d-flex p-2 px-3 bg-white border-top">
  <ul class="nav">
    <li class="nav-item">
    <a class="nav-link" href="{{ url('admin') }}">Dashboard</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Group</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Category</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">News</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Tag</a>
    </li>
  </ul>
  <span class="copyright ml-auto my-auto mr-2">Copyright © <script>document.write(new Date().getFullYear())</script> Portfolio
    <a href="{{url('/')}}" rel="nofollow">
{{--        {{$config->name_en ?? ''}}--}}
    </a>
  </span>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script> --}}
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="{{asset('backend/scripts/extras.1.1.0.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@yield('js')
<script type="text/javascript">
  $(function($) {
    let url = '{{url()->current()}}';
    $('.nav-item a').removeClass('active');
    $('.nav-item a').each(function() {
      if (this.href === url) {
        $(this).addClass('active');
        // if($(this).parents('.has-child').length > 0){
          $(this).parents('.collapse').addClass('show');
        // }
      }
    });
  });
  $(document).ready(function() {
    setTimeout(function() {
      $('.alert .close').click()
    }, 3000);
    $('#aboutus-table').DataTable();
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="{{asset('backend/scripts/app/app-blog-overview.1.1.0.js')}}"></script>

