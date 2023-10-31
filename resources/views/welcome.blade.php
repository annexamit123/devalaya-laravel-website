<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div> -->
        <div class="home-page">
  <div class="footer-sec">
    <div class="rectangle-45"></div>
    <img class="footer-bg-1-1" src="footer-bg-1-1.png" />
    <div class="bottom-footer">
      <div class="copyright-2023-annexlogics-designed-by-annexlogics">
        <span
          ><span class="copyright-2023-annexlogics-designed-by-annexlogics-span"
            >©copyright 2023 </span
          ><span
            class="copyright-2023-annexlogics-designed-by-annexlogics-span2"
            >Annexlogics</span
          ><span
            class="copyright-2023-annexlogics-designed-by-annexlogics-span3"
          >
            Designed By Annexlogics</span
          ></span
        >
      </div>
      <div class="privacy-policy-terms-of-use">
        Privacy Policy | Terms of Use
      </div>
    </div>
    <div class="mid-footer">
      <div class="group-30">
        <div
          class="devalaya-e-learn-is-an-ed-tech-start-up-recognized-by-the-ministry-of-commerce-industry-govt-of-india-and-led-by-a-team-of-seasoned-professionals"
        >
          Devalaya eLearn is an ed-tech start-up recognized by <br />the
          Ministry of Commerce &amp; Industry, Govt. <br />of India, and led by
          a team of <br />seasoned professionals
        </div>
        <img class="image-16" src="image-16.png" />
      </div>
      <div class="link">
        <div class="all-courses">All Courses</div>
        <div class="forms-and-admision-materials">
          Forms and Admision materials
        </div>
        <div class="course-outline">Course Outline</div>
        <div class="policy">Policy</div>
        <div class="fa-qs">FAQs</div>
        <div class="online-course">Online Course</div>
        <div class="rectangle-46"></div>
        <div class="courses">Courses</div>
      </div>
      <div class="link2">
        <div class="contact-us">Contact US</div>
        <div class="privacy-policy">Privacy Policy</div>
        <div class="fa-qs2">FAQs</div>
        <div class="t-c">T&amp;C</div>
        <div class="rectangle-462"></div>
        <div class="help-support">Help &amp; Support</div>
      </div>
      <div class="link3">
        <img class="image-17" src="image-17.png" />
        <div class="rectangle-463"></div>
        <div class="follow-us">Follow Us</div>
        <div class="group-31">
          <div class="group-29">
            <div class="_887-558-8720">(887) 558-8720</div>
            <div class="frame">
              <svg
                class="group"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15.8063 12.3893C15.3969 11.9629 14.903 11.735 14.3796 11.735C13.8604 11.735 13.3623 11.9587 12.9359 12.3851L11.602 13.7147C11.4923 13.6556 11.3825 13.6007 11.277 13.5459C11.1251 13.4699 10.9815 13.3981 10.8591 13.3222C9.60967 12.5286 8.47418 11.4944 7.38513 10.1563C6.85749 9.48936 6.50291 8.92795 6.24542 8.3581C6.59156 8.04151 6.91236 7.71226 7.22473 7.39568C7.34292 7.27749 7.46111 7.15507 7.5793 7.03688C8.46574 6.15044 8.46574 5.00229 7.5793 4.11585L6.42693 2.96348C6.29608 2.83263 6.161 2.69755 6.03437 2.56248C5.7811 2.30077 5.51517 2.03061 5.24079 1.77734C4.83134 1.37211 4.34169 1.15684 3.82671 1.15684C3.31173 1.15684 2.81364 1.37211 2.39153 1.77734L2.38308 1.78579L0.947898 3.23364C0.407592 3.77394 0.0994492 4.43244 0.031911 5.19647C-0.0693963 6.42904 0.293621 7.57719 0.572217 8.32855C1.25604 10.1732 2.27756 11.8827 3.80139 13.7147C5.65024 15.9224 7.87478 17.6657 10.4159 18.8941C11.3868 19.3542 12.6827 19.8987 14.1305 19.9916C14.2192 19.9958 14.312 20 14.3964 20C15.3715 20 16.1904 19.6496 16.832 18.9532C16.8363 18.9447 16.8447 18.9405 16.8489 18.932C17.0684 18.6661 17.3217 18.4255 17.5876 18.168C17.7691 17.995 17.9549 17.8134 18.1364 17.6235C18.5543 17.1887 18.7738 16.6822 18.7738 16.163C18.7738 15.6396 18.55 15.1372 18.1237 14.7151L15.8063 12.3893ZM17.3175 16.8341C17.3132 16.8341 17.3132 16.8384 17.3175 16.8341C17.1528 17.0114 16.984 17.1718 16.8025 17.3491C16.5281 17.6108 16.2495 17.8852 15.9878 18.1933C15.5615 18.6492 15.0592 18.8645 14.4007 18.8645C14.3373 18.8645 14.2698 18.8645 14.2065 18.8603C12.9528 18.7801 11.7878 18.2904 10.914 17.8725C8.52484 16.716 6.42693 15.0739 4.6836 12.9929C3.2442 11.258 2.28178 9.65399 1.64439 7.93176C1.25182 6.8807 1.1083 6.0618 1.17162 5.28933C1.21383 4.79546 1.40378 4.38601 1.75414 4.03565L3.19354 2.59624C3.40038 2.40207 3.61988 2.29654 3.83516 2.29654C4.10109 2.29654 4.31637 2.45695 4.45144 2.59202L4.46411 2.60469C4.72159 2.84529 4.96642 3.09434 5.22391 3.36027C5.35476 3.49535 5.48984 3.63042 5.62492 3.76972L6.77729 4.92209C7.22473 5.36953 7.22473 5.7832 6.77729 6.23064C6.65488 6.35306 6.53668 6.47547 6.41427 6.59366C6.05969 6.95668 5.722 7.29437 5.35477 7.62362C5.34632 7.63206 5.33788 7.63628 5.33366 7.64473C4.97064 8.00774 5.03818 8.36232 5.11416 8.60292L5.12682 8.64091C5.42652 9.36695 5.84864 10.0508 6.49025 10.8655L6.49447 10.8697C7.65951 12.3049 8.88786 13.4235 10.2428 14.2804C10.4159 14.3901 10.5932 14.4787 10.762 14.5632C10.914 14.6391 11.0575 14.7109 11.1799 14.7869C11.1968 14.7953 11.2137 14.808 11.2306 14.8164C11.3741 14.8882 11.5092 14.922 11.6485 14.922C11.9988 14.922 12.2183 14.7025 12.2901 14.6307L13.7337 13.1871C13.8772 13.0436 14.1052 12.8705 14.3711 12.8705C14.6328 12.8705 14.8481 13.0351 14.979 13.1786L14.9874 13.1871L17.3132 15.5129C17.748 15.9435 17.748 16.3867 17.3175 16.8341ZM10.8085 4.75747C11.9144 4.9432 12.919 5.46662 13.7211 6.26863C14.5231 7.07065 15.0423 8.07528 15.2322 9.18122C15.2787 9.45981 15.5193 9.65399 15.7936 9.65399C15.8274 9.65399 15.857 9.64977 15.8907 9.64554C16.2031 9.59489 16.4099 9.29941 16.3593 8.98705C16.1313 7.64895 15.4982 6.42904 14.5315 5.4624C13.5649 4.49576 12.345 3.86259 11.0069 3.63464C10.6945 3.58399 10.4032 3.79083 10.3484 4.09897C10.2935 4.40711 10.4961 4.70681 10.8085 4.75747ZM19.9768 8.82242C19.6011 6.61899 18.5627 4.61395 16.9671 3.01836C15.3715 1.42277 13.3665 0.384369 11.163 0.00868773C10.8549 -0.0461871 10.5636 0.16487 10.5088 0.473013C10.4581 0.785377 10.665 1.07664 10.9773 1.13151C12.9444 1.46498 14.7384 2.39785 16.1651 3.82037C17.5918 5.24712 18.5205 7.0411 18.854 9.00815C18.9004 9.28675 19.141 9.48092 19.4154 9.48092C19.4491 9.48092 19.4787 9.4767 19.5125 9.47248C19.8206 9.42605 20.0317 9.13057 19.9768 8.82242Z"
                  fill="#F16126"
                />
              </svg>
            </div>
          </div>
          <div class="group-28">
            <div class="frame2">
              <svg
                class="group2"
                width="20"
                height="14"
                viewBox="0 0 20 14"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.9743 0.333252H1.02566C0.461523 0.333252 0 0.794775 0 1.35888V12.6409C0 13.205 0.461523 13.6666 1.02566 13.6666H18.9744C19.5384 13.6666 20 13.2051 20 12.6409V1.35888C20 0.794775 19.5385 0.333252 18.9743 0.333252ZM18.5895 1.10243L10.59 7.10251C10.4462 7.21196 10.2254 7.28044 9.99996 7.27942C9.77457 7.28044 9.55383 7.21196 9.40996 7.10251L1.41051 1.10243H18.5895ZM14.3164 7.49841L18.6754 12.8831C18.6798 12.8884 18.6851 12.8925 18.6898 12.8974H1.31023C1.31484 12.8923 1.32023 12.8884 1.32461 12.8831L5.68359 7.49841C5.71538 7.45913 5.73911 7.41398 5.75344 7.36553C5.76777 7.31708 5.77241 7.26628 5.7671 7.21603C5.76179 7.16579 5.74663 7.11708 5.72249 7.07269C5.69835 7.02831 5.6657 6.98912 5.62641 6.95735C5.46129 6.8238 5.21922 6.84911 5.08563 7.01427L0.769219 12.3463V1.58321L8.94867 7.71782C9.25613 7.94681 9.6302 8.04759 9.99992 8.0486C10.3691 8.04782 10.7435 7.94704 11.0512 7.71782L19.2306 1.58321V12.3463L14.9143 7.01427C14.7807 6.84915 14.5384 6.82376 14.3736 6.95735C14.2082 7.09091 14.1828 7.33329 14.3164 7.49841Z"
                  fill="#F16126"
                />
              </svg>
            </div>
            <div class="abc-example-com">abc@example.com</div>
          </div>
        </div>
      </div>
      <div class="rectangle-47"></div>
      <div class="rectangle-48"></div>
    </div>
    <div class="join-our-newsletter-for-latest-updates">
      Join our Newsletter for Latest Updates
    </div>
    <div class="group-33">
      <svg
        class="group-34"
        width="91"
        height="92"
        viewBox="0 0 91 92"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <ellipse cx="45.5" cy="45.8059" rx="45.5" ry="45.8059" fill="#F6ECE7" />
        <path
          d="M67.5383 30H24.4616C23.1077 30 22 31.1077 22 32.4615V59.5384C22 60.8922 23.1077 62 24.4616 62H67.5384C68.8922 62 70 60.8923 70 59.5384V32.4615C69.9999 31.1077 68.8923 30 67.5383 30ZM66.6146 31.846L47.416 46.2462C47.0708 46.5089 46.5409 46.6732 45.9999 46.6708C45.4589 46.6732 44.9291 46.5089 44.5839 46.2462L25.3852 31.846H66.6146ZM56.3593 47.1963L66.8209 60.1195C66.8314 60.1324 66.8442 60.1423 66.8554 60.154H25.1446C25.1556 60.1417 25.1686 60.1324 25.1791 60.1195L35.6406 47.1963C35.7169 47.1021 35.7738 46.9937 35.8082 46.8774C35.8426 46.7611 35.8538 46.6392 35.841 46.5186C35.8283 46.3981 35.7919 46.2812 35.7339 46.1746C35.676 46.0681 35.5977 45.974 35.5033 45.8978C35.1071 45.5773 34.5261 45.638 34.2055 46.0344L23.8461 58.8314V32.9999L43.4768 47.7229C44.2147 48.2725 45.1124 48.5144 45.9998 48.5168C46.8859 48.5149 47.7844 48.2731 48.5228 47.7229L68.1534 32.9999V58.8312L57.7943 46.0344C57.4737 45.6381 56.8922 45.5772 56.4965 45.8978C56.0995 46.2183 56.0386 46.8001 56.3593 47.1963Z"
          fill="#F16126"
        />
      </svg>
    </div>
    <div class="frame3">
      <div class="group3">
        <div class="layer-1">
          <svg
            class="group-21"
            width="780"
            height="50"
            viewBox="0 0 780 50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g opacity="0.2">
              <path
                opacity="0.06"
                d="M56.818 1.61C56.818 1.61 -26.5146 38.2927 12.5945 40.7578C19.9996 40.8293 765.484 46.9837 770.785 47.0349C792.917 47.2486 744.642 17.906 735.165 14.5093C725.688 11.1127 456.448 4.68591 390.812 4.05216C325.176 3.4184 56.818 1.61 56.818 1.61Z"
                fill="#F5F5F5"
              />
              <path
                opacity="0.13"
                d="M55.4634 2.46654C55.4634 2.46654 -22.9718 37.457 14.036 39.6409C21.4411 39.7124 762.97 45.9155 768.608 45.97C789.645 46.1731 744.635 18.6015 735.242 15.2057C725.849 11.8098 457.037 4.77844 391.401 4.14469C325.765 3.51093 55.4634 2.46654 55.4634 2.46654Z"
                fill="#EBEBEB"
              />
              <path
                opacity="0.19"
                d="M54.1884 3.75893C54.1884 3.75893 -19.4318 36.8824 15.474 38.872C22.8791 38.9435 761.209 45.2028 766.511 45.254C786.37 45.4457 744.626 19.5582 735.148 16.2486C725.67 12.9389 457.541 4.87033 391.905 4.23657C326.268 3.60282 54.1884 3.75893 54.1884 3.75893Z"
                fill="#E1E1E1"
              />
              <path
                opacity="0.25"
                d="M52.9162 4.79034C52.9162 4.79034 -15.8058 36.1344 16.998 37.9298C24.4031 38.0013 759.03 44.3118 764.331 44.363C783.096 44.5442 744.617 20.4277 735.14 17.118C725.662 13.8084 457.953 5.74388 392.401 5.11094C326.849 4.47799 52.9162 4.79034 52.9162 4.79034Z"
                fill="#D7D7D7"
              />
              <path
                opacity="0.31"
                d="M51.6438 5.82195C51.6438 5.82195 -12.264 35.386 18.4378 36.9871C25.8429 37.0586 756.935 43.335 762.237 43.3862C779.824 43.556 744.609 21.2977 735.131 17.988C725.653 14.6783 458.541 5.83683 392.905 5.20307C327.269 4.56932 51.6438 5.82195 51.6438 5.82195Z"
                fill="#CDCDCD"
              />
              <path
                opacity="0.38"
                d="M50.3716 6.85322C50.3716 6.85322 -8.80628 34.6365 19.8776 36.0442C27.2827 36.1157 754.756 42.4442 760.394 42.4986C777.224 42.6611 744.937 22.1705 735.376 18.773C725.815 15.3755 459.041 6.36337 393.405 5.72961C327.769 5.09585 50.3716 6.85322 50.3716 6.85322Z"
                fill="#C3C3C3"
              />
              <path
                opacity="0.44"
                d="M49.0151 7.88408C49.0151 7.88408 -5.09629 33.8896 21.4014 35.1022C28.8065 35.1737 752.661 41.5542 757.878 41.6046C773.361 41.7541 744.592 23.0371 735.115 19.6404C725.638 16.2438 459.546 6.36838 393.994 5.73543C328.442 5.10249 49.0151 7.88408 49.0151 7.88408Z"
                fill="#B9B9B9"
              />
              <path
                opacity="0.5"
                d="M47.7429 8.91529C47.7429 8.91529 -1.46946 33.0547 22.8411 34.1592C30.2462 34.2307 750.481 40.6632 755.782 40.7144C770.088 40.8525 744.584 23.9066 735.107 20.51C725.63 17.1133 460.135 6.37388 394.499 5.74012C328.863 5.10637 47.7429 8.91529 47.7429 8.91529Z"
                fill="#B0B0B0"
              />
              <path
                opacity="0.56"
                d="M46.4704 9.94687C46.4704 9.94687 2.07307 32.2194 24.2808 33.2167C31.6859 33.2882 747.966 39.6823 753.604 39.7367C766.815 39.8643 744.576 24.6895 735.098 21.3798C725.62 18.0701 460.634 6.98777 394.998 6.35402C329.362 5.72026 46.4704 9.94687 46.4704 9.94687Z"
                fill="#A6A6A6"
              />
              <path
                opacity="0.63"
                d="M45.1973 11.0653C45.1973 11.0653 5.61419 31.5577 25.7199 32.3607C33.2091 32.433 746.206 38.8825 751.508 38.9337C763.541 39.0499 744.567 25.6461 734.837 22.334C725.106 19.0219 460.883 7.33801 395.331 6.70507C329.779 6.07213 45.1973 11.0653 45.1973 11.0653Z"
                fill="#9C9C9C"
              />
              <path
                opacity="0.69"
                d="M44.0101 12.0106C44.0101 12.0106 9.41015 30.6377 27.413 31.3334C34.8181 31.4049 744.193 38.2543 749.494 38.3055C760.433 38.4112 744.724 26.7784 735.246 23.4687C725.769 20.1591 461.804 7.86879 396.252 7.23584C330.7 6.6029 44.0101 12.0106 44.0101 12.0106Z"
                fill="#929292"
              />
              <path
                opacity="0.75"
                d="M42.5687 13.1274C42.5687 13.1274 12.7803 30.2353 28.6844 30.3889C36.0895 30.4604 741.93 37.2757 747.231 37.3269C756.992 37.4211 744.548 27.5595 735.071 24.1629C725.595 20.7662 462.223 8.04679 396.587 7.41303C330.951 6.77928 42.5687 13.1274 42.5687 13.1274Z"
                fill="#888888"
              />
              <path
                opacity="0.81"
                d="M41.2962 14.1589C41.2962 14.1589 16.4104 29.0527 30.1241 29.446C37.5292 29.5175 739.751 36.2979 745.389 36.3524C753.804 36.4336 744.877 28.3455 735.4 24.9488C725.924 21.5522 463.063 8.2289 397.511 7.59596C331.959 6.96301 41.2962 14.1589 41.2962 14.1589Z"
                fill="#7E7E7E"
              />
              <path
                opacity="0.88"
                d="M40.0239 15.1903C40.0239 15.1903 19.9529 28.2172 31.4797 28.5024C38.8848 28.5739 737.488 35.3194 742.79 35.3705C750.279 35.4429 744.365 29.1233 734.466 25.8095C724.568 22.4958 462.639 8.48578 397.087 7.85283C331.535 7.21989 40.0239 15.1903 40.0239 15.1903Z"
                fill="#747474"
              />
              <path
                opacity="0.94"
                d="M38.7517 16.2217C38.7517 16.2217 23.5799 27.3822 33.0879 27.561C40.493 27.6325 735.478 34.343 740.78 34.3942C746.081 34.4454 744.526 29.9076 735.048 26.5979C725.57 23.2882 463.816 8.67083 398.6 8.04114C333.385 7.41145 38.7517 16.2217 38.7517 16.2217Z"
                fill="#6A6A6A"
              />
              <path
                d="M37.3952 17.2523C37.3952 17.2523 27.1225 26.5467 34.5276 26.6182L738.685 33.4172C743.902 33.4676 744.518 30.6903 735.04 27.3806C725.563 24.0709 464.318 8.93661 398.598 8.30204C332.878 7.66747 37.3952 17.2523 37.3952 17.2523Z"
                fill="#606060"
              />
            </g>
          </svg>

          <div class="clip-path-group">
            <svg
              class="clip-path"
              width="722.985107421875"
              height="195.34246826171875"
            ></svg>

            <svg
              class="group4"
              width="692"
              height="175"
              viewBox="0 0 692 175"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M317.96 162.374L0.718954 168.009C0.718954 168.009 20.3685 128.884 28.8011 127.139L340.152 130.146C339.987 131.701 339.452 133.19 338.595 134.48C334.585 140.181 330.738 146.407 317.96 162.374Z"
                fill="url(#paint0_linear_906_3204)"
              />
              <path
                style="mix-blend-mode: multiply"
                d="M7.54831 157.985C7.45991 157.985 7.37246 157.966 7.29113 157.93C7.20979 157.894 7.13606 157.842 7.07417 157.777C7.01228 157.712 6.9635 157.635 6.93049 157.55C6.89747 157.465 6.88094 157.375 6.88183 157.283C6.88218 157.113 6.94303 156.948 7.05284 156.821C7.16265 156.694 7.31373 156.613 7.47752 156.593C10.5069 156.622 307.041 151.397 321.086 152.402C321.272 152.425 321.442 152.519 321.565 152.664C321.688 152.81 321.754 152.998 321.751 153.191C321.729 153.36 321.648 153.515 321.523 153.626C321.397 153.737 321.237 153.796 321.072 153.794C306.945 152.7 10.4944 157.927 7.54831 157.985Z"
                fill="url(#paint1_linear_906_3204)"
              />
              <path
                style="mix-blend-mode: multiply"
                d="M10.5438 152.796C10.5438 152.796 9.95484 152.79 9.95904 152.355C9.86463 152.231 9.81405 152.077 9.81557 151.919C9.8171 151.761 9.87065 151.608 9.96743 151.485C12.7511 150.816 93.05 149.417 163.412 148.705C198.762 148.264 314.908 147.211 324.4 149.042C324.529 149.093 324.639 149.183 324.716 149.3C324.794 149.417 324.834 149.556 324.833 149.698C324.832 149.84 324.788 149.979 324.709 150.094C324.629 150.21 324.517 150.298 324.388 150.346C318.087 149.155 258.001 149.01 163.736 150.013C86.0514 150.828 12.99 152.21 10.5438 152.796Z"
                fill="url(#paint2_linear_906_3204)"
              />
              <path
                d="M372.906 163.252L689.818 174.227C689.818 174.227 676.884 136.615 668.487 134.708L350.168 129.981C350.622 130.973 351.177 131.911 351.824 132.781C356.057 138.91 360.439 147.041 372.906 163.252Z"
                fill="url(#paint3_linear_906_3204)"
              />
              <path
                style="mix-blend-mode: multiply"
                d="M684.613 164.175C681.584 164.146 625.723 162.128 374.577 155.789L367.929 155.724C367.773 155.723 367.623 155.657 367.514 155.542C367.405 155.427 367.344 155.271 367.346 155.11C367.346 154.94 367.407 154.775 367.517 154.648C367.627 154.521 367.778 154.44 367.942 154.42L374.673 154.485C625.483 160.821 681.683 162.581 684.71 162.871C684.71 162.871 685.383 162.878 685.291 163.66C685.252 163.812 685.163 163.946 685.04 164.04C684.916 164.134 684.766 164.181 684.613 164.175Z"
                fill="url(#paint4_linear_906_3204)"
              />
              <path
                style="mix-blend-mode: multiply"
                d="M677.521 149.146C667.854 147.922 374.622 142.395 360.644 143.216C360.556 143.216 360.468 143.197 360.387 143.161C360.305 143.125 360.232 143.073 360.17 143.008C360.108 142.943 360.059 142.866 360.026 142.781C359.993 142.696 359.977 142.605 359.978 142.514C359.978 142.344 360.039 142.179 360.149 142.052C360.258 141.925 360.409 141.844 360.573 141.824C374.634 141.09 667.951 146.618 677.702 147.843C677.785 147.839 677.868 147.856 677.943 147.893C678.018 147.93 678.083 147.986 678.133 148.055C678.182 148.125 678.214 148.206 678.226 148.291C678.237 148.376 678.228 148.463 678.2 148.544C678.2 148.632 678.181 148.719 678.146 148.798C678.11 148.878 678.059 148.949 677.994 149.006C677.93 149.064 677.854 149.106 677.772 149.13C677.691 149.154 677.605 149.16 677.521 149.146Z"
                fill="url(#paint5_linear_906_3204)"
              />
              <path
                style="mix-blend-mode: multiply"
                d="M679.258 152.207C677.239 152.188 376.361 145.369 367.931 146.853C367.847 146.878 367.759 146.884 367.673 146.87C367.587 146.856 367.505 146.823 367.433 146.772C367.361 146.721 367.301 146.655 367.257 146.577C367.213 146.5 367.186 146.413 367.178 146.324C367.154 146.151 367.193 145.976 367.288 145.832C367.383 145.688 367.527 145.586 367.691 145.546C372.159 144.719 489.117 146.718 524.881 147.064C597.999 148.465 677.427 150.189 679.19 150.554C679.354 150.597 679.495 150.702 679.587 150.848C679.679 150.993 679.715 151.17 679.688 151.342C679.74 151.515 679.724 151.703 679.644 151.865C679.563 152.026 679.425 152.149 679.258 152.207Z"
                fill="url(#paint6_linear_906_3204)"
              />
              <path
                d="M29.9521 121.236L21.4877 126.286C21.4877 126.286 303.663 117.791 335.615 138.017C336.104 137.071 336.676 136.174 337.324 135.337C303.185 115.003 63.541 120.169 29.9521 121.236Z"
                fill="url(#paint7_linear_906_3204)"
              />
              <path
                d="M670.245 135.681C670.245 135.681 381.887 122.112 355.792 140.212C353.308 136.013 347.495 127.955 347.495 127.955C432.772 98.2492 523.249 87.9662 612.711 97.8126C635.365 113.6 670.245 135.681 670.245 135.681Z"
                fill="url(#paint8_linear_906_3204)"
              />
              <path
                d="M662.765 125.955C662.765 125.955 381.218 112.973 353.806 136.714C351.237 132.601 345.507 124.631 345.507 124.631C430.096 92.4985 520.373 79.5469 610.21 86.6552C632.788 101.572 662.765 125.955 662.765 125.955Z"
                fill="url(#paint9_linear_906_3204)"
              />
              <path
                d="M661.277 123.157C665.12 126.064 662.424 126.386 662.424 126.386C662.424 126.386 431.118 104.757 353.549 137.146C353.292 136.567 352.988 136.011 352.64 135.485C414.368 105.03 625.466 118.984 661.277 123.157Z"
                fill="url(#paint10_linear_906_3204)"
              />
              <path
                d="M661.888 120.901C655.25 119.794 485.626 72.4926 354.3 137.849C350.931 133.826 347.93 129.487 345.336 124.89C372.368 107.72 401.861 95.0878 432.715 87.4637C492.876 71.2579 580.228 62.7948 591.523 60.9034C613.054 81.0969 635.718 99.9612 659.397 117.398C661.986 119.424 661.888 120.901 661.888 120.901Z"
                fill="url(#paint11_linear_906_3204)"
              />
              <path
                d="M640.425 103.734C643.181 105.935 657.562 115.728 659.9 117.577C610.185 106.66 458.301 78.5781 352.804 135.921L351.973 134.783C377.752 114.505 474.431 72.7324 640.425 103.734Z"
                fill="url(#paint12_linear_906_3204)"
              />
              <path
                d="M655.978 105.449L601.112 61.4309C601.112 61.4309 430.233 65.6954 403.788 85.097C384.921 99.4368 366.82 114.825 349.567 131.193L352.808 135.487C352.808 135.487 371.839 116.883 439.905 101.102C515.138 83.9978 646.741 103.273 655.978 105.449Z"
                fill="url(#paint13_linear_906_3204)"
              />
              <path
                d="M656.053 106.407C649.741 106.346 455.483 65.3304 352.804 135.921L351.468 134.778C351.468 134.778 440.341 64.6622 655.978 105.449C656.071 105.588 656.127 105.75 656.14 105.918C656.153 106.086 656.123 106.255 656.053 106.407Z"
                fill="url(#paint14_linear_906_3204)"
              />
              <path
                d="M652.498 99.7622C639.344 93.7207 470.075 61.9052 352.121 136.872C349.621 134.325 350.044 134.068 350.044 134.068C350.044 134.068 372.135 77.4852 444.868 57.8348C484.268 46.1636 525.072 40.3488 566.052 40.5656L653.19 97.8554L652.498 99.7622Z"
                fill="url(#paint15_linear_906_3204)"
              />
              <path
                d="M445.126 57.2284C484.457 45.6935 525.178 40.024 566.053 40.3918L653.107 97.6807C631.213 90.3371 469.83 61.1201 351.291 135.733C349.625 133.89 349.711 133.717 349.711 133.717C349.711 133.717 372.14 76.9634 445.126 57.2284Z"
                fill="url(#paint16_linear_906_3204)"
              />
              <path
                d="M647.944 83.2795L625.991 73.413C625.991 73.413 567.086 72.8442 544.782 73.1507C522.477 73.4572 453.938 85.9291 413.331 99.1055C390.523 107.915 368.823 119.532 348.701 133.707C348.701 133.707 409.974 98.1163 468.896 88.1609C521.373 81.2261 574.36 79.3791 627.164 82.6439C634.071 83.2981 641.011 83.5104 647.944 83.2795Z"
                fill="url(#paint17_linear_906_3204)"
              />
              <path
                d="M347.818 138.048C406.362 97.4728 486.538 73.8932 647.768 84.1477L647.776 83.278C647.776 83.278 490.628 68.7139 407.39 104.267C385.722 112.369 365.119 123.244 346.064 136.639L347.818 138.048Z"
                fill="url(#paint18_linear_906_3204)"
              />
              <path
                d="M647.861 83.1918C634.532 77.8444 468.13 54.1454 348.706 133.273C346.12 130.812 346.544 130.555 346.544 130.555C346.544 130.555 366.792 72.9978 438.886 49.7751C477.827 36.292 518.421 28.601 559.451 26.9333L648.397 79.9787L647.861 83.1918Z"
                fill="url(#paint19_linear_906_3204)"
              />
              <path
                d="M439.134 50.2123C478.075 36.7292 518.67 29.0384 559.699 27.3707L648.561 80.4152C626.404 74.1998 464.185 53.1506 348.032 133.266C346.366 131.51 346.452 131.337 346.452 131.337C346.452 131.337 367.04 73.435 439.134 50.2123Z"
                fill="url(#paint20_linear_906_3204)"
              />
              <path
                d="M646.445 73.0016C633.026 68.1753 461.531 49.0369 348.029 133.614C345.359 131.24 346.209 130.378 346.209 130.378C346.209 130.378 365.434 74.2023 437.047 48.4526C475.632 33.7062 516.037 24.6675 557.062 21.6047L647.133 71.4428L646.445 73.0016Z"
                fill="url(#paint21_linear_906_3204)"
              />
              <path
                d="M437.218 48.1934C475.803 33.4469 516.207 24.4082 557.232 21.3454L647.304 71.1835C624.971 65.7492 461.7 48.9517 347.362 132.999C345.695 131.243 345.618 130.546 345.618 130.546C345.618 130.546 365.689 73.9439 437.218 48.1934Z"
                fill="url(#paint22_linear_906_3204)"
              />
              <path
                d="M635.722 50.4581C622.47 45.8073 451.365 38.5885 346.428 133.772C343.842 131.486 345.782 130.983 345.782 130.983C345.782 130.983 363.935 72.5353 434.046 45.5534C471.868 30.0802 511.64 20.3001 552.146 16.5125L636.172 47.4182L635.722 50.4581Z"
                fill="url(#paint23_linear_906_3204)"
              />
              <path
                d="M434.215 45.4681C471.896 30.0293 511.529 20.2765 551.893 16.5101L636.344 47.072C614.344 41.9888 449.216 34.5668 347.361 133.086C345.833 134.463 345.42 133.589 345.42 133.589C345.42 133.589 345.678 106.889 345.691 105.585C350.04 90.9274 386.238 63.7051 434.215 45.4681Z"
                fill="url(#paint24_linear_906_3204)"
              />
              <path
                d="M353.777 139.671C356.917 137.005 375.254 129.18 418.961 126.123C476.563 122.156 648.045 125.117 662.993 128.479L660.827 126.197C660.827 126.197 438.744 116.746 387.308 127.209C345.654 135.504 353.549 137.146 353.549 137.146L353.777 139.671Z"
                fill="url(#paint25_linear_906_3204)"
              />
              <path
                d="M24.4868 129.446C24.4868 129.446 312.406 118.745 338.71 140.047C341.274 135.897 347.242 127.953 347.242 127.953C262.526 96.6007 172.236 84.5725 82.5732 92.6936C59.7027 108.042 24.4868 129.446 24.4868 129.446Z"
                fill="url(#paint26_linear_906_3204)"
              />
              <path
                d="M32.0693 119.865C32.0693 119.865 313.899 112.323 340.847 136.589C343.495 132.527 349.378 124.668 349.378 124.668C265.455 90.9028 175.471 76.2102 85.5417 81.5893C62.5113 96.0661 32.0693 119.865 32.0693 119.865Z"
                fill="url(#paint27_linear_906_3204)"
              />
              <path
                d="M33.695 117.097C29.7965 119.93 32.4016 120.303 32.4016 120.303C32.4016 120.303 264.082 103.144 341.011 137.025C341.523 136.334 341.019 136.156 342.037 135.383C280.908 103.741 69.4952 113.616 33.695 117.097Z"
                fill="url(#paint28_linear_906_3204)"
              />
              <path
                d="M33.1278 114.83C39.7856 113.851 210.291 69.8342 340.331 137.715C343.751 133.734 346.833 129.457 349.543 124.931C322.848 107.242 293.605 94.0426 262.903 85.8241C202.983 68.4589 115.81 58.3107 104.638 56.2023C82.7125 76.0019 59.6591 94.4259 35.6017 111.375C32.9738 113.35 33.1278 114.83 33.1278 114.83Z"
                fill="url(#paint29_linear_906_3204)"
              />
              <path
                d="M54.9178 98.0802C52.1199 100.228 37.5531 109.741 35.0952 111.544C85.0962 101.59 237.41 76.4453 341.78 135.815C342.084 135.458 342.369 135.083 342.633 134.692C317.25 113.921 221.396 70.2892 54.9178 98.0802Z"
                fill="url(#paint30_linear_906_3204)"
              />
              <path
                d="M39.251 99.4945L94.9566 56.5436C94.9566 56.5436 265.722 64.1069 291.786 84.0155C310.373 98.7169 328.173 114.452 345.107 131.15L341.784 135.38C341.784 135.38 323.116 116.413 255.451 99.3207C180.647 80.768 48.5275 97.4966 39.251 99.4945Z"
                fill="url(#paint31_linear_906_3204)"
              />
              <path
                d="M39.1576 100.45C45.5529 100.512 240.567 63.2552 341.78 135.815L343.222 134.698C343.222 134.698 255.635 62.8788 39.251 99.4944C39.1735 99.6389 39.1252 99.7983 39.1092 99.9626C39.0931 100.127 39.1096 100.293 39.1576 100.45Z"
                fill="url(#paint32_linear_906_3204)"
              />
              <path
                d="M42.8398 93.8757C56.1083 88.0893 226.044 59.549 342.444 136.778C344.993 134.281 344.575 134.015 344.575 134.015C344.575 134.015 323.581 77.0165 251.241 55.9653C212.057 43.6484 171.371 37.1639 130.41 36.7072L42.1817 92.3038L42.8398 93.8757Z"
                fill="url(#paint33_linear_906_3204)"
              />
              <path
                d="M251.079 55.3548C211.897 43.0371 171.206 36.5813 130.247 36.1838L42.0184 91.7802C64.0501 84.8608 226.051 58.7662 343.128 135.654C344.745 133.843 344.662 133.668 344.662 133.668C344.662 133.668 323.418 76.493 251.079 55.3548Z"
                fill="url(#paint34_linear_906_3204)"
              />
              <path
                d="M47.7951 77.4848L69.9327 68.3049C69.9327 68.3049 128.837 68.8737 151.131 69.6108C173.426 70.3479 241.712 84.1409 282.057 98.099C304.691 107.347 326.162 119.382 346.006 133.942C346.006 133.942 285.348 97.1739 226.629 86.0827C174.296 78.1359 121.354 75.266 68.4973 77.5107C61.6024 77.9453 54.6884 77.9367 47.7951 77.4848Z"
                fill="url(#paint35_linear_906_3204)"
              />
              <path
                d="M346.724 138.037C289.058 96.3402 209.268 71.216 47.9549 78.3562L47.9633 77.4865C47.9633 77.4865 205.279 65.9588 287.815 103.112C309.344 111.644 329.759 122.914 348.589 136.664L346.724 138.037Z"
                fill="url(#paint36_linear_906_3204)"
              />
              <path
                d="M47.88 77.3986C61.3101 72.3096 228.138 51.8282 346.013 133.247C348.561 130.836 348.227 130.572 348.227 130.572C348.227 130.572 329.009 72.633 257.377 48.0226C218.704 33.7901 178.265 25.3166 137.276 22.857L47.4062 74.1758L47.88 77.3986Z"
                fill="url(#paint37_linear_906_3204)"
              />
              <path
                d="M257.205 48.4558C218.532 34.2233 178.093 25.75 137.104 23.2904L47.2337 74.6091C69.4228 68.8219 232.102 50.9098 346.602 133.252C348.386 131.53 348.303 131.355 348.303 131.355C348.303 131.355 328.837 73.0662 257.205 48.4558Z"
                fill="url(#paint38_linear_906_3204)"
              />
              <path
                d="M49.4088 67.2371C62.9179 62.6707 234.75 46.8474 346.683 133.601C349.314 131.278 348.481 130.4 348.481 130.4C348.481 130.4 330.344 73.8637 259.325 46.7368C221.028 31.2613 180.808 21.4446 139.852 17.5764L48.8349 65.666L49.4088 67.2371Z"
                fill="url(#paint39_linear_906_3204)"
              />
              <path
                d="M259.075 46.4733C220.782 30.9845 180.56 21.1673 139.602 17.3129L48.6691 65.4033C71.0189 60.4004 234.583 46.7587 347.277 132.998C349.061 131.275 349.152 130.581 349.152 130.581C349.152 130.581 330.094 73.6002 259.075 46.4733Z"
                fill="url(#paint40_linear_906_3204)"
              />
              <path
                d="M71.371 32.658C84.7102 28.264 245.716 35.4722 346.343 133.946C348.974 131.623 348.896 131.013 348.896 131.013C348.896 131.013 331.875 72.2258 262.382 43.8959C224.866 27.6964 185.29 17.1502 144.865 12.58L70.8803 31.1747L71.371 32.658Z"
                fill="url(#paint41_linear_906_3204)"
              />
              <path
                d="M266.485 37.3253C200.692 0.681303 155.993 1.90231 155.993 1.90231L71.0511 30.9154C93.061 26.2571 244.221 33.4573 346.682 133.688L347.362 132.912C348.78 134.317 349.209 133.451 349.209 133.451C349.821 126.162 349.892 118.835 349.42 111.535C347.627 96.8186 315.37 64.4994 266.485 37.3253Z"
                fill="url(#paint42_linear_906_3204)"
              />
              <path
                d="M340.734 139.545C337.647 136.819 319.548 128.642 275.824 124.741C218.31 119.663 46.8862 119.312 31.7925 122.384L34.0022 120.144C34.0022 120.144 256.226 114.984 307.451 126.438C348.936 135.536 341.011 137.025 341.011 137.025L340.734 139.545Z"
                fill="url(#paint43_linear_906_3204)"
              />
              <path
                d="M341.011 137.025C330.884 131.274 304.294 113.448 218.321 109.747C155.197 107.869 92.0182 109.669 29.0853 115.139L29.0668 117.053C93.0296 110.883 157.329 109.353 221.493 112.474C252.44 114.861 316.017 119.562 340.564 139.717C343.604 138.703 341.011 137.025 341.011 137.025Z"
                fill="url(#paint44_linear_906_3204)"
              />
              <path
                style="mix-blend-mode: multiply"
                opacity="0.5"
                d="M342.958 135.826L346.216 103.502L347.141 103.598L347.936 134.483L342.958 135.826Z"
                fill="url(#paint45_linear_906_3204)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3204"
                  x1="0.921333"
                  y1="147.049"
                  x2="340.209"
                  y2="150.325"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="0.04" stop-color="#DCDCDC" />
                  <stop offset="0.37" stop-color="#F6F6F6" />
                  <stop offset="0.56" stop-color="white" />
                  <stop offset="0.7" stop-color="#FBFBFB" />
                  <stop offset="0.85" stop-color="#EEEEEE" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
                <linearGradient
                  id="paint1_linear_906_3204"
                  x1="6.9171"
                  y1="153.63"
                  x2="321.718"
                  y2="156.67"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint2_linear_906_3204"
                  x1="9.90598"
                  y1="149.136"
                  x2="325.296"
                  y2="152.182"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint3_linear_906_3204"
                  x1="690.015"
                  y1="153.79"
                  x2="349.97"
                  y2="150.506"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="0.66" stop-color="white" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
                <linearGradient
                  id="paint4_linear_906_3204"
                  x1="526.329"
                  y1="162.646"
                  x2="526.395"
                  y2="155.776"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint5_linear_906_3204"
                  x1="518.984"
                  y1="147.615"
                  x2="519.027"
                  y2="143.18"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint6_linear_906_3204"
                  x1="523.668"
                  y1="150.618"
                  x2="523.708"
                  y2="146.53"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint7_linear_906_3204"
                  x1="179.605"
                  y1="136.337"
                  x2="179.762"
                  y2="120.073"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint8_linear_906_3204"
                  x1="670.405"
                  y1="119.07"
                  x2="347.863"
                  y2="115.956"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#B7B7B7" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint9_linear_906_3204"
                  x1="655.573"
                  y1="107.996"
                  x2="338.264"
                  y2="111.072"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#B7B7B7" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint10_linear_906_3204"
                  x1="500.954"
                  y1="135.101"
                  x2="500.749"
                  y2="116.486"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint11_linear_906_3204"
                  x1="503.412"
                  y1="139.289"
                  x2="504.177"
                  y2="60.06"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint12_linear_906_3204"
                  x1="505.852"
                  y1="139.313"
                  x2="506.629"
                  y2="58.8659"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#B7B7B7" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint13_linear_906_3204"
                  x1="606.444"
                  y1="75.7467"
                  x2="289.898"
                  y2="146.643"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D8D8D8" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint14_linear_906_3204"
                  x1="342.628"
                  y1="152.61"
                  x2="536.271"
                  y2="109.456"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint15_linear_906_3204"
                  x1="312.205"
                  y1="144.457"
                  x2="676.294"
                  y2="51.0999"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint16_linear_906_3204"
                  x1="603.82"
                  y1="67.215"
                  x2="284.338"
                  y2="125.86"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#DBDBDB" />
                  <stop offset="0.05" stop-color="#D0D0D0" />
                  <stop offset="0.22" stop-color="#AEAEAE" />
                  <stop offset="0.31" stop-color="#A1A1A1" />
                  <stop offset="0.85" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint17_linear_906_3204"
                  x1="662.326"
                  y1="66.8056"
                  x2="435.785"
                  y2="101.979"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#B7B7B7" />
                  <stop offset="1" stop-color="#636363" />
                </linearGradient>
                <linearGradient
                  id="paint18_linear_906_3204"
                  x1="398.574"
                  y1="84.7858"
                  x2="688.583"
                  y2="155.655"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint19_linear_906_3204"
                  x1="310.173"
                  y1="140.815"
                  x2="671.505"
                  y2="33.153"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint20_linear_906_3204"
                  x1="598.938"
                  y1="51.2335"
                  x2="281.125"
                  y2="122.362"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D8D8D8" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint21_linear_906_3204"
                  x1="314.817"
                  y1="143.652"
                  x2="673.98"
                  y2="25.0179"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint22_linear_906_3204"
                  x1="601.74"
                  y1="44.8416"
                  x2="284.835"
                  y2="125.619"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#DBDBDB" />
                  <stop offset="0.04" stop-color="#D0D0D0" />
                  <stop offset="0.18" stop-color="#AEAEAE" />
                  <stop offset="0.26" stop-color="#A1A1A1" />
                  <stop offset="0.85" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint23_linear_906_3204"
                  x1="281.568"
                  y1="144.495"
                  x2="637.255"
                  y2="25.4274"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint24_linear_906_3204"
                  x1="590.455"
                  y1="32.3888"
                  x2="278.781"
                  y2="113.525"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#EEEDEB" />
                  <stop offset="1" stop-color="#D3D3D3" />
                </linearGradient>
                <linearGradient
                  id="paint25_linear_906_3204"
                  x1="508.022"
                  y1="141.16"
                  x2="508.204"
                  y2="122.288"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="#CCCCCC" />
                </linearGradient>
                <linearGradient
                  id="paint26_linear_906_3204"
                  x1="24.6472"
                  y1="112.835"
                  x2="347.19"
                  y2="115.949"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#B7B7B7" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint27_linear_906_3204"
                  x1="39.7104"
                  y1="101.249"
                  x2="356.984"
                  y2="110.454"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#B7B7B7" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint28_linear_906_3204"
                  x1="193.777"
                  y1="131.335"
                  x2="194.341"
                  y2="112.727"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint29_linear_906_3204"
                  x1="191.135"
                  y1="136.274"
                  x2="191.9"
                  y2="57.0449"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint30_linear_906_3204"
                  x1="188.779"
                  y1="136.251"
                  x2="189.556"
                  y2="55.8044"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#B7B7B7" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint31_linear_906_3204"
                  x1="89.4334"
                  y1="70.7546"
                  x2="404.551"
                  y2="147.75"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D8D8D8" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint32_linear_906_3204"
                  x1="351.632"
                  y1="152.697"
                  x2="158.942"
                  y2="105.812"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint33_linear_906_3204"
                  x1="381.012"
                  y1="143.743"
                  x2="19.1323"
                  y2="43.2641"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint34_linear_906_3204"
                  x1="91.2179"
                  y1="60.7904"
                  x2="409.222"
                  y2="125.707"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#DBDBDB" />
                  <stop offset="0.05" stop-color="#D0D0D0" />
                  <stop offset="0.22" stop-color="#AEAEAE" />
                  <stop offset="0.31" stop-color="#A1A1A1" />
                  <stop offset="0.85" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint35_linear_906_3204"
                  x1="33.7343"
                  y1="60.7363"
                  x2="259.554"
                  y2="100.278"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#B7B7B7" />
                  <stop offset="1" stop-color="#636363" />
                </linearGradient>
                <linearGradient
                  id="paint36_linear_906_3204"
                  x1="297.09"
                  y1="83.8059"
                  x2="5.76645"
                  y2="149.062"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint37_linear_906_3204"
                  x1="384.392"
                  y1="141.532"
                  x2="25.2067"
                  y2="26.9126"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint38_linear_906_3204"
                  x1="97.3269"
                  y1="46.3902"
                  x2="413.707"
                  y2="123.643"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D8D8D8" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint39_linear_906_3204"
                  x1="384.852"
                  y1="142.661"
                  x2="27.8909"
                  y2="18.2214"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint40_linear_906_3204"
                  x1="48.7737"
                  y1="67.8114"
                  x2="351.198"
                  y2="78.7034"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#DBDBDB" />
                  <stop offset="0.05" stop-color="#D0D0D0" />
                  <stop offset="0.24" stop-color="#AEAEAE" />
                  <stop offset="0.34" stop-color="#A1A1A1" />
                  <stop offset="0.85" stop-color="#131112" />
                </linearGradient>
                <linearGradient
                  id="paint41_linear_906_3204"
                  x1="412.438"
                  y1="137.238"
                  x2="68.3081"
                  y2="14.5425"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint42_linear_906_3204"
                  x1="113.658"
                  y1="23.6067"
                  x2="415.831"
                  y2="108.55"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#EEEDEB" />
                  <stop offset="1" stop-color="#D3D3D3" />
                </linearGradient>
                <linearGradient
                  id="paint43_linear_906_3204"
                  x1="186.489"
                  y1="138.055"
                  x2="186.672"
                  y2="119.183"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="#CCCCCC" />
                </linearGradient>
                <linearGradient
                  id="paint44_linear_906_3204"
                  x1="29.0206"
                  y1="121.836"
                  x2="342.223"
                  y2="124.86"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint45_linear_906_3204"
                  x1="343.992"
                  y1="119.247"
                  x2="352.632"
                  y2="121.165"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#CACACA" />
                  <stop offset="1" stop-color="#ACACAC" />
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="form">
      <div class="rectangle-49"></div>
      <div class="enter-your-email">Enter your email</div>
      <div class="button">
        <div class="rectangle-24"></div>
        <div class="subscribe">Subscribe</div>
        <div class="rectangle-25"></div>
      </div>
    </div>
  </div>
  <div class="school-love-sec">
    <div class="rectangle-34"></div>
    <img class="image-15" src="image-15.png" />
    <div class="item-box">
      <div class="rectangle-35"></div>
      <div class="item-box2">
        <div class="_200-000">200,000+</div>
        <div class="students-enrolled">Students Enrolled</div>
      </div>
      <div class="group-32">
        <div class="ellipse-82"></div>
        <svg
          class="group5"
          width="43"
          height="45"
          viewBox="0 0 43 45"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M42.9283 11.1352C42.8549 10.8608 42.7285 10.6036 42.5564 10.3783C42.3842 10.1531 42.1697 9.96416 41.925 9.82239C41.6802 9.67991 41.4099 9.58745 41.1295 9.55027C40.8491 9.5131 40.5643 9.53196 40.2912 9.60576C39.7405 9.75499 39.2712 10.1183 38.9866 10.6158L38.6282 11.2435C38.4645 11.1489 38.2703 11.1231 38.0878 11.1718C37.9054 11.2205 37.7493 11.3397 37.6536 11.5035L35.8333 14.6272L35.2098 14.2665C35.128 14.2188 35.0377 14.1879 34.944 14.1755C34.8503 14.1631 34.7551 14.1695 34.6638 14.1942C34.5725 14.2191 34.4871 14.2619 34.4122 14.3201C34.3374 14.3783 34.2747 14.4508 34.2278 14.5334C34.0336 14.8784 34.1518 15.3166 34.4931 15.5146L35.1166 15.8754L29.025 26.5028L27.52 30.5506L26.8033 31.8995C26.5978 32.2592 26.4994 32.6708 26.5197 33.0853C26.54 33.4998 26.6783 33.8996 26.918 34.2372L25.3055 36.2284L24.8541 35.0887C24.7543 34.8397 24.5876 34.6237 24.3726 34.4649C24.1576 34.3062 23.9028 34.211 23.637 34.19C23.3711 34.1689 23.1047 34.223 22.8677 34.346C22.6307 34.469 22.4325 34.6562 22.2954 34.8865L22.0375 35.3266L21.7939 32.4407C21.7667 32.1095 21.6268 31.7979 21.3979 31.5585C21.169 31.3191 20.865 31.1665 20.5373 31.1266C20.2096 31.0868 19.8782 31.1621 19.5992 31.3397C19.3202 31.5174 19.1107 31.7865 19.006 32.1017L17.243 37.4262C17.1838 37.6071 17.1981 37.8041 17.2827 37.9744C17.3673 38.1447 17.5153 38.2745 17.6945 38.3354C17.7643 38.3683 17.8397 38.3877 17.9166 38.3928C18.0669 38.3933 18.2135 38.3462 18.3357 38.2582C18.4579 38.1702 18.5495 38.0458 18.5977 37.9025L20.3532 32.5779L20.6041 35.507C20.6293 35.8115 20.7498 36.1001 20.9483 36.3313C21.1468 36.5625 21.4131 36.7242 21.7088 36.7932C22.0044 36.8623 22.3143 36.835 22.5936 36.7154C22.8729 36.5958 23.1073 36.39 23.263 36.1277L23.5281 35.6873L23.9727 36.8203C24.0653 37.055 24.2176 37.2611 24.4142 37.418C24.6108 37.5748 24.8449 37.677 25.093 37.7142C25.3411 37.7514 25.5946 37.7225 25.8281 37.6301C26.0616 37.5378 26.2669 37.3854 26.4236 37.1881L28.0934 35.0599C28.2782 35.1085 28.4685 35.1328 28.6596 35.1321C29.037 35.135 29.4086 35.0378 29.737 34.8504C30.0653 34.6629 30.3389 34.3917 30.5301 34.064L31.2467 32.8591L33.9772 29.5188L40.1333 18.7612L40.7568 19.122C40.8391 19.1693 40.9112 19.2326 40.969 19.3082C41.0268 19.3838 41.0691 19.4702 41.0936 19.5623C41.1181 19.6539 41.1244 19.7495 41.1122 19.8436C41.0999 19.9377 41.0693 20.0284 41.0222 20.1105L38.1555 25.1106C38.1019 25.1918 38.0653 25.2831 38.0478 25.379C38.0304 25.4749 38.0324 25.5734 38.0538 25.6685C38.0752 25.7635 38.1156 25.8532 38.1725 25.9322C38.2293 26.0111 38.3015 26.0776 38.3846 26.1276C38.4664 26.1754 38.5568 26.2064 38.6505 26.2189C38.7442 26.2314 38.8395 26.225 38.9308 26.2002C39.0221 26.1754 39.1076 26.1327 39.1824 26.0744C39.2572 26.0162 39.3198 25.9436 39.3666 25.8609L42.2332 20.8609C42.3748 20.6145 42.4667 20.3423 42.5036 20.06C42.5404 19.7778 42.5216 19.491 42.4481 19.216C42.2999 18.6617 41.939 18.1893 41.4448 17.9027L40.8213 17.542L42.613 14.418C42.8085 14.0751 42.6934 13.6376 42.355 13.4368L42.7133 12.8091C42.8587 12.5588 42.9527 12.2817 42.9896 11.9941C43.0265 11.7066 43.0057 11.4145 42.9283 11.1352ZM40.2265 11.3372C40.2735 11.2544 40.3364 11.1818 40.4114 11.1236C40.4865 11.0654 40.5723 11.0228 40.6638 10.9982C40.8479 10.9524 41.0423 10.9782 41.2083 11.0705C41.2906 11.1178 41.3627 11.181 41.4205 11.2565C41.4784 11.3321 41.5208 11.4184 41.5453 11.5105C41.5909 11.6958 41.5652 11.8915 41.4736 12.0586L41.1152 12.6864L39.8681 11.9649L40.2265 11.3372ZM30.4583 31.4812L30.1 31.2719L29.0393 30.6512L30.057 27.9097L32.3144 29.2227L30.4583 31.4812ZM28.3083 33.5661C28.1622 33.4636 28.0593 33.31 28.0195 33.1353C27.9798 32.9605 28.0062 32.7772 28.0935 32.6209L28.4518 31.9934L29.6986 32.7149L29.3403 33.3353C29.2907 33.422 29.2237 33.4974 29.1435 33.5567C29.0634 33.6159 28.9719 33.6577 28.8748 33.6795C28.7778 33.7011 28.6773 33.7023 28.5797 33.6828C28.4822 33.6633 28.3898 33.6235 28.3083 33.5661ZM33.1315 28.0397L30.6518 26.5967L36.3851 16.5967L38.8648 18.0396L33.1315 28.0397ZM39.5815 16.7916L37.1018 15.3486L38.5351 12.8523L41.0148 14.2952L39.5815 16.7916ZM11.3088 33.2054L8.77216 35.7525L7.25265 34.2227C7.11834 34.0884 6.93669 34.013 6.74735 34.013C6.55801 34.013 6.37636 34.0884 6.24206 34.2227C6.17487 34.2898 6.12155 34.3696 6.08516 34.4575C6.04877 34.5454 6.03003 34.6397 6.03003 34.735C6.03003 34.8302 6.04877 34.9245 6.08516 35.0125C6.12155 35.1004 6.17487 35.1802 6.24206 35.2472L7.76139 36.7768C8.03014 37.0453 8.3934 37.1957 8.77207 37.1952C9.1528 37.1974 9.51919 37.047 9.78973 36.7768L12.3194 34.2227C12.4367 34.0847 12.498 33.9072 12.491 33.7256C12.484 33.5441 12.4092 33.3719 12.2816 33.2434C12.154 33.1149 11.9829 33.0397 11.8026 33.0326C11.6223 33.0255 11.4459 33.0873 11.3088 33.2054Z"
            fill="#F16126"
          />
          <path
            d="M2.8667 35.146C2.8667 38.5332 5.59406 41.2786 8.95837 41.2786C12.3227 41.2786 15.05 38.5332 15.05 35.146C15.05 34.9546 14.9745 34.7711 14.8401 34.6358C14.7057 34.5005 14.5234 34.4245 14.3334 34.4245C14.1433 34.4245 13.961 34.5005 13.8266 34.6358C13.6922 34.7711 13.6167 34.9546 13.6167 35.146C13.6167 37.7359 11.5311 39.8356 8.95837 39.8356C6.38562 39.8356 4.30003 37.7359 4.30003 35.146C4.30003 32.556 6.38562 30.4563 8.95837 30.4563C9.96678 30.4534 10.9484 30.7828 11.7534 31.3943C11.8286 31.4512 11.9143 31.4925 12.0055 31.5161C12.0966 31.5396 12.1915 31.5448 12.2847 31.5314C12.3778 31.518 12.4674 31.4862 12.5484 31.4379C12.6294 31.3896 12.7001 31.3258 12.7565 31.2499C12.813 31.1742 12.8542 31.0879 12.8776 30.9962C12.901 30.9044 12.9062 30.8089 12.8929 30.7151C12.8796 30.6213 12.8481 30.531 12.8001 30.4495C12.7522 30.3679 12.6888 30.2967 12.6135 30.2399C11.7084 29.5565 10.6323 29.1404 9.50552 29.0381C8.37879 28.9358 7.24602 29.1514 6.23415 29.6607C5.22228 30.17 4.37128 30.9529 3.77651 31.9217C3.18174 32.8906 2.8667 34.007 2.8667 35.1459V35.146ZM25.8 6.64732C25.9901 6.64732 26.1724 6.5713 26.3068 6.436C26.4412 6.30069 26.5167 6.11718 26.5167 5.92583C26.5167 5.73448 26.4412 5.55097 26.3068 5.41566C26.1724 5.28036 25.9901 5.20435 25.8 5.20435H7.1667C6.97663 5.20435 6.79434 5.28036 6.65994 5.41566C6.52554 5.55097 6.45003 5.73448 6.45003 5.92583V8.81177C6.45003 9.21039 6.77092 9.53325 7.1667 9.53325H25.8C25.9901 9.53325 26.1724 9.45724 26.3068 9.32194C26.4412 9.18663 26.5167 9.00312 26.5167 8.81177C26.5167 8.62042 26.4412 8.43691 26.3068 8.3016C26.1724 8.1663 25.9901 8.09028 25.8 8.09028H7.88337V6.64732H25.8ZM9.3167 10.9762C9.12663 10.9762 8.94434 11.0522 8.80994 11.1875C8.67554 11.3228 8.60003 11.5064 8.60003 11.6977C8.60003 11.8891 8.67554 12.0726 8.80994 12.2079C8.94434 12.3432 9.12663 12.4192 9.3167 12.4192H23.65C23.8401 12.4192 24.0224 12.3432 24.1568 12.2079C24.2912 12.0726 24.3667 11.8891 24.3667 11.6977C24.3667 11.5064 24.2912 11.3228 24.1568 11.1875C24.0224 11.0522 23.8401 10.9762 23.65 10.9762H9.3167ZM27.95 16.0266H12.1834C11.9933 16.0266 11.811 16.1026 11.6766 16.2379C11.5422 16.3732 11.4667 16.5568 11.4667 16.7481C11.4667 16.9395 11.5422 17.123 11.6766 17.2583C11.811 17.3936 11.9933 17.4696 12.1834 17.4696H27.95C28.1401 17.4696 28.3224 17.3936 28.4568 17.2583C28.5912 17.123 28.6667 16.9395 28.6667 16.7481C28.6667 16.5568 28.5912 16.3732 28.4568 16.2379C28.3224 16.1026 28.1401 16.0266 27.95 16.0266ZM20.7834 21.077C20.7834 20.8857 20.7079 20.7021 20.5735 20.5668C20.4391 20.4315 20.2568 20.3555 20.0667 20.3555H5.73337C5.54329 20.3555 5.36101 20.4315 5.22661 20.5668C5.09221 20.7021 5.0167 20.8857 5.0167 21.077C5.0167 21.2684 5.09221 21.4519 5.22661 21.5872C5.36101 21.7225 5.54329 21.7985 5.73337 21.7985H20.0667C20.4625 21.7985 20.7834 21.4756 20.7834 21.077ZM27.95 20.3555H22.9334C22.7433 20.3555 22.561 20.4315 22.4266 20.5668C22.2922 20.7021 22.2167 20.8857 22.2167 21.077C22.2167 21.2684 22.2922 21.4519 22.4266 21.5872C22.561 21.7225 22.7433 21.7985 22.9334 21.7985H27.95C28.1401 21.7985 28.3224 21.7225 28.4568 21.5872C28.5912 21.4519 28.6667 21.2684 28.6667 21.077C28.6667 20.8857 28.5912 20.7021 28.4568 20.5668C28.3224 20.4315 28.1401 20.3555 27.95 20.3555ZM12.9 25.4059C13.0901 25.4059 13.2724 25.3299 13.4068 25.1946C13.5412 25.0593 13.6167 24.8758 13.6167 24.6844C13.6167 24.4931 13.5412 24.3096 13.4068 24.1743C13.2724 24.039 13.0901 23.9629 12.9 23.9629H5.73337C5.54329 23.9629 5.36101 24.039 5.22661 24.1743C5.09221 24.3096 5.0167 24.4931 5.0167 24.6844C5.0167 24.8758 5.09221 25.0593 5.22661 25.1946C5.36101 25.3299 5.54329 25.4059 5.73337 25.4059H12.9ZM15.7667 25.4059H20.7834C20.9734 25.4059 21.1557 25.3299 21.2901 25.1946C21.4245 25.0593 21.5 24.8758 21.5 24.6844C21.5 24.4931 21.4245 24.3096 21.2901 24.1743C21.1557 24.039 20.9734 23.9629 20.7834 23.9629H15.7667C15.5766 23.9629 15.3943 24.039 15.2599 24.1743C15.1255 24.3096 15.05 24.4931 15.05 24.6844C15.05 24.8758 15.1255 25.0593 15.2599 25.1946C15.3943 25.3299 15.5766 25.4059 15.7667 25.4059Z"
            fill="#F16126"
          />
          <path
            d="M32.25 34.0638C32.0599 34.0638 31.8776 34.1398 31.7432 34.2751C31.6088 34.4104 31.5333 34.5939 31.5333 34.7853V42.0001C31.5333 42.3987 31.2124 42.7216 30.8167 42.7216H2.15C1.75422 42.7216 1.43333 42.3987 1.43333 42.0001V3.03994C1.43333 2.84859 1.50884 2.66508 1.64324 2.52977C1.77764 2.39447 1.95993 2.31846 2.15 2.31846H30.8167C31.0067 2.31846 31.189 2.39447 31.3234 2.52977C31.4578 2.66508 31.5333 2.84859 31.5333 3.03994V16.5894C31.5333 16.7808 31.6088 16.9643 31.7432 17.0996C31.8776 17.2349 32.0599 17.3109 32.25 17.3109C32.4401 17.3109 32.6224 17.2349 32.7568 17.0996C32.8912 16.9643 32.9667 16.7808 32.9667 16.5894V3.03994C32.9667 1.84462 32.004 0.875488 30.8167 0.875488H2.15C0.962663 0.875488 0 1.84462 0 3.03994V42.0001C0 43.1958 0.962663 44.1646 2.15 44.1646H30.8167C32.004 44.1646 32.9667 43.1958 32.9667 42.0001V34.7853C32.9667 34.5939 32.8912 34.4104 32.7568 34.2751C32.6224 34.1398 32.4401 34.0638 32.25 34.0638Z"
            fill="#F16126"
          />
        </svg>
      </div>
    </div>
    <div class="item-box3">
      <div class="rectangle-352"></div>
      <div class="item-box4">
        <div class="_1-000">1,000+</div>
        <div class="video-sessions">Video Sessions</div>
      </div>
      <div class="frame4">
        <svg
          class="group6"
          width="70"
          height="66"
          viewBox="0 0 70 66"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M65.1416 11.1309H62.9394V5.0621C62.9257 2.56805 60.9162 0.545106 58.4389 0.53125H46.0794C43.602 0.545106 41.5926 2.56805 41.5788 5.0621V11.1309H39.1703C37.849 8.98329 35.5368 7.68084 33.0319 7.68084H29.591C27.0861 7.68084 24.7739 8.98329 23.4526 11.1309H11.7676C9.08376 11.1309 6.90916 13.431 6.90916 16.2576V33.2448L0.83956 41.6414C0.289029 42.4035 0 43.318 0 44.2602V63.0625H1.65159V44.2602C1.65159 43.6644 1.83052 43.0963 2.1746 42.6113L6.90916 36.0714V45.4102C6.0696 45.5626 5.09241 45.8536 4.51435 46.3662L5.60165 47.6133C5.83563 47.4054 6.34487 47.2391 6.90916 47.1006C7.44593 46.9759 7.99646 46.9066 8.54699 46.865H8.56075L8.94613 46.8373L13.433 40.1173C13.5706 39.9233 13.7495 39.7709 13.9697 39.6739C13.9697 39.66 13.9697 39.66 13.9835 39.66C14.0798 39.6185 14.1899 39.5769 14.3 39.563C14.6716 39.4799 15.057 39.563 15.3736 39.7847L15.6213 39.951H15.6351L15.7727 40.048C16.2957 40.3944 16.4609 41.0872 16.1306 41.6275L15.6351 42.4589H15.6213L13.9835 45.1608H13.9697L10.8592 50.3013L9.97837 51.7561L9.45537 52.6013L9.40031 52.6983L9.37279 52.7953C9.35902 52.823 8.46441 55.6912 7.14314 57.146L5.68423 58.7533L6.90916 59.8756L8.36807 58.2684C9.78569 56.6888 10.7216 53.9592 10.9143 53.3911L11.6988 52.1164H19.5163C19.5301 54.0978 19.1447 55.8852 18.0987 57.0213C16.5985 58.6425 15.4562 60.1527 15.4011 60.222L15.2359 60.4437V63.0625H16.8875V61.0118C17.2591 60.5407 18.1813 59.363 19.3099 58.1575C20.7 56.6472 21.1817 54.4442 21.1679 52.1164H46.1345V56.5918L43.5195 54.1948C42.2257 53.0447 40.2713 53.0724 39.0326 54.2779L38.5922 54.7074C37.3535 55.8852 37.2985 57.8527 38.4683 59.0997C38.5234 59.1551 38.5784 59.2106 38.6473 59.266L45.4326 65.5704H64.0818C65.4581 65.5842 66.5729 64.4896 66.6005 63.104V51.8808C68.5686 51.2296 70 49.2898 70 46.9897V16.2576C70 13.431 67.8254 11.1309 65.1416 11.1309ZM13.9697 25.6795V37.9281C13.199 38.0805 12.5108 38.5377 12.0704 39.1889L8.56075 44.4403V16.2576C8.56075 14.3455 9.99214 12.7936 11.7676 12.7936H13.9697V25.6795ZM13.9697 50.4537H12.7035L13.9697 48.3615V50.4537ZM43.2304 12.7936V5.0621C43.2304 3.48254 44.5104 2.19395 46.0794 2.19395H58.4389C60.0079 2.19395 61.2878 3.48254 61.2878 5.0621V13.6111C61.2878 15.1907 60.0079 16.4793 58.4389 16.4793H51.9288L48.6394 19.583V16.4793H46.0794C44.5104 16.4793 43.2304 15.1907 43.2304 13.6111V12.7936ZM24.0307 14.9413C24.0307 14.2069 24.1683 13.4726 24.4573 12.7936C24.7051 12.184 25.0629 11.6159 25.5171 11.1309C26.5769 9.99476 28.0495 9.34354 29.591 9.34354H33.0319C34.5733 9.34354 36.046 9.99476 37.1058 11.1309C37.56 11.6159 37.9178 12.184 38.1656 12.7936C38.4546 13.4726 38.5922 14.2069 38.5922 14.9413V15.5786L36.0735 15.0106H32.0822L30.6508 13.4449L30.0452 12.8075C29.8938 12.6551 29.6874 12.5581 29.4672 12.5581H29.2332L29.1093 12.5997H29.0818L28.9579 12.6689L28.779 12.8491L27.2238 14.969H25.9713L25.7648 15.0106L24.0307 15.6202V14.9413ZM24.0307 17.4076L26.1777 16.6594H27.6367C27.7192 16.6594 27.8156 16.6455 27.8982 16.6178C28.0633 16.5624 28.2009 16.4654 28.2973 16.3269L29.2607 15.0244L29.5222 14.6642L31.1188 16.3961C31.2702 16.5624 31.4904 16.6594 31.7106 16.6594H35.7983L38.5922 17.2829V22.1047C38.5784 24.7789 36.4314 26.9404 33.7751 26.9404H28.8478C26.1915 26.9404 24.0444 24.7789 24.0307 22.1047V17.4076ZM35.7983 33.6743V38.0527H27.1549V33.6743H25.5033V38.0527H21.4569V32.9954C21.4707 30.9447 23.1085 29.2959 25.1455 29.2959H37.8903C39.9272 29.2959 41.5651 30.9447 41.5788 32.9954V38.0527H37.4499V33.6743H35.7983ZM21.0853 50.4537H15.6351V45.6319L17.5344 42.5005C18.3327 41.2119 17.9611 39.5076 16.6948 38.6763L16.3095 38.413C16.103 38.2606 15.8691 38.1497 15.6351 38.0527V12.7936H22.6956C22.4892 13.4864 22.3791 14.2069 22.3791 14.9413V22.1047C22.3791 24.3494 23.5352 26.4416 25.4345 27.6332H25.1455C22.2002 27.6332 19.8191 30.0302 19.8053 32.9954V38.8841C19.8053 39.3413 20.177 39.7154 20.6311 39.7154H47.0979C47.442 39.7154 47.7448 39.5076 47.8687 39.1889L50.1121 33.3279H50.8002C52.6032 33.3141 54.0484 31.8592 54.0484 30.0441V28.3537C54.0484 27.8965 53.6768 27.5223 53.2226 27.5223H45.2123C44.7582 27.5223 44.3866 27.8965 44.3866 28.3537V31.402L43.2304 34.4087V32.9954C43.2167 30.0302 40.8356 27.6332 37.8903 27.6332H37.1884C39.0877 26.4416 40.2438 24.3494 40.2438 22.1047V14.9413C40.2438 14.2069 40.1337 13.4864 39.9272 12.7936H41.5788V13.6111C41.5788 16.119 43.5883 18.142 46.0794 18.142H46.9878V23.4072L52.5895 18.142H58.4389C59.4849 18.142 60.4896 17.7817 61.2878 17.1166V48.7079H53.3051V42.4589C53.3051 40.5191 51.6948 38.9395 49.7267 38.9395C47.7585 38.9395 46.1345 40.5191 46.1345 42.4589V50.4537H21.0853ZM43.602 38.0527L45.9831 31.8592C46.0106 31.7622 46.0381 31.6514 46.0381 31.5544V29.185H52.3968V30.0441C52.4105 30.9309 51.6948 31.6514 50.814 31.6652H49.5478C49.2037 31.6652 48.9009 31.8731 48.777 32.1917L46.5336 38.0527H43.602ZM64.9489 52.1164V63.104C64.9213 63.5613 64.536 63.9215 64.0818 63.9077H46.0657L39.7621 58.0467C39.4593 57.7696 39.2941 57.3816 39.2804 56.9798C39.2804 56.578 39.4455 56.19 39.7346 55.899L40.1888 55.4695C40.8081 54.8875 41.7578 54.8737 42.4046 55.4279L47.7861 60.3329V42.4589C47.7861 41.4336 48.6532 40.6022 49.7267 40.6022C50.8002 40.6022 51.6536 41.4336 51.6536 42.4589V50.3706H51.6948V52.1995C51.6948 52.6568 52.0665 53.0309 52.5206 53.0309C52.9748 53.0309 53.3464 52.6568 53.3464 52.1995V50.3706H56.0853V52.4766C56.0853 52.9339 56.4569 53.308 56.9111 53.308C57.3653 53.308 57.7369 52.9339 57.7369 52.4766V50.3706H60.462V52.4766C60.462 52.9339 60.8337 53.308 61.2878 53.308C61.742 53.308 62.1136 52.9339 62.1136 52.4766V50.3706H64.1368C64.2607 50.3706 64.3846 50.3983 64.4947 50.4537C64.77 50.5784 64.9351 50.8417 64.9489 51.1326V52.1164ZM68.3484 46.9897C68.3484 48.4169 67.5501 49.6501 66.394 50.1766C65.9949 49.2759 65.114 48.7079 64.1368 48.7079H62.9394V12.7936H65.1416C66.9033 12.7936 68.3484 14.3455 68.3484 16.2576V46.9897Z"
            fill="#F16126"
          />
          <path
            d="M28.1459 21.7306C28.779 21.7167 29.2882 21.2041 29.2882 20.5667C29.2194 19.9293 28.6414 19.4721 28.0083 19.5414C27.4715 19.5968 27.0448 20.0263 26.9898 20.5667C27.0035 21.2041 27.5128 21.7167 28.1459 21.7306ZM34.3118 21.7306C34.9449 21.7167 35.4542 21.2041 35.4542 20.5667C35.4542 19.9293 34.9449 19.4167 34.3118 19.4167C33.6787 19.4167 33.1695 19.9293 33.1557 20.5667C33.1695 21.2041 33.6787 21.7167 34.3118 21.7306ZM28.7928 25.0837C29.2745 25.6656 30.1691 26.012 31.2289 26.012C32.2886 26.012 32.9493 25.7488 33.4585 25.2777C33.8164 25.0005 33.8852 24.474 33.5961 24.1138C33.3209 23.7535 32.7979 23.6842 32.44 23.9752C32.3987 24.0029 32.3712 24.0306 32.3437 24.0722C32.1923 24.2108 31.7656 24.3632 31.2289 24.3632C30.6921 24.3632 30.1691 24.1415 30.0865 24.0445C29.7975 23.6842 29.2882 23.6288 28.9304 23.9059L28.9166 23.9198C28.5726 24.1969 28.5175 24.7234 28.7928 25.0837ZM51.8462 6.47534H57.9296V8.13804H51.8462V6.47534ZM46.5199 6.47534H48.6807V8.13804H46.5199V6.47534ZM46.2721 10.6875H58.2049V12.3502H46.2721V10.6875Z"
            fill="#F16126"
          />
        </svg>
      </div>
    </div>
    <div class="item-box5">
      <div class="rectangle-353"></div>
      <div class="group-22">
        <div class="item-box6">
          <div class="_150">150+</div>
          <div class="schools">Schools</div>
        </div>
        <div class="school">
          <svg
            class="group7"
            width="68"
            height="70"
            viewBox="0 0 68 70"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M61.5717 39.8475V29.322M6.42834 29.322V39.6664M49.9506 16.7037V10.531M49.9506 10.531L35.4487 1.25142C35.0156 0.974318 34.5132 0.827148 34.0001 0.827148C33.487 0.827148 32.9845 0.974318 32.5515 1.25142L18.0496 10.531V16.7037M49.9506 10.531L52.6251 12.2424M26.526 16.7037H7.71896C7.2865 16.7038 6.86696 16.8522 6.52955 17.1245C6.19215 17.3969 5.95704 17.7768 5.86301 18.2018L3.97561 26.7307C3.71105 27.9265 4.61477 29.0611 5.83156 29.0611H18.0496M49.9506 29.0611H62.1684C63.3854 29.0611 64.2891 27.9263 64.0244 26.7307L62.137 18.2018C62.043 17.7768 61.8078 17.3969 61.4704 17.1245C61.133 16.8522 60.7135 16.7038 60.281 16.7037H41.4397M15.3749 12.2424L18.0494 10.531M18.0494 39.8475V35.7918"
              stroke="#F16126"
              stroke-width="2"
              stroke-miterlimit="10"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M18.0494 30.9739V23.9542C18.0494 23.4296 18.1809 22.9136 18.4318 22.4538C18.6826 21.994 19.0447 21.6055 19.4844 21.3241L32.5513 12.9628C32.9844 12.6857 33.4868 12.5386 33.9999 12.5386C34.513 12.5386 35.0155 12.6857 35.4485 12.9628L48.5154 21.3241C48.9552 21.6055 49.3172 21.994 49.5681 22.4538C49.8189 22.9136 49.9504 23.4296 49.9504 23.9542V39.8475"
              stroke="#F16126"
              stroke-width="2"
              stroke-miterlimit="10"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M42.9322 39.9852V29.8726H25.0678V39.9852M34 29.8726V39.9417M50.4525 69.2333H63.3111C64.3785 69.2333 65.2439 68.3622 65.2439 67.2875V64.4274H2.75621V67.2875C2.75621 68.362 3.6215 69.2333 4.689 69.2333H45.6669"
              stroke="#F16126"
              stroke-width="2"
              stroke-miterlimit="10"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M59.7919 58.5206H8.20814C5.19705 58.5206 2.75607 60.978 2.75607 64.0093V64.4276H65.2438V64.0093C65.2438 60.9778 62.8029 58.5206 59.7919 58.5206ZM0.0253906 55.7678V42.8323C0.0253906 41.312 1.24957 40.0796 2.75977 40.0796H65.2402C66.7504 40.0796 67.9746 41.312 67.9746 42.8323V55.7678C67.9746 57.2882 66.7504 58.5206 65.2402 58.5206H2.75977C1.24957 58.5206 0.0253906 57.288 0.0253906 55.7678Z"
              stroke="#F16126"
              stroke-width="2"
              stroke-miterlimit="10"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M58.1998 45.5877V53.0058C58.2812 53.0198 60.7822 53.0058 60.7822 53.0058M25.951 45.5877V53.012M31.0544 45.5877V53.012M25.951 49.1726H31.0544M21.7262 46.2216C21.1175 45.8073 20.3993 45.5865 19.6645 45.5877C17.6279 45.5877 15.9771 47.2497 15.9771 49.2999C15.9771 51.3502 17.6279 53.0121 19.6645 53.0121C20.4916 53.0121 21.172 52.738 21.6882 52.2751C21.7953 52.1789 21.8953 52.075 21.9875 51.9643M11.7632 46.3509C11.7632 46.3509 10.4399 45.2311 8.87943 45.7043C7.44648 46.1388 7.24619 47.8021 8.28279 48.4825C8.28279 48.4825 9.29998 48.9393 10.4283 49.3583C13.1442 50.3667 11.9743 53.012 9.78793 53.012C8.69309 53.012 7.7742 52.5293 7.21803 51.9114"
              stroke="#F16126"
              stroke-width="2"
              stroke-miterlimit="10"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M38.8537 53.0121C40.8902 53.0121 42.5411 51.3501 42.5411 49.2999C42.5411 47.2497 40.8902 45.5876 38.8537 45.5876C36.8171 45.5876 35.1662 47.2497 35.1662 49.2999C35.1662 51.3501 36.8171 53.0121 38.8537 53.0121Z"
              stroke="#F16126"
              stroke-width="2"
              stroke-miterlimit="10"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M50.2947 53.0121C52.3312 53.0121 53.9821 51.3501 53.9821 49.2999C53.9821 47.2497 52.3312 45.5876 50.2947 45.5876C48.2582 45.5876 46.6072 47.2497 46.6072 49.2999C46.6072 51.3501 48.2582 53.0121 50.2947 53.0121Z"
              stroke="#F16126"
              stroke-width="2"
              stroke-miterlimit="10"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </div>
      </div>
    </div>
    <div class="item-box3">
      <div class="item-box7">
        <div class="_100">100+</div>
        <div class="expert-faculties">Expert Faculties</div>
        <div class="rectangle-354"></div>
      </div>
      <div class="frame5">
        <svg
          class="group8"
          width="70"
          height="70"
          viewBox="0 0 70 70"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M21.8518 63.2614C21.6398 63.2124 21.4171 63.25 21.2327 63.3661C21.0483 63.4822 20.9172 63.6673 20.8682 63.8807L19.7501 68.7628C19.7013 68.9762 19.7386 69.2005 19.854 69.3862C19.9694 69.5719 20.1533 69.7038 20.3653 69.753C20.5773 69.8022 20.8001 69.7646 20.9845 69.6485C21.169 69.5323 21.3001 69.3472 21.3489 69.1337L22.467 64.2516C22.5159 64.0382 22.4785 63.8139 22.3632 63.6283C22.2478 63.4426 22.0638 63.3106 21.8518 63.2614ZM49.1318 63.8807C49.0814 63.6689 48.9499 63.4857 48.766 63.371C48.5821 63.2563 48.3607 63.2194 48.1499 63.2683C47.939 63.3172 47.756 63.448 47.6405 63.6322C47.525 63.8163 47.4864 64.0389 47.5332 64.2516L48.6513 69.1337C48.6929 69.3156 48.7946 69.478 48.9396 69.5943C49.0847 69.7106 49.2645 69.774 49.45 69.7742C49.9691 69.7804 50.3736 69.2718 50.25 68.7627L49.132 63.8805L49.1318 63.8807ZM30.3316 9.76282L29.7833 12.9812C29.731 13.2806 29.7637 13.5887 29.8775 13.8703C29.9912 14.1519 30.1815 14.3955 30.4265 14.5731C30.7018 14.7758 31.034 14.8853 31.3751 14.8857C31.632 14.8857 31.8904 14.8234 32.1289 14.697L35 13.1775L37.8711 14.697C38.1378 14.8395 38.4389 14.9034 38.74 14.8815C39.0411 14.8596 39.33 14.7528 39.5735 14.5733C39.8185 14.3956 40.0088 14.152 40.1226 13.8705C40.2363 13.589 40.269 13.2808 40.2168 12.9815L39.6684 9.76296L41.991 7.48367C42.2081 7.27239 42.3616 7.0038 42.434 6.7087C42.5063 6.4136 42.4946 6.10394 42.4002 5.81523C42.308 5.52579 42.1367 5.26835 41.9059 5.07241C41.675 4.87647 41.394 4.74996 41.0951 4.70738L37.8851 4.23776L36.4495 1.30965C36.1753 0.750017 35.6198 0.402344 34.9998 0.402344C34.3797 0.402344 33.8242 0.749879 33.55 1.30965L32.1146 4.23776L28.9046 4.70738C28.6056 4.74992 28.3246 4.87642 28.0938 5.07237C27.863 5.26831 27.6917 5.52577 27.5996 5.81523C27.5052 6.10393 27.4935 6.41357 27.5659 6.70865C27.6382 7.00374 27.7917 7.27234 28.0086 7.48367L30.3314 9.76296L30.3316 9.76282ZM32.3629 5.87042C32.6223 5.83256 32.8688 5.73172 33.0809 5.5766C33.293 5.42148 33.4645 5.21674 33.5805 4.98004L35 2.08428L36.4196 4.98004C36.5356 5.2167 36.7071 5.4214 36.9192 5.57651C37.1313 5.73163 37.3776 5.83249 37.6371 5.87042L40.8114 6.33481L38.5144 8.58891C38.3266 8.77307 38.1862 9.00044 38.1052 9.25143C38.0242 9.50241 38.005 9.76947 38.0494 10.0296L38.5915 13.2123L35.7524 11.7097H35.7521C35.5201 11.5871 35.2619 11.5231 34.9999 11.5231C34.7378 11.5231 34.4797 11.5872 34.2477 11.7098L31.4084 13.2124L31.9507 10.0298C31.995 9.76974 31.9759 9.50268 31.8949 9.25168C31.8139 9.00068 31.6735 8.77327 31.4858 8.58904L29.1887 6.33495L32.3629 5.87042Z"
            fill="#F16126"
          />
          <path
            d="M69.4474 68.8484L68.5781 61.5048C68.151 57.8976 67.4315 55.2683 66.3782 53.4671C65.4208 51.8294 64.1524 50.7722 62.3864 50.1401C61.3751 49.7796 60.3602 49.4292 59.342 49.0889C60.2047 48.6623 60.9825 48.0626 61.6316 47.3098C62.9087 45.8288 63.5364 43.9358 63.3992 41.9794C63.262 40.023 62.3763 38.2376 60.9052 36.952C59.4341 35.6665 57.5548 35.0342 55.6104 35.1725C53.6672 35.3106 51.8935 36.2022 50.6166 37.6833C49.3395 39.1643 48.7117 41.0574 48.8489 43.0137C48.9861 44.97 49.8717 46.7556 51.343 48.0411C51.8178 48.4563 52.3438 48.8082 52.9078 49.0882C51.9581 49.4065 50.8904 49.7718 49.8616 50.1399C48.2515 50.7164 47.0541 51.6494 46.1297 53.0517C45.6232 52.9455 45.1158 52.8431 44.6078 52.7443C43.0718 52.4425 41.3305 52.1002 40.9194 51.687C39.9775 50.7599 39.8854 49.0909 39.8971 48.3235C42.7178 46.6351 44.6131 43.537 44.6131 40.0004V38.8481C46.2706 38.4711 47.512 36.9765 47.512 35.1956C47.512 33.9444 46.8985 32.8353 45.9591 32.1551C46.5238 29.3029 46.4059 26.7964 45.6067 24.697C45.5681 24.5958 45.5102 24.5031 45.4361 24.4244C45.362 24.3457 45.2732 24.2824 45.1748 24.2383C45.0764 24.1941 44.9704 24.1699 44.8627 24.167C44.755 24.1641 44.6478 24.1825 44.5472 24.2214C44.4466 24.2601 44.3546 24.3185 44.2764 24.3931C44.1982 24.4677 44.1354 24.5571 44.0915 24.6561C44.0476 24.7551 44.0236 24.8619 44.0207 24.9703C44.0178 25.0787 44.0362 25.1866 44.0747 25.2879C44.7315 27.0136 44.8428 29.102 44.4108 31.5042C44.2066 31.4693 43.9998 31.4517 43.7927 31.4515C43.6065 31.4515 43.4259 31.5152 43.2805 31.6322C43.1351 31.7492 43.0335 31.9124 42.9925 32.0952C42.9427 32.3168 42.8549 32.4839 42.7531 32.6097L41.8947 29.186C41.8638 29.0626 41.805 28.9482 41.7229 28.8515C41.6408 28.7548 41.5376 28.6785 41.4214 28.6286C41.3052 28.5787 41.1791 28.5564 41.053 28.5636C40.9269 28.5708 40.8041 28.6073 40.6942 28.6701C40.632 28.7057 34.4239 32.1871 30.4958 28.4179C30.3891 28.3157 30.2569 28.2443 30.1133 28.2112C29.9697 28.178 29.8199 28.1844 29.6796 28.2296C29.5393 28.275 29.4136 28.3575 29.3159 28.4686C29.2182 28.5796 29.1519 28.7151 29.1241 28.8608C28.9687 29.6754 28.3473 31.8334 27.3283 32.691L26.9415 31.9091C26.8735 31.7716 26.7687 31.656 26.639 31.5752C26.5093 31.4943 26.3598 31.4515 26.2072 31.4515C25.8247 31.4515 25.4553 31.5101 25.1077 31.6186C24.9728 30.9075 24.8213 29.6528 24.8184 27.594C24.8127 23.6378 27.8984 23.3348 28.2457 23.3135C28.3544 23.3078 28.4609 23.2805 28.559 23.2333C28.6572 23.186 28.7452 23.1198 28.8179 23.0382C28.9401 22.901 31.8641 19.6855 36.6741 20.1851C37.8974 20.3124 39.0314 20.6121 40.0447 21.0755C40.1427 21.1204 40.2486 21.1455 40.3563 21.1492C40.4639 21.1529 40.5713 21.1352 40.6721 21.0971C40.773 21.059 40.8654 21.0013 40.9441 20.9272C41.0228 20.8532 41.0862 20.7642 41.1308 20.6655C41.1753 20.5668 41.2002 20.4602 41.2038 20.3518C41.2075 20.2434 41.1899 20.1354 41.1521 20.0339C41.1142 19.9323 41.0569 19.8393 40.9834 19.7601C40.9099 19.6808 40.8215 19.617 40.7235 19.5721C39.5485 19.0345 38.2427 18.688 36.8426 18.5424C31.9396 18.0336 28.7037 20.8264 27.8272 21.6949C26.0448 21.9289 23.1717 23.378 23.1778 27.5965C23.1816 30.2873 23.4246 31.7557 23.6228 32.507C22.9238 33.1882 22.4881 34.1415 22.4881 35.1958C22.4881 36.9767 23.7295 38.4713 25.3869 38.8483V40.0006C25.3869 43.5372 27.2821 46.6351 30.1027 48.3237C30.1142 49.0911 30.0209 50.7614 29.0743 51.6932C28.6695 52.1002 26.9284 52.4423 25.3922 52.7443C24.8842 52.843 24.3768 52.9455 23.8703 53.0517C22.9458 51.6494 21.7484 50.7165 20.1383 50.1399C19.11 49.7719 18.0422 49.4066 17.0923 49.0882C17.6564 48.8082 18.1823 48.4563 18.6571 48.0411C20.1283 46.7554 21.014 44.97 21.1511 43.0137C21.2882 41.0575 20.6604 39.1643 19.3834 37.6833C18.1064 36.2022 16.3328 35.3106 14.3897 35.1725C12.4459 35.0345 10.5659 35.6662 9.09482 36.952C7.62372 38.2377 6.73806 40.023 6.60079 41.9794C6.46366 43.9358 7.09134 45.8288 8.36843 47.3098C9.00576 48.051 9.78434 48.656 10.6581 49.0888C9.70909 49.4067 8.64228 49.7718 7.61361 50.1399C5.84761 50.7721 4.57927 51.8292 3.62183 53.4669C2.56855 55.2683 1.849 57.8975 1.42189 61.5047L0.552629 68.8482C0.526915 69.0657 0.588058 69.2846 0.722609 69.4567C0.857161 69.6288 1.0541 69.7401 1.27013 69.766C1.71146 69.8217 2.13009 69.4982 2.18177 69.0437L3.05103 61.7001C3.8898 54.6159 5.70132 52.5774 8.16321 51.6961C10.1775 50.9751 12.3456 50.2645 13.4587 49.9049C13.7301 49.8169 14.022 49.8169 14.2934 49.9049C15.4077 50.2648 17.5775 50.9762 19.5884 51.6961C20.6545 52.0776 21.4691 52.636 22.133 53.4552C18.4915 54.3928 14.6028 56.0853 13.6136 60.1688C11.9038 67.2259 11.6158 68.7339 11.6043 68.7945C11.5639 69.0096 11.6099 69.2321 11.7323 69.413C11.8547 69.5939 12.0434 69.7185 12.257 69.7594C12.6911 69.8458 13.1332 69.5532 13.2162 69.1027C13.2191 69.0879 13.5174 67.5363 15.2075 60.5604C16.2586 56.2223 21.7192 55.1491 25.7064 54.3654L25.7725 54.3523C26.3498 55.653 27.9218 58.3328 31.2055 58.7536C31.3682 58.7743 31.5333 58.7453 31.6795 58.6705L32.8943 59.5509L31.2602 68.8039C31.2221 69.0195 31.2707 69.2416 31.3953 69.4211C31.5198 69.6007 31.7101 69.7231 31.9242 69.7615C32.3597 69.8428 32.7982 69.5445 32.8754 69.0929L34.4794 60.0101H35.5197L37.1237 69.0929C37.1573 69.2838 37.2566 69.4566 37.4041 69.5811C37.5515 69.7057 37.7378 69.7741 37.9303 69.7744C38.4344 69.7791 38.8325 69.3037 38.7389 68.8039L37.1048 59.5509L38.3198 58.6702C38.4659 58.7452 38.6309 58.7742 38.7935 58.7535C42.0773 58.3327 43.6494 55.653 44.2266 54.3522L44.2926 54.3653C48.2799 55.1489 53.7405 56.2222 54.7916 60.5602C56.4817 67.5363 56.7801 69.0877 56.7827 69.1022C56.8183 69.291 56.9182 69.4614 57.0651 69.5841C57.2121 69.7068 57.3969 69.7741 57.5879 69.7744C58.0954 69.7796 58.495 69.2967 58.3948 68.7947C58.3833 68.734 58.0952 67.2262 56.3854 60.1689C55.3963 56.0856 51.5074 54.393 47.8661 53.4554C48.53 52.6361 49.3445 52.0779 50.4105 51.6962C52.423 50.976 54.5919 50.2649 55.7058 49.905C55.8376 49.8624 55.9752 49.8402 56.1136 49.8392L56.1269 49.8389C56.2662 49.8393 56.4054 49.8612 56.5407 49.9049C57.6544 50.2646 59.8235 50.9757 61.8359 51.6961C64.2977 52.5772 66.1093 54.6159 66.948 61.7001L67.8173 69.0437C67.843 69.2612 67.9536 69.4595 68.1245 69.5949C68.2955 69.7304 68.5129 69.7919 68.7289 69.766C68.945 69.7401 69.1419 69.6288 69.2765 69.4567C69.411 69.2846 69.4722 69.0657 69.4464 68.8482L69.4474 68.8484ZM8.23745 42.0958C8.44745 39.1014 10.9348 36.8057 13.872 36.8057C14.0051 36.8057 14.1393 36.8104 14.274 36.82C15.7802 36.927 17.1547 37.6181 18.1445 38.766C19.1343 39.9139 19.6209 41.3811 19.5146 42.8973C19.4083 44.4137 18.7219 45.7973 17.5816 46.7938C16.4414 47.7905 14.983 48.2809 13.4779 48.1731C10.3688 47.9522 8.01775 45.2259 8.23745 42.096V42.0958ZM27.0277 40.0006V38.1142C27.0277 37.8952 26.9412 37.6852 26.7874 37.5303C26.6336 37.3754 26.4249 37.2884 26.2074 37.2884C25.0612 37.2884 24.1288 36.3497 24.1288 35.1958C24.1288 34.2082 24.8119 33.3783 25.7273 33.1596L26.2298 34.1752C26.3142 34.346 26.4548 34.4821 26.6277 34.5603C26.8005 34.6385 26.995 34.6541 27.1779 34.6043C28.9777 34.1153 29.9491 31.9208 30.4054 30.4619C34.0826 32.9748 38.6077 31.4478 40.552 30.579L41.4121 34.0092C41.4606 34.2027 41.577 34.372 41.7399 34.4858C41.9028 34.5995 42.1012 34.6499 42.2982 34.6277C42.8676 34.5639 43.8264 34.1812 44.3379 33.1762C45.2204 33.418 45.8713 34.2318 45.8713 35.1958C45.8713 36.3497 44.9389 37.2884 43.7928 37.2884C43.5752 37.2884 43.3666 37.3754 43.2128 37.5303C43.0589 37.6852 42.9725 37.8952 42.9725 38.1142V40.0006C42.9725 44.426 39.3961 48.0265 35.0001 48.0265C30.6042 48.0265 27.0277 44.4262 27.0277 40.0006ZM35 49.6782C36.1185 49.6791 37.2284 49.4826 38.2795 49.0976C38.3422 49.9661 38.5505 51.106 39.144 52.0721C38.3104 52.5443 36.8029 53.2199 35 53.2199C33.209 53.2199 31.6944 52.5417 30.8562 52.0691C31.4486 51.1022 31.657 49.9643 31.7201 49.0975C32.7713 49.4826 33.8814 49.6791 35 49.6782ZM35.9428 58.3583H34.0571L32.863 57.4927L35 55.2412L37.1371 57.4927L35.943 58.3583H35.9428ZM31.0167 57.0473C29.0291 56.6192 27.9329 55.0213 27.4255 54.0129C28.3556 53.8048 29.1114 53.5852 29.6632 53.2799C30.3312 53.699 31.6087 54.383 33.2444 54.7002L31.0167 57.0473ZM38.9833 57.0473L36.7556 54.7002C38.3923 54.3828 39.6705 53.6982 40.3381 53.279C40.8915 53.585 41.6463 53.805 42.5742 54.0128C42.0666 55.022 40.9705 56.6194 38.9832 57.0473H38.9833ZM50.4856 42.8973C50.3792 41.3811 50.8657 39.9139 51.8557 38.766C52.8454 37.6181 54.2199 36.9271 55.7262 36.82C55.861 36.8104 55.995 36.8057 56.1281 36.8057C59.0652 36.8057 61.5527 39.1015 61.7627 42.0958C61.9823 45.2257 59.6314 47.952 56.5223 48.173C55.0176 48.2806 53.5589 47.7903 52.4185 46.7937C51.2783 45.7973 50.592 44.4135 50.4856 42.8972V42.8973Z"
            fill="#F16126"
          />
          <path
            d="M43.0806 23.031C43.5337 23.031 43.9009 22.6613 43.9009 22.2052C43.9009 21.7491 43.5337 21.3794 43.0806 21.3794C42.6276 21.3794 42.2603 21.7491 42.2603 22.2052C42.2603 22.6613 42.6276 23.031 43.0806 23.031Z"
            fill="#F16126"
          />
        </svg>
      </div>
    </div>
    <div class="title-head">
      <div class="our-students-and-schools-love-us">
        Our students and schools love us
      </div>
      <div class="start-to-success">START TO SUCCESS</div>
    </div>
  </div>
  <div class="video-sec">
    <div class="rectangle-33"></div>
    <div class="mask-group">
      <div class="rectangle-332"></div>
      <div class="frame6">
        <div class="group3">
          <div class="_1">
            <svg
              class="vector83"
              width="615.5618896484375"
              height="43.6093635559082"
            ></svg>

            <svg
              class="vector84"
              width="614"
              height="43"
              viewBox="0 0 614 43"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.06"
                d="M43.8464 1.48913C43.8464 1.48913 -21.7638 40.8551 9.2105 42.9156C15.0419 43.3223 604.422 41.8583 608.626 41.8583C626.147 41.8583 587.742 11.5476 580.201 8.1315C572.661 4.71544 359.801 0.648682 307.942 0.648682C256.083 0.648682 43.8464 1.48913 43.8464 1.48913Z"
                fill="#F5F5F5"
              />
            </svg>

            <svg
              class="vector85"
              width="610"
              height="42"
              viewBox="0 0 610 42"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.13"
                d="M40.8157 2.57352C40.8157 2.57352 -20.9431 40.0417 8.26826 41.9124C14.1268 42.292 600.632 40.9093 604.809 40.9093C621.435 40.9093 585.633 12.4421 578.093 9.02605C570.553 5.60999 358.126 0.892578 306.267 0.892578C254.408 0.892578 40.8157 2.57352 40.8157 2.57352Z"
                fill="#EBEBEB"
              />
            </svg>

            <svg
              class="vector86"
              width="606"
              height="40"
              viewBox="0 0 606 40"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.19"
                d="M37.8122 2.68518C37.8122 2.68518 -20.1223 38.2284 7.48881 39.9094C13.3474 40.2889 597.005 38.9876 601.209 38.9876C616.94 38.9876 583.714 12.3369 576.174 8.92081C568.634 5.50475 356.615 0.245117 304.756 0.245117C252.897 0.245117 37.8122 2.68518 37.8122 2.68518Z"
                fill="#E1E1E1"
              />
            </svg>

            <svg
              class="vector87"
              width="603"
              height="40"
              viewBox="0 0 603 40"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.25"
                d="M35.8086 3.79681C35.8086 3.79681 -18.4371 37.3881 7.65507 39.0419C13.5136 39.3672 594.323 38.1743 598.5 38.1743C613.336 38.1743 582.714 13.3401 575.174 9.92405C567.634 6.50799 356.048 0.624756 304.162 0.624756C252.276 0.624756 35.8086 3.79681 35.8086 3.79681Z"
                fill="#D7D7D7"
              />
            </svg>

            <svg
              class="vector88"
              width="599"
              height="38"
              viewBox="0 0 599 38"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.31"
                d="M32.778 4.88119C32.778 4.88119 -17.4807 36.6831 6.79426 37.9302C12.6528 38.2555 590.614 37.1169 594.791 37.1169C608.759 37.1169 580.714 14.1262 573.093 10.7102C565.471 7.2941 354.374 0.814453 302.515 0.814453C250.656 0.814453 32.778 4.88119 32.778 4.88119Z"
                fill="#CDCDCD"
              />
            </svg>

            <svg
              class="vector89"
              width="596"
              height="36"
              viewBox="0 0 596 36"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.38"
                d="M30.7744 4.99264C30.7744 4.99264 -15.66 34.8154 6.96053 35.927C12.7919 36.2252 587.905 35.195 592.11 35.195C605.183 35.195 579.714 14.0208 572.174 10.6048C564.634 7.1887 353.862 0.0854492 302.003 0.0854492C250.144 0.0854492 30.7744 4.99264 30.7744 4.99264Z"
                fill="#C3C3C3"
              />
            </svg>

            <svg
              class="vector90"
              width="592"
              height="35"
              viewBox="0 0 592 35"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.44"
                d="M27.7709 6.1043C27.7709 6.1043 -14.8392 33.8666 6.07258 34.9239C11.9311 35.195 584.197 34.2732 588.374 34.2732C600.552 34.2732 577.687 14.9156 570.147 11.4995C562.607 8.08346 352.269 0.437988 300.437 0.437988C248.605 0.437988 27.7709 6.1043 27.7709 6.1043Z"
                fill="#B9B9B9"
              />
            </svg>

            <svg
              class="vector91"
              width="18.02364730834961"
              height="18.978103637695312"
            ></svg>

            <svg
              class="vector92"
              width="318"
              height="68"
              viewBox="0 0 318 68"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M317.827 67.3337L70.1684 58.9563L62.7367 58.7123L42.6658 58.0345L38.8686 57.8989L37.9736 57.6549L26.2294 54.4015L24.1952 53.8322L21.293 53.0188L19.4758 52.5308L17.6856 52.0157L16.9805 51.8259L15.8413 51.5006L1.33056 47.461L0.272766 47.1628L1.19493 46.5663C8.84359 41.7947 62.5198 9.15229 114.162 2.56418C185.658 -6.59953 268.518 18.4245 268.518 18.4245L274.838 24.6872L276.329 26.1513L278.228 28.0762L282.758 32.5496L284.629 34.3932L291.383 41.0626L293.661 43.34L309.012 58.5496L310.911 60.4203L314.79 64.2702L316.715 66.1951L317.827 67.3337Z"
                fill="url(#paint0_linear_906_3325)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3325"
                  x1="55.4678"
                  y1="9.85719"
                  x2="372.92"
                  y2="102.27"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="0.66" stop-color="white" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector93"
              width="290"
              height="72"
              viewBox="0 0 290 72"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.739594 60.4536L32.3378 24.5037C32.3378 24.5037 87.4514 -3.66527 164.942 0.428575C242.432 4.52242 289.191 71.1085 289.191 71.1085C289.191 71.1085 235.976 23.3108 153.143 25.7237C70.3098 28.1366 0.739594 60.4536 0.739594 60.4536Z"
                fill="url(#paint0_linear_906_3326)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3326"
                  x1="20.9461"
                  y1="42.5058"
                  x2="252.711"
                  y2="34.3655"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#B5B5B5" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector94"
              width="315"
              height="75"
              viewBox="0 0 315 75"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M314.191 54.1629L305.322 56.0335L303.803 56.3318L299.518 57.2264L277.196 61.9168L274.836 62.3777L266.998 64.0315H265.235L261.519 64.1941L2.87502 74.1983H1.84436H0L0.867931 73.1952L1.13916 72.8156L8.43522 64.0857L14.565 56.7385L16.5721 54.3255L25.7667 43.3182C25.7667 43.3182 99.1341 6.85314 166.317 1.26816C233.501 -4.31683 301.308 13.848 314.191 54.1629Z"
                fill="url(#paint0_linear_906_3327)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3327"
                  x1="307.492"
                  y1="24.7739"
                  x2="-1.08295"
                  y2="51.8265"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="0.04" stop-color="#DCDCDC" />
                  <stop offset="0.37" stop-color="#F6F6F6" />
                  <stop offset="0.56" stop-color="white" />
                  <stop offset="0.7" stop-color="#FBFBFB" />
                  <stop offset="0.85" stop-color="#EEEEEE" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector95"
              width="268"
              height="50"
              viewBox="0 0 268 50"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.718628 49.3619C0.718628 49.3619 38.1211 20.1899 83.8231 12.1649C129.525 4.13983 166.005 9.26393 211.707 13.3578C257.41 17.4516 267.309 22.1419 267.309 22.1419L265.682 19.241L259.959 13.0595C259.959 13.0595 195.19 0.913559 141.324 0.859336C87.4576 0.805113 57.2427 11.5142 37.9041 20.2983C18.5655 29.0825 0.718628 49.3619 0.718628 49.3619Z"
                fill="url(#paint0_linear_906_3328)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3328"
                  x1="30.8521"
                  y1="94.0418"
                  x2="235.259"
                  y2="-28.8217"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector96"
              width="277"
              height="87"
              viewBox="0 0 277 87"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M11.7187 86.3619C11.7187 86.3619 67.2663 34.8498 164.339 41.7362C254.333 48.2159 276.682 56.2409 276.682 56.2409L227.861 2.50577C227.861 2.50577 130.029 -5.84459 78.1968 16.3598C26.365 38.5642 0.299927 83.1627 0.299927 83.1627L11.7187 86.3619Z"
                fill="url(#paint0_linear_906_3329)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3329"
                  x1="-52.9694"
                  y1="219.317"
                  x2="152.635"
                  y2="52.2529"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.15" stop-color="#131112" />
                  <stop offset="0.74" stop-color="#9F9F9F" />
                  <stop offset="0.82" stop-color="#ACACAC" />
                  <stop offset="0.96" stop-color="#CECECE" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector97"
              width="276"
              height="93"
              viewBox="0 0 276 93"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M272.682 21.8114L275.584 24.3599C275.584 24.3599 231.184 19.4799 150.385 23.0857C50.0303 27.5591 0.612427 92.3829 0.612427 92.3829C0.612427 92.3829 17.1031 59.0899 64.4326 31.7614C111.762 4.43292 237.314 -0.528524 250.333 0.474605L272.682 21.8114Z"
                fill="url(#paint0_linear_906_3330)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3330"
                  x1="19.7883"
                  y1="118.247"
                  x2="247.896"
                  y2="-18.8585"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector98"
              width="277"
              height="123"
              viewBox="0 0 277 123"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M276.682 52.8114C276.682 52.8114 195.178 43.1325 120.373 56.0105C84.1449 62.6003 50.3925 78.9166 22.7305 103.212C16.0959 108.789 10.0024 114.98 4.53112 121.702L0.110076 122.163C0.110076 122.163 -2.14111 93.6414 30.3792 63.0867C62.8995 32.5319 162.658 0.0251465 221.243 0.0251465L276.682 52.8114Z"
                fill="url(#paint0_linear_906_3331)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3331"
                  x1="249.83"
                  y1="7.69773"
                  x2="-238.057"
                  y2="249.152"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#F4F4F4" />
                  <stop offset="0.13" stop-color="#CECECE" />
                  <stop offset="0.27" stop-color="#ACACAC" />
                  <stop offset="0.34" stop-color="#9F9F9F" />
                  <stop offset="0.85" stop-color="#131112" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector99"
              width="260"
              height="154"
              viewBox="0 0 260 154"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.191432 153.163C0.191432 151.536 -1.2732 113.932 21.4287 85.3839C47.0869 53.1483 83.3231 31.1608 131.195 18.4725C183.162 4.75408 208.848 0.497583 209.092 0.443359L259.188 29.0732L259.513 30.9981C258.483 31.1607 159.755 48.9189 97.2371 72.3704C39.1128 94.0596 4.09713 121.171 0.191432 153.163Z"
                fill="url(#paint0_linear_906_3332)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3332"
                  x1="-4.55508"
                  y1="138.875"
                  x2="236.324"
                  y2="-5.93517"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector100"
              width="260"
              height="154"
              viewBox="0 0 260 154"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M259.188 29.0732C259.188 29.0732 157.26 46.5059 93.7382 70.3099C30.2165 94.1138 3.93438 121.822 0.0829332 153.163C0.0829332 153.163 -1.219 113.716 21.3201 85.3839C43.8592 57.0523 78.6308 32.2994 131.086 18.4725C183.542 4.64564 208.983 0.443359 208.983 0.443359L259.188 29.0732Z"
                fill="url(#paint0_linear_906_3333)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3333"
                  x1="-5.01617"
                  y1="138.143"
                  x2="235.89"
                  y2="-6.6672"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#858585" />
                  <stop offset="0.19" stop-color="#C4C4C4" />
                  <stop offset="0.47" stop-color="#ECEBE9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector101"
              width="293"
              height="63"
              viewBox="0 0 293 63"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M292.191 62.1627L291.649 61.7017C291.052 61.1324 290.456 60.5902 289.832 60.0751L289.452 59.7226C289 59.2888 288.539 58.8821 288.069 58.5026L287.364 57.879L286.17 56.8488C284.733 55.6016 283.458 54.4087 281.912 53.2429L281.315 52.7278C235.966 15.2867 204.747 13.6058 151.532 12.4129C101.138 11.2742 0.159393 30.7403 0.159393 30.7403L8.56748 22.2544L10.439 20.3566L11.1441 19.6788C44.8667 11.9597 79.0477 6.39959 113.479 3.03228C124.599 1.97492 136.072 1.16159 147.545 0.754913C167.822 -0.185421 188.142 0.649177 208.273 3.24917C210.796 3.60162 213.264 3.98119 215.705 4.44209C221.129 5.41811 226.554 6.5839 231.599 7.9937C251.1 13.416 265.801 26.0229 275.836 37.8164C278.623 41.0867 281.239 44.4982 283.675 48.0375C286.834 52.5289 289.636 57.2608 292.056 62.1898L292.191 62.1627Z"
                fill="url(#paint0_linear_906_3334)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3334"
                  x1="254.897"
                  y1="31.8248"
                  x2="6.39774"
                  y2="26.6693"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector102"
              width="290"
              height="84"
              viewBox="0 0 290 84"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M289.191 83.1628L288.486 82.3223L286.398 79.9637C286.127 79.6383 285.828 79.3401 285.503 78.9876L284.336 77.7947C283.469 76.8729 282.438 75.8969 281.299 74.8396L280.865 74.4058C278.993 72.6435 276.769 70.6915 274.22 68.6039C273.325 67.8448 272.348 67.0585 271.345 66.2723C255.768 54.176 238.123 45.0082 219.269 39.215H218.943C208.324 35.9621 197.429 33.6844 186.396 32.41H186.26C180.836 31.7864 174.896 31.3526 168.874 31.1628C87.0988 28.9397 0.712463 48.8938 0.712463 48.8938L5.81158 43.2004L7.46605 41.3839L8.08989 40.7061L12.8364 35.582L14.4095 33.8469L17.9084 29.997L18.9662 28.8041L24.011 23.192L25.0417 22.0533L32.4734 13.9199C32.4734 13.9199 122.576 -5.05824 192.119 1.99077C261.662 9.03978 287.917 54.4246 289.191 83.1628Z"
                fill="url(#paint0_linear_906_3335)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3335"
                  x1="228.626"
                  y1="40.2181"
                  x2="-0.126751"
                  y2="61.2469"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="0.04" stop-color="#DCDCDC" />
                  <stop offset="0.37" stop-color="#F6F6F6" />
                  <stop offset="0.56" stop-color="white" />
                  <stop offset="0.7" stop-color="#FBFBFB" />
                  <stop offset="0.85" stop-color="#EEEEEE" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector103"
              width="291"
              height="52"
              viewBox="0 0 291 52"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 51.3336C0 51.3336 89.2071 19.0438 147.142 5.86756C205.076 -7.30866 254.331 5.21688 279.42 26.4452L290.079 36.2054C268.664 18.8289 242.768 7.86036 215.383 4.56618C169.654 -0.856136 104.64 18.5829 75.6728 27.367C46.7056 36.1512 0 51.3336 0 51.3336Z"
                fill="url(#paint0_linear_906_3336)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3336"
                  x1="20.2065"
                  y1="28.5328"
                  x2="254.006"
                  y2="20.3112"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#ECEBE9" />
                  <stop offset="1" stop-color="#C2C2C2" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector104"
              width="281"
              height="30"
              viewBox="0 0 281 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.25293 28.1305C0.25293 28.1305 50.7286 0.422461 127.107 0.070011C203.485 -0.28244 280.703 29.3777 280.703 29.3777C280.703 29.3777 199.525 7.2546 129.276 7.93239C72.9693 8.50174 0.25293 28.1305 0.25293 28.1305Z"
                fill="url(#paint0_linear_906_3337)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3337"
                  x1="-0.370896"
                  y1="21.8406"
                  x2="280.893"
                  y2="11.9367"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#131112" />
                  <stop offset="1" stop-color="#B5B5B5" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector105"
              width="217"
              height="267"
              viewBox="0 0 217 267"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.926025 241.193V240.841C0.926025 240.109 16.8471 167.639 80.0706 106.503C143.294 45.3661 200.062 0.632027 200.74 0.198242L215.332 6.1899L216.607 7.65393C215.712 8.44016 125.501 86.7655 71.2828 145.327C17.4439 203.454 7.27277 265.539 7.1914 266.163L0.926025 241.193Z"
                fill="url(#paint0_linear_906_3338)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3338"
                  x1="-22.7794"
                  y1="209.31"
                  x2="240.661"
                  y2="50.9626"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector106"
              width="214"
              height="267"
              viewBox="0 0 214 267"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M5.19143 266.163C5.19143 266.163 12.9214 203.237 67.8724 144.025C122.823 84.8135 213.36 6.1899 213.36 6.1899L198.767 0.198242C198.767 0.198242 141.809 45.2306 78.1791 106.584C14.5488 167.938 0.906006 241.193 0.906006 241.193L5.19143 266.163Z"
                fill="url(#paint0_linear_906_3339)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3339"
                  x1="-24.7794"
                  y1="209.31"
                  x2="238.363"
                  y2="51.1253"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D1D1D1" />
                  <stop offset="0.02" stop-color="#D3D3D3" />
                  <stop offset="0.21" stop-color="#E1E0DF" />
                  <stop offset="0.44" stop-color="#E9E9E7" />
                  <stop offset="0.82" stop-color="#ECEBE9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector107"
              width="158"
              height="297"
              viewBox="0 0 158 297"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M57.4336 141.247C21.9298 217.566 2.72674 269.729 4.19138 296.163V289.493L2.97086 282.092L0.828125 256.661C0.828125 256.661 29.497 155.454 53.989 107.547C77.3147 61.756 128.577 7.37016 133.323 2.38163L133.513 2.19185L133.676 2.00207L156.107 0.0771484L157.544 1.37851C156.839 2.24608 85.8584 80.463 57.4336 141.247Z"
                fill="url(#paint0_linear_906_3340)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3340"
                  x1="-40.8326"
                  y1="214.936"
                  x2="197.823"
                  y2="71.4826"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector108"
              width="157"
              height="297"
              viewBox="0 0 157 297"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M156.107 0.0771484C156.107 0.0771484 84.448 78.7007 55.752 140.352C28.8733 198.073 5.79168 256.498 4.21856 289.466C4.08285 291.669 4.08285 293.878 4.21856 296.081L2.99804 282.01L0.855347 256.58C0.855347 256.58 29.5242 155.372 54.0162 107.466C77.3418 61.6747 128.604 7.28883 133.351 2.3003L133.54 2.11052L133.703 1.92074L156.107 0.0771484Z"
                fill="url(#paint0_linear_906_3341)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3341"
                  x1="-40.8325"
                  y1="214.936"
                  x2="197.362"
                  y2="71.7538"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#B0B0B0" />
                  <stop offset="0.1" stop-color="#C3C3C2" />
                  <stop offset="0.22" stop-color="#D6D5D4" />
                  <stop offset="0.37" stop-color="#E2E2E0" />
                  <stop offset="0.57" stop-color="#EAE9E7" />
                  <stop offset="1" stop-color="#ECEBE9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector109"
              width="132"
              height="303"
              viewBox="0 0 132 303"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.132385 260.736C7.71775 218.539 19.1386 177.122 34.253 136.999C58.6636 72.7989 98.4799 11.4997 98.8868 10.8761L130.214 0.655029L131.868 1.68526C131.163 2.79684 62.2166 114.036 43.2035 165.819C39.9487 174.657 36.7754 182.872 33.7105 190.789C18.9014 229.07 5.31283 259.489 9.29989 302.244L0.132385 260.736Z"
                fill="url(#paint0_linear_906_3342)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3342"
                  x1="-40.6604"
                  y1="213.4"
                  x2="178.39"
                  y2="81.7465"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector110"
              width="131"
              height="303"
              viewBox="0 0 131 303"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M41.3863 165.087C22.0476 217.656 4.47204 250.271 9.19142 302.163L7.04873 292.402L0.132385 260.736C7.67096 218.528 19.093 177.107 34.253 136.999C58.989 72.2294 98.9953 10.8759 98.9953 10.8759L125.82 2.06461L130.322 0.573486C130.322 0.573486 60.6978 112.517 41.3863 165.087Z"
                fill="url(#paint0_linear_906_3343)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3343"
                  x1="-40.6876"
                  y1="213.399"
                  x2="177.63"
                  y2="82.1803"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D1D1D1" />
                  <stop offset="0.11" stop-color="#D5D5D5" />
                  <stop offset="0.62" stop-color="#E6E5E4" />
                  <stop offset="1" stop-color="#ECEBE9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector111"
              width="258"
              height="110"
              viewBox="0 0 258 110"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.337769 39.8113L37.035 14.3536C37.035 14.3536 83.7135 -0.693355 130.69 0.797781C189.601 2.7227 208.913 15.2754 208.913 15.2754L257.191 109.109C257.191 109.109 233.079 44.3932 179.294 32.681C118.485 19.2607 0.337769 39.8113 0.337769 39.8113Z"
                fill="url(#paint0_linear_906_3344)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3344"
                  x1="243.955"
                  y1="64.5913"
                  x2="39.2438"
                  y2="8.77951"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#858585" />
                  <stop offset="0.09" stop-color="#C4C4C4" />
                  <stop offset="0.42" stop-color="#ECEBE9" />
                  <stop offset="0.89" stop-color="#F4F4F4" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector112"
              width="45"
              height="314"
              viewBox="0 0 45 314"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M44.1914 313.163L42.4285 306.52L41.0181 301.315L32.176 270.869C32.176 270.869 24.0391 169.607 20.0792 138.022C16.1735 107.603 0.4151 20.0595 0.4151 20.0595L4.89036 3.57566L7.84678 0.864502C7.84678 0.864502 27.7821 83.5277 35.1324 165.025C39.4721 213.311 41.8588 256.31 43.0794 283.367C43.8931 302.101 44.1914 313.163 44.1914 313.163Z"
                fill="url(#paint0_linear_906_3345)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3345"
                  x1="9.01304"
                  y1="-3.66313"
                  x2="35.3818"
                  y2="286.541"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#ECEBE9" />
                  <stop offset="1" stop-color="#D1D1D1" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector113"
              width="41"
              height="314"
              viewBox="0 0 41 314"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M39.0794 283.503L40.1914 313.163L37.0181 301.315C34.8482 257.259 29.0168 152.499 21.5309 107.684C14.1535 63.6278 4.85032 21.1439 0.890381 3.68406L3.84681 0.9729C3.84681 0.9729 23.7821 83.6361 31.1324 165.133C35.4721 213.446 37.7775 256.445 39.0794 283.503Z"
                fill="url(#paint0_linear_906_3346)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3346"
                  x1="110.955"
                  y1="185.44"
                  x2="-44.5827"
                  y2="135.788"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#D9D9D9" />
                  <stop offset="0.64" stop-color="#F1F1F1" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="group9"
              width="284"
              height="74"
              viewBox="0 0 284 74"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g style="mix-blend-mode: multiply">
                <path
                  d="M282.51 73.5933C282.184 72.9427 281.832 72.292 281.452 71.6413C281.072 70.9906 280.611 70.584 280.069 70.4213L279.255 68.6319C278.713 67.4932 278.17 66.4088 277.628 65.3243C276.272 62.6132 274.915 60.1189 273.315 57.6517C271.715 55.1846 269.816 52.2294 267.891 49.5183C251.427 27.4765 226.989 13.8937 190.048 5.05528C162.925 -1.39727 116.382 1.63924 82.0175 5.32642C54.0538 8.3358 29.4805 12.2127 18.8483 13.975L19.879 12.8363C31.0807 10.9656 54.9217 7.25134 81.9361 4.3504C116.382 0.663225 163.115 -2.34617 190.428 4.1335C233.309 14.3546 259.428 31.0282 275.865 59.7393C276.76 61.2576 277.601 62.8572 278.577 64.4568C279.608 66.463 280.584 68.5235 281.533 70.6382C281.696 71.0449 281.886 71.4244 282.022 71.8311C282.23 72.405 282.393 72.9942 282.51 73.5933Z"
                  fill="url(#paint0_linear_906_3347)"
                />
                <path
                  d="M278.17 68.8489C276.733 67.6018 275.458 66.4089 273.912 65.2431L273.315 64.728L272.095 63.1826C271.145 61.9084 270.142 60.6884 269.138 59.5226C266.204 56.0534 263.032 52.7922 259.645 49.7624C239.167 31.3537 212.641 23.0575 179.795 17.4183C158.341 13.704 131.734 13.5684 105.56 15.0324C72.802 17.1285 40.1803 20.9839 7.8364 26.582L9.40953 24.8469C33.0336 20.8344 90.1814 12.1586 139.762 12.7551C153.288 12.7783 166.791 13.857 180.148 15.9814C232.387 24.9553 258.425 41.2493 275.078 64.2128C275.376 64.5924 275.621 64.9449 275.892 65.3244C276.597 66.4902 277.411 67.656 278.17 68.8489Z"
                  fill="url(#paint1_linear_906_3347)"
                />
                <path
                  d="M282.51 73.5934C282.51 73.5934 281.832 72.2921 281.452 71.6414C281.072 70.9907 280.774 70.4214 280.421 69.8249C279.526 68.3067 278.577 66.7884 277.709 65.3244C261.869 41.2493 237.187 25.3077 200.436 15.168C192.923 13.1075 184.922 11.291 176.351 9.74564C129.564 0.961493 40.8721 15.8186 12.8541 20.9698L13.9119 19.7769C43.2589 14.3546 130.242 0.093915 176.649 8.93229C187.23 10.8634 197.69 13.4072 207.976 16.5507C237.459 25.6873 258.696 38.9991 273.505 57.8416C275.268 60.0919 276.95 62.4234 278.55 64.8092C280.15 67.1951 282.049 70.3943 283.622 73.3494C283.693 73.4811 283.756 73.6169 283.812 73.7561L282.51 73.5934Z"
                  fill="url(#paint2_linear_906_3347)"
                />
                <path
                  d="M279.364 69.8789L278.17 68.8487C276.733 67.6015 275.458 66.4086 273.912 65.2428C273.315 64.5379 272.718 63.8602 272.095 63.1824C270.25 61.0948 268.297 59.1156 266.263 57.1907C253.38 45.2345 236.428 36.5588 214.296 30.3231H213.97C203.263 27.4249 192.395 25.1528 181.423 23.5181H181.287C174.669 22.4879 167.726 21.5932 160.267 20.807C102.604 14.6526 30.701 27.9373 0.947188 34.3628H0.648834L2.52032 32.465C33.4404 25.9311 103.689 13.2971 160.348 19.343C206.294 24.2502 237.811 33.4681 259.645 49.8706C265.3 54.0726 270.444 58.9225 274.97 64.3211C275.404 64.8362 275.81 65.3242 276.217 65.8664C277.302 67.0864 278.387 68.4691 279.364 69.8789Z"
                  fill="url(#paint3_linear_906_3347)"
                />
              </g>
              <defs>
                <linearGradient
                  id="paint0_linear_906_3347"
                  x1="18.8754"
                  y1="37.1283"
                  x2="282.51"
                  y2="37.1283"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint1_linear_906_3347"
                  x1="7.70078"
                  y1="40.7885"
                  x2="278.17"
                  y2="40.7885"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint2_linear_906_3347"
                  x1="12.7728"
                  y1="39.8937"
                  x2="283.649"
                  y2="39.8937"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint3_linear_906_3347"
                  x1="0.567466"
                  y1="43.7705"
                  x2="279.364"
                  y2="43.7705"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="group10"
              width="302"
              height="57"
              viewBox="0 0 302 57"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g style="mix-blend-mode: multiply">
                <path
                  d="M263.147 18.0763C229.297 10.5935 170.034 -0.25118 120.724 2.35153C78.5415 4.88977 37.7889 18.5775 2.63149 42.0158L1.92627 41.826L0.787109 41.5007C36.3887 17.4682 77.789 3.42412 120.67 0.83329C169.03 -1.7152 226.965 8.61432 261.248 16.0971L263.147 18.0763Z"
                  fill="url(#paint0_linear_906_3352)"
                />
                <path
                  d="M269.548 24.3932C223.78 15.2243 177.312 9.98175 130.651 8.72266H125.905C63.3596 8.72266 21.509 32.6622 6.2388 43.073L4.42157 42.585C19.3392 32.2013 63.7122 6.01152 130.679 7.33999C176.654 8.57216 222.444 13.6599 267.568 22.5496L269.548 24.3932Z"
                  fill="url(#paint1_linear_906_3352)"
                />
                <path
                  d="M278.58 33.3402C256.393 26.0743 216.061 15.9888 158.669 13.6843C83.9458 10.702 29.0491 35.1566 11.1751 44.4017L9.14093 43.8323C25.6316 35.1024 81.776 9.15664 158.724 12.2474C214 14.4434 253.518 23.8782 276.301 31.0628L278.58 33.3402Z"
                  fill="url(#paint2_linear_906_3352)"
                />
                <path
                  d="M295.83 50.4203C275.596 46.3536 213.512 34.9125 151.753 34.1534C109.971 33.9049 68.3055 38.5638 27.6116 48.0345L23.8144 47.8989L22.9194 47.655C65.1162 37.5138 108.381 32.4891 151.78 32.6894C211.613 33.4485 271.69 44.1576 293.931 48.5496L295.83 50.4203Z"
                  fill="url(#paint3_linear_906_3352)"
                />
                <path
                  d="M301.634 56.1951C259.386 47.0849 216.363 42.0283 173.153 41.094C133.65 40.1254 94.1399 42.757 55.1142 48.9563L47.6826 48.7123C89.1337 41.6502 131.171 38.6085 173.207 39.6299C215.735 40.611 258.081 45.5119 299.708 54.2702L301.634 56.1951Z"
                  fill="url(#paint4_linear_906_3352)"
                />
              </g>
              <defs>
                <linearGradient
                  id="paint0_linear_906_3352"
                  x1="0.787109"
                  y1="21.2483"
                  x2="263.147"
                  y2="21.2483"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
                <linearGradient
                  id="paint1_linear_906_3352"
                  x1="4.42157"
                  y1="25.1252"
                  x2="269.548"
                  y2="25.1252"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
                <linearGradient
                  id="paint2_linear_906_3352"
                  x1="9.14093"
                  y1="28.189"
                  x2="278.58"
                  y2="28.189"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
                <linearGradient
                  id="paint3_linear_906_3352"
                  x1="22.9194"
                  y1="41.5277"
                  x2="295.83"
                  y2="41.5277"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
                <linearGradient
                  id="paint4_linear_906_3352"
                  x1="47.6826"
                  y1="47.7905"
                  x2="301.634"
                  y2="47.7905"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector123"
              width="292"
              height="54"
              viewBox="0 0 292 54"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                style="mix-blend-mode: multiply"
                d="M0.435211 53.2212C23.5895 41.4488 47.4908 31.2058 71.9854 22.5581C84.2449 18.2202 96.6672 14.3884 109.252 11.0627C121.818 7.68923 134.569 5.04595 147.441 3.14616C160.34 1.24522 173.388 0.546338 186.417 1.05856C189.671 1.24834 192.926 1.51949 196.181 1.89906C199.436 2.27862 202.663 2.76663 205.837 3.47153C209.01 4.17643 212.211 4.74576 215.411 5.45066L224.85 7.91783C237.404 11.3859 249.552 16.1847 261.086 22.2327C272.396 28.5768 283.435 36.0054 291.518 46.2265C283.191 36.2223 272.044 29.092 260.652 23.0732C249.105 17.2257 236.967 12.6268 224.443 9.35474L215.031 7.02314C211.885 6.34535 208.685 5.77598 205.538 5.1253C202.392 4.47462 199.165 4.06795 195.964 3.60706C192.764 3.14616 189.563 3.01062 186.335 2.82084C173.42 2.36906 160.491 3.11327 147.712 5.04397C122.106 9.06079 96.921 15.4134 72.4736 24.0221C60.214 28.1973 48.072 32.7158 36.0475 37.5779C24.0321 42.4308 12.1252 47.582 0.435211 53.2212Z"
                fill="url(#paint0_linear_906_3358)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3358"
                  x1="-0.731072"
                  y1="31.776"
                  x2="291.463"
                  y2="21.4921"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector124"
              width="279"
              height="36"
              viewBox="0 0 279 36"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M1.86793 34.3306C4.82432 33.4359 13.8834 30.7518 26.9023 27.2273C65.9864 16.7623 140.818 -0.914481 195.742 0.576656C227.937 1.44423 259.725 14.1325 278.142 22.9166L275.782 23.3775C257.284 14.6747 226.689 2.85402 195.715 2.01357C153.485 0.87488 99.3204 11.1231 58.8531 20.6663C46.8919 23.3775 36.1241 26.2513 27.2549 28.6371H27.0922C15.9718 31.6194 7.7807 34.0594 3.82076 35.171H2.7901H0.94574L1.86793 34.3306Z"
                fill="url(#paint0_linear_906_3359)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3359"
                  x1="0.999986"
                  y1="17.9009"
                  x2="278.196"
                  y2="17.9009"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#DDDDDD" />
                  <stop offset="1" stop-color="#F1F1F1" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector125"
              width="266"
              height="26"
              viewBox="0 0 266 26"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 25.3338H1.84436C8.02837 23.4631 16.1924 21.1587 26.2549 18.7457H26.4177C53.3495 12.3077 80.7471 8.00168 108.356 5.86774L116.493 5.24418C179.77 0.336988 213.864 -2.34709 261.546 15.2483L265.262 15.0857C215.6 -3.89245 181.181 -1.18126 116.357 3.80727L108.22 4.45792C89.6953 5.86773 72.9605 8.11801 57.9887 10.6665C45.9733 12.7541 35.2326 15.0043 26.038 17.2275C15.894 19.6675 7.54014 22.0262 1.27476 23.9512L1.00353 24.3307L0 25.3338Z"
                fill="url(#paint0_linear_906_3360)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3360"
                  x1="0"
                  y1="12.727"
                  x2="265.235"
                  y2="12.727"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#DDDDDD" />
                  <stop offset="1" stop-color="#F1F1F1" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector126"
              width="292"
              height="50"
              viewBox="0 0 292 50"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M291.322 49.0334L289.803 49.3316C282.019 37.8092 258.395 13.4901 194.494 4.08241C128.07 -5.73198 49.8473 28.4828 12.2549 44.7498C7.60789 46.7922 3.71123 48.4731 0.564972 49.7925L2.57208 47.3796C5.28437 46.2409 8.32211 44.8853 11.6853 43.4213C49.3862 26.9646 127.88 -7.30449 194.711 2.56413C259.805 12.243 283.619 37.3754 291.322 49.0334Z"
                fill="url(#paint0_linear_906_3361)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3361"
                  x1="0.564972"
                  y1="25.3921"
                  x2="291.322"
                  y2="25.3921"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#DDDDDD" />
                  <stop offset="1" stop-color="#F1F1F1" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector127"
              width="180"
              height="74"
              viewBox="0 0 180 74"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.5224 4.61527C21.7054 3.20547 80.5891 -5.52446 118.887 10.0376C156.452 25.1387 175.845 55.9104 179.452 73.8582C173.932 62.4687 166.957 51.8427 158.703 42.2461C147.874 30.2905 134.487 20.9307 119.538 14.8634C73.6728 -4.92801 0.5224 4.61527 0.5224 4.61527Z"
                fill="url(#paint0_linear_906_3362)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3362"
                  x1="0.5224"
                  y1="37.3118"
                  x2="179.452"
                  y2="37.3118"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#B5B5B5" />
                  <stop offset="1" stop-color="#131112" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector128"
              width="176"
              height="249"
              viewBox="0 0 176 249"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M175.208 248.951C170.76 240.384 131.567 187.923 87.8722 127.247C57.4403 85.0074 24.703 37.3724 0.53656 3.67267L0.943387 0.961509L24.8929 0.771729C24.8929 0.771729 56.7623 36.5319 109.462 123.208C129.427 156.092 147.476 190.101 163.518 225.066C168.943 236.642 174.15 246.348 175.208 248.978V248.951Z"
                fill="url(#paint0_linear_906_3363)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3363"
                  x1="13.3386"
                  y1="1.91041"
                  x2="176.745"
                  y2="232.016"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#D9D9D9" />
                  <stop offset="0.42" stop-color="#E6E6E6" />
                  <stop offset="1" stop-color="#F4F4F4" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector129"
              width="177"
              height="254"
              viewBox="0 0 177 254"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M176.835 253.75C172.143 242.526 0.943359 0.934409 0.943359 0.934409L24.8929 0.744629C24.8929 0.744629 37.7491 13.8937 70.0253 59.9834C82.4747 77.7415 96.4431 98.8343 111.252 123.181C131.943 157.281 150.574 192.589 167.044 228.916C172.713 241.468 176.564 253.126 176.835 253.75Z"
                fill="url(#paint0_linear_906_3364)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3364"
                  x1="30.9684"
                  y1="10.071"
                  x2="161.587"
                  y2="265.506"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#F4F4F4" />
                  <stop offset="0.39" stop-color="#E2E2E2" />
                  <stop offset="0.71" stop-color="#D9D9D9" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector130"
              width="101"
              height="295"
              viewBox="0 0 101 295"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M59.1781 204.417C40.9786 154.857 0.511292 1.64982 0.511292 1.64982L2.49125 0.185791L17.9242 6.58412C18.4124 8.37349 49.2239 116.847 73.4989 201.191C86.0839 244.895 98.3164 283.014 100.785 294.617C100.785 294.617 67.7218 227.652 59.1781 204.417Z"
                fill="url(#paint0_linear_906_3365)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3365"
                  x1="5.90875"
                  y1="-2.06447"
                  x2="82.4451"
                  y2="254.889"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#F4F4F4" />
                  <stop offset="0.58" stop-color="#E6E6E6" />
                  <stop offset="1" stop-color="#D9D9D9" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector131"
              width="99"
              height="294"
              viewBox="0 0 99 294"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M98.649 293.831H97.8353C97.8353 293.831 66.7525 226.893 58.6427 203.848C41.04 153.8 0.464172 0.0771484 0.464172 0.0771484L15.9242 6.5026C15.9242 6.5026 47.0341 116.169 71.499 201.109C83.9212 244.298 96.2079 282.282 98.649 293.831Z"
                fill="url(#paint0_linear_906_3366)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3366"
                  x1="4.83096"
                  y1="-2.39001"
                  x2="81.1776"
                  y2="253.967"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.18" stop-color="#ECEBE9" />
                  <stop offset="1" stop-color="#D1D1D1" />
                </linearGradient>
              </defs>
            </svg>

            <svg
              class="vector132"
              width="257"
              height="21"
              viewBox="0 0 257 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.561432 20.7915C15.0993 20.2492 115.834 3.5214 161.292 1.1627C187.628 -0.192881 238.158 2.24715 256.845 11.194L0.561432 20.7915Z"
                fill="url(#paint0_linear_906_3367)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_906_3367"
                  x1="230.482"
                  y1="-34.3534"
                  x2="-179.223"
                  y2="168.442"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#131112" />
                  <stop offset="1" stop-color="#B5B5B5" />
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="frame7">
      <div class="mask-group2">
        <svg class="group11" width="1920" height="610"></svg>
      </div>
      <div class="sliderbox">
        <div class="rectangle-42"></div>
        <div class="rectangle-41"></div>
        <div class="delve-into-the-founder-s-thoughts-via-the-video">
          Delve into the founder&#039;s<br />thoughts via the<br />video !
        </div>
        <div
          class="amet-minim-mollit-non-deserunt-ullamco-est-sit-aliqua-dolor-do-amet-sint-velit-officia-consequat-duis-enim-velit-mollit-exercitation-veniam-consequat"
        >
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
          sint. Velit officia consequat duis enim velit mollit. Exercitation
          veniam consequat.
        </div>
        <div class="ellipse-9"></div>
        <div class="ellipse-10"></div>
        <div class="ellipse-11"></div>
      </div>
    </div>
    <div class="video-box">
      <div class="rectangle-43"></div>
      <div class="rectangle-39"></div>
      <img class="fi-fc-28-s-a-od-i-hd-1" src="fi-fc-28-s-a-od-i-hd-1.png" />
      <div class="rectangle-40"></div>
      <svg
        class="group-4"
        width="132"
        height="132"
        viewBox="0 0 132 132"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <rect
          x="16.3796"
          y="17.343"
          width="98.2774"
          height="98.2774"
          rx="49.1387"
          fill="black"
          fill-opacity="0.71"
        />
        <rect
          x="0.5"
          y="0.5"
          width="131"
          height="131"
          rx="65.5"
          stroke="white"
          stroke-opacity="0.36"
        />
        <path
          d="M76.9708 64.268C78.3041 65.0378 78.3041 66.9623 76.9708 67.7322L62.0146 76.3671C60.6813 77.1369 59.0146 76.1747 59.0146 74.6351V57.3651C59.0146 55.8255 60.6813 54.8633 62.0146 55.6331L76.9708 64.268Z"
          fill="#F16126"
        />
      </svg>
    </div>
    <div class="group-24">
      <div class="why-choose-devalaya-e-learn">
        Why choose <br />Devalaya e-Learn?
      </div>
    </div>
  </div>
  <div class="online-courses-sec">
    <div class="mask-group3">
      <div class="rectangle-26"></div>
      <div class="frame8">
        <div class="group3">
          <div class="layer-12">
            <svg
              class="group-212"
              width="886"
              height="57"
              viewBox="0 0 886 57"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g opacity="0.2">
                <path
                  opacity="0.06"
                  d="M65.0828 2.23997C65.0828 2.23997 -29.5167 44.2679 14.8781 47.0878C23.2841 47.1689 869.528 54.1444 875.546 54.2025C900.668 54.4451 845.871 20.8382 835.114 16.9483C824.357 13.0584 518.727 5.72353 444.22 5.00412C369.712 4.2847 65.0828 2.23997 65.0828 2.23997Z"
                  fill="#F5F5F5"
                />
                <path
                  opacity="0.13"
                  d="M63.5452 3.22158C63.5452 3.22158 -25.495 43.3106 16.5147 45.8085C24.9206 45.8897 866.674 52.9214 873.074 52.9832C896.955 53.2138 845.864 21.6353 835.202 17.7463C824.54 13.8574 519.395 5.82978 444.888 5.11037C370.38 4.39095 63.5452 3.22158 63.5452 3.22158Z"
                  fill="#EBEBEB"
                />
                <path
                  opacity="0.19"
                  d="M62.0976 4.70192C62.0976 4.70192 -21.4765 42.6518 18.147 44.9274C26.553 45.0085 864.676 52.1049 870.694 52.163C893.237 52.3807 845.853 22.731 835.095 18.9407C824.336 15.1505 519.967 5.93479 445.46 5.21537C370.952 4.49596 62.0976 4.70192 62.0976 4.70192Z"
                  fill="#E1E1E1"
                />
                <path
                  opacity="0.25"
                  d="M60.6534 5.88374C60.6534 5.88374 -17.3603 41.7949 19.8771 43.8482C28.2831 43.9294 862.202 51.0847 868.22 51.1428C889.521 51.3485 845.844 23.7272 835.085 19.9369C824.327 16.1467 520.435 6.93562 446.023 6.21713C371.611 5.49863 60.6534 5.88374 60.6534 5.88374Z"
                  fill="#D7D7D7"
                />
                <path
                  opacity="0.31"
                  d="M59.2089 7.06533C59.2089 7.06533 -13.3397 40.9371 21.5116 42.768C29.9175 42.8492 859.824 49.9658 865.842 50.0239C885.806 50.2167 845.834 24.7235 835.076 20.9332C824.317 17.143 521.103 7.04179 446.595 6.32238C372.088 5.60296 59.2089 7.06533 59.2089 7.06533Z"
                  fill="#CDCDCD"
                />
                <path
                  opacity="0.38"
                  d="M57.7647 8.24684C57.7647 8.24684 -9.41452 40.0782 23.1461 41.6878C31.5521 41.7689 857.351 48.9456 863.751 49.0074C882.855 49.1919 846.207 25.7233 835.354 21.8325C824.501 17.9417 521.67 7.64496 447.163 6.92555C372.655 6.20613 57.7647 8.24684 57.7647 8.24684Z"
                  fill="#C3C3C3"
                />
                <path
                  opacity="0.44"
                  d="M56.2246 9.42767C56.2246 9.42767 -5.20307 39.2222 24.8759 40.6085C33.2819 40.6897 854.972 47.9263 860.894 47.9835C878.47 48.1532 845.815 26.7159 835.057 22.826C824.3 18.9361 522.243 7.65051 447.831 6.93202C373.419 6.21352 56.2246 9.42767 56.2246 9.42767Z"
                  fill="#B9B9B9"
                />
                <path
                  opacity="0.5"
                  d="M54.7804 10.6093C54.7804 10.6093 -1.08588 38.2656 26.5105 39.5284C34.9164 39.6095 852.498 46.906 858.516 46.9641C874.755 47.1209 845.805 27.7122 835.048 23.8223C824.29 19.9324 522.912 7.65699 448.405 6.93757C373.897 6.21816 54.7804 10.6093 54.7804 10.6093Z"
                  fill="#B0B0B0"
                />
                <path
                  opacity="0.56"
                  d="M53.3358 11.7908C53.3358 11.7908 2.93553 37.3082 28.1448 38.4483C36.5507 38.5295 849.643 45.7825 856.043 45.8443C871.04 45.9891 845.796 28.6087 835.038 24.8184C824.28 21.0282 523.478 8.35993 448.971 7.64051C374.463 6.9211 53.3358 11.7908 53.3358 11.7908Z"
                  fill="#A6A6A6"
                />
                <path
                  opacity="0.63"
                  d="M51.8906 13.0722C51.8906 13.0722 6.95535 36.55 29.7785 37.4678C38.2799 37.5499 847.646 44.8666 853.664 44.9247C867.323 45.0566 845.786 29.7046 834.741 25.9116C823.696 22.1186 523.761 8.76117 449.349 8.04267C374.937 7.32418 51.8906 13.0722 51.8906 13.0722Z"
                  fill="#9C9C9C"
                />
                <path
                  opacity="0.69"
                  d="M50.5428 14.1551C50.5428 14.1551 11.2645 35.4957 31.7005 36.2908C40.1065 36.372 845.36 44.1472 851.378 44.2053C863.796 44.3252 845.964 31.0016 835.206 27.2113C824.448 23.4211 524.806 9.36902 450.394 8.65053C375.982 7.93204 50.5428 14.1551 50.5428 14.1551Z"
                  fill="#929292"
                />
                <path
                  opacity="0.75"
                  d="M48.9064 15.4346C48.9064 15.4346 15.0901 35.0345 33.1439 35.2088C41.5498 35.29 842.791 43.0265 848.809 43.0846C859.89 43.1916 845.765 31.8964 835.007 28.0065C824.25 24.1166 525.282 9.57296 450.774 8.85354C376.267 8.13413 48.9064 15.4346 48.9064 15.4346Z"
                  fill="#888888"
                />
                <path
                  opacity="0.81"
                  d="M47.4618 16.6162C47.4618 16.6162 19.2109 33.6794 34.7782 34.1286C43.1841 34.2098 840.318 41.9066 846.718 41.9684C856.27 42.0606 846.138 32.7966 835.381 28.9067C824.623 25.0168 526.235 9.78142 451.823 9.06292C377.411 8.34443 47.4618 16.6162 47.4618 16.6162Z"
                  fill="#7E7E7E"
                />
                <path
                  opacity="0.88"
                  d="M46.0174 17.7978C46.0174 17.7978 23.2324 32.7219 36.317 33.0475C44.723 33.1287 837.75 40.7858 843.768 40.8439C852.269 40.926 845.556 33.6876 834.32 29.8927C823.084 26.0979 525.754 10.0757 451.343 9.35718C376.931 8.63868 46.0174 17.7978 46.0174 17.7978Z"
                  fill="#747474"
                />
                <path
                  opacity="0.94"
                  d="M44.5733 18.9795C44.5733 18.9795 27.3497 31.7653 38.1428 31.9691C46.5487 32.0503 835.468 39.6678 841.486 39.7259C847.504 39.784 845.739 34.5861 834.98 30.7959C824.222 27.0056 527.09 10.2877 453.06 9.57287C379.03 8.85807 44.5733 18.9795 44.5733 18.9795Z"
                  fill="#6A6A6A"
                />
                <path
                  d="M43.0333 20.1601C43.0333 20.1601 31.3712 30.8078 39.7771 30.889L839.108 38.607C845.031 38.6642 845.73 35.4827 834.972 31.6924C824.213 27.9022 527.66 10.5921 453.057 9.87173C378.454 9.15139 43.0333 20.1601 43.0333 20.1601Z"
                  fill="#606060"
                />
              </g>
            </svg>

            <div class="clip-path-group2">
              <svg
                class="clip-path2"
                width="820.7035522460938"
                height="223.76287841796875"
              ></svg>

              <svg
                class="group12"
                width="785"
                height="201"
                viewBox="0 0 785 201"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M360.332 186.249L0.21176 192.735C0.21176 192.735 22.5211 147.917 32.0935 145.917L385.526 149.33C385.339 151.111 384.732 152.816 383.759 154.294C379.206 160.826 374.838 167.957 360.332 186.249Z"
                  fill="url(#paint0_linear_906_3418)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  d="M7.96526 181.253C7.86491 181.252 7.76564 181.23 7.67332 181.189C7.58099 181.148 7.4973 181.089 7.42706 181.014C7.35681 180.939 7.30144 180.851 7.26397 180.754C7.2265 180.657 7.20775 180.553 7.20876 180.448C7.20918 180.253 7.27827 180.065 7.40294 179.919C7.5276 179.773 7.6991 179.68 7.88504 179.658C11.3238 179.691 347.939 173.675 363.881 174.826C364.092 174.852 364.286 174.959 364.425 175.126C364.565 175.293 364.64 175.508 364.637 175.73C364.612 175.923 364.519 176.1 364.377 176.227C364.235 176.355 364.053 176.423 363.866 176.42C347.829 175.169 11.3095 181.185 7.96526 181.253Z"
                  fill="url(#paint1_linear_906_3418)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  d="M11.3661 175.308C11.3661 175.308 10.6975 175.301 10.7023 174.803C10.5952 174.661 10.5378 174.484 10.5395 174.303C10.5412 174.122 10.602 173.947 10.7119 173.807C13.8719 173.04 105.024 171.43 184.896 170.607C225.024 170.097 356.869 168.88 367.644 170.976C367.79 171.034 367.915 171.138 368.003 171.272C368.09 171.406 368.137 171.566 368.135 171.728C368.133 171.891 368.084 172.049 367.994 172.182C367.904 172.315 367.776 172.415 367.63 172.471C360.478 171.106 292.27 170.946 185.264 172.105C97.0796 173.047 14.143 174.637 11.3661 175.308Z"
                  fill="url(#paint2_linear_906_3418)"
                />
                <path
                  d="M422.704 187.25L782.449 199.79C782.449 199.79 767.771 156.707 758.239 154.522L396.896 149.14C397.412 150.276 398.042 151.351 398.776 152.347C403.58 159.367 408.554 168.681 422.704 187.25Z"
                  fill="url(#paint3_linear_906_3418)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  d="M776.542 188.275C773.103 188.242 709.693 185.936 424.602 178.7L417.055 178.627C416.878 178.625 416.709 178.55 416.585 178.418C416.46 178.286 416.392 178.108 416.394 177.923C416.394 177.728 416.463 177.54 416.588 177.394C416.712 177.248 416.884 177.155 417.07 177.133L424.712 177.206C709.421 184.439 773.216 186.45 776.652 186.782C776.652 186.782 777.416 186.789 777.312 187.685C777.267 187.86 777.166 188.013 777.026 188.121C776.886 188.228 776.715 188.282 776.542 188.275Z"
                  fill="url(#paint4_linear_906_3418)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  d="M768.492 171.061C757.52 169.66 424.654 163.357 408.787 164.3C408.687 164.299 408.587 164.277 408.495 164.236C408.403 164.195 408.319 164.136 408.249 164.061C408.179 163.986 408.123 163.898 408.086 163.801C408.048 163.704 408.03 163.6 408.031 163.495C408.031 163.3 408.1 163.112 408.225 162.966C408.349 162.82 408.521 162.727 408.707 162.705C424.669 161.863 757.63 168.166 768.698 169.568C768.792 169.563 768.886 169.583 768.972 169.625C769.057 169.668 769.131 169.732 769.187 169.811C769.243 169.89 769.28 169.983 769.293 170.081C769.306 170.178 769.296 170.278 769.263 170.371C769.263 170.471 769.243 170.571 769.202 170.662C769.162 170.754 769.103 170.835 769.03 170.9C768.957 170.966 768.871 171.014 768.778 171.042C768.685 171.07 768.588 171.076 768.492 171.061Z"
                  fill="url(#paint5_linear_906_3418)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  d="M770.465 174.567C768.172 174.545 426.628 166.763 417.058 168.464C416.963 168.493 416.863 168.5 416.766 168.484C416.668 168.468 416.575 168.43 416.494 168.372C416.412 168.314 416.344 168.238 416.294 168.149C416.244 168.06 416.213 167.961 416.204 167.858C416.177 167.661 416.221 167.46 416.329 167.295C416.437 167.13 416.6 167.013 416.786 166.967C421.858 166.02 554.625 168.298 595.222 168.69C678.223 170.289 768.386 172.255 770.388 172.673C770.573 172.722 770.734 172.842 770.838 173.009C770.943 173.176 770.983 173.378 770.952 173.575C771.011 173.774 770.993 173.989 770.902 174.174C770.811 174.36 770.654 174.501 770.465 174.567Z"
                  fill="url(#paint6_linear_906_3418)"
                />
                <path
                  d="M33.4008 139.155L23.7919 144.94C23.7919 144.94 344.107 135.181 380.376 158.346C380.931 157.263 381.58 156.235 382.316 155.277C343.564 131.987 71.5297 137.929 33.4008 139.155Z"
                  fill="url(#paint7_linear_906_3418)"
                />
                <path
                  d="M760.235 155.638C760.235 155.638 432.903 140.123 403.279 160.859C400.46 156.049 393.862 146.82 393.862 146.82C490.669 112.783 593.375 100.995 694.928 112.265C720.642 130.348 760.235 155.638 760.235 155.638Z"
                  fill="url(#paint8_linear_906_3418)"
                />
                <path
                  d="M751.744 144.497C751.744 144.497 432.145 129.654 401.025 156.852C398.109 152.141 391.606 143.012 391.606 143.012C487.632 106.196 590.112 91.3511 692.09 99.4847C717.718 116.57 751.744 144.497 751.744 144.497Z"
                  fill="url(#paint9_linear_906_3418)"
                />
                <path
                  d="M750.056 141.292C754.418 144.622 751.358 144.991 751.358 144.991C751.358 144.991 488.79 120.238 400.734 157.347C400.442 156.684 400.097 156.047 399.702 155.444C469.776 120.552 709.406 136.516 750.056 141.292Z"
                  fill="url(#paint10_linear_906_3418)"
                />
                <path
                  d="M750.749 138.708C743.215 137.44 550.669 83.2741 401.586 158.153C397.762 153.544 394.356 148.574 391.412 143.309C422.099 123.638 455.579 109.165 490.605 100.429C558.898 81.8591 658.058 72.156 670.88 69.9882C695.319 93.1175 721.044 114.724 747.922 134.696C750.861 137.016 750.749 138.708 750.749 138.708Z"
                  fill="url(#paint11_linear_906_3418)"
                />
                <path
                  d="M726.388 119.045C729.516 121.566 745.839 132.782 748.493 134.9C692.06 122.4 519.65 90.2476 399.888 155.944L398.945 154.64C428.211 131.409 537.961 83.5498 726.388 119.045Z"
                  fill="url(#paint12_linear_906_3418)"
                />
                <path
                  d="M744.042 121.009L681.765 70.5914C681.765 70.5914 487.789 75.4934 457.769 97.7204C436.35 114.148 415.801 131.777 396.214 150.529L399.893 155.446C399.893 155.446 421.497 134.134 498.766 116.05C584.169 96.4501 733.558 118.516 744.042 121.009Z"
                  fill="url(#paint13_linear_906_3418)"
                />
                <path
                  d="M744.127 122.105C736.963 122.036 516.453 75.0729 399.888 155.944L398.372 154.635C398.372 154.635 499.264 74.309 744.042 121.009C744.148 121.167 744.211 121.353 744.226 121.545C744.241 121.738 744.207 121.931 744.127 122.105Z"
                  fill="url(#paint14_linear_906_3418)"
                />
                <path
                  d="M740.093 114.494C725.161 107.575 533.017 71.1478 399.113 157.033C396.275 154.116 396.756 153.822 396.756 153.822C396.756 153.822 421.837 89.0044 504.403 66.4877C549.13 53.1146 595.45 46.4497 641.968 46.6939L740.878 112.31L740.093 114.494Z"
                  fill="url(#paint15_linear_906_3418)"
                />
                <path
                  d="M504.696 65.7931C549.345 52.576 595.57 46.0776 641.97 46.4948L740.785 112.11C715.932 103.7 532.739 70.2485 398.17 155.728C396.28 153.618 396.377 153.42 396.377 153.42C396.377 153.42 421.843 88.4066 504.696 65.7931Z"
                  fill="url(#paint16_linear_906_3418)"
                />
                <path
                  d="M734.925 95.6141L710.005 84.3143C710.005 84.3143 643.139 83.6687 617.82 84.022C592.501 84.3753 514.696 98.6685 468.6 113.766C442.708 123.859 418.074 137.169 395.231 153.409C395.231 153.409 464.789 112.633 531.676 101.224C591.247 93.2746 651.395 91.1536 711.336 94.8882C719.177 95.6369 727.055 95.8794 734.925 95.6141Z"
                  fill="url(#paint17_linear_906_3418)"
                />
                <path
                  d="M394.228 158.381C460.689 111.896 551.704 84.8783 734.724 96.6086L734.734 95.6124C734.734 95.6124 556.347 78.9451 461.856 119.679C437.257 128.961 413.869 141.421 392.237 156.767L394.228 158.381Z"
                  fill="url(#paint18_linear_906_3418)"
                />
                <path
                  d="M734.831 95.5136C719.7 89.3896 530.81 62.2593 395.236 152.91C392.302 150.092 392.782 149.798 392.782 149.798C392.782 149.798 415.773 83.8646 497.614 57.256C541.819 41.8075 587.901 32.9934 634.476 31.079L735.439 91.833L734.831 95.5136Z"
                  fill="url(#paint19_linear_906_3418)"
                />
                <path
                  d="M497.896 57.7569C542.101 42.3083 588.183 33.4944 634.758 31.58L735.626 92.3331C710.474 85.2156 526.331 61.1201 394.472 152.903C392.581 150.892 392.678 150.694 392.678 150.694C392.678 150.694 416.055 84.3654 497.896 57.7569Z"
                  fill="url(#paint20_linear_906_3418)"
                />
                <path
                  d="M733.224 83.841C717.992 78.3138 523.32 56.4082 394.468 153.301C391.437 150.582 392.402 149.595 392.402 149.595C392.402 149.595 414.231 85.2444 495.527 55.7413C539.328 38.8455 585.195 28.4878 631.765 24.9753L734.005 82.0553L733.224 83.841Z"
                  fill="url(#paint21_linear_906_3418)"
                />
                <path
                  d="M495.721 55.4444C539.522 38.5486 585.388 28.1909 631.959 24.6784L734.199 81.7584C708.848 75.5357 523.512 56.3106 393.71 152.597C391.819 150.586 391.731 149.788 391.731 149.788C391.731 149.788 414.521 84.9485 495.721 55.4444Z"
                  fill="url(#paint22_linear_906_3418)"
                />
                <path
                  d="M721.054 58.0186C706.012 52.6925 511.781 44.4406 392.651 153.483C389.715 150.864 391.918 150.288 391.918 150.288C391.918 150.288 412.53 83.335 492.12 52.4205C535.055 34.6924 580.205 23.4854 626.185 19.1427L721.565 54.5364L721.054 58.0186Z"
                  fill="url(#paint23_linear_906_3418)"
                />
                <path
                  d="M492.312 52.3228C535.088 34.634 580.078 23.4584 625.898 19.14L721.76 54.1399C696.787 48.3193 509.341 39.834 393.709 152.696C391.975 154.274 391.507 153.273 391.507 153.273C391.507 153.273 391.802 122.689 391.816 121.194C396.755 104.404 437.848 73.2178 492.312 52.3228Z"
                  fill="url(#paint24_linear_906_3418)"
                />
                <path
                  d="M400.993 160.239C404.557 157.185 425.374 148.22 474.988 144.714C540.375 140.164 735.036 143.538 752.003 147.388L749.544 144.774C749.544 144.774 497.446 133.971 439.056 145.961C391.772 155.467 400.734 157.347 400.734 157.347L400.993 160.239Z"
                  fill="url(#paint25_linear_906_3418)"
                />
                <path
                  d="M27.1961 148.56C27.1961 148.56 354.032 136.272 383.888 160.672C386.8 155.917 393.575 146.817 393.575 146.817C297.412 110.912 194.92 97.1427 93.1371 106.454C67.1739 124.038 27.1961 148.56 27.1961 148.56Z"
                  fill="url(#paint26_linear_906_3418)"
                />
                <path
                  d="M35.8043 137.584C35.8043 137.584 355.727 128.916 386.315 156.71C389.321 152.056 396 143.054 396 143.054C300.738 104.384 198.593 87.5633 96.5079 93.734C70.3633 110.319 35.8043 137.584 35.8043 137.584Z"
                  fill="url(#paint27_linear_906_3418)"
                />
                <path
                  d="M37.65 134.413C33.2243 137.658 36.1815 138.086 36.1815 138.086C36.1815 138.086 299.178 118.407 386.501 157.21C387.082 156.419 386.511 156.214 387.666 155.328C318.278 119.09 78.2894 130.422 37.65 134.413Z"
                  fill="url(#paint28_linear_906_3418)"
                />
                <path
                  d="M37.0064 131.817C44.5642 130.694 238.12 80.2563 385.729 158C389.612 153.44 393.111 148.54 396.188 143.355C365.886 123.095 332.692 107.979 297.841 98.5674C229.824 78.6817 130.87 67.0657 118.188 64.6517C93.2969 87.3341 67.1257 108.441 39.8151 127.859C36.8318 130.121 37.0064 131.817 37.0064 131.817Z"
                  fill="url(#paint29_linear_906_3418)"
                />
                <path
                  d="M61.7432 112.627C58.5669 115.087 42.0303 125.987 39.24 128.052C96.0002 116.644 268.903 87.8265 387.374 155.823C387.72 155.414 388.043 154.985 388.342 154.538C359.53 130.746 250.725 80.7764 61.7432 112.627Z"
                  fill="url(#paint30_linear_906_3418)"
                />
                <path
                  d="M43.9587 114.249L107.198 65.0436C107.198 65.0436 301.043 73.6903 330.628 96.4928C351.726 113.331 371.931 131.353 391.152 150.48L387.379 155.325C387.379 155.325 366.19 133.6 289.381 114.028C204.467 92.7838 54.4893 111.959 43.9587 114.249Z"
                  fill="url(#paint31_linear_906_3418)"
                />
                <path
                  d="M43.8525 115.344C51.1122 115.414 272.488 72.7172 387.374 155.824L389.011 154.544C389.011 154.544 289.593 72.2845 43.9586 114.249C43.8706 114.414 43.8158 114.597 43.7976 114.785C43.7794 114.973 43.7981 115.163 43.8525 115.344Z"
                  fill="url(#paint32_linear_906_3418)"
                />
                <path
                  d="M48.0331 107.812C63.0955 101.183 256.002 68.4731 388.128 156.927C391.021 154.065 390.547 153.762 390.547 153.762C390.547 153.762 366.721 88.4722 284.606 64.3655C240.127 50.2605 193.942 42.8367 147.445 42.3176L47.2862 106.012L48.0331 107.812Z"
                  fill="url(#paint33_linear_906_3418)"
                />
                <path
                  d="M284.422 63.6663C239.945 49.5604 193.756 42.1694 147.26 41.7181L47.1009 105.412C72.1111 97.4837 256.011 67.5765 388.904 155.639C390.74 153.565 390.646 153.364 390.646 153.364C390.646 153.364 366.536 87.8726 284.422 63.6663Z"
                  fill="url(#paint34_linear_906_3418)"
                />
                <path
                  d="M53.6598 89.0361L78.7905 78.5185C78.7905 78.5185 145.656 79.1641 170.964 80.0063C196.271 80.8484 273.786 96.6413 319.582 112.626C345.275 123.217 369.647 137.001 392.172 153.678C392.172 153.678 323.318 111.566 256.664 98.8671C197.258 89.7693 137.162 86.4873 77.1601 89.0637C69.3333 89.5623 61.4847 89.5531 53.6598 89.0361Z"
                  fill="url(#paint35_linear_906_3418)"
                />
                <path
                  d="M392.986 158.369C327.531 110.611 236.958 81.8392 53.8412 90.0343L53.8508 89.038C53.8508 89.038 232.431 75.8175 326.118 118.368C350.556 128.139 373.73 141.047 395.103 156.795L392.986 158.369Z"
                  fill="url(#paint36_linear_906_3418)"
                />
                <path
                  d="M53.7563 88.9375C69.002 83.1068 258.381 59.6289 392.179 152.881C395.072 150.119 394.693 149.817 394.693 149.817C394.693 149.817 372.884 83.4505 291.572 55.2667C247.674 38.9674 201.77 29.2652 155.241 26.4518L53.2187 85.2459L53.7563 88.9375Z"
                  fill="url(#paint37_linear_906_3418)"
                />
                <path
                  d="M291.376 55.7627C247.478 39.4634 201.574 29.7614 155.045 26.948L53.0228 85.7421C78.2116 79.1107 262.881 58.5763 392.848 152.887C394.873 150.914 394.78 150.714 394.78 150.714C394.78 150.714 372.688 83.9466 291.376 55.7627Z"
                  fill="url(#paint38_linear_906_3418)"
                />
                <path
                  d="M55.4926 77.2972C70.8282 72.0652 265.887 53.9226 392.94 153.287C395.927 150.626 394.981 149.62 394.981 149.62C394.981 149.62 374.399 84.8599 293.783 53.7934C250.312 36.0703 204.656 24.8294 158.165 20.4025L54.8414 75.4976L55.4926 77.2972Z"
                  fill="url(#paint39_linear_906_3418)"
                />
                <path
                  d="M293.5 53.4918C250.033 35.7534 204.375 24.512 157.881 20.1009L54.6531 75.1969C80.0243 69.464 265.697 53.8212 393.615 152.596C395.64 150.623 395.743 149.827 395.743 149.827C395.743 149.827 374.115 84.5583 293.5 53.4918Z"
                  fill="url(#paint40_linear_906_3418)"
                />
                <path
                  d="M80.4267 37.6852C95.5693 32.6506 278.336 40.8915 392.554 153.682C395.541 151.02 395.452 150.322 395.452 150.322C395.452 150.322 376.136 82.9837 297.254 50.5391C254.669 31.9865 209.744 19.9098 163.857 14.6788L79.8698 35.9861L80.4267 37.6852Z"
                  fill="url(#paint41_linear_906_3418)"
                />
                <path
                  d="M301.912 43.0121C227.23 1.04339 176.489 2.44649 176.489 2.44649L80.0638 35.6891C105.049 30.351 276.639 38.5836 392.939 153.387L393.711 152.497C395.32 154.107 395.807 153.115 395.807 153.115C396.503 144.765 396.584 136.372 396.05 128.01C394.015 111.153 357.402 74.1349 301.912 43.0121Z"
                  fill="url(#paint42_linear_906_3418)"
                />
                <path
                  d="M386.187 160.096C382.682 156.974 362.138 147.609 312.505 143.145C247.217 137.333 52.624 136.949 35.4899 140.47L37.9984 137.904C37.9984 137.904 290.258 131.97 348.406 145.085C395.498 155.503 386.501 157.21 386.501 157.21L386.187 160.096Z"
                  fill="url(#paint43_linear_906_3418)"
                />
                <path
                  d="M386.501 157.21C375.005 150.623 344.824 130.206 247.231 125.976C175.575 123.83 103.857 125.899 32.4174 132.171L32.3962 134.363C105.005 127.289 177.995 125.53 250.832 129.099C285.961 131.829 358.13 137.209 385.994 160.294C389.444 159.131 386.501 157.21 386.501 157.21Z"
                  fill="url(#paint44_linear_906_3418)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  opacity="0.5"
                  d="M388.712 155.836L392.413 118.809L393.462 118.919L394.363 154.297L388.712 155.836Z"
                  fill="url(#paint45_linear_906_3418)"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_906_3418"
                    x1="0.443583"
                    y1="168.726"
                    x2="385.59"
                    y2="172.445"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="0.04" stop-color="#DCDCDC" />
                    <stop offset="0.37" stop-color="#F6F6F6" />
                    <stop offset="0.56" stop-color="white" />
                    <stop offset="0.7" stop-color="#FBFBFB" />
                    <stop offset="0.85" stop-color="#EEEEEE" />
                    <stop offset="1" stop-color="#D9D9D9" />
                  </linearGradient>
                  <linearGradient
                    id="paint1_linear_906_3418"
                    x1="7.24916"
                    y1="176.264"
                    x2="364.598"
                    y2="179.715"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint2_linear_906_3418"
                    x1="10.6424"
                    y1="171.116"
                    x2="368.66"
                    y2="174.573"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint3_linear_906_3418"
                    x1="782.675"
                    y1="176.378"
                    x2="396.669"
                    y2="172.651"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="0.66" stop-color="white" />
                    <stop offset="1" stop-color="#D9D9D9" />
                  </linearGradient>
                  <linearGradient
                    id="paint4_linear_906_3418"
                    x1="596.864"
                    y1="186.54"
                    x2="596.94"
                    y2="178.67"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint5_linear_906_3418"
                    x1="588.528"
                    y1="169.323"
                    x2="588.577"
                    y2="164.242"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint6_linear_906_3418"
                    x1="593.845"
                    y1="172.762"
                    x2="593.89"
                    y2="168.08"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint7_linear_906_3418"
                    x1="203.28"
                    y1="156.437"
                    x2="203.459"
                    y2="137.808"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint8_linear_906_3418"
                    x1="760.418"
                    y1="136.61"
                    x2="394.281"
                    y2="133.075"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint9_linear_906_3418"
                    x1="743.582"
                    y1="123.925"
                    x2="383.385"
                    y2="127.354"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint10_linear_906_3418"
                    x1="568.063"
                    y1="154.99"
                    x2="567.824"
                    y2="133.667"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint11_linear_906_3418"
                    x1="570.852"
                    y1="159.787"
                    x2="571.728"
                    y2="69.0308"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint12_linear_906_3418"
                    x1="573.622"
                    y1="159.814"
                    x2="574.512"
                    y2="67.6627"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint13_linear_906_3418"
                    x1="687.816"
                    y1="86.9895"
                    x2="328.158"
                    y2="166.785"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D8D8D8" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint14_linear_906_3418"
                    x1="388.335"
                    y1="175.062"
                    x2="608.35"
                    y2="126.491"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint15_linear_906_3418"
                    x1="353.801"
                    y1="165.726"
                    x2="767.584"
                    y2="60.6168"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint16_linear_906_3418"
                    x1="684.838"
                    y1="77.2168"
                    x2="321.946"
                    y2="143.2"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#DBDBDB" />
                    <stop offset="0.05" stop-color="#D0D0D0" />
                    <stop offset="0.22" stop-color="#AEAEAE" />
                    <stop offset="0.31" stop-color="#A1A1A1" />
                    <stop offset="0.85" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint17_linear_906_3418"
                    x1="751.252"
                    y1="76.7421"
                    x2="493.973"
                    y2="116.306"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#636363" />
                  </linearGradient>
                  <linearGradient
                    id="paint18_linear_906_3418"
                    x1="451.849"
                    y1="97.3644"
                    x2="781.37"
                    y2="177.19"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D9D9D9" />
                    <stop offset="0.64" stop-color="#F1F1F1" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint19_linear_906_3418"
                    x1="351.495"
                    y1="161.555"
                    x2="762.294"
                    y2="40.2891"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint20_linear_906_3418"
                    x1="679.298"
                    y1="58.9107"
                    x2="318.201"
                    y2="138.968"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D8D8D8" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint21_linear_906_3418"
                    x1="356.766"
                    y1="164.804"
                    x2="765.225"
                    y2="31.1344"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint22_linear_906_3418"
                    x1="682.479"
                    y1="51.5886"
                    x2="322.325"
                    y2="142.533"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#DBDBDB" />
                    <stop offset="0.04" stop-color="#D0D0D0" />
                    <stop offset="0.18" stop-color="#AEAEAE" />
                    <stop offset="0.26" stop-color="#A1A1A1" />
                    <stop offset="0.85" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint23_linear_906_3418"
                    x1="319.023"
                    y1="165.772"
                    x2="723.547"
                    y2="31.6085"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D9D9D9" />
                    <stop offset="0.64" stop-color="#F1F1F1" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint24_linear_906_3418"
                    x1="669.671"
                    y1="37.325"
                    x2="315.445"
                    y2="128.678"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#EEEDEB" />
                    <stop offset="1" stop-color="#D3D3D3" />
                  </linearGradient>
                  <linearGradient
                    id="paint25_linear_906_3418"
                    x1="576.085"
                    y1="161.93"
                    x2="576.294"
                    y2="140.312"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="#CCCCCC" />
                  </linearGradient>
                  <linearGradient
                    id="paint26_linear_906_3418"
                    x1="27.3798"
                    y1="129.532"
                    x2="393.517"
                    y2="133.067"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint27_linear_906_3418"
                    x1="44.48"
                    y1="116.259"
                    x2="404.64"
                    y2="126.645"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint28_linear_906_3418"
                    x1="219.367"
                    y1="150.706"
                    x2="220.018"
                    y2="129.392"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint29_linear_906_3418"
                    x1="216.368"
                    y1="156.364"
                    x2="217.244"
                    y2="65.6081"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint30_linear_906_3418"
                    x1="213.693"
                    y1="156.338"
                    x2="214.583"
                    y2="64.1874"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint31_linear_906_3418"
                    x1="100.927"
                    y1="81.3227"
                    x2="458.977"
                    y2="168.049"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D8D8D8" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint32_linear_906_3418"
                    x1="398.556"
                    y1="175.161"
                    x2="179.615"
                    y2="122.351"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint33_linear_906_3418"
                    x1="431.908"
                    y1="164.901"
                    x2="20.6147"
                    y2="51.6986"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint34_linear_906_3418"
                    x1="102.953"
                    y1="69.9086"
                    x2="464.18"
                    y2="143.014"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#DBDBDB" />
                    <stop offset="0.05" stop-color="#D0D0D0" />
                    <stop offset="0.22" stop-color="#AEAEAE" />
                    <stop offset="0.31" stop-color="#A1A1A1" />
                    <stop offset="0.85" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint35_linear_906_3418"
                    x1="37.7002"
                    y1="69.8523"
                    x2="294.167"
                    y2="114.377"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#636363" />
                  </linearGradient>
                  <linearGradient
                    id="paint36_linear_906_3418"
                    x1="336.649"
                    y1="96.252"
                    x2="5.64805"
                    y2="169.7"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D9D9D9" />
                    <stop offset="0.64" stop-color="#F1F1F1" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint37_linear_906_3418"
                    x1="435.746"
                    y1="162.368"
                    x2="27.3641"
                    y2="33.1929"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint38_linear_906_3418"
                    x1="109.889"
                    y1="53.4126"
                    x2="469.374"
                    y2="140.428"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D8D8D8" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint39_linear_906_3418"
                    x1="436.267"
                    y1="163.662"
                    x2="30.3006"
                    y2="23.3827"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint40_linear_906_3418"
                    x1="54.7716"
                    y1="77.9555"
                    x2="398.077"
                    y2="90.2381"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#DBDBDB" />
                    <stop offset="0.05" stop-color="#D0D0D0" />
                    <stop offset="0.24" stop-color="#AEAEAE" />
                    <stop offset="0.34" stop-color="#A1A1A1" />
                    <stop offset="0.85" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint41_linear_906_3418"
                    x1="467.582"
                    y1="157.447"
                    x2="76.1778"
                    y2="19.1242"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D9D9D9" />
                    <stop offset="0.64" stop-color="#F1F1F1" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint42_linear_906_3418"
                    x1="128.43"
                    y1="27.3129"
                    x2="471.874"
                    y2="123.015"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#EEEDEB" />
                    <stop offset="1" stop-color="#D3D3D3" />
                  </linearGradient>
                  <linearGradient
                    id="paint43_linear_906_3418"
                    x1="211.094"
                    y1="158.405"
                    x2="211.303"
                    y2="136.787"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="#CCCCCC" />
                  </linearGradient>
                  <linearGradient
                    id="paint44_linear_906_3418"
                    x1="32.3433"
                    y1="139.842"
                    x2="387.878"
                    y2="143.275"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint45_linear_906_3418"
                    x1="389.887"
                    y1="136.845"
                    x2="399.703"
                    y2="139.005"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#CACACA" />
                    <stop offset="1" stop-color="#ACACAC" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="right-text-button">
      <div class="button2">
        <div class="rectangle-242"></div>
        <div class="view-all-stories">View All Stories</div>
        <div class="rectangle-252"></div>
      </div>
      <div class="group-23">
        <div class="your-courses">Your Courses</div>
        <div class="affordable-online-courses-and-learning-opportunities">
          Affordable Online Courses And Learning Opportunities
        </div>
      </div>
      <div
        class="it-is-a-long-established-fact-that-a-reader-will-be-distracted-by-the-readable-contenwhen-looking-at-its-layout-the-point-of-using-lorem-ipsum-is-that-it-has"
      >
        It is a long established fact that a reader will be distracted by the
        readable contenwhen looking at its layout. The point of using Lorem
        Ipsum is that it has.
      </div>
      <div class="group-27">
        <div class="check-box">
          <div class="rectangle-44"></div>
          <div class="skill-enrichment">Skill Enrichment</div>
          <svg
            class="checkmark-1"
            width="21"
            height="18"
            viewBox="0 0 21 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_906_3478)">
              <path
                d="M11.1614 13.9762C11.0817 13.9762 11.0067 13.9313 10.9705 13.8626C8.62065 9.31574 4.84454 7.25177 4.80586 7.23047C4.7285 7.19023 4.68498 7.10503 4.69707 7.02218C4.70916 6.93697 4.77201 6.86833 4.85662 6.84703C5.43924 6.70501 6.01944 6.63401 6.58029 6.63401C8.09364 6.63401 9.49095 7.14053 10.736 8.14174C11.3959 6.96538 14.2486 2.43981 20.2343 0.0160695C20.331 -0.0241683 20.4446 0.0137026 20.4978 0.101279C20.551 0.188855 20.5316 0.304835 20.4494 0.368742C16.7749 3.31794 13.6563 9.12638 11.35 13.8602C11.3137 13.9313 11.2412 13.9786 11.1614 13.9786C11.1639 13.9762 11.1639 13.9762 11.1614 13.9762Z"
                fill="#F16126"
              />
              <path
                d="M15.7572 18.0001H1.30545C0.843705 18.0001 0.468994 17.6332 0.468994 17.1811V3.0316C0.468994 2.57952 0.843705 2.21265 1.30545 2.21265H11.3815V3.84819H2.13948V16.3622H14.9208V10.1064H16.5912V17.1811C16.5937 17.6332 16.2189 18.0001 15.7572 18.0001Z"
                fill="#F16126"
              />
            </g>
            <defs>
              <clipPath id="clip0_906_3478">
                <rect width="21" height="18" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <div class="check-box2">
          <div class="rectangle-442"></div>
          <div class="affordable-skill-development-programs">
            Affordable Skill Development Programs
          </div>
          <svg
            class="checkmark-12"
            width="22"
            height="18"
            viewBox="0 0 22 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_906_3484)">
              <path
                d="M11.6831 13.9762C11.6019 13.9762 11.5254 13.9313 11.4884 13.8626C9.09173 9.31574 5.24031 7.25177 5.20086 7.23047C5.12196 7.19023 5.07757 7.10503 5.0899 7.02218C5.10223 6.93697 5.16633 6.86833 5.25263 6.84703C5.84687 6.70501 6.43864 6.63401 7.01068 6.63401C8.55421 6.63401 9.97939 7.14053 11.2493 8.14174C11.9223 6.96538 14.8319 2.43981 20.937 0.0160695C21.0356 -0.0241683 21.1515 0.0137026 21.2057 0.101279C21.26 0.188855 21.2402 0.304835 21.1564 0.368742C17.4086 3.31794 14.2278 9.12638 11.8755 13.8602C11.8385 13.9313 11.7645 13.9786 11.6831 13.9786C11.6857 13.9762 11.6857 13.9762 11.6831 13.9762Z"
                fill="#F16126"
              />
              <path
                d="M16.3706 18.0001H1.63063C1.15968 18.0001 0.777496 17.6332 0.777496 17.1811V3.0316C0.777496 2.57952 1.15968 2.21265 1.63063 2.21265H11.9076V3.84819H2.4813V16.3622H15.5175V10.1064H17.2212V17.1811C17.2238 17.6332 16.8415 18.0001 16.3706 18.0001Z"
                fill="#F16126"
              />
            </g>
            <defs>
              <clipPath id="clip0_906_3484">
                <rect
                  width="21.4188"
                  height="18"
                  fill="white"
                  transform="translate(0.299149)"
                />
              </clipPath>
            </defs>
          </svg>
        </div>
        <div class="check-box">
          <div class="rectangle-443"></div>
          <div class="holistic-learning-approach">
            Holistic learning approach
          </div>
          <svg
            class="checkmark-13"
            width="21"
            height="18"
            viewBox="0 0 21 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_906_3490)">
              <path
                d="M11.1614 13.9762C11.0817 13.9762 11.0067 13.9313 10.9705 13.8626C8.62065 9.31574 4.84454 7.25177 4.80586 7.23047C4.7285 7.19023 4.68498 7.10503 4.69707 7.02218C4.70916 6.93697 4.77201 6.86833 4.85662 6.84703C5.43924 6.70501 6.01944 6.63401 6.58029 6.63401C8.09364 6.63401 9.49095 7.14053 10.736 8.14174C11.3959 6.96538 14.2486 2.43981 20.2343 0.0160695C20.331 -0.0241683 20.4446 0.0137026 20.4978 0.101279C20.551 0.188855 20.5316 0.304835 20.4494 0.368742C16.7749 3.31794 13.6563 9.12638 11.35 13.8602C11.3137 13.9313 11.2412 13.9786 11.1614 13.9786C11.1639 13.9762 11.1639 13.9762 11.1614 13.9762Z"
                fill="#F16126"
              />
              <path
                d="M15.7572 18.0001H1.30545C0.843705 18.0001 0.468994 17.6332 0.468994 17.1811V3.0316C0.468994 2.57952 0.843705 2.21265 1.30545 2.21265H11.3815V3.84819H2.13948V16.3622H14.9208V10.1064H16.5912V17.1811C16.5937 17.6332 16.2189 18.0001 15.7572 18.0001Z"
                fill="#F16126"
              />
            </g>
            <defs>
              <clipPath id="clip0_906_3490">
                <rect width="21" height="18" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <div class="check-box2">
          <div class="rectangle-444"></div>
          <div class="innovative-elementary-education-techniques">
            Innovative elementary education techniques
          </div>
          <svg
            class="checkmark-14"
            width="21"
            height="18"
            viewBox="0 0 21 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_906_3496)">
              <path
                d="M11.1614 13.9762C11.0817 13.9762 11.0067 13.9313 10.9705 13.8626C8.62065 9.31574 4.84454 7.25177 4.80586 7.23047C4.7285 7.19023 4.68498 7.10503 4.69707 7.02218C4.70916 6.93697 4.77201 6.86833 4.85662 6.84703C5.43924 6.70501 6.01944 6.63401 6.58029 6.63401C8.09364 6.63401 9.49095 7.14053 10.736 8.14174C11.3959 6.96538 14.2486 2.43981 20.2343 0.0160695C20.331 -0.0241683 20.4446 0.0137026 20.4978 0.101279C20.551 0.188855 20.5316 0.304835 20.4494 0.368742C16.7749 3.31794 13.6563 9.12638 11.35 13.8602C11.3137 13.9313 11.2412 13.9786 11.1614 13.9786C11.1639 13.9762 11.1639 13.9762 11.1614 13.9762Z"
                fill="#F16126"
              />
              <path
                d="M15.7572 18.0001H1.30545C0.843705 18.0001 0.468994 17.6332 0.468994 17.1811V3.0316C0.468994 2.57952 0.843705 2.21265 1.30545 2.21265H11.3815V3.84819H2.13948V16.3622H14.9208V10.1064H16.5912V17.1811C16.5937 17.6332 16.2189 18.0001 15.7572 18.0001Z"
                fill="#F16126"
              />
            </g>
            <defs>
              <clipPath id="clip0_906_3496">
                <rect width="21" height="18" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <div class="check-box3">
          <div class="rectangle-445"></div>
          <div class="tech-enabled-learning">Tech-enabled learning</div>
          <svg
            class="checkmark-15"
            width="21"
            height="18"
            viewBox="0 0 21 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_906_3502)">
              <path
                d="M11.1614 13.9762C11.0817 13.9762 11.0067 13.9313 10.9705 13.8626C8.62065 9.31574 4.84454 7.25177 4.80586 7.23047C4.7285 7.19023 4.68498 7.10503 4.69707 7.02218C4.70916 6.93697 4.77201 6.86833 4.85662 6.84703C5.43924 6.70501 6.01944 6.63401 6.58029 6.63401C8.09364 6.63401 9.49095 7.14053 10.736 8.14174C11.3959 6.96538 14.2486 2.43981 20.2343 0.0160695C20.331 -0.0241683 20.4446 0.0137026 20.4978 0.101279C20.551 0.188855 20.5316 0.304835 20.4494 0.368742C16.7749 3.31794 13.6563 9.12638 11.35 13.8602C11.3137 13.9313 11.2412 13.9786 11.1614 13.9786C11.1639 13.9762 11.1639 13.9762 11.1614 13.9762Z"
                fill="#F16126"
              />
              <path
                d="M15.7572 18.0001H1.30545C0.843705 18.0001 0.468994 17.6332 0.468994 17.1811V3.0316C0.468994 2.57952 0.843705 2.21265 1.30545 2.21265H11.3815V3.84819H2.13948V16.3622H14.9208V10.1064H16.5912V17.1811C16.5937 17.6332 16.2189 18.0001 15.7572 18.0001Z"
                fill="#F16126"
              />
            </g>
            <defs>
              <clipPath id="clip0_906_3502">
                <rect width="21" height="18" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <div class="check-box2">
          <div class="rectangle-446"></div>
          <div class="learning-with-no-time-constraints">
            Learning with no time constraints
          </div>
          <svg
            class="checkmark-16"
            width="22"
            height="18"
            viewBox="0 0 22 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_906_3508)">
              <path
                d="M11.6831 13.9762C11.6019 13.9762 11.5254 13.9313 11.4884 13.8626C9.09173 9.31574 5.24031 7.25177 5.20086 7.23047C5.12196 7.19023 5.07757 7.10503 5.0899 7.02218C5.10223 6.93697 5.16633 6.86833 5.25263 6.84703C5.84687 6.70501 6.43864 6.63401 7.01068 6.63401C8.55421 6.63401 9.97939 7.14053 11.2493 8.14174C11.9223 6.96538 14.8319 2.43981 20.937 0.0160695C21.0356 -0.0241683 21.1515 0.0137026 21.2057 0.101279C21.26 0.188855 21.2402 0.304835 21.1564 0.368742C17.4086 3.31794 14.2278 9.12638 11.8755 13.8602C11.8385 13.9313 11.7645 13.9786 11.6831 13.9786C11.6857 13.9762 11.6857 13.9762 11.6831 13.9762Z"
                fill="#F16126"
              />
              <path
                d="M16.3706 18.0001H1.63063C1.15968 18.0001 0.777496 17.6332 0.777496 17.1811V3.0316C0.777496 2.57952 1.15968 2.21265 1.63063 2.21265H11.9076V3.84819H2.4813V16.3622H15.5175V10.1064H17.2212V17.1811C17.2238 17.6332 16.8415 18.0001 16.3706 18.0001Z"
                fill="#F16126"
              />
            </g>
            <defs>
              <clipPath id="clip0_906_3508">
                <rect
                  width="21.4188"
                  height="18"
                  fill="white"
                  transform="translate(0.299149)"
                />
              </clipPath>
            </defs>
          </svg>
        </div>
        <div class="check-box">
          <div class="rectangle-447"></div>
          <div class="personalized-learning">Personalized learning</div>
          <svg
            class="checkmark-17"
            width="21"
            height="18"
            viewBox="0 0 21 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_906_3514)">
              <path
                d="M11.1614 13.9762C11.0817 13.9762 11.0067 13.9313 10.9705 13.8626C8.62065 9.31574 4.84454 7.25177 4.80586 7.23047C4.7285 7.19023 4.68498 7.10503 4.69707 7.02218C4.70916 6.93697 4.77201 6.86833 4.85662 6.84703C5.43924 6.70501 6.01944 6.63401 6.58029 6.63401C8.09364 6.63401 9.49095 7.14053 10.736 8.14174C11.3959 6.96538 14.2486 2.43981 20.2343 0.0160695C20.331 -0.0241683 20.4446 0.0137026 20.4978 0.101279C20.551 0.188855 20.5316 0.304835 20.4494 0.368742C16.7749 3.31794 13.6563 9.12638 11.35 13.8602C11.3137 13.9313 11.2412 13.9786 11.1614 13.9786C11.1639 13.9762 11.1639 13.9762 11.1614 13.9762Z"
                fill="#F16126"
              />
              <path
                d="M15.7572 18.0001H1.30545C0.843705 18.0001 0.468994 17.6332 0.468994 17.1811V3.0316C0.468994 2.57952 0.843705 2.21265 1.30545 2.21265H11.3815V3.84819H2.13948V16.3622H14.9208V10.1064H16.5912V17.1811C16.5937 17.6332 16.2189 18.0001 15.7572 18.0001Z"
                fill="#F16126"
              />
            </g>
            <defs>
              <clipPath id="clip0_906_3514">
                <rect width="21" height="18" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <div class="check-box2">
          <div class="rectangle-448"></div>
          <div class="readiness-for-national-education-policy-2020">
            Readiness for National Education Policy 2020
          </div>
          <svg
            class="checkmark-18"
            width="21"
            height="18"
            viewBox="0 0 21 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_906_3520)">
              <path
                d="M11.1614 13.9762C11.0817 13.9762 11.0067 13.9313 10.9705 13.8626C8.62065 9.31574 4.84454 7.25177 4.80586 7.23047C4.7285 7.19023 4.68498 7.10503 4.69707 7.02218C4.70916 6.93697 4.77201 6.86833 4.85662 6.84703C5.43924 6.70501 6.01944 6.63401 6.58029 6.63401C8.09364 6.63401 9.49095 7.14053 10.736 8.14174C11.3959 6.96538 14.2486 2.43981 20.2343 0.0160695C20.331 -0.0241683 20.4446 0.0137026 20.4978 0.101279C20.551 0.188855 20.5316 0.304835 20.4494 0.368742C16.7749 3.31794 13.6563 9.12638 11.35 13.8602C11.3137 13.9313 11.2412 13.9786 11.1614 13.9786C11.1639 13.9762 11.1639 13.9762 11.1614 13.9762Z"
                fill="#F16126"
              />
              <path
                d="M15.7572 18.0001H1.30545C0.843705 18.0001 0.468994 17.6332 0.468994 17.1811V3.0316C0.468994 2.57952 0.843705 2.21265 1.30545 2.21265H11.3815V3.84819H2.13948V16.3622H14.9208V10.1064H16.5912V17.1811C16.5937 17.6332 16.2189 18.0001 15.7572 18.0001Z"
                fill="#F16126"
              />
            </g>
            <defs>
              <clipPath id="clip0_906_3520">
                <rect width="21" height="18" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
      </div>
    </div>
    <div class="left-img-ab">
      <img class="ab-1-1" src="ab-1-1.png" />
      <div class="mask-group4">
        <img class="ab-2-1" src="ab-2-1.png" /><img
          class="feature-5-1"
          src="feature-5-1.png"
        />
      </div>
    </div>
    <div class="books">
      <div class="layer-13">
        <svg
          class="vector214"
          width="228"
          height="247"
          viewBox="0 0 228 247"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M166.587 34.4728C170.365 36.3719 226.582 77.3165 226.582 77.3165L109.482 246.733C109.482 246.733 6.8885 167.623 4.28066 165.871C1.67281 164.12 166.587 34.4728 166.587 34.4728Z"
            fill="url(#paint0_linear_906_3530)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3530"
              x1="59.2172"
              y1="86.0228"
              x2="168.401"
              y2="161.491"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#AEAEAE" />
              <stop offset="1" stop-color="#BABABA" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector215"
          width="228"
          height="248"
          viewBox="0 0 228 248"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M165.087 32.7341C184.294 49.0047 204.36 64.234 225.198 78.3564L107.639 247.405C107.639 247.405 9.0122 165.945 6.40435 164.193C3.7965 162.442 165.087 32.7341 165.087 32.7341Z"
            fill="url(#paint0_linear_906_3531)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3531"
              x1="59.531"
              y1="86.9635"
              x2="167.544"
              y2="161.622"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.59" stop-color="#A8A8A8" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector216"
          width="229"
          height="249"
          viewBox="0 0 229 249"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M165.984 32.972C169.763 34.8711 226.358 78.2153 226.358 78.2153L108.757 248.355C108.757 248.355 9.29505 166.115 6.68721 164.363C4.07936 162.611 165.984 32.972 165.984 32.972Z"
            fill="url(#paint0_linear_906_3532)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3532"
              x1="193.644"
              y1="173.424"
              x2="78.7738"
              y2="106.551"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="1" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector217"
          width="227"
          height="247"
          viewBox="0 0 227 247"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M165.079 31.172C168.858 33.0711 224.056 76.5197 224.056 76.5197L107.039 246.553C107.039 246.553 8.44044 168.219 5.71859 166.338C2.99674 164.456 165.079 31.172 165.079 31.172Z"
            fill="url(#paint0_linear_906_3533)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3533"
              x1="60.7585"
              y1="86.5607"
              x2="166.945"
              y2="159.957"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#A8A8A8" />
              <stop offset="1" stop-color="#C2C2C2" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector218"
          width="237"
          height="255"
          viewBox="0 0 237 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M124.526 1.94604C128.304 3.8451 232.42 85.6876 232.42 85.6876L115.227 254.429C115.227 254.429 10.2313 168.923 7.55451 167.124C4.87776 165.325 124.526 1.94604 124.526 1.94604Z"
            fill="url(#paint0_linear_906_3534)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3534"
              x1="61.3338"
              y1="87.6976"
              x2="176.168"
              y2="167.071"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#ACACAC" />
              <stop offset="1" stop-color="#C2C2C2" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector219"
          width="236"
          height="255"
          viewBox="0 0 236 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M123.065 1.03855C126.82 2.97207 231.187 83.7151 231.187 83.7151L113.553 254.494C113.553 254.494 11.2466 170.032 8.66257 168.246C6.07854 166.46 123.065 1.03855 123.065 1.03855Z"
            fill="url(#paint0_linear_906_3535)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3535"
              x1="96.198"
              y1="111.286"
              x2="185.45"
              y2="177.508"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.93" stop-color="#B0B0B0" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector220"
          width="236"
          height="255"
          viewBox="0 0 236 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M122.167 0.570344C125.946 2.46941 231.428 83.8818 231.428 83.8818L112.89 254.494C112.89 254.494 13.9796 172.634 11.3717 170.883C8.76388 169.131 122.167 0.570344 122.167 0.570344Z"
            fill="url(#paint0_linear_906_3536)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3536"
              x1="61.2948"
              y1="88.638"
              x2="174.2"
              y2="166.678"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#B2B2B2" />
              <stop offset="1" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector221"
          width="226"
          height="247"
          viewBox="0 0 226 247"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M163.05 29.5875C166.829 31.4866 223.758 75.6729 223.758 75.6729L104.644 245.276C104.644 245.276 9.00772 167.003 6.42369 165.217C3.83966 163.431 163.05 29.5875 163.05 29.5875Z"
            fill="url(#paint0_linear_906_3537)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3537"
              x1="82.9759"
              y1="103.67"
              x2="172.747"
              y2="163.174"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.95" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector222"
          width="227"
          height="248"
          viewBox="0 0 227 248"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M164.081 30.1001C167.86 31.9992 224.217 75.688 224.217 75.688L104.726 247.678C104.726 247.678 10.3066 167.497 7.72261 165.711C5.13858 163.925 164.081 30.1001 164.081 30.1001Z"
            fill="url(#paint0_linear_906_3538)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3538"
              x1="60.8888"
              y1="88.2032"
              x2="169.108"
              y2="163.004"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="1" stop-color="#BABABA" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector223"
          width="235"
          height="255"
          viewBox="0 0 235 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M122.5 0.519892C126.279 2.41896 230.603 82.9289 230.603 82.9289L111.764 254.861C111.764 254.861 15.9749 174.598 13.4598 172.86C10.9447 171.121 122.5 0.519892 122.5 0.519892Z"
            fill="url(#paint0_linear_906_3539)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3539"
              x1="198.798"
              y1="175.202"
              x2="86.8963"
              y2="110.074"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#EEEDEB" />
              <stop offset="0.59" stop-color="#BDBDBD" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector224"
          width="235"
          height="255"
          viewBox="0 0 235 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M122.358 0.0360512C126.137 1.93512 230.657 82.5297 230.657 82.5297L110.872 253.4C110.872 253.4 17.2369 174.219 14.698 172.515C12.159 170.811 122.358 0.0360512 122.358 0.0360512Z"
            fill="url(#paint0_linear_906_3540)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3540"
              x1="61.3165"
              y1="88.4958"
              x2="173.188"
              y2="165.821"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="1" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector225"
          width="229"
          height="250"
          viewBox="0 0 229 250"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M166.222 31.1234C170.001 33.0225 225.936 76.8785 225.936 76.8785L106.342 248.798C106.342 248.798 10.5733 167.327 7.9893 165.541C5.40527 163.755 166.222 31.1234 166.222 31.1234Z"
            fill="url(#paint0_linear_906_3541)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3541"
              x1="188.517"
              y1="178.968"
              x2="82.7923"
              y2="99.5268"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#CFCFCF" />
              <stop offset="1" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector226"
          width="231"
          height="252"
          viewBox="0 0 231 252"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M123.08 0.579574C126.835 2.51309 227.798 79.121 227.798 79.121L107.268 250.699C107.268 250.699 12.2875 170.741 9.7035 168.955C7.11946 167.169 123.08 0.579574 123.08 0.579574Z"
            fill="url(#paint0_linear_906_3542)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3542"
              x1="61.9724"
              y1="88.8408"
              x2="169.64"
              y2="163.261"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="1" stop-color="#B5B5B5" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector227"
          width="203"
          height="230"
          viewBox="0 0 203 230"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M136.04 12.8664C139.795 14.8 200.327 62.3928 200.327 62.3928L79.7548 226.151C79.7548 226.151 7.19953 167.447 4.48832 165.624C1.77711 163.801 136.04 12.8664 136.04 12.8664Z"
            fill="url(#paint0_linear_906_3543)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3543"
              x1="84.8467"
              y1="103.652"
              x2="146.002"
              y2="145.923"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.83" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector228"
          width="233"
          height="255"
          viewBox="0 0 233 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M123.412 0.636772C127.191 2.53584 229.143 81.1006 229.143 81.1006L109.303 253.817C109.303 253.817 16.5287 173.908 13.9447 172.122C11.3607 170.335 123.412 0.636772 123.412 0.636772Z"
            fill="url(#paint0_linear_906_3544)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3544"
              x1="61.9205"
              y1="89.6002"
              x2="171.105"
              y2="165.068"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.59" stop-color="#A8A8A8" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector229"
          width="232"
          height="254"
          viewBox="0 0 232 254"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M123.687 0.289573C127.466 2.18865 227.408 81.4519 227.408 81.4519L108.214 253.087C108.214 253.087 20.8065 176.683 18.1986 174.932C15.5908 173.18 123.687 0.289573 123.687 0.289573Z"
            fill="url(#paint0_linear_906_3545)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3545"
              x1="195.656"
              y1="176.816"
              x2="142.128"
              y2="143.178"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#EEEDEB" />
              <stop offset="0.09" stop-color="#E6E5E3" />
              <stop offset="0.45" stop-color="#CACAC9" />
              <stop offset="0.76" stop-color="#B9B9B9" />
              <stop offset="1" stop-color="#B3B3B3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector230"
          width="228"
          height="252"
          viewBox="0 0 228 252"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M125.374 0.80741C129.153 2.70648 223.03 77.1159 223.03 77.1159L102.959 251.862C102.959 251.862 18.5716 172.709 15.9638 170.957C13.3559 169.205 125.374 0.80741 125.374 0.80741Z"
            fill="url(#paint0_linear_906_3546)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3546"
              x1="63.0488"
              y1="90.9768"
              x2="165.308"
              y2="161.658"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.85" stop-color="#C2C2C2" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector231"
          width="230"
          height="255"
          viewBox="0 0 230 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M126.579 0.138506C130.358 2.03758 225.301 76.6741 225.301 76.6741L103.815 254.057C103.815 254.057 16.8202 170.352 14.2123 168.601C11.6045 166.849 126.579 0.138506 126.579 0.138506Z"
            fill="url(#paint0_linear_906_3547)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3547"
              x1="191.122"
              y1="171.278"
              x2="84.2126"
              y2="109.092"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.17" stop-color="#B3B3B3" />
              <stop offset="1" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector232"
          width="228"
          height="253"
          viewBox="0 0 228 253"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M127.286 0.696856C131.065 2.59592 222.437 74.663 222.437 74.663L101.468 252.403C101.468 252.403 17.215 168.709 14.631 166.923C12.047 165.137 127.286 0.696856 127.286 0.696856Z"
            fill="url(#paint0_linear_906_3548)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3548"
              x1="64.0055"
              y1="91.7333"
              x2="164.507"
              y2="161.2"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="1" stop-color="#C2C2C2" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="group13"
          width="128"
          height="94"
          viewBox="0 0 128 94"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            style="mix-blend-mode: overlay"
            d="M99.6535 78.3084L105.752 82.5236C107.797 83.6282 109.907 84.6102 112.069 85.4644C113.497 86.197 117.605 87.9157 118.19 88.3206C118.776 88.7254 124.243 91.1291 123.559 90.3509C121.003 87.5661 122.258 86.8552 16.1836 7.47771L5.26115 2.72852L99.6535 78.3084Z"
            fill="url(#paint0_linear_906_3549)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3549"
              x1="3.49879"
              y1="5.27823"
              x2="124.638"
              y2="89.0097"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="white" />
              <stop offset="1" stop-color="white" />
            </linearGradient>
          </defs>
        </svg>
      </div>
    </div>
  </div>
  <div class="school-love-sec">
    <div class="rectangle-342"></div>
    <div class="button2">
      <div class="rectangle-243"></div>
      <div class="browse-all-categories">Browse All Categories</div>
      <div class="rectangle-253"></div>
    </div>
    <div class="item-box8">
      <div class="rectangle-355"></div>
      <div class="group-25">
        <div class="item-box9">
          <div class="spoken-english">Spoken English</div>
          <div class="_24-course">24 Course</div>
        </div>
        <div class="group-26">
          <div class="ellipse-83"></div>
          <div class="frame9">
            <svg
              class="group14"
              width="39"
              height="43"
              viewBox="0 0 39 43"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M38.2833 33.0121H34.6384V28.4667C34.6494 27.4134 34.3235 26.3842 33.708 25.5293C33.0926 24.6745 32.2199 24.0389 31.2175 23.7153L23.7612 21.2293V18.8437C23.7609 18.8098 23.7581 18.776 23.7528 18.7425C24.835 17.8983 25.6452 16.7547 26.0826 15.4537H26.358C26.8674 15.4542 27.3653 15.3015 27.7868 15.0154C28.2084 14.7294 28.5342 14.3232 28.722 13.8497C28.9099 13.3761 28.951 12.857 28.8401 12.3598C28.7292 11.8626 28.4714 11.4102 28.1001 11.0613C28.1171 11.0221 28.1304 10.9813 28.1397 10.9395C28.2559 10.4109 28.3534 9.87845 28.4319 9.34301C28.4562 9.17824 28.4801 9.02387 28.5028 8.87774C28.7137 7.51803 28.8411 6.69742 28.0253 5.16168C27.1342 3.48564 25.7722 2.10691 24.1072 1.19535C22.4422 0.283801 20.5469 -0.120748 18.6548 0.0315531C16.7627 0.183854 14.9565 0.886351 13.4587 2.05249C11.9609 3.21863 10.837 4.79746 10.2254 6.59446C10.2135 6.62957 10.2045 6.66561 10.1986 6.70221C9.9483 8.2293 10.1758 9.82643 10.8724 11.4506C10.6125 11.8196 10.4556 12.2511 10.4179 12.7009C10.3802 13.1506 10.463 13.6022 10.6578 14.0093C10.8526 14.4165 11.1523 14.7643 11.5262 15.0171C11.9 15.2699 12.3345 15.4185 12.7849 15.4477C13.2315 16.7653 14.057 17.9219 15.158 18.7725C15.1846 18.793 15.2119 18.812 15.2387 18.832V21.2297L7.78242 23.7156C6.78005 24.0392 5.90741 24.6749 5.29198 25.5297C4.67655 26.3845 4.35057 27.4137 4.36166 28.467V33.0124H2.55524V25.7076C2.54898 25.4115 2.62394 25.1194 2.772 24.863C2.92006 24.6065 3.13556 24.3955 3.39508 24.2528L8.58019 21.2592C8.86762 21.4829 9.21524 21.6159 9.5786 21.641C9.94197 21.6662 10.3046 21.5824 10.6201 21.4004L12.7148 20.191C13.1353 19.9482 13.4422 19.5483 13.5679 19.0793C13.6936 18.6103 13.6278 18.1105 13.385 17.69C13.1422 17.2695 12.7423 16.9626 12.2733 16.837C11.8042 16.7113 11.3045 16.7771 10.884 17.0199L8.78923 18.2292C8.46889 18.4149 8.21227 18.6931 8.05315 19.0275C7.89403 19.3618 7.83988 19.7364 7.89782 20.1021L2.72321 23.089C2.25878 23.3489 1.87315 23.7293 1.60707 24.1902C1.34098 24.6511 1.20431 25.1753 1.21149 25.7075V33.0121H0.716736C0.538543 33.0121 0.367649 33.0829 0.241648 33.2089C0.115647 33.3349 0.0448608 33.5058 0.0448608 33.684V39.6643C0.0448608 39.8425 0.115647 40.0134 0.241648 40.1394C0.367649 40.2654 0.538543 40.3362 0.716736 40.3362H2.43926V42.3281C2.43926 42.5063 2.51004 42.6772 2.63604 42.8032C2.76204 42.9292 2.93294 43 3.11113 43H35.8889C36.0671 43 36.238 42.9292 36.364 42.8032C36.49 42.6772 36.5608 42.5063 36.5608 42.3281V40.3362H38.2833C38.4615 40.3362 38.6324 40.2654 38.7584 40.1394C38.8844 40.0134 38.9552 39.8425 38.9552 39.6643V33.684C38.9552 33.5058 38.8844 33.3349 38.7584 33.2089C38.6324 33.0829 38.4615 33.0121 38.2833 33.0121ZM9.23552 19.6889C9.25169 19.6271 9.27995 19.5691 9.31867 19.5182C9.35739 19.4674 9.4058 19.4248 9.4611 19.3928L11.5558 18.1834C11.6289 18.1411 11.7118 18.1189 11.7962 18.119C11.8397 18.119 11.8831 18.1246 11.9251 18.1358C12.0183 18.1604 12.102 18.2121 12.1657 18.2844C12.2293 18.3567 12.2701 18.4464 12.2827 18.5419C12.2953 18.6374 12.2792 18.7345 12.2365 18.8209C12.1937 18.9072 12.1263 18.9789 12.0427 19.0268L9.94796 20.2362C9.86465 20.2846 9.76884 20.3071 9.6727 20.3009C9.57656 20.2947 9.48444 20.26 9.40804 20.2013C9.33165 20.1426 9.27443 20.0626 9.24367 19.9713C9.2129 19.88 9.20998 19.7816 9.23527 19.6886L9.23552 19.6889ZM33.2949 28.4667V33.0121H29.6603V31.5408C29.6603 31.3626 29.5895 31.1917 29.4635 31.0657C29.3375 30.9397 29.1666 30.8689 28.9884 30.8689C28.8102 30.8689 28.6393 30.9397 28.5133 31.0657C28.3873 31.1917 28.3165 31.3626 28.3165 31.5408V33.0121H22.682L21.8002 29.3168L22.4736 27.1288L24.7779 28.7647C24.8784 28.836 24.9967 28.8784 25.1196 28.8871C25.2426 28.8957 25.3656 28.8704 25.4752 28.8139C25.5847 28.7573 25.6766 28.6717 25.7407 28.5664C25.8049 28.4611 25.8388 28.3402 25.8388 28.2169V23.3386L30.7929 24.9901C31.5262 25.227 32.1646 25.6921 32.6147 26.3176C33.0649 26.9431 33.3032 27.6961 33.2949 28.4667ZM20.6197 28.5848H18.3549L17.6589 26.3239L19.5 25.0164L21.3202 26.309L20.6197 28.5848ZM18.4095 29.9286H20.5651L21.3006 33.0121H17.674L18.4095 29.9286ZM24.4951 22.8907V26.9155L20.6604 24.1924L23.1329 22.4365L24.4951 22.8907ZM26.394 14.1081C26.498 13.3096 26.4634 12.4992 26.2919 11.7124H26.3583C26.6732 11.7121 26.9755 11.8358 27.1998 12.0567C27.4242 12.2775 27.5526 12.5779 27.5573 12.8927C27.562 13.2075 27.4426 13.5115 27.2249 13.7389C27.0072 13.9664 26.7087 14.099 26.394 14.1081ZM11.5159 6.97415C12.0518 5.43343 13.0254 4.08248 14.3176 3.08682C15.6098 2.09117 17.1643 1.49405 18.7907 1.36863C20.4171 1.2432 22.0448 1.59492 23.4744 2.38069C24.9039 3.16646 26.0732 4.35215 26.839 5.79249C27.445 6.9335 27.3716 7.40684 27.1749 8.67215C27.1518 8.82139 27.1273 8.97928 27.1025 9.14758C27.0396 9.57447 26.964 9.9994 26.8758 10.4218C26.7054 10.3864 26.5319 10.3686 26.3579 10.3686H25.8746C25.0483 7.62385 24.1213 6.20569 22.9643 5.91301C22.2382 5.7295 21.5139 5.99657 20.8113 6.70683C20.7726 6.746 20.7387 6.78977 20.7106 6.83717C19.3556 9.12684 16.9397 10.2217 13.5299 10.0889C13.4193 10.0854 13.3096 10.109 13.2103 10.1578C13.111 10.2066 13.0252 10.279 12.9604 10.3686H12.9505C12.6113 10.3683 12.2754 10.4362 11.963 10.5683C11.4903 9.32689 11.3388 8.12012 11.5159 6.97415ZM11.7528 12.9111C11.7532 12.67 11.8262 12.4346 11.9623 12.2356C12.0985 12.0366 12.2914 11.8833 12.516 11.7955C12.381 12.5222 12.3588 13.2653 12.4504 13.9987C12.2424 13.9029 12.0662 13.7496 11.9426 13.5568C11.819 13.3641 11.7531 13.14 11.7528 12.9111ZM13.9801 11.4431C14.0151 11.4431 14.0498 11.4435 14.0845 11.4435C17.6743 11.4435 20.2753 10.1512 21.8222 7.59706C22.1425 7.28834 22.4159 7.16034 22.6352 7.21544C22.9337 7.29102 23.727 7.80576 24.6458 10.9485C24.6529 10.9725 24.6613 10.9962 24.671 11.0193C25.1541 12.1737 25.2421 13.4555 24.9211 14.665C24.6002 15.8746 23.8883 16.9441 22.8965 17.7072C21.9046 18.4702 20.6883 18.8839 19.4368 18.8839C18.1854 18.8839 16.9691 18.4702 15.9772 17.7072C14.0809 16.2489 13.2961 13.7279 13.9801 11.4431ZM19.4368 20.2261C20.4672 20.2264 21.4851 19.9999 22.4182 19.5627V21.2984C22.4098 21.304 22.4006 21.309 22.3921 21.3152L19.5 23.3684L16.5822 21.2963V19.6198C17.4808 20.0195 18.4533 20.2261 19.4368 20.2261ZM15.8674 22.4365L18.34 24.1924L14.5054 26.9155V22.8906L15.8674 22.4365ZM5.70532 28.4666C5.697 27.696 5.93532 26.943 6.38546 26.3175C6.83561 25.692 7.47398 25.2269 8.2073 24.9901L13.1615 23.3385V28.2167C13.1615 28.3399 13.1954 28.4608 13.2595 28.5661C13.3237 28.6714 13.4155 28.757 13.5251 28.8136C13.6346 28.8702 13.7576 28.8955 13.8806 28.8868C14.0036 28.8781 14.1218 28.8358 14.2223 28.7644L16.5053 27.1435L17.1742 29.3166L16.2924 33.0123H10.6835V31.5408C10.6835 31.3626 10.6127 31.1917 10.4867 31.0657C10.3607 30.9397 10.1898 30.8689 10.0116 30.8689C9.83343 30.8689 9.66254 30.9397 9.53654 31.0657C9.41053 31.1917 9.33975 31.3626 9.33975 31.5408V33.0121H5.70516L5.70532 28.4666ZM35.217 41.6563H3.78301V40.3362H35.217V41.6563ZM37.6114 38.9924H1.38861V34.3558H37.6111L37.6114 38.9924Z"
                fill="black"
              />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="item-box8">
      <div class="rectangle-356"></div>
      <div class="group-25">
        <div class="item-box9">
          <div class="music">Music</div>
          <div class="_40-course">40 Course</div>
        </div>
        <div class="group-26">
          <div class="ellipse-84"></div>
          <div class="frame10">
            <svg
              class="group15"
              width="40"
              height="40"
              viewBox="0 0 40 40"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M39.5801 22.5527C39.5801 20.376 38.1758 18.5615 36.3311 18.1865C36.2432 16.957 35.2178 15.9824 33.9678 15.9746C33.9688 15.9561 33.9707 15.9365 33.9707 15.918V14.3906C33.9707 6.68652 27.7031 0.418945 19.999 0.418945C12.2949 0.418945 6.02734 6.68652 6.02734 14.3906V15.918C6.02734 15.9375 6.0293 15.9561 6.03027 15.9746C4.78027 15.9814 3.75586 16.9561 3.66699 18.1865C1.82227 18.5615 0.417969 20.376 0.417969 22.5527C0.417969 24.7295 1.82227 26.5439 3.66699 26.9189C3.75586 28.1533 4.78711 29.1309 6.04394 29.1309H8.46192C8.91992 29.1309 9.29199 28.7588 9.29199 28.3008V16.8057C9.29199 16.3477 8.91992 15.9756 8.46192 15.9756H7.68457C7.68555 15.957 7.6875 15.9385 7.6875 15.9189V14.3916C7.6875 7.60352 13.21 2.08008 19.999 2.08008C26.7871 2.08008 32.3105 7.60254 32.3105 14.3916V15.9189C32.3105 15.9385 32.3125 15.957 32.3135 15.9756H31.5361C31.0781 15.9756 30.7061 16.3477 30.7061 16.8057V28.3008C30.7061 28.7588 31.0781 29.1309 31.5361 29.1309H33.9541C35.2109 29.1309 36.2422 28.1533 36.3311 26.9189C38.1758 26.5439 39.5801 24.7295 39.5801 22.5527ZM2.08008 22.5527C2.08008 21.3223 2.74414 20.2764 3.66211 19.9131V25.1934C2.74414 24.8291 2.08008 23.7832 2.08008 22.5527ZM7.63379 27.4707H6.04492C5.64551 27.4707 5.32129 27.1465 5.32129 26.7471V18.3584C5.32129 17.96 5.64551 17.6348 6.04492 17.6348H7.63281V27.4707H7.63379ZM34.6777 26.7471C34.6777 27.1455 34.3535 27.4707 33.9541 27.4707H32.3662V17.6357H33.9541C34.3525 17.6357 34.6777 17.96 34.6777 18.3594V26.7471ZM36.3379 25.1934V19.9131C37.2549 20.2764 37.9199 21.3223 37.9199 22.5527C37.9199 23.7832 37.2559 24.8291 36.3379 25.1934Z"
                fill="black"
              />
              <path
                d="M24.2998 19.1778C24.0625 19.1455 23.8223 19.2178 23.6416 19.375C23.461 19.5322 23.3575 19.7608 23.3575 20V31.8203C22.0635 31.0947 20.1846 30.9424 18.2432 31.5322C16.8291 31.9629 15.5987 32.7334 14.7783 33.7012C13.8721 34.7715 13.5557 35.9639 13.8887 37.0576C14.2217 38.1514 15.1485 38.9649 16.4971 39.3496C17.0391 39.5039 17.626 39.5801 18.2344 39.5801C18.9981 39.5801 19.7959 39.46 20.5821 39.2207C21.9961 38.7901 23.2266 38.0196 24.0469 37.0518C24.8643 36.086 25.2002 35.0215 25.0137 34.0196C25.0147 34.0069 25.0157 33.9932 25.0157 33.9805V21.0606C25.8379 21.3311 26.9776 21.874 27.4991 22.8906C28.0352 23.9365 27.8399 25.3428 26.9199 27.0723C26.7051 27.4766 26.8584 27.9795 27.2627 28.1953C27.667 28.4102 28.17 28.2569 28.3858 27.8526C29.5752 25.6162 29.7744 23.6924 28.9766 22.1348C27.7158 19.668 24.4385 19.1963 24.2998 19.1778ZM22.7823 35.9785C22.1748 36.6953 21.1973 37.2988 20.1006 37.6319C19.0039 37.9658 17.8565 38.0098 16.9522 37.752C16.4961 37.6221 15.6973 37.2959 15.4776 36.5742C15.2578 35.8516 15.7393 35.1358 16.0459 34.7744C16.6533 34.0576 17.6309 33.4541 18.7276 33.1211C19.3731 32.9248 20.0157 32.8321 20.6104 32.8321C21.9815 32.8321 23.0908 33.3262 23.3506 34.1787C23.5703 34.9014 23.0889 35.6162 22.7823 35.9785ZM17.1475 25.6602C19.2012 25.0352 20.5049 23.4502 20.251 21.961V13.9219C20.6787 14.1143 21.1172 14.4102 21.335 14.8389C21.6367 15.4336 21.5088 16.2627 20.9561 17.3028C20.7412 17.7071 20.8946 18.21 21.2989 18.4258C21.7032 18.6406 22.2061 18.4873 22.4219 18.083C23.2471 16.5322 23.377 15.1846 22.8106 14.0772C21.917 12.333 19.6299 12.0029 19.5332 11.9903C19.2959 11.958 19.0557 12.0303 18.875 12.1875C18.6944 12.3447 18.5908 12.5733 18.5908 12.8125V20.0977C17.7178 19.7627 16.5977 19.7324 15.4492 20.0811C14.4717 20.3789 13.6192 20.9141 13.0469 21.5889C12.3985 22.3545 12.166 23.253 12.4092 24.0537C12.7637 25.2197 14.0108 25.9082 15.5264 25.9082C16.045 25.9092 16.5928 25.8291 17.1475 25.6602ZM13.9991 23.5703C13.9229 23.3203 14.0381 22.9893 14.3155 22.6621C14.6778 22.2344 15.2676 21.8721 15.9336 21.6699C16.334 21.5479 16.7217 21.4942 17.0713 21.4942C17.8731 21.4942 18.4785 21.7764 18.5987 22.1709C18.7715 22.7383 17.9805 23.6709 16.6641 24.0723C15.3477 24.4727 14.1709 24.1377 13.9991 23.5703Z"
                fill="black"
              />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="item-box8">
      <div class="rectangle-357"></div>
      <div class="group-252">
        <div class="item-box10">
          <div class="school-hindi-medium">School (Hindi Medium)</div>
          <div class="_27-course">27 Course</div>
        </div>
        <div class="group-26">
          <div class="ellipse-85"></div>
          <div class="school2">
            <svg
              class="group16"
              width="40"
              height="41"
              viewBox="0 0 40 41"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M36.2308 22.9703V16.7742M3.76931 16.7742V22.8637M29.3897 9.34615V5.71239M29.3897 5.71239L20.8529 0.24976C20.5979 0.0866349 20.3021 0 20.0001 0C19.698 0 19.4022 0.0866349 19.1473 0.24976L10.6104 5.71239V9.34615M29.3897 5.71239L30.9642 6.71984M15.6003 9.34615H4.52907C4.27449 9.34616 4.02752 9.43353 3.82889 9.59385C3.63027 9.75416 3.49187 9.97786 3.43651 10.228L2.32545 15.2487C2.16971 15.9527 2.7017 16.6206 3.418 16.6206H10.6104M29.3897 16.6206H36.5821C37.2985 16.6206 37.8305 15.9526 37.6747 15.2487L36.5636 10.228C36.5082 9.97786 36.3698 9.75416 36.1712 9.59385C35.9726 9.43353 35.7256 9.34616 35.471 9.34615H24.3796M9.03595 6.71984L10.6104 5.71239M10.6104 22.9703V20.5828"
                stroke="black"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M10.6103 17.7467V13.6144C10.6103 13.3056 10.6877 13.0018 10.8354 12.7311C10.983 12.4605 11.1962 12.2317 11.455 12.0661L19.1472 7.14405C19.4021 6.98092 19.6979 6.89429 19.9999 6.89429C20.302 6.89429 20.5978 6.98092 20.8527 7.14405L28.5449 12.0661C28.8037 12.2317 29.0169 12.4605 29.1645 12.7311C29.3122 13.0018 29.3896 13.3056 29.3896 13.6144V22.9704"
                stroke="black"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M25.2582 23.0513V17.0983H14.7418V23.0513M20 17.0983V23.0257M29.6851 40.2689H37.2547C37.883 40.2689 38.3925 39.7561 38.3925 39.1235V37.4398H1.60754V39.1235C1.60754 39.756 2.11692 40.2689 2.74533 40.2689H26.868"
                stroke="black"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M35.183 33.9626H4.81698C3.04443 33.9626 1.60748 35.4092 1.60748 37.1936V37.4399H38.3924V37.1936C38.3924 35.4091 36.9556 33.9626 35.183 33.9626ZM0 32.3421V24.7273C0 23.8323 0.720644 23.1068 1.60966 23.1068H38.3903C39.2794 23.1068 40 23.8323 40 24.7273V32.3421C40 33.2371 39.2794 33.9626 38.3903 33.9626H1.60966C0.720644 33.9626 0 33.237 0 32.3421Z"
                stroke="black"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M34.2458 26.3494V30.725C34.2938 30.7333 35.766 30.725 35.766 30.725M15.2617 26.3494V30.7287M18.266 26.3494V30.7287M15.2617 28.464H18.266M12.7747 26.7234C12.4164 26.479 11.9936 26.3487 11.5611 26.3494C10.3622 26.3494 9.39035 27.3298 9.39035 28.5391C9.39035 29.7485 10.3622 30.7288 11.5611 30.7288C12.048 30.7288 12.4485 30.5671 12.7524 30.294C12.8154 30.2373 12.8743 30.176 12.9285 30.1107M6.90978 26.7996C6.90978 26.7996 6.13079 26.1391 5.21216 26.4182C4.36862 26.6745 4.25071 27.6556 4.86093 28.0569C4.86093 28.0569 5.45972 28.3264 6.12395 28.5735C7.72274 29.1684 7.03405 30.7287 5.74697 30.7287C5.10246 30.7287 4.56154 30.444 4.23413 30.0795"
                stroke="black"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M22.8573 30.7288C24.0561 30.7288 25.028 29.7484 25.028 28.5391C25.028 27.3298 24.0561 26.3494 22.8573 26.3494C21.6584 26.3494 20.6866 27.3298 20.6866 28.5391C20.6866 29.7484 21.6584 30.7288 22.8573 30.7288Z"
                stroke="black"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M29.5923 30.7288C30.7912 30.7288 31.763 29.7484 31.763 28.5391C31.763 27.3298 30.7912 26.3494 29.5923 26.3494C28.3935 26.3494 27.4216 27.3298 27.4216 28.5391C27.4216 29.7484 28.3935 30.7288 29.5923 30.7288Z"
                stroke="black"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="item-box8">
      <div class="rectangle-358"></div>
      <div class="group-25">
        <div class="item-box9">
          <div class="yoga-fitness">Yoga &amp; Fitness</div>
          <div class="_20-course">20 Course</div>
        </div>
        <div class="group-26">
          <div class="ellipse-86"></div>
          <div class="frame11">
            <svg
              class="group17"
              width="35"
              height="42"
              viewBox="0 0 35 42"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M2.67793 38.1221C3.13498 38.3437 3.65316 38.5948 4.22913 38.9309C4.94837 39.3503 6.5088 39.4455 8.50091 39.3565C8.28053 39.4742 8.10495 39.661 8.00124 39.8883C7.89752 40.1156 7.87142 40.3707 7.92696 40.6143C8.04538 41.1471 8.5214 41.5121 9.04681 41.5121C9.12642 41.5121 9.20738 41.5037 9.28834 41.4862L14.6739 40.3217C15.3357 40.3474 23.4362 40.6562 28.082 40.6562C33.1308 40.6562 34.4648 37.7996 34.4648 36.2891C34.4648 35.6894 34.0434 35.0547 33.2123 34.4029C32.3893 33.7574 31.4248 33.2933 30.3557 33.0261L22.3711 30.7804V29.4023H29.1695C29.3976 29.4032 29.6192 29.3263 29.7977 29.1843C29.9762 29.0422 30.101 28.8436 30.1514 28.6211L30.3264 27.8629C30.3783 27.637 30.3509 27.4002 30.2488 27.192L25.1149 16.7409C25.0602 16.617 24.9763 16.5081 24.8704 16.4237C24.7645 16.3393 24.6398 16.2817 24.5068 16.2559L19.8516 15.3519V13.7398C21.2734 12.4101 22.2285 10.0404 22.2285 7.95979C22.2285 6.22114 21.5286 4.66962 20.4396 3.66264C20.4749 3.5155 20.5097 3.35392 20.5097 3.18545C20.5097 1.52591 19.1595 0.175781 17.5 0.175781C15.8405 0.175781 14.4903 1.52591 14.4903 3.18545C14.4903 3.3682 14.5293 3.52037 14.5676 3.65609C13.4746 4.66307 12.7717 6.21728 12.7717 7.95979C12.7717 10.0404 13.7267 12.4101 15.1486 13.7398V15.3519L10.4934 16.2559C10.3604 16.2818 10.2357 16.3393 10.1298 16.4238C10.0239 16.5082 9.94005 16.617 9.8853 16.7409L4.75117 27.192C4.64927 27.4003 4.62194 27.6371 4.67374 27.8631L4.84859 28.621C4.89899 28.8435 5.02374 29.0421 5.20226 29.1842C5.38078 29.3263 5.6024 29.4032 5.83054 29.4023H12.6289V30.78L3.6367 33.2779C3.61593 33.2837 3.59574 33.2915 3.5764 33.3011C3.28212 33.448 0.703125 34.7765 0.703125 36.1211C0.703125 37.1649 1.53138 37.5663 2.67793 38.1221ZM7.57893 38.7137C7.34478 38.4295 6.75 37.6256 6.75 36.793C6.75 35.9635 7.12642 35.2115 7.28935 34.9248L10.0971 34.6129L18.771 36.2192C18.9318 36.2491 19.0974 36.2393 19.2535 36.1908C19.4096 36.1423 19.5516 36.0565 19.6671 35.9409L20.5286 35.0794C20.5651 35.0435 20.6091 35.0163 20.6574 34.9998C20.7058 34.9832 20.7572 34.9777 20.808 34.9836L23.1695 35.2787C23.1785 35.2799 23.1874 35.2806 23.1965 35.2811L26.5004 35.4247C26.5645 35.4274 26.6251 35.4548 26.6694 35.5011C26.7138 35.5475 26.7385 35.6091 26.7385 35.6733C26.7385 35.7858 26.6629 35.8846 26.5549 35.9135C25.4481 36.2081 21.6545 37.1912 19.3085 37.4672C18.8305 37.5235 18.1437 37.618 17.3487 37.7277C14.8706 38.0694 10.5686 38.6623 7.57893 38.7137ZM14.6578 39.6486C14.6295 39.6475 14.6013 39.6499 14.5736 39.656L9.14658 40.8294C9.02406 40.8557 8.89613 40.8325 8.79061 40.7649C8.68509 40.6974 8.61049 40.5909 8.58304 40.4686C8.55668 40.3527 8.57501 40.2311 8.6344 40.1282C8.69378 40.0252 8.78983 39.9484 8.90336 39.9132L11.3394 39.1439C13.2768 38.9539 15.3935 38.6756 17.4404 38.3934C18.2318 38.2844 18.9155 38.19 19.387 38.1345C21.4056 37.897 24.3718 37.1748 26.0563 36.7389C26.3195 36.9504 26.9482 37.526 26.9482 38.1999C26.9482 38.9198 26.5216 39.6704 26.3291 39.9728C21.4555 39.9135 14.7336 39.6516 14.6578 39.6486ZM24.5009 17.0143C24.5033 17.0197 24.5056 17.0251 24.5083 17.0303L29.6457 27.4883C29.6798 27.5575 29.6888 27.637 29.6715 27.7121L29.4967 28.4701C29.4799 28.5443 29.4383 28.6105 29.3787 28.6578C29.3192 28.7052 29.2453 28.7308 29.1693 28.7305H18.9882C18.9566 28.7305 18.9259 28.7216 18.8992 28.7049L17.8359 28.0405V22.1832C17.948 22.1914 18.054 22.237 18.137 22.3128C18.22 22.3885 18.2751 22.4899 18.2935 22.6008L18.9633 26.6199C18.9914 26.7913 19.0848 26.945 19.224 27.0488C19.3632 27.1525 19.5373 27.1982 19.7095 27.1761L24.7104 26.5511L26.3367 26.8763L26.4684 26.2175L24.962 25.9162L23.0304 21.4092L22.0896 16.4709L24.3787 16.9155C24.4055 16.9208 24.4307 16.9325 24.4521 16.9497C24.4734 16.967 24.4902 16.9891 24.5009 17.0143ZM22.9471 22.9206L24.2381 25.9329L22.728 26.1217L22.9471 22.9206ZM15.1622 3.18545C15.1622 1.89645 16.211 0.847656 17.5 0.847656C18.789 0.847656 19.8378 1.89645 19.8378 3.18545L19.8376 3.18864C19.1476 2.73075 18.3501 2.46755 17.5 2.46755C16.6499 2.46755 15.8524 2.73075 15.1624 3.18864L15.1622 3.18545ZM17.5 3.13942C19.5027 3.13942 21.1698 4.8732 21.4972 7.14363C20.6472 5.68348 19.1703 4.75931 17.5 4.75931C15.8186 4.75931 14.3269 5.74714 13.4822 7.30118C13.7535 4.95382 15.4513 3.13942 17.5 3.13942ZM13.545 9.08972C13.9811 6.96659 15.6347 5.43119 17.5 5.43119C19.4226 5.43119 21.0492 6.88193 21.4758 8.96508C21.0925 11.4535 19.3881 14.1172 17.5 14.1172C15.6434 14.1172 13.9649 11.5417 13.545 9.08972ZM17.5 14.7891C18.0923 14.7891 18.658 14.5966 19.1797 14.2652V17.1406C19.1797 18.0668 18.4262 18.8203 17.5 18.8203C16.5738 18.8203 15.8203 18.0668 15.8203 17.1406V14.2652C16.342 14.5966 16.9077 14.7891 17.5 14.7891ZM17.5 19.4922C18.7967 19.4922 19.8516 18.4373 19.8516 17.1406V16.0364L21.3791 16.333L22.3689 21.528L22.0488 26.2066L19.626 26.5094L18.9561 22.4903C18.9111 22.2154 18.7696 21.9655 18.5571 21.7854C18.3446 21.6054 18.0749 21.5069 17.7963 21.5076H17.2037C16.9251 21.5069 16.6554 21.6054 16.4429 21.7854C16.2304 21.9655 16.0889 22.2154 16.0439 22.4903L15.374 26.5094L12.9512 26.2066L12.6311 21.5271L13.592 16.3386L15.1486 16.0362V17.1406C15.1484 18.4373 16.2033 19.4922 17.5 19.4922ZM12.0529 22.9206L12.272 26.1217L10.7619 25.9329L12.0529 22.9206ZM5.50334 28.4699L5.32848 27.7121C5.31108 27.6367 5.32015 27.5576 5.35418 27.4882L10.4915 17.0301C10.4942 17.0249 10.4965 17.0195 10.4989 17.0141C10.5097 16.9889 10.5265 16.9668 10.5478 16.9495C10.5692 16.9323 10.5944 16.9206 10.6213 16.9154L12.883 16.4761L11.9695 21.4099L10.0383 25.9162L8.53198 26.2175L8.66367 26.8763L10.2899 26.5511L15.2907 27.1761C15.4629 27.1982 15.637 27.1526 15.7762 27.0488C15.9154 26.945 16.0089 26.7912 16.0368 26.6198L16.7067 22.6006C16.7249 22.4895 16.7799 22.3878 16.8629 22.3117C16.9458 22.2356 17.052 22.1896 17.1642 22.181V28.0401L16.1008 28.7048C16.0741 28.7214 16.0433 28.7303 16.0118 28.7303H5.83054C5.75451 28.7306 5.68064 28.705 5.62114 28.6577C5.56165 28.6103 5.52009 28.5441 5.50334 28.4699ZM16.0118 29.4023C16.1694 29.4023 16.3232 29.3582 16.4569 29.2747L17.5 28.6228L18.5431 29.2747C18.6766 29.3583 18.8306 29.4023 18.9882 29.4023H21.6992V30.7461H13.3008V29.4023H16.0118ZM3.84817 33.9165L12.8426 31.418H22.1568L30.1832 33.6753C31.1698 33.9219 32.0493 34.3447 32.7976 34.9315C33.4394 35.4349 33.7928 35.917 33.7928 36.2891C33.7928 37.5671 32.5992 39.9844 28.0819 39.9844C27.7701 39.9844 27.4424 39.983 27.1026 39.9803C27.3399 39.5384 27.6199 38.8753 27.6199 38.1997C27.6199 37.4874 27.1905 36.9003 26.8241 36.5279C26.9428 36.4815 27.0505 36.411 27.1404 36.3207C27.2303 36.2304 27.3005 36.1224 27.3463 36.0035C27.6598 35.8784 28.2433 35.6837 28.6558 35.7008L28.6837 35.0296C28.2277 35.011 27.6861 35.167 27.3263 35.2944C27.2567 35.1391 27.1453 35.0063 27.0046 34.9108C26.8638 34.8152 26.6993 34.7607 26.5293 34.7533L23.239 34.6102L20.8911 34.3168C20.7388 34.2972 20.584 34.313 20.4388 34.3628C20.2935 34.4126 20.1617 34.4952 20.0535 34.6042L19.1919 35.4657C19.1535 35.5043 19.1061 35.5329 19.0541 35.549C19.0021 35.5652 18.9469 35.5684 18.8933 35.5584L10.1705 33.943C10.1381 33.9371 10.105 33.9359 10.0723 33.9395L5.5371 34.4434L5.61117 35.1113L6.49082 35.0135C6.47453 35.0508 6.4579 35.0886 6.4406 35.1297C6.27532 35.5221 6.07812 36.1292 6.07812 36.793C6.07812 37.5458 6.43623 38.2472 6.74496 38.7128C5.74504 38.69 4.966 38.5827 4.56775 38.3504C3.96928 38.0013 3.439 37.7442 2.97104 37.5174C1.83574 36.9672 1.375 36.7199 1.375 36.1211C1.375 35.4606 2.8113 34.4411 3.84817 33.9165Z"
                fill="black"
              />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="item-box8">
      <div class="rectangle-359"></div>
      <div class="group-253">
        <div class="item-box11">
          <div class="cognitive-development">Cognitive Development</div>
          <div class="_40-course2">40 Course</div>
        </div>
        <div class="group-26">
          <div class="ellipse-87"></div>
          <div class="frame12">
            <svg
              class="group18"
              width="43"
              height="43"
              viewBox="0 0 43 43"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M13.0054 14.2824C12.8506 14.3104 12.7388 14.4437 12.7388 14.6006V17.172C12.7388 17.329 12.8506 17.4623 13.0054 17.4902L14.6888 17.7891C14.878 18.548 15.1769 19.2726 15.5832 19.9455L14.605 21.3473C14.5616 21.4095 14.5415 21.4849 14.5481 21.5604C14.5548 21.6359 14.5879 21.7066 14.6415 21.7601L16.4604 23.579C16.514 23.6327 16.5847 23.6657 16.6602 23.6724C16.7356 23.6791 16.8111 23.659 16.8732 23.6156L18.275 22.6373C18.9449 23.042 19.6718 23.3435 20.4315 23.5317L20.7303 25.2152C20.7583 25.37 20.8916 25.4818 21.0485 25.4818H23.6199C23.7769 25.4818 23.9102 25.37 23.9381 25.2152L24.237 23.5317C24.9981 23.3425 25.7205 23.0437 26.3934 22.6373L27.7952 23.6156C27.9242 23.7059 28.0962 23.6887 28.208 23.579L30.0269 21.7601C30.0805 21.7066 30.1136 21.6359 30.1203 21.5604C30.1269 21.4849 30.1068 21.4095 30.0635 21.3473L29.0852 19.9455C29.4899 19.2757 29.7914 18.5487 29.9796 17.7891L31.6631 17.4902C31.8179 17.4623 31.9297 17.329 31.9297 17.172V14.6006C31.9297 14.4437 31.8179 14.3104 31.6631 14.2824L29.9796 13.9836C29.7914 13.224 29.4899 12.497 29.0852 11.8271L30.0635 10.4253C30.1068 10.3632 30.1269 10.2878 30.1203 10.2123C30.1136 10.1368 30.0805 10.0661 30.0269 10.0125L28.208 8.19364C28.1545 8.14002 28.0837 8.10697 28.0083 8.10029C27.9328 8.0936 27.8573 8.11372 27.7952 8.15709L26.3934 9.13534C25.7236 8.73066 24.9966 8.42915 24.237 8.24094L23.9381 6.55749C23.9102 6.40269 23.7769 6.29089 23.6199 6.29089H21.0485C20.8916 6.29089 20.7583 6.40269 20.7303 6.55749L20.4315 8.24094C19.6704 8.43014 18.948 8.72899 18.275 9.13534L16.8732 8.15709C16.7442 8.06679 16.5722 8.08399 16.4604 8.19364L14.6415 10.0125C14.5879 10.0661 14.5548 10.1368 14.5481 10.2123C14.5415 10.2878 14.5616 10.3632 14.605 10.4253L15.5832 11.8271C15.1785 12.497 14.877 13.224 14.6888 13.9836L13.0054 14.2824ZM15.2693 14.3319C15.4521 13.4998 15.7789 12.7108 16.2411 11.9905C16.3121 11.8809 16.3078 11.739 16.2347 11.6315L15.2887 10.277L16.7249 8.84079L18.0794 9.78679C18.1869 9.86204 18.3288 9.86419 18.4384 9.79324C19.1587 9.33099 19.9477 9.00419 20.7798 8.82144C20.9066 8.79349 21.0055 8.69244 21.0292 8.56344L21.3173 6.93804H23.349L23.6393 8.56344C23.6629 8.69244 23.7597 8.79349 23.8887 8.82144C24.7207 9.00419 25.5098 9.33099 26.23 9.79324C26.3397 9.86419 26.4816 9.86204 26.5891 9.78679L27.9436 8.84079L29.3798 10.277L28.4338 11.6315C28.3585 11.739 28.3564 11.8809 28.4273 11.9905C28.8896 12.7108 29.2164 13.4998 29.3991 14.3319C29.4271 14.4587 29.5281 14.5576 29.6571 14.5813L31.2825 14.8694V16.9011L29.6571 17.1914C29.5281 17.215 29.4271 17.3118 29.3991 17.4408C29.2164 18.275 28.8896 19.0619 28.4273 19.7821C28.3564 19.8918 28.3607 20.0337 28.4338 20.1412L29.3798 21.4957L27.9436 22.9319L26.5891 21.9859C26.4816 21.9106 26.3397 21.9085 26.23 21.9794C25.5134 22.4398 24.7206 22.7689 23.8887 22.9512C23.7618 22.9792 23.6629 23.0802 23.6393 23.2092L23.349 24.8346H21.3173L21.0292 23.2092C21.0055 23.0802 20.9088 22.9792 20.7798 22.9512C19.9477 22.7685 19.1587 22.4417 18.4384 21.9794C18.3288 21.9085 18.1869 21.9106 18.0794 21.9859L16.7249 22.9319L15.2887 21.4957L16.2347 20.1412C16.3099 20.0337 16.3121 19.8918 16.2411 19.7821C15.7807 19.0656 15.4517 18.2727 15.2693 17.4408C15.2414 17.3139 15.1403 17.215 15.0113 17.1914L13.3859 16.9011V14.8694L15.0113 14.5813C15.1403 14.5576 15.2414 14.4609 15.2693 14.3319Z"
                fill="black"
              />
              <path
                d="M22.3321 19.4145C24.2778 19.4145 25.8602 17.8321 25.8602 15.8863C25.8602 13.9406 24.2778 12.3582 22.3321 12.3582C20.3863 12.3582 18.8039 13.9406 18.8039 15.8863C18.8039 17.8321 20.3863 19.4145 22.3321 19.4145ZM22.3321 13.0032C23.9209 13.0032 25.2152 14.2975 25.2152 15.8863C25.2152 17.4752 23.9209 18.7695 22.3321 18.7695C20.7432 18.7695 19.4489 17.4752 19.4489 15.8863C19.4489 14.2975 20.7432 13.0032 22.3321 13.0032ZM35.389 16.1658C35.5675 16.1658 35.7115 16.0218 35.7115 15.8433C35.7115 14.4179 35.4901 13.0204 35.0536 11.6831C34.9977 11.5132 34.8171 11.4208 34.6473 11.4767C34.4774 11.5326 34.385 11.7132 34.4409 11.883C34.8558 13.1537 35.0665 14.4845 35.0665 15.8412C35.0665 16.0196 35.2106 16.1637 35.389 16.1637V16.1658Z"
                fill="black"
              />
              <path
                d="M41.667 21.6957L38.1797 17.2258C38.2206 16.7786 38.2399 16.3142 38.2399 15.8412C38.2399 11.5691 36.5651 7.5637 33.5228 4.5623C30.5322 1.61465 26.5891 0 22.3966 0H22.173C19.1845 0.04085 16.2777 0.9331 13.7622 2.58C13.7579 2.58215 13.7536 2.58645 13.7493 2.59075H1.23626C1.05781 2.59075 0.913757 2.7348 0.913757 2.91325C0.913757 3.0917 1.05781 3.23575 1.23626 3.23575H22.3966C25.7463 3.23575 28.9046 4.5322 31.2911 6.8843C31.9555 7.54005 32.5467 8.26245 33.0477 9.03645C33.0943 9.10785 33.1673 9.15788 33.2507 9.17561C33.3341 9.19334 33.4211 9.17732 33.4927 9.13105C33.6432 9.0343 33.6841 8.83435 33.5873 8.686C33.0558 7.86836 32.4373 7.11072 31.7426 6.42635C29.2357 3.95385 25.9161 2.5929 22.3966 2.5929H14.9855C17.1821 1.35072 19.6561 0.681571 22.1794 0.64715C26.273 0.5891 30.1473 2.1457 33.0649 5.02455C35.9824 7.9034 37.5906 11.7455 37.5906 15.8455C37.5906 16.3421 37.567 16.8302 37.5218 17.2946C37.5132 17.3763 37.5369 17.4602 37.5885 17.5247L41.1553 22.0956C41.2724 22.246 41.3559 22.4198 41.4 22.6053C41.4442 22.7907 41.448 22.9835 41.4112 23.1705C41.3743 23.3584 41.2977 23.5361 41.1864 23.6919C41.0752 23.8476 40.9319 23.9778 40.7662 24.0736L38.0357 25.6409C37.9475 25.6925 37.8873 25.7828 37.8766 25.8839C37.8658 25.9849 37.9024 26.086 37.9776 26.1569L38.7043 26.832C38.8892 27.004 38.9881 27.2362 38.9817 27.4856C38.9752 27.735 38.8677 27.9651 38.6785 28.1263L38.3152 28.4381C38.2597 28.4853 38.2219 28.5498 38.2079 28.6213C38.1938 28.6927 38.2044 28.7668 38.2378 28.8315L38.4334 29.2078C38.7387 29.7861 38.5173 30.5106 37.9432 30.8245L37.4745 31.0804C37.3348 31.1556 37.2724 31.3234 37.3262 31.4739L37.7411 32.6177C38.2593 34.0453 37.8637 35.6234 36.7349 36.6382C36.3132 37.0162 35.8021 37.2806 35.2499 37.4062C34.6976 37.5319 34.1225 37.5147 33.5787 37.3563L31.3621 36.7113C30.96 36.593 30.5365 36.6704 30.1989 36.922C29.8614 37.1735 29.67 37.5605 29.67 37.9819V40.7124C29.67 40.8909 29.8141 41.0349 29.9925 41.0349C30.171 41.0349 30.315 40.8909 30.315 40.7124V37.9819C30.315 37.7669 30.4139 37.567 30.5859 37.438C30.7579 37.309 30.9751 37.2703 31.1815 37.3305L33.3981 37.9755C33.7593 38.0808 34.1334 38.1345 34.5097 38.1345C35.4901 38.1345 36.4339 37.7733 37.1649 37.1198C38.4915 35.9265 38.9559 34.0732 38.3474 32.3983L38.0271 31.5168L38.2507 31.3943C39.1343 30.9127 39.4719 29.799 39.0032 28.9111L38.9279 28.7648L39.0978 28.6208C39.4267 28.3413 39.6181 27.9328 39.6267 27.5028C39.6353 27.0728 39.459 26.6557 39.1429 26.3633L38.7387 25.9871L41.0908 24.6369C41.3372 24.4955 41.5503 24.3027 41.7154 24.0716C41.8805 23.8404 41.9938 23.5763 42.0476 23.2974C42.1572 22.7341 42.0196 22.1536 41.667 21.7V21.6957Z"
                fill="black"
              />
              <path
                d="M12.5152 34.1764V40.7081C12.5152 40.8866 12.6592 41.0306 12.8377 41.0306C13.0161 41.0306 13.1602 40.8866 13.1602 40.7081V34.1764C13.1602 31.8243 12.6098 29.4443 11.567 27.2663H23.6371C23.8156 27.2663 23.9596 27.1223 23.9596 26.9438C23.9596 26.7654 23.8156 26.6213 23.6371 26.6213H7.11436C6.93591 26.6213 6.79186 26.7654 6.79186 26.9438C6.79186 27.1223 6.93591 27.2663 7.11436 27.2663H10.8468C11.9368 29.4314 12.5152 31.8179 12.5152 34.1764ZM29.9947 42.355H12.8377C12.6592 42.355 12.5152 42.4991 12.5152 42.6775C12.5152 42.856 12.6592 43 12.8377 43H29.9947C30.1731 43 30.3172 42.856 30.3172 42.6775C30.3172 42.4991 30.1731 42.355 29.9947 42.355ZM4.40536 26.6213H1.23626C1.05781 26.6213 0.913757 26.7654 0.913757 26.9438C0.913757 27.1223 1.05781 27.2663 1.23626 27.2663H4.40536C4.58381 27.2663 4.72786 27.1223 4.72786 26.9438C4.72786 26.7654 4.58381 26.6213 4.40536 26.6213ZM1.23626 24.8003H11.4466C11.6251 24.8003 11.7691 24.6562 11.7691 24.4778C11.7691 24.2993 11.6251 24.1553 11.4466 24.1553H1.23626C1.05781 24.1553 0.913757 24.2993 0.913757 24.4778C0.913757 24.6562 1.05781 24.8003 1.23626 24.8003ZM9.41701 5.05682H1.23626C1.05781 5.05682 0.913757 5.20087 0.913757 5.37932C0.913757 5.55777 1.05781 5.70182 1.23626 5.70182H9.41486C9.59331 5.70182 9.73736 5.55777 9.73736 5.37932C9.73736 5.20087 9.59331 5.05682 9.41486 5.05682H9.41701ZM6.74241 15.8864C6.74241 17.1011 7.73141 18.0901 8.94616 18.0901C10.1609 18.0901 11.1499 17.1011 11.1499 15.8864C11.1499 14.6716 10.1609 13.6826 8.94616 13.6826C7.73141 13.6826 6.74241 14.6716 6.74241 15.8864ZM10.5071 15.8864C10.5071 16.7464 9.80831 17.4451 8.94831 17.4451C8.08831 17.4451 7.38956 16.7464 7.38956 15.8864C7.38956 15.0264 8.08831 14.3276 8.94831 14.3276C9.80831 14.3276 10.5071 15.0264 10.5071 15.8864ZM3.11966 18.0901C4.33441 18.0901 5.32341 17.1011 5.32341 15.8864C5.32341 14.6716 4.33441 13.6826 3.11966 13.6826C1.90491 13.6826 0.915907 14.6716 0.915907 15.8864C0.915907 17.1011 1.90491 18.0901 3.11966 18.0901ZM3.11966 14.3255C3.97966 14.3255 4.67841 15.0242 4.67841 15.8842C4.67841 16.7442 3.97966 17.443 3.11966 17.443C2.25966 17.443 1.56091 16.7442 1.56091 15.8842C1.56091 15.0242 2.25966 14.3255 3.11966 14.3255Z"
                fill="black"
              />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="item-box8">
      <div class="rectangle-3510"></div>
      <div class="group-254">
        <div class="item-box12">
          <div class="news-awareness">News &amp; Awareness</div>
          <div class="_11-course">11 Course</div>
        </div>
        <div class="group-26">
          <div class="ellipse-88"></div>
          <div class="frame13">
            <svg
              class="group19"
              width="39"
              height="43"
              viewBox="0 0 39 43"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M38.2833 33.0121H34.6384V28.4667C34.6494 27.4134 34.3235 26.3842 33.708 25.5293C33.0926 24.6745 32.2199 24.0389 31.2175 23.7153L23.7612 21.2293V18.8437C23.7609 18.8098 23.7581 18.776 23.7528 18.7425C24.835 17.8983 25.6452 16.7547 26.0826 15.4537H26.358C26.8674 15.4542 27.3653 15.3015 27.7868 15.0154C28.2084 14.7294 28.5342 14.3232 28.722 13.8497C28.9099 13.3761 28.951 12.857 28.8401 12.3598C28.7292 11.8626 28.4714 11.4102 28.1001 11.0613C28.1171 11.0221 28.1304 10.9813 28.1397 10.9395C28.2559 10.4109 28.3534 9.87845 28.4319 9.34301C28.4562 9.17824 28.4801 9.02387 28.5028 8.87774C28.7137 7.51803 28.8411 6.69742 28.0253 5.16168C27.1342 3.48564 25.7722 2.10691 24.1072 1.19535C22.4422 0.283801 20.5469 -0.120748 18.6548 0.0315531C16.7627 0.183854 14.9565 0.886351 13.4587 2.05249C11.9609 3.21863 10.837 4.79746 10.2254 6.59446C10.2135 6.62957 10.2045 6.66561 10.1986 6.70221C9.9483 8.2293 10.1758 9.82643 10.8724 11.4506C10.6125 11.8196 10.4556 12.2511 10.4179 12.7009C10.3802 13.1506 10.463 13.6022 10.6578 14.0093C10.8526 14.4165 11.1523 14.7643 11.5262 15.0171C11.9 15.2699 12.3345 15.4185 12.7849 15.4477C13.2315 16.7653 14.057 17.9219 15.158 18.7725C15.1846 18.793 15.2119 18.812 15.2387 18.832V21.2297L7.78242 23.7156C6.78005 24.0392 5.90741 24.6749 5.29198 25.5297C4.67655 26.3845 4.35057 27.4137 4.36166 28.467V33.0124H2.55524V25.7076C2.54898 25.4115 2.62394 25.1194 2.772 24.863C2.92006 24.6065 3.13556 24.3955 3.39508 24.2528L8.58019 21.2592C8.86762 21.4829 9.21524 21.6159 9.5786 21.641C9.94197 21.6662 10.3046 21.5824 10.6201 21.4004L12.7148 20.191C13.1353 19.9482 13.4422 19.5483 13.5679 19.0793C13.6936 18.6103 13.6278 18.1105 13.385 17.69C13.1422 17.2695 12.7423 16.9626 12.2733 16.837C11.8042 16.7113 11.3045 16.7771 10.884 17.0199L8.78923 18.2292C8.46889 18.4149 8.21227 18.6931 8.05315 19.0275C7.89403 19.3618 7.83988 19.7364 7.89782 20.1021L2.72321 23.089C2.25878 23.3489 1.87315 23.7293 1.60707 24.1902C1.34098 24.6511 1.20431 25.1753 1.21149 25.7075V33.0121H0.716736C0.538543 33.0121 0.367649 33.0829 0.241648 33.2089C0.115647 33.3349 0.0448608 33.5058 0.0448608 33.684V39.6643C0.0448608 39.8425 0.115647 40.0134 0.241648 40.1394C0.367649 40.2654 0.538543 40.3362 0.716736 40.3362H2.43926V42.3281C2.43926 42.5063 2.51004 42.6772 2.63604 42.8032C2.76204 42.9292 2.93294 43 3.11113 43H35.8889C36.0671 43 36.238 42.9292 36.364 42.8032C36.49 42.6772 36.5608 42.5063 36.5608 42.3281V40.3362H38.2833C38.4615 40.3362 38.6324 40.2654 38.7584 40.1394C38.8844 40.0134 38.9552 39.8425 38.9552 39.6643V33.684C38.9552 33.5058 38.8844 33.3349 38.7584 33.2089C38.6324 33.0829 38.4615 33.0121 38.2833 33.0121ZM9.23552 19.6889C9.25169 19.6271 9.27995 19.5691 9.31867 19.5182C9.35739 19.4674 9.4058 19.4248 9.4611 19.3928L11.5558 18.1834C11.6289 18.1411 11.7118 18.1189 11.7962 18.119C11.8397 18.119 11.8831 18.1246 11.9251 18.1358C12.0183 18.1604 12.102 18.2121 12.1657 18.2844C12.2293 18.3567 12.2701 18.4464 12.2827 18.5419C12.2953 18.6374 12.2792 18.7345 12.2365 18.8209C12.1937 18.9072 12.1263 18.9789 12.0427 19.0268L9.94796 20.2362C9.86465 20.2846 9.76884 20.3071 9.6727 20.3009C9.57656 20.2947 9.48444 20.26 9.40804 20.2013C9.33165 20.1426 9.27443 20.0626 9.24367 19.9713C9.2129 19.88 9.20998 19.7816 9.23527 19.6886L9.23552 19.6889ZM33.2949 28.4667V33.0121H29.6603V31.5408C29.6603 31.3626 29.5895 31.1917 29.4635 31.0657C29.3375 30.9397 29.1666 30.8689 28.9884 30.8689C28.8102 30.8689 28.6393 30.9397 28.5133 31.0657C28.3873 31.1917 28.3165 31.3626 28.3165 31.5408V33.0121H22.682L21.8002 29.3168L22.4736 27.1288L24.7779 28.7647C24.8784 28.836 24.9967 28.8784 25.1196 28.8871C25.2426 28.8957 25.3656 28.8704 25.4752 28.8139C25.5847 28.7573 25.6766 28.6717 25.7407 28.5664C25.8049 28.4611 25.8388 28.3402 25.8388 28.2169V23.3386L30.7929 24.9901C31.5262 25.227 32.1646 25.6921 32.6147 26.3176C33.0649 26.9431 33.3032 27.6961 33.2949 28.4667ZM20.6197 28.5848H18.3549L17.6589 26.3239L19.5 25.0164L21.3202 26.309L20.6197 28.5848ZM18.4095 29.9286H20.5651L21.3006 33.0121H17.674L18.4095 29.9286ZM24.4951 22.8907V26.9155L20.6604 24.1924L23.1329 22.4365L24.4951 22.8907ZM26.394 14.1081C26.498 13.3096 26.4634 12.4992 26.2919 11.7124H26.3583C26.6732 11.7121 26.9755 11.8358 27.1998 12.0567C27.4242 12.2775 27.5526 12.5779 27.5573 12.8927C27.562 13.2075 27.4426 13.5115 27.2249 13.7389C27.0072 13.9664 26.7087 14.099 26.394 14.1081ZM11.5159 6.97415C12.0518 5.43343 13.0254 4.08248 14.3176 3.08682C15.6098 2.09117 17.1643 1.49405 18.7907 1.36863C20.4171 1.2432 22.0448 1.59492 23.4744 2.38069C24.9039 3.16646 26.0732 4.35215 26.839 5.79249C27.445 6.9335 27.3716 7.40684 27.1749 8.67215C27.1518 8.82139 27.1273 8.97928 27.1025 9.14758C27.0396 9.57447 26.964 9.9994 26.8758 10.4218C26.7054 10.3864 26.5319 10.3686 26.3579 10.3686H25.8746C25.0483 7.62385 24.1213 6.20569 22.9643 5.91301C22.2382 5.7295 21.5139 5.99657 20.8113 6.70683C20.7726 6.746 20.7387 6.78977 20.7106 6.83717C19.3556 9.12684 16.9397 10.2217 13.5299 10.0889C13.4193 10.0854 13.3096 10.109 13.2103 10.1578C13.111 10.2066 13.0252 10.279 12.9604 10.3686H12.9505C12.6113 10.3683 12.2754 10.4362 11.963 10.5683C11.4903 9.32689 11.3388 8.12012 11.5159 6.97415ZM11.7528 12.9111C11.7532 12.67 11.8262 12.4346 11.9623 12.2356C12.0985 12.0366 12.2914 11.8833 12.516 11.7955C12.381 12.5222 12.3588 13.2653 12.4504 13.9987C12.2424 13.9029 12.0662 13.7496 11.9426 13.5568C11.819 13.3641 11.7531 13.14 11.7528 12.9111ZM13.9801 11.4431C14.0151 11.4431 14.0498 11.4435 14.0845 11.4435C17.6743 11.4435 20.2753 10.1512 21.8222 7.59706C22.1425 7.28834 22.4159 7.16034 22.6352 7.21544C22.9337 7.29102 23.727 7.80576 24.6458 10.9485C24.6529 10.9725 24.6613 10.9962 24.671 11.0193C25.1541 12.1737 25.2421 13.4555 24.9211 14.665C24.6002 15.8746 23.8883 16.9441 22.8965 17.7072C21.9046 18.4702 20.6883 18.8839 19.4368 18.8839C18.1854 18.8839 16.9691 18.4702 15.9772 17.7072C14.0809 16.2489 13.2961 13.7279 13.9801 11.4431ZM19.4368 20.2261C20.4672 20.2264 21.4851 19.9999 22.4182 19.5627V21.2984C22.4098 21.304 22.4006 21.309 22.3921 21.3152L19.5 23.3684L16.5822 21.2963V19.6198C17.4808 20.0195 18.4533 20.2261 19.4368 20.2261ZM15.8674 22.4365L18.34 24.1924L14.5054 26.9155V22.8906L15.8674 22.4365ZM5.70532 28.4666C5.697 27.696 5.93532 26.943 6.38546 26.3175C6.83561 25.692 7.47398 25.2269 8.2073 24.9901L13.1615 23.3385V28.2167C13.1615 28.3399 13.1954 28.4608 13.2595 28.5661C13.3237 28.6714 13.4155 28.757 13.5251 28.8136C13.6346 28.8702 13.7576 28.8955 13.8806 28.8868C14.0036 28.8781 14.1218 28.8358 14.2223 28.7644L16.5053 27.1435L17.1742 29.3166L16.2924 33.0123H10.6835V31.5408C10.6835 31.3626 10.6127 31.1917 10.4867 31.0657C10.3607 30.9397 10.1898 30.8689 10.0116 30.8689C9.83343 30.8689 9.66254 30.9397 9.53654 31.0657C9.41053 31.1917 9.33975 31.3626 9.33975 31.5408V33.0121H5.70516L5.70532 28.4666ZM35.217 41.6563H3.78301V40.3362H35.217V41.6563ZM37.6114 38.9924H1.38861V34.3558H37.6111L37.6114 38.9924Z"
                fill="black"
              />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="title-head">
      <div class="popular-category-for-learn">
        Popular Category <br />For Learn
      </div>
      <div class="popular-category">POPULAR CATEGORY</div>
    </div>
  </div>
  <div class="experience-sec">
    <div class="mask-group5">
      <div class="rectangle-262"></div>
      <div class="frame14">
        <div class="group3">
          <div class="layer-14">
            <svg
              class="group-213"
              width="886"
              height="57"
              viewBox="0 0 886 57"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g opacity="0.2">
                <path
                  opacity="0.06"
                  d="M65.0982 2.65878C65.0982 2.65878 -29.4976 44.2995 14.8974 47.0978C23.3034 47.1789 869.547 54.1652 875.565 54.2233C900.688 54.4659 845.888 21.1573 835.13 17.3016C824.372 13.4458 518.743 6.15043 444.235 5.43101C369.728 4.7116 65.0982 2.65878 65.0982 2.65878Z"
                  fill="#F5F5F5"
                />
                <path
                  opacity="0.13"
                  d="M63.5605 3.63131C63.5605 3.63131 -25.4761 43.3511 16.5337 45.8301C24.9397 45.9113 866.693 52.9529 873.093 53.0147C896.974 53.2452 845.88 21.9471 835.218 18.0923C824.556 14.2374 519.41 6.25569 444.903 5.53627C370.395 4.81686 63.5605 3.63131 63.5605 3.63131Z"
                  fill="#EBEBEB"
                />
                <path
                  opacity="0.19"
                  d="M62.1131 5.09829C62.1131 5.09829 -21.4577 42.6987 18.166 44.9572C26.5719 45.0384 864.695 52.1437 870.713 52.2018C893.256 52.4195 845.87 23.033 835.111 19.276C824.352 15.519 519.982 6.35991 445.475 5.6405C370.967 4.92108 62.1131 5.09829 62.1131 5.09829Z"
                  fill="#E1E1E1"
                />
                <path
                  opacity="0.25"
                  d="M60.669 6.26923C60.669 6.26923 -17.3414 41.8498 19.8961 43.8878C28.3021 43.969 862.221 51.1324 868.239 51.1905C889.54 51.3962 845.86 24.0202 835.101 20.2631C824.343 16.5061 520.45 7.35165 446.039 6.63316C371.627 5.91466 60.669 6.26923 60.669 6.26923Z"
                  fill="#D7D7D7"
                />
                <path
                  opacity="0.31"
                  d="M59.2246 7.44003C59.2246 7.44003 -13.321 41 21.5303 42.8175C29.9363 42.8987 859.843 50.0234 865.861 50.0815C885.825 50.2742 845.85 25.0075 835.092 21.2504C824.333 17.4934 521.118 7.45692 446.611 6.73751C372.103 6.01809 59.2246 7.44003 59.2246 7.44003Z"
                  fill="#CDCDCD"
                />
                <path
                  opacity="0.38"
                  d="M57.7804 8.61086C57.7804 8.61086 -9.39599 40.1493 23.1647 41.7472C31.5707 41.8284 857.369 49.0122 863.769 49.074C882.874 49.2585 846.223 25.9984 835.37 22.1417C824.516 18.285 521.686 8.0548 447.178 7.33538C372.671 6.61597 57.7804 8.61086 57.7804 8.61086Z"
                  fill="#C3C3C3"
                />
                <path
                  opacity="0.44"
                  d="M56.2405 9.78089C56.2405 9.78089 -5.1845 39.3014 24.8946 40.6779C33.3005 40.759 854.991 48.0019 860.913 48.0591C878.489 48.2288 845.831 26.982 835.074 23.1262C824.316 19.2705 522.259 8.06033 447.847 7.34184C373.435 6.62334 56.2405 9.78089 56.2405 9.78089Z"
                  fill="#B9B9B9"
                />
                <path
                  opacity="0.5"
                  d="M54.7963 10.9517C54.7963 10.9517 -1.06752 38.3538 26.5289 39.6076C34.9349 39.6887 852.517 46.9906 858.534 47.0487C874.773 47.2055 845.822 27.9693 835.064 24.1135C824.306 20.2578 522.927 8.06678 448.42 7.34736C373.912 6.62795 54.7963 10.9517 54.7963 10.9517Z"
                  fill="#B0B0B0"
                />
                <path
                  opacity="0.56"
                  d="M53.3519 12.1225C53.3519 12.1225 2.95387 37.4054 28.1632 38.5374C36.5692 38.6186 849.661 45.877 856.061 45.9388C871.058 46.0836 845.813 28.8577 835.055 25.1007C824.296 21.3437 523.494 8.76346 448.986 8.04405C374.479 7.32463 53.3519 12.1225 53.3519 12.1225Z"
                  fill="#A6A6A6"
                />
                <path
                  opacity="0.63"
                  d="M51.9068 13.3921C51.9068 13.3921 6.97358 36.6543 29.7968 37.5658C38.2982 37.6479 847.664 44.9691 853.682 45.0272C867.342 45.1591 845.803 29.9437 834.758 26.1839C823.712 22.4241 523.777 9.16104 449.365 8.44255C374.953 7.72405 51.9068 13.3921 51.9068 13.3921Z"
                  fill="#9C9C9C"
                />
                <path
                  opacity="0.69"
                  d="M50.559 14.4652C50.559 14.4652 11.2826 35.6099 31.7186 36.3996C40.1246 36.4808 845.378 44.256 851.396 44.3141C863.814 44.434 845.981 31.229 835.223 27.472C824.464 23.7149 524.822 9.76352 450.41 9.04503C375.998 8.32654 50.559 14.4652 50.559 14.4652Z"
                  fill="#929292"
                />
                <path
                  opacity="0.75"
                  d="M48.9229 15.733C48.9229 15.733 15.1083 35.1531 33.162 35.3275C41.568 35.4086 842.81 43.1451 848.827 43.2032C859.908 43.3102 845.782 32.1157 835.024 28.2599C824.266 24.4042 525.297 9.96563 450.79 9.24621C376.283 8.5268 48.9229 15.733 48.9229 15.733Z"
                  fill="#888888"
                />
                <path
                  opacity="0.81"
                  d="M47.4783 16.9038C47.4783 16.9038 19.2289 33.8107 34.7962 34.2572C43.2022 34.3383 840.336 42.0352 846.736 42.0969C856.288 42.1892 846.155 33.0078 835.398 29.1521C824.64 25.2964 526.251 10.1723 451.839 9.45384C377.427 8.73535 47.4783 16.9038 47.4783 16.9038Z"
                  fill="#7E7E7E"
                />
                <path
                  opacity="0.88"
                  d="M46.0341 18.0746C46.0341 18.0746 23.2504 32.8622 36.3351 33.186C44.741 33.2671 837.768 40.9243 843.786 40.9824C852.287 41.0645 845.574 33.8907 834.337 30.1291C823.101 26.3675 525.77 10.4639 451.358 9.74539C376.946 9.0269 46.0341 18.0746 46.0341 18.0746Z"
                  fill="#747474"
                />
                <path
                  opacity="0.94"
                  d="M44.59 19.2455C44.59 19.2455 27.3675 31.9146 38.1606 32.1175C46.5665 32.1987 835.486 39.8162 841.504 39.8743C847.522 39.9324 845.756 34.7812 834.997 31.0242C824.239 27.2672 527.106 10.6741 453.076 9.95933C379.046 9.24453 44.59 19.2455 44.59 19.2455Z"
                  fill="#6A6A6A"
                />
                <path
                  d="M43.0501 20.4154C43.0501 20.4154 31.389 30.9661 39.7949 31.0472L839.126 38.7653C845.048 38.8224 845.748 35.6697 834.989 31.9127C824.23 28.1557 527.676 10.9758 453.073 10.2555C378.47 9.53516 43.0501 20.4154 43.0501 20.4154Z"
                  fill="#606060"
                />
              </g>
            </svg>

            <div class="clip-path-group3">
              <svg
                class="clip-path3"
                width="820.7035522460938"
                height="221.74490356445312"
              ></svg>

              <svg
                class="group20"
                width="785"
                height="199"
                viewBox="0 0 785 199"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M360.348 184.608L0.228559 191.004C0.228559 191.004 22.534 146.592 32.1062 144.611L385.539 148.023C385.352 149.788 384.745 151.478 383.772 152.943C379.22 159.415 374.852 166.482 360.348 184.608Z"
                  fill="url(#paint0_linear_906_3663)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  d="M7.9809 179.626C7.88055 179.625 7.78128 179.603 7.68895 179.563C7.59662 179.522 7.51292 179.463 7.44267 179.389C7.37242 179.315 7.31705 179.227 7.27957 179.131C7.24209 179.035 7.22333 178.932 7.22433 178.828C7.22473 178.635 7.2938 178.448 7.41846 178.304C7.54311 178.159 7.7146 178.067 7.90054 178.045C11.3393 178.078 347.953 172.146 363.896 173.287C364.107 173.314 364.301 173.42 364.44 173.585C364.58 173.751 364.655 173.964 364.652 174.183C364.626 174.375 364.534 174.551 364.392 174.677C364.25 174.803 364.068 174.87 363.881 174.867C347.844 173.626 11.3251 179.559 7.9809 179.626Z"
                  fill="url(#paint1_linear_906_3663)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  d="M11.3813 173.734C11.3813 173.734 10.7128 173.728 10.7175 173.234C10.6104 173.093 10.5529 172.919 10.5547 172.739C10.5564 172.56 10.6172 172.386 10.7271 172.247C13.8869 171.488 105.039 169.899 184.911 169.091C225.039 168.59 356.884 167.395 367.659 169.473C367.804 169.531 367.93 169.633 368.017 169.766C368.105 169.899 368.151 170.057 368.15 170.218C368.148 170.38 368.099 170.537 368.009 170.668C367.918 170.8 367.791 170.899 367.644 170.954C360.493 169.601 292.285 169.437 185.279 170.576C97.0946 171.501 14.1582 173.07 11.3813 173.734Z"
                  fill="url(#paint2_linear_906_3663)"
                />
                <path
                  d="M422.72 185.605L782.466 198.063C782.466 198.063 767.784 155.367 758.252 153.202L396.909 147.837C397.424 148.962 398.054 150.028 398.789 151.014C403.594 157.972 408.568 167.202 422.72 185.605Z"
                  fill="url(#paint3_linear_906_3663)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  d="M776.558 186.652C773.119 186.618 709.708 184.328 424.617 177.132L417.071 177.059C416.893 177.057 416.724 176.983 416.6 176.852C416.475 176.721 416.407 176.545 416.409 176.361C416.409 176.168 416.478 175.982 416.603 175.837C416.727 175.693 416.899 175.601 417.085 175.578L424.727 175.652C709.436 182.844 773.232 184.842 776.668 185.172C776.668 185.172 777.432 185.179 777.328 186.067C777.283 186.24 777.182 186.392 777.042 186.499C776.902 186.605 776.731 186.659 776.558 186.652Z"
                  fill="url(#paint4_linear_906_3663)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  d="M768.507 169.592C757.534 168.202 424.668 161.928 408.801 162.86C408.701 162.86 408.601 162.838 408.509 162.797C408.417 162.757 408.333 162.698 408.263 162.624C408.193 162.55 408.137 162.462 408.1 162.366C408.062 162.27 408.043 162.167 408.044 162.063C408.045 161.87 408.114 161.683 408.239 161.539C408.363 161.394 408.535 161.302 408.721 161.28C424.682 160.447 757.644 166.722 768.712 168.113C768.806 168.108 768.901 168.128 768.986 168.17C769.071 168.212 769.145 168.275 769.201 168.353C769.257 168.432 769.294 168.524 769.307 168.621C769.32 168.718 769.31 168.816 769.277 168.908C769.277 169.008 769.257 169.106 769.216 169.197C769.176 169.288 769.117 169.368 769.044 169.433C768.971 169.498 768.885 169.546 768.792 169.573C768.699 169.601 768.602 169.607 768.507 169.592Z"
                  fill="url(#paint5_linear_906_3663)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  d="M770.479 173.066C768.187 173.044 426.642 165.303 417.072 166.988C416.978 167.017 416.878 167.024 416.78 167.008C416.683 166.992 416.59 166.954 416.508 166.897C416.426 166.839 416.358 166.764 416.308 166.676C416.258 166.588 416.227 166.489 416.218 166.388C416.191 166.192 416.235 165.993 416.343 165.829C416.451 165.666 416.614 165.55 416.8 165.505C421.872 164.566 554.639 166.836 595.236 167.228C678.237 168.819 768.4 170.775 770.402 171.19C770.587 171.239 770.748 171.358 770.853 171.523C770.957 171.689 770.998 171.889 770.967 172.084C771.025 172.281 771.007 172.494 770.916 172.678C770.825 172.861 770.669 173.001 770.479 173.066Z"
                  fill="url(#paint6_linear_906_3663)"
                />
                <path
                  d="M33.4128 137.909L23.8043 143.642C23.8043 143.642 344.118 133.998 380.39 156.958C380.944 155.885 381.594 154.866 382.329 153.916C343.576 130.833 71.5415 136.698 33.4128 137.909Z"
                  fill="url(#paint7_linear_906_3663)"
                />
                <path
                  d="M760.247 154.307C760.247 154.307 432.915 138.904 403.293 159.45C400.473 154.684 393.874 145.537 393.874 145.537C490.678 111.816 593.383 100.143 694.937 111.32C720.653 129.242 760.247 154.307 760.247 154.307Z"
                  fill="url(#paint8_linear_906_3663)"
                />
                <path
                  d="M751.756 143.266C751.756 143.266 432.155 128.529 401.039 155.479C398.122 150.811 391.618 141.763 391.618 141.763C487.641 105.288 590.119 90.5854 692.098 98.6545C717.728 115.588 751.756 143.266 751.756 143.266Z"
                  fill="url(#paint9_linear_906_3663)"
                />
                <path
                  d="M750.067 140.09C754.43 143.39 751.369 143.756 751.369 143.756C751.369 143.756 488.8 119.203 400.747 155.97C400.455 155.312 400.11 154.681 399.715 154.084C469.786 119.513 709.417 135.353 750.067 140.09Z"
                  fill="url(#paint10_linear_906_3663)"
                />
                <path
                  d="M750.761 137.53C743.226 136.272 550.676 82.5778 401.599 156.768C397.775 152.2 394.368 147.276 391.424 142.057C422.109 122.567 455.589 108.227 490.614 99.5724C558.905 81.1762 658.064 71.5692 670.886 69.4222C695.326 92.345 721.054 113.759 747.933 133.553C750.873 135.852 750.761 137.53 750.761 137.53Z"
                  fill="url(#paint11_linear_906_3663)"
                />
                <path
                  d="M726.398 118.041C729.526 120.54 745.85 131.657 748.505 133.756C692.07 121.363 519.657 89.4858 399.901 154.58L398.958 153.287C428.222 130.268 537.968 82.8499 726.398 118.041Z"
                  fill="url(#paint12_linear_906_3663)"
                />
                <path
                  d="M744.052 119.989L681.77 70.0208C681.77 70.0208 487.795 74.8618 457.777 96.8857C436.359 113.164 415.812 130.632 396.227 149.212L399.906 154.086C399.906 154.086 421.509 132.968 498.775 115.054C584.177 95.6378 733.567 117.518 744.052 119.989Z"
                  fill="url(#paint13_linear_906_3663)"
                />
                <path
                  d="M744.137 121.076C736.973 121.007 516.459 74.4475 399.901 154.58L398.385 153.281C398.385 153.281 499.27 73.689 744.052 119.989C744.157 120.146 744.221 120.33 744.236 120.521C744.251 120.711 744.217 120.903 744.137 121.076Z"
                  fill="url(#paint14_linear_906_3663)"
                />
                <path
                  d="M740.102 113.533C725.17 106.675 533.023 70.5594 399.126 155.658C396.288 152.768 396.769 152.476 396.769 152.476C396.769 152.476 421.845 88.2452 504.408 65.9388C549.134 52.6901 595.453 46.0894 641.971 46.3355L740.887 111.369L740.102 113.533Z"
                  fill="url(#paint15_linear_906_3663)"
                />
                <path
                  d="M504.701 65.2504C549.349 52.1564 595.573 45.7207 641.973 46.1381L740.794 111.17C715.94 102.834 532.745 69.668 398.183 154.366C396.293 152.274 396.39 152.077 396.39 152.077C396.39 152.077 421.851 87.6528 504.701 65.2504Z"
                  fill="url(#paint16_linear_906_3663)"
                />
                <path
                  d="M734.933 94.8226L710.012 83.6226C710.012 83.6226 643.146 82.9769 617.827 83.3249C592.508 83.6728 514.704 97.8303 468.609 112.788C442.718 122.788 418.085 135.976 395.244 152.066C395.244 152.066 464.799 111.665 531.684 100.364C591.254 92.4917 651.403 90.3951 711.344 94.1012C719.184 94.8438 727.063 95.0848 734.933 94.8226Z"
                  fill="url(#paint17_linear_906_3663)"
                />
                <path
                  d="M394.241 156.993C460.698 110.934 551.711 84.1676 734.732 95.8081L734.742 94.8208C734.742 94.8208 556.354 78.2883 461.866 118.646C437.268 127.843 413.881 140.189 392.251 155.394L394.241 156.993Z"
                  fill="url(#paint18_linear_906_3663)"
                />
                <path
                  d="M734.838 94.723C719.708 88.6529 530.815 61.7508 395.249 151.573C392.314 148.78 392.795 148.488 392.795 148.488C392.795 148.488 415.78 83.1513 497.618 56.7898C541.822 41.4843 587.904 32.7538 634.478 30.8607L735.447 91.0757L734.838 94.723Z"
                  fill="url(#paint19_linear_906_3663)"
                />
                <path
                  d="M497.9 57.286C542.104 41.9806 588.185 33.2502 634.76 31.3571L735.633 91.5712C710.481 84.5157 526.336 60.6214 394.485 151.565C392.593 149.572 392.691 149.376 392.691 149.376C392.691 149.376 416.062 83.6475 497.9 57.286Z"
                  fill="url(#paint20_linear_906_3663)"
                />
                <path
                  d="M733.23 83.1556C717.998 77.6769 523.324 55.9518 394.481 151.96C391.45 149.265 392.415 148.287 392.415 148.287C392.415 148.287 414.238 84.5185 495.531 55.2885C539.331 38.5489 585.196 28.2886 631.766 24.8118L734.012 81.386L733.23 83.1556Z"
                  fill="url(#paint21_linear_906_3663)"
                />
                <path
                  d="M495.725 54.9942C539.525 38.2546 585.39 27.9943 631.96 24.5175L734.206 81.0917C708.854 74.9229 523.516 55.855 393.723 151.262C391.832 149.269 391.744 148.478 391.744 148.478C391.744 148.478 414.528 84.2251 495.725 54.9942Z"
                  fill="url(#paint22_linear_906_3663)"
                />
                <path
                  d="M721.058 57.565C706.015 52.2856 511.784 44.0912 392.664 152.14C389.728 149.545 391.93 148.973 391.93 148.973C391.93 148.973 412.537 82.6262 492.124 51.9974C535.058 34.4329 580.206 23.3308 626.186 19.0314L721.569 54.1142L721.058 57.565Z"
                  fill="url(#paint23_linear_906_3663)"
                />
                <path
                  d="M492.316 51.9006C535.09 34.375 580.08 23.304 625.899 19.0286L721.764 53.7212C696.791 47.951 509.344 39.5258 393.722 151.36C391.988 152.923 391.52 151.932 391.52 151.932C391.52 151.932 391.812 121.623 391.827 120.142C396.764 103.504 437.854 72.6024 492.316 51.9006Z"
                  fill="url(#paint24_linear_906_3663)"
                />
                <path
                  d="M401.006 158.836C404.57 155.809 425.386 146.927 475 143.457C540.387 138.954 735.047 142.314 752.015 146.131L749.556 143.541C749.556 143.541 497.457 132.813 439.069 144.689C391.785 154.106 400.747 155.97 400.747 155.97L401.006 158.836Z"
                  fill="url(#paint25_linear_906_3663)"
                />
                <path
                  d="M27.2089 147.229C27.2089 147.229 354.043 135.081 383.902 159.263C386.813 154.552 393.588 145.534 393.588 145.534C297.421 109.944 194.928 96.2904 93.1462 105.509C67.1845 122.932 27.2089 147.229 27.2089 147.229Z"
                  fill="url(#paint26_linear_906_3663)"
                />
                <path
                  d="M35.8162 136.353C35.8162 136.353 355.738 127.791 386.328 155.337C389.334 150.726 396.012 141.805 396.012 141.805C300.747 103.476 198.6 86.7976 96.5159 92.9038C70.3727 109.337 35.8162 136.353 35.8162 136.353Z"
                  fill="url(#paint27_linear_906_3663)"
                />
                <path
                  d="M37.6616 133.211C33.2361 136.427 36.1934 136.85 36.1934 136.85C36.1934 136.85 299.188 117.372 386.514 155.833C387.095 155.048 386.524 154.845 387.679 153.968C318.288 118.05 78.3005 129.259 37.6616 133.211Z"
                  fill="url(#paint28_linear_906_3663)"
                />
                <path
                  d="M37.0177 130.638C44.5754 129.526 238.127 79.56 385.743 156.615C389.625 152.097 393.123 147.242 396.2 142.103C365.897 122.024 332.701 107.04 297.849 97.7111C229.83 77.9988 130.876 66.4789 118.193 64.0856C93.3043 86.5613 67.135 107.476 39.826 126.716C36.8429 128.958 37.0177 130.638 37.0177 130.638Z"
                  fill="url(#paint29_linear_906_3663)"
                />
                <path
                  d="M61.7529 111.624C58.5768 114.061 42.0412 124.861 39.251 126.907C96.0101 115.608 268.911 87.0647 387.388 154.459C387.733 154.053 388.056 153.627 388.355 153.184C359.541 129.605 250.732 80.0765 61.7529 111.624Z"
                  fill="url(#paint30_linear_906_3663)"
                />
                <path
                  d="M43.9686 113.229L107.203 64.473C107.203 64.473 301.049 73.0586 330.637 95.6581C351.736 112.347 371.942 130.208 391.164 149.164L387.392 153.965C387.392 153.965 366.201 132.434 289.39 113.032C204.475 91.9716 54.4989 110.961 43.9686 113.229Z"
                  fill="url(#paint31_linear_906_3663)"
                />
                <path
                  d="M43.8626 114.314C51.1223 114.384 272.494 72.0919 387.387 154.459L389.024 153.191C389.024 153.191 289.599 71.6645 43.9685 113.229C43.8806 113.393 43.8258 113.574 43.8076 113.761C43.7894 113.947 43.8081 114.135 43.8626 114.314Z"
                  fill="url(#paint32_linear_906_3663)"
                />
                <path
                  d="M48.0424 106.851C63.1043 100.282 256.008 67.8846 388.141 155.552C391.034 152.717 390.56 152.416 390.56 152.416C390.56 152.416 366.729 87.713 284.611 63.8165C240.131 49.8349 193.946 42.474 147.448 41.9556L47.2954 105.067L48.0424 106.851Z"
                  fill="url(#paint33_linear_906_3663)"
                />
                <path
                  d="M284.427 63.1235C239.949 49.141 193.759 41.8127 147.263 41.3614L47.11 104.472C72.1195 96.6176 256.017 66.9961 388.918 154.276C390.753 152.22 390.659 152.022 390.659 152.022C390.659 152.022 366.543 87.1188 284.427 63.1235Z"
                  fill="url(#paint34_linear_906_3663)"
                />
                <path
                  d="M53.6674 88.2446L78.7972 77.824C78.7972 77.824 145.663 78.4696 170.97 79.3064C196.278 80.1431 273.794 95.8004 319.592 111.645C345.285 122.143 369.658 135.804 392.185 152.333C392.185 152.333 323.327 110.595 256.673 98.0046C197.266 88.9837 137.169 85.726 77.1678 88.274C69.341 88.7674 61.4924 88.7576 53.6674 88.2446Z"
                  fill="url(#paint35_linear_906_3663)"
                />
                <path
                  d="M392.999 156.981C327.54 109.648 236.965 81.1285 53.8488 89.2337L53.8583 88.2464C53.8583 88.2464 232.437 75.1607 326.128 117.336C350.567 127.02 373.741 139.814 395.116 155.422L392.999 156.981Z"
                  fill="url(#paint36_linear_906_3663)"
                />
                <path
                  d="M53.7639 88.1468C69.0091 82.37 258.386 59.1203 392.192 151.543C395.085 148.807 394.705 148.507 394.705 148.507C394.705 148.507 372.891 82.7371 291.577 54.8003C247.677 38.6442 201.772 29.0255 155.243 26.2334L53.226 84.4884L53.7639 88.1468Z"
                  fill="url(#paint37_linear_906_3663)"
                />
                <path
                  d="M291.381 55.292C247.481 39.1358 201.576 29.5173 155.047 26.7252L53.0302 84.9802C78.2184 78.4108 262.886 58.0777 392.861 151.55C394.886 149.595 394.792 149.396 394.792 149.396C394.792 149.396 372.695 83.2288 291.381 55.292Z"
                  fill="url(#paint38_linear_906_3663)"
                />
                <path
                  d="M55.4993 76.6117C70.8343 71.4281 265.891 53.4661 392.952 151.945C395.939 149.308 394.994 148.312 394.994 148.312C394.994 148.312 374.406 84.1339 293.788 53.3406C250.315 35.7735 204.658 24.6299 158.167 20.2389L54.8478 74.8282L55.4993 76.6117Z"
                  fill="url(#paint39_linear_906_3663)"
                />
                <path
                  d="M293.504 53.0416C250.035 35.4594 204.377 24.3154 157.883 19.94L54.6596 74.5302C80.0302 68.8512 265.701 53.3657 393.628 151.261C395.653 149.306 395.756 148.517 395.756 148.517C395.756 148.517 374.122 83.835 293.504 53.0416Z"
                  fill="url(#paint40_linear_906_3663)"
                />
                <path
                  d="M80.4298 37.359C95.5719 32.3711 278.34 40.5536 392.567 152.337C395.554 149.7 395.465 149.008 395.465 149.008C395.465 149.008 376.143 82.2748 297.258 50.1159C254.671 31.7269 209.746 19.7552 163.858 14.5673L79.8728 35.6752L80.4298 37.359Z"
                  fill="url(#paint41_linear_906_3663)"
                />
                <path
                  d="M301.916 42.6572C227.23 1.06039 176.489 2.44643 176.489 2.44643L80.0668 35.3809C105.051 30.0931 276.642 38.2664 392.952 152.044L393.724 151.163C395.333 152.758 395.82 151.776 395.82 151.776C396.515 143.501 396.595 135.184 396.06 126.897C394.024 110.192 357.408 73.5041 301.916 42.6572Z"
                  fill="url(#paint42_linear_906_3663)"
                />
                <path
                  d="M386.2 158.693C382.695 155.598 362.15 146.316 312.517 141.888C247.229 136.123 52.6357 135.725 35.5019 139.213L38.0102 136.67C38.0102 136.67 290.269 130.812 348.418 143.814C395.511 154.142 386.514 155.833 386.514 155.833L386.2 158.693Z"
                  fill="url(#paint43_linear_906_3663)"
                />
                <path
                  d="M386.514 155.833C375.018 149.304 344.835 129.068 247.242 124.868C175.586 122.736 103.868 124.779 32.4289 130.989L32.4079 133.16C105.016 126.157 178.006 124.421 250.843 127.963C285.972 130.672 358.142 136.009 386.007 158.888C389.458 157.737 386.514 155.833 386.514 155.833Z"
                  fill="url(#paint44_linear_906_3663)"
                />
                <path
                  style="mix-blend-mode: multiply"
                  opacity="0.5"
                  d="M388.725 154.472L392.423 117.779L393.472 117.887L394.376 152.947L388.725 154.472Z"
                  fill="url(#paint45_linear_906_3663)"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_906_3663"
                    x1="0.458291"
                    y1="167.211"
                    x2="385.604"
                    y2="170.93"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="0.04" stop-color="#DCDCDC" />
                    <stop offset="0.37" stop-color="#F6F6F6" />
                    <stop offset="0.56" stop-color="white" />
                    <stop offset="0.7" stop-color="#FBFBFB" />
                    <stop offset="0.85" stop-color="#EEEEEE" />
                    <stop offset="1" stop-color="#D9D9D9" />
                  </linearGradient>
                  <linearGradient
                    id="paint1_linear_906_3663"
                    x1="7.26436"
                    y1="174.682"
                    x2="364.614"
                    y2="178.132"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint2_linear_906_3663"
                    x1="10.6573"
                    y1="169.581"
                    x2="368.675"
                    y2="173.037"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint3_linear_906_3663"
                    x1="782.69"
                    y1="174.863"
                    x2="396.684"
                    y2="171.136"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="0.66" stop-color="white" />
                    <stop offset="1" stop-color="#D9D9D9" />
                  </linearGradient>
                  <linearGradient
                    id="paint4_linear_906_3663"
                    x1="596.88"
                    y1="184.917"
                    x2="596.955"
                    y2="177.118"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint5_linear_906_3663"
                    x1="588.543"
                    y1="167.854"
                    x2="588.591"
                    y2="162.819"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint6_linear_906_3663"
                    x1="593.859"
                    y1="171.262"
                    x2="593.904"
                    y2="166.622"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint7_linear_906_3663"
                    x1="203.293"
                    y1="155.051"
                    x2="203.471"
                    y2="136.59"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint8_linear_906_3663"
                    x1="760.43"
                    y1="135.451"
                    x2="394.292"
                    y2="131.916"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint9_linear_906_3663"
                    x1="743.592"
                    y1="122.879"
                    x2="383.396"
                    y2="126.371"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint10_linear_906_3663"
                    x1="568.075"
                    y1="153.648"
                    x2="567.843"
                    y2="132.518"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint11_linear_906_3663"
                    x1="570.865"
                    y1="158.403"
                    x2="571.733"
                    y2="68.4648"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint12_linear_906_3663"
                    x1="573.635"
                    y1="158.429"
                    x2="574.517"
                    y2="67.1093"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint13_linear_906_3663"
                    x1="687.823"
                    y1="86.2716"
                    x2="328.493"
                    y2="166.75"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D8D8D8" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint14_linear_906_3663"
                    x1="388.35"
                    y1="173.524"
                    x2="608.166"
                    y2="124.537"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint15_linear_906_3663"
                    x1="353.815"
                    y1="164.269"
                    x2="767.114"
                    y2="58.2936"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint16_linear_906_3663"
                    x1="684.844"
                    y1="76.5867"
                    x2="322.181"
                    y2="143.159"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#DBDBDB" />
                    <stop offset="0.05" stop-color="#D0D0D0" />
                    <stop offset="0.22" stop-color="#AEAEAE" />
                    <stop offset="0.31" stop-color="#A1A1A1" />
                    <stop offset="0.85" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint17_linear_906_3663"
                    x1="751.258"
                    y1="76.1222"
                    x2="494.098"
                    y2="116.05"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#636363" />
                  </linearGradient>
                  <linearGradient
                    id="paint18_linear_906_3663"
                    x1="451.857"
                    y1="96.5324"
                    x2="781.064"
                    y2="176.98"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D9D9D9" />
                    <stop offset="0.64" stop-color="#F1F1F1" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint19_linear_906_3663"
                    x1="351.508"
                    y1="160.135"
                    x2="761.678"
                    y2="37.921"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint20_linear_906_3663"
                    x1="679.303"
                    y1="58.4453"
                    x2="318.534"
                    y2="139.188"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D8D8D8" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint21_linear_906_3663"
                    x1="356.78"
                    y1="163.355"
                    x2="764.487"
                    y2="28.6863"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint22_linear_906_3663"
                    x1="682.483"
                    y1="51.1894"
                    x2="322.745"
                    y2="142.885"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#DBDBDB" />
                    <stop offset="0.04" stop-color="#D0D0D0" />
                    <stop offset="0.18" stop-color="#AEAEAE" />
                    <stop offset="0.26" stop-color="#A1A1A1" />
                    <stop offset="0.85" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint23_linear_906_3663"
                    x1="319.037"
                    y1="164.312"
                    x2="722.798"
                    y2="29.1511"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D9D9D9" />
                    <stop offset="0.64" stop-color="#F1F1F1" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint24_linear_906_3663"
                    x1="669.673"
                    y1="37.0535"
                    x2="315.873"
                    y2="129.156"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#EEEDEB" />
                    <stop offset="1" stop-color="#D3D3D3" />
                  </linearGradient>
                  <linearGradient
                    id="paint25_linear_906_3663"
                    x1="576.099"
                    y1="160.526"
                    x2="576.305"
                    y2="139.103"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="#CCCCCC" />
                  </linearGradient>
                  <linearGradient
                    id="paint26_linear_906_3663"
                    x1="27.391"
                    y1="128.373"
                    x2="393.528"
                    y2="131.908"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint27_linear_906_3663"
                    x1="44.49"
                    y1="115.221"
                    x2="404.647"
                    y2="125.67"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint28_linear_906_3663"
                    x1="219.38"
                    y1="149.373"
                    x2="220.021"
                    y2="128.251"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint29_linear_906_3663"
                    x1="216.381"
                    y1="154.98"
                    x2="217.25"
                    y2="65.0421"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint30_linear_906_3663"
                    x1="213.707"
                    y1="154.954"
                    x2="214.589"
                    y2="63.6339"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint31_linear_906_3663"
                    x1="100.934"
                    y1="80.6048"
                    x2="458.642"
                    y2="168.007"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D8D8D8" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint32_linear_906_3663"
                    x1="398.571"
                    y1="173.622"
                    x2="179.837"
                    y2="120.401"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint33_linear_906_3663"
                    x1="431.922"
                    y1="163.458"
                    x2="21.1306"
                    y2="49.3987"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint34_linear_906_3663"
                    x1="102.959"
                    y1="69.2938"
                    x2="463.945"
                    y2="142.985"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#DBDBDB" />
                    <stop offset="0.05" stop-color="#D0D0D0" />
                    <stop offset="0.22" stop-color="#AEAEAE" />
                    <stop offset="0.31" stop-color="#A1A1A1" />
                    <stop offset="0.85" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint35_linear_906_3663"
                    x1="37.7062"
                    y1="69.2324"
                    x2="294.047"
                    y2="114.118"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#B7B7B7" />
                    <stop offset="1" stop-color="#636363" />
                  </linearGradient>
                  <linearGradient
                    id="paint36_linear_906_3663"
                    x1="336.657"
                    y1="95.42"
                    x2="5.9582"
                    y2="169.496"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D9D9D9" />
                    <stop offset="0.64" stop-color="#F1F1F1" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint37_linear_906_3663"
                    x1="435.759"
                    y1="160.949"
                    x2="28.026"
                    y2="30.8372"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint38_linear_906_3663"
                    x1="109.894"
                    y1="52.9473"
                    x2="469.036"
                    y2="140.641"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D8D8D8" />
                    <stop offset="1" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint39_linear_906_3663"
                    x1="436.281"
                    y1="162.23"
                    x2="31.073"
                    y2="20.971"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint40_linear_906_3663"
                    x1="54.7783"
                    y1="77.2639"
                    x2="398.078"
                    y2="89.628"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#DBDBDB" />
                    <stop offset="0.05" stop-color="#D0D0D0" />
                    <stop offset="0.24" stop-color="#AEAEAE" />
                    <stop offset="0.34" stop-color="#A1A1A1" />
                    <stop offset="0.85" stop-color="#131112" />
                  </linearGradient>
                  <linearGradient
                    id="paint41_linear_906_3663"
                    x1="467.595"
                    y1="156.074"
                    x2="76.953"
                    y2="16.795"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#D9D9D9" />
                    <stop offset="0.64" stop-color="#F1F1F1" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint42_linear_906_3663"
                    x1="128.432"
                    y1="27.0844"
                    x2="471.447"
                    y2="123.509"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#EEEDEB" />
                    <stop offset="1" stop-color="#D3D3D3" />
                  </linearGradient>
                  <linearGradient
                    id="paint43_linear_906_3663"
                    x1="211.108"
                    y1="157.002"
                    x2="211.315"
                    y2="135.579"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="#CCCCCC" />
                  </linearGradient>
                  <linearGradient
                    id="paint44_linear_906_3663"
                    x1="32.3555"
                    y1="138.59"
                    x2="387.89"
                    y2="142.023"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#D9D9D9" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient
                    id="paint45_linear_906_3663"
                    x1="389.898"
                    y1="135.651"
                    x2="399.706"
                    y2="137.828"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset="0.18" stop-color="#CACACA" />
                    <stop offset="1" stop-color="#ACACAC" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="left-text-button">
      <div class="button2">
        <div class="rectangle-244"></div>
        <div class="learn-more">Learn more</div>
        <div class="rectangle-254"></div>
      </div>
      <div class="group-232">
        <div class="about-us">About us</div>
        <div class="experience-the-best">Experience the best</div>
      </div>
      <div
        class="lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-orem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-orem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore"
      >
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore. orem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore. orem ipsum dolor sit amet, consectetur adipiscing elit, sed
        do eiusmod tempor incididunt ut labore et dolore.
      </div>
      <div
        class="lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-orem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-orem-ipsum-dolor-sit-amet"
      >
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore. orem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore. orem ipsum dolor sit amet
      </div>
    </div>
    <div class="books">
      <div class="layer-13">
        <svg
          class="vector314"
          width="228"
          height="247"
          viewBox="0 0 228 247"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M166.587 34.4729C170.365 36.372 226.582 77.3166 226.582 77.3166L109.482 246.733C109.482 246.733 6.8885 167.623 4.28066 165.871C1.67281 164.12 166.587 34.4729 166.587 34.4729Z"
            fill="url(#paint0_linear_906_3722)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3722"
              x1="59.2172"
              y1="86.0229"
              x2="168.401"
              y2="161.491"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#AEAEAE" />
              <stop offset="1" stop-color="#BABABA" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector315"
          width="228"
          height="248"
          viewBox="0 0 228 248"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M165.087 32.7342C184.294 49.0049 204.36 64.2342 225.198 78.3566L107.639 247.405C107.639 247.405 9.0122 165.945 6.40435 164.194C3.7965 162.442 165.087 32.7342 165.087 32.7342Z"
            fill="url(#paint0_linear_906_3723)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3723"
              x1="59.531"
              y1="86.9636"
              x2="167.544"
              y2="161.622"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.59" stop-color="#A8A8A8" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector316"
          width="229"
          height="249"
          viewBox="0 0 229 249"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M165.984 32.9721C169.763 34.8712 226.358 78.2155 226.358 78.2155L108.757 248.356C108.757 248.356 9.29505 166.115 6.68721 164.363C4.07936 162.611 165.984 32.9721 165.984 32.9721Z"
            fill="url(#paint0_linear_906_3724)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3724"
              x1="193.644"
              y1="173.424"
              x2="78.7738"
              y2="106.551"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="1" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector317"
          width="227"
          height="247"
          viewBox="0 0 227 247"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M165.079 31.1721C168.858 33.0712 224.056 76.5198 224.056 76.5198L107.039 246.553C107.039 246.553 8.44044 168.219 5.71859 166.338C2.99674 164.457 165.079 31.1721 165.079 31.1721Z"
            fill="url(#paint0_linear_906_3725)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3725"
              x1="60.7585"
              y1="86.5608"
              x2="166.945"
              y2="159.957"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#A8A8A8" />
              <stop offset="1" stop-color="#C2C2C2" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector318"
          width="237"
          height="255"
          viewBox="0 0 237 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M124.526 1.94614C128.304 3.84521 232.42 85.6878 232.42 85.6878L115.227 254.429C115.227 254.429 10.2313 168.923 7.55451 167.124C4.87776 165.325 124.526 1.94614 124.526 1.94614Z"
            fill="url(#paint0_linear_906_3726)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3726"
              x1="61.3338"
              y1="87.6977"
              x2="176.168"
              y2="167.071"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#ACACAC" />
              <stop offset="1" stop-color="#C2C2C2" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector319"
          width="236"
          height="255"
          viewBox="0 0 236 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M123.065 1.03863C126.82 2.97215 231.187 83.7152 231.187 83.7152L113.553 254.494C113.553 254.494 11.2466 170.032 8.66257 168.246C6.07854 166.46 123.065 1.03863 123.065 1.03863Z"
            fill="url(#paint0_linear_906_3727)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3727"
              x1="96.198"
              y1="111.287"
              x2="185.45"
              y2="177.509"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.93" stop-color="#B0B0B0" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector320"
          width="236"
          height="255"
          viewBox="0 0 236 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M122.167 0.570478C125.946 2.46954 231.428 83.8819 231.428 83.8819L112.89 254.494C112.89 254.494 13.9796 172.634 11.3717 170.883C8.76388 169.131 122.167 0.570478 122.167 0.570478Z"
            fill="url(#paint0_linear_906_3728)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3728"
              x1="61.2948"
              y1="88.6381"
              x2="174.2"
              y2="166.678"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#B2B2B2" />
              <stop offset="1" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector321"
          width="226"
          height="247"
          viewBox="0 0 226 247"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M163.05 29.5877C166.829 31.4867 223.758 75.6731 223.758 75.6731L104.644 245.277C104.644 245.277 9.00772 167.004 6.42369 165.218C3.83966 163.431 163.05 29.5877 163.05 29.5877Z"
            fill="url(#paint0_linear_906_3729)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3729"
              x1="82.9759"
              y1="103.67"
              x2="172.747"
              y2="163.174"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.95" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector322"
          width="227"
          height="248"
          viewBox="0 0 227 248"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M164.081 30.1002C167.86 31.9993 224.217 75.6881 224.217 75.6881L104.726 247.679C104.726 247.679 10.3066 167.497 7.72261 165.711C5.13858 163.925 164.081 30.1002 164.081 30.1002Z"
            fill="url(#paint0_linear_906_3730)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3730"
              x1="60.8888"
              y1="88.2032"
              x2="169.108"
              y2="163.004"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="1" stop-color="#BABABA" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector323"
          width="235"
          height="255"
          viewBox="0 0 235 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M122.5 0.520037C126.279 2.4191 230.603 82.929 230.603 82.929L111.764 254.861C111.764 254.861 15.9749 174.599 13.4598 172.86C10.9447 171.122 122.5 0.520037 122.5 0.520037Z"
            fill="url(#paint0_linear_906_3731)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3731"
              x1="198.798"
              y1="175.202"
              x2="86.8963"
              y2="110.075"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#EEEDEB" />
              <stop offset="0.59" stop-color="#BDBDBD" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector324"
          width="235"
          height="255"
          viewBox="0 0 235 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M122.358 0.0362381C126.137 1.9353 230.657 82.5299 230.657 82.5299L110.872 253.4C110.872 253.4 17.2369 174.22 14.698 172.516C12.159 170.812 122.358 0.0362381 122.358 0.0362381Z"
            fill="url(#paint0_linear_906_3732)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3732"
              x1="61.3165"
              y1="88.496"
              x2="173.188"
              y2="165.821"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="1" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector325"
          width="229"
          height="250"
          viewBox="0 0 229 250"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M166.222 31.1236C170.001 33.0227 225.936 76.8787 225.936 76.8787L106.342 248.798C106.342 248.798 10.5733 167.328 7.9893 165.542C5.40527 163.755 166.222 31.1236 166.222 31.1236Z"
            fill="url(#paint0_linear_906_3733)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3733"
              x1="188.517"
              y1="178.968"
              x2="82.7923"
              y2="99.527"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#CFCFCF" />
              <stop offset="1" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector326"
          width="231"
          height="252"
          viewBox="0 0 231 252"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M123.08 0.579734C126.835 2.51325 227.798 79.1212 227.798 79.1212L107.268 250.699C107.268 250.699 12.2875 170.741 9.7035 168.955C7.11946 167.169 123.08 0.579734 123.08 0.579734Z"
            fill="url(#paint0_linear_906_3734)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3734"
              x1="61.9724"
              y1="88.8409"
              x2="169.64"
              y2="163.261"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="1" stop-color="#B5B5B5" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector327"
          width="203"
          height="230"
          viewBox="0 0 203 230"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M136.04 12.8665C139.795 14.8001 200.327 62.3929 200.327 62.3929L79.7548 226.151C79.7548 226.151 7.19953 167.447 4.48832 165.624C1.77711 163.801 136.04 12.8665 136.04 12.8665Z"
            fill="url(#paint0_linear_906_3735)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3735"
              x1="84.8467"
              y1="103.653"
              x2="146.002"
              y2="145.923"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.83" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector328"
          width="233"
          height="255"
          viewBox="0 0 233 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M123.412 0.636928C127.191 2.53599 229.143 81.1008 229.143 81.1008L109.303 253.817C109.303 253.817 16.5287 173.908 13.9447 172.122C11.3607 170.336 123.412 0.636928 123.412 0.636928Z"
            fill="url(#paint0_linear_906_3736)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3736"
              x1="61.9205"
              y1="89.6004"
              x2="171.105"
              y2="165.068"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.59" stop-color="#A8A8A8" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector329"
          width="232"
          height="254"
          viewBox="0 0 232 254"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M123.687 0.289764C127.466 2.18884 227.408 81.4521 227.408 81.4521L108.214 253.088C108.214 253.088 20.8065 176.684 18.1986 174.932C15.5908 173.18 123.687 0.289764 123.687 0.289764Z"
            fill="url(#paint0_linear_906_3737)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3737"
              x1="195.656"
              y1="176.817"
              x2="142.128"
              y2="143.179"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#EEEDEB" />
              <stop offset="0.09" stop-color="#E6E5E3" />
              <stop offset="0.45" stop-color="#CACAC9" />
              <stop offset="0.76" stop-color="#B9B9B9" />
              <stop offset="1" stop-color="#B3B3B3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector330"
          width="228"
          height="252"
          viewBox="0 0 228 252"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M125.374 0.807578C129.153 2.70664 223.03 77.116 223.03 77.116L102.959 251.862C102.959 251.862 18.5716 172.709 15.9638 170.957C13.3559 169.206 125.374 0.807578 125.374 0.807578Z"
            fill="url(#paint0_linear_906_3738)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3738"
              x1="63.0488"
              y1="90.977"
              x2="165.308"
              y2="161.658"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="0.85" stop-color="#C2C2C2" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector331"
          width="230"
          height="255"
          viewBox="0 0 230 255"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M126.579 0.138613C130.358 2.03768 225.301 76.6742 225.301 76.6742L103.815 254.057C103.815 254.057 16.8202 170.352 14.2123 168.601C11.6045 166.849 126.579 0.138613 126.579 0.138613Z"
            fill="url(#paint0_linear_906_3739)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3739"
              x1="191.122"
              y1="171.278"
              x2="84.2126"
              y2="109.092"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.17" stop-color="#B3B3B3" />
              <stop offset="1" stop-color="#D3D3D3" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="vector332"
          width="228"
          height="253"
          viewBox="0 0 228 253"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M127.286 0.697043C131.065 2.59611 222.437 74.6632 222.437 74.6632L101.468 252.403C101.468 252.403 17.215 168.71 14.631 166.923C12.047 165.137 127.286 0.697043 127.286 0.697043Z"
            fill="url(#paint0_linear_906_3740)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3740"
              x1="64.0055"
              y1="91.7334"
              x2="164.507"
              y2="161.2"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="#EEEDEB" />
              <stop offset="1" stop-color="#C2C2C2" />
            </linearGradient>
          </defs>
        </svg>

        <svg
          class="group21"
          width="128"
          height="94"
          viewBox="0 0 128 94"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            style="mix-blend-mode: overlay"
            d="M99.6535 78.3086L105.752 82.5237C107.797 83.6284 109.907 84.6103 112.069 85.4645C113.497 86.1972 117.605 87.9159 118.19 88.3207C118.776 88.7256 124.243 91.1293 123.559 90.351C121.003 87.5662 122.258 86.8554 16.1836 7.47787L5.26115 2.72868L99.6535 78.3086Z"
            fill="url(#paint0_linear_906_3741)"
          />
          <defs>
            <linearGradient
              id="paint0_linear_906_3741"
              x1="3.49879"
              y1="5.27839"
              x2="124.638"
              y2="89.0098"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.18" stop-color="white" />
              <stop offset="1" stop-color="white" />
            </linearGradient>
          </defs>
        </svg>
      </div>
    </div>
    <div class="_4-box">
      <div class="box-1">
        <div class="rectangle-27"></div>
        <div class="group-18">
          <div class="group-17">
            <div
              class="e-assessment-self-assessment-test-practice-quiz-one-on-one-assessment"
            >
              e-Assessment
              <br />Self-Assessment Test <br />Practice Quiz <br />One-on-one
              Assessment
            </div>
          </div>
          <div class="group-16">
            <div class="rectangle-29"></div>
            <div class="rectangle-30"></div>
            <div class="rectangle-31"></div>
            <div class="rectangle-32"></div>
          </div>
        </div>
        <div class="_360-assessment">360 ASSESSMENT</div>
        <div class="ellipse-7"></div>
        <div class="frame15">
          <svg
            class="group22"
            width="45"
            height="45"
            viewBox="0 0 45 45"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M22.5051 6.56042C21.332 6.56042 20.377 5.61578 20.377 4.44277C20.377 3.26976 21.332 2.32513 22.5051 2.32513C23.6677 2.32513 24.6227 3.26976 24.6227 4.44277C24.6227 5.61578 23.6677 6.56042 22.5051 6.56042ZM21.903 28.5466C19.0172 28.2663 16.7334 25.9307 16.4635 23.0968H12.384C11.8857 28.3286 5.48084 30.55 1.81648 26.8857C-2.07626 22.9929 0.695369 16.2871 6.20748 16.2871C9.36319 16.2871 12.0933 18.768 12.384 21.903H16.4635C16.7334 19.0691 19.0172 16.7334 21.903 16.4532V12.384C16.7853 11.8961 14.3666 5.56388 18.1141 1.81648C22.0068 -2.07626 28.7127 0.695369 28.7127 6.20748C28.7127 9.36319 26.2317 12.0829 23.0968 12.384V16.4532C25.9826 16.7334 28.2663 19.0691 28.5466 21.903H32.6158C33.1141 16.7334 39.467 14.3978 43.1833 18.1141C47.1279 22.0587 44.2109 28.7023 38.7923 28.7023C35.5846 28.7023 32.9168 26.2317 32.6158 23.0968H28.5466C28.2663 25.9307 25.9826 28.2663 23.0968 28.5466V32.6158C28.2144 33.1037 30.6331 39.4358 26.8857 43.1833C24.4981 45.5708 20.5016 45.5708 18.1141 43.1833C14.3666 39.4358 16.7853 33.1037 21.903 32.6158V28.5466ZM22.5051 17.6262C18.2386 17.6262 15.9549 22.8476 19.0483 25.9514C20.9376 27.8407 24.0622 27.8407 25.9514 25.9514C29.0448 22.8476 26.7611 17.6262 22.5051 17.6262ZM6.20748 17.4912C2.21094 17.4912 -0.176603 22.0275 2.06561 25.3078C2.99987 22.4947 9.41509 22.4947 10.3597 25.3078C12.5916 22.0275 10.2144 17.4912 6.20748 17.4912ZM3.1452 26.4601C4.92028 27.8407 7.49468 27.8407 9.26976 26.4601V26.0448C9.26976 23.8753 3.1452 23.8753 3.1452 26.0448V26.4601ZM6.20748 22.858C5.03447 22.858 4.08983 21.903 4.08983 20.73C4.08983 19.5673 5.03447 18.6123 6.20748 18.6123C7.38049 18.6123 8.32513 19.5673 8.32513 20.73C8.32513 21.903 7.38049 22.858 6.20748 22.858ZM6.20748 19.8061C4.99295 19.8061 4.99295 21.6538 6.20748 21.6538C7.42201 21.6538 7.42201 19.8061 6.20748 19.8061ZM22.5051 33.7784C21.166 33.7784 19.9099 34.3078 18.9549 35.2525C17.2317 36.9756 17.0345 39.6538 18.3528 41.6054C19.2974 38.7923 25.7023 38.7923 26.6469 41.6054C27.9653 39.6538 27.768 36.9756 26.0448 35.2525C25.1002 34.3078 23.8338 33.7784 22.5051 33.7784ZM19.4324 42.7576C21.2282 44.1383 23.7715 44.1383 25.5673 42.7576V42.332C25.5673 40.1625 19.4324 40.1625 19.4324 42.332V42.7576ZM22.5051 39.1452C21.332 39.1452 20.377 38.2006 20.377 37.0275C20.377 35.8545 21.332 34.9099 22.5051 34.9099C23.6677 34.9099 24.6227 35.8545 24.6227 37.0275C24.6227 38.2006 23.6677 39.1452 22.5051 39.1452ZM22.5051 36.1037C21.2905 36.1037 21.2905 37.9514 22.5051 37.9514C23.7092 37.9514 23.7092 36.1037 22.5051 36.1037ZM38.7923 17.4912C37.4532 17.4912 36.1971 18.0102 35.2525 18.9549C33.5293 20.6781 33.3217 23.3666 34.6504 25.3078C35.5846 22.4947 41.9999 22.4947 42.9341 25.3078C44.2628 23.3666 44.0656 20.6781 42.332 18.9549C41.3874 18.0102 40.1314 17.4912 38.7923 17.4912ZM35.73 26.4601C37.5258 27.8511 40.0587 27.8511 41.8545 26.4601V26.0448C41.8545 23.8753 35.73 23.8753 35.73 26.0448V26.4601ZM38.7923 22.858C37.6192 22.858 36.6746 21.903 36.6746 20.73C36.6746 19.5673 37.6192 18.6123 38.7923 18.6123C39.9653 18.6123 40.9099 19.5673 40.9099 20.73C40.9099 21.903 39.9653 22.858 38.7923 22.858ZM38.7923 19.8061C37.5777 19.8061 37.5777 21.6538 38.7923 21.6538C40.0068 21.6538 40.0068 19.8061 38.7923 19.8061ZM22.5051 1.19364C21.166 1.19364 19.9099 1.72305 18.9549 2.66769C17.2317 4.39087 17.0345 7.06907 18.3528 9.02063C19.2974 6.20748 25.7127 6.20748 26.6469 9.02063C28.8891 5.74035 26.5016 1.19364 22.5051 1.19364ZM22.0691 11.2006C23.3147 11.3044 24.5812 10.941 25.5673 10.1729V9.74727C25.5673 7.57772 19.4324 7.57772 19.4324 9.74727V10.1729C20.2006 10.7542 21.1141 11.1175 22.0691 11.2006ZM22.5051 3.5189C21.2905 3.5189 21.2905 5.36665 22.5051 5.36665C23.7092 5.36665 23.7092 3.5189 22.5051 3.5189Z"
              fill="#F16126"
            />
          </svg>
        </div>
      </div>
      <div class="box-1">
        <div class="rectangle-272"></div>
        <svg
          class="rectangle-28"
          width="62"
          height="39"
          viewBox="0 0 62 39"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M0 10C0 4.47715 4.47715 0 10 0H41.8213C46.8188 0 48.4442 6.71441 44 9L9.08849 32.8033C5.22943 35.4345 0 32.6707 0 28V10Z"
            fill="#F16126"
            fill-opacity="0.7"
          />
        </svg>

        <div class="group-18">
          <div class="group-17">
            <div
              class="adaptive-and-flexible-teaching-structured-lessons-for-quick-learning-24-7-classes-with-in-app-download-interactive-live-sessions"
            >
              adaptive and Flexible Teaching
              <br />Structured Lessons for Quick Learning <br />24/7 Classes
              with in-app download <br />Interactive Live sessions
            </div>
          </div>
          <div class="group-16">
            <div class="rectangle-292"></div>
            <div class="rectangle-302"></div>
            <div class="rectangle-312"></div>
            <div class="rectangle-322"></div>
          </div>
        </div>
        <div class="effective-session">effective session</div>
        <div class="group-19">
          <div class="ellipse-72"></div>
          <div class="frame16">
            <svg
              class="group23"
              width="45"
              height="37"
              viewBox="0 0 45 37"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M38.8107 24.3333H35.7688C32.3561 24.3333 29.5805 27.1098 29.5805 30.5217V34.7193C29.5805 35.818 30.4734 36.7127 31.5712 36.7127H43.0093C44.107 36.7127 45 35.8189 45 34.7193V30.5217C45 27.1098 42.2235 24.3333 38.8107 24.3333ZM43.5946 34.7202C43.5946 35.0393 43.3266 35.3082 43.0093 35.3082H31.5712C31.2486 35.3082 30.9858 35.0445 30.9858 34.7202V30.5226C30.9858 27.885 33.1321 25.7387 35.7697 25.7387H38.8116C41.4492 25.7387 43.5955 27.885 43.5955 30.5226V34.7202H43.5946ZM32.6927 18.6485C32.6927 21.1833 34.7546 23.2452 37.2894 23.2452C39.825 23.2452 41.8887 21.1833 41.8887 18.6485C41.8887 16.1129 39.8259 14.0492 37.2894 14.0492C34.7546 14.0492 32.6927 16.112 32.6927 18.6485ZM40.4824 18.6485C40.4824 20.4081 39.0498 21.8399 37.2885 21.8399C35.5289 21.8399 34.0972 20.4081 34.0972 18.6485C34.0972 16.8872 35.5289 15.4546 37.2885 15.4546C39.0498 15.4546 40.4824 16.8872 40.4824 18.6485ZM9.23291 24.3333H6.19102C2.77734 24.3333 0 27.1098 0 30.5226V34.7202C0 35.8189 0.893848 36.7136 1.99336 36.7136H13.4314C14.5292 36.7136 15.4222 35.8197 15.4222 34.7202V30.5226C15.4222 27.1098 12.6457 24.3333 9.23291 24.3333ZM14.0168 34.7202C14.0168 35.0445 13.754 35.3082 13.4314 35.3082H1.99336C1.66904 35.3082 1.40537 35.0445 1.40537 34.7202V30.5226C1.40537 27.885 3.55254 25.7387 6.19102 25.7387H9.23291C11.8705 25.7387 14.0168 27.885 14.0168 30.5226V34.7202ZM7.71152 23.2452C10.2472 23.2452 12.3108 21.1833 12.3108 18.6485C12.3108 16.1129 10.248 14.0492 7.71152 14.0492C5.17676 14.0492 3.11484 16.112 3.11484 18.6485C3.11484 21.1824 5.17676 23.2452 7.71152 23.2452ZM7.71152 15.4546C9.47285 15.4546 10.9055 16.8872 10.9055 18.6485C10.9055 20.4081 9.47285 21.8399 7.71152 21.8399C5.95195 21.8399 4.52022 20.4081 4.52022 18.6485C4.51934 16.8872 5.95107 15.4546 7.71152 15.4546ZM9.15117 10.4088H10.1101L9.9123 10.9942C9.74795 11.4872 9.92197 12.0207 10.3465 12.3222C10.5504 12.4672 10.7859 12.5393 11.0215 12.5393C11.2772 12.5393 11.533 12.454 11.7483 12.2844L14.1117 10.4088H19.3061C20.3871 10.4088 21.2669 9.52902 21.2669 8.44796V2.24728C21.2669 1.16622 20.3871 0.286438 19.3061 0.286438H9.15117C8.07012 0.286438 7.19033 1.16622 7.19033 2.24728V8.44796C7.19033 9.52989 8.07012 10.4088 9.15117 10.4088ZM8.5957 2.24728C8.5957 1.94054 8.84531 1.69181 9.15117 1.69181H19.3061C19.6128 1.69181 19.8615 1.94142 19.8615 2.24728V8.44796C19.8615 8.7547 19.6119 9.00343 19.3061 9.00343H14.0265C13.761 9.00343 13.5105 9.09132 13.3005 9.25743L11.4979 10.6883L11.5444 10.5494C11.6675 10.1873 11.6095 9.80236 11.3854 9.49034C11.1612 9.18097 10.8149 9.00343 10.4353 9.00343H9.14941C8.84268 9.00343 8.59395 8.75382 8.59395 8.44796V2.24728H8.5957ZM25.6966 10.4088H30.8909L33.2578 12.2897C33.4723 12.4558 33.7263 12.5393 33.9803 12.5393C34.2167 12.5393 34.4522 12.4672 34.6562 12.3222C35.0798 12.0207 35.2547 11.4872 35.0895 10.9915L34.8926 10.4088H35.8515C36.9325 10.4088 37.8123 9.52902 37.8123 8.44796V2.24728C37.8123 1.16622 36.9325 0.286438 35.8515 0.286438H25.6966C24.6155 0.286438 23.7357 1.16622 23.7357 2.24728V8.44796C23.7357 9.52989 24.6155 10.4088 25.6966 10.4088ZM25.1411 2.24728C25.1411 1.94054 25.3907 1.69181 25.6966 1.69181H35.8515C36.1582 1.69181 36.4069 1.94142 36.4069 2.24728V8.44796C36.4069 8.7547 36.1573 9.00343 35.8515 9.00343H34.5656C34.1868 9.00343 33.8405 9.18097 33.6146 9.4921C33.3914 9.80148 33.3343 10.1873 33.4573 10.5485L33.5048 10.6901L31.7022 9.25743C31.4921 9.09132 31.2407 9.00255 30.9735 9.00255H25.6966C25.3898 9.00255 25.1411 8.75294 25.1411 8.44708V2.24728ZM10.2876 3.91896C10.2876 3.53136 10.6022 3.21671 10.9898 3.21671H17.4674C17.8559 3.21671 18.1696 3.53136 18.1696 3.91896C18.1696 4.30655 17.855 4.6212 17.4674 4.6212H10.9898C10.6014 4.62208 10.2876 4.30743 10.2876 3.91896ZM10.2876 6.77716C10.2876 6.38868 10.6022 6.07491 10.9898 6.07491H14.4105C14.7981 6.07491 15.1128 6.38956 15.1128 6.77716C15.1128 7.16476 14.7981 7.47941 14.4105 7.47941H10.9898C10.6014 7.47941 10.2876 7.16476 10.2876 6.77716ZM26.8321 3.91896C26.8321 3.53136 27.1468 3.21671 27.5344 3.21671H34.0119C34.4004 3.21671 34.7142 3.53136 34.7142 3.91896C34.7142 4.30655 34.3995 4.6212 34.0119 4.6212H27.5344C27.1468 4.62208 26.8321 4.30743 26.8321 3.91896ZM34.715 6.77716C34.715 7.16564 34.4004 7.47941 34.0128 7.47941H30.5921C30.2045 7.47941 29.8898 7.16476 29.8898 6.77716C29.8898 6.38956 30.2045 6.07491 30.5921 6.07491H34.0128C34.4004 6.07404 34.715 6.38868 34.715 6.77716ZM22.5 24.3614C19.096 24.3614 16.3266 27.1318 16.3266 30.5375C16.3266 33.9433 19.096 36.7136 22.5 36.7136C25.9058 36.7136 28.6761 33.9433 28.6761 30.5375C28.6761 27.1318 25.9058 24.3614 22.5 24.3614ZM22.5 35.3082C19.8703 35.3082 17.7319 33.1681 17.7319 30.5375C17.7319 27.9069 19.8712 25.7668 22.5 25.7668C25.1306 25.7668 27.2707 27.9069 27.2707 30.5375C27.2707 33.1681 25.1306 35.3082 22.5 35.3082ZM25.505 28.5028C25.7792 28.7771 25.7801 29.2218 25.505 29.496L22.4332 32.5704C22.368 32.6357 22.2906 32.6874 22.2054 32.7227C22.1202 32.758 22.0288 32.7761 21.9366 32.7761C21.7503 32.7761 21.5719 32.7023 21.44 32.5704L19.4941 30.6245C19.3653 30.4922 19.2937 30.3145 19.2949 30.1299C19.2962 29.9452 19.3701 29.7684 19.5006 29.6379C19.6312 29.5073 19.808 29.4334 19.9926 29.4322C20.1773 29.431 20.355 29.5025 20.4873 29.6314L21.9357 31.0798L24.5109 28.5028C24.786 28.2286 25.2308 28.2286 25.505 28.5028Z"
                fill="#F16126"
              />
            </svg>
          </div>
        </div>
      </div>
      <div class="box-1">
        <div class="rectangle-273"></div>
        <div class="group-18">
          <div class="group-17">
            <div
              class="mentorship-sessions-by-eminent-person-guidance-sessions-by-experts-personal-monitoring-solution-oriented-counsling"
            >
              Mentorship Sessions by Eminent Person
              <br />Guidance Sessions by Experts <br />Personal Monitoring
              <br />Solution-Oriented Counsling
            </div>
          </div>
          <div class="group-16">
            <div class="rectangle-293"></div>
            <div class="rectangle-303"></div>
            <div class="rectangle-313"></div>
            <div class="rectangle-323"></div>
          </div>
        </div>
        <div class="mentorship">MENTORSHIP</div>
        <div class="ellipse-73"></div>
        <div class="frame17">
          <svg
            class="group24"
            width="45"
            height="37"
            viewBox="0 0 45 37"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M38.8107 24.3333H35.7688C32.3561 24.3333 29.5805 27.1098 29.5805 30.5217V34.7193C29.5805 35.818 30.4734 36.7127 31.5712 36.7127H43.0093C44.107 36.7127 45 35.8188 45 34.7193V30.5217C45 27.1098 42.2235 24.3333 38.8107 24.3333ZM43.5946 34.7202C43.5946 35.0393 43.3266 35.3082 43.0093 35.3082H31.5712C31.2486 35.3082 30.9858 35.0445 30.9858 34.7202V30.5226C30.9858 27.885 33.1321 25.7387 35.7697 25.7387H38.8116C41.4492 25.7387 43.5955 27.885 43.5955 30.5226V34.7202H43.5946ZM32.6927 18.6485C32.6927 21.1833 34.7546 23.2452 37.2894 23.2452C39.825 23.2452 41.8887 21.1833 41.8887 18.6485C41.8887 16.1129 39.8259 14.0492 37.2894 14.0492C34.7546 14.0492 32.6927 16.112 32.6927 18.6485ZM40.4824 18.6485C40.4824 20.4081 39.0498 21.8398 37.2885 21.8398C35.5289 21.8398 34.0972 20.4081 34.0972 18.6485C34.0972 16.8872 35.5289 15.4546 37.2885 15.4546C39.0498 15.4546 40.4824 16.8872 40.4824 18.6485ZM9.23291 24.3333H6.19102C2.77734 24.3333 0 27.1098 0 30.5226V34.7202C0 35.8188 0.893848 36.7136 1.99336 36.7136H13.4314C14.5292 36.7136 15.4222 35.8197 15.4222 34.7202V30.5226C15.4222 27.1098 12.6457 24.3333 9.23291 24.3333ZM14.0168 34.7202C14.0168 35.0445 13.754 35.3082 13.4314 35.3082H1.99336C1.66904 35.3082 1.40537 35.0445 1.40537 34.7202V30.5226C1.40537 27.885 3.55254 25.7387 6.19102 25.7387H9.23291C11.8705 25.7387 14.0168 27.885 14.0168 30.5226V34.7202ZM7.71152 23.2452C10.2472 23.2452 12.3108 21.1833 12.3108 18.6485C12.3108 16.1129 10.248 14.0492 7.71152 14.0492C5.17676 14.0492 3.11484 16.112 3.11484 18.6485C3.11484 21.1824 5.17676 23.2452 7.71152 23.2452ZM7.71152 15.4546C9.47285 15.4546 10.9055 16.8872 10.9055 18.6485C10.9055 20.4081 9.47285 21.8398 7.71152 21.8398C5.95195 21.8398 4.52022 20.4081 4.52022 18.6485C4.51934 16.8872 5.95107 15.4546 7.71152 15.4546ZM9.15117 10.4088H10.1101L9.9123 10.9941C9.74795 11.4872 9.92197 12.0207 10.3465 12.3222C10.5504 12.4672 10.7859 12.5393 11.0215 12.5393C11.2772 12.5393 11.533 12.454 11.7483 12.2844L14.1117 10.4088H19.3061C20.3871 10.4088 21.2669 9.529 21.2669 8.44795V2.24726C21.2669 1.16621 20.3871 0.286423 19.3061 0.286423H9.15117C8.07012 0.286423 7.19033 1.16621 7.19033 2.24726V8.44795C7.19033 9.52988 8.07012 10.4088 9.15117 10.4088ZM8.5957 2.24726C8.5957 1.94052 8.84531 1.69179 9.15117 1.69179H19.3061C19.6128 1.69179 19.8615 1.9414 19.8615 2.24726V8.44795C19.8615 8.75468 19.6119 9.00341 19.3061 9.00341H14.0265C13.761 9.00341 13.5105 9.0913 13.3005 9.25742L11.4979 10.6883L11.5444 10.5494C11.6675 10.1873 11.6095 9.80234 11.3854 9.49033C11.1612 9.18095 10.8149 9.00341 10.4353 9.00341H9.14941C8.84268 9.00341 8.59395 8.75381 8.59395 8.44795V2.24726H8.5957ZM25.6966 10.4088H30.8909L33.2578 12.2896C33.4723 12.4558 33.7263 12.5393 33.9803 12.5393C34.2167 12.5393 34.4522 12.4672 34.6562 12.3222C35.0798 12.0207 35.2547 11.4872 35.0895 10.9915L34.8926 10.4088H35.8515C36.9325 10.4088 37.8123 9.529 37.8123 8.44795V2.24726C37.8123 1.16621 36.9325 0.286423 35.8515 0.286423H25.6966C24.6155 0.286423 23.7357 1.16621 23.7357 2.24726V8.44795C23.7357 9.52988 24.6155 10.4088 25.6966 10.4088ZM25.1411 2.24726C25.1411 1.94052 25.3907 1.69179 25.6966 1.69179H35.8515C36.1582 1.69179 36.4069 1.9414 36.4069 2.24726V8.44795C36.4069 8.75468 36.1573 9.00341 35.8515 9.00341H34.5656C34.1868 9.00341 33.8405 9.18095 33.6146 9.49209C33.3914 9.80146 33.3343 10.1873 33.4573 10.5485L33.5048 10.69L31.7022 9.25742C31.4921 9.0913 31.2407 9.00254 30.9735 9.00254H25.6966C25.3898 9.00254 25.1411 8.75293 25.1411 8.44707V2.24726ZM10.2876 3.91894C10.2876 3.53134 10.6022 3.2167 10.9898 3.2167H17.4674C17.8559 3.2167 18.1696 3.53134 18.1696 3.91894C18.1696 4.30654 17.855 4.62119 17.4674 4.62119H10.9898C10.6014 4.62207 10.2876 4.30742 10.2876 3.91894ZM10.2876 6.77715C10.2876 6.38867 10.6022 6.0749 10.9898 6.0749H14.4105C14.7981 6.0749 15.1128 6.38955 15.1128 6.77715C15.1128 7.16474 14.7981 7.47939 14.4105 7.47939H10.9898C10.6014 7.47939 10.2876 7.16474 10.2876 6.77715ZM26.8321 3.91894C26.8321 3.53134 27.1468 3.2167 27.5344 3.2167H34.0119C34.4004 3.2167 34.7142 3.53134 34.7142 3.91894C34.7142 4.30654 34.3995 4.62119 34.0119 4.62119H27.5344C27.1468 4.62207 26.8321 4.30742 26.8321 3.91894ZM34.715 6.77715C34.715 7.16562 34.4004 7.47939 34.0128 7.47939H30.5921C30.2045 7.47939 29.8898 7.16474 29.8898 6.77715C29.8898 6.38955 30.2045 6.0749 30.5921 6.0749H34.0128C34.4004 6.07402 34.715 6.38867 34.715 6.77715ZM22.5 24.3614C19.096 24.3614 16.3266 27.1317 16.3266 30.5375C16.3266 33.9433 19.096 36.7136 22.5 36.7136C25.9058 36.7136 28.6761 33.9433 28.6761 30.5375C28.6761 27.1317 25.9058 24.3614 22.5 24.3614ZM22.5 35.3082C19.8703 35.3082 17.7319 33.1681 17.7319 30.5375C17.7319 27.9069 19.8712 25.7668 22.5 25.7668C25.1306 25.7668 27.2707 27.9069 27.2707 30.5375C27.2707 33.1681 25.1306 35.3082 22.5 35.3082ZM25.505 28.5028C25.7792 28.777 25.7801 29.2218 25.505 29.496L22.4332 32.5704C22.368 32.6356 22.2906 32.6874 22.2054 32.7227C22.1202 32.758 22.0288 32.7761 21.9366 32.7761C21.7503 32.7761 21.5719 32.7022 21.44 32.5704L19.4941 30.6245C19.3653 30.4922 19.2937 30.3145 19.2949 30.1298C19.2962 29.9452 19.3701 29.7684 19.5006 29.6378C19.6312 29.5073 19.808 29.4334 19.9926 29.4321C20.1773 29.4309 20.355 29.5025 20.4873 29.6313L21.9357 31.0798L24.5109 28.5028C24.786 28.2286 25.2308 28.2286 25.505 28.5028Z"
              fill="#F16126"
            />
          </svg>
        </div>
      </div>
      <div class="box-1">
        <div class="rectangle-274"></div>
        <div class="group-18">
          <div class="group-17">
            <div class="e-books-important-notes-into-graphics-practice-papers">
              e-Books
              <br />Important Notes <br />Into graphics <br />Practice Papers
            </div>
          </div>
          <div class="group-16">
            <div class="rectangle-294"></div>
            <div class="rectangle-304"></div>
            <div class="rectangle-314"></div>
            <div class="rectangle-324"></div>
          </div>
        </div>
        <div class="best-study-material">BEST STUDY MATERIAL</div>
        <div class="group-20">
          <div class="ellipse-74"></div>
          <div class="frame18">
            <div class="frame19">
              <svg
                class="group25"
                width="43"
                height="37"
                viewBox="0 0 43 37"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M42.7446 25.2233C42.5846 25.012 42.3693 24.889 42.1443 24.8165L42.5419 16.6917C42.5439 16.6518 42.5378 16.612 42.524 16.5745C42.5101 16.5371 42.4889 16.5028 42.4615 16.4738C42.4343 16.4447 42.4014 16.4215 42.3649 16.4054C42.3285 16.3894 42.2892 16.3808 42.2493 16.3803L39.9427 16.3514L39.9728 15.0841C39.9738 15.0445 39.9669 15.0052 39.9524 14.9684C39.9379 14.9315 39.9162 14.8979 39.8886 14.8696C39.861 14.8413 39.828 14.8188 39.7915 14.8034C39.755 14.788 39.7159 14.7801 39.6763 14.7801H39.6759L36.2443 14.783C36.2048 14.7831 36.1656 14.7911 36.1292 14.8066C36.0928 14.822 36.0598 14.8446 36.0322 14.873C36.0046 14.9013 35.983 14.9349 35.9685 14.9717C35.9541 15.0086 35.9472 15.0479 35.9481 15.0875L36.1939 24.7545L35.5158 24.7598L35.4423 23.8379C35.4404 23.8144 35.4337 23.7916 35.4226 23.7709C35.4114 23.7502 35.3961 23.732 35.3776 23.7174C35.3591 23.703 35.3378 23.6925 35.3151 23.6867C35.2923 23.681 35.2686 23.6801 35.2454 23.684L33.4217 23.9875C33.6392 23.6613 33.7891 23.309 33.8108 22.9626C33.8683 22.0486 33.4093 21.1353 32.6419 20.6362C32.2423 20.3761 31.7742 20.2393 31.3028 20.2262L29.1585 17.6886C28.9919 17.4915 28.8032 17.268 28.5405 17.1178C28.2071 16.9276 27.8224 16.9135 27.536 17.0817C27.2098 17.273 27.0366 17.687 27.1048 18.1115C27.1577 18.4416 27.3332 18.7231 27.5149 18.9782C28.0436 19.7193 28.6768 20.38 29.3947 20.9398C29.3849 20.947 29.3748 20.9545 29.3648 20.9621C29.2061 21.0819 29.0562 21.195 28.8981 21.2908C28.5208 21.5188 28.1422 21.5789 27.8856 21.4516C27.84 21.4292 27.7894 21.4191 27.7387 21.4223C27.5861 21.2839 27.4162 21.1733 27.2337 21.0981C26.662 20.862 26.0428 20.9759 25.4969 21.0763L25.3645 21.1005C22.9968 21.526 20.5035 21.1894 18.2875 20.2285C18.2863 20.2049 18.2822 20.1815 18.2753 20.1589C17.9709 19.1881 17.6102 18.2358 17.195 17.3068C17.6481 16.5762 18.3137 15.9637 19.0801 15.5763C19.0879 15.5721 19.0948 15.5664 19.1024 15.5618C19.2732 15.6824 19.4444 15.8024 19.6161 15.9217C20.0446 16.2196 20.578 16.5906 21.2007 16.6687C21.2797 16.6786 21.3588 16.6834 21.4382 16.6834C21.9129 16.6834 22.3883 16.5096 22.7469 16.1986C22.965 16.0089 23.1281 15.7845 23.2859 15.5677C23.3633 15.461 23.4365 15.3607 23.5148 15.2656C23.6874 15.056 23.9561 14.8062 24.2556 14.8056H24.2566C24.3757 14.8056 24.5073 14.8453 24.647 14.8873C24.7444 14.9168 24.8451 14.9474 24.9534 14.9686C25.3182 15.0402 25.7712 14.949 25.9595 14.5836C26.1236 14.2656 25.9898 13.9126 25.9458 13.7965C25.8897 13.6478 25.8224 13.5042 25.7571 13.3655C25.6122 13.0547 25.4747 12.7614 25.4862 12.4704C25.496 12.2133 25.6222 11.9567 25.7562 11.6858C25.7864 11.6245 25.8165 11.5634 25.8454 11.502C26.3779 10.3738 26.5169 9.05076 26.2374 7.83357C26.8923 7.36091 27.3349 6.56465 27.3811 5.69298C27.4345 4.68617 26.972 3.62226 26.1436 2.847C25.6764 2.40969 25.0997 2.04948 24.4288 1.77595C24.0929 1.6388 23.7497 1.56069 23.4184 1.48494C23.1386 1.42094 22.8742 1.36064 22.6196 1.26843C22.5247 1.23399 22.4352 1.19914 22.3485 1.16572C21.9716 1.02009 21.6157 0.882604 21.1141 0.876641C20.7396 0.872039 20.3658 0.907685 19.999 0.982965C19.7627 1.03151 19.5656 1.07484 19.4049 1.11944C19.3819 0.962305 19.3436 0.801895 19.2736 0.646692C19.1056 0.272709 18.7685 0.0194125 18.4148 0.0014398C17.9646 -0.0231676 17.606 0.313358 17.4522 0.656182C17.4309 0.703801 17.4125 0.752008 17.3965 0.800215L17.3827 0.778883C17.3273 0.693639 17.2514 0.576481 17.1284 0.490229C16.8272 0.278924 16.3746 0.36652 16.1399 0.680873C15.9661 0.913426 15.9182 1.24575 16.0123 1.56951C16.0212 1.59975 16.0307 1.62922 16.0412 1.65812L16.0337 1.6545C15.5058 1.40818 15.1925 1.53315 15.0226 1.68138C14.709 1.95534 14.7572 2.44748 14.9986 2.73547C15.0327 2.77578 15.0692 2.8129 15.1072 2.84633C14.0364 3.37291 13.1942 4.4988 12.9223 5.83667C12.7307 6.7773 12.7829 7.80208 13.0814 8.96904C13.1106 9.08326 13.1372 9.20033 13.1641 9.31741C13.3304 10.0424 13.5188 10.8642 14.33 11.2759C14.5682 11.3967 14.8254 11.4646 15.0878 11.485C14.8031 12.0443 14.4114 12.5524 13.9409 12.9671C13.8944 13.0083 13.8621 13.0631 13.8485 13.1237C13.4991 13.1607 13.1769 13.3156 12.8932 13.4665C9.44913 15.2968 6.74063 18.4901 5.44962 22.1706C5.23187 20.7309 5.00124 19.2932 4.75776 17.8576C4.67545 17.3711 4.58164 16.8196 4.29585 16.3344C3.86349 15.6002 3.03213 15.1429 2.18179 15.1717C1.36395 15.1983 0.538216 15.6933 0.173388 16.3751C-0.111655 16.9078 0.0149933 17.628 0.126525 18.2634C0.158691 18.4448 0.188505 18.6164 0.203958 18.7598C0.404416 20.6524 0.636609 22.5416 0.900441 24.4264C1.04836 25.482 1.20615 26.5361 1.37378 27.5886C1.48304 28.2743 1.63589 28.9806 2.1901 29.4199C2.53847 29.6961 2.94655 29.7922 3.36841 29.7975L3.63883 34.1237C3.65479 34.3825 3.68209 34.8156 3.99241 35.0915C4.25713 35.3266 4.60549 35.3444 4.86014 35.3444C4.88374 35.3444 4.90675 35.3444 4.92875 35.3441C5.28594 35.3418 5.63959 35.326 5.9815 35.3109C6.31869 35.2958 6.66714 35.2804 7.01392 35.2781C7.05959 35.2776 7.10451 35.2663 7.1451 35.2454L7.26419 35.243L15.4028 35.0547L15.4232 36.2335C15.4245 36.3061 15.4523 36.3757 15.5014 36.4292C15.5506 36.4827 15.6176 36.5164 15.6898 36.5238C16.1459 36.5703 16.6032 36.5937 17.0605 36.5937C17.2714 36.5937 17.4827 36.5881 17.6934 36.5782C17.7049 36.5808 17.7166 36.5822 17.7285 36.5822C17.7455 36.5822 17.7626 36.5786 17.7793 36.5736C18.3252 36.5445 18.8694 36.4827 19.4091 36.3873C19.4804 36.3749 19.5447 36.3367 19.5898 36.2801C19.6349 36.2234 19.6577 36.1522 19.6539 36.0799L19.339 29.9871C19.9403 29.9911 20.5393 30.0002 21.1302 30.0098C21.7436 30.0196 22.3774 30.0297 23.0011 30.0333L36.9517 30.1156L36.6371 35.911C36.6325 35.9913 36.6614 36.07 36.7162 36.1294C36.7434 36.1585 36.7763 36.1819 36.8127 36.1981C36.8492 36.2144 36.8885 36.2231 36.9284 36.2239L40.4964 36.283H40.5013C40.5788 36.283 40.6536 36.2525 40.709 36.198C40.7372 36.1705 40.7595 36.1376 40.7749 36.1013C40.7902 36.0651 40.7981 36.0261 40.7982 35.9867L40.8104 30.1383L42.6213 30.1492H42.623C42.7006 30.1492 42.7751 30.1188 42.8306 30.0645C42.8861 30.0103 42.9181 29.9364 42.9198 29.8588L42.9976 26.3593C43.0045 26.049 43.0147 25.5806 42.7446 25.2233H42.7446ZM39.9286 16.9453L41.934 16.9701L41.8661 18.3546L39.8931 18.4242L39.9286 16.9453ZM39.8852 18.7641L41.8496 18.6948L41.6489 22.7966L39.7868 22.8753L39.8852 18.7641ZM39.7786 23.2152L41.6321 23.1368L41.5548 24.719C41.4508 24.7147 41.3468 24.7133 41.2428 24.7148L39.7425 24.7266L39.7786 23.2152ZM39.3721 15.3742L39.3403 16.7074L36.5862 16.8314L36.5495 15.3765L39.3721 15.3742ZM39.1576 23.6223C39.1559 23.6223 39.1547 23.6223 39.1534 23.6226L36.7604 23.6818L36.6227 18.2644L39.3075 18.0863L39.1753 23.6243C39.1694 23.6236 39.1636 23.6223 39.1576 23.6223ZM39.1671 23.9609L39.1488 24.7312L36.7876 24.7495L36.7692 24.0205L39.1615 23.9616C39.1635 23.9616 39.1651 23.9613 39.1671 23.9609ZM36.6141 17.9249L36.5948 17.1707L39.3321 17.0472L39.3153 17.7457L36.6141 17.9249ZM35.1188 24.0489L35.1759 24.7624L32.7151 24.7814C32.8577 24.6571 32.992 24.5236 33.1173 24.3818L35.1188 24.0489ZM27.9985 18.6335C27.8683 18.4507 27.7262 18.2371 27.6911 18.0173C27.6629 17.8409 27.7252 17.6587 27.8364 17.5935C27.9369 17.5344 28.1012 17.5506 28.2463 17.6332C28.4178 17.7313 28.5637 17.9042 28.7051 18.0715L28.7468 18.1207L28.0612 18.7174C28.0405 18.6892 28.0188 18.6621 27.9985 18.6335ZM28.4312 19.1919C28.3753 19.1248 28.3205 19.0569 28.2668 18.9881L28.9656 18.3799L29.1201 18.5626L28.4312 19.1919ZM28.6546 19.4471L29.339 18.8217L29.5725 19.0983L28.8879 19.6941C28.8086 19.6132 28.7308 19.5309 28.6546 19.4471ZM29.1313 19.9323L29.7917 19.3575L30.5908 20.3033C30.4012 20.3509 30.2163 20.4185 30.0413 20.5097C29.9957 20.5333 29.9525 20.5592 29.9088 20.5848C29.6373 20.3824 29.3777 20.1645 29.1313 19.9323ZM29.2054 21.799C29.3898 21.6871 29.5594 21.5595 29.7231 21.4354C29.9226 21.2849 30.1112 21.1425 30.3152 21.0362C30.9314 20.716 31.7361 20.7547 32.3182 21.1337C32.9002 21.5123 33.262 22.2324 33.2186 22.9252C33.1849 23.4632 32.5222 24.3681 31.6856 24.7738C31.6763 24.7784 31.6685 24.7843 31.6597 24.7896L28.5451 24.8139C28.6084 24.5294 28.5979 24.2418 28.5903 24.0331C28.5704 23.5035 28.55 22.956 28.3715 22.4226C28.3358 22.3158 28.2933 22.2113 28.2442 22.11C28.5513 22.0995 28.881 21.9948 29.2054 21.799ZM27.0074 21.6467C27.3604 21.7924 27.6524 22.1438 27.8086 22.6109C27.9598 23.0633 27.9785 23.5675 27.9968 24.0554C28.0106 24.4268 28.007 24.807 27.8042 25.0173C27.6343 25.1937 27.3348 25.2413 27.0173 25.2785C26.7282 25.3122 26.4281 25.345 26.1187 25.3756C26.2788 24.1259 26.1276 22.8228 25.6834 21.6454C26.1466 21.5612 26.6193 21.4867 27.0074 21.6467ZM25.3428 21.7051C25.7946 22.8704 25.9448 24.1685 25.7726 25.4076C25.4764 25.4339 25.1725 25.4569 24.8622 25.4759C25.0633 24.2604 24.9764 22.9816 24.6106 21.8062C24.8556 21.7799 25.0998 21.7462 25.3428 21.7051ZM25.3087 11.2488C25.2811 11.3067 25.2526 11.3649 25.2241 11.423C25.0758 11.7235 24.9081 12.0637 24.893 12.4472C24.8763 12.8825 25.0509 13.2559 25.2198 13.6167C25.2828 13.7515 25.3424 13.8788 25.391 14.0068C25.4602 14.1898 25.4518 14.2735 25.432 14.3116C25.3943 14.3844 25.2306 14.4179 25.0675 14.3857C24.9886 14.3702 24.9062 14.3454 24.8189 14.3191C24.6522 14.2686 24.4637 14.2118 24.2569 14.2118H24.2543C23.8347 14.2128 23.4207 14.4464 23.0569 14.8879C22.967 14.9968 22.8853 15.1094 22.8059 15.2183C22.6612 15.4171 22.5247 15.6051 22.3578 15.7501C22.0648 16.0047 21.6603 16.1274 21.2748 16.0795C20.7972 16.0194 20.35 15.7084 19.9554 15.4342C19.1397 14.867 18.2967 14.2804 17.5848 13.5799C16.8558 12.8628 16.3536 12.1069 16.0888 11.3308C16.3855 11.2148 16.6571 11.0428 16.889 10.8243C17.0382 10.9627 17.2064 11.0571 17.383 11.0989C17.5858 11.1468 17.8974 11.1487 18.2294 10.8856C18.26 10.8613 18.2855 10.8314 18.3044 10.7973C18.3234 10.7632 18.3354 10.7258 18.3399 10.6871C18.3444 10.6483 18.3412 10.6091 18.3305 10.5716C18.3198 10.5341 18.3019 10.4991 18.2776 10.4686C18.2534 10.438 18.2234 10.4126 18.1894 10.3936C18.1553 10.3747 18.1179 10.3626 18.0791 10.3581C18.0404 10.3536 18.0012 10.3568 17.9637 10.3675C17.9262 10.3782 17.8912 10.3962 17.8607 10.4204C17.7422 10.5145 17.6304 10.5477 17.5194 10.5212C17.3449 10.4801 17.1671 10.297 17.0432 10.0324C16.8188 9.55139 17.0208 8.95401 17.321 8.57507C17.5726 8.25744 17.8862 8.05437 18.2038 8.00288C18.5342 7.94972 18.8829 8.08787 19.0332 8.33227C19.2287 8.65049 19.1122 9.10157 19.0256 9.34201C18.9748 9.48277 18.9141 9.62084 18.8498 9.76655C18.7333 10.0307 18.6132 10.304 18.5503 10.6054C18.4522 11.0736 18.5198 11.7438 19.0312 12.0938C19.2192 12.2224 19.4298 12.2789 19.6424 12.2789C20.1056 12.2789 20.5783 12.0099 20.8492 11.63C21.183 11.1612 21.2706 10.6074 21.3548 10.072L21.3713 9.96963C21.4457 9.50545 21.5527 8.98248 21.8821 8.65611C22.2016 8.33983 22.7271 8.20495 23.4876 8.24274C23.6188 8.24963 23.7511 8.25945 23.8829 8.26928C24.4236 8.30959 24.982 8.35133 25.5301 8.1863C25.5853 8.16951 25.6394 8.14985 25.6929 8.1292C25.8953 9.17245 25.7614 10.2895 25.3087 11.2488ZM14.5987 10.7461C14.0354 10.4608 13.8934 9.84105 13.7432 9.18488C13.7159 9.06345 13.687 8.94239 13.6565 8.82173C13.381 7.74371 13.3311 6.80577 13.504 5.95509C13.7379 4.80719 14.5695 3.50577 15.9011 3.18596C16.0281 3.15505 16.1199 3.0452 16.1279 2.91494C16.1359 2.78468 16.0574 2.66433 15.9349 2.61906C15.7588 2.55339 15.559 2.47931 15.4537 2.35367C15.3887 2.27624 15.3812 2.15681 15.4134 2.1286C15.4523 2.0945 15.5845 2.09971 15.7827 2.19226L15.8122 2.20637C16.05 2.3179 16.3758 2.47041 16.7114 2.34116C16.7954 2.30866 16.8604 2.23954 16.8876 2.15354C16.9148 2.06754 16.9014 1.97373 16.8512 1.8989C16.7433 1.73815 16.6317 1.57186 16.5828 1.40389C16.5412 1.2602 16.5536 1.11919 16.616 1.03579C16.6616 0.974735 16.7567 0.95441 16.7882 0.976162C16.8164 0.996067 16.8545 1.05486 16.885 1.10172L17.3394 1.80383C17.374 1.85707 17.4247 1.89782 17.4842 1.92013C17.5436 1.94244 17.6087 1.94512 17.6698 1.92779C17.7309 1.9105 17.7848 1.87404 17.8236 1.82377C17.8624 1.77351 17.884 1.71211 17.8853 1.64863C17.8912 1.38718 17.897 1.1165 17.9945 0.898981C18.0653 0.741174 18.2229 0.588239 18.3846 0.594201C18.5145 0.600752 18.6575 0.72253 18.7327 0.889826C18.8215 1.08761 18.8356 1.33436 18.8492 1.57254V1.57312C18.8513 1.61208 18.8611 1.65024 18.878 1.68541C18.8949 1.72057 18.9186 1.75205 18.9477 1.77803C18.9768 1.80401 19.0107 1.82399 19.0476 1.8368C19.0844 1.84962 19.1235 1.85502 19.1624 1.85271C19.2357 1.84863 19.3048 1.8175 19.3563 1.76536C19.4875 1.71229 19.8825 1.61285 20.1188 1.5643C20.4435 1.49771 20.7765 1.46462 21.1078 1.47016C21.5021 1.47478 21.7814 1.5827 22.1347 1.71917C22.2252 1.75428 22.3187 1.79031 22.4177 1.82608C22.7068 1.93106 23.0014 1.99834 23.2865 2.06326C23.6093 2.13674 23.9138 2.20662 24.2051 2.32546C24.8087 2.57153 25.3244 2.8926 25.7385 3.28011C26.4406 3.9372 26.8332 4.82727 26.789 5.66115C26.7518 6.3599 26.3791 7.01145 25.8483 7.37795C25.8356 7.37963 25.8231 7.38089 25.8106 7.38451C25.7454 7.40273 25.6886 7.44312 25.6499 7.49872C25.5568 7.54707 25.4596 7.58679 25.3593 7.61739C24.9164 7.75059 24.4357 7.71482 23.9272 7.67677C23.7908 7.6661 23.6543 7.65703 23.5178 7.64956C22.5798 7.60203 21.909 7.79359 21.4641 8.23384C21.0294 8.66493 20.8808 9.27743 20.785 9.87548L20.7686 9.97912C20.6915 10.4683 20.6187 10.9302 20.3658 11.2848C20.1394 11.6031 19.6636 11.8068 19.3662 11.6034C19.1135 11.4305 19.0663 11.0385 19.1313 10.7268C19.1817 10.486 19.2845 10.2527 19.393 10.0057C19.4586 9.85709 19.5266 9.70289 19.584 9.54316C19.7343 9.12685 19.8484 8.52451 19.5387 8.02128C19.2989 7.63083 18.8425 7.39693 18.3541 7.39693C18.273 7.39693 18.1911 7.40315 18.109 7.41667C17.6448 7.49175 17.1996 7.77226 16.8558 8.20596C16.3512 8.84306 16.2138 9.6583 16.5057 10.2832C16.5146 10.303 16.5241 10.3223 16.534 10.3413C15.9943 10.8879 15.2073 11.0545 14.5987 10.7461ZM15.6144 11.7582C15.9247 12.5387 16.4454 13.292 17.1685 14.0031C17.6054 14.4332 18.0828 14.8168 18.5706 15.1777C17.9207 15.5516 17.3456 16.0693 16.9037 16.6769C16.5234 15.8818 16.1033 15.1065 15.6449 14.3539C15.3683 13.9005 15.0252 13.4307 14.5361 13.2237C14.9728 12.797 15.337 12.302 15.6144 11.7582ZM3.46919 29.2169C3.14308 29.2262 2.82519 29.166 2.5588 28.9548C2.17196 28.648 2.05094 28.0657 1.95999 27.4951C1.79295 26.4463 1.63572 25.3959 1.48833 24.3441C1.22558 22.4659 0.994143 20.5835 0.794116 18.6975C0.776732 18.5338 0.745237 18.3527 0.711476 18.1609C0.620941 17.6467 0.508737 17.007 0.69703 16.655C0.843331 16.3811 1.0805 16.2518 1.33615 16.0982C1.62875 15.9221 1.83309 15.7771 2.20153 15.765C2.21891 15.7643 2.2363 15.764 2.25402 15.764C2.86458 15.764 3.47473 16.1095 3.78446 16.6357C4.01475 17.0263 4.09873 17.5207 4.17289 17.9568C4.48659 19.8074 4.77923 21.6615 5.05078 23.5187C5.04683 23.5649 5.05406 23.6103 5.0701 23.6516C5.26007 24.9534 5.4398 26.2551 5.60751 27.551C5.65572 27.924 5.68427 28.2531 5.54704 28.4981C5.36077 28.8314 4.89818 28.9583 4.44021 29.0598C4.13837 29.1267 3.7995 29.2074 3.46919 29.2168V29.2169ZM4.92447 34.7506C4.70401 34.752 4.49665 34.7451 4.38672 34.648C4.26897 34.543 4.24537 34.3133 4.23126 34.0867C4.19716 33.547 4.16365 33.0074 4.12989 32.4677C4.10554 32.0767 4.13577 31.702 4.0984 31.3119C4.04817 30.7932 3.99308 30.2746 3.96024 29.7542C4.16626 29.7248 4.37093 29.6834 4.56846 29.6394C4.65543 29.6203 4.74206 29.5996 4.82831 29.5775C4.71745 30.8192 4.79354 32.0848 4.89096 33.3248C4.92606 33.7714 4.99107 34.2799 5.31945 34.6641C5.34212 34.6909 5.36631 34.7159 5.39092 34.7401C5.2358 34.7458 5.08026 34.7494 4.92447 34.7506ZM10.5373 34.5217C10.5315 34.5384 10.5284 34.5559 10.5281 34.5735L7.25042 34.6493C6.69956 34.6627 6.08387 34.6451 5.77086 34.2786C5.5583 34.03 5.51202 33.6481 5.48313 33.2783C5.37622 31.9165 5.30038 30.6777 5.44735 29.3546C5.69864 29.227 5.91884 29.0502 6.06514 28.7881C6.30954 28.3518 6.24395 27.8449 6.19599 27.4749C6.02594 26.1617 5.84517 24.85 5.6537 23.5397C6.69175 19.5095 9.497 15.9438 13.172 13.9905C13.4643 13.8353 13.8022 13.6729 14.1103 13.7162C14.5443 13.7766 14.8733 14.229 15.1381 14.663C16.1402 16.3079 16.9538 18.0604 17.5634 19.8874C16.2951 19.2398 15.1387 18.3803 14.1781 17.3354C14.1248 17.2775 14.0506 17.2431 13.9719 17.2398C13.8932 17.2366 13.8165 17.2647 13.7585 17.318C13.7007 17.3713 13.6664 17.4454 13.6631 17.524C13.6599 17.6026 13.6879 17.6793 13.7411 17.7373C16.3703 20.5961 20.3936 22.1366 24.2648 21.8384C24.6411 23.0066 24.7281 24.2858 24.5151 25.4953C22.9204 25.5731 21.1791 25.5226 19.4859 25.1493C19.443 25.1247 19.3946 25.1113 19.3452 25.1102C19.3337 25.1102 19.3225 25.1102 19.3111 25.1098C19.2326 25.0915 19.1539 25.0725 19.0755 25.0527C18.9098 25.0107 18.7412 24.9685 18.5702 24.9259C16.0343 24.2913 13.1598 23.5726 11.9795 21.4814C11.8988 21.3384 11.7176 21.2885 11.5749 21.3689C11.4323 21.4493 11.3818 21.6304 11.4624 21.7731C11.6436 22.0943 11.861 22.3846 12.1061 22.6503C10.7558 24.5367 10.1033 26.9277 10.3142 29.2382C10.3611 29.75 10.4484 30.2716 10.533 30.7765C10.7542 32.0956 10.9632 33.342 10.5373 34.5217ZM10.8795 34.5656C11.302 33.3227 11.0822 32.0002 10.8677 30.7204C10.784 30.2218 10.6977 29.7064 10.6521 29.207C10.4504 26.9965 11.0667 24.7093 12.3473 22.8961C13.5224 24.0135 15.2299 24.6391 16.8863 25.101C16.5848 25.1017 16.2866 25.1027 15.9917 25.1039C14.9245 25.1079 13.8208 25.1122 12.6441 25.0974H12.6405C12.5643 25.0975 12.491 25.1268 12.4358 25.1794C12.3806 25.2319 12.3477 25.3037 12.3439 25.3798L12.1415 29.4839C12.1379 29.5578 12.162 29.6304 12.2091 29.6874C12.2562 29.7444 12.3229 29.7819 12.3961 29.7923C13.3639 29.9309 14.3391 30.0106 15.3165 30.0311L15.3926 34.461L10.8795 34.5656ZM18.9692 36.0059L18.6139 36.0068C17.7265 36.0102 16.8393 36.0131 15.952 36.0164C15.9674 34.0221 15.9441 32.032 15.91 30.037C16.7597 30.0348 17.6015 30.2693 18.4361 30.0101C18.5155 29.9855 18.6038 29.9577 18.6788 29.9938C18.9239 30.1112 18.8258 30.6479 18.8275 30.8512C18.8314 31.3411 18.8177 31.823 18.854 32.3132C18.9469 33.5618 19.003 34.7553 18.9692 36.0059ZM40.2133 31.8447C40.2124 32.4152 40.211 32.9847 40.2097 33.5542C40.208 34.2641 40.2064 34.9738 40.2051 35.6844C39.8941 35.6794 37.2532 35.598 37.2585 35.6404C37.205 35.1926 37.5521 30.1191 37.5465 30.1191C38.077 30.1224 38.6035 30.1801 39.1323 30.2132C39.508 30.2372 39.8422 30.126 40.2169 30.1351C40.2152 30.7037 40.2146 31.2752 40.2133 31.8447ZM42.5268 26.7752C42.4415 27.7039 42.3529 28.6247 42.3326 29.5539C42.0721 29.5539 41.811 29.5505 41.5501 29.5492C38.675 29.5322 35.8006 29.5076 32.928 29.5076C29.3538 29.5076 25.7838 29.3163 22.2058 29.3763C20.6135 29.4029 19.021 29.4584 17.4283 29.436C15.8607 29.4144 14.3117 29.4478 12.7479 29.2419C12.8061 28.0592 12.8646 26.8769 12.923 25.6944C14.0223 25.7054 15.125 25.6961 16.224 25.7306C17.0537 25.7565 17.8607 25.5822 18.7019 25.6505C19.6004 25.7237 20.4862 25.8999 21.3811 26.0009C22.5762 26.1361 23.8242 26.1396 25.019 26.1108C26.2223 26.0819 27.3545 25.5993 28.5391 25.4425C29.0841 25.3703 29.6359 25.3674 30.1857 25.3644C32.2974 25.3536 34.4095 25.3464 36.5216 25.3366C37.5888 25.3316 38.656 25.3264 39.7231 25.3195C40.2015 25.3162 40.6781 25.3234 41.1509 25.3454C41.5537 25.3641 42.0032 25.3005 42.3093 25.6289C42.4872 25.8192 42.5412 26.0763 42.5471 26.3427C42.5507 26.4874 42.5399 26.6344 42.5268 26.7752Z"
                  fill="#F16126"
                />
                <path
                  d="M18.3578 8.63434C18.1793 8.45193 17.9064 8.39381 17.6944 8.49392C17.6543 8.51347 17.6235 8.54803 17.6086 8.59014C17.5938 8.63224 17.5962 8.67849 17.6152 8.71887C17.6342 8.75925 17.6684 8.79051 17.7103 8.80587C17.7522 8.82124 17.7985 8.81947 17.8391 8.80097C17.9198 8.76292 18.0386 8.79307 18.115 8.87118C18.1935 8.95155 18.2393 9.0782 18.2439 9.22744C18.2459 9.28715 18.2417 9.34854 18.2334 9.41052C18.1434 9.36705 18.0439 9.34706 17.9441 9.35241C17.7249 9.36391 17.5238 9.50005 17.4314 9.69884C17.422 9.71902 17.4167 9.74086 17.4157 9.76309C17.4148 9.78533 17.4182 9.80753 17.4259 9.82844C17.4335 9.84934 17.4452 9.86853 17.4603 9.88491C17.4754 9.9013 17.4935 9.91455 17.5137 9.92392C17.537 9.93476 17.5613 9.93996 17.5852 9.93996C17.6176 9.93995 17.6493 9.93068 17.6765 9.91326C17.7038 9.89583 17.7255 9.87097 17.7391 9.84162C17.7782 9.75797 17.8696 9.6959 17.9622 9.69103C18.0566 9.68473 18.1525 9.7379 18.2 9.81701C18.2176 9.84608 18.2434 9.86924 18.2742 9.8835C18.305 9.89777 18.3394 9.90248 18.3729 9.89705C18.4064 9.89143 18.4374 9.87593 18.462 9.85253C18.4866 9.82914 18.5037 9.79893 18.511 9.76578C18.5494 9.59059 18.5891 9.40952 18.5832 9.2166C18.5757 8.98237 18.4956 8.77535 18.3578 8.63434ZM31.0159 21.4756C31.1155 21.4456 31.2324 21.4626 31.3199 21.5191C31.364 21.5484 31.4014 21.5867 31.4298 21.6315C31.4582 21.6762 31.4769 21.7264 31.4847 21.7788C31.4876 21.8009 31.4948 21.8222 31.5059 21.8414C31.5171 21.8607 31.5319 21.8776 31.5496 21.8911C31.5672 21.9046 31.5874 21.9146 31.6089 21.9203C31.6304 21.926 31.6528 21.9275 31.6749 21.9245C31.7195 21.9186 31.76 21.8952 31.7874 21.8594C31.8147 21.8237 31.8268 21.7785 31.8209 21.7339C31.8068 21.6329 31.7712 21.536 31.7166 21.4498C31.662 21.3637 31.5896 21.2901 31.5043 21.2342C31.4183 21.1792 31.3216 21.1433 31.2206 21.1289C31.1195 21.1145 31.0166 21.1219 30.9187 21.1506C30.8973 21.157 30.8775 21.1675 30.8602 21.1815C30.8429 21.1956 30.8286 21.2129 30.818 21.2325C30.8075 21.2521 30.8009 21.2736 30.7986 21.2957C30.7963 21.3179 30.7985 21.3403 30.8049 21.3616C30.8178 21.4047 30.8472 21.4409 30.8868 21.4623C30.9263 21.4837 30.9727 21.4884 31.0159 21.4756ZM32.0197 22.4855C32.1831 22.5202 32.3101 22.7023 32.2858 22.8677C32.2808 22.9115 32.293 22.9556 32.3199 22.9906C32.3469 23.0256 32.3864 23.0487 32.43 23.055C32.4737 23.0614 32.5182 23.0505 32.5539 23.0246C32.5897 22.9988 32.614 22.96 32.6217 22.9166C32.6713 22.5747 32.4281 22.2254 32.0906 22.1535C32.0688 22.1488 32.0463 22.1485 32.0244 22.1525C32.0025 22.1566 31.9815 22.1649 31.9628 22.177C31.9441 22.1892 31.928 22.2048 31.9154 22.2232C31.9027 22.2416 31.8938 22.2622 31.8892 22.284C31.8845 22.3058 31.8842 22.3283 31.8882 22.3502C31.8923 22.3722 31.9006 22.3931 31.9127 22.4118C31.9248 22.4305 31.9405 22.4466 31.9589 22.4593C31.9773 22.4719 31.9979 22.4808 32.0197 22.4855Z"
                  fill="#F16126"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner">
    <div class="rectangle-22"></div>
    <img class="image-12" src="image-12.png" /><img
      class="image-14"
      src="image-14.png"
    />
    <div class="left-text-button2">
      <div class="button3">
        <div class="rectangle-245"></div>
        <div class="skill-enrichment-program">Skill Enrichment Program</div>
        <div class="rectangle-255"></div>
      </div>
      <div class="button2">
        <div class="rectangle-246"></div>
        <div class="school-registration">School Registration</div>
        <div class="rectangle-256"></div>
      </div>
      <div class="online-education">ONLINE EDUCATION</div>
      <div class="devalaya-e-learn-the-skills-you-need-to-succeed">
        Devalaya E-Learn The<br />Skills You Need<br />To Succeed
      </div>
      <div
        class="the-implementation-of-national-education-policy-2020-a-proud-partner-in-nation-building-through-skill-india-self-reliant-india"
      >
        The implementation of National Education Policy 2020. A proud partner in
        nation-building through Skill India – Self reliant India.
      </div>
    </div>
    <div class="right-img">
      <div class="shape">
        <div class="ellipse-1"></div>
        <div class="ellipse-2"></div>
        <div class="ellipse-3"></div>
      </div>
      <img
        class="wepik-export-202308211338275-diz-1"
        src="wepik-export-202308211338275-diz-1.png"
      />
      <div class="all-btn-img">
        <div class="skills">
          <div class="rectangle-247"></div>
          <div class="skills2">skills</div>
          <div class="ellipse-5"></div>
        </div>
        <div class="innovation">
          <div class="rectangle-248"></div>
          <div class="innovation2">innovation</div>
          <div class="ellipse-6"></div>
        </div>
        <div class="achievement">
          <div class="rectangle-249"></div>
          <div class="achievement2">achievement</div>
          <div class="ellipse-62"></div>
        </div>
        <div class="knowledge">
          <div class="rectangle-2410"></div>
          <div class="knowledge2">knowledge</div>
          <div class="ellipse-4"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="head">
    <img class="image-13" src="image-13.png" />
    <div class="home-about-us-courses-careers-library-contact-us">
      <span
        ><span class="home-about-us-courses-careers-library-contact-us-span">
        </span
        ><span class="home-about-us-courses-careers-library-contact-us-span2"
          >Home</span
        ><span class="home-about-us-courses-careers-library-contact-us-span3">
          About Us Courses + Careers + Library Contact Us</span
        ></span
      >
    </div>
    <div class="button2">
      <div class="rectangle-2411"></div>
      <div class="rectangle-257"></div>
      <div class="school-registration2">School Registration</div>
    </div>
  </div>
</div>

    </body>
    <style>
        .home-page,
.home-page * {
  box-sizing: border-box;
}
.home-page {
  background: #ffffff;
  width: 1920px;
  height: 5248px;
  position: relative;
  overflow: hidden;
}
.footer-sec {
  position: absolute;
  inset: 0;
}
.rectangle-45 {
  background: #ffffff;
  width: 1920px;
  height: 574px;
  position: absolute;
  left: 0px;
  top: 4674px;
}
.footer-bg-1-1 {
  opacity: 0.800000011920929;
  width: 1935.58px;
  height: 497px;
  position: absolute;
  left: 0px;
  top: 4673px;
}
.bottom-footer {
  width: 1586px;
  height: 16px;
  position: static;
}
.copyright-2023-annexlogics-designed-by-annexlogics {
  text-align: left;
  font: 400 14px "Roboto", sans-serif;
  position: absolute;
  left: 168px;
  top: 5204px;
}
.copyright-2023-annexlogics-designed-by-annexlogics-span {
  color: #000000;
  font: 400 14px "Roboto", sans-serif;
}
.copyright-2023-annexlogics-designed-by-annexlogics-span2 {
  color: #f16126;
  font: 400 14px "Roboto", sans-serif;
}
.copyright-2023-annexlogics-designed-by-annexlogics-span3 {
  color: #000000;
  font: 400 14px "Roboto", sans-serif;
}
.privacy-policy-terms-of-use {
  color: #000000;
  text-align: left;
  font: 400 14px "Roboto", sans-serif;
  position: absolute;
  left: 1560px;
  top: 5204px;
}
.mid-footer {
  width: 1588px;
  height: 331px;
  position: static;
}
.group-30 {
  width: 381px;
  height: 194px;
  position: static;
}
.devalaya-e-learn-is-an-ed-tech-start-up-recognized-by-the-ministry-of-commerce-industry-govt-of-india-and-led-by-a-team-of-seasoned-professionals {
  color: #555555;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 168px;
  top: 4977px;
}
.image-16 {
  width: 171px;
  height: 51px;
  position: absolute;
  left: 164px;
  top: 4901px;
}
.link {
  width: 219px;
  height: 229px;
  position: static;
}
.all-courses {
  color: #f16126;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 573px;
  top: 4965px;
}
.forms-and-admision-materials {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 573px;
  top: 4994px;
}
.course-outline {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 573px;
  top: 5023px;
}
.policy {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 573px;
  top: 5052px;
}
.fa-qs {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 573px;
  top: 5081px;
}
.online-course {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 573px;
  top: 5110px;
}
.rectangle-46 {
  background: #f16126;
  border-radius: 10px;
  width: 39px;
  height: 2px;
  position: absolute;
  left: 575px;
  top: 4931px;
}
.courses {
  color: #101115;
  text-align: left;
  font: 600 22px "Roboto", sans-serif;
  position: absolute;
  left: 573px;
  top: 4900px;
}
.link2 {
  width: 150px;
  height: 171px;
  position: static;
}
.contact-us {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 974px;
  top: 4965px;
}
.privacy-policy {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 974px;
  top: 4994px;
}
.fa-qs2 {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 974px;
  top: 5023px;
}
.t-c {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 974px;
  top: 5052px;
}
.rectangle-462 {
  background: #f16126;
  border-radius: 10px;
  width: 39px;
  height: 2px;
  position: absolute;
  left: 976px;
  top: 4931px;
}
.help-support {
  color: #101115;
  text-align: left;
  font: 600 22px "Roboto", sans-serif;
  position: absolute;
  left: 974px;
  top: 4900px;
}
.link3 {
  width: 237px;
  height: 193px;
  position: static;
}
.image-17 {
  width: 237px;
  height: 50px;
  position: absolute;
  left: 1374px;
  top: 4965px;
}
.rectangle-463 {
  background: #f16126;
  border-radius: 10px;
  width: 39px;
  height: 2px;
  position: absolute;
  left: 1376px;
  top: 4931px;
}
.follow-us {
  color: #101115;
  text-align: left;
  font: 600 22px "Roboto", sans-serif;
  position: absolute;
  left: 1374px;
  top: 4900px;
}
.group-31 {
  width: 174px;
  height: 58px;
  position: static;
}
.group-29 {
  width: 145px;
  height: 20px;
  position: static;
}
._887-558-8720 {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 1409px;
  top: 5035px;
}
.frame {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 1374px;
  top: 5035px;
  overflow: hidden;
}
.group {
  position: absolute;
  left: 0.01px;
  top: 0px;
  overflow: visible;
}
.group-28 {
  width: 172px;
  height: 23px;
  position: static;
}
.frame2 {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 1376px;
  top: 5073px;
  overflow: hidden;
}
.group2 {
  position: absolute;
  left: 0px;
  top: 3.33px;
  overflow: visible;
}
.abc-example-com {
  color: #000000;
  text-align: left;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 1411px;
  top: 5070px;
}
.rectangle-47 {
  background: rgba(241, 97, 38, 0.3);
  width: 1584px;
  height: 1px;
  position: absolute;
  left: 168px;
  top: 4849px;
}
.rectangle-48 {
  background: rgba(241, 97, 38, 0.3);
  width: 1584px;
  height: 1px;
  position: absolute;
  left: 168px;
  top: 5179px;
}
.join-our-newsletter-for-latest-updates {
  color: #000000;
  text-align: left;
  font: 500 30px "Roboto", sans-serif;
  position: absolute;
  left: 305px;
  top: 4734px;
  width: 477px;
}
.group-33 {
  width: 91px;
  height: 91.61px;
  position: static;
}
.group-34 {
  position: absolute;
  left: 168px;
  top: 4723px;
  overflow: visible;
}
.frame3 {
  opacity: 0.05999999865889549;
  width: 778.75px;
  height: 193.6px;
  position: absolute;
  left: 1058px;
  top: 5036px;
  transform-origin: 0 0;
  transform: rotate(0.553deg) scale(1, 1);
  overflow: hidden;
}
.group3 {
  position: absolute;
  inset: 0;
}
.layer-1 {
  width: 778.77px;
  height: 208.21px;
  position: static;
}
.group-21 {
  opacity: 0.20000000298023224;
  position: absolute;
  left: -0.03px;
  top: 152.03px;
  overflow: visible;
}
.clip-path-group {
  width: 722.99px;
  height: 195.34px;
  position: static;
}
.clip-path {
  position: absolute;
  left: 33.58px;
  top: -14.61px;
  overflow: visible;
}
.group4 {
  position: absolute;
  left: 43.34px;
  top: -0.01px;
  overflow: visible;
}
.form {
  width: 778px;
  height: 46px;
  position: static;
}
.rectangle-49 {
  background: #f16126;
  border-style: solid;
  border-color: #f16126;
  border-width: 1px;
  width: 604px;
  height: 46px;
  position: absolute;
  left: 974px;
  top: 4750px;
}
.enter-your-email {
  color: #ffffff;
  text-align: left;
  font: 400 14px "Roboto", sans-serif;
  position: absolute;
  left: 998px;
  top: 4765px;
  width: 225px;
  height: 22px;
}
.button {
  width: 148px;
  height: 46px;
  position: static;
}
.rectangle-24 {
  background: #ffffff;
  border-style: solid;
  border-color: #f16126;
  border-width: 1px;
  width: 148px;
  height: 46px;
  position: absolute;
  left: 1604px;
  top: 4750px;
}
.subscribe {
  color: #f16126;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 1624px;
  top: 4763px;
  width: 108.53px;
  height: 20.7px;
}
.rectangle-25 {
  background: var(--mian-color, #f16126);
  width: 2.75px;
  height: 46px;
  position: absolute;
  left: 1604px;
  top: 4750px;
}
.school-love-sec {
  position: absolute;
  inset: 0;
}
.rectangle-34 {
  background: #fff9f1;
  width: 1920px;
  height: 597px;
  position: absolute;
  left: 0px;
  top: 4077px;
}
.image-15 {
  opacity: 0.6000000238418579;
  width: 1129px;
  height: 599px;
  position: absolute;
  left: calc(50% - 564px);
  top: 4075px;
}
.item-box {
  width: 378px;
  height: 217.45px;
  position: static;
}
.rectangle-35 {
  background: #595959;
  width: 378px;
  height: 162.08px;
  position: absolute;
  left: 168px;
  top: 4387.08px;
}
.item-box2 {
  width: 168px;
  height: 71.48px;
  position: static;
}
._200-000 {
  color: #000000;
  text-align: center;
  font: 500 40px "Roboto", sans-serif;
  position: absolute;
  left: 273px;
  top: 4437.42px;
  width: 168px;
  height: 47.32px;
}
.students-enrolled {
  color: #555555;
  text-align: center;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 294px;
  top: 4489.77px;
  width: 126px;
  height: 19.13px;
}
.group-32 {
  width: 91px;
  height: 91.61px;
  position: static;
}
.ellipse-82 {
  background: #f6ece7;
  border-radius: 50%;
  width: 91px;
  height: 91.61px;
  position: absolute;
  left: 306px;
  top: 4331.71px;
}
.group5 {
  position: absolute;
  left: 330px;
  top: 4355.88px;
  overflow: visible;
}
.item-box3 {
  width: 378px;
  height: 202.35px;
  position: static;
}
.rectangle-352 {
  background: #373737;
  width: 378px;
  height: 162.08px;
  position: absolute;
  left: 570px;
  top: 4387.08px;
}
.item-box4 {
  width: 123px;
  height: 71.48px;
  position: static;
}
._1-000 {
  color: #000000;
  text-align: center;
  font: 500 40px "Roboto", sans-serif;
  position: absolute;
  left: 698px;
  top: 4437.42px;
  width: 123px;
  height: 47.32px;
}
.video-sessions {
  color: #555555;
  text-align: center;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 704px;
  top: 4489.77px;
  width: 110px;
  height: 19.13px;
}
.frame4 {
  width: 70px;
  height: 70.47px;
  position: absolute;
  left: 724px;
  top: 4346.82px;
  overflow: hidden;
}
.group6 {
  position: absolute;
  left: 0px;
  top: 2.72px;
  overflow: visible;
}
.item-box5 {
  width: 378px;
  height: 205.37px;
  position: static;
}
.rectangle-353 {
  background: #373737;
  width: 378px;
  height: 162.08px;
  position: absolute;
  left: 972px;
  top: 4387.08px;
}
.group-22 {
  width: 91px;
  height: 165.1px;
  position: static;
}
.item-box6 {
  width: 91px;
  height: 71.48px;
  position: static;
}
._150 {
  color: #000000;
  text-align: center;
  font: 500 40px "Roboto", sans-serif;
  position: absolute;
  left: 1116px;
  top: 4437.42px;
  width: 91px;
  height: 47.32px;
}
.schools {
  color: #555555;
  text-align: center;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 1132px;
  top: 4489.77px;
  width: 58px;
  height: 19.13px;
}
.school {
  width: 70px;
  height: 70.47px;
  position: absolute;
  left: 1127px;
  top: 4343.79px;
  overflow: hidden;
}
.group7 {
  position: absolute;
  left: 1.03px;
  top: 1.03px;
  overflow: visible;
}
.item-box7 {
  width: 378px;
  height: 162.08px;
  position: static;
}
._100 {
  color: #000000;
  text-align: center;
  font: 500 40px "Roboto", sans-serif;
  position: absolute;
  left: 1518px;
  top: 4437.42px;
  width: 91px;
  height: 47.32px;
}
.expert-faculties {
  color: #555555;
  text-align: center;
  font: 400 16px "Roboto", sans-serif;
  position: absolute;
  left: 1506px;
  top: 4489.77px;
  width: 114px;
  height: 19.13px;
}
.rectangle-354 {
  background: #373737;
  width: 378px;
  height: 162.08px;
  position: absolute;
  left: 1374px;
  top: 4387.08px;
}
.frame5 {
  width: 70px;
  height: 70.47px;
  position: absolute;
  left: 1528px;
  top: 4346.82px;
  overflow: hidden;
}
.group8 {
  position: absolute;
  left: 0.55px;
  top: 0.59px;
  overflow: visible;
}
.title-head {
  width: 537px;
  height: 130.87px;
  position: static;
}
.our-students-and-schools-love-us {
  color: #101115;
  text-align: center;
  font: 500 40px "Roboto", sans-serif;
  position: absolute;
  left: 692px;
  top: 4194.8px;
  width: 537px;
  height: 91.61px;
}
.start-to-success {
  color: var(--mian-color, #f16126);
  text-align: center;
  font: 500 18px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 798px;
  top: 4155.54px;
  width: 325px;
  height: 24.16px;
}
.video-sec {
  position: absolute;
  inset: 0;
}
.rectangle-33 {
  background: #f2f8f8;
  width: 1920px;
  height: 815px;
  position: absolute;
  left: 0px;
  top: 3262px;
}
.mask-group {
  width: 2226px;
  height: 815px;
  position: static;
}
.rectangle-332 {
  background: #969a9a;
  width: 1920px;
  height: 815px;
  position: absolute;
  left: 0px;
  top: 3262px;
}
.frame6 {
  opacity: 0.10999999940395355;
  width: 673px;
  height: 364px;
  position: absolute;
  left: 1553px;
  top: 3697px;
  overflow: hidden;
}
._1 {
  width: 673.02px;
  height: 364.12px;
  position: static;
}
.vector83 {
  opacity: 0;
  position: absolute;
  left: 57.4px;
  top: 320.38px;
  overflow: visible;
}
.vector84 {
  opacity: 0.05999999865889549;
  position: absolute;
  left: 58.9px;
  top: 320.65px;
  overflow: visible;
}
.vector85 {
  opacity: 0.12999999523162842;
  position: absolute;
  left: 60.42px;
  top: 320.89px;
  overflow: visible;
}
.vector86 {
  opacity: 0.1899999976158142;
  position: absolute;
  left: 62.03px;
  top: 321.25px;
  overflow: visible;
}
.vector87 {
  opacity: 0.25;
  position: absolute;
  left: 63.56px;
  top: 321.62px;
  overflow: visible;
}
.vector88 {
  opacity: 0.3100000023841858;
  position: absolute;
  left: 65.17px;
  top: 321.81px;
  overflow: visible;
}
.vector89 {
  opacity: 0.3799999952316284;
  position: absolute;
  left: 66.75px;
  top: 322.09px;
  overflow: visible;
}
.vector90 {
  opacity: 0.4399999976158142;
  position: absolute;
  left: 68.3px;
  top: 322.44px;
  overflow: visible;
}
.vector91 {
  opacity: 0.5600000023841858;
  position: absolute;
  left: 638.17px;
  top: 335.42px;
  overflow: visible;
}
.vector92 {
  position: absolute;
  left: 314.27px;
  top: 265.55px;
  overflow: visible;
}
.vector93 {
  position: absolute;
  left: 25.74px;
  top: 241.02px;
  overflow: visible;
}
.vector94 {
  position: absolute;
  left: 0px;
  top: 258.28px;
  overflow: visible;
}
.vector95 {
  position: absolute;
  left: 325.72px;
  top: 266.86px;
  overflow: visible;
}
.vector96 {
  position: absolute;
  left: 314.3px;
  top: 229.97px;
  overflow: visible;
}
.vector97 {
  position: absolute;
  left: 318.61px;
  top: 221.36px;
  overflow: visible;
}
.vector98 {
  position: absolute;
  left: 314.08px;
  top: 190.03px;
  overflow: visible;
}
.vector99 {
  position: absolute;
  left: 314.17px;
  top: 159.44px;
  overflow: visible;
}
.vector100 {
  position: absolute;
  left: 314.07px;
  top: 159.44px;
  overflow: visible;
}
.vector101 {
  position: absolute;
  left: 22.16px;
  top: 250.38px;
  overflow: visible;
}
.vector102 {
  position: absolute;
  left: 25.71px;
  top: 229.42px;
  overflow: visible;
}
.vector103 {
  position: absolute;
  left: 0px;
  top: 281.47px;
  overflow: visible;
}
.vector104 {
  position: absolute;
  left: 339.25px;
  top: 291.07px;
  overflow: visible;
}
.vector105 {
  position: absolute;
  left: 307.93px;
  top: 46.2px;
  overflow: visible;
}
.vector106 {
  position: absolute;
  left: 309.91px;
  top: 46.2px;
  overflow: visible;
}
.vector107 {
  position: absolute;
  left: 310.83px;
  top: 16.08px;
  overflow: visible;
}
.vector108 {
  position: absolute;
  left: 310.86px;
  top: 16.08px;
  overflow: visible;
}
.vector109 {
  position: absolute;
  left: 305.13px;
  top: 10.65px;
  overflow: visible;
}
.vector110 {
  position: absolute;
  left: 305.13px;
  top: 10.57px;
  overflow: visible;
}
.vector111 {
  position: absolute;
  left: 57.34px;
  top: 203.69px;
  overflow: visible;
}
.vector112 {
  position: absolute;
  left: 270.42px;
  top: -0.14px;
  overflow: visible;
}
.vector113 {
  position: absolute;
  left: 274.89px;
  top: -0.03px;
  overflow: visible;
}
.group9 {
  position: absolute;
  left: 30.65px;
  top: 238.34px;
  overflow: visible;
}
.group10 {
  position: absolute;
  left: 329.79px;
  top: 275.44px;
  overflow: visible;
}
.vector123 {
  position: absolute;
  left: 8.44px;
  top: 269.9px;
  overflow: visible;
}
.vector124 {
  position: absolute;
  left: -0.05px;
  top: 297.49px;
  overflow: visible;
}
.vector125 {
  position: absolute;
  left: 0px;
  top: 307.16px;
  overflow: visible;
}
.vector126 {
  position: absolute;
  left: 14.56px;
  top: 265.81px;
  overflow: visible;
}
.vector127 {
  position: absolute;
  left: 132.52px;
  top: 236.9px;
  overflow: visible;
}
.vector128 {
  position: absolute;
  left: 136.54px;
  top: 56.77px;
  overflow: visible;
}
.vector129 {
  position: absolute;
  left: 136.94px;
  top: 56.74px;
  overflow: visible;
}
.vector130 {
  position: absolute;
  left: 213.51px;
  top: 16.19px;
  overflow: visible;
}
.vector131 {
  position: absolute;
  left: 215.46px;
  top: 16.08px;
  overflow: visible;
}
.vector132 {
  position: absolute;
  left: 13.56px;
  top: 311.81px;
  overflow: visible;
}
.frame7 {
  width: 1920px;
  height: 610px;
  position: absolute;
  left: 0px;
  top: 3425px;
  overflow: hidden;
}
.mask-group2 {
  position: absolute;
  inset: 0;
}
.group11 {
  position: absolute;
  left: 0px;
  top: 0px;
  overflow: visible;
}
.sliderbox {
  position: absolute;
  inset: 0;
}
.rectangle-42 {
  background: #f16126;
  border-radius: 20px;
  width: 872px;
  height: 409px;
  position: absolute;
  left: 884px;
  top: 163px;
}
.rectangle-41 {
  background: #ffffff;
  border-radius: 15px;
  width: 910px;
  height: 457px;
  position: absolute;
  left: 840px;
  top: 107px;
}
.delve-into-the-founder-s-thoughts-via-the-video {
  color: #101115;
  text-align: left;
  font: 500 30px "Inter", sans-serif;
  position: absolute;
  left: 1151px;
  top: 167px;
  width: 509px;
  height: 190px;
}
.amet-minim-mollit-non-deserunt-ullamco-est-sit-aliqua-dolor-do-amet-sint-velit-officia-consequat-duis-enim-velit-mollit-exercitation-veniam-consequat {
  color: #555555;
  text-align: left;
  font: 500 18px/32px "Inter", sans-serif;
  position: absolute;
  left: 1151px;
  top: 337px;
  width: 456px;
  height: 108px;
}
.ellipse-9 {
  background: #f16126;
  border-radius: 50%;
  width: 22px;
  height: 22px;
  position: absolute;
  left: 1151px;
  top: 499px;
}
.ellipse-10 {
  background: #d9d9d9;
  border-radius: 50%;
  width: 22px;
  height: 22px;
  position: absolute;
  left: 1191px;
  top: 499px;
}
.ellipse-11 {
  background: #d9d9d9;
  border-radius: 50%;
  width: 22px;
  height: 22px;
  position: absolute;
  left: 1231px;
  top: 499px;
}
.video-box {
  width: 923px;
  height: 566px;
  position: static;
}
.rectangle-43 {
  background: #000000;
  border-radius: 5px;
  width: 549px;
  height: 291px;
  position: absolute;
  left: 159px;
  top: 3342px;
}
.rectangle-39 {
  background: #d9d9d9;
  border-radius: 10px;
  width: 914px;
  height: 558px;
  position: absolute;
  left: 168px;
  top: 3350px;
}
.fi-fc-28-s-a-od-i-hd-1 {
  width: 1027px;
  height: 577px;
  position: absolute;
  left: 79px;
  top: 3340px;
}
.rectangle-40 {
  background: #ffffff;
  width: 914px;
  height: 558px;
  position: absolute;
  left: 168px;
  top: 3350px;
}
.group-4 {
  position: absolute;
  left: 559px;
  top: 3563px;
  overflow: visible;
}
.group-24 {
  width: 425px;
  height: 119px;
  position: static;
}
.why-choose-devalaya-e-learn {
  color: #101115;
  text-align: left;
  font: 500 40px "Roboto", sans-serif;
  position: absolute;
  left: 1150px;
  top: 3361px;
  width: 425px;
  height: 119px;
}
.online-courses-sec {
  position: absolute;
  inset: 0;
}
.mask-group3 {
  width: 1920px;
  height: 768px;
  position: static;
}
.rectangle-26 {
  background: #ffffff;
  width: 1920px;
  height: 768px;
  position: absolute;
  left: 0px;
  top: 2494px;
}
.frame8 {
  opacity: 0.05999999865889549;
  width: 884.01px;
  height: 221.77px;
  position: absolute;
  left: 9.87px;
  top: 3000.29px;
  transform-origin: 0 0;
  transform: rotate(0.553deg) scale(1, 1);
  overflow: hidden;
}
.layer-12 {
  width: 884.03px;
  height: 238.51px;
  position: static;
}
.group-212 {
  opacity: 0.20000000298023224;
  position: absolute;
  left: -0.03px;
  top: 174.15px;
  overflow: visible;
}
.clip-path-group2 {
  width: 820.7px;
  height: 223.76px;
  position: static;
}
.clip-path2 {
  position: absolute;
  left: 38.12px;
  top: -16.74px;
  overflow: visible;
}
.group12 {
  position: absolute;
  left: 49.2px;
  top: -0.01px;
  overflow: visible;
}
.right-text-button {
  width: 670px;
  height: 570px;
  position: static;
}
.button2 {
  width: 215px;
  height: 40px;
  position: static;
}
.rectangle-242 {
  background: #ffffff;
  border-style: solid;
  border-color: #f16126;
  border-width: 1px;
  width: 215px;
  height: 40px;
  position: absolute;
  left: 975px;
  top: 3108px;
}
.view-all-stories {
  color: #f16126;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 997px;
  top: 3119px;
  width: 172px;
  height: 18px;
}
.rectangle-252 {
  background: var(--mian-color, #f16126);
  width: 4px;
  height: 40px;
  position: absolute;
  left: 975px;
  top: 3108px;
}
.group-23 {
  width: 646px;
  height: 150px;
  position: static;
}
.your-courses {
  color: var(--mian-color, #f16126);
  text-align: left;
  font: 500 18px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 975px;
  top: 2578px;
  width: 325px;
  height: 24px;
}
.affordable-online-courses-and-learning-opportunities {
  color: #101115;
  text-align: left;
  font: 500 40px "Roboto", sans-serif;
  position: absolute;
  left: 975px;
  top: 2624px;
  width: 646px;
  height: 104px;
}
.it-is-a-long-established-fact-that-a-reader-will-be-distracted-by-the-readable-contenwhen-looking-at-its-layout-the-point-of-using-lorem-ipsum-is-that-it-has {
  color: #555555;
  text-align: left;
  font: 400 16px/35px "Roboto", sans-serif;
  position: absolute;
  left: 975px;
  top: 2728px;
  width: 646px;
  height: 60px;
}
.group-27 {
  width: 670px;
  height: 220px;
  position: static;
}
.check-box {
  width: 268px;
  height: 40px;
  position: static;
}
.rectangle-44 {
  background: #f6fafb;
  width: 268px;
  height: 40px;
  position: absolute;
  left: 972px;
  top: 2838px;
}
.skill-enrichment {
  color: #000000;
  text-align: left;
  font: 400 16px/16px "Roboto", sans-serif;
  position: absolute;
  left: 1020px;
  top: 2852px;
  width: 120px;
  height: 17px;
}
.checkmark-1 {
  position: absolute;
  left: 987px;
  top: 2850px;
  overflow: visible;
}
.check-box2 {
  width: 382px;
  height: 40px;
  position: static;
}
.rectangle-442 {
  background: #f6fafb;
  width: 382px;
  height: 40px;
  position: absolute;
  left: 1260px;
  top: 2838px;
}
.affordable-skill-development-programs {
  color: #000000;
  text-align: left;
  font: 400 16px/16px "Roboto", sans-serif;
  position: absolute;
  left: 1308.96px;
  top: 2852px;
  width: 309.04px;
  height: 17px;
}
.checkmark-12 {
  position: absolute;
  left: 1275.3px;
  top: 2850px;
  overflow: visible;
}
.rectangle-443 {
  background: #f6fafb;
  width: 268px;
  height: 40px;
  position: absolute;
  left: 972px;
  top: 2898px;
}
.holistic-learning-approach {
  color: #000000;
  text-align: left;
  font: 400 16px/16px "Roboto", sans-serif;
  position: absolute;
  left: 1020px;
  top: 2912px;
  width: 196px;
  height: 17px;
}
.checkmark-13 {
  position: absolute;
  left: 987px;
  top: 2910px;
  overflow: visible;
}
.rectangle-444 {
  background: #f6fafb;
  width: 382px;
  height: 40px;
  position: absolute;
  left: 1260px;
  top: 2898px;
}
.innovative-elementary-education-techniques {
  color: #000000;
  text-align: left;
  font: 400 16px/16px "Roboto", sans-serif;
  position: absolute;
  left: 1308px;
  top: 2912px;
  width: 318px;
  height: 17px;
}
.checkmark-14 {
  position: absolute;
  left: 1275px;
  top: 2910px;
  overflow: visible;
}
.check-box3 {
  width: 288px;
  height: 40px;
  position: static;
}
.rectangle-445 {
  background: #f6fafb;
  width: 268px;
  height: 40px;
  position: absolute;
  left: 972px;
  top: 2958px;
}
.tech-enabled-learning {
  color: #000000;
  text-align: left;
  font: 400 16px/16px "Roboto", sans-serif;
  position: absolute;
  left: 1020px;
  top: 2972px;
  width: 240px;
  height: 17px;
}
.checkmark-15 {
  position: absolute;
  left: 987px;
  top: 2970px;
  overflow: visible;
}
.rectangle-446 {
  background: #f6fafb;
  width: 382px;
  height: 40px;
  position: absolute;
  left: 1260px;
  top: 2958px;
}
.learning-with-no-time-constraints {
  color: #000000;
  text-align: left;
  font: 400 16px/16px "Roboto", sans-serif;
  position: absolute;
  left: 1308.96px;
  top: 2972px;
  width: 309.04px;
  height: 17px;
}
.checkmark-16 {
  position: absolute;
  left: 1275.3px;
  top: 2970px;
  overflow: visible;
}
.rectangle-447 {
  background: #f6fafb;
  width: 268px;
  height: 40px;
  position: absolute;
  left: 972px;
  top: 3018px;
}
.personalized-learning {
  color: #000000;
  text-align: left;
  font: 400 16px/16px "Roboto", sans-serif;
  position: absolute;
  left: 1020px;
  top: 3032px;
  width: 176px;
  height: 17px;
}
.checkmark-17 {
  position: absolute;
  left: 987px;
  top: 3030px;
  overflow: visible;
}
.rectangle-448 {
  background: #f6fafb;
  width: 382px;
  height: 40px;
  position: absolute;
  left: 1260px;
  top: 3018px;
}
.readiness-for-national-education-policy-2020 {
  color: #000000;
  text-align: left;
  font: 400 16px/16px "Roboto", sans-serif;
  position: absolute;
  left: 1308px;
  top: 3032px;
  width: 327px;
  height: 17px;
}
.checkmark-18 {
  position: absolute;
  left: 1275px;
  top: 3030px;
  overflow: visible;
}
.left-img-ab {
  width: 780px;
  height: 608px;
  position: static;
}
.ab-1-1 {
  border-radius: 0px 0px 0px 200px;
  width: 512px;
  height: 608px;
  position: absolute;
  left: 168px;
  top: 2574px;
  box-shadow: 0px 4px 20px 0px rgba(189, 189, 189, 0.25);
}
.mask-group4 {
  width: 244px;
  height: 608px;
  position: static;
}
.ab-2-1 {
  border-radius: 230px;
  width: 244px;
  height: 608px;
  position: absolute;
  left: 704px;
  top: 2574px;
}
.feature-5-1 {
  width: 316px;
  height: 936px;
  position: absolute;
  left: 693px;
  top: 2420px;
}
.books {
  opacity: 0.10000000149011612;
  width: 148.72px;
  height: 224px;
  position: static;
}
.layer-13 {
  width: 148.72px;
  height: 224px;
  position: static;
}
.vector214 {
  position: absolute;
  left: 1889.19px;
  top: 2922.87px;
  transform: translate(-113.94px, 33.6px);
  overflow: visible;
}
.vector215 {
  position: absolute;
  left: 1891.09px;
  top: 2921.94px;
  transform: translate(-112.72px, 31.79px);
  overflow: visible;
}
.vector216 {
  position: absolute;
  left: 1889.58px;
  top: 2920.82px;
  transform: translate(-112.93px, 32.15px);
  overflow: visible;
}
.vector217 {
  position: absolute;
  left: 1891.38px;
  top: 2921.21px;
  transform: translate(-114.69px, 30.96px);
  overflow: visible;
}
.vector218 {
  position: absolute;
  left: 1884.82px;
  top: 2913.04px;
  transform: translate(-114.31px, 1.91px);
  overflow: visible;
}
.vector219 {
  position: absolute;
  left: 1885.48px;
  top: 2913.6px;
  transform: translate(-113.86px, 0.44px);
  overflow: visible;
}
.vector220 {
  position: absolute;
  left: 1885.19px;
  top: 2913.54px;
  transform: translate(-110.86px, 0.03px);
  overflow: visible;
}
.vector221 {
  position: absolute;
  left: 1890.43px;
  top: 2921.05px;
  transform: translate(-114.03px, 29.53px);
  overflow: visible;
}
.vector222 {
  position: absolute;
  left: 1890.63px;
  top: 2920.68px;
  transform: translate(-113.94px, 29.42px);
  overflow: visible;
}
.vector223 {
  position: absolute;
  left: 1883.52px;
  top: 2912.49px;
  transform: translate(-109.1px, 0.03px);
  overflow: visible;
}
.vector224 {
  position: absolute;
  left: 1882.38px;
  top: 2912.01px;
  transform: translate(-107.72px, 0.03px);
  overflow: visible;
}
.vector225 {
  position: absolute;
  left: 1885.95px;
  top: 2917.45px;
  transform: translate(-113.99px, 30.67px);
  overflow: visible;
}
.vector226 {
  position: absolute;
  left: 1885.05px;
  top: 2914.51px;
  transform: translate(-113.39px, 0.06px);
  overflow: visible;
}
.vector227 {
  position: absolute;
  left: 1897.25px;
  top: 2924.52px;
  transform: translate(-113.8px, 12.35px);
  overflow: visible;
}
.vector228 {
  position: absolute;
  left: 1881.43px;
  top: 2911.61px;
  transform: translate(-109.53px, 0.03px);
  overflow: visible;
}
.vector229 {
  position: absolute;
  left: 1880.7px;
  top: 2911.27px;
  transform: translate(-105.55px, 0.02px);
  overflow: visible;
}
.vector230 {
  position: absolute;
  left: 1883.39px;
  top: 2913.78px;
  transform: translate(-109.47px, 0.03px);
  overflow: visible;
}
.vector231 {
  position: absolute;
  left: 1878.6px;
  top: 2910.11px;
  transform: translate(-112.43px, 0.03px);
  overflow: visible;
}
.vector232 {
  position: absolute;
  left: 1879.09px;
  top: 2911.52px;
  transform: translate(-112.5px, 0.18px);
  overflow: visible;
}
.group13 {
  position: absolute;
  left: 1880.57px;
  top: 2909.83px;
  transform: translate(-6.14px, 0px);
  overflow: visible;
}
.rectangle-342 {
  background: #fff9f1;
  width: 1920px;
  height: 737px;
  position: absolute;
  left: 0px;
  top: 1757px;
}
.rectangle-243 {
  background: #ffffff;
  border-style: solid;
  border-color: #f16126;
  border-width: 1px;
  width: 215px;
  height: 40px;
  position: absolute;
  left: 853px;
  top: 2374px;
}
.browse-all-categories {
  color: #f16126;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 875px;
  top: 2385px;
  width: 172px;
  height: 18px;
}
.rectangle-253 {
  background: var(--mian-color, #f16126);
  width: 4px;
  height: 40px;
  position: absolute;
  left: 853px;
  top: 2374px;
}
.item-box8 {
  width: 244px;
  height: 287px;
  position: static;
}
.rectangle-355 {
  background: #ffffff;
  border-radius: 10px;
  width: 244px;
  height: 287px;
  position: absolute;
  left: 168px;
  top: 2027px;
  box-shadow: 0px 10px 15px 0px rgba(226, 226, 226, 0.25);
}
.group-25 {
  width: 168px;
  height: 181.18px;
  position: static;
}
.item-box9 {
  width: 168px;
  height: 58.18px;
  position: static;
}
.spoken-english {
  color: #f16126;
  text-align: center;
  font: 500 20px "Roboto", sans-serif;
  position: absolute;
  left: 206px;
  top: 2203px;
  width: 168px;
  height: 29px;
}
._24-course {
  color: #555555;
  text-align: center;
  font: 500 16px "Roboto", sans-serif;
  position: absolute;
  left: 227px;
  top: 2242.06px;
  width: 126px;
  height: 19.13px;
}
.group-26 {
  width: 102px;
  height: 103px;
  position: static;
}
.ellipse-83 {
  background: #ebf5f8;
  border-radius: 50%;
  width: 102px;
  height: 103px;
  position: absolute;
  left: 239px;
  top: 2080px;
}
.frame9 {
  width: 43px;
  height: 43px;
  position: absolute;
  left: 269px;
  top: 2110px;
  overflow: hidden;
}
.group14 {
  position: absolute;
  left: 2.04px;
  top: 0px;
  overflow: visible;
}
.rectangle-356 {
  background: #ffffff;
  border-radius: 10px;
  width: 244px;
  height: 287px;
  position: absolute;
  left: 436px;
  top: 2027px;
  box-shadow: 0px 10px 15px 0px rgba(226, 226, 226, 0.25);
}
.music {
  color: #101115;
  text-align: center;
  font: 500 20px "Roboto", sans-serif;
  position: absolute;
  left: 474px;
  top: 2203px;
  width: 168px;
  height: 29px;
}
._40-course {
  color: #555555;
  text-align: center;
  font: 500 16px "Roboto", sans-serif;
  position: absolute;
  left: 495px;
  top: 2242.06px;
  width: 126px;
  height: 19.13px;
}
.ellipse-84 {
  background: #e3f0d2;
  border-radius: 50%;
  width: 102px;
  height: 103px;
  position: absolute;
  left: 507px;
  top: 2080px;
}
.frame10 {
  width: 50px;
  height: 50px;
  position: absolute;
  left: 533px;
  top: 2107px;
  overflow: hidden;
}
.group15 {
  position: absolute;
  left: 5.42px;
  top: 5.42px;
  overflow: visible;
}
.rectangle-357 {
  background: #ffffff;
  border-radius: 10px;
  width: 244px;
  height: 287px;
  position: absolute;
  left: 704px;
  top: 2027px;
  box-shadow: 0px 10px 15px 0px rgba(226, 226, 226, 0.25);
}
.group-252 {
  width: 206px;
  height: 181.18px;
  position: static;
}
.item-box10 {
  width: 206px;
  height: 58.18px;
  position: static;
}
.school-hindi-medium {
  color: #101115;
  text-align: center;
  font: 500 20px "Roboto", sans-serif;
  position: absolute;
  left: 723px;
  top: 2203px;
  width: 206px;
  height: 29px;
}
._27-course {
  color: #555555;
  text-align: center;
  font: 500 16px "Roboto", sans-serif;
  position: absolute;
  left: 763px;
  top: 2242.06px;
  width: 126px;
  height: 19.13px;
}
.ellipse-85 {
  background: #f9e8b0;
  border-radius: 50%;
  width: 102px;
  height: 103px;
  position: absolute;
  left: 775px;
  top: 2080px;
}
.school2 {
  width: 43px;
  height: 43.29px;
  position: absolute;
  left: 805px;
  top: 2110px;
  overflow: hidden;
}
.group16 {
  position: absolute;
  left: 0px;
  top: 2px;
  overflow: visible;
}
.rectangle-358 {
  background: #ffffff;
  border-radius: 10px;
  width: 244px;
  height: 287px;
  position: absolute;
  left: 972px;
  top: 2027px;
  box-shadow: 0px 10px 15px 0px rgba(226, 226, 226, 0.25);
}
.yoga-fitness {
  color: #101115;
  text-align: center;
  font: 500 20px "Roboto", sans-serif;
  position: absolute;
  left: 1010px;
  top: 2203px;
  width: 168px;
  height: 29px;
}
._20-course {
  color: #555555;
  text-align: center;
  font: 500 16px "Roboto", sans-serif;
  position: absolute;
  left: 1031px;
  top: 2242.06px;
  width: 126px;
  height: 19.13px;
}
.ellipse-86 {
  background: #ebd5e9;
  border-radius: 50%;
  width: 102px;
  height: 103px;
  position: absolute;
  left: 1043px;
  top: 2080px;
}
.frame11 {
  width: 43px;
  height: 43px;
  position: absolute;
  left: 1073px;
  top: 2110px;
  overflow: hidden;
}
.group17 {
  position: absolute;
  left: 4.7px;
  top: 1.18px;
  overflow: visible;
}
.rectangle-359 {
  background: #ffffff;
  border-radius: 10px;
  width: 244px;
  height: 287px;
  position: absolute;
  left: 1240px;
  top: 2027px;
  box-shadow: 0px 10px 15px 0px rgba(226, 226, 226, 0.25);
}
.group-253 {
  width: 211px;
  height: 181.18px;
  position: static;
}
.item-box11 {
  width: 211px;
  height: 58.18px;
  position: static;
}
.cognitive-development {
  color: #101115;
  text-align: center;
  font: 500 20px "Roboto", sans-serif;
  position: absolute;
  left: 1257px;
  top: 2203px;
  width: 211px;
  height: 29px;
}
._40-course2 {
  color: #555555;
  text-align: center;
  font: 500 16px "Roboto", sans-serif;
  position: absolute;
  left: 1299px;
  top: 2242.06px;
  width: 126px;
  height: 19.13px;
}
.ellipse-87 {
  background: #f6cabf;
  border-radius: 50%;
  width: 102px;
  height: 103px;
  position: absolute;
  left: 1311px;
  top: 2080px;
}
.frame12 {
  width: 43px;
  height: 43px;
  position: absolute;
  left: 1341px;
  top: 2110px;
  overflow: hidden;
}
.group18 {
  position: absolute;
  left: 0.91px;
  top: 0px;
  overflow: visible;
}
.rectangle-3510 {
  background: #ffffff;
  border-radius: 10px;
  width: 244px;
  height: 287px;
  position: absolute;
  left: 1508px;
  top: 2027px;
  box-shadow: 0px 10px 15px 0px rgba(226, 226, 226, 0.25);
}
.group-254 {
  width: 184px;
  height: 181.18px;
  position: static;
}
.item-box12 {
  width: 184px;
  height: 58.18px;
  position: static;
}
.news-awareness {
  color: #101115;
  text-align: center;
  font: 500 20px "Roboto", sans-serif;
  position: absolute;
  left: 1538px;
  top: 2203px;
  width: 184px;
  height: 29px;
}
._11-course {
  color: #555555;
  text-align: center;
  font: 500 16px "Roboto", sans-serif;
  position: absolute;
  left: 1567px;
  top: 2242.06px;
  width: 126px;
  height: 19.13px;
}
.ellipse-88 {
  background: #ffd6a8;
  border-radius: 50%;
  width: 102px;
  height: 103px;
  position: absolute;
  left: 1579px;
  top: 2080px;
}
.frame13 {
  width: 43px;
  height: 43px;
  position: absolute;
  left: 1609px;
  top: 2110px;
  overflow: hidden;
}
.group19 {
  position: absolute;
  left: 2.04px;
  top: 0px;
  overflow: visible;
}
.popular-category-for-learn {
  color: #101115;
  text-align: center;
  font: 500 40px "Roboto", sans-serif;
  position: absolute;
  left: 692px;
  top: 1874.8px;
  width: 537px;
  height: 91.61px;
}
.popular-category {
  color: var(--mian-color, #f16126);
  text-align: center;
  font: 500 18px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 798px;
  top: 1835.54px;
  width: 325px;
  height: 24.16px;
}
.experience-sec {
  position: absolute;
  inset: 0;
}
.mask-group5 {
  width: 1920px;
  height: 835px;
  position: static;
}
.rectangle-262 {
  background: #ffffff;
  width: 1920px;
  height: 835px;
  position: absolute;
  left: 0px;
  top: 920px;
}
.frame14 {
  opacity: 0.05999999865889549;
  width: 884.01px;
  height: 219.77px;
  position: absolute;
  left: 9.87px;
  top: 1516.29px;
  transform-origin: 0 0;
  transform: rotate(0.553deg) scale(1, 1);
  overflow: hidden;
}
.layer-14 {
  width: 884.03px;
  height: 236.36px;
  position: static;
}
.group-213 {
  opacity: 0.20000000298023224;
  position: absolute;
  left: -0.03px;
  top: 172.58px;
  overflow: visible;
}
.clip-path-group3 {
  width: 820.7px;
  height: 221.74px;
  position: static;
}
.clip-path3 {
  position: absolute;
  left: 38.12px;
  top: -16.59px;
  overflow: visible;
}
.group20 {
  position: absolute;
  left: 49.2px;
  top: -0.01px;
  overflow: visible;
}
.left-text-button {
  width: 646px;
  height: 516px;
  position: static;
}
.rectangle-244 {
  background: #ffffff;
  border-style: solid;
  border-color: #f16126;
  border-width: 1px;
  width: 215px;
  height: 40px;
  position: absolute;
  left: 168px;
  top: 1476px;
}
.learn-more {
  color: #f16126;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 190px;
  top: 1487px;
  width: 172px;
  height: 18px;
}
.rectangle-254 {
  background: var(--mian-color, #f16126);
  width: 4px;
  height: 40px;
  position: absolute;
  left: 168px;
  top: 1476px;
}
.group-232 {
  width: 646px;
  height: 105px;
  position: static;
}
.about-us {
  color: var(--mian-color, #f16126);
  text-align: left;
  font: 500 18px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 168px;
  top: 1000px;
  width: 325px;
  height: 24px;
}
.experience-the-best {
  color: #101115;
  text-align: left;
  font: 500 40px "Roboto", sans-serif;
  position: absolute;
  left: 168px;
  top: 1054px;
  width: 646px;
  height: 51px;
}
.lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-orem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-orem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore {
  color: #555555;
  text-align: left;
  font: 400 16px/35px "Roboto", sans-serif;
  position: absolute;
  left: 168px;
  top: 1150px;
  width: 646px;
  height: 176px;
}
.lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-orem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-orem-ipsum-dolor-sit-amet {
  color: #555555;
  text-align: left;
  font: 400 16px/35px "Roboto", sans-serif;
  position: absolute;
  left: 168px;
  top: 1310px;
  width: 646px;
  height: 121px;
}
.vector314 {
  position: absolute;
  left: 1779.19px;
  top: 1498.87px;
  transform: translate(-113.94px, 33.6px);
  overflow: visible;
}
.vector315 {
  position: absolute;
  left: 1781.09px;
  top: 1497.94px;
  transform: translate(-112.72px, 31.79px);
  overflow: visible;
}
.vector316 {
  position: absolute;
  left: 1779.58px;
  top: 1496.82px;
  transform: translate(-112.93px, 32.15px);
  overflow: visible;
}
.vector317 {
  position: absolute;
  left: 1781.38px;
  top: 1497.21px;
  transform: translate(-114.69px, 30.96px);
  overflow: visible;
}
.vector318 {
  position: absolute;
  left: 1774.82px;
  top: 1489.04px;
  transform: translate(-114.31px, 1.91px);
  overflow: visible;
}
.vector319 {
  position: absolute;
  left: 1775.48px;
  top: 1489.6px;
  transform: translate(-113.86px, 0.44px);
  overflow: visible;
}
.vector320 {
  position: absolute;
  left: 1775.19px;
  top: 1489.54px;
  transform: translate(-110.86px, 0.03px);
  overflow: visible;
}
.vector321 {
  position: absolute;
  left: 1780.43px;
  top: 1497.05px;
  transform: translate(-114.03px, 29.53px);
  overflow: visible;
}
.vector322 {
  position: absolute;
  left: 1780.63px;
  top: 1496.68px;
  transform: translate(-113.94px, 29.42px);
  overflow: visible;
}
.vector323 {
  position: absolute;
  left: 1773.52px;
  top: 1488.49px;
  transform: translate(-109.1px, 0.03px);
  overflow: visible;
}
.vector324 {
  position: absolute;
  left: 1772.38px;
  top: 1488.01px;
  transform: translate(-107.72px, 0.03px);
  overflow: visible;
}
.vector325 {
  position: absolute;
  left: 1775.95px;
  top: 1493.45px;
  transform: translate(-113.99px, 30.67px);
  overflow: visible;
}
.vector326 {
  position: absolute;
  left: 1775.05px;
  top: 1490.52px;
  transform: translate(-113.39px, 0.06px);
  overflow: visible;
}
.vector327 {
  position: absolute;
  left: 1787.25px;
  top: 1500.52px;
  transform: translate(-113.8px, 12.35px);
  overflow: visible;
}
.vector328 {
  position: absolute;
  left: 1771.43px;
  top: 1487.61px;
  transform: translate(-109.53px, 0.03px);
  overflow: visible;
}
.vector329 {
  position: absolute;
  left: 1770.7px;
  top: 1487.27px;
  transform: translate(-105.55px, 0.02px);
  overflow: visible;
}
.vector330 {
  position: absolute;
  left: 1773.39px;
  top: 1489.78px;
  transform: translate(-109.47px, 0.03px);
  overflow: visible;
}
.vector331 {
  position: absolute;
  left: 1768.6px;
  top: 1486.11px;
  transform: translate(-112.43px, 0.03px);
  overflow: visible;
}
.vector332 {
  position: absolute;
  left: 1769.09px;
  top: 1487.52px;
  transform: translate(-112.5px, 0.18px);
  overflow: visible;
}
.group21 {
  position: absolute;
  left: 1770.57px;
  top: 1485.83px;
  transform: translate(-6.14px, 0px);
  overflow: visible;
}
._4-box {
  width: 779px;
  height: 679px;
  position: static;
}
.box-1 {
  width: 378px;
  height: 309px;
  position: static;
}
.rectangle-27 {
  background: #f6fafb;
  border-radius: 10px;
  width: 378px;
  height: 309px;
  position: absolute;
  left: 1373px;
  top: 1026px;
  box-shadow: 0px 10px 15px 0px rgba(112, 112, 112, 0.2);
}
.group-18 {
  width: 334px;
  height: 128px;
  position: static;
}
.group-17 {
  width: 303px;
  height: 128px;
  position: static;
}
.e-assessment-self-assessment-test-practice-quiz-one-on-one-assessment {
  color: #555555;
  text-align: left;
  font: 400 14px "Roboto", sans-serif;
  text-transform: lowercase;
  position: absolute;
  left: 1424px;
  top: 1180px;
  width: 303px;
  height: 128px;
}
.group-16 {
  width: 12px;
  height: 112px;
  position: static;
}
.rectangle-29 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 1393px;
  top: 1187px;
}
.rectangle-30 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 1393px;
  top: 1223px;
}
.rectangle-31 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 1393px;
  top: 1260px;
}
.rectangle-32 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 1393px;
  top: 1296px;
}
._360-assessment {
  color: #000000;
  text-align: left;
  font: 600 20px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 1393px;
  top: 1135px;
  width: 296px;
  height: 27px;
}
.ellipse-7 {
  background: rgba(241, 97, 38, 0.09);
  border-radius: 50%;
  width: 74px;
  height: 74px;
  position: absolute;
  left: 1393px;
  top: 1047px;
}
.frame15 {
  width: 45px;
  height: 45px;
  position: absolute;
  left: 1408px;
  top: 1061px;
  overflow: hidden;
}
.group22 {
  position: absolute;
  left: 0px;
  top: 0px;
  overflow: visible;
}
.rectangle-272 {
  background: #f6fafb;
  border-radius: 10px;
  width: 378px;
  height: 309px;
  position: absolute;
  left: 972px;
  top: 996px;
  box-shadow: 0px 10px 15px 0px rgba(112, 112, 112, 0.2);
}
.rectangle-28 {
  border-radius: 0px;
  position: absolute;
  left: 972px;
  top: 996px;
  overflow: visible;
}
.adaptive-and-flexible-teaching-structured-lessons-for-quick-learning-24-7-classes-with-in-app-download-interactive-live-sessions {
  color: #555555;
  text-align: left;
  font: 400 14px "Roboto", sans-serif;
  text-transform: lowercase;
  position: absolute;
  left: 1023px;
  top: 1150px;
  width: 303px;
  height: 128px;
}
.rectangle-292 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 992px;
  top: 1157px;
}
.rectangle-302 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 992px;
  top: 1193px;
}
.rectangle-312 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 992px;
  top: 1230px;
}
.rectangle-322 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 992px;
  top: 1266px;
}
.effective-session {
  color: #000000;
  text-align: left;
  font: 600 20px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 992px;
  top: 1105px;
  width: 296px;
  height: 27px;
}
.group-19 {
  width: 74px;
  height: 74px;
  position: static;
}
.ellipse-72 {
  background: rgba(241, 97, 38, 0.09);
  border-radius: 50%;
  width: 74px;
  height: 74px;
  position: absolute;
  left: 992px;
  top: 1016px;
}
.frame16 {
  width: 45px;
  height: 45px;
  position: absolute;
  left: 1007px;
  top: 1030px;
  overflow: hidden;
}
.group23 {
  position: absolute;
  left: 0px;
  top: 4.29px;
  overflow: visible;
}
.rectangle-273 {
  background: #f6fafb;
  border-radius: 10px;
  width: 378px;
  height: 309px;
  position: absolute;
  left: 1373px;
  top: 1366px;
  box-shadow: 0px 10px 15px 0px rgba(112, 112, 112, 0.2);
}
.mentorship-sessions-by-eminent-person-guidance-sessions-by-experts-personal-monitoring-solution-oriented-counsling {
  color: #555555;
  text-align: left;
  font: 400 14px "Roboto", sans-serif;
  text-transform: lowercase;
  position: absolute;
  left: 1424px;
  top: 1520px;
  width: 303px;
  height: 128px;
}
.rectangle-293 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 1393px;
  top: 1527px;
}
.rectangle-303 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 1393px;
  top: 1563px;
}
.rectangle-313 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 1393px;
  top: 1600px;
}
.rectangle-323 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 1393px;
  top: 1636px;
}
.mentorship {
  color: #000000;
  text-align: left;
  font: 600 20px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 1393px;
  top: 1475px;
  width: 296px;
  height: 27px;
}
.ellipse-73 {
  background: rgba(241, 97, 38, 0.09);
  border-radius: 50%;
  width: 74px;
  height: 74px;
  position: absolute;
  left: 1393px;
  top: 1387px;
}
.frame17 {
  width: 45px;
  height: 45px;
  position: absolute;
  left: 1408px;
  top: 1401px;
  overflow: hidden;
}
.group24 {
  position: absolute;
  left: 0px;
  top: 4.29px;
  overflow: visible;
}
.rectangle-274 {
  background: #f6fafb;
  border-radius: 10px;
  width: 378px;
  height: 309px;
  position: absolute;
  left: 972px;
  top: 1336px;
  box-shadow: 0px 10px 15px 0px rgba(112, 112, 112, 0.2);
}
.e-books-important-notes-into-graphics-practice-papers {
  color: #555555;
  text-align: left;
  font: 400 14px "Roboto", sans-serif;
  text-transform: lowercase;
  position: absolute;
  left: 1023px;
  top: 1490px;
  width: 303px;
  height: 128px;
}
.rectangle-294 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 992px;
  top: 1497px;
}
.rectangle-304 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 992px;
  top: 1533px;
}
.rectangle-314 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 992px;
  top: 1570px;
}
.rectangle-324 {
  background: #545454;
  border-radius: 10px;
  width: 12px;
  height: 3px;
  position: absolute;
  left: 992px;
  top: 1606px;
}
.best-study-material {
  color: #000000;
  text-align: left;
  font: 600 20px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 992px;
  top: 1445px;
  width: 296px;
  height: 27px;
}
.group-20 {
  width: 74px;
  height: 74px;
  position: static;
}
.ellipse-74 {
  background: rgba(241, 97, 38, 0.09);
  border-radius: 50%;
  width: 74px;
  height: 74px;
  position: absolute;
  left: 992px;
  top: 1357px;
}
.frame18 {
  width: 45px;
  height: 45px;
  position: absolute;
  left: 1007px;
  top: 1371px;
  overflow: hidden;
}
.frame19 {
  width: 43px;
  height: 43px;
  position: absolute;
  left: 1px;
  top: 1px;
  overflow: hidden;
}
.group25 {
  position: absolute;
  left: 0px;
  top: 0px;
  overflow: visible;
}
.banner {
  position: absolute;
  inset: 0;
}
.rectangle-22 {
  background: #d9d9d9;
  width: 1920px;
  height: 920px;
  position: absolute;
  left: 0px;
  top: 0px;
}
.image-12 {
  opacity: 0.5;
  width: 1920px;
  height: 920px;
  position: absolute;
  left: 0px;
  top: 0px;
}
.image-14 {
  width: 228px;
  height: 644px;
  position: absolute;
  left: -19px;
  top: 276px;
}
.left-text-button2 {
  width: 646px;
  height: 497px;
  position: static;
}
.button3 {
  width: 256px;
  height: 40px;
  position: static;
}
.rectangle-245 {
  background: var(--mian-color, #f16126);
  width: 256px;
  height: 40px;
  position: absolute;
  left: 168px;
  top: 680px;
}
.skill-enrichment-program {
  color: #ffffff;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 189px;
  top: 691px;
  width: 214px;
  height: 18px;
}
.rectangle-255 {
  background: #000000;
  width: 4px;
  height: 40px;
  position: absolute;
  left: 168px;
  top: 680px;
}
.rectangle-246 {
  background: #ffffff;
  border-style: solid;
  border-color: #f16126;
  border-width: 1px;
  width: 215px;
  height: 40px;
  position: absolute;
  left: 448px;
  top: 680px;
}
.school-registration {
  color: #f16126;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 470px;
  top: 691px;
  width: 172px;
  height: 18px;
}
.rectangle-256 {
  background: var(--mian-color, #f16126);
  width: 4px;
  height: 40px;
  position: absolute;
  left: 448px;
  top: 680px;
}
.online-education {
  color: var(--mian-color, #f16126);
  text-align: left;
  font: 500 18px "Roboto", sans-serif;
  position: absolute;
  left: 168px;
  top: 223px;
  width: 325px;
  height: 24px;
}
.devalaya-e-learn-the-skills-you-need-to-succeed {
  color: #101115;
  text-align: left;
  font: 700 66px "Roboto", sans-serif;
  position: absolute;
  left: 168px;
  top: 286px;
  width: 646px;
  height: 261px;
}
.the-implementation-of-national-education-policy-2020-a-proud-partner-in-nation-building-through-skill-india-self-reliant-india {
  color: #555555;
  text-align: left;
  font: 400 16px/35px "Roboto", sans-serif;
  position: absolute;
  left: 168px;
  top: 574px;
  width: 646px;
  height: 69px;
}
.right-img {
  width: 970px;
  height: 779px;
  position: static;
}
.shape {
  opacity: 0.6000000238418579;
  width: 741px;
  height: 741px;
  position: static;
}
.ellipse-1 {
  background: #d9d9d9;
  border-radius: 50%;
  border-style: dashed;
  border-color: #f16126;
  border-width: 1px;
  width: 529.29px;
  height: 529.29px;
  position: absolute;
  left: calc(50% - -170.86px);
  top: 266.86px;
}
.ellipse-2 {
  background: #d9d9d9;
  border-radius: 50%;
  border-style: dashed;
  border-color: #8b74ff;
  border-width: 1px;
  width: 635.14px;
  height: 635.14px;
  position: absolute;
  left: 1077.93px;
  top: 213.93px;
}
.ellipse-3 {
  background: #d9d9d9;
  border-radius: 50%;
  border-style: dashed;
  border-color: #ff70d2;
  border-width: 1px;
  width: 741px;
  height: 741px;
  position: absolute;
  left: 1025px;
  top: 161px;
}
.wepik-export-202308211338275-diz-1 {
  width: 604px;
  height: 779px;
  position: absolute;
  left: 1031px;
  top: 138px;
}
.all-btn-img {
  width: 970px;
  height: 286px;
  position: static;
}
.skills {
  width: 200px;
  height: 40px;
  position: static;
}
.rectangle-247 {
  background: var(--mian-color, #f16126);
  border-radius: 5px;
  width: 167px;
  height: 40px;
  position: absolute;
  left: 1606px;
  top: 253px;
}
.skills2 {
  color: #ffffff;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 1630px;
  top: 264px;
  width: 120px;
  height: 18px;
}
.ellipse-5 {
  background: #f16126;
  border-radius: 50%;
  width: 10px;
  height: 10px;
  position: absolute;
  left: 1573px;
  top: 267px;
}
.innovation {
  width: 206px;
  height: 40px;
  position: static;
}
.rectangle-248 {
  background: #4e4e4e;
  border-radius: 5px;
  width: 167px;
  height: 40px;
  position: absolute;
  left: 1655px;
  top: 376px;
}
.innovation2 {
  color: #ffffff;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 1679px;
  top: 387px;
  width: 120px;
  height: 18px;
}
.ellipse-6 {
  background: #000000;
  border-radius: 50%;
  width: 10px;
  height: 10px;
  position: absolute;
  left: 1616px;
  top: 390px;
}
.achievement {
  width: 197px;
  height: 40px;
  position: static;
}
.rectangle-249 {
  background: var(--mian-color, #f16126);
  border-radius: 5px;
  width: 167px;
  height: 40px;
  position: absolute;
  left: 1686px;
  top: 499px;
}
.achievement2 {
  color: #ffffff;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 1710px;
  top: 510px;
  width: 120px;
  height: 18px;
}
.ellipse-62 {
  background: #f16126;
  border-radius: 50%;
  width: 10px;
  height: 10px;
  position: absolute;
  left: 1656px;
  top: 513px;
}
.knowledge {
  width: 202px;
  height: 40px;
  position: static;
}
.rectangle-2410 {
  background: linear-gradient(
    93.1deg,
    rgba(29, 77, 250, 1) 0%,
    rgba(0, 177, 201, 1) 100%
  );
  border-radius: 5px;
  width: 167px;
  height: 40px;
  position: absolute;
  left: 883px;
  top: 480px;
}
.knowledge2 {
  color: #ffffff;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  text-transform: uppercase;
  position: absolute;
  left: 907px;
  top: 491px;
  width: 120px;
  height: 18px;
}
.ellipse-4 {
  background: #00afc9;
  border-radius: 50%;
  width: 10px;
  height: 10px;
  position: absolute;
  left: 1075px;
  top: 493px;
}
.head {
  position: absolute;
  inset: 0;
}
.image-13 {
  width: 150px;
  height: 44.87px;
  position: absolute;
  left: 166px;
  top: 18px;
}
.home-about-us-courses-careers-library-contact-us {
  text-align: left;
  position: absolute;
  left: 948px;
  top: 30px;
  width: 544px;
  height: 20px;
}
.home-about-us-courses-careers-library-contact-us-span {
  color: #191e24;
  font: 400 12px "Inter", sans-serif;
}
.home-about-us-courses-careers-library-contact-us-span2 {
  color: #f16126;
  font: 500 16px "Roboto", sans-serif;
}
.home-about-us-courses-careers-library-contact-us-span3 {
  color: #191e24;
  font: 500 16px "Roboto", sans-serif;
}
.rectangle-2411 {
  background: #f16126;
  width: 215px;
  height: 40px;
  position: absolute;
  left: 1537px;
  top: 20px;
}
.rectangle-257 {
  background: #000000;
  width: 4px;
  height: 40px;
  position: absolute;
  left: 1537px;
  top: 20px;
}
.school-registration2 {
  color: #ffffff;
  text-align: center;
  font: 500 14px "Roboto", sans-serif;
  position: absolute;
  left: 1571px;
  top: 31px;
  width: 147px;
  height: 18px;
}

    </style>
</html>
