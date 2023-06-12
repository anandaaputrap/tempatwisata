<script src="{{ asset('assets2') }}/js/jquery.min.js"></script>

<script src="{{ asset('assets2') }}/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('assets2') }}/js/bootstrap-datepicker.min.js"></script>

<script src="{{ asset('assets2') }}/js/jquery.nice-select.min.js"></script>

<script src="{{ asset('assets2') }}/js/jquery.magnific-popup.min.js"></script>

<script src="{{ asset('assets2') }}/js/jquery.filterizr.min.js"></script>

<script src="{{ asset('assets2') }}/js/owl.carousel.min.js"></script>

<script src="{{ asset('assets2') }}/js/meanmenu.min.js"></script>

<script src="{{ asset('assets2') }}/js/form-validator.min.js"></script>

<script src="{{ asset('assets2') }}/js/contact-form-script.js"></script>

<script src="{{ asset('assets2') }}/js/jquery.ajaxchimp.min.js"></script>

<script src="{{ asset('assets2') }}/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>

$(document).ready(function(){
    $("a.submit").click(function(){
        document.getElementById("myForm").submit();
    }); 
});

    @if($message = session('success'))
    Swal.fire(
      'Good job!',
      '{{ $message }}',
      'success'
    )
    @endif

    @if($message = session('errors'))

    @endif

@if ($errors->any())
    Swal.fire({
  icon: 'error',
  title: 'Something went wrong!',
  text: @foreach ($errors->all() as $error)
                    {{ $error }}
             @endforeach,
  footer: '<a href="">Why do I have this issue?</a>'
})
@endif
</script>

@stack('js')
