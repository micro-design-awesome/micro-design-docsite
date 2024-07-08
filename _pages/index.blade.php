<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to HydePHP!</title>

    <style>
        /*! tailwindcss v3.0.23 | MIT License | https://tailwindcss.com*/
        *,:after,:before{box-sizing:border-box;border:0 solid #e5e7eb}:after,:before{--tw-content:""}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji}body{margin:0;line-height:inherit}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b{font-weight:bolder}code{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-size:1em}[type=button],[type=reset],[type=submit]{-webkit-appearance:button;background-color:initial;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}h1,h2,h3,h4,h5,h6,p{margin:0}[role=button]{cursor:pointer}:disabled{cursor:default}[hidden]{display:none}*,:after,:before{--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-scroll-snap-strictness:proximity;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:#3b82f680;--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000}.container{width:100%}@media (min-width:640px){.container{max-width:640px}}@media (min-width:768px){.container{max-width:768px}}@media (min-width:1024px){.container{max-width:1024px}}@media (min-width:1280px){.container{max-width:1280px}}@media (min-width:1536px){.container{max-width:1536px}}.static{position:static}.relative{position:relative}.top-0{top:0}.left-0{left:0}.m-2{margin:.5rem}.my-auto{margin-top:auto;margin-bottom:auto}.mx-auto{margin-left:auto;margin-right:auto}.mx-3{margin-left:.75rem;margin-right:.75rem}.mb-4{margin-bottom:1rem}.mt-2{margin-top:.5rem}.mt-8{margin-top:2rem}.mt-4{margin-top:1rem}.mt-auto{margin-top:auto}.block{display:block}.flex{display:flex}.hidden{display:none}.h-16{height:4rem}.h-screen{height:100vh}.min-h-screen{min-height:100vh}.w-screen{width:100vw}.w-64{width:16rem}.max-w-7xl{max-width:80rem}.max-w-lg{max-width:32rem}.max-w-3xl{max-width:48rem}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.justify-center{justify-content:center}.overflow-hidden{overflow:hidden}.overflow-x-hidden{overflow-x:hidden}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255/var(--tw-bg-opacity))}.bg-gradient-to-br{background-image:linear-gradient(to bottom right,var(--tw-gradient-stops))}.bg-clip-text{-webkit-background-clip:text;background-clip:text}.p-4{padding:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-4{padding-left:1rem;padding-right:1rem}.py-32{padding-top:8rem;padding-bottom:8rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.px-8{padding-left:2rem;padding-right:2rem}.pb-12{padding-bottom:3rem}.text-left{text-align:left}.text-center{text-align:center}.text-5xl{font-size:3rem;line-height:1}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-sm{font-size:.875rem;line-height:1.25rem}.font-extrabold{font-weight:800}.font-bold{font-weight:700}.uppercase{text-transform:uppercase}.leading-10{line-height:2.5rem}.tracking-tight{letter-spacing:-.025em}.tracking-normal{letter-spacing:0}.text-gray-100{--tw-text-opacity:1;color:rgb(243 244 246/var(--tw-text-opacity))}.text-transparent{color:#0000}.text-gray-200{--tw-text-opacity:1;color:rgb(229 231 235/var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity))}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-lg{--tw-shadow:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color)}.shadow-lg,.shadow-md{box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color),0 2px 4px -2px var(--tw-shadow-color)}.drop-shadow-2xl{--tw-drop-shadow:drop-shadow(0 25px 25px #00000026);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}@media (min-width:640px){.sm\:mb-0{margin-bottom:0}.sm\:mt-4{margin-top:1rem}.sm\:leading-none{line-height:1}.sm\:shadow-xl{--tw-shadow:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color),0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}}@media (min-width:768px){.md\:absolute{position:absolute}.md\:left-72{left:18rem}.md\:mt-8{margin-top:2rem}.md\:mt-0{margin-top:0}.md\:inline-block{display:inline-block}.md\:flex{display:flex}.md\:hidden{display:none}.md\:max-w-none{max-width:none}.md\:max-w-2xl{max-width:42rem}.md\:text-center{text-align:center}.md\:text-6xl{font-size:3.75rem;line-height:1}.md\:text-5xl{font-size:3rem;line-height:1}}@media (min-width:1024px){.lg\:text-7xl{font-size:4.5rem;line-height:1}.lg\:text-lg{font-size:1.125rem;line-height:1.75rem}}@media (min-width:1280px){.xl\:left-80{left:20rem}}.sr-only{position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; border-width: 0;}.list-none{list-style-type: none;}
    </style>

    <style>
        /* Gradients by https://uigradients.com/ */
        .app-gradient {
            /* Royal */
            background: #141E30; /* fallback for old browsers */
            background: -webkit-linear-gradient(to left bottom, #243B55, #141E30); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left bottom, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .logo-gradient {
            /* Crimson Tide */
            background-image: linear-gradient(to bottom right, #642B73, #C6426E);
            padding-top: .5rem;
            padding-bottom: 1rem;
        }
    </style>
</head>

<body id="app" class="flex flex-col min-h-screen overflow-x-hidden antialiased bg-standard" x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    <a href="#content" id="skip-to-content" class="sr-only focus:not-sr-only bg-black border-4 border-yellow-400 focus:absolute focus:mt-2 focus:mx-auto focus:p-2 focus:w-64 h-auto left-0 overflow-auto right-0 rounded-md text-center text-lg text-white top-auto z-50 ">Skip to content</a>    <nav aria-label="Main navigation" id="main-navigation" class="flex flex-wrap items-center justify-between p-4 shadow-lg sm:shadow-xl md:shadow-none dark:bg-gray-800">
	<div class="flex flex-grow items-center flex-shrink-0 text-gray-700 dark:text-gray-200">
		<a aria-label="Home page link" href="./" class="font-bold px-4">
	<img src="media/logo-masked32-min.png?v=b63d8b9216a1d60500ae500d7526f725" alt="HydePHP Logo" class="inline">
	HydePHP
</a>
		<div class="ml-auto">
			<button @click="toggleTheme" class="theme-toggle-button flex items-center px-2 py-1 hover:text-gray-700 dark:text-gray-200" title="Toggle theme">
        <span class="sr-only">Toggle dark theme</span>
        <svg width="1.25rem" height="1.25rem" class="w-5 h-5 hidden dark:block" fill="#FFFFFF" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        <svg width="1.25rem" height="1.25rem" class="w-5 h-5 block dark:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
    </button>
		</div>
	</div>

	<div class="block md:hidden">
		<button id="navigation-toggle-button" @click="navigationOpen = ! navigationOpen" class="flex items-center px-3 py-1 hover:text-gray-700 dark:text-gray-200" aria-label="Toggle navigation menu">
			<svg x-show="! navigationOpen" title="Open Navigation Menu" class="dark:fill-gray-200" style="" id="open-main-navigation-menu-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><title>Open Menu</title>
				<path d="M0 0h24v24H0z" fill="none"></path>
				<path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
			</svg>
			<svg x-show="navigationOpen" title="Close Navigation Menu" class="dark:fill-gray-200" style="display: none;" id="close-main-navigation-menu-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><title>Close Menu</title>
				<path d="M0 0h24v24H0z" fill="none"></path>
				<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
			</svg>
		</button>
	</div>

	<div id="main-navigation-links" class="w-full md:flex flex-grow md:flex-grow-0 md:items-center md:w-auto px-6 -mx-4 border-t mt-3 pt-3 md:border-none md:mt-0 md:py-0 border-gray-200 dark:border-gray-700 hidden" :class="navigationOpen ? '' : 'hidden'">
		<ul aria-label="Navigation links" class="md:flex-grow md:flex justify-end">
							<li class="md:mx-2">
					<a href="./" aria-current="page" class="block my-2 md:my-0 md:inline-block py-1 text-gray-700 hover:text-gray-900 dark:text-gray-100 border-l-4 border-indigo-500 md:border-none font-medium -ml-6 pl-5 md:ml-0 md:pl-0 bg-gray-100 dark:bg-gray-800 md:bg-transparent dark:md:bg-transparent">Home</a>				</li>
							<li class="md:mx-2">
					<a href="about" class="block my-2 md:my-0 md:inline-block py-1 text-gray-700 hover:text-gray-900 dark:text-gray-100">About</a>				</li>
							<li class="md:mx-2">
					<a href="demos" class="block my-2 md:my-0 md:inline-block py-1 text-gray-700 hover:text-gray-900 dark:text-gray-100">Demos</a>				</li>
							<li class="md:mx-2">
					<a href="posts" class="block my-2 md:my-0 md:inline-block py-1 text-gray-700 hover:text-gray-900 dark:text-gray-100">Blog</a>				</li>
							<li class="md:mx-2">
					<a href="https://github.com/hydephp/hyde" class="block my-2 md:my-0 md:inline-block py-1 text-gray-700 hover:text-gray-900 dark:text-gray-100">GitHub</a>				</li>
					</ul>
		<a id="docs-nav-button" href="docs/1.x/" class="inline-block relative mb-5 md:ml-4 mt-4 md:mt-0 md:mb-0 group">
			<span class="absolute top-0 left-0 w-full h-full  hidden md:inline mt-1 ml-1 bg-black dark:bg-gray-600 rounded group-hover:m-0"></span>
			<span class="relative inline-block md:w-full h-full px-3 py-1 text-base font-bold  bg-white border-2 border-black rounded fold-bold group-hover:bg-violet-300 dark:group-hover:bg-violet-200 group-hover:text-gray-900 dark:text-black">Documentation</span>
		</a>
	</div>
</nav>
 

    <section>
        <style>
    mark {
        background: linear-gradient(-100deg, #fece2f2f, #fddf47a4 95%, #fece2f27);
        border-radius: 1em 0;
        padding: 0.125rem 0.5rem;
    }
    .dark mark {
        background: linear-gradient(-100deg, #fece2fbe, #fddf47a4 95%, #fece2fbd);
    }
    /* Gradients by https://uigradients.com/ */
    .dark .app-gradient {
        /* Royal */
        background: #141E30; /* fallback for old browsers */
        background: -webkit-linear-gradient(to left bottom, #243B55, #141E30); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left bottom, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    #main-navigation {
        z-index: 10;
    }
    .theme-toggle-button {
        display: none!important;
    }
    #app {
        min-width: 100vw;
    }
    #docs-nav-button {
        margin-right: 0.75rem;
    }
    .pricing-list li::marker {
        color: #777;
    }
</style>
<!-- BEGIN HERO SECTION -->
<div class="relative items-center justify-center w-screen min-h-screen">
    <div class="pt-36 md:pt-64 container self-center my-auto flex flex-col items-center justify-center h-full max-w-6xl pl-0 mx-auto -mt-24 sm:pl-8 xl:pl-0 md:flex-row md:justify-between">
        <div class="flex flex-col items-center w-5/6 md:items-start sm:w-1/2 lg:w-3/5 lg:-mt-4">
            <div class="relative md:text-left text-center">
                <h1 class="relative mb-4 text-4xl font-black leading-none text-center text-black lg:text-5xl xl:text-6xl md:text-left">
                    HydePHP
                </h1>
                <small class="relative mb-4  text-xl font-black leading-none  text-black lg:text-2xl xl:text-3xl md:text-left text-center">
                    The Static Site Generator You've Been Waiting For, is here.
                </small>
                <img class="absolute top-0 right-0 hidden w-20 -mt-16 mr-48 transform rotate-45 lg:block xl:mr-48 xl:-mt-14" style="transform: rotate(35deg)" src="media/logo.svg?v=6f4d292b092e62c88c7638cb9dfcc2de" alt="HydePHP Logo">

            </div>
            <p class="my-3 text-base text-center text-gray-600 xl:text-xl md:text-left ">
                Create websites, blogs, documentation sites, and more, with the power of Laravel and the simplicity of Markdown.
                Your next website is minutes away from becoming a reality.
            </p>
            <a href="docs/1.x/" class="relative mt-5 group">
                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-black rounded group-hover:m-0"></span>
                <span class="relative inline-block w-full h-full px-8 py-3 text-base font-bold bg-white border-2 border-black rounded group-hover:bg-violet-400 xl:text-xl fold-bold">
                    To the Documentation!
                </span>
            </a>
        </div>
        <div class="flex flex-col items-end justify-center w-5/6 h-auto pl-0 pr-0 mt-16 mb-12 sm:pl-20 sm:pr-8 xl:pr-0 md:mt-0 md:h-full sm:w-2/3 lg:-mt-4">
            <!-- HEADER IMAGE -->
            <img src="media/header.png?v=b6971e5b8497d81da0f37366f732e1e7" alt="Two developers collaboratively working on a static site displayed on a large monitor, illustrating the ease of website creation with HydePHP.">
            <!-- END HEADER IMAGE -->
        </div>
    </div>
    <!-- CURVED SVG BORDER -->
    <svg class="absolute bottom-0 w-screen text-violet-300 fill-current" viewBox="0 0 1400 50" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0c309.151 33.333 542.484 50 700 50 157.516 0 390.849-16.667 700-50v50H0V0z"></path>
    </svg>
</div>
<!-- HERO SECTION END -->
<!-- Second Section -->
<div class="relative w-full px-8 py-20 bg-violet-300 sm:py-32 md:py-40">
    <div class="container flex flex-col items-center justify-center h-full max-w-6xl mx-auto sm:flex-row sm:justify-between">
        <div class="relative flex flex-col items-start justify-center w-full mb-10 sm:w-1/3 lg:w-2/5 sm:mb-0 sm:pr-10">
            <h2 class="mb-5 text-2xl font-black leading-tight xl:text-4xl">New to Hyde?
                <small><br>Start your journey here.</small>
            </h2>
            <p class="mb-8 text-base text-violet-900 md:text-lg xl:text-xl md:max-w-lg">
                HydePHP is an open-source console application that turns easy-to-use Markdown text files into amazing static websites, backed by the power of Laravel.
            </p>
            <a href="docs/1.x/quickstart" class="relative group">
                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-black rounded group-hover:m-0"></span>
                <span class="relative inline-block w-full h-full px-5 py-3 text-lg font-bold  bg-white border-2 border-black rounded fold-bold group-hover:bg-violet-500 group-hover:text-white">GET STARTED</span>
            </a>
        </div>
        <div class="relative flex flex-col justify-center w-full h-full -mr-0 sm:w-2/3 lg:w-3/5 sm:-mr-20">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/727679114?h=839eaecd83&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="HydePHP in 100 seconds" data-ready="true"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
        </div>
    </div>
</div>
<!-- Features Section -->
<div class="relative w-full py-20 pb-20 overflow-hidden bg-white md:pt-40 md:pb-64">
    <!-- CURVED SVG BORDER INVERT -->

    <svg class="absolute top-0 w-full text-violet-300 fill-current" viewBox="0 0 1400 50" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 50C309.151 16.667 542.484 0 700 0c157.516 0 390.849 16.667 700 50V0H0v50z"></path>
    </svg>

    <div class="container relative flex flex-col justify-between h-full max-w-6xl px-8 mx-auto xl:px-0">
        <header class="mb-8">
            <div class="flex mb-2">
                <h2 class="relative  items-center self-start inline-block w-auto text-4xl font-black">
                    <span class="absolute inline-block w-full h-4 mt-3 -ml-2 bg-violet-300"></span>
                    <span class="relative">Feature List</span>
                </h2>
            </div>
            <p class="text-lg max-w-2xl">
                While the full feature set is too long to list on this page, here are some things I think will make you especially fall in love with Hyde!
            </p>
        </header>
        <div class="flex w-full h-full">
            <div class="w-full lg:w-2/3">
                <!-- Feature blocks first column -->
                <div class="flex flex-col w-full mb-10 sm:flex-row">
                    <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                        <div class="relative ml-0 mr-0 sm:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-500 rounded-lg"></span>
                            <div class="relative p-5 bg-white border-2 border-indigo-500 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <svg class="w-8 h-8 text-indigo-500 fill-current" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="48px" viewBox="0 0 20 20" width="48px" fill="#000000"><g><rect fill="none" height="20" width="20"></rect></g><g><g><path d="M15.71,13.21l-3.46-3.46l1.33-1.33l-2-2l-1.33,1.33L6.79,4.29C6.4,3.9,5.76,3.9,5.37,4.29L4.29,5.37 C3.9,5.76,3.9,6.4,4.29,6.79l3.46,3.46L4,14v2h2l3.75-3.75l3.46,3.46c0.39,0.39,1.02,0.39,1.41,0l1.08-1.08 C16.1,14.24,16.1,13.6,15.71,13.21z M8.46,9.54L5,6.08L6.08,5c0,0,0,0,0,0l0.69,0.69L6.23,6.23L6.89,6.9l0.54-0.54l1.06,1.06 L7.95,7.96l0.67,0.67l0.54-0.54l0.38,0.38L8.46,9.54z M13.92,15l-3.46-3.46l1.08-1.08l0.4,0.4L11.4,11.4l0.67,0.67l0.54-0.54 l1.06,1.06l-0.54,0.54l0.67,0.67l0.54-0.54L15,13.92L13.92,15z"></path><path d="M15.62,6.38c0.2-0.2,0.2-0.51,0-0.71l-1.29-1.29c-0.2-0.2-0.51-0.2-0.71,0l-1.34,1.34l2,2L15.62,6.38z"></path></g><g></g></g></svg>
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Easy Content Creation</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-indigo-500 uppercase">Markdown, Blade, both? It's up to you.</p>
                                <p class="mb-2 text-gray-600">
                                    Create content with Markdown and let Hyde do the heavy lifting.
                                    Sprinkle in some Front Matter for extra credit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2">
                        <div class="relative ml-0 md:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"></span>
                            <div class="relative p-5 bg-white border-2 border-purple-500 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <svg class="w-8 h-8 text-purple-500 fill-current" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M20 4H4v2h16V4zm1 10v-2l-1-5H4l-1 5v2h1v6h10v-6h4v6h2v-6h1zm-9 4H6v-4h6v4z"></path></svg>
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Built-in Frontend</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase">Batteries (and more) Included</p>
                                <p class="mb-2 text-gray-600">
                                    Hyde comes shipped with a full-featured frontend using TailwindCSS and customizable Laravel Blade templates.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feature blocks second column -->
                <div class="flex flex-col w-full mb-5 sm:flex-row">
                    <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                        <div class="relative ml-0 mr-0 sm:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"></span>
                            <div class="relative p-5 bg-white border-2 border-blue-400 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <svg class="w-8 h-8 text-blue-400 fill-current" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.01 7L16 3h-2v4h-4V3H8v4h-.01C7 6.99 6 7.99 6 8.99v5.49L9.5 18v3h5v-3l3.5-3.51v-5.5c0-1-1-2-1.99-1.99z"></path></svg>
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">The power of Laravel</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-blue-400 uppercase">Based on Laravel Zero</p>
                                <p class="mb-2 text-gray-600">Laravel Developers will feel right at home with Hyde.
                                    Scaffold files using the Artisan-based HydeCLI and use Blade templates.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2">
                        <div class="relative ml-0 md:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-teal-500 rounded-lg"></span>
                            <div class="relative p-5 bg-white border-2 border-teal-500 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <svg class="w-8 h-8 text-teal-500 fill-current" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="48px" viewBox="0 0 24 24" width="48px" fill="#000000"><rect fill="none" height="24" width="24"></rect><g><path d="M17.41,6.59L15,5.5l2.41-1.09L18.5,2l1.09,2.41L22,5.5l-2.41,1.09L18.5,9L17.41,6.59z M21.28,12.72L20.5,11l-0.78,1.72 L18,13.5l1.72,0.78L20.5,16l0.78-1.72L23,13.5L21.28,12.72z M16.24,14.37l1.94,1.47l-2.5,4.33l-2.24-0.94 c-0.2,0.13-0.42,0.26-0.64,0.37L12.5,22h-5l-0.3-2.41c-0.22-0.11-0.43-0.23-0.64-0.37l-2.24,0.94l-2.5-4.33l1.94-1.47 C3.75,14.25,3.75,14.12,3.75,14s0-0.25,0.01-0.37l-1.94-1.47l2.5-4.33l2.24,0.94c0.2-0.13,0.42-0.26,0.64-0.37L7.5,6h5l0.3,2.41 c0.22,0.11,0.43,0.23,0.64,0.37l2.24-0.94l2.5,4.33l-1.94,1.47c0.01,0.12,0.01,0.24,0.01,0.37S16.25,14.25,16.24,14.37z M13,14 c0-1.66-1.34-3-3-3s-3,1.34-3,3s1.34,3,3,3S13,15.66,13,14z"></path></g></svg>
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Customizable to the Core</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-teal-500 uppercase">Convention over configuration</p>
                                <p class="mb-2 text-gray-600">Hyde is pre-configured for the majority of use cases. Not happy with something? You have the power to change it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden w-1/3 lg:block">
                <div class="absolute w-screen max-w-4xl pl-12 -mt-20">
                    <div class="absolute top-0 left-0 w-full h-full mt-2 ml-10 bg-gray-900 rounded-lg"></div>
                    <div class="relative overflow-hidden border-2 border-black rounded-lg">
                        <img src="media/markdown-pages.png" alt="Splitscreen view of the Markdown source for a HydePHP website, and it's Markdown preview" class="object-cover w-full h-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Testimonials -->
    <section id="testimonials" class="flex items-center justify-center w-full px-8 pt-10 md:pt-16 lg:pt-24 xl:pt-40 xl:px-0">
    <div class="max-w-6xl mx-auto">
        <div class="flex-col items-center">
            <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">
                <p class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">
                </p>
                <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                    Testimonials
                </h2>
                <p class="my-6 text-xl font-medium text-gray-500">
                    We are proud to hear that so many people use Hyde to build their websites.
                    Here are some of our favourite mentions.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center max-w-2xl py-8 mx-auto xl:flex-row xl:max-w-full flex-wrap">
                                                                        <div class="w-full xl:w-1/2 xl:px-4 h-auto ">
                        <blockquote class="my-4 flex flex-col-reverse items-center justify-between w-full h-full flex-1 col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-gray-50 hover:shadow ease">
                            <div class="flex flex-col sm:pr-8">
                                <div class="relative sm:pl-12">
                                    <svg class="hidden sm:block absolute left-0 w-10 h-10 text-indigo-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600 prose">
                                        </p><p>What I'm mostly impressed with is how clean and straightforward the documentation is. Writing good documentation is an art and Caen did an amazing job at it.
<br><br>
⭐️⭐️⭐️⭐️</p>

                                    <p></p>
                                </div>
                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800">
                                                                            <a href="https://twitter.com/SavvasStephnds" rel="author nofollow">
                                            @SavvasStephnds
                                        </a>
                                                                        <span class="mt-1 text-sm leading-5 text-gray-500">
                                                                                    <span>-</span>
                                            <a href="https://twitter.com/SavvasStephnds/status/1534928318503391233?ref_src=twsrc%5Etfw" class="text-gray-500 hover:text-indigo-500" rel="nofollow">
                                                Via Twitter
                                            </a>
                                                                                                                                                            </span>
                                </h3>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0" onerror="this.onerror=null; this.src='https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png';" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Profile image">
                        </blockquote>
                    </div>
                                                        <div class="w-full xl:w-1/2 xl:px-4 h-auto ">
                        <blockquote class="my-4 flex flex-col-reverse items-center justify-between w-full h-full flex-1 col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-gray-50 hover:shadow ease">
                            <div class="flex flex-col sm:pr-8">
                                <div class="relative sm:pl-12">
                                    <svg class="hidden sm:block absolute left-0 w-10 h-10 text-indigo-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600 prose">
                                        </p><p>HydePHP is actually simple to setup. Now, I'm not a PHP developer and I can barely write a function in this language, but the project actually delivers on what it promises.
<br><br>
Docs: 10/10
Project: 10/10</p>

                                    <p></p>
                                </div>
                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800">
                                                                            <a href="https://twitter.com/peteralexbizjak" rel="author nofollow">
                                            @peteralexbizjak
                                        </a>
                                                                        <span class="mt-1 text-sm leading-5 text-gray-500">
                                                                                    <span>-</span>
                                            <a href="https://twitter.com/peteralexbizjak/status/1535177275649536001" class="text-gray-500 hover:text-indigo-500" rel="nofollow">
                                                Via Twitter
                                            </a>
                                                                                                                                                            </span>
                                </h3>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0" onerror="this.onerror=null; this.src='https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png';" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Profile image">
                        </blockquote>
                    </div>
                                                        <div class="w-full xl:w-1/2 xl:px-4 h-auto ">
                        <blockquote class="my-4 flex flex-col-reverse items-center justify-between w-full h-full flex-1 col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-gray-50 hover:shadow ease">
                            <div class="flex flex-col sm:pr-8">
                                <div class="relative sm:pl-12">
                                    <svg class="hidden sm:block absolute left-0 w-10 h-10 text-indigo-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600 prose">
                                        </p><p>Holy f. Your project is definitely one of my favorites of the whole [startup] tournament, I constantly keep an eye on the top 50 for it.</p>

                                    <p></p>
                                </div>
                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800">
                                                                            Felipe Lecot
                                                                        <span class="mt-1 text-sm leading-5 text-gray-500">
                                                                                                                            <span>-</span>
                                            Director
                                                                                                                            <span>-</span>
                                                                                            <a href="https://do2software.com?ref=HydePHP.com" class="text-gray-500 hover:text-indigo-500" rel="nofollow">
                                                    Do2 Software
                                                </a>
                                                                                                                        </span>
                                </h3>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0" onerror="this.onerror=null; this.src='https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png';" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Profile image">
                        </blockquote>
                    </div>
                                                        <div class="w-full xl:w-1/2 xl:px-4 h-auto ">
                        <blockquote class="my-4 flex flex-col-reverse items-center justify-between w-full h-full flex-1 col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-gray-50 hover:shadow ease">
                            <div class="flex flex-col sm:pr-8">
                                <div class="relative sm:pl-12">
                                    <svg class="hidden sm:block absolute left-0 w-10 h-10 text-indigo-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600 prose">
                                        </p><p>Want to have your mention here? Send a Tweet at <a href="https://twitter.com/HydeFramework">@HydeFramework</a>, and/or use the hashtag <a href="https://twitter.com/hashtag/HydePHP">#HydePHP</a>!</p>

                                    <p></p>
                                </div>
                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800">
                                                                            This could be you!
                                                                        <span class="mt-1 text-sm leading-5 text-gray-500">
                                                                                                                                                                    <span>-</span>
                                                                                            CEO SomeCompany
                                                                                                                        </span>
                                </h3>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0" onerror="this.onerror=null; this.src='https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png';" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Profile image">
                        </blockquote>
                    </div>
                            </div>
            <footer class="text-center opacity-75">
                <small>Testimonials may be edited for formatting, spelling, and brevity, but never content.</small>
                <small>Want your own testimonial here? Want to remove yours? This
                    <a class="text-indigo-700" href="https://github.com/hydephp/hydephp.com/blob/master/_pages/index.blade.php">page is open source</a>.</small>
            </footer>
        </div>
    </div>
</section>
    <!-- End Testimonials-->
    <!-- Blob SVG Border -->
    <svg class="absolute bottom-0 w-full text-gray-100 fill-current" viewBox="0 0 1400 74" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C87.243 11.422 173.12 5.133 257.633 5.133 468.305 5.133 578.027 74 700 74c136.015 0 290.882-96.208 481.234-68.867C1268.807 17.71 1341.73 24 1400 24v50H0V24z"></path></svg>

</div>
<!-- End Features Section -->

<!-- End Features Section -->

<!-- Begin Breakdown Section -->

<div class="relative w-full pt-24 pb-32 md:pb-56 bg-gray-100">

    <div class="container relative flex flex-col justify-between h-full max-w-6xl px-8 mx-auto">
        <div class="flex flex-col justify-center w-full">
            <h2 class="relative  items-center self-center inline-block w-auto mb-5 text-4xl font-black">
                <span class="absolute inline-block w-full h-4 mt-3 -ml-2 bg-violet-300"></span>
                <span class="relative">Who's it for?</span>
            </h2>
            <p class="self-center mb-12 font-medium text-gray-600 mx-auto max-w-3xl text-center">
                While you don't need to know PHP or Laravel, Hyde is aimed at developers and requires basic command-line knowledge.
                Here is a breakdown of some key bullet points tailored to various use cases.
            </p>


            <div class="flex flex-col sm:flex-row items-center lg:items-stretch justify-center h-full sm:flex-wrap ">

                <!-- FEATURE 1 -->
                <div class="w-full min-w-[16rem] max-w-sm mx-4 lg:mx-0 lg:w-1/3 h-auto flex flex-auto">
                    <div class="flex flex-col h-full flex-auto items-center px-4 py-12 bg-white border-2 border-black rounded-lg lg:px-5 xl:px-12 lg:rounded-r-none lg:rounded-l-lg">

                        <h4 class="flex text-center items-center my-2 text-2xl font-black">Laravel Artisans</h4>
                        <div class="font-light text-center">Are Hyde <span class="font-bold text-red-500">first-class citizens</span>.</div>

                        <ul class="flex flex-col justify-start px-2 py-10 pt-8 list-disc pricing-list">

                            <li class="mt-2">
                                HydePHP is based on Laravel Zero
                            </li>

                            <li class="mt-2">
                                Render <span class="">Blade</span> files to HTML
                            </li>

                            <li class="mt-2">
                                Artisan-based CLI interface
                            </li>

                            <li class="mt-2">
                                Automatic <span class="">pseudo-routing</span>
                            </li>

                            <li class="mt-2">
                                Preconfigured Laravel Mix
                            </li>

                            <li class="mt-2">
                                File-based <span class="">Collections</span>
                            </li>

                        </ul>

                        <a href="https://hydephp.com/docs/1.x/architecture-concepts" class="relative w-full text-center group mt-auto">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-red-500 rounded  group-hover:m-0 "></span>
                            <span class="relative inline-block w-full h-full px-5 py-3 text-base font-bold bg-white border-2 border-black rounded fold-bold  group-hover:bg-red-300 ">Architecture Concepts</span>
                        </a>

                    </div>
                </div>
                <!-- End FEATURE 1 -->

                <!-- FEATURE 2-->
                <div class="w-full min-w-[16rem] max-w-sm mx-4 lg:mx-0 lg:w-1/3 h-auto flex flex-auto">
                    <div class="flex flex-col h-full flex-auto items-center px-4 py-12 my-8 bg-white border-2 border-black rounded-lg lg:border-l-0 lg:border-r-0 lg:my-0 lg:rounded-none lg:px-5 xl:px-12">

                        <h4 class="flex text-center items-center my-2 text-2xl font-black sm:whitespace-nowrap">Markdown Aficionados</h4>
                        <div class="font-light text-center">Have  <span class="font-bold text-blue-500">their rightful place</span>, at last.</div>

                        <ul class="flex flex-col justify-start px-2 py-10 pt-8 list-disc pricing-list">

                            <li class="mt-2">
                                <span class=""></span> Simple Markdown Pages
                            </li>

                            <li class="mt-2">
                                <span class="">Easy</span> Documentation sites
                            </li>

                            <li class="mt-2">
                                <span class="">Smart</span> Blog Posts
                            </li>

                            <li class="mt-2">
                                Torchlight Syntax Highlighting
                            </li>

                            <li class="mt-2">
                                YAML Front Matter
                            </li>

                            <li class="mt-2">
                                Automatic RSS feed
                            </li>
                        </ul>

                        <a href="https://hydephp.com/docs/1.x/blog-posts" class="relative w-full text-center group mt-auto">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded group-hover:m-0 "></span>
                            <span class="relative inline-block w-full h-full px-5 py-3 text-base font-bold bg-white border-2 border-black rounded fold-bold  group-hover:bg-blue-300 ">Markdown Documentation</span>
                        </a>

                    </div>
                </div>
                <!-- END FEATURE 2 -->

                <!-- FEATURE 3 -->
                <div class="w-full min-w-[16rem] max-w-sm mx-4 lg:mx-0 lg:w-1/3 h-auto flex flex-auto">
                    <div class="flex flex-col h-full flex-auto items-center px-4 py-12 ml-0 bg-white border-2 border-black rounded-lg lg:px-6 xl:px-12 lg:rounded-l-none lg:rounded-r-lg">

                        <h4 class="flex text-center items-center my-2 text-2xl font-black">Developers &amp; More</h4>
                        <div class="font-light text-center">And some <span class="font-bold text-green-500">more features</span>.</div>


                        <ul class="flex flex-col justify-start px-2 py-10 pt-8 list-disc pricing-list">

                            <li class="mt-2">
                                <span class="">Free</span> and Open Source
                            </li>

                            <li class="mt-2">
                                <span class="">Automatic</span> Navigation Menus
                            </li>

                            <li class="mt-2">
                                <span class="">Customizable</span> &amp; Configurable
                            </li>

                            <li class="mt-2">
                                No databases needed
                            </li>

                            <li class="mt-2">
                                Version controllable
                            </li>

                            <li class="mt-2">
                                And Much More
                            </li>

                        </ul>

                        <a href="https://hydephp.com/docs/1.x/quickstart" class="relative w-full text-center group mt-auto">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded   group-hover:m-0 "></span>
                            <span class="relative inline-block w-full h-full px-5 py-3 text-base font-bold bg-white border-2 border-black rounded fold-bold group-hover:bg-green-300">Installation Guide</span>
                        </a>

                    </div>
                </div>
                <!-- END FEATURE 3 -->

            </div>
        </div>
    </div>

    <!-- Blob SVG Border -->
    <svg class="absolute bottom-0 w-full text-white fill-current" viewBox="0 0 1400 74" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C87.243 11.422 173.12 5.133 257.633 5.133 468.305 5.133 578.027 74 700 74c136.015 0 290.882-96.208 481.234-68.867C1268.807 17.71 1341.73 24 1400 24v50H0V24z"></path></svg>

</div>



<div>
    <section id="posts" class="w-screen py-16  lg:mt-8 relative">
	<header class="lg:mb-12 xl:mb-16 max-w-7xl mx-auto px-8">
		<h2 class="text-3xl text-left opacity-75 dark:opacity-90 leading-10 tracking-tight font-extrabold sm:leading-none sm:mb-8 md:text-4xl md:text-center lg:text-5xl">
			Latest Posts
		</h2>
		<p class="sm:text-center text-lg mx-auto mt-4 mb-8">
			Here are the latest posts from the Hyde Blog! Fully created using Hyde, of course!
		</p>
	</header>
	<div class="max-w-xl mx-auto px-8">
				<article class="mt-4 mb-8" itemscope="" itemtype="https://schema.org/Article">
    <meta itemprop="identifier" content="hydephp-version-1-7-released">
            <meta itemprop="url" content="https://hydephp.com/posts/hydephp-version-1-7-released">
    
    <header>
        <a href="posts/hydephp-version-1-7-released" class="block w-fit">
            <h2 class="text-2xl font-bold text-gray-700 hover:text-gray-900 dark:text-gray-200 dark:hover:text-white transition-colors duration-75">
                HydePHP Version v1.7 Released
            </h2>
        </a>
    </header>

    <footer>
                    <span class="opacity-75">
                <span itemprop="dateCreated datePublished">Jul 5th, 2024</span>,
            </span>
                            <span itemprop="author" itemscope="" itemtype="https://schema.org/Person">
            <span class="opacity-75">by</span>
            <span itemprop="name">
                Caen
            </span>
        </span>
            </footer>

            <section role="doc-abstract" aria-label="Excerpt">
            <p class="leading-relaxed my-1">
                With several quality of life improvements, the developer experience with HydePHP is even better.
            </p>
        </section>
    
    <footer>
        <a href="posts/hydephp-version-1-7-released" class="text-indigo-500 hover:underline font-medium">
            Read post
        </a>
    </footer>
</article>				<article class="mt-4 mb-8" itemscope="" itemtype="https://schema.org/Article">
    <meta itemprop="identifier" content="how-to-turn-your-github-readme-into-a-static-website">
            <meta itemprop="url" content="https://hydephp.com/posts/how-to-turn-your-github-readme-into-a-static-website">
    
    <header>
        <a href="posts/how-to-turn-your-github-readme-into-a-static-website" class="block w-fit">
            <h2 class="text-2xl font-bold text-gray-700 hover:text-gray-900 dark:text-gray-200 dark:hover:text-white transition-colors duration-75">
                How to turn your GitHub Readme into a static website
            </h2>
        </a>
    </header>

    <footer>
                    <span class="opacity-75">
                <span itemprop="dateCreated datePublished">Jun 8th, 2024</span>,
            </span>
                            <span itemprop="author" itemscope="" itemtype="https://schema.org/Person">
            <span class="opacity-75">by</span>
            <span itemprop="name">
                HydePHP
            </span>
        </span>
            </footer>

            <section role="doc-abstract" aria-label="Excerpt">
            <p class="leading-relaxed my-1">
                Learn how to create a static website based on your GitHub Readme, using HydePHP to build and deploy it to GitHub Pages - all for free and in minutes!
            </p>
        </section>
    
    <footer>
        <a href="posts/how-to-turn-your-github-readme-into-a-static-website" class="text-indigo-500 hover:underline font-medium">
            Read post
        </a>
    </footer>
</article>				<article class="mt-4 mb-8" itemscope="" itemtype="https://schema.org/Article">
    <meta itemprop="identifier" content="hydephp-version-1-6-released">
            <meta itemprop="url" content="https://hydephp.com/posts/hydephp-version-1-6-released">
    
    <header>
        <a href="posts/hydephp-version-1-6-released" class="block w-fit">
            <h2 class="text-2xl font-bold text-gray-700 hover:text-gray-900 dark:text-gray-200 dark:hover:text-white transition-colors duration-75">
                HydePHP Version v1.6 Released
            </h2>
        </a>
    </header>

    <footer>
                    <span class="opacity-75">
                <span itemprop="dateCreated datePublished">Apr 17th, 2024</span>,
            </span>
                            <span itemprop="author" itemscope="" itemtype="https://schema.org/Person">
            <span class="opacity-75">by</span>
            <span itemprop="name">
                Caen
            </span>
        </span>
            </footer>

            <section role="doc-abstract" aria-label="Excerpt">
            <p class="leading-relaxed my-1">
                This release introduces new features for head section customization, routing helpers, and configuration type safety.
            </p>
        </section>
    
    <footer>
        <a href="posts/hydephp-version-1-6-released" class="text-indigo-500 hover:underline font-medium">
            Read post
        </a>
    </footer>
</article>			</div>
	
	<footer class="lg:mb-12 xl:mb-16 max-w-7xl mx-auto px-8">
		<p class="sm:text-center text-lg mx-auto mt-8 mb-8 prose dark:prose-invert">
			See more on the <a href="posts">posts page</a>!
		</p>
	</footer>
	<svg class="absolute bottom-0 w-full text-gray-100  dark:text-slate-900 fill-current" viewBox="0 0 1400 74" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C87.243 11.422 173.12 5.133 257.633 5.133 468.305 5.133 578.027 74 700 74c136.015 0 290.882-96.208 481.234-68.867C1268.807 17.71 1341.73 24 1400 24v50H0V24z"></path></svg>

</section>
</div>


<!-- Blob SVG Border -->

<!-- END Breakdown SECTION -->


<style> html, body { scroll-behavior: smooth; } </style>
 
    </section>

    <footer class="px-4 pt-12 pb-6  dark:text-white dark:bg-slate-900 bg-gray-100">
	<div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
		<div class="block md:w-1/3 px-2 mx:px-0">
			<span class="flex items-center w-fit">
				<a href="./" class="flex items-center mr-4">
					<img class="w-auto h-8 mt-1 text-black dark:text-white fill-current" src="/media/logo.svg">
					
					<span class="ml-2 text-lg font-black">HydePHP</span>
				</a>
			</span>
			
			<p class="font-light text-left text-gray-700 text-sm pl-1 pr-6 lg:pr-8 pt-2 dark:text-gray-300 ">
				Create websites, blogs, documentation sites, and more, with the power of Laravel and the simplicity of Markdown. Your next website is minutes away from becoming a reality.
			</p>
		</div>
		<div class="flex flex-wrap md:flex-nowrap whitespace-nowrap md:w-2/3 mt-3 sm:mt-6 mb-4 text-sm  lg:mt-0">
			<ul class="flex flex-col w-fit sm:w-full pr-4 p-0 font-normal text-left text-gray-300 dark:text-gray-700 list-none">
				<li class="inline-block px-3 py-2 font-medium tracking-wide text-black dark:text-white uppercase mt-4 md:mt-0">Resources</li>
				<li><a href="docs/1.x/" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
					Documentation</a></li>
					
					<li><a href="community" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						Community Portal
					</a></li>
					
					<li><a href="legal" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						Legal Information
					</a></li>
				</ul>
				<ul class="flex flex-col w-fit sm:w-full pr-4 p-0 font-normal text-left text-gray-300 dark:text-gray-700 list-none">
					<li class="inline-block px-3 py-2 font-medium tracking-wide text-black dark:text-white uppercase mt-4 md:mt-0">Developers</li>
					<li><a href="community.html#developers" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						Developer Resources
					</a></li>
					<li><a href="https://github.com/hydephp/" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">GitHub Organization</a></li>
					<li><a href="https://github.com/hydephp/develop" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">Source Code</a></li>
				</ul>
				<ul class="flex flex-col w-fit sm:w-full pr-4 p-0 font-normal text-left text-gray-300 dark:text-gray-700 list-none">
					<li class="inline-block px-3 py-2 font-medium tracking-wide text-black dark:text-white uppercase mt-4 md:mt-0">Extra</li>
					<li><a href="sitemap" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						Sitemap
					</a></li>
					<li><a href="posts" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						Blog Posts
					</a></li>
					
					<li><a href="feed.xml" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						RSS Feed
					</a></li>
				</ul>
				<div class="flex flex-col w-full text-gray-300 dark:text-gray-700">
					<div class="inline-block px-3 py-2 font-medium tracking-wide text-black dark:text-white uppercase mt-4 md:mt-0">Connect</div>
					<div class="flex justify-start pl-4 mt-2">
						
						<a title="GitHub Organization" class="items-center block mr-4 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white" target="_blank" rel="noopener" href="https://github.com/HydePHP">
							<svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/1000/svg">
								<path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
							</svg>
						</a>
						<a title="Twitter @HydeFramework" class="items-center block  mr-4  dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white" target="_blank" rel="noopener" href="https://twitter.com/HydeFramework">
							<svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/1000/svg">
								<path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z"></path>
							</svg>
						</a>
						<a title="Discord Server" class="items-center block  mr-4 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white" target="_blank" rel="noopener" href="https://discord.hydephp.com">
							<svg class="w-5 h-5 fill-current" width="71" height="55" viewBox="0 0 71 55" fill="none" xmlns="http://www.w3.org/1000/svg"> <g clip-path="url(#clip0)"> <path d="M60.1045 4.8978C55.5792 2.8214 50.7265 1.2916 45.6527 0.41542C45.5603 0.39851 45.468 0.440769 45.4204 0.525289C44.7963 1.6353 44.105 3.0834 43.6209 4.2216C38.1637 3.4046 32.7345 3.4046 27.3892 4.2216C26.905 3.0581 26.1886 1.6353 25.5617 0.525289C25.5141 0.443589 25.4218 0.40133 25.3294 0.41542C20.2584 1.2888 15.4057 2.8186 10.8776 4.8978C10.8384 4.9147 10.8048 4.9429 10.7825 4.9795C1.57795 18.7309 -0.943561 32.1443 0.293408 45.3914C0.299005 45.4562 0.335386 45.5182 0.385761 45.5576C6.45866 50.0174 12.3413 52.7249 18.1147 54.5195C18.2071 54.5477 18.305 54.5139 18.3638 54.4378C19.7295 52.5728 20.9469 50.6063 21.9907 48.5383C22.0523 48.4172 21.9935 48.2735 21.8676 48.2256C19.9366 47.4931 18.0979 46.6 16.3292 45.5858C16.1893 45.5041 16.1781 45.304 16.3068 45.2082C16.679 44.9293 17.0513 44.6391 17.4067 44.3461C17.471 44.2926 17.5606 44.2813 17.6362 44.3151C29.2558 49.6202 41.8354 49.6202 53.3179 44.3151C53.3935 44.2785 53.4831 44.2898 53.5502 44.3433C53.9057 44.6363 54.2779 44.9293 54.6529 45.2082C54.7816 45.304 54.7732 45.5041 54.6333 45.5858C52.8646 46.6197 51.0259 47.4931 49.0921 48.2228C48.9662 48.2707 48.9102 48.4172 48.9718 48.5383C50.038 50.6034 51.2554 52.5699 52.5959 54.435C52.6519 54.5139 52.7526 54.5477 52.845 54.5195C58.6464 52.7249 64.529 50.0174 70.6019 45.5576C70.6551 45.5182 70.6887 45.459 70.6943 45.3942C72.1747 30.0791 68.2147 16.7757 60.1968 4.9823C60.1772 4.9429 60.1437 4.9147 60.1045 4.8978ZM23.7259 37.3253C20.2276 37.3253 17.3451 34.1136 17.3451 30.1693C17.3451 26.225 20.1717 23.0133 23.7259 23.0133C27.308 23.0133 30.1626 26.2532 30.1066 30.1693C30.1066 34.1136 27.28 37.3253 23.7259 37.3253ZM47.3178 37.3253C43.8196 37.3253 40.9371 34.1136 40.9371 30.1693C40.9371 26.225 43.7636 23.0133 47.3178 23.0133C50.9 23.0133 53.7545 26.2532 53.6986 30.1693C53.6986 34.1136 50.9 37.3253 47.3178 37.3253Z" fill=""></path> </g> <defs> <clipPath id="clip0"> <rect width="71" height="55" fill="white"></rect> </clipPath> </defs> </svg>
						</a>
						<a title="Contact Information" class="items-center block dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white" target="_blank" rel="noopener" href="/contact">
							<svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"></path></svg>
						</a>
						
					</div>
				</div>
			</div>
		</div>
		<div class="mt-4 mb-6 prose mx-auto text-center text-sm dark:prose-invert">
					</div>
		<div class="relative pt-6 text-center text-gray-600 dark:text-gray-300 border-t border-gray-300 dark:border-gray-800 "> 
			<div class="prose mx-auto text-center text-sm dark:prose-invert">
				<p>Site proudly built with <a href="https://github.com/hydephp/hyde">HydePHP</a> 🎩</p>

			</div>
			<a href="#app" aria-label="Go to top of page" class="float-right bottom-0 right-4 absolute">
				<button title="Scroll to top">
					<svg role="presentation" class="fill-current text-gray-500 h-6 w-6" xmlns="http://www.w3.org/1000/svg" viewBox="0 0 20 20">
						<path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path>
					</svg>
				</button>
			</a>
		</div>
	
</footer> 

    <script defer="" src="media/app.js?v=636e955fc6115e5920038d104907bc0d"></script>


<script defer="" src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" integrity="sha256-gOkV4d9/FmMNEkjOzVlyM2eNAWSUXisT+1RbMTTIgXI=" crossorigin="anonymous"></script>

<script>
    function toggleTheme() {
        if (localStorage.getItem('color-theme') === 'dark' || !('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem('color-theme', 'light');
            document.getElementById('meta-color-scheme').setAttribute('content', 'light');
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem('color-theme', 'dark');
            document.getElementById('meta-color-scheme').setAttribute('content', 'dark');
        }
    }
</script>



 


<bookmark-sidebar-r6rixzlvvlf id="redeviation-bs-sidebar" class="notranslate" aria-hidden="true" data-theme="default" data-pos="right"></bookmark-sidebar-r6rixzlvvlf><div id="redeviation-bs-indicator" data-theme="default" style="height: 100%; top: 0%;" class="redeviation-bs-fullHeight"></div></body>
</html>
