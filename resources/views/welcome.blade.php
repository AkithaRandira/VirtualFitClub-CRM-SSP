<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VirtualFitClub.com</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/88d5f4f02b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }


        /*------------------- CSS -------------------*/

        /* Styling for the second section - Meet Our Trainers */
        .bg-white {
            background-color: #ffffff;
        }

        .trainer-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .trainer-image {
            width: 100%;
            height: auto;
        }

        .trainer-info {
            padding: 16px;
        }

        /* Styling for the third section - Buy Supplements */
        .supplement-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .supplement-image {
            width: 50px;
            height: 50px;
            display: inline-block;
            vertical-align: middle;
        }

        .supplement-info {
            padding: 16px;
        }

        html,
        body {
            margin: 0%;
            box-sizing: border-box;
            overflow-x: hidden;
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'popons', sans-serif;
        }

        :root {
            --text-gray: #ffffff;
            --text-light: #030303da;
            --bg-color: #0f0f0f;
            --white: #ffffff;
            --midnight: #18c202;
            --white-light: rgba(255, 255, 255, 0.5);
            --alice-blue: #f8f9fa;
            --carribean-green: #40c9a2;
            --gray: #ededed;

            --sky: linear-gradient(120deg, #73d313 0%, #abf903 100%);
        }

        /*Global Classes*/
        a {
            text-decoration: none;
            color: #3f4954;
        }

        .flex-row {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        ul {
            list-style-type: none;
        }

        h1 {
            font-family: 'Trebuchet MS';
            font-size: 2.5rem;
        }

        h2 {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.7rem;
        }

        h3 {
            font-family: Georgia, ;
            font-size: 1.3rem;
        }

        /*------------------- CSS -------------------*/

        /*---------------------------section1----------------------------------------------------*/
        main .site-content h2 {
            font-size: 30px;
            padding: 50px;
            background-color: var(--sky);
        }



        .site-content .para1 {
            height: 10%;
            background-color: rgb(253, 253, 253);
            position: center;
        }


        .section-container {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            padding: 0%;
        }

        .section-container .columns {
            flex: 0 0 auto;
            width: 50%;
        }

        .section-container .columns.image {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .section-container .columns.content .content-container {
            padding: 40px 50px;
        }

        .section-container .columns.content .content-container h5 {
            font-weight: 700;
            font-size: 25px;
            margin-bottom: 20px;
        }

        .section-container .columns.content .content-container p {
            font-weight: 400;
            font-size: 16px;
            margin-bottom: 20px;
            margin-bottom: 15px;
            text-align: justify;
        }

        @media screen and (max-width:767px) {
            .section-container {
                flex-flow: row wrap;
            }

            .section-container .columns.image {
                display: block;
                order: 1;
                width: 100%;
                height: 250px;
            }

            .section-container .columns.content {
                display: block;
                order: 2;
                width: 100%;
            }


            .section-container .columns.content .content-container {

                padding: 20px 35px;
            }

            .section-container .columns.content .content-container h5 {
                margin-bottom: 5px;
            }

        }



        /*-----------------------------Supplyment Sales----------------------------------*/

        /* Utility stylings */

        main .site-title-sales {
            background: url('/images/110.jpg');
            background-size: cover;
            height: 80vh;
            display: flex;
            justify-content: center;
            background-attachment: fixed;
            background-position: center;
        }

        main .site-title-sales .site-background-sales {
            padding-top: 10rem;
            text-align: center;
            color: var(--text-gray);


        }


        img {
            width: 100%;
            display: block;
        }

        .container-products {
            width: 88vw;
            margin: 0 auto;
        }

        .lg-title,
        .md-title,
        .sm-title {
            font-family: 'Roboto', sans-serif;
            padding: 0.6rem 0;
            text-transform: capitalize;
        }

        .lg-title {
            font-size: 2.5rem;
            font-weight: 500;
            text-align: center;
            padding: 1.3rem 0;
            opacity: 0.9;
        }

        .md-title {
            font-size: 2rem;
            font-family: 'Roboto', sans-serif;
        }

        .sm-title {
            font-weight: 300;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .text-light {
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            opacity: 0.5;
            margin: 0.4rem 0;
        }

        /* product section */
        .product {
            background: var(--alice-blue);
            padding: 3.2rem 0;
        }

        .product .text-light {
            text-align: center;
            width: 70%;
            margin: 0.9rem auto;
        }

        .product {
            margin: 2rem;
            position: relative;
        }

        .product-content {
            background: var(--gray);
            padding: 3rem 0.5rem 2rem 0.5rem;
            cursor: pointer;
        }

        .product-img {
            background: ;
            box-shadow: 0 0 20px 10px var(--white-light);
            width: 200px;
            height: 200px;
            margin: 0 auto;
            border-radius: 50%;
            transition: background 0.5s ease;
        }

        .product-btns {
            display: flex;
            justify-content: center;
            margin-top: 1.4rem;
            opacity: 0;
            transition: opacity 0.6s ease;
        }

        .btn-cart,
        .btn-buy {
            background: transparent;
            border: 1px solid black;
            padding: 0.8rem 0;
            width: 125px;
            font-family: inherit;
            text-transform: uppercase;
            cursor: pointer;
            border: none;
            transition: all 0.6s ease;
        }

        .btn-cart {
            background: black;
            color: white;
        }

        .btn-cart:hover {
            background: ;
        }

        .btn-buy {
            background: white;
        }

        .btn-buy:hover {
            background: grey;
            color: #fff;
        }

        .product-info {
            background: white;
            padding: 2rem;
        }

        .product-info-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .rating span {
            color: grey;
        }

        .product-name {
            color: black;
            display: block;
            text-decoration: none;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: bold;
        }

        .product-price {
            padding-top: 0.6rem;
            padding-right: 0.6rem;
            display: inline-block;
        }

        .product-price:first-of-type {
            text-decoration: line-through;
            color: rgb(255, 3, 3);
        }

        .product-img img {
            transition: transform 0.6s ease;
        }

        .product:hover .product-img img {
            transform: scale(1.1);
        }

        .product:hover .product-img {
            background: ;
        }

        .product:hover .product-btns {
            opacity: 1;
        }

        .off-info .sm-title {
            background: ;
            color: rgb(252, 243, 243);
            display: inline-block;
            padding: 0.5rem;
            position: absolute;
            top: 0;
            left: 0;
            writing-mode: vertical-lr;
            transform: rotate(180deg);
            z-index: 1;
            letter-spacing: 3px;
            cursor: pointer;
        }

        /* product collection */
        .product-collection {
            padding: 3.2rem 0;
        }

        .product-collection-wrapper {
            padding: 3.2rem 0;
        }

        .product-col-left {
            background: linear-gradient(rgba(171, 255, 3, 0.858), rgba(0, 0, 0, 0.3)), url('assets/images/1.jpg') center/cover no-repeat;
        }

        .product-col-r-top {
            background: linear-gradient(rgba(17, 56, 5, 0.425), rgba(0, 0, 0, 0.3)), url('assets/images/7.jpg') center/cover no-repeat;
        }

        .flex {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            height: 50vh;
            padding: 2rem 1.5rem 3.2rem;
            margin: 5px;
        }

        .product-col-r-bottom>div:first-child {
            background: linear-gradient(rgba(13, 111, 31, 0.3), rgba(0, 0, 0, 0.3)), url('assets/images/8.jpg') center/cover no-repeat;
        }

        .product-col-r-bottom>div:last-child {
            background: linear-gradient(rgba(131, 207, 9, 0.3), rgba(0, 0, 0, 0.3)), url('assets/images/9.jpg') center/cover no-repeat;
        }

        .product-col-content {
            text-align: center;
            color: white;
        }

        .product-collection .text-light {
            opacity: 1;
            font-size: 0.8;
            font-weight: 400;
            line-height: 1.7;
        }

        .btn-dark {
            background: black;
            color: white;
            outline: 0;
            border-radius: 25px;
            padding: 0.7rem 1rem;
            border: 0;
            margin-top: 1rem;
            cursor: pointer;
            transition: all 0.6s ease;
            font-size: 1rem;
            font-family: inherit;
        }

        .btn-dark:hover {
            background: grey;
        }







        /* Media Queries */
        @media screen and (min-width: 992px) {
            .product-items {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .product-col-r-bottom {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (min-width: 1200px) {
            .product-items {
                grid-template-columns: repeat(3, 1fr);
            }

            .product {
                margin-right: 1rem;
                margin-left: 1rem;
            }

            .products .text-light {
                width: 50%;
            }
        }

        @media screen and (min-width: 1336px) {
            .product-items {
                grid-template-columns: repeat(4, 1fr);
            }

            .product-collection-wrapper {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .flex {
                height: 60vh;
            }

            .product-col-left {
                height: 121.5vh;
            }
        }

        /* ----------------- Footer --------------------- */

        footer {
            font-family: "segoe UI";
            font-weight: 400;
            background-color: black;
            text-align: center;
            padding: 20px;
            color: aliceblue;
        }

        footer h2 {
            padding: 20px;
            color: aliceblue;
        }

        footer.footer .social a {
            color: aliceblue;
            padding: 10px;
            font-size: 15px;
            text-decoration: none;
        }

        footer.footer .social a:hover {
            color: rgb(133, 158, 180);
        }

        footer.footer .social a i {
            padding: 20px;
            font-size: 15px;
        }

        footer.footer .quiklinks ul {
            padding: 30px;
        }

        footer.footer .quiklinks ul a {
            list-style: none;
            color: aliceblue;
            text-align: center;
            text-decoration: none;
            padding: 20px;
            display: inline-flex;
        }

        footer.footer .quiklinks ul a:hover {
            opacity: 0.8;
            color: rgb(136, 162, 184);
        }

        footer.footer .quiklinks ul a li {
            display: inline;
            text-align: center;
        }

        footer.footer .coppyright {
            color: rgb(251, 251, 251);
            padding: 20px;
        }

        @media screen and (max-width: 600px) {
            .footer.footer {
                font-family: "segoe UI";
                font-weight: 200;
                background-color: rgb(0, 0, 0);
                text-align: center;
                padding: 10px;
                color: aliceblue;
            }

            footer.footer .quiklinks ul {
                padding: 20px;
            }

            footer.footer .quiklinks ul a {
                list-style: none;
                color: aliceblue;
                text-align: center;
                text-decoration: none;
                padding: 10px;
                display: grid;
            }
        }
    </style>
</head>

<body class="antialiased">
    <div style="background-image: url(assets/images/gym3.jpeg)"
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        style="margin: 10px; font-weight: 600; background-color: white; padding: 8px 16px; border-radius: 8px; color: black; text-decoration: none; display: inline-block; text-align: center;"
                        onmouseover="this.style.color='white'; this.style.backgroundColor='red';"
                        onmouseout="this.style.color='black'; this.style.backgroundColor='white';"
                        onFocus="this.style.outline='2px solid red';" onBlur="this.style.outline='none';">
                        Log in

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                style="margin: 10px; font-weight: 600; background-color: white; padding: 8px 16px; border-radius: 8px; color: black; text-decoration: none; display: inline-block; text-align: center;"
                                onmouseover="this.style.color='white'; this.style.backgroundColor='red';"
                                onmouseout="this.style.color='black'; this.style.backgroundColor='white';"
                                onFocus="this.style.outline='2px solid red';" onBlur="this.style.outline='none';">
                                Register
                            </a>
                        @endif
                    @endauth
            </div>
        @endif

        <!------------------------ Site Title ---------------------->
        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
            <h1 style="color: white">Hustle for that muscle, Join the Club.</h1>
            <h2 style="color: white">-VirtualFitClub.com</h2>
        </div>

    </div>

    <!----------------------------Content----------------------------------->

    <!-----------------------------Section1----------------------------------------->

    <section class="site-content" style="padding:10px; background-color:rgba(0, 0, 0, 0.712); ">
        <div class="Para1" style=" text-align: center; ">
            <h1 style="color: white;">VirtualFitClub</h1>
        </div>
    </section>


    <div class="section-container">
        <div class="columns image" style="background-image:url('assets/images/bgi2.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h5>Welcome to Virtual Fit Club!</h5>
                <p>Welcome to Virtual Fit Club, your ultimate destination
                    for a transformative fitness experience. At Virtual Fit Club,
                    we're passionate about helping you unlock your full fitness
                    potential and achieve your health and wellness goals. With a
                    commitment to excellence, our team of dedicated trainers,
                    including Trainer 1, Trainer 2, and Trainer 3, are here to
                    inspire and support you every step of the way.
                    Our unique approach to fitness combines cutting-edge technology
                    with personalized guidance to create a tailored fitness experience
                    like no other. Whether you're a fitness enthusiast or just starting
                    your journey, we have programs and resources to suit your needs.
                    What sets Virtual Fit Club apart is our unwavering dedication to your success. Our trainers are not
                    just experts in their field; they are your partners in achieving your fitness dreams. They bring
                    years of experience and a deep passion for fitness to ensure you receive the highest level of
                    training and motivation.

                </p>
                <p>
                    But Virtual Fit Club is more than just a gym; it's a thriving fitness
                    community. Connect with like-minded individuals who share your goals,
                    challenges, and triumphs. Share your progress, find workout buddies,
                    and experience the power of a supportive fitness network.
                    To complement your fitness routine, explore our range of
                    top-quality supplements. We've carefully curated a selection of
                    products designed to support your fitness journey, ensuring you
                    have everything you need to thrive.
                </p>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="columns content">
            <div class="content-container">
                <h5>What You Can Get from Us!</h5>
                <p>
                    At Virtual Fit Club, we offer a wide array of opportunities and
                    benefits that empower you to embark on an incredible fitness journey.
                    When you choose to partner with us, you gain access to a world of possibilities
                    for achieving your health and wellness goals.</p>
                <p><b>Personalized Training:</b> Our team of seasoned trainers, including
                    Trainer 1, Trainer 2, and Trainer 3, will work closely with you
                    to create a tailored fitness plan. Whether your aim is to lose
                    weight, build muscle, enhance endurance, or improve overall health,
                    we've got you covered. With personalized workouts and expert
                    guidance, we ensure your fitness journey is both effective and enjoyable.</p>
                <p><b>Cutting-Edge Technology:</b> Experience the future of fitness with our
                    state-of-the-art technology. From interactive virtual classes to
                    fitness tracking apps, we harness innovation to make your workouts
                    engaging and results-driven. You can seamlessly integrate our
                    technology into your routine for a holistic fitness experience.</p>
                <p><b>Community Support:</b> Join a thriving fitness community where you're not
                    alone on your journey. Connect with fellow members who share your
                    passion and motivation. Share insights, challenges, and successes
                    while building meaningful relationships that keep you inspired and
                    accountable.</p>




            </div>
        </div>
        <div class="columns image" style="background-image:url('assets/images/bgi1.jpg')">
            &nbsp;
        </div>
    </div>


    <div class="products">
        <div class="container-products">
            <h1 class="lg-title">Meet our trainers</h1>

            <div style="display: flex; justify-content: center; flex-wrap: wrap;">
                <!-- Trainer 1 -->
                <div
                    style="background-color: #f4f4f4; margin: 10px; padding: 20px; border-radius: 10px; text-align: center; width: 300px; display: flex; flex-direction: column; align-items: center;">
                    <img src="assets/images/trainer4.jpg" alt="Trainer 1"
                        style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 10px;">
                    <h3 style="font-size: 24px;">David Mitchell</h3>
                    <p style="font-size: 16px;">Seasoned personal trainer
                        who focuses on functional fitness and nutrition. </p>
                </div>

                <!-- Trainer 2 -->
                <div
                    style="background-color: #f4f4f4; margin: 10px; padding: 20px; border-radius: 10px; text-align: center; width: 300px; display: flex; flex-direction: column; align-items: center;">
                    <img src="assets/images/trainer3.jpg" alt="Trainer 2"
                        style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 10px;">
                    <h3 style="font-size: 24px;">Emily Davis</h3>
                    <p style="font-size: 16px;">Certified fitness
                        trainer with over 10 years of experience</p>
                </div>

                <!-- Trainer 3 -->
                <div
                    style="background-color: #f4f4f4; margin: 10px; padding: 20px; border-radius: 10px; text-align: center; width: 300px; display: flex; flex-direction: column; align-items: center;">
                    <img src="assets/images/trainer1.jpg" alt="Trainer 3"
                        style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 10px;">
                    <h3 style="font-size: 24px;">Jason Williams</h3>
                    <p style="font-size: 16px;"> Passionate yoga and mindfulness instructor. </p>
                </div>
            </div>

        </div>
    </div>

    <div class="products">
        <div class="container-products">
            <h1 class="lg-title">Special Supplyments With Offers</h1>


            <div class="product-items">
                <!-- single product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="assets/images/1.jpg" alt="product image">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-buy"><a href="https://supplementfactory.lk/"> buy
                                    now
                                </a>
                                <span><i class="fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">MASS GAINER</h2>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>

                            </div>
                        </div>
                        <a href="#" class="product-name">CARNIVOR MASS 6 LBS</a>
                        <p class="product-price">$ 150.00</p>
                        <p class="product-price">$ 133.00</p>
                    </div>


                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="assets/images/2.jpg" alt="product image">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-buy"><a href="https://supplementfactory.lk/"> buy
                                    now
                                </a>
                                <span><i class="fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">MASS GAINER</h2>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>

                            </div>
                        </div>
                        <a href="#" class="product-name">MASS-TECH 6 LBS</a>
                        <p class="product-price">$ 150.00</p>
                        <p class="product-price">$ 133.00</p>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="assets/images/4.jpg" alt="product image">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-buy"><a href="https://supplementfactory.lk/"> buy
                                    now
                                </a>
                                <span><i class="fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">MASS GAINER</h2>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>

                            </div>
                        </div>
                        <a href="#" class="product-name">CELLTECH 6 LBS</a>
                        <p class="product-price">$ 150.00</p>
                        <p class="product-price">$ 133.00</p>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="assets/images/5.jpg" alt="product image">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-buy"><a href="https://supplementfactory.lk/">
                                    buy
                                    now
                                </a>
                                <span><i class="fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">MASS GAINER</h2>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>

                            </div>
                        </div>
                        <a href="#" class="product-name">MASS-TECH 7 LBS</a>
                        <p class="product-price">$ 150.00</p>
                        <p class="product-price">$ 133.00</p>
                    </div>


                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="assets/images/10.jpg" alt="product image">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-buy"><a href="https://supplementfactory.lk/">
                                    buy
                                    now
                                </a>
                                <span><i class="fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">CREATINE</h2>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>

                            </div>
                        </div>
                        <a href="#" class="product-name">NITRO-TECH CREATINE</a>
                        <p class="product-price">$ 150.00</p>
                        <p class="product-price">$ 133.00</p>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="assets/images/11.jpg" alt="product image">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-buy"><a href="https://supplementfactory.lk/">
                                    buy
                                    now
                                </a>
                                <span><i class="fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">CREATINE</h2>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>

                            </div>
                        </div>
                        <a href="#" class="product-name">NUTREX CREATINE DRIVE</a>
                        <p class="product-price">$ 150.00</p>
                        <p class="product-price">$ 133.00</p>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="assets/images/6.jpg" alt="product image">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-buy"><a href="https://supplementfactory.lk/">
                                    buy
                                    now
                                </a>
                                <span><i class="fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">CREATINE</h2>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>

                            </div>
                        </div>
                        <a href="#" class="product-name">API CREATINE 300PS</a>
                        <p class="product-price">$ 150.00</p>
                        <p class="product-price">$ 133.00</p>
                    </div>
                </div>
                <!-- end of single product -->
                <!-- single product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="assets/images/4.jpg" alt="product image">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-buy"><a href="https://supplementfactory.lk/">
                                    buy
                                    now
                                </a>
                                <span><i class="fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">CREATINE</h2>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>

                            </div>
                        </div>
                        <a href="#" class="product-name">BIOTECH CREATINE 300G</a>
                        <p class="product-price">$ 150.00</p>
                        <p class="product-price">$ 133.00</p>
                    </div>


                </div>
                <!-- end of single product -->
            </div>
        </div>
    </div>

    <div class="product-collection">
        <div class="container-products">
            <div class="product-collection-wrapper">
                <!-- product col left -->
                <div class="product-col-left flex">
                    <div class="product-col-content">
                        <h2 class="sm-title">Carnivor Mass</h2>
                        <h2 class="md-title">MASS GAINER</h2>
                        <p class="text-light">Gaspari Nutrition’s AMINOMAX 8000
                            is a scientifically designed blend of 91% hydrolyzed
                            lactalbumin from whey protein, containing very
                            low molecular weight proteins,</p>
                        <button type="button" class="btn-dark">Shop now</button>
                    </div>
                </div>

                <!-- product col right -->
                <div class="product-col-right">
                    <div class="product-col-r-top flex">
                        <div class="product-col-content">
                            <h2 class="sm-title">BIOTECH MONOHYDRATE</h2>
                            <h2 class="md-title">CREATINE</h2>
                            <p class="text-light">Creatine increases your performance
                                in a successive burst of short-term, high intensity exercises.
                                The beneficial effect is obtained with a daily intake of 3 g of creatine.
                                100% Creatine Monohydrate is prepared with pure, pharmaceutical grade creatine
                                in powdered form. </p>
                            <button type="button" class="btn-dark"><a href='https://supplementfactory.lk/'>Shop
                                    now</a></button>
                        </div>
                    </div>

                    <div class="product-col-r-bottom">
                        <!-- left -->
                        <div class="flex">
                            <div class="product-col-content">

                                <h2 class="md-title">Extra 50% Off </h2>
                                <p class="text-light">With the development of Sri Lankan exports, Supplyments
                                    has acquired a commanding position in the global market. Currently, Sri
                                    Lanka exports creatine to more than 40 countries. </p>
                                <button type="button" class="btn-dark"><a href='https://supplementfactory.lk/'>Shop
                                        now</a></button>
                            </div>
                        </div>
                        <!-- right -->
                        <div class="flex">
                            <div class="product-col-content">

                                <h2 class="md-title">best sellers </h2>
                                <p class="text-light">We deliver more than 50% of creatine in value added form.
                                    The
                                    Value added product range of Sri Lankan supplyments includes
                                    flavoured.</p>
                                <button type="button" class="btn-dark"><a href='https://supplementfactory.lk/'>Shop
                                        now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- ... (footer content) ... -->
    <footer class="footer">
        <div class="social">
            <h2>Follow Us On</h2>
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        <div class="coppyright">
            <p> Copyright ©2023 All rights reserved | VirtualFitClub.com</p>
        </div>
    </footer>
</body>

</html>
