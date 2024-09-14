<script type="text/javascript" src="<?php echo $assets_url; ?>/assets/js/bootstrap.bundle.js" defer></script>
    <script type="text/javascript" src="<?php echo $assets_url; ?>/assets/js/social-emotional-learning.js" defer></script>    
    <script type="text/javascript" src="<?php echo $assets_url; ?>/assets/js/social-skills.js" defer></script>

    <script type="text/javascript" defer>
         $(function(){ 
            $(".tns-controls button[data-controls='prev']").attr("aria-label", "prev");
            $(".tns-controls button[data-controls='next']").attr("aria-label", "next");
        });

        // document.onreadystatechange = function () {
        //     if (document.readyState !== "complete") {
        //         document.getElementById("package-worksheets").style.visibility = "hidden";
        //     } else {
        //         setTimeout(() => {
        //         document.getElementById("package-worksheets").style.display ="block";
        //         }, 3000)
        //     }
        // };
    </script>
    
    <script>
        document.addEventListener('click', function(e) {
            if (e.target.closest('.fa-shopping-cart')) {
            gtag('event', 'conversion', {
                'send_to': 'AW-11319103058/SBPgCN7Q4OUYENKcr5Uq'
            });
            }

            if (e.target.closest('.buy-btn')) {
            gtag('event', 'conversion', {
                'send_to': 'AW-11319103058/SBPgCN7Q4OUYENKcr5Uq'
            });
            }
        })
    </script>
	
 
