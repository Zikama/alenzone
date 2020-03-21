<div class="col">

    <div class="card-4">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/plyr/plyr.css">

        <div class="plyr__video-embed" id="player">
            <iframe height="500" src="<?= get_phrase('home_banner_video') ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay" poster="<?= get_phrase('home_banner_poster') ?>">
                <style>
                    iframe .ytp-chrome-top,
                    iframe .ytp-chrome-bottom {
                        opacity: 0 !important;
                    }
                </style>
            </iframe>
        </div>

        <script src="<?php echo base_url(); ?>assets/global/plyr/plyr.js"></script>
        <script>
            const player = new Plyr('#player');
        </script>
    </div>

</div>