<style>
       .swiper-slide {
    height: auto !important;
    min-height: 100% !important; 
}

</style>
<!-- add header to the page  -->
<?php get_template_part('template-parts/header'); ?>

<?php
// Query all posts of the 'blog_sections' custom post type
$about_sections = get_posts(array(
    'post_type' => 'about',
    'posts_per_page' => -1,
    'orderby' => 'menu_order', 
    'order' => 'DES',
));
?>
<!-- // Check if there are any about sections -->
<?php if (!empty($about_sections)): ?>
    <?php 
    $section_index = 0; 
    foreach ($about_sections as $section): 
     
        $section_title = get_the_title($section->ID);

        $repeater_data = get_post_meta($section->ID, '_repeater_data', true); 
    ?>
    
    <!-- Hero Section (ID=0) -->
    <?php if ($section_index == 0   ): ?>

        <!-- About Hero Section -->
<section class="min-h-[350px] relative overflow-hidden" style="background: linear-gradient(180deg, #276C76 0%, #BAD0B4 100%)">
    <!-- Airplane SVG centered and positioned -->
    <div class="absolute inset-0 flex justify-center items-start mt-2">
    <svg width="751" height="191" viewBox="0 0 751 191" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M502.67 115.627C499.996 118.302 500.762 117.989 494.54 116.032C489.084 114.179 491.672 113.565 486.788 116.542C482.389 119.321 475.207 122.088 471.865 124.242C473.116 127.218 483.823 136.98 486.41 140.987C485.451 141.497 484.685 141.913 483.639 142.423C482.011 143.245 482.399 143.245 480.48 142.018C476.275 139.447 462.775 131.225 460.101 129.998C456.565 131.642 447.184 136.783 443.939 136.575C442.408 136.471 439.917 136.065 440.402 134.004C441.642 128.967 450.063 126.199 455.519 123.629C457.719 122.598 457.147 122.702 457.621 120.131C458.204 117.364 461.837 97.226 462.689 96.1954C463.067 95.8827 466.032 94.551 466.614 94.2384C466.905 96.0912 467.088 98.1408 467.185 100.098L468.145 111.504C468.145 113.357 468.436 115.511 468.717 117.259C471.207 115.928 473.687 114.793 476.275 113.461C489.095 106.884 486.799 111.307 489.764 103.908C491.489 99.7968 491.489 97.3302 495.22 97.944C494.54 106.177 496.643 111.307 502.67 115.627ZM393.801 36.0023C397.251 37.1372 396.475 37.2414 401.262 32.5052C405.467 28.3943 402.89 29.008 408.529 29.5291C413.5 29.9344 421.156 29.2164 425.08 29.6333C425.177 32.8178 419.344 46.5865 418.579 51.4154C419.635 51.4154 420.487 51.4154 421.641 51.4154C423.463 51.4154 423.075 51.6238 424.412 49.6668C427.183 45.3474 435.992 31.683 437.998 29.4249C441.922 29.3207 452.349 29.5291 455.217 27.989C456.554 27.1668 458.657 25.5224 457.417 23.878C454.257 19.9756 445.556 21.3073 439.626 21.5157C437.232 21.5157 437.814 21.4115 436.272 19.3618C434.644 17.1037 423.355 0.555842 422.212 0.0463202C421.738 -0.0579002 418.482 0.0463202 417.91 0.0463202C418.298 1.89913 418.967 3.74035 419.635 5.59316L423.366 16.3742C424.034 18.0185 424.703 20.1724 425.188 21.8168C422.417 21.7126 419.635 21.8168 416.767 21.8168C402.61 21.8168 406.535 24.7929 400.788 19.4545C397.639 16.4784 396.68 14.3129 393.52 16.5826C397.348 23.6812 397.531 29.3207 393.801 36.0023ZM392.27 25.5224C393.704 25.314 394.189 27.6763 392.55 27.989L390.253 28.3016C388.819 28.6143 388.237 26.1477 389.865 25.8351L392.27 25.5224ZM189.087 189.913C188.321 191.557 186.219 190.318 186.887 188.882L187.459 187.55C188.224 186.01 190.327 187.238 189.561 188.685L189.087 189.913ZM192.721 181.795C191.955 183.335 189.853 182.212 190.618 180.66L191.675 178.402C192.343 176.862 194.446 178.089 193.777 179.525L192.721 181.795ZM197.023 172.751C196.354 174.187 194.155 173.156 194.92 171.616L196.063 169.358C196.732 167.922 198.834 168.953 198.166 170.597L197.023 172.751ZM201.616 163.915C200.754 165.456 198.748 164.02 199.514 162.676L200.754 160.418C201.616 158.878 203.525 160.314 202.759 161.646L201.616 163.915ZM206.403 155.184C205.541 156.62 203.535 155.288 204.398 153.852L205.638 151.699C206.404 150.263 208.506 151.594 207.643 153.03L206.403 155.184ZM211.471 146.557C210.706 147.889 208.603 146.661 209.466 145.225L210.803 143.071C211.568 141.74 213.671 142.967 212.711 144.507L211.471 146.557ZM216.733 138.231C215.773 139.563 213.962 138.022 214.825 136.691L216.161 134.641C217.121 133.309 219.03 134.85 218.07 136.181L216.733 138.231ZM222.275 130.009C221.315 131.341 219.504 129.801 220.453 128.469L221.887 126.419C222.847 125.088 224.658 126.732 223.698 127.959L222.275 130.009ZM227.828 122.308C226.965 122.818 225.92 121.996 226.006 120.977C225.909 120.363 226.383 119.541 227.062 119.437L227.828 118.406C228.788 117.178 230.696 118.719 229.65 120.05L229.456 120.363L229.834 120.467C231.365 121.081 230.405 123.443 228.971 122.829L227.828 122.308ZM234.243 114.295C233.09 115.534 231.472 113.785 232.518 112.546L234.049 110.694C235.192 109.362 236.82 111.203 235.775 112.338L234.243 114.295ZM240.648 106.791C239.592 108.019 237.78 106.282 238.923 105.043L240.551 103.19C241.608 101.962 243.322 103.699 242.276 104.938L240.648 106.791ZM247.247 99.5999C246.007 100.735 244.476 98.7777 245.619 97.7471L247.247 95.9985C248.487 94.7595 250.018 96.7165 248.972 97.8513L247.247 99.5999ZM254.137 92.6171C252.983 93.752 251.366 91.8992 252.509 90.7644L254.331 89.0158C255.474 87.8809 257.102 89.8379 255.862 90.9728L254.137 92.6171ZM261.21 86.0397C260.154 87.0703 258.536 85.2175 259.776 84.0943L261.598 82.4499C262.935 81.315 264.272 83.4805 263.032 84.4069L261.21 86.0397ZM268.672 79.6707C267.335 80.7013 265.998 78.6401 267.238 77.7136L269.06 76.1735C270.397 75.1429 271.734 77.2041 270.494 78.1305L268.672 79.6707ZM276.23 73.707C275.087 74.6334 273.556 72.6763 274.893 71.6573C275.561 71.1478 276.23 70.6267 276.898 70.2214C278.041 69.295 279.573 71.252 278.236 72.271C277.578 72.7805 276.909 73.1974 276.23 73.707ZM284.08 68.0559C282.743 68.9823 281.589 66.7242 282.84 65.902L284.845 64.5703C286.182 63.6439 287.433 65.902 286.085 66.7242L284.08 68.0559ZM292.112 62.8217C290.872 63.6439 289.535 61.49 290.969 60.5636L293.072 59.3361C294.312 58.5139 295.649 60.6678 294.215 61.5942L292.112 62.8217ZM300.436 57.8886C298.905 58.7108 297.946 56.3485 299.283 55.6305L301.385 54.403C302.819 53.6851 303.876 56.0474 302.539 56.7654L300.436 57.8886ZM308.857 53.3724C307.52 54.0904 306.367 51.8323 307.801 51.0101C308.566 50.6974 309.235 50.2921 310 49.9795C311.337 49.2615 312.394 51.5196 310.96 52.2376C310.291 52.6429 309.526 52.9555 308.857 53.3724ZM317.462 49.1573C315.931 49.771 315.165 47.4087 316.502 46.7949L318.702 45.7643C320.233 45.1506 320.998 47.6055 319.564 48.1266L317.462 49.1573ZM326.174 45.3474C324.74 45.9612 323.877 43.5989 325.311 42.9851L327.608 42.0587C328.945 41.445 329.905 43.8073 328.373 44.421L326.174 45.3474ZM335.069 41.8618C333.635 42.3714 332.773 40.009 334.304 39.4995C335.069 39.1869 335.835 38.8858 336.6 38.6773C337.937 38.0636 338.8 40.4259 337.269 41.0397C336.503 41.3407 335.835 41.5492 335.069 41.8618ZM344.062 38.7816C342.434 39.1869 341.959 36.7319 343.393 36.315L345.69 35.597C347.221 35.1917 347.792 37.6467 346.261 38.0636L344.062 38.7816ZM353.151 36.0023C351.62 36.4192 351.049 33.9527 352.58 33.5358L354.876 32.9221C356.311 32.5167 356.979 34.9717 355.448 35.3886L353.151 36.0023ZM362.327 33.64C360.893 34.0453 360.127 31.5903 361.756 31.0692L364.149 30.5597C365.777 30.2471 366.069 32.8178 364.624 33.0263L362.327 33.64ZM371.514 31.4861C369.983 31.7988 369.605 29.3322 371.136 29.0196L373.433 28.6143C375.061 28.3016 375.438 30.7682 373.907 31.0808L371.514 31.4861ZM380.883 29.7375C379.352 30.0502 378.878 27.5837 380.506 27.271L382.803 26.8657C384.334 26.553 384.808 29.1238 383.18 29.4365L380.883 29.7375ZM62.3297 129.187C59.6449 131.862 60.4213 131.549 54.1998 129.5C48.744 127.751 51.3317 127.033 46.4473 130.113C42.0481 132.788 34.8671 135.66 31.5246 137.814C32.7645 140.79 43.4822 150.552 46.0699 154.559C45.1103 155.068 44.3448 155.381 43.2989 155.89C41.6707 156.817 42.0589 156.817 40.1397 155.578C35.9345 153.007 22.4458 144.681 19.761 143.558C16.2244 145.202 6.84376 150.344 3.59827 150.135C2.06718 150.031 -0.423548 149.521 0.0616581 147.46C1.30163 142.423 9.72264 139.655 15.1785 137.085C17.3781 136.054 16.8067 136.262 17.2811 133.692C17.8525 130.82 21.497 110.786 22.3488 109.756C22.6399 109.443 25.6913 108.007 26.2736 107.799C26.5647 109.651 26.7588 111.597 26.845 113.554L27.8046 125.064C27.8046 126.813 28.0958 129.071 28.3761 130.715C30.8668 129.476 33.3468 128.249 35.9345 127.021C48.7548 120.444 46.3611 124.868 49.4233 117.468C51.1484 113.357 51.0514 110.89 54.8791 111.504C54.1998 119.738 56.3024 124.879 62.3297 129.187ZM59.5587 119.02C58.1246 119.529 58.6961 121.891 60.3242 121.486L62.5238 120.664C63.8608 120.247 63.3864 117.792 61.7583 118.197L59.5587 119.02ZM308.76 174.291C310 175.426 311.337 173.365 310.194 172.346L309.235 171.524C307.898 170.389 306.561 172.45 307.704 173.481L308.76 174.291ZM302.162 168.64C303.402 169.671 304.836 167.714 303.693 166.683L301.784 165.039C300.544 164.008 299.11 166.069 300.35 167.088L302.162 168.64ZM294.7 162.48C295.843 163.51 297.374 161.553 296.134 160.43L294.226 158.89C292.986 157.963 291.455 159.92 292.792 160.951L294.7 162.48ZM287.045 156.516C288.382 157.546 289.632 155.288 288.382 154.466L286.376 153.03C285.039 152 283.788 154.269 285.039 155.08L287.045 156.516ZM279.195 150.865C280.532 151.791 281.783 149.637 280.532 148.711L278.527 147.379C277.19 146.453 275.853 148.514 277.19 149.44L279.195 150.865ZM271.259 145.422C272.499 146.244 273.836 144.195 272.402 143.268L270.397 141.937C269.157 141.114 267.82 143.164 269.157 144.09L271.259 145.422ZM263.032 140.281C264.563 141.103 265.523 138.845 264.272 138.023L262.17 136.795C260.736 135.973 259.679 138.231 261.027 139.053L263.032 140.281ZM254.805 135.452C256.24 136.17 257.199 133.912 255.862 133.194L253.76 131.955C252.326 131.237 251.269 133.495 252.703 134.213L254.805 135.452ZM246.287 130.936C247.721 131.653 248.778 129.395 247.333 128.573L245.231 127.543C243.894 126.825 242.74 128.978 244.174 129.801L246.287 130.936ZM237.78 126.72C239.311 127.334 240.077 124.972 238.643 124.358L236.443 123.327C235.009 122.714 234.146 125.076 235.581 125.69L237.78 126.72ZM220.173 119.321C221.801 119.83 222.275 117.364 220.938 116.958L218.641 116.136C217.013 115.627 216.539 118.093 217.876 118.499L220.173 119.321ZM211.18 116.24C212.614 116.75 213.283 114.283 211.849 113.774L209.552 113.056C208.021 112.639 207.352 115.106 208.883 115.522L211.18 116.24ZM202.091 113.577C203.428 113.982 204.29 111.632 202.662 111.11L200.365 110.497C198.64 110.091 198.36 112.651 199.794 112.963L202.091 113.577ZM192.915 111.215C194.446 111.527 194.823 109.061 193.389 108.748L190.996 108.239C189.464 107.926 188.99 110.393 190.51 110.705L192.915 111.215ZM183.631 109.362C185.065 109.675 185.637 107.208 184.009 106.791C183.243 106.687 182.38 106.478 181.615 106.386C180.181 106.073 179.609 108.54 181.237 108.957C182.003 109.049 182.866 109.153 183.631 109.362ZM174.261 107.822C175.889 108.03 176.084 105.459 174.552 105.355L172.256 105.043C170.628 104.834 170.434 107.405 171.965 107.509L174.261 107.822ZM164.881 106.791C166.412 106.895 166.703 104.429 165.075 104.22L162.681 104.012C161.247 103.803 160.87 106.374 162.584 106.583L164.881 106.791ZM155.511 106.073C157.139 106.177 157.042 103.607 155.608 103.607L153.214 103.502C151.586 103.398 151.586 105.969 153.117 105.969L155.511 106.073ZM146.033 105.865C147.564 105.865 147.661 103.294 146.033 103.294C145.268 103.294 144.405 103.294 143.639 103.294C142.205 103.294 142.011 105.865 143.639 105.865C144.513 105.865 145.268 105.865 146.033 105.865ZM136.566 106.073C138.291 105.865 138 103.398 136.469 103.502L134.173 103.607C132.544 103.711 132.738 106.282 134.27 106.177L136.566 106.073ZM127.196 106.583C128.727 106.478 128.533 103.908 127.002 104.012L124.609 104.22C123.077 104.325 123.272 106.895 124.803 106.791L127.196 106.583ZM117.816 107.509C119.25 107.405 119.153 104.834 117.525 105.043C116.759 105.147 115.896 105.251 115.131 105.355C113.697 105.459 113.794 108.03 115.422 107.822C116.188 107.718 116.953 107.613 117.816 107.509ZM108.446 108.841C110.074 108.528 109.503 106.073 108.068 106.374L105.664 106.687C104.133 107.104 104.607 109.57 106.041 109.258L108.446 108.841ZM99.0652 110.589C100.596 110.277 100.219 107.718 98.6878 108.019L96.2941 108.528C94.8601 108.841 95.2375 111.307 96.7686 110.995L99.0652 110.589ZM89.8786 112.546C91.3127 112.338 90.9353 109.779 89.3072 110.08L87.0105 110.694C85.3824 111.11 86.1479 113.565 87.582 113.16L89.8786 112.546ZM80.7029 115.013C82.2339 114.503 81.5654 112.037 80.0343 112.546L77.7377 113.16C76.2066 113.565 76.8751 116.032 78.4062 115.627L80.7029 115.013ZM71.5163 117.688C73.0474 117.283 72.4759 114.712 70.8478 115.221L68.6482 115.939C67.2141 116.345 67.6886 118.811 69.3167 118.406L71.5163 117.688ZM499.888 105.459C498.454 105.969 499.026 108.331 500.654 107.926L502.853 107.104C504.19 106.687 503.813 104.232 502.088 104.741L499.888 105.459ZM749.09 160.835C750.33 161.866 751.764 159.805 750.524 158.878L749.564 157.952C748.227 156.817 746.89 158.982 748.033 159.909L749.09 160.835ZM742.491 155.184C743.742 156.215 745.165 154.154 744.022 153.134L742.103 151.594C740.863 150.564 739.418 152.521 740.669 153.551L742.491 155.184ZM735.03 148.919C736.173 149.95 737.704 147.993 736.464 146.962L734.555 145.422C733.315 144.392 731.784 146.349 733.121 147.472L735.03 148.919ZM727.374 143.06C728.711 143.986 729.962 141.832 728.711 140.906L726.803 139.47C725.369 138.544 724.118 140.709 725.466 141.624L727.374 143.06ZM719.536 137.305C720.873 138.231 722.112 136.077 720.872 135.151L718.867 133.819C717.53 132.893 716.279 135.058 717.53 135.973L719.536 137.305ZM711.589 131.862C712.84 132.788 714.177 130.727 712.84 129.708L710.737 128.376C709.594 127.554 708.16 129.604 709.594 130.634L711.589 131.862ZM703.459 126.72C704.893 127.543 705.853 125.284 704.613 124.566L702.51 123.235C701.076 122.517 700.019 124.775 701.367 125.493L703.459 126.72ZM695.146 121.891C696.58 122.609 697.637 120.456 696.192 119.633L694.089 118.499C692.655 117.676 691.696 120.039 693.033 120.757L695.146 121.891ZM686.628 117.375C688.062 118.093 689.119 115.835 687.684 115.117L685.582 113.982C684.245 113.264 683.102 115.522 684.525 116.24L686.628 117.375ZM678.11 113.16C679.641 113.774 680.406 111.412 678.972 110.798L676.87 109.767C675.339 109.153 674.476 111.62 675.91 112.13L678.11 113.16ZM669.311 109.362C670.745 109.976 671.694 107.613 670.174 106.895L667.974 106.073C666.54 105.459 665.678 107.822 667.112 108.435L669.311 109.362ZM660.513 105.865C662.141 106.374 662.615 103.815 661.278 103.398L658.982 102.576C657.354 102.066 656.879 104.533 658.216 105.043L660.513 105.865ZM651.52 102.68C653.052 103.19 653.623 100.735 652.189 100.318L649.892 99.5999C648.361 99.0904 647.693 101.557 649.224 101.962L651.52 102.68ZM642.431 100.017C643.768 100.422 644.63 98.0598 643.002 97.5502L640.706 96.9365C638.981 96.5312 638.689 99.0904 640.134 99.4031L642.431 100.017ZM633.244 97.7471C634.776 98.0598 635.153 95.489 633.719 95.1763L631.325 94.6668C629.794 94.3542 629.406 96.8207 630.948 97.1334L633.244 97.7471ZM623.972 95.8017C625.406 96.1143 625.988 93.6478 624.349 93.3351C623.583 93.1267 622.818 93.0225 621.955 92.8256C620.618 92.6172 619.95 95.0837 621.578 95.3964C622.44 95.489 623.206 95.6974 623.972 95.8017ZM614.591 94.2615C616.219 94.47 616.413 92.0034 614.882 91.795L612.585 91.4823C610.957 91.2739 610.763 93.8446 612.294 93.9489L614.591 94.2615ZM605.221 93.2309C606.752 93.4393 607.033 90.8686 605.415 90.6601L603.021 90.4517C601.587 90.3475 601.199 92.814 602.924 93.0225L605.221 93.2309ZM595.84 92.6171C597.469 92.6171 597.371 90.0464 595.937 90.0464L593.544 89.9422C591.916 89.9422 591.916 92.4087 593.447 92.5129L595.84 92.6171ZM586.374 92.3045C587.905 92.3045 588.002 89.8379 586.374 89.7337C585.608 89.7337 584.745 89.7337 583.98 89.7337C582.546 89.7337 582.352 92.3045 583.98 92.3045C584.842 92.3045 585.608 92.3045 586.374 92.3045ZM576.907 92.5129C578.632 92.4087 578.341 89.8379 576.81 89.9422L574.513 90.0464C572.885 90.1506 573.079 92.7214 574.61 92.6171L576.907 92.5129ZM567.526 93.0225C569.057 92.9182 568.96 90.3475 567.332 90.5559L564.938 90.7644C563.407 90.8686 563.601 93.3351 565.132 93.2309L567.526 93.0225ZM558.156 94.0531C559.59 93.8446 559.493 91.2739 557.865 91.4823C557.099 91.5865 556.237 91.6908 555.471 91.795C554.037 91.8992 554.134 94.47 555.762 94.2615C556.528 94.1573 557.293 94.0531 558.156 94.0531ZM548.775 95.2806C550.404 94.9679 549.821 92.5129 548.398 92.814L546.004 93.2193C544.473 93.532 544.948 95.9985 546.382 95.6859L548.775 95.2806ZM539.395 97.0292C540.926 96.7165 540.549 94.2615 539.017 94.5626L536.635 94.9679C535.201 95.2806 535.578 97.8398 537.109 97.5387L539.395 97.0292ZM530.219 99.0904C531.653 98.7777 531.276 96.2185 529.648 96.6238L527.351 97.1334C525.723 97.6429 526.488 100.017 527.922 99.5999L530.219 99.0904ZM521.032 101.453C522.564 100.943 521.895 98.5809 520.461 98.9862L518.067 99.5999C516.536 100.109 517.205 102.472 518.736 102.066L521.032 101.453ZM511.943 104.116C513.377 103.711 512.805 101.244 511.274 101.65L508.978 102.368C507.544 102.773 508.018 105.344 509.646 104.834L511.943 104.116Z" fill="white" fill-opacity="0.5"/>
