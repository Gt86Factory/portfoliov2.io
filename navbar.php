<!DOCTYPE html>
<html>
<head>
	<title>navbar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
.pie {
  -webkit-tap-highlight-color: transparent;
  background: #000;
  border-radius: 50%;
  box-shadow: 0 0 4px 5px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  height: 400px;
  left: -200px;
  position: absolute;
  top: -200px;
  width: 400px;
  transform: translateX(-200px) translateY(-200px);
  transition: transform 300ms;
}
.pie-color:hover {
  opacity: 0.85;
}
.pie-color:active {
  opacity: 0.7;
}
.pie1 {
  clip-path: polygon(200px 200px, 344px 450px, 0 450px);
  transition-delay: 30ms;
}
.pie2 {
  clip-path: polygon(200px 200px, 344px 450px, 450px 344px);
  transition-delay: 60ms;
}
.pie3 {
  clip-path: polygon(200px 200px, 450px 0, 450px 344px);
  transition-delay: 90ms;
}
.pie-color {
  width: 100%;
  height: 100%;
  border-radius: 50%;
}
.pie-color1 {
  background: linear-gradient(135deg, #FFF000, #f1c40f);
  clip-path: polygon(200px 200px, 344px 450px, 0 450px);
}
.pie-color2 {
  background: linear-gradient(135deg, #FFFFFF, #E80000);
  clip-path: polygon(200px 200px, 344px 450px, 450px 344px);
}
.pie-color3 {
  background: linear-gradient(135deg, #444, #0400FF);
  clip-path: polygon(200px 200px, 450px 0, 450px 344px);
}
.bag {
  left: 216px;
  position: absolute;
  top: 300px;
  width: 46px;
}
.doc {
  left: 288px;
  position: absolute;
  top: 258px;
  width: 46px;
}
.mail {
  left: 324px;
  position: absolute;
  top: 188px;
  width: 46px;
}
.menu {
  -webkit-tap-highlight-color: transparent;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 0 4px 5px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  height: 200px;
  left: -100px;
  position: absolute;
  top: -100px;
  width: 200px;
}
.hamburger {
  cursor: pointer;
  height: 46px;
  left: 58%;
  position: relative;
  top: 58%;
  width: 46px;
}
.title {
  color: white;
  font-family: "Crimson Text", serif;
  font-size: 80px;
  line-height: 84px;
  margin-top: 60px;
  text-align: center;
}
.body {
  color: white;
  font-family: "Work Sans", sans-serif;
  font-size: 20px;
  justify-content: center;
  line-height: 28px;
  margin: 30px auto;
  max-width: 600px;
  text-align: center;
}
.hamburger path {
  transition: transform 300ms;
}
.hamburger path:nth-child(1) {
  transform-origin: 25% 29%;
}
.hamburger path:nth-child(2) {
  transform-origin: 50% 50%;
}
.hamburger path:nth-child(3) {
  transform-origin: 75% 72%;
}
.hamburger path:nth-child(4) {
  transform-origin: 75% 29%;
}
.hamburger path:nth-child(5) {
  transform-origin: 25% 72%;
}
.active .pie {
  transform: translateX(0) translateY(0);
}
.active .hamburger path:nth-child(1) {
  transform: rotate(45deg);
}
.active .hamburger path:nth-child(2) {
  transform: scaleX(0);
}
.active .hamburger path:nth-child(3) {
  transform: rotate(45deg);
}
.active .hamburger path:nth-child(4) {
  transform: rotate(-45deg);
}
.active .hamburger path:nth-child(5) {
  transform: rotate(-45deg);
}

	</style>
</head>
<body>
  
  <a href="cv.php">
	<div class="pie pie1" onclick="document.body.classList.remove('active')">
  <div class="pie-color pie-color1">
    <svg class="bag" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="100px" height="100px" fill="#fff">
          <path
            d="M17.283,5.549h-5.26V4.335c0-0.222-0.183-0.404-0.404-0.404H8.381c-0.222,0-0.404,0.182-0.404,0.404v1.214h-5.26c-0.223,0-0.405,0.182-0.405,0.405v9.71c0,0.223,0.182,0.405,0.405,0.405h14.566c0.223,0,0.404-0.183,0.404-0.405v-9.71C17.688,5.731,17.506,5.549,17.283,5.549 M8.786,4.74h2.428v0.809H8.786V4.74z M16.879,15.26H3.122v-4.046h5.665v1.201c0,0.223,0.182,0.404,0.405,0.404h1.618c0.222,0,0.405-0.182,0.405-0.404v-1.201h5.665V15.26z M9.595,9.583h0.81v2.428h-0.81V9.583zM16.879,10.405h-5.665V9.19c0-0.222-0.183-0.405-0.405-0.405H9.191c-0.223,0-0.405,0.183-0.405,0.405v1.215H3.122V6.358h13.757V10.405z"
          />
        </svg>
  </div>
</div>
  </a>
  <a href="projects.php">
<div class="pie pie2" onclick="document.body.classList.remove('active')">
  <div class="pie-color pie-color2">
    <svg class="doc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="100" height="100">
          <path
            fill="#fff"
            d="M15.396,2.292H4.604c-0.212,0-0.385,0.174-0.385,0.386v14.646c0,0.212,0.173,0.385,0.385,0.385h10.792c0.211,0,0.385-0.173,0.385-0.385V2.677C15.781,2.465,15.607,2.292,15.396,2.292 M15.01,16.938H4.99v-2.698h1.609c0.156,0.449,0.586,0.771,1.089,0.771c0.638,0,1.156-0.519,1.156-1.156s-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.321-1.089,0.771H4.99v-3.083h1.609c0.156,0.449,0.586,0.771,1.089,0.771c0.638,0,1.156-0.518,1.156-1.156c0-0.638-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.322-1.089,0.771H4.99V6.531h1.609C6.755,6.98,7.185,7.302,7.688,7.302c0.638,0,1.156-0.519,1.156-1.156c0-0.638-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.322-1.089,0.771H4.99V3.062h10.02V16.938z M7.302,13.854c0-0.212,0.173-0.386,0.385-0.386s0.385,0.174,0.385,0.386s-0.173,0.385-0.385,0.385S7.302,14.066,7.302,13.854 M7.302,10c0-0.212,0.173-0.385,0.385-0.385S8.073,9.788,8.073,10s-0.173,0.385-0.385,0.385S7.302,10.212,7.302,10 M7.302,6.146c0-0.212,0.173-0.386,0.385-0.386s0.385,0.174,0.385,0.386S7.899,6.531,7.688,6.531S7.302,6.358,7.302,6.146"
          />
        </svg>
  </div>
</div>
</a>
<a href="contactme.php">
<div class="pie pie3" onclick="document.body.classList.remove('active')">
  <div class="pie-color pie-color3">
    <svg class="mail" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="100" height="100" fill="#fff">
          <path
            d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"
          />
        </svg>
  </div>
</div>
</a>
<div class="menu" onclick="document.body.classList.toggle('active')">
  <svg class="hamburger" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
        <g
          fill="none"
          stroke="#000"
          stroke-width="7.999"
          stroke-linecap="round"
        >
          <path d="M 55,26.000284 L 24.056276,25.999716" />
          <path d="M 24.056276,49.999716 L 75.943724,50.000284" />
          <path d="M 45,73.999716 L 75.943724,74.000284" />
          <path d="M 75.943724,26.000284 L 45,25.999716" />
          <path d="M 24.056276,73.999716 L 55,74.000284" />
        </g>
      </svg>
</div>
</body>
</html>