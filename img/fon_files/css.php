body {
	padding: 0;
	font-family: 'Open Sans', sans-serif;
	color: #212121;
}

body.bg {
	background: url('/templates/_sources/bg.jpg') #e1e5bb;
}

.content {
	background-color: white;
	box-shadow: 3px 0 10px rgba(0,0,0,0.5);
}

.shadowed {
    position: relative;
}
.shadowed:before, .shadowed:after {
	z-index: 1;
    position: absolute;
    content: "";
    bottom: 25px;
    left: 0;
    width: 50%;
    top: 30%;
    max-width: 500px;
    background: none;
    box-shadow: 0 35px 25px rgba(0, 0, 0, 0.5);
    transform: rotate(-5deg);
}
.shadowed:after {
    transform: rotate(5deg);
    right: 0;
    left: auto;
}

.shadowed2 {
    position: relative;
}
.shadowed2:before, .shadowed2:after {
    z-index: 1;
    position: absolute;
    content: "";
    bottom: 15px;
    left: 10px;
    width: 50%;
    top: 80%;
    max-width:300px;
    background: #777;
    box-shadow: 0 15px 10px rgba(0, 0, 0, 0.8);
    transform: rotate(-8deg);
}
.shadowed2:after {
    transform: rotate(8deg);
    right: 10px;
    left: auto;
}


.slide {
	z-index: 2;
	margin-bottom: 45px;
}

.calendarbox {
	display: inline-block;
	position: relative;
	width: 150px;
	height: 150px;
	margin: 0 20px;
}
.calendarimage {
	z-index: 2;
	position: absolute;
	width: 150px;
	height: 150px;
	background-color: white;
}
.calendartext {
	display: none;
	z-index: 3;
	position: absolute;
	width: 150px;
	height: 150px;
	line-height: 150px;
	vertical-align: middle;
	text-align: center;
	font-size: 18px;
	color: #008000;
	text-decoration: underline;
	background: rgba(255,255,255,0.8);
}
.calendartext span {
    display: inline-block;
    line-height: normal;
    vertical-align: middle;
}
.calendarbox:hover .calendartext {
	display: block;
}

.menucontainer {
/*	position: relative;*/
	background-color: #909300;
}
.menucover {
	display: inline-block;
	position: relative;
}
a.menumain, a.menumain:link, a.menumain:visited, a.menumain:active {
	display: block;
	text-transform: uppercase;
	font-size: 14px;
	color: white;
	text-decoration: none;
	padding: 10px 25px;
	margin: 0;
	transition-property: color, background;
	transition-duration: .2s;
	transition-timing-function: linear;
}
a.menumain:hover, .menumainselected, .menumaincover {
	color: white !important;
	text-decoration: underline;
	background: #488900;
}
.submenudiv {
	display: none;
	position: absolute;
	width: 620px !important;
	padding: 5px 10px;
	color: black;
	text-shadow: 0 0 2px rgba(0,0,0,0.8);
	background-color: rgba(0,128,0,0.8);
	box-shadow: 2px 2px 3px rgba(0,0,0,0.3);
	z-index: 100;
	width: auto;
	/*white-space: nowrap; */
}

@media (max-width: 576px) {
	.submenudiv {
		width: auto !important;
	}
}


.navbar-collapse.in {
	overflow: visible !important;
}

a.submenu, a.submenu:link, a.submenu:visited, a.submenu:active {
	text-transform: uppercase;
	color: white;
	text-decoration: none;
	font-weight: bold;
	font-size: 14px;
}
a.submenu:hover {
	color: white !important;
	text-decoration: underline;
}

a.menuitems, a.menuitems:link, a.menuitems:visited, a.menuitems:active {
	display: block;
	color: white;
	text-decoration: none;
	font-size: 12px;
}
a.menuitems:hover {
	color: white !important;
	text-decoration: underline;
}



.boxheader {
	background-color: #008000;
	margin: 0 -15px;
	text-align: center;
	font-size: 22px;
	color: white;
}

.sponsorbanner {
	max-width: 25%;
	max-height: 80px;
	margin: 10px 15px;
}

p {
	font-family: 'Open Sans', sans-serif;
	color: #212121;
}

a, a:link, a:active, a:visited, a:hover {
	color: #008000;
}

.palatino {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}

h1 {
	font-size: 38px;
	font-weight: bold;
	color: #008f4c;
}

.subh2 {
	color: #008000;
	text-transform: uppercase;
	font-size: 20px;
	text-align: center;
	font-weight: bold;
}
.mainh2 {
	color: #008000;
	text-transform: uppercase;
	font-size: 20px;
	font-weight: bold;
}

.directory td {
	padding: 2px 5px;
}

