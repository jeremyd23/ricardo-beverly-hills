<!doctype html>
<html lang="en">
<head>
    {{--Meta--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        menu,
        nav,
        section,
        summary {
            display: block;
        }

        audio,
        canvas,
        progress,
        video {
            display: inline-block;
            vertical-align: baseline;
        }

        audio:not([controls]) {
            display: none;
            height: 0;
        }

        [hidden],
        template {
            display: none;
        }

        a {
            background-color: transparent;
        }

        a:active,
        a:hover {
            outline: 0;
        }

        abbr[title] {
            border-bottom: 1px dotted;
        }

        b,
        strong {
            font-weight: bold;
        }

        dfn {
            font-style: italic;
        }

        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        mark {
            background: #ff0;
            color: #000;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sup {
            top: -0.5em;
        }

        sub {
            bottom: -0.25em;
        }

        img {
            border: 0;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        figure {
            margin: 1em 40px;
        }

        hr {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            height: 0;
        }

        pre {
            overflow: auto;
        }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        button {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        html input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        button[disabled],
        html input[disabled] {
            cursor: default;
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0;
        }

        input {
            line-height: normal;
        }

        input[type="checkbox"],
        input[type="radio"] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        input[type="search"] {
            -webkit-appearance: textfield;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }

        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        fieldset {
            border: 1px solid #c0c0c0;
            margin: 0 2px;
            padding: 0.35em 0.625em 0.75em;
        }

        legend {
            border: 0;
            padding: 0;
        }

        textarea {
            overflow: auto;
        }

        optgroup {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        td,
        th {
            padding: 0;
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            font-size: 10px;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333333;
            background-color: #ffffff;
        }

        input,
        button,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        a {
            color: #337ab7;
            text-decoration: none;
        }

        a:hover,
        a:focus {
            color: #23527c;
            text-decoration: underline;
        }

        a:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        figure {
            margin: 0;
        }

        img {
            vertical-align: middle;
        }

        .img-responsive {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .img-rounded {
            border-radius: 6px;
        }

        .img-thumbnail {
            padding: 4px;
            line-height: 1.42857143;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 4px;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            display: inline-block;
            max-width: 100%;
            height: auto;
        }

        .img-circle {
            border-radius: 50%;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #eeeeee;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            clip: auto;
        }

        [role="button"] {
            cursor: pointer;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }

        h1 small,
        h2 small,
        h3 small,
        h4 small,
        h5 small,
        h6 small,
        .h1 small,
        .h2 small,
        .h3 small,
        .h4 small,
        .h5 small,
        .h6 small,
        h1 .small,
        h2 .small,
        h3 .small,
        h4 .small,
        h5 .small,
        h6 .small,
        .h1 .small,
        .h2 .small,
        .h3 .small,
        .h4 .small,
        .h5 .small,
        .h6 .small {
            font-weight: normal;
            line-height: 1;
            color: #777777;
        }

        h1,
        .h1,
        h2,
        .h2,
        h3,
        .h3 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        h1 small,
        .h1 small,
        h2 small,
        .h2 small,
        h3 small,
        .h3 small,
        h1 .small,
        .h1 .small,
        h2 .small,
        .h2 .small,
        h3 .small,
        .h3 .small {
            font-size: 65%;
        }

        h4,
        .h4,
        h5,
        .h5,
        h6,
        .h6 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        h4 small,
        .h4 small,
        h5 small,
        .h5 small,
        h6 small,
        .h6 small,
        h4 .small,
        .h4 .small,
        h5 .small,
        .h5 .small,
        h6 .small,
        .h6 .small {
            font-size: 75%;
        }

        h1,
        .h1 {
            font-size: 36px;
        }

        h2,
        .h2 {
            font-size: 30px;
        }

        h3,
        .h3 {
            font-size: 24px;
        }

        h4,
        .h4 {
            font-size: 18px;
        }

        h5,
        .h5 {
            font-size: 14px;
        }

        h6,
        .h6 {
            font-size: 12px;
        }

        p {
            margin: 0 0 10px;
        }

        .lead {
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: 300;
            line-height: 1.4;
        }

        @media (min-width: 768px) {
            .lead {
                font-size: 21px;
            }
        }

        small,
        .small {
            font-size: 85%;
        }

        mark,
        .mark {
            background-color: #fcf8e3;
            padding: .2em;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .text-justify {
            text-align: justify;
        }

        .text-nowrap {
            white-space: nowrap;
        }

        .text-lowercase {
            text-transform: lowercase;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .text-capitalize {
            text-transform: capitalize;
        }

        .text-muted {
            color: #777777;
        }

        .text-primary {
            color: #337ab7;
        }

        a.text-primary:hover,
        a.text-primary:focus {
            color: #286090;
        }

        .text-success {
            color: #3c763d;
        }

        a.text-success:hover,
        a.text-success:focus {
            color: #2b542c;
        }

        .text-info {
            color: #31708f;
        }

        a.text-info:hover,
        a.text-info:focus {
            color: #245269;
        }

        .text-warning {
            color: #8a6d3b;
        }

        a.text-warning:hover,
        a.text-warning:focus {
            color: #66512c;
        }

        .text-danger {
            color: #a94442;
        }

        a.text-danger:hover,
        a.text-danger:focus {
            color: #843534;
        }

        .bg-primary {
            color: #fff;
            background-color: #337ab7;
        }

        a.bg-primary:hover,
        a.bg-primary:focus {
            background-color: #286090;
        }

        .bg-success {
            background-color: #dff0d8;
        }

        a.bg-success:hover,
        a.bg-success:focus {
            background-color: #c1e2b3;
        }

        .bg-info {
            background-color: #d9edf7;
        }

        a.bg-info:hover,
        a.bg-info:focus {
            background-color: #afd9ee;
        }

        .bg-warning {
            background-color: #fcf8e3;
        }

        a.bg-warning:hover,
        a.bg-warning:focus {
            background-color: #f7ecb5;
        }

        .bg-danger {
            background-color: #f2dede;
        }

        a.bg-danger:hover,
        a.bg-danger:focus {
            background-color: #e4b9b9;
        }

        .page-header {
            padding-bottom: 9px;
            margin: 40px 0 20px;
            border-bottom: 1px solid #eeeeee;
        }

        ul,
        ol {
            margin-top: 0;
            margin-bottom: 10px;
        }

        ul ul,
        ol ul,
        ul ol,
        ol ol {
            margin-bottom: 0;
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
            margin-left: -5px;
        }

        .list-inline > li {
            display: inline-block;
            padding-left: 5px;
            padding-right: 5px;
        }

        dl {
            margin-top: 0;
            margin-bottom: 20px;
        }

        dt,
        dd {
            line-height: 1.42857143;
        }

        dt {
            font-weight: bold;
        }

        dd {
            margin-left: 0;
        }

        @media (min-width: 768px) {
            .dl-horizontal dt {
                float: left;
                width: 160px;
                clear: left;
                text-align: right;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .dl-horizontal dd {
                margin-left: 180px;
            }
        }

        abbr[title],
        abbr[data-original-title] {
            cursor: help;
            border-bottom: 1px dotted #777777;
        }

        .initialism {
            font-size: 90%;
            text-transform: uppercase;
        }

        blockquote {
            padding: 10px 20px;
            margin: 0 0 20px;
            font-size: 17.5px;
            border-left: 5px solid #eeeeee;
        }

        blockquote p:last-child,
        blockquote ul:last-child,
        blockquote ol:last-child {
            margin-bottom: 0;
        }

        blockquote footer,
        blockquote small,
        blockquote .small {
            display: block;
            font-size: 80%;
            line-height: 1.42857143;
            color: #777777;
        }

        blockquote footer:before,
        blockquote small:before,
        blockquote .small:before {
            content: '\2014 \00A0';
        }

        .blockquote-reverse,
        blockquote.pull-right {
            padding-right: 15px;
            padding-left: 0;
            border-right: 5px solid #eeeeee;
            border-left: 0;
            text-align: right;
        }

        .blockquote-reverse footer:before,
        blockquote.pull-right footer:before,
        .blockquote-reverse small:before,
        blockquote.pull-right small:before,
        .blockquote-reverse .small:before,
        blockquote.pull-right .small:before {
            content: '';
        }

        .blockquote-reverse footer:after,
        blockquote.pull-right footer:after,
        .blockquote-reverse small:after,
        blockquote.pull-right small:after,
        .blockquote-reverse .small:after,
        blockquote.pull-right .small:after {
            content: '\00A0 \2014';
        }

        address {
            margin-bottom: 20px;
            font-style: normal;
            line-height: 1.42857143;
        }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        @media (min-width: 768px) {
            .container {
                width: 750px;
            }
        }

        @media (min-width: 992px) {
            .container {
                width: 970px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                width: 1170px;
            }
        }

        .container-fluid {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        .row {
            margin-left: -15px;
            margin-right: -15px;
        }

        .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
            float: left;
        }

        .col-xs-12 {
            width: 100%;
        }

        .col-xs-11 {
            width: 91.66666667%;
        }

        .col-xs-10 {
            width: 83.33333333%;
        }

        .col-xs-9 {
            width: 75%;
        }

        .col-xs-8 {
            width: 66.66666667%;
        }

        .col-xs-7 {
            width: 58.33333333%;
        }

        .col-xs-6 {
            width: 50%;
        }

        .col-xs-5 {
            width: 41.66666667%;
        }

        .col-xs-4 {
            width: 33.33333333%;
        }

        .col-xs-3 {
            width: 25%;
        }

        .col-xs-2 {
            width: 16.66666667%;
        }

        .col-xs-1 {
            width: 8.33333333%;
        }

        .col-xs-pull-12 {
            right: 100%;
        }

        .col-xs-pull-11 {
            right: 91.66666667%;
        }

        .col-xs-pull-10 {
            right: 83.33333333%;
        }

        .col-xs-pull-9 {
            right: 75%;
        }

        .col-xs-pull-8 {
            right: 66.66666667%;
        }

        .col-xs-pull-7 {
            right: 58.33333333%;
        }

        .col-xs-pull-6 {
            right: 50%;
        }

        .col-xs-pull-5 {
            right: 41.66666667%;
        }

        .col-xs-pull-4 {
            right: 33.33333333%;
        }

        .col-xs-pull-3 {
            right: 25%;
        }

        .col-xs-pull-2 {
            right: 16.66666667%;
        }

        .col-xs-pull-1 {
            right: 8.33333333%;
        }

        .col-xs-pull-0 {
            right: auto;
        }

        .col-xs-push-12 {
            left: 100%;
        }

        .col-xs-push-11 {
            left: 91.66666667%;
        }

        .col-xs-push-10 {
            left: 83.33333333%;
        }

        .col-xs-push-9 {
            left: 75%;
        }

        .col-xs-push-8 {
            left: 66.66666667%;
        }

        .col-xs-push-7 {
            left: 58.33333333%;
        }

        .col-xs-push-6 {
            left: 50%;
        }

        .col-xs-push-5 {
            left: 41.66666667%;
        }

        .col-xs-push-4 {
            left: 33.33333333%;
        }

        .col-xs-push-3 {
            left: 25%;
        }

        .col-xs-push-2 {
            left: 16.66666667%;
        }

        .col-xs-push-1 {
            left: 8.33333333%;
        }

        .col-xs-push-0 {
            left: auto;
        }

        .col-xs-offset-12 {
            margin-left: 100%;
        }

        .col-xs-offset-11 {
            margin-left: 91.66666667%;
        }

        .col-xs-offset-10 {
            margin-left: 83.33333333%;
        }

        .col-xs-offset-9 {
            margin-left: 75%;
        }

        .col-xs-offset-8 {
            margin-left: 66.66666667%;
        }

        .col-xs-offset-7 {
            margin-left: 58.33333333%;
        }

        .col-xs-offset-6 {
            margin-left: 50%;
        }

        .col-xs-offset-5 {
            margin-left: 41.66666667%;
        }

        .col-xs-offset-4 {
            margin-left: 33.33333333%;
        }

        .col-xs-offset-3 {
            margin-left: 25%;
        }

        .col-xs-offset-2 {
            margin-left: 16.66666667%;
        }

        .col-xs-offset-1 {
            margin-left: 8.33333333%;
        }

        .col-xs-offset-0 {
            margin-left: 0%;
        }

        @media (min-width: 768px) {
            .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
                float: left;
            }

            .col-sm-12 {
                width: 100%;
            }

            .col-sm-11 {
                width: 91.66666667%;
            }

            .col-sm-10 {
                width: 83.33333333%;
            }

            .col-sm-9 {
                width: 75%;
            }

            .col-sm-8 {
                width: 66.66666667%;
            }

            .col-sm-7 {
                width: 58.33333333%;
            }

            .col-sm-6 {
                width: 50%;
            }

            .col-sm-5 {
                width: 41.66666667%;
            }

            .col-sm-4 {
                width: 33.33333333%;
            }

            .col-sm-3 {
                width: 25%;
            }

            .col-sm-2 {
                width: 16.66666667%;
            }

            .col-sm-1 {
                width: 8.33333333%;
            }

            .col-sm-pull-12 {
                right: 100%;
            }

            .col-sm-pull-11 {
                right: 91.66666667%;
            }

            .col-sm-pull-10 {
                right: 83.33333333%;
            }

            .col-sm-pull-9 {
                right: 75%;
            }

            .col-sm-pull-8 {
                right: 66.66666667%;
            }

            .col-sm-pull-7 {
                right: 58.33333333%;
            }

            .col-sm-pull-6 {
                right: 50%;
            }

            .col-sm-pull-5 {
                right: 41.66666667%;
            }

            .col-sm-pull-4 {
                right: 33.33333333%;
            }

            .col-sm-pull-3 {
                right: 25%;
            }

            .col-sm-pull-2 {
                right: 16.66666667%;
            }

            .col-sm-pull-1 {
                right: 8.33333333%;
            }

            .col-sm-pull-0 {
                right: auto;
            }

            .col-sm-push-12 {
                left: 100%;
            }

            .col-sm-push-11 {
                left: 91.66666667%;
            }

            .col-sm-push-10 {
                left: 83.33333333%;
            }

            .col-sm-push-9 {
                left: 75%;
            }

            .col-sm-push-8 {
                left: 66.66666667%;
            }

            .col-sm-push-7 {
                left: 58.33333333%;
            }

            .col-sm-push-6 {
                left: 50%;
            }

            .col-sm-push-5 {
                left: 41.66666667%;
            }

            .col-sm-push-4 {
                left: 33.33333333%;
            }

            .col-sm-push-3 {
                left: 25%;
            }

            .col-sm-push-2 {
                left: 16.66666667%;
            }

            .col-sm-push-1 {
                left: 8.33333333%;
            }

            .col-sm-push-0 {
                left: auto;
            }

            .col-sm-offset-12 {
                margin-left: 100%;
            }

            .col-sm-offset-11 {
                margin-left: 91.66666667%;
            }

            .col-sm-offset-10 {
                margin-left: 83.33333333%;
            }

            .col-sm-offset-9 {
                margin-left: 75%;
            }

            .col-sm-offset-8 {
                margin-left: 66.66666667%;
            }

            .col-sm-offset-7 {
                margin-left: 58.33333333%;
            }

            .col-sm-offset-6 {
                margin-left: 50%;
            }

            .col-sm-offset-5 {
                margin-left: 41.66666667%;
            }

            .col-sm-offset-4 {
                margin-left: 33.33333333%;
            }

            .col-sm-offset-3 {
                margin-left: 25%;
            }

            .col-sm-offset-2 {
                margin-left: 16.66666667%;
            }

            .col-sm-offset-1 {
                margin-left: 8.33333333%;
            }

            .col-sm-offset-0 {
                margin-left: 0%;
            }
        }

        @media (min-width: 992px) {
            .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
                float: left;
            }

            .col-md-12 {
                width: 100%;
            }

            .col-md-11 {
                width: 91.66666667%;
            }

            .col-md-10 {
                width: 83.33333333%;
            }

            .col-md-9 {
                width: 75%;
            }

            .col-md-8 {
                width: 66.66666667%;
            }

            .col-md-7 {
                width: 58.33333333%;
            }

            .col-md-6 {
                width: 50%;
            }

            .col-md-5 {
                width: 41.66666667%;
            }

            .col-md-4 {
                width: 33.33333333%;
            }

            .col-md-3 {
                width: 25%;
            }

            .col-md-2 {
                width: 16.66666667%;
            }

            .col-md-1 {
                width: 8.33333333%;
            }

            .col-md-pull-12 {
                right: 100%;
            }

            .col-md-pull-11 {
                right: 91.66666667%;
            }

            .col-md-pull-10 {
                right: 83.33333333%;
            }

            .col-md-pull-9 {
                right: 75%;
            }

            .col-md-pull-8 {
                right: 66.66666667%;
            }

            .col-md-pull-7 {
                right: 58.33333333%;
            }

            .col-md-pull-6 {
                right: 50%;
            }

            .col-md-pull-5 {
                right: 41.66666667%;
            }

            .col-md-pull-4 {
                right: 33.33333333%;
            }

            .col-md-pull-3 {
                right: 25%;
            }

            .col-md-pull-2 {
                right: 16.66666667%;
            }

            .col-md-pull-1 {
                right: 8.33333333%;
            }

            .col-md-pull-0 {
                right: auto;
            }

            .col-md-push-12 {
                left: 100%;
            }

            .col-md-push-11 {
                left: 91.66666667%;
            }

            .col-md-push-10 {
                left: 83.33333333%;
            }

            .col-md-push-9 {
                left: 75%;
            }

            .col-md-push-8 {
                left: 66.66666667%;
            }

            .col-md-push-7 {
                left: 58.33333333%;
            }

            .col-md-push-6 {
                left: 50%;
            }

            .col-md-push-5 {
                left: 41.66666667%;
            }

            .col-md-push-4 {
                left: 33.33333333%;
            }

            .col-md-push-3 {
                left: 25%;
            }

            .col-md-push-2 {
                left: 16.66666667%;
            }

            .col-md-push-1 {
                left: 8.33333333%;
            }

            .col-md-push-0 {
                left: auto;
            }

            .col-md-offset-12 {
                margin-left: 100%;
            }

            .col-md-offset-11 {
                margin-left: 91.66666667%;
            }

            .col-md-offset-10 {
                margin-left: 83.33333333%;
            }

            .col-md-offset-9 {
                margin-left: 75%;
            }

            .col-md-offset-8 {
                margin-left: 66.66666667%;
            }

            .col-md-offset-7 {
                margin-left: 58.33333333%;
            }

            .col-md-offset-6 {
                margin-left: 50%;
            }

            .col-md-offset-5 {
                margin-left: 41.66666667%;
            }

            .col-md-offset-4 {
                margin-left: 33.33333333%;
            }

            .col-md-offset-3 {
                margin-left: 25%;
            }

            .col-md-offset-2 {
                margin-left: 16.66666667%;
            }

            .col-md-offset-1 {
                margin-left: 8.33333333%;
            }

            .col-md-offset-0 {
                margin-left: 0%;
            }
        }

        @media (min-width: 1200px) {
            .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
                float: left;
            }

            .col-lg-12 {
                width: 100%;
            }

            .col-lg-11 {
                width: 91.66666667%;
            }

            .col-lg-10 {
                width: 83.33333333%;
            }

            .col-lg-9 {
                width: 75%;
            }

            .col-lg-8 {
                width: 66.66666667%;
            }

            .col-lg-7 {
                width: 58.33333333%;
            }

            .col-lg-6 {
                width: 50%;
            }

            .col-lg-5 {
                width: 41.66666667%;
            }

            .col-lg-4 {
                width: 33.33333333%;
            }

            .col-lg-3 {
                width: 25%;
            }

            .col-lg-2 {
                width: 16.66666667%;
            }

            .col-lg-1 {
                width: 8.33333333%;
            }

            .col-lg-pull-12 {
                right: 100%;
            }

            .col-lg-pull-11 {
                right: 91.66666667%;
            }

            .col-lg-pull-10 {
                right: 83.33333333%;
            }

            .col-lg-pull-9 {
                right: 75%;
            }

            .col-lg-pull-8 {
                right: 66.66666667%;
            }

            .col-lg-pull-7 {
                right: 58.33333333%;
            }

            .col-lg-pull-6 {
                right: 50%;
            }

            .col-lg-pull-5 {
                right: 41.66666667%;
            }

            .col-lg-pull-4 {
                right: 33.33333333%;
            }

            .col-lg-pull-3 {
                right: 25%;
            }

            .col-lg-pull-2 {
                right: 16.66666667%;
            }

            .col-lg-pull-1 {
                right: 8.33333333%;
            }

            .col-lg-pull-0 {
                right: auto;
            }

            .col-lg-push-12 {
                left: 100%;
            }

            .col-lg-push-11 {
                left: 91.66666667%;
            }

            .col-lg-push-10 {
                left: 83.33333333%;
            }

            .col-lg-push-9 {
                left: 75%;
            }

            .col-lg-push-8 {
                left: 66.66666667%;
            }

            .col-lg-push-7 {
                left: 58.33333333%;
            }

            .col-lg-push-6 {
                left: 50%;
            }

            .col-lg-push-5 {
                left: 41.66666667%;
            }

            .col-lg-push-4 {
                left: 33.33333333%;
            }

            .col-lg-push-3 {
                left: 25%;
            }

            .col-lg-push-2 {
                left: 16.66666667%;
            }

            .col-lg-push-1 {
                left: 8.33333333%;
            }

            .col-lg-push-0 {
                left: auto;
            }

            .col-lg-offset-12 {
                margin-left: 100%;
            }

            .col-lg-offset-11 {
                margin-left: 91.66666667%;
            }

            .col-lg-offset-10 {
                margin-left: 83.33333333%;
            }

            .col-lg-offset-9 {
                margin-left: 75%;
            }

            .col-lg-offset-8 {
                margin-left: 66.66666667%;
            }

            .col-lg-offset-7 {
                margin-left: 58.33333333%;
            }

            .col-lg-offset-6 {
                margin-left: 50%;
            }

            .col-lg-offset-5 {
                margin-left: 41.66666667%;
            }

            .col-lg-offset-4 {
                margin-left: 33.33333333%;
            }

            .col-lg-offset-3 {
                margin-left: 25%;
            }

            .col-lg-offset-2 {
                margin-left: 16.66666667%;
            }

            .col-lg-offset-1 {
                margin-left: 8.33333333%;
            }

            .col-lg-offset-0 {
                margin-left: 0%;
            }
        }

        .panel {
            margin-bottom: 20px;
            background-color: #ffffff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        }

        .panel-body {
            padding: 15px;
        }

        .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
        }

        .panel-heading > .dropdown .dropdown-toggle {
            color: inherit;
        }

        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: inherit;
        }

        .panel-title > a,
        .panel-title > small,
        .panel-title > .small,
        .panel-title > small > a,
        .panel-title > .small > a {
            color: inherit;
        }

        .panel-footer {
            padding: 10px 15px;
            background-color: #f5f5f5;
            border-top: 1px solid #dddddd;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .panel > .list-group,
        .panel > .panel-collapse > .list-group {
            margin-bottom: 0;
        }

        .panel > .list-group .list-group-item,
        .panel > .panel-collapse > .list-group .list-group-item {
            border-width: 1px 0;
            border-radius: 0;
        }

        .panel > .list-group:first-child .list-group-item:first-child,
        .panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
            border-top: 0;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
        }

        .panel > .list-group:last-child .list-group-item:last-child,
        .panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
            border-bottom: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }

        .panel-heading + .list-group .list-group-item:first-child {
            border-top-width: 0;
        }

        .list-group + .panel-footer {
            border-top-width: 0;
        }

        .panel > .table,
        .panel > .table-responsive > .table,
        .panel > .panel-collapse > .table {
            margin-bottom: 0;
        }

        .panel > .table caption,
        .panel > .table-responsive > .table caption,
        .panel > .panel-collapse > .table caption {
            padding-left: 15px;
            padding-right: 15px;
        }

        .panel > .table:first-child,
        .panel > .table-responsive:first-child > .table:first-child {
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
        }

        .panel > .table:first-child > thead:first-child > tr:first-child,
        .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
        .panel > .table:first-child > tbody:first-child > tr:first-child,
        .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
        .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
        .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
        .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
        .panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
        .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
        .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
        .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
            border-top-left-radius: 3px;
        }

        .panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
        .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
        .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
        .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
        .panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
        .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
        .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
        .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
            border-top-right-radius: 3px;
        }

        .panel > .table:last-child,
        .panel > .table-responsive:last-child > .table:last-child {
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .panel > .table:last-child > tbody:last-child > tr:last-child,
        .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
        .panel > .table:last-child > tfoot:last-child > tr:last-child,
        .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
        .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
        .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
        .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
        .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
        .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
        .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
        .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
            border-bottom-left-radius: 3px;
        }

        .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
        .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
        .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
        .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
        .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
        .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
        .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
        .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
            border-bottom-right-radius: 3px;
        }

        .panel > .panel-body + .table,
        .panel > .panel-body + .table-responsive,
        .panel > .table + .panel-body,
        .panel > .table-responsive + .panel-body {
            border-top: 1px solid #dddddd;
        }

        .panel > .table > tbody:first-child > tr:first-child th,
        .panel > .table > tbody:first-child > tr:first-child td {
            border-top: 0;
        }

        .panel > .table-bordered,
        .panel > .table-responsive > .table-bordered {
            border: 0;
        }

        .panel > .table-bordered > thead > tr > th:first-child,
        .panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
        .panel > .table-bordered > tbody > tr > th:first-child,
        .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
        .panel > .table-bordered > tfoot > tr > th:first-child,
        .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
        .panel > .table-bordered > thead > tr > td:first-child,
        .panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
        .panel > .table-bordered > tbody > tr > td:first-child,
        .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
        .panel > .table-bordered > tfoot > tr > td:first-child,
        .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
            border-left: 0;
        }

        .panel > .table-bordered > thead > tr > th:last-child,
        .panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
        .panel > .table-bordered > tbody > tr > th:last-child,
        .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
        .panel > .table-bordered > tfoot > tr > th:last-child,
        .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
        .panel > .table-bordered > thead > tr > td:last-child,
        .panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
        .panel > .table-bordered > tbody > tr > td:last-child,
        .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
        .panel > .table-bordered > tfoot > tr > td:last-child,
        .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
            border-right: 0;
        }

        .panel > .table-bordered > thead > tr:first-child > td,
        .panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
        .panel > .table-bordered > tbody > tr:first-child > td,
        .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
        .panel > .table-bordered > thead > tr:first-child > th,
        .panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
        .panel > .table-bordered > tbody > tr:first-child > th,
        .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
            border-bottom: 0;
        }

        .panel > .table-bordered > tbody > tr:last-child > td,
        .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
        .panel > .table-bordered > tfoot > tr:last-child > td,
        .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
        .panel > .table-bordered > tbody > tr:last-child > th,
        .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
        .panel > .table-bordered > tfoot > tr:last-child > th,
        .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
            border-bottom: 0;
        }

        .panel > .table-responsive {
            border: 0;
            margin-bottom: 0;
        }

        .panel-group {
            margin-bottom: 20px;
        }

        .panel-group .panel {
            margin-bottom: 0;
            border-radius: 4px;
        }

        .panel-group .panel + .panel {
            margin-top: 5px;
        }

        .panel-group .panel-heading {
            border-bottom: 0;
        }

        .panel-group .panel-heading + .panel-collapse > .panel-body,
        .panel-group .panel-heading + .panel-collapse > .list-group {
            border-top: 1px solid #dddddd;
        }

        .panel-group .panel-footer {
            border-top: 0;
        }

        .panel-group .panel-footer + .panel-collapse .panel-body {
            border-bottom: 1px solid #dddddd;
        }

        .panel-default {
            border-color: #dddddd;
        }

        .panel-default > .panel-heading {
            color: #333333;
            background-color: #f5f5f5;
            border-color: #dddddd;
        }

        .panel-default > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #dddddd;
        }

        .panel-default > .panel-heading .badge {
            color: #f5f5f5;
            background-color: #333333;
        }

        .panel-default > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #dddddd;
        }

        .panel-primary {
            border-color: #337ab7;
        }

        .panel-primary > .panel-heading {
            color: #ffffff;
            background-color: #337ab7;
            border-color: #337ab7;
        }

        .panel-primary > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #337ab7;
        }

        .panel-primary > .panel-heading .badge {
            color: #337ab7;
            background-color: #ffffff;
        }

        .panel-primary > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #337ab7;
        }

        .panel-success {
            border-color: #d6e9c6;
        }

        .panel-success > .panel-heading {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }

        .panel-success > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #d6e9c6;
        }

        .panel-success > .panel-heading .badge {
            color: #dff0d8;
            background-color: #3c763d;
        }

        .panel-success > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #d6e9c6;
        }

        .panel-info {
            border-color: #bce8f1;
        }

        .panel-info > .panel-heading {
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1;
        }

        .panel-info > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #bce8f1;
        }

        .panel-info > .panel-heading .badge {
            color: #d9edf7;
            background-color: #31708f;
        }

        .panel-info > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #bce8f1;
        }

        .panel-warning {
            border-color: #faebcc;
        }

        .panel-warning > .panel-heading {
            color: #8a6d3b;
            background-color: #fcf8e3;
            border-color: #faebcc;
        }

        .panel-warning > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #faebcc;
        }

        .panel-warning > .panel-heading .badge {
            color: #fcf8e3;
            background-color: #8a6d3b;
        }

        .panel-warning > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #faebcc;
        }

        .panel-danger {
            border-color: #ebccd1;
        }

        .panel-danger > .panel-heading {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }

        .panel-danger > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #ebccd1;
        }

        .panel-danger > .panel-heading .badge {
            color: #f2dede;
            background-color: #a94442;
        }

        .panel-danger > .panel-footer + .panel-collapse > .panel-body {
            border-bottom-color: #ebccd1;
        }

        .clearfix:before,
        .clearfix:after,
        .dl-horizontal dd:before,
        .dl-horizontal dd:after,
        .container:before,
        .container:after,
        .container-fluid:before,
        .container-fluid:after,
        .row:before,
        .row:after,
        .panel-body:before,
        .panel-body:after {
            content: " ";
            display: table;
        }

        .clearfix:after,
        .dl-horizontal dd:after,
        .container:after,
        .container-fluid:after,
        .row:after,
        .panel-body:after {
            clear: both;
        }

        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .pull-right {
            float: right !important;
        }

        .pull-left {
            float: left !important;
        }

        .hide {
            display: none !important;
        }

        .show {
            display: block !important;
        }

        .invisible {
            visibility: hidden;
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .hidden {
            display: none !important;
        }

        .affix {
            position: fixed;
        }

        .btn-default,
        .btn-primary,
        .btn-success,
        .btn-info,
        .btn-warning,
        .btn-danger {
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .btn-default:active,
        .btn-primary:active,
        .btn-success:active,
        .btn-info:active,
        .btn-warning:active,
        .btn-danger:active,
        .btn-default.active,
        .btn-primary.active,
        .btn-success.active,
        .btn-info.active,
        .btn-warning.active,
        .btn-danger.active {
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        }

        .btn-default.disabled,
        .btn-primary.disabled,
        .btn-success.disabled,
        .btn-info.disabled,
        .btn-warning.disabled,
        .btn-danger.disabled,
        .btn-default[disabled],
        .btn-primary[disabled],
        .btn-success[disabled],
        .btn-info[disabled],
        .btn-warning[disabled],
        .btn-danger[disabled],
        fieldset[disabled] .btn-default,
        fieldset[disabled] .btn-primary,
        fieldset[disabled] .btn-success,
        fieldset[disabled] .btn-info,
        fieldset[disabled] .btn-warning,
        fieldset[disabled] .btn-danger {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .btn-default .badge,
        .btn-primary .badge,
        .btn-success .badge,
        .btn-info .badge,
        .btn-warning .badge,
        .btn-danger .badge {
            text-shadow: none;
        }

        .btn:active,
        .btn.active {
            background-image: none;
        }

        .btn-default {
            background-image: -webkit-linear-gradient(top, #ffffff 0%, #e0e0e0 100%);
            background-image: -o-linear-gradient(top, #ffffff 0%, #e0e0e0 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#e0e0e0));
            background-image: linear-gradient(to bottom, #ffffff 0%, #e0e0e0 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            background-repeat: repeat-x;
            border-color: #dbdbdb;
            text-shadow: 0 1px 0 #fff;
            border-color: #ccc;
        }

        .btn-default:hover,
        .btn-default:focus {
            background-color: #e0e0e0;
            background-position: 0 -15px;
        }

        .btn-default:active,
        .btn-default.active {
            background-color: #e0e0e0;
            border-color: #dbdbdb;
        }

        .btn-default.disabled,
        .btn-default[disabled],
        fieldset[disabled] .btn-default,
        .btn-default.disabled:hover,
        .btn-default[disabled]:hover,
        fieldset[disabled] .btn-default:hover,
        .btn-default.disabled:focus,
        .btn-default[disabled]:focus,
        fieldset[disabled] .btn-default:focus,
        .btn-default.disabled.focus,
        .btn-default[disabled].focus,
        fieldset[disabled] .btn-default.focus,
        .btn-default.disabled:active,
        .btn-default[disabled]:active,
        fieldset[disabled] .btn-default:active,
        .btn-default.disabled.active,
        .btn-default[disabled].active,
        fieldset[disabled] .btn-default.active {
            background-color: #e0e0e0;
            background-image: none;
        }

        .btn-primary {
            background-image: -webkit-linear-gradient(top, #337ab7 0%, #265a88 100%);
            background-image: -o-linear-gradient(top, #337ab7 0%, #265a88 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#265a88));
            background-image: linear-gradient(to bottom, #337ab7 0%, #265a88 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff265a88', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            background-repeat: repeat-x;
            border-color: #245580;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #265a88;
            background-position: 0 -15px;
        }

        .btn-primary:active,
        .btn-primary.active {
            background-color: #265a88;
            border-color: #245580;
        }

        .btn-primary.disabled,
        .btn-primary[disabled],
        fieldset[disabled] .btn-primary,
        .btn-primary.disabled:hover,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary:hover,
        .btn-primary.disabled:focus,
        .btn-primary[disabled]:focus,
        fieldset[disabled] .btn-primary:focus,
        .btn-primary.disabled.focus,
        .btn-primary[disabled].focus,
        fieldset[disabled] .btn-primary.focus,
        .btn-primary.disabled:active,
        .btn-primary[disabled]:active,
        fieldset[disabled] .btn-primary:active,
        .btn-primary.disabled.active,
        .btn-primary[disabled].active,
        fieldset[disabled] .btn-primary.active {
            background-color: #265a88;
            background-image: none;
        }

        .btn-success {
            background-image: -webkit-linear-gradient(top, #5cb85c 0%, #419641 100%);
            background-image: -o-linear-gradient(top, #5cb85c 0%, #419641 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#5cb85c), to(#419641));
            background-image: linear-gradient(to bottom, #5cb85c 0%, #419641 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c', endColorstr='#ff419641', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            background-repeat: repeat-x;
            border-color: #3e8f3e;
        }

        .btn-success:hover,
        .btn-success:focus {
            background-color: #419641;
            background-position: 0 -15px;
        }

        .btn-success:active,
        .btn-success.active {
            background-color: #419641;
            border-color: #3e8f3e;
        }

        .btn-success.disabled,
        .btn-success[disabled],
        fieldset[disabled] .btn-success,
        .btn-success.disabled:hover,
        .btn-success[disabled]:hover,
        fieldset[disabled] .btn-success:hover,
        .btn-success.disabled:focus,
        .btn-success[disabled]:focus,
        fieldset[disabled] .btn-success:focus,
        .btn-success.disabled.focus,
        .btn-success[disabled].focus,
        fieldset[disabled] .btn-success.focus,
        .btn-success.disabled:active,
        .btn-success[disabled]:active,
        fieldset[disabled] .btn-success:active,
        .btn-success.disabled.active,
        .btn-success[disabled].active,
        fieldset[disabled] .btn-success.active {
            background-color: #419641;
            background-image: none;
        }

        .btn-info {
            background-image: -webkit-linear-gradient(top, #5bc0de 0%, #2aabd2 100%);
            background-image: -o-linear-gradient(top, #5bc0de 0%, #2aabd2 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#5bc0de), to(#2aabd2));
            background-image: linear-gradient(to bottom, #5bc0de 0%, #2aabd2 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2aabd2', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            background-repeat: repeat-x;
            border-color: #28a4c9;
        }

        .btn-info:hover,
        .btn-info:focus {
            background-color: #2aabd2;
            background-position: 0 -15px;
        }

        .btn-info:active,
        .btn-info.active {
            background-color: #2aabd2;
            border-color: #28a4c9;
        }

        .btn-info.disabled,
        .btn-info[disabled],
        fieldset[disabled] .btn-info,
        .btn-info.disabled:hover,
        .btn-info[disabled]:hover,
        fieldset[disabled] .btn-info:hover,
        .btn-info.disabled:focus,
        .btn-info[disabled]:focus,
        fieldset[disabled] .btn-info:focus,
        .btn-info.disabled.focus,
        .btn-info[disabled].focus,
        fieldset[disabled] .btn-info.focus,
        .btn-info.disabled:active,
        .btn-info[disabled]:active,
        fieldset[disabled] .btn-info:active,
        .btn-info.disabled.active,
        .btn-info[disabled].active,
        fieldset[disabled] .btn-info.active {
            background-color: #2aabd2;
            background-image: none;
        }

        .btn-warning {
            background-image: -webkit-linear-gradient(top, #f0ad4e 0%, #eb9316 100%);
            background-image: -o-linear-gradient(top, #f0ad4e 0%, #eb9316 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f0ad4e), to(#eb9316));
            background-image: linear-gradient(to bottom, #f0ad4e 0%, #eb9316 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e', endColorstr='#ffeb9316', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            background-repeat: repeat-x;
            border-color: #e38d13;
        }

        .btn-warning:hover,
        .btn-warning:focus {
            background-color: #eb9316;
            background-position: 0 -15px;
        }

        .btn-warning:active,
        .btn-warning.active {
            background-color: #eb9316;
            border-color: #e38d13;
        }

        .btn-warning.disabled,
        .btn-warning[disabled],
        fieldset[disabled] .btn-warning,
        .btn-warning.disabled:hover,
        .btn-warning[disabled]:hover,
        fieldset[disabled] .btn-warning:hover,
        .btn-warning.disabled:focus,
        .btn-warning[disabled]:focus,
        fieldset[disabled] .btn-warning:focus,
        .btn-warning.disabled.focus,
        .btn-warning[disabled].focus,
        fieldset[disabled] .btn-warning.focus,
        .btn-warning.disabled:active,
        .btn-warning[disabled]:active,
        fieldset[disabled] .btn-warning:active,
        .btn-warning.disabled.active,
        .btn-warning[disabled].active,
        fieldset[disabled] .btn-warning.active {
            background-color: #eb9316;
            background-image: none;
        }

        .btn-danger {
            background-image: -webkit-linear-gradient(top, #d9534f 0%, #c12e2a 100%);
            background-image: -o-linear-gradient(top, #d9534f 0%, #c12e2a 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#d9534f), to(#c12e2a));
            background-image: linear-gradient(to bottom, #d9534f 0%, #c12e2a 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f', endColorstr='#ffc12e2a', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            background-repeat: repeat-x;
            border-color: #b92c28;
        }

        .btn-danger:hover,
        .btn-danger:focus {
            background-color: #c12e2a;
            background-position: 0 -15px;
        }

        .btn-danger:active,
        .btn-danger.active {
            background-color: #c12e2a;
            border-color: #b92c28;
        }

        .btn-danger.disabled,
        .btn-danger[disabled],
        fieldset[disabled] .btn-danger,
        .btn-danger.disabled:hover,
        .btn-danger[disabled]:hover,
        fieldset[disabled] .btn-danger:hover,
        .btn-danger.disabled:focus,
        .btn-danger[disabled]:focus,
        fieldset[disabled] .btn-danger:focus,
        .btn-danger.disabled.focus,
        .btn-danger[disabled].focus,
        fieldset[disabled] .btn-danger.focus,
        .btn-danger.disabled:active,
        .btn-danger[disabled]:active,
        fieldset[disabled] .btn-danger:active,
        .btn-danger.disabled.active,
        .btn-danger[disabled].active,
        fieldset[disabled] .btn-danger.active {
            background-color: #c12e2a;
            background-image: none;
        }

        .thumbnail,
        .img-thumbnail {
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
        }

        .dropdown-menu > li > a:hover,
        .dropdown-menu > li > a:focus {
            background-image: -webkit-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
            background-image: -o-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#e8e8e8));
            background-image: linear-gradient(to bottom, #f5f5f5 0%, #e8e8e8 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);
            background-color: #e8e8e8;
        }

        .dropdown-menu > .active > a,
        .dropdown-menu > .active > a:hover,
        .dropdown-menu > .active > a:focus {
            background-image: -webkit-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
            background-image: -o-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#2e6da4));
            background-image: linear-gradient(to bottom, #337ab7 0%, #2e6da4 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2e6da4', GradientType=0);
            background-color: #2e6da4;
        }

        .navbar-default {
            background-image: -webkit-linear-gradient(top, #ffffff 0%, #f8f8f8 100%);
            background-image: -o-linear-gradient(top, #ffffff 0%, #f8f8f8 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#f8f8f8));
            background-image: linear-gradient(to bottom, #ffffff 0%, #f8f8f8 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff8f8f8', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 5px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 5px rgba(0, 0, 0, 0.075);
        }

        .navbar-default .navbar-nav > .open > a,
        .navbar-default .navbar-nav > .active > a {
            background-image: -webkit-linear-gradient(top, #dbdbdb 0%, #e2e2e2 100%);
            background-image: -o-linear-gradient(top, #dbdbdb 0%, #e2e2e2 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#dbdbdb), to(#e2e2e2));
            background-image: linear-gradient(to bottom, #dbdbdb 0%, #e2e2e2 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdbdbdb', endColorstr='#ffe2e2e2', GradientType=0);
            -webkit-box-shadow: inset 0 3px 9px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 3px 9px rgba(0, 0, 0, 0.075);
        }

        .navbar-brand,
        .navbar-nav > li > a {
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.25);
        }

        .navbar-inverse {
            background-image: -webkit-linear-gradient(top, #3c3c3c 0%, #222222 100%);
            background-image: -o-linear-gradient(top, #3c3c3c 0%, #222222 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#3c3c3c), to(#222222));
            background-image: linear-gradient(to bottom, #3c3c3c 0%, #222222 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3c3c3c', endColorstr='#ff222222', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            border-radius: 4px;
        }

        .navbar-inverse .navbar-nav > .open > a,
        .navbar-inverse .navbar-nav > .active > a {
            background-image: -webkit-linear-gradient(top, #080808 0%, #0f0f0f 100%);
            background-image: -o-linear-gradient(top, #080808 0%, #0f0f0f 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#080808), to(#0f0f0f));
            background-image: linear-gradient(to bottom, #080808 0%, #0f0f0f 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff080808', endColorstr='#ff0f0f0f', GradientType=0);
            -webkit-box-shadow: inset 0 3px 9px rgba(0, 0, 0, 0.25);
            box-shadow: inset 0 3px 9px rgba(0, 0, 0, 0.25);
        }

        .navbar-inverse .navbar-brand,
        .navbar-inverse .navbar-nav > li > a {
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
        }

        .navbar-static-top,
        .navbar-fixed-top,
        .navbar-fixed-bottom {
            border-radius: 0;
        }

        @media (max-width: 767px) {
            .navbar .navbar-nav .open .dropdown-menu > .active > a,
            .navbar .navbar-nav .open .dropdown-menu > .active > a:hover,
            .navbar .navbar-nav .open .dropdown-menu > .active > a:focus {
                color: #fff;
                background-image: -webkit-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
                background-image: -o-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
                background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#2e6da4));
                background-image: linear-gradient(to bottom, #337ab7 0%, #2e6da4 100%);
                background-repeat: repeat-x;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2e6da4', GradientType=0);
            }
        }

        .alert {
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .alert-success {
            background-image: -webkit-linear-gradient(top, #dff0d8 0%, #c8e5bc 100%);
            background-image: -o-linear-gradient(top, #dff0d8 0%, #c8e5bc 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#dff0d8), to(#c8e5bc));
            background-image: linear-gradient(to bottom, #dff0d8 0%, #c8e5bc 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffc8e5bc', GradientType=0);
            border-color: #b2dba1;
        }

        .alert-info {
            background-image: -webkit-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
            background-image: -o-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#d9edf7), to(#b9def0));
            background-image: linear-gradient(to bottom, #d9edf7 0%, #b9def0 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffb9def0', GradientType=0);
            border-color: #9acfea;
        }

        .alert-warning {
            background-image: -webkit-linear-gradient(top, #fcf8e3 0%, #f8efc0 100%);
            background-image: -o-linear-gradient(top, #fcf8e3 0%, #f8efc0 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#fcf8e3), to(#f8efc0));
            background-image: linear-gradient(to bottom, #fcf8e3 0%, #f8efc0 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffcf8e3', endColorstr='#fff8efc0', GradientType=0);
            border-color: #f5e79e;
        }

        .alert-danger {
            background-image: -webkit-linear-gradient(top, #f2dede 0%, #e7c3c3 100%);
            background-image: -o-linear-gradient(top, #f2dede 0%, #e7c3c3 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f2dede), to(#e7c3c3));
            background-image: linear-gradient(to bottom, #f2dede 0%, #e7c3c3 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2dede', endColorstr='#ffe7c3c3', GradientType=0);
            border-color: #dca7a7;
        }

        .progress {
            background-image: -webkit-linear-gradient(top, #ebebeb 0%, #f5f5f5 100%);
            background-image: -o-linear-gradient(top, #ebebeb 0%, #f5f5f5 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#ebebeb), to(#f5f5f5));
            background-image: linear-gradient(to bottom, #ebebeb 0%, #f5f5f5 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffebebeb', endColorstr='#fff5f5f5', GradientType=0);
        }

        .progress-bar {
            background-image: -webkit-linear-gradient(top, #337ab7 0%, #286090 100%);
            background-image: -o-linear-gradient(top, #337ab7 0%, #286090 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#286090));
            background-image: linear-gradient(to bottom, #337ab7 0%, #286090 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff286090', GradientType=0);
        }

        .progress-bar-success {
            background-image: -webkit-linear-gradient(top, #5cb85c 0%, #449d44 100%);
            background-image: -o-linear-gradient(top, #5cb85c 0%, #449d44 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#5cb85c), to(#449d44));
            background-image: linear-gradient(to bottom, #5cb85c 0%, #449d44 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c', endColorstr='#ff449d44', GradientType=0);
        }

        .progress-bar-info {
            background-image: -webkit-linear-gradient(top, #5bc0de 0%, #31b0d5 100%);
            background-image: -o-linear-gradient(top, #5bc0de 0%, #31b0d5 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#5bc0de), to(#31b0d5));
            background-image: linear-gradient(to bottom, #5bc0de 0%, #31b0d5 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff31b0d5', GradientType=0);
        }

        .progress-bar-warning {
            background-image: -webkit-linear-gradient(top, #f0ad4e 0%, #ec971f 100%);
            background-image: -o-linear-gradient(top, #f0ad4e 0%, #ec971f 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f0ad4e), to(#ec971f));
            background-image: linear-gradient(to bottom, #f0ad4e 0%, #ec971f 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e', endColorstr='#ffec971f', GradientType=0);
        }

        .progress-bar-danger {
            background-image: -webkit-linear-gradient(top, #d9534f 0%, #c9302c 100%);
            background-image: -o-linear-gradient(top, #d9534f 0%, #c9302c 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#d9534f), to(#c9302c));
            background-image: linear-gradient(to bottom, #d9534f 0%, #c9302c 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f', endColorstr='#ffc9302c', GradientType=0);
        }

        .progress-bar-striped {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        }

        .list-group {
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
        }

        .list-group-item.active,
        .list-group-item.active:hover,
        .list-group-item.active:focus {
            text-shadow: 0 -1px 0 #286090;
            background-image: -webkit-linear-gradient(top, #337ab7 0%, #2b669a 100%);
            background-image: -o-linear-gradient(top, #337ab7 0%, #2b669a 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#2b669a));
            background-image: linear-gradient(to bottom, #337ab7 0%, #2b669a 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2b669a', GradientType=0);
            border-color: #2b669a;
        }

        .list-group-item.active .badge,
        .list-group-item.active:hover .badge,
        .list-group-item.active:focus .badge {
            text-shadow: none;
        }

        .panel {
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .panel-default > .panel-heading {
            background-image: -webkit-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
            background-image: -o-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#e8e8e8));
            background-image: linear-gradient(to bottom, #f5f5f5 0%, #e8e8e8 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);
        }

        .panel-primary > .panel-heading {
            background-image: -webkit-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
            background-image: -o-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#2e6da4));
            background-image: linear-gradient(to bottom, #337ab7 0%, #2e6da4 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2e6da4', GradientType=0);
        }

        .panel-success > .panel-heading {
            background-image: -webkit-linear-gradient(top, #dff0d8 0%, #d0e9c6 100%);
            background-image: -o-linear-gradient(top, #dff0d8 0%, #d0e9c6 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#dff0d8), to(#d0e9c6));
            background-image: linear-gradient(to bottom, #dff0d8 0%, #d0e9c6 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffd0e9c6', GradientType=0);
        }

        .panel-info > .panel-heading {
            background-image: -webkit-linear-gradient(top, #d9edf7 0%, #c4e3f3 100%);
            background-image: -o-linear-gradient(top, #d9edf7 0%, #c4e3f3 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#d9edf7), to(#c4e3f3));
            background-image: linear-gradient(to bottom, #d9edf7 0%, #c4e3f3 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffc4e3f3', GradientType=0);
        }

        .panel-warning > .panel-heading {
            background-image: -webkit-linear-gradient(top, #fcf8e3 0%, #faf2cc 100%);
            background-image: -o-linear-gradient(top, #fcf8e3 0%, #faf2cc 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#fcf8e3), to(#faf2cc));
            background-image: linear-gradient(to bottom, #fcf8e3 0%, #faf2cc 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffcf8e3', endColorstr='#fffaf2cc', GradientType=0);
        }

        .panel-danger > .panel-heading {
            background-image: -webkit-linear-gradient(top, #f2dede 0%, #ebcccc 100%);
            background-image: -o-linear-gradient(top, #f2dede 0%, #ebcccc 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f2dede), to(#ebcccc));
            background-image: linear-gradient(to bottom, #f2dede 0%, #ebcccc 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2dede', endColorstr='#ffebcccc', GradientType=0);
        }

        .well {
            background-image: -webkit-linear-gradient(top, #e8e8e8 0%, #f5f5f5 100%);
            background-image: -o-linear-gradient(top, #e8e8e8 0%, #f5f5f5 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#e8e8e8), to(#f5f5f5));
            background-image: linear-gradient(to bottom, #e8e8e8 0%, #f5f5f5 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffe8e8e8', endColorstr='#fff5f5f5', GradientType=0);
            border-color: #dcdcdc;
            -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 0 rgba(255, 255, 255, 0.1);
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        /*Custom Styles*/
        .clearfix {
            overflow: hidden;
        }
    </style>

    <title>Ricardo Beverly Hills Part Order Confirmation</title>
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                {{--Image and Title--}}
                <div class="row clearfix">
                    <div class="col-xs-12">
                        <img src="{{$message->embed(public_path() . '/img/logo.jpg')}}"
                             class="img-responsive center-block" alt="">
                    </div>
                    <div class="col-xs-12">
                        <h2 class="text-center">Part Order</h2>
                    </div>
                </div>

                {{--Claim--}}
                <div class="row clearfix">
                    <div class="col-xs-12">
                        <h3>Claim #{{ $claim[0]->claim_id }}</h3>
                        <hr>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>Opened Date: </strong>{{ $claim[0]->claim_created_at }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>Closed Closed: </strong>{{ $claim[0]->claim_date_closed }}</p>
                    </div>
                </div>

                {{--Product--}}
                <div class="row clearfix">
                    <div class="col-xs-12">
                        <h3>Product</h3>
                        <hr>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>Product Style: </strong>{{ $claim[0]->product_style }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>Damage Code: </strong>{{ $claim[0]->dc_id }}</p>
                    </div>
                </div>

                {{--Customer--}}
                <div class="row clearfix">
                    <div class="col-xs-12">
                        <h3>Customer</h3>
                        <hr>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>First Name: </strong>{{ $claim[0]->cust_first_name }}</p>
                        <p><strong>Last Name: </strong>{{ $claim[0]->cust_last_name }}</p>
                        <p><strong>Phone: </strong>{{ $claim[0]->cust_phone }}</p>
                        <p><strong>Email: </strong>{{ $claim[0]->cust_email }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>Address: </strong>{{ $claim[0]->cust_address }}</p>
                        <p><strong>Address 2: </strong>{{ $claim[0]->cust_address_2 }}</p>
                        <p><strong>City: </strong>{{ $claim[0]->cust_city }}</p>
                        <p><strong>State: </strong>{{ $claim[0]->cust_state }}</p>
                        <p><strong>Zip: </strong>{{ $claim[0]->cust_zip }}</p>
                    </div>
                </div>

                {{--Repair Center--}}
                <div class="row clearfix">
                    <div class="col-xs-12">
                        <h3>Repair Center</h3>
                        <hr>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>Name: </strong>{{ $claim[0]->rc_name }}</p>
                        <p><strong>Contact Name: </strong>{{ $claim[0]->rc_contact }}</p>
                        <p><strong>Phone: </strong>{{ $claim[0]->rc_phone }}</p>
                        <p><strong>Email: </strong>{{ $claim[0]->rc_email }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>Address: </strong>{{ $claim[0]->rc_address }}</p>
                        <p><strong>City: </strong>{{ $claim[0]->rc_city }}</p>
                        <p><strong>State: </strong>{{ $claim[0]->rc_state }}</p>
                        <p><strong>Zip: </strong>{{ $claim[0]->rc_zip }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>