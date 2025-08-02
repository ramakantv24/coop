<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }} | {{ $subject }}</title>
  <style>
		/** Thin */
		@font-face {
			font-family: "San Francisco";
			font-weight: 200;
			src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-thin-webfont.woff");
		}

		/** Regular */
		@font-face {
			font-family: "San Francisco";
			font-weight: 400;
			src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-regular-webfont.woff");
		}

		/** Medium */
		@font-face {
			font-family: "San Francisco";
			font-weight: 500;
			src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-medium-webfont.woff");
		}

		/** Semi Bold */
		@font-face {
			font-family: "San Francisco";
			font-weight: 600;
			src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.woff");
		}

		/** Bold */
		@font-face {
			font-family: "San Francisco";
			font-weight: 700;
			src: url("https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-bold-webfont.woff");
		}

		* {

			 font-family: -apple-system, Arial, sans-serif;
			padding: 0;
			margin: 0;
		}
		a{text-decoration: none;}
		h1 {
			font-weight: 500;
			letter-spacing: -1px;
			font-size: 72px;
		}
		h2 {
			font-weight: 600;
		}
		h3,
		h4 {
			font-weight: 400;
			letter-spacing: -0.2px;
		}

		p {
			font-weight: 400;
		}
		p.thin {
			font-weight: 200;
		}
		p.ultralight {
			font-weight: 100;
		}
		/* Main CSS */
		.wrapper {
			max-width: 600px;
			margin-left: auto;
			margin-right: auto;
		}
		.header {
			background-color: #195791;
			color: #fff;
			padding: 10px 20px;
			max-height: 300px;
		}
		.header-top {
			display: flex;
		}
		.header .date {
			margin-left: auto;
			padding: 10px;
			letter-spacing: -0.3px;
		}
		.header-heading {
			/*margin-top: 80px;*/
			border-top: #577b9d 1px solid;
		}
		.mail-content {
			padding: 25px;
		}
		.content-title {
			font-size: 28px;
			font-weight: 600;
			margin-bottom: 10px;
			display: inline-flex;
		}
		.content {
			font-size: 16px;
			font-weight: 400;
			line-height: 27px;
			letter-spacing: -0.2px;
		}
		.main-button {
			padding: 10px 20px;
			font-size: 16px;
			background-color: #195791;
			border-radius: 2px;
			border: none;
			color: #fff;
			margin: 24px 0;
			cursor: pointer;
			transition: all 0.2s ease;
			min-width: 150px;
		}
		.main-button:hover {
			transform: scale(1.01);
			transform: translateY(3px);
		}
		.center-heading {
			font-size: 24px;
			line-height: 29px;
			font-weight: 500;
			margin: 24px 0 0 0;
		}
		.thanks p {
			font-size: 20px;
			line-height: 29px;
			font-weight: 400;
			/* margin-top: -2px; */
		}
		.thanks h5 {
			font-size: 20px;
			margin-top: 15px;
		}
		footer {
			background-color: #dddddd;
			max-width: 600px;
			margin-left: auto;
			margin-right: auto;
		}
		footer .footer-content {
			padding: 20px;
		}
		footer .footer-content h5 {
			font-size: 20px;
			font-weight: 500;
		}
		@media only screen and (max-width: 767px){
			.header-heading{
				font-size: 24px;
				font-weight: 500;
			}
		}
	</style>
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <div class="header-top">
          <img src="{{ asset('public/backend/dist/img/AdminLTELogo.png') }}" alt="" width="118" height="86" />
          <h5 class="header-heading">{{ config('app.name') }}</h5>
          <h4 style="color:white" class="date">{{date('d-m-Y')}}</h4>
        </div>
        <h1 class="header-heading">{{ $title }}</h1>
      </div>
      <div class="mail-content">
        <h4 class="content-title">
          Dear {{ $name }},
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="29"
            height="37"
            viewBox="0 0 29 37"
          >
            <text
              id="_"
              data-name=""
              transform="translate(0 28)"
              font-size="28"
              font-family="AppleColorEmoji, Apple Color Emoji"
            >
              <tspan x="0" y="0"></tspan>
            </text>
          </svg>
        </h4>
        <p class="content">
          
        </p>
        <div class="thanks">
          <h5>Regards</h5>
          <p>{{ config('app.name') }}</p>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer-content">
        <h5>{{ config('app.name') }}</h5>
      </div>
    </footer>
  </body>
</html>