a.gsearchlink {
	background: none;
	cursor: pointer;
	display: block;
	margin: 0 0 5px 0;
	overflow: hidden;
	padding: 5px 5px;
	text-decoration: none;
}
a.gsearchlink:hover {
	background: #f4f4f4;
}
.gsearchtitle {
	color: #244d9a;
}
.gsearchcontent {
	color: #666;
}
.gsearchurl {
	font-size: 14px;
	color: #00a42e;
}

a.topquicklinks {
	text-decoration: none;
	color: #2e3641
}
a.topquicklinks:hover {
	text-decoration: underline;
	color: #2e3641
}

a.social, a.social:link, a.social:active, a.social:visited {
	display: inline-block;
	padding: 7px;
	margin-left: 4px;
	background: white;
	border-radius: 50px;
	text-decoration: none;
}
a.social:hover {
	text-decoration: none;
	box-shadow: 0 0 4px rgba(255,255,255,1);
}


a.slideslider {
	background: none;
	cursor: pointer;
	display: block;
	margin: 0;
	overflow: hidden;
	padding: 0;
	text-decoration: none;
	width: 100%;
	height: 280px;
	background-size: cover;
	position: relative;
}
a.slideslider:hover {
	text-decoration: none;
}

a.mainlogo {
	text-decoration: none;
	font-size: 30px;
	line-height: 100%;
	color: #1f3058;
	text-transform: uppercase;
}
a.mainlogo:hover {
	color: black;
	text-decoration: none;
}


#titleslide {
	font-size: 18px;
	color: white;
	padding: 10px;
}
#textslide {
	font-size: 14px;
	color: white;
	padding: 10px;
}

.submenuh2text {
	text-transform: uppercase;
	font-size: 21px;
	font-weight: bold;
	color: #212121;
	text-decoration: none;
}

a.submenuh2 {
	text-transform: uppercase;
	font-size: 21px;
	font-weight: bold;
	color: #212121;
	text-decoration: none;
}
a.submenuh2:hover {
	color: #212121;
	text-decoration: underline;
}
a.submenumenu {
	font-weight: bold;
	color: #212121;
	text-decoration: none;
}
a.submenumenu:hover {
	color: #212121;
	text-decoration: underline;
}

.bluemore {
	color: #8BC34A;
	text-decoration: none;
	margin-right: 10px;
}

p.submenutext {
	font-size: 16px;
}

.calendardays {
	color: white;
	text-align: center;
}

.calendard {
	text-align: center;
}

.widgetdiv {
	clear: both;
	overflow: hidden;
	margin-bottom: 20px;
}
.widgetdiv p {
	line-height: 130%;
	margin-bottom: 0;
}
.widgetdiv br {
	line-height: 130%;
}
.widgetdivlib {
	clear: both;
	overflow: hidden;
	margin-bottom: 15px;
	padding: 15px;
}
.widgetdivlib h1, .widgetdivlib h2, .widgetdivlib h3 {
    margin-bottom: 10px;
    margin-top: 0px;
}

a.btnmore {
	color: #1f3058;
	font-size: 15px;
	text-transform: uppercase;
	text-decoration: none;
}
a.btnmore:hover {
	text-decoration: none;
}

.btn, .form-control {
	border-radius: 1px;
}
.btn-primary, .btn-primary:link, .btn-primary:active, .btn-primary:visited {
	background: #008f4c;
	border-color: #008f4c;
	color: white;
}
.btn-primary:hover {
	background: #8BC34A;
	border-color: #8BC34A;
	color: white;
}

.btn-group .btn + .btn, .btn-group .btn + .btn-group, .btn-group .btn-group + .btn, .btn-group .btn-group + .btn-group {
    margin-left: 0;
}

.searchbox {
	background-color: #008000;
}
.searchtabs {
    border: 0;
}
.searchtabs li {
	width: 25%;
	text-align: center;
	border: 0;
	white-space: nowrap;
	padding: 0;
	margin: 0;
}
.searchtabs > li > a {
	border: 0;
	border-radius: 0;
	padding: 10px 0;
	margin: 0;
	background-color: #e6e6e6;
	color: black;
}
.searchtabs > li.active > a, .searchtabs > li.active > a:focus, .searchtabs > li.active > a:hover {
	border: 0;
	border-radius: 0;
	margin: 0;
	background-color: #008000;
	color: white;
}

.searchminibutton {
	padding: 2px 5px;
	margin-left: 5px;
}
	
	

.searchradio {
    margin-bottom: 0;
    margin-top: 0;
}
.searchradio label {
    cursor: pointer;
    font-weight: 400;
    margin: 0;
    padding: 8px 12px;
	background-color: #e6e6e6;
    color: #333;
}
.searchradio label:hover {
	background-color: #d6d6d6;
    color: #333;
}
.searchradio .btn {
	border: 0;
}
.searchradio .active  {
	background-color: #008000;
    border-color: #adadad;
	color: white;
}
.btn.active, .btn:active {
    background-image: none;
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.125) inset;
    outline: 0 none;
}


