<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default/contact_us/css/style.css' ?>" type="text/css" media="all">

<section class="contact_us d-flex flex-wrap">
    <div class="contact_us_title_container ml-auto mr-auto">
        <?php
        if (key_exists('success', $this->session->flashdata())) {
            ?>
            <div class="art_alert_success">
                <p><?php echo $this->session->flashdata('success') ?> </p>
            </div>
            <?php
            } else {
                if (key_exists('failure', $this->session->flashdata())) {
                    ?>
                <div class="art_alert_failure">
                    <p><?php echo $this->session->flashdata('failure') ?> </p>
                </div>
        <?php
            }
        }
        ?>

        <h3><?php echo get_phrase('get_in_touch'); ?></h3>
        <p><?php echo get_phrase('let’s_Talk!'); ?><br><?php echo get_phrase('We_are_here_to_help,'); ?> <?php echo get_phrase('anytime!'); ?></p>
        <form class="card-md-4 art_contact_us_img form-group" method="Post" action="<?php echo base_url() . 'home/contact/send'; ?>">

            <div class="art-md art_act_none">
                <div>
                    <input type="text" name="name" id="contact_name" placeholder=" <?php echo get_phrase('Your_name'); ?>" class="form-control mb-3 p-4" required>
                    <input type="email" name="email" id="contact_email" placeholder="<?php echo get_phrase('Your email_address'); ?>" class="form-control mb-3 p-4" required>
                    <input type="text" name="subject" id="contact_subject" placeholder="<?php echo get_phrase('Enter_the_reason_for_the_contact'); ?>" class="form-control mb-3 p-4" required>
                </div>
            </div>
            <div class="art-md art_act_none">
                <div>
                    <textarea type="text" name="message" id="contact_message" placeholder="<?php echo get_phrase('your_message'); ?>" class="form-control required"></textarea>
                </div>
            </div>

            <span>
                <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">
                    <?php echo get_phrase('submit'); ?>
                </button>
            </span>


        </form>
    </div>

    <script>
        var _img_names = ['IMG_20190728_125733_499', 'Picture1RR', 'campion hostels - Picture1', , 'campion hostels - Picture2', 'complex building 1.pln 22 - Picture1', 'IHIRWE PACIFIC', 'IMG_20190728_053609_053', 'IMG_20190728_125733_499', 'IMG_20190814_103702', 'IMG-20190220-WA0072', 'MUGISHA JANVIER', 'Picture1', 'Picture1H', 'Picture1TT', 'Picture3', 'Picture15R', 'residential house 1 - Picture4', 'Shell 2 - Picture6', 'stadium 1 - Picture1', 'TWISTED TOWER - Picture3', 'VIP hotel - Picture2', 'winter hotel  - Pic4'];
        loadImage(_img_names);

        function loadImage(img_names) {
            if (typeof img_names === 'object') {
                img_names.forEach(function(img_name) {
                    var art_contact_us_img = document.querySelector('.art_contact_us_img');
                    var content = '<div class="art-md art_act_none">';
                    content += '<div>';
                    content += '<img id="" src="<?php echo base_url() ?>assets/frontend/default/contact_us/imgs/' +
                        img_name + '.jpg "/>';
                    img_name += '</div> </div> ';
                    // art_contact_us_img.innerHTML += content;
                })
            }
        }
    </script>
</section>
<?php
include_once 'footer_bottom.php';

?>