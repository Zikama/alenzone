<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="favicon" href="<?php echo base_url() . 'assets/frontend/default/img/icons/favicon.ico' ?>">
<link rel="apple-touch-icon" href="<?php echo base_url() . 'assets/frontend/default/img/icons/icon.png'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/jquery.webui-popover.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/select2.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/slick.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/slick-theme.css'; ?>">
<!-- font awesome 5 -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/fontawesome-all.min.css'; ?>">

<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/bootstrap-tagsinput.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/main.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/responsive.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/audi-iconfont.css'; ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,&display=swap" rel="stylesheet">
<!-- <link href="<?php echo base_url() . 'assets/frontend/default/css/nta.css'; ?>" rel="stylesheet"> -->

<link rel="stylesheet" href="<?php echo base_url() . 'assets/global/toastr/toastr.css' ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css" />
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/css/nta.css' ?>" type="text/css">
<!-- Scripts -->
<script src="<?php echo base_url('assets/backend/js/jquery-3.3.1.min.js'); ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
<!-- BEGIN SHAREAHOLIC CODE -->
<link rel="preload" href="https://cdn.shareaholic.net/assets/pub/shareaholic.js" as="script" />
<meta name="shareaholic:site_id" content="47c2d715c6a08c1d053384da3f8e52ae" />
<script data-cfasync="false" async src="https://cdn.shareaholic.net/assets/pub/shareaholic.js"></script>
<!-- END SHAREAHOLIC CODE -->

<script>
    var shr_badge = document.querySelector('#shr-admin-badge');
    var sh_social_share_networ_ = document.querySelector('.sh-social-share-networ');
    var sh_social_share_ = document.querySelector('.sh-social-share');
    var interV;
    interV = setInterval(() => {
        if (shr_badge) {
            shr_badge.remove();
            if (sh_social_share_networ_) {
                sh_social_share_networ_.classList.add('sh-social-share-networ_');
            } else {
                sh_social_share_networ_ = document.querySelector('.sh-social-share-networ');
            }
            if (sh_social_share_) {
                sh_social_share_.classList.add('sh-social-share_');
                clearInterval(interV);
            } else {
                sh_social_share_ = document.querySelector('.sh-social-share');
            }
        } else {
            shr_badge = document.querySelector('#shr-admin-badge')
        }

    }, 100);
</script>
<style>
    .carousel-inner>.item {
        max-height: 92vh;
    }

    .carousel-inner .item::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        /* background: rgba(0, 188, 212, 0.34); */
        background: rgba(41, 89, 140, 0.15);
        z-index: 1;
    }

    .carousel-inner .carousel-caption {
        z-index: 1;
        right: 20%;
        left: 20%;
        width: 50%;
    }

    .carousel-inner .carousel-caption h3 {
        font-weight: 800;
    }

    .carousel-caption .btn-register {
        text-shadow: none;
        background-color: white;
        border: 0;
        color: #10839e;
        padding: 10px 40px;
        font-size: 15pt;
        border-radius: 5px;
    }

    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #000\9;
        background-color: rgb(255, 255, 255);
        border: 1px solid #fff;
        border-radius: 10px;
    }

    .carousel-indicators .active {
        width: 12px;
        height: 12px;
        margin: 0;
        background-color: rgba(3, 38, 53, 0.43);
        border-color: rgba(42, 57, 64, 0.14);
    }

    #slide-one-description,
    #slide-two-description,
    #slide-three-description {
        margin-top: 25px;
    }

    @media screen and (min-width:320px) {
        .carousel-inner .carousel-caption {
            z-index: 1;
            right: 0%;
            left: 0%;
            width: 95%;
        }

        .carousel-inner>.item {
            max-height: 34vh;
            overflow: hidden;
        }

        .carousel-inner .carousel-caption h3 {
            font-weight: 100;
            font-size: 1rem;
            text-shadow: none;
            display: none
        }

        .carousel-caption .btn-register {
            display: none
        }
    }

    @media screen and (min-width:768px) {
        .carousel-inner .carousel-caption {
            z-index: 1;
            right: 0%;
            left: 0%;
            width: 95%;
        }

        .carousel-inner>.item {
            max-height: 54vh;
        }

        .carousel-inner .carousel-caption h3 {
            font-weight: 800;
            font-size: 1.75rem;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.84);
            display: initial
        }

        .carousel-caption .btn-register {
            display: initial
        }
    }

    @media screen and (min-width:1024px) {
        .carousel-inner .carousel-caption {
            z-index: 1;
            right: 20%;
            left: 20%;
            width: 50%;
        }

        .carousel-inner>.item {
            max-height: 92vh;
        }
    }
</style>