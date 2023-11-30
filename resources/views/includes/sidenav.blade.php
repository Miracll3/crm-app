<div class="col-12 col-sm-4 col-md-4 col-lg-2 sidebar-dropshadow px-0" id="Sidenav">
    <div class="pt-5 ps-5">
        <div class="py-3">
            <a href="{{route('client.index')}}" class="text-white {{Request::is('client.index') ? 'fw-bold' : 'fw-bold'}}">
                <span class="me-2"><i class="bi bi-people-fill text-white"></i></span>
                Clients
            </a>
        </div>
        {{-- <div class="py-3">
            <a href="#" class="text-white">Other page</a>
        </div> --}}
    </div>
</div>

<script>
    //toggle sidenav
    function collapseSidenav() {
            var sidenav = $('#Sidenav');
            var body = $('.main-body-col');

            if (!$(sidenav).hasClass('w-0')) {
                $(sidenav).addClass('w-0');
                
                if($(window).width() < 576){
                    $(body).show();
                    // $(sidenav).removeClass('w-0');
                }

            } else {
                $(sidenav).removeClass('w-0');
                
                if($(window).width() < 576){
                    $(body).hide();
                    // $(sidenav).addClass('w-0');
                }

            }
    }
    $(document).ready(function () {
        $(window).on('load resize', function(){
            if($(window).width() > 576){
                $(".main-body-col").show();
                $('#Sidenav').removeClass('w-0');
            }else{
                $('#Sidenav').addClass('w-0');
            }
        });
    });
</script>

<style>
    #Sidenav{
        background: #731f08;
        box-shadow: 0px 4px 17px rgba(5, 49, 70, 0.09);
        max-width: 240px;
        transition: all 0.3s ease-in-out;
    }
    
    #Sidenav a:hover{
        opacity: 1;
    }
    #Sidenav a{
        font-size: 17px;
        /* opacity: .5; */
        transition: all 0.3s ease-in-out;
    }
    #Sidenav a.active{
        font-weight: 600;
        opacity: 1;
    }
    footer, footer a{
        color: #8E8E8E;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }
    footer a:hover{
        color: #000;
        text-decoration: underline;
    }
    .main-body-col{
        min-width: calc(100% - 240px); /* 100% - (sidebar width) */
        min-height: calc(100vh - 130px) !important; /* 100vh - (footer height + top-nav height) */
        transition: all 0.3s ease-in-out;
    }
    body{
        overflow-x: hidden;
        width: 100%;
        position: relative;
    }
    
    /* `md` applies to small devices (landscape phones, less than 768px) */
    @media (max-width: 767.98px) {
        #Sidenav{
            max-width: unset;
            min-height: calc(100vh - 130px);
        }
    }
    @media (min-width: 767.98px) {
        .w-md-100{width: 100% !important}
    }
</style>