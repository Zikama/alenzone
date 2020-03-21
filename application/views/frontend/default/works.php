<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/works/css/style.css' ?>" type="text/css" media="all">
<section class="our_works d-flex flex-wrap">
    <div class="works_title_container ml-auto mr-auto">
        <p>Iga ubuhanga buhambaye bujyane nurwego rw'isi mamasomo yombi twigisha.</p>
        <h3>Works Done By Our Finalists</h3>
        <p>Tugamije Guca ikintu cyo gupapira ku isoko ry'umurimo nyarwanda.</p>
        <p>Duha abanyarwanda uburyo bwo kwiga ubuhanga bujyanye naho isoko mpuzamahanga rijyeze.</p>
        <div class="card-md-4 art_works_img"></div>
    </div>

    <script>
        var _img_names = ['IMG_20190728_125733_499', 'Picture1RR', 'campion hostels - Picture1', , 'campion hostels - Picture2', 'complex building 1.pln 22 - Picture1', 'IHIRWE PACIFIC', 'IMG_20190728_053609_053', 'IMG_20190728_125733_499', 'IMG_20190814_103702', 'IMG-20190220-WA0072', 'MUGISHA JANVIER', 'Picture1', 'Picture1H', 'Picture1TT', 'Picture3', 'Picture15R', 'residential house 1 - Picture4', 'Shell 2 - Picture6', 'stadium 1 - Picture1', 'TWISTED TOWER - Picture3', 'VIP hotel - Picture2', 'winter hotel  - Pic4', ];
        loadImage(_img_names);

        function loadImage(img_names) {
            if (typeof img_names === 'object') {
                img_names.forEach(function(img_name) {
                    var art_works_img = document.querySelector('.art_works_img');
                    var content = '<div class="art-md art_act_none">';
                    content += '<div>';
                    content += '<img id="" src="<?php echo base_url() ?>assets/frontend/default/works/imgs/' +
                        img_name + '.jpg "/>';
                    img_name += '</div> </div> ';
                    art_works_img.innerHTML += content;
                })
            }
        }
    </script>
</section>
<?php
include_once 'footer_bottom.php';

?>