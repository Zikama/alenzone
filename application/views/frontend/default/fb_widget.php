 <script>
     window.fbAsyncInit =
         function() {
             FB.init({
                 appId: '3377346628971961',
                 xfbml: true,
                 version: 'v5.0'
             });
             FB.AppEvents.logPageView();
         };

     (function(d, s, id) {
         var styleList =
             "<style>._2lqg {max-width: 0!important;max-height: 0!important;overflow: hidden!important;}._1drm._1ds3._1drn {border: 2 px solid transparent !important;box-shadow: 0 1px 6px rgba(0, 0, 0, .5)!important;border-radius: 5rem !important;}</style>";

         var js, fjs = d.getElementsByTagName(s)[0];

         if (d.getElementById(id)) {
             return;
         }


         js = d.createElement(s);
         js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";

         fjs.parentNode.insertBefore(js, fjs);


         d.head.insertAdjacentText('beforeEnd', styleList);
         // fjs.parentNode.insertBefore(style, fjs);
         setTimeout(() => {

             var iframe = d.querySelector('[title="fb:page Facebook Social Plugin"]');
             if (iframe) {
                 iframe.className = "art_custom_iframe";
             }
         }, 2000);

     }(document, 'script', 'facebook-jssdk'));
 </script>
 <div class="fb-page" data-href="https://facebook.com/nzizatrainingacademy" data-share="true" data-width="540" data-show-faces="true">
 </div>

 <!-- 
 <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
 <a class="twitter-timeline" data-height="200" data-theme="dark" href="https://<?php echo strtolower(get_phrase('twitter.com/AcademyNziza')); ?>?ref_src=twsrc%5Etfw" data-tweet-limit="1" data-aria-polite="assertive" data-chrome="noheader nofooter transparent noborders" data-dnt="true" data-link-color="#fff" data-height="100"></a>
 <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
 -->
 <script>
     // setTimeout(autoRun, 5000);

     function autoRun(d = document, s = 'script', id = 'twitter-widget-0') {
         d = d.documentElement || document;
         if (!d) {
             console.error('No document provided, please check again');
             return;
         }

         var iframe = document.getElementById(id);

         if (!iframe) {
             console.error('Error: no iframe provided');
             return;
         }
         // var url = "<?php echo base_url(); ?>assets/frontend/default/js/custom_twiter.js";
         // var doc = iframe.contentWindow.document;
         // doc.open().write('<body onload="' + 'var js = document.createElement(\'script\');' + 'js.src = \'' + "url" +
         //     '\';' + 'document.body.appendChild(js);">');
         // doc.close();
         // console.log(url);


     }
 </script>