</svg>
    </div>

    <!-- Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative z-10">
        <h1 class="font-['Berkshire_Swash'] text-[#C8E677] text-[40px] md:text-6xl text-center">
        <?php echo esc_html(get_the_title($section->ID)); ?>
        </h1>
    </div>
</section>

<!-- About Content Section -->
<section class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
   
        <h2 class="text-[#095763] lg:text-4xl  sm:text-[18px] font-[500] mb-8 max-w-6xl">
       <?php   $content = get_post_field('post_content', $section->ID); ?>
   
   
    <?php if (!empty(trim($content))): ?>
        <?php echo strip_tags(apply_filters('the_content', $content)); ?>

        <?php else: ?>
<p class="d-none"> </p>
<?php endif; ?>
 
        </h2>

        <!-- Images Grid -->
        <div class="rounded-2xl overflow-hidden ">
            <div class="grid grid-cols-3 gap-0">
    <?php
$gallery_images = get_post_meta($section->ID, '_gallery_images', true);


if (!empty($gallery_images) && is_array($gallery_images)) :
?>

        <?php foreach ($gallery_images as $image_url) : ?>
            <img src="<?= esc_url($image_url); ?>" alt="Gallery Image"class="w-full h-[300px] object-cover ">
        <?php endforeach; ?>
  

  
