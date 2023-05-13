</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('assets/js/combining.js')}}"></script>
<!-- CONTACT JS  -->
<script src="{{ asset('assets/js/jquery.lazy.min.js.download')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('assets/js/jquery.themepunch.tools.min.js.download')}}"></script>
<script src="{{ asset('assets/js/jquery.themepunch.revolution.min.js.download')}}"></script>
<script src="{{ asset('assets/js/rev.slider.js.download')}}"></script>
<script src="{{ asset('assets/js/demo.js')}}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/anime.min.js')}}" defer="defer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{ asset('assets/js/typeahead.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $('.search_icon .spinner-border').css("display", "none");
        $('.search_icon .ti-search').css("display", "block");
        $('.searchbar , .dlab-quik-search').on('keyup focus','.global_search_input',function(){
            var tt = $(this).parent().parent().find('.result-search-list');
            var query = $(this).val();
            if(query != ''){
                $('.search_icon .spinner-border').css("display", "inline-block");
                 $('.search_icon .ti-search').css("display", "none");
                $.ajax({
                    url:"{{route('autoComplete')}}",
                    method:"get",
                    data : {query:query},
                    success:function(data){
                            $('.search_icon .spinner-border').css("display", "none");
                            $('.search_icon .ti-search').css("display", "block");
                            $('.result-search-list').fadeIn();
                             $(tt).html(data);
                    },
                    complete: function(){
                        $('.search_icon .spinner-border').css("display", "none");
                         $('.search_icon .ti-search').css("display", "block");
                    }
                });
            }else{
                $('.result-search-list').fadeOut();
            }
        });

        $(document).on('click', '.result-search-list .search_ul_list li', function(){
        $('.global_search_input').val($(this).text());
        $('.result-search-list').fadeOut();
         });

         $(document).on('click', '.result-search-list .search_ul_list li', function(){
        $('.global_search_input').val($(this).text());
        $('.result-search-list').fadeOut();
         });

        $(document).on('click', '.searchbar', function(e){
          e.stopPropagation();
        });
        $(document).click(function(){
            $('.result-search-list').fadeOut();
        });
    });
</script>
<script type="text/javascript">

    function toggleBtn() {
        const Btns = document.querySelector(".btns");
        const add = document.getElementById("add");
        const remove = document.getElementById("remove");
        const btn = document.querySelector(".btns").querySelectorAll("a");
        Btns.classList.toggle("open");
        if (Btns.classList.contains("open")) {
            remove.style.display = "block";
            add.style.display = "none";
            btn.forEach((e, i) => {
                setTimeout(() => {
                    bottom = 40 * i;
                    e.style.bottom = bottom + "px";
                    console.log(e);
                }, 100 * i);
            });
        } else {
            add.style.display = "block";
            remove.style.display = "none";
            btn.forEach((e, i) => {
                e.style.bottom = "0px";
            });
        }
    }

</script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
@stack('custom-scripts')
</body>

</html>
