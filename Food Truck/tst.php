<style>
/*! CSS Used from: https://ihatetomatoes.net/demos/css3-preloader-transition/css/main.css */

#loader-wrapper {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1000;
}

#loader {
	display: block;
	position: relative;
	left: 50%;
	top: 50%;
	width: 150px;
	height: 150px;
	margin: -75px 0 0 -75px;
	border-radius: 50%;
	border: 3px solid transparent;
	border-top-color: #000;
	-webkit-animation: spin 2s linear infinite;
	animation: spin 2s linear infinite;
	z-index: 1001;
}

#loader:before {
	content: "";
	position: absolute;
	top: 5px;
	left: 5px;
	right: 5px;
	bottom: 5px;
	border-radius: 50%;
	border: 3px solid transparent;
	border-top-color: #85817e;
	-webkit-animation: spin 3s linear infinite;
	animation: spin 3s linear infinite;
}

#loader:after {
	content: "";
	position: absolute;
	top: 15px;
	left: 15px;
	right: 15px;
	bottom: 15px;
	border-radius: 50%;
	border: 3px solid transparent;
	border-top-color: #ce2626;
	-webkit-animation: spin 1.5s linear infinite;
	animation: spin 1.5s linear infinite;
}

#loader-wrapper .loader-section {
	position: fixed;
	top: 0;
	width: 51%;
	height: 100%;
	background: #222;
	z-index: 1000;
}

#loader-wrapper .loader-section.section-left {
	left: 0;
}

#loader-wrapper .loader-section.section-right {
	right: 0;
}

@media print,
(-o-min-device-pixel-ratio: 5/4),
(-webkit-min-device-pixel-ratio: 1.25),
@media print {
	* {
		background: transparent!important;
		color: #000!important;
		box-shadow: none!important;
		text-shadow: none!important;
	}
}


/*! CSS Used keyframes */

@-webkit-keyframes spin {
	0% {
		-webkit-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@keyframes spin {
	0% {
		-webkit-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

	#logo{
		position: absolute;
    z-index: 9999999;
    left: 50%;
    width: 145px;
    height: 145px;
    transform: translate(-50%, 50%);
	}

</style> 
<div id="loader-wrapper"> 
	<div id="loader"></div> 
		<object id="logo" type="image/svg+xml" data="inc/svg/logo.svg"></object>
	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div> 
</div>