<?php endif; ?>


            </div>
        </div>

      
       
    </div>
</section>

    <?php endif; ?>

    <!-- Vision Section (ID=1) -->
    <?php if ($section_index == 1  ): ?>
        <section class=" mb-12 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <!-- Vision & Mission Grid -->
        <div class="grid md:grid-cols-2 gap-8">
            <?php foreach ($repeater_data as $data): ?>
            <div class="bg-[#F4F8F3] p-6 rounded-2xl">
                <div class="flex items-center gap-3 pt-10 text-[#5A5B59] text-[18px] mb-4 ">
                <?php if (!empty($data['image'])) : ?>
                <img src="<?php echo esc_url($data['image']); ?>" alt="Repeater Image"   >
                <?php endif; ?>
                           
                    <h3 class="text-[#006778] text-3xl font-[600]">
                    <?php if (!empty($data['secondary_header'])): ?>
                        <?php echo strip_tags(apply_filters('the_content', $data['secondary_header'])); ?>

                  <?php else: ?>
               <p class="d-none"></p>
                 <?php endif; ?>
                    </h3>
                </div>
                <p class="text-gray-600">
                <?php if (!empty($data['secondary_description'])): ?>
         
                   <?php echo strip_tags(apply_filters('the_content', $data['secondary_description'])); ?>
                  <?php else: ?>
               <p class="d-none"></p>
                 <?php endif; ?>
                </p>
            </div>

            <?php endforeach; ?>
        </div>
                  </div>
        </section>
    <?php endif; ?>

    <!-- How We Do It Section -->
    <?php if ($section_index == 2 ): ?>
        <section class="py-16" style="background: #276C76;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="font-['Berkshire_Swash'] text-[#C8E677] text-4xl md:text-6xl mb-4">
            <?php echo strip_tags(apply_filters('the_content', get_the_title($section->ID))); ?>
       
            </h2>
            <p class="text-[16px]   text-[#C8E677] sm:text-3xl">
                <?php  $subtitle = get_post_meta($section->ID, '_subtitle', true);   ?>
           
            <?php if (!empty($subtitle)): ?>
                   <?php echo esc_html($subtitle); ?>
                  <?php else: ?>
               <p class="d-none"></p>
                 <?php endif; ?>
            </p>
        </div>

        <!-- Grid Container -->
        <div class="grid md:grid-cols-2 gap-16">
        
        <?php foreach ($repeater_data as $index => $data): ?>
            <div class="flex gap-4">
                <div class="flex-shrink-0 w-10 h-10 text-xl bg-[#C8E677] rounded-full flex items-center justify-center text-[#095763] font-semibold">
                   <?php echo $index + 1; ?>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-2 sm:text-xl">
                    <?php if (!empty($data['secondary_header'])): ?>
                        <?php echo strip_tags(apply_filters('the_content', $data['secondary_header'])); ?>
                   
                  <?php else: ?>
               <p class="d-none"></p>
                 <?php endif; ?>
                    </h3>
                    <p class="text-white">
                    <?php if (!empty($data['secondary_description'])): ?>
                        <?php echo strip_tags(apply_filters('the_content', $data['secondary_description'])); ?>
                  <?php else: ?>
               <p class="d-none"></p>
                 <?php endif; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
</section>
    <?php endif; ?>

    <!-- Our Commitment to Excellence Section -->
    <?php if ($section_index == 3 ): ?>
<section class="bg-white pt-16 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Grid Layout -->
        <div class="grid md:grid-cols-2 gap-12">
       
            <!-- Left Column: List -->
            <div class="space-y-6">
                                        <!-- Section Header -->
            <h2 class="text-[#095763] text-2xl md:text-4xl font-[600] mb-4 mt-6"> <?php echo esc_html(get_the_title($section->ID)); ?></h2>
                <!-- List Items -->
                <?php foreach ($repeater_data as $data): ?>
              
                <div class="flex items-center gap-3  text-[#5A5B59] text-[18px]">
                    <div class="flex-shrink-0">
                        <svg class="w-10 h-10 text-[#309CAB]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <p class="text-gray-600 text-[16px] sm:text-[18px]">
                    <?php if (!empty($data['secondary_description'])): ?>
                   <?php echo esc_html($data['secondary_description']); ?>
                  <?php else: ?>
               <p class="d-none"></p>
                 <?php endif; ?>
                        </p>
                </div>

                <?php endforeach; ?>
            </div>

            <!-- Right Column: Images -->
            <div class="grid grid-cols-2 gap-4">
                <?php $gallery_images = get_post_meta($section->ID, '_gallery_images', true);  ?>
    <!-- Large Image (First Image) -->
    <div class="col-span-2">
        <?php if (!empty($gallery_images) && is_array($gallery_images)) : ?>
            <img src="<?= esc_url($gallery_images[0]); ?>" alt="Gallery Image 1" class="w-full h-60 object-cover rounded-lg">
        <?php endif; ?>
    </div>

    <!-- Small Images -->
    <?php if (!empty($gallery_images) && is_array($gallery_images)) : ?>
        <?php 
        // Loop through and display small images if available
        for ($i = 1; $i < count($gallery_images) - 1; $i++) : 
        ?>
            <div>
                <img src="<?= esc_url($gallery_images[$i]); ?>" alt="Gallery Image <?= $i+1; ?>" class="w-full h-[260px] object-cover rounded-lg">
            </div>
        <?php endfor; ?>
    <?php endif; ?>

    <!-- Bottom Image (Last Image) -->
    <div class="col-span-2">
        <?php if (!empty($gallery_images) && count($gallery_images) > 1) : ?>
            <img src="<?= esc_url($gallery_images[count($gallery_images) - 1]); ?>" alt="Gallery Image Last" class="w-full h-60 object-cover rounded-lg">
        <?php endif; ?>
    </div>
</div>

        </div>
    </div>
    
</section>
<?php endif; ?>

<?php if ($section_index == 4 ): ?>

<?php endif; ?>




    <!-- Increment the index for the next section -->
    <?php $section_index++; ?>

    <?php endforeach; ?>
<?php else: ?>
    <p></p>

   
<?php endif; ?>
<?php get_template_part('template-parts/why-us'); ?>
<?php get_template_part('template-parts/subscribe'); ?>

<?php get_template_part('template-parts/faq'); ?>
<!-- add footer to the page  -->
<?php get_template_part('template-parts/footer'); ?>