.breadcrumb {
	margin-top: 20px;
	background: none;
	padding: 0;
}
.breadcrumb a {
	color: gray;
	text-decoration: none;
}

.theme-dropdown .dropdown-menu {
	position: static;
	display: block;
	margin-bottom: 20px;
}

.theme-showcase > p > .btn {
	margin: 5px 0;
}


#loadingblock {
	display: none;
}

a.langs {
	color: #ffffff;
	text-decoration: none;
}
a.langs:hover {
	color: #ffffff;
	text-decoration: none;
}

.inpsearch {
	border: 0;
}
.butsearch {
	border: 0;
	background: none;
	color: black;
}

.navbar-toggle {
	background: #008f4c;
	border: 0;
	margin-right: 0;
}
.menunav {
	line-height: 100%;
	border-radius: 0;
    background-color: #008000;
    margin: 0 auto;
	padding: 0;
    min-height: 36px;
	border: 0;
	overflow: hidden;
	color: white;
	text-align: right;
	white-space: nowrap;
}
.menunav p {
	color: white;
}

#google_translate_element {
	display: inline-block;
}

.navbar-collapse {
	padding: 0;
	border: 0;
}
.navbar-brand {
	height: auto;
	padding: 8px 0;
}
.container > .navbar-header {
	margin-right: 0;
}

.mainfooter {
    background-color: #e4e5ea;
    margin: 0 auto;
	padding: 15px 0 30px 0;
	border: 0;
	width: 100%;
}

.footer {
    background-color: #008000;
	padding: 15px 0;
	color: #F5F5F5 !important;
	min-height: 100px;
}
.footer p, .footer a, .footer a:hover {
	color: #F5F5F5 !important;
}

.underfooter {
	margin-top: 15px;
}

.form-group label {
	font-weight: 200;
}

.menu {
	color: #008000;
	float: left;
	padding: 0;
	border: 0;
	border-radius: 0;
	text-decoration: none;
	text-transform: uppercase;
	transition-property: background, color;
	transition-duration: .2s;
	transition-timing-function: linear;
}
.menu:hover, .menu:active, .menu:focus {
	text-decoration: none;
	color: black;
	background-color: #008000 !important;
	text-transformation: uppercase;
}
.menuselected {
	text-decoration: none;
	color: black;
	background-color: #008000;
}
.checkmenusepar {
	margin-left: 0;
}


.footertext {
	color: #008f4c;
}

.footerlink {
	color: #008f4c;
	text-decoration: none;
}
.footerlink:hover {
	color: #008f4c;
	text-decoration: underline;
}

.datebox {
	background: #8BC34A;
	width: 100%;
	height: 50px;
	text-align: center;
	color: white;
}

.dateboxmain {
	background: #008000;
	width: 100%;
	height: 50px;
	text-align: center;
	color: white;
	padding-top: 5px;
}

.mainnewsdiv {
	display: block;
	width: 100%;
	height: 475px;
	background-color: #8BC34A;
	overflow: hidden;
	position: relative;
	text-decoration: none;
}
.mainnewsdiv:hover {
	text-decoration: none;
}

.carousel-indicators {
	margin-left: 0;
}
.carousel-indicators li {
	box-shadow: 0 0 5px black;
	border: 0;
	background: #008f4c;
	margin: 0 3px;
}
.carousel-indicators .active {
	background: white;
}

.newstitle {
	font-size: 25px;
	color: #008000;
	margin-top: 10px;
	margin-bottom: 5px;
	font-weight: bold;
}
.newsdesc {
	color: #008000;
}
.newstitlediv {
	background: none;
	overflow: hidden;
}



.eventstitle {
	font-size: 20px;
}
.eventsdesc {
	color: #999999;
}



a.newslink {
	display: block;
	color: black;
	text-decoration: none;
	margin-bottom: 15px;
}
a.newslink:hover {
	color: black;
	text-decoration: none;
}

a.newslink:hover .newstitlediv {
	background: #008000;
}
a.newslink:hover .newstitle {
	color: #008f4c;
}
a.newslink:hover .newsdesc {
	color: #008f4c;
}

a.eventslink {
	display: block;
	overflow: hidden;
	text-decoration: none;
	margin-left: 60px;
	color: #5D4037;
}
a.eventslink:hover {
	text-decoration: none;
	color: #795548;
	box-shadow: 0 0 4px rgba(0,0,0,0.2);
}

.calendarbg1 {
	background: #5D4037;
}