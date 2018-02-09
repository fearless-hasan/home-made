<?php
$u = [
	"https://livedemo00.template-help.com/wt_52680/js/jquery.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery-migrate-1.2.1.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery.equalheights.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery.mobile.customized.min.js",

	"https://livedemo00.template-help.com/wt_52680/js/wow/wow.js",

	"https://livedemo00.template-help.com/wt_52680/js/camera.js",

	"https://livedemo00.template-help.com/wt_52680/js/touchTouch.js",

	"https://livedemo00.template-help.com/wt_52680/js/isotope.min.js",

	"https://livedemo00.template-help.com/wt_52680/js/script.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery.cookie.js",

	"https://livedemo00.template-help.com/wt_52680/js/device.min.js",

	"https://livedemo00.template-help.com/wt_52680/js/tmstickup.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery.stellar.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery.easing.1.3.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery.ui.totop.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery.mousewheel.min.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery.simplr.smoothscroll.min.js",

	"https://livedemo00.template-help.com/wt_52680/js/superfish.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery.mobilemenu.js",

	"https://livedemo00.template-help.com/wt_52680/js/jquery.unveil.js",
];

foreach ($u as $k) {
	echo shell_exec("wget $k1");
}