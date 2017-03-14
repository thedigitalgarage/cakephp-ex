<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Hello from Digital Garage</title>
    <link rel='shortcut icon' href='https://raw.githubusercontent.com/thedigitalgarage/origin/master/assets/app/images/favicon4.ico' type='image/x-icon' />


    <style>
        /*!
 * Bootstrap v3.0.0
 *
 * Daemonite/Material
 * https://github.com/Daemonite/material
 *
 * Copyright 2013 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */
        .logo {
          background-size: cover;
          height: 117px;
          width: 757px;
          margin-top: 32px;
          background-image: url("https://raw.githubusercontent.com/thedigitalgarage/origin/master/assets/app/images/dg_full.png");
        }
        .logo a {
          display: block;
          width: 100%;
          height: 100%;
        }

        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }
        @-ms-viewport {
            width: device-width;
        }
        article,
        aside,
        footer,
        header,
        nav,
        section {
            display: block;
        }
        audio {
            display: inline-block;
            max-width: 100%;
            vertical-align: baseline;
        }
        body {
            background-color: #ffffff;
            background: url("https://s3.amazonaws.com/StartupStockPhotos/20140808_StartupStockPhotos/24.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            color: #212121;
            font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            margin: 0;
            padding: 0;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: subpixel-antialiased;
        }
        html {
            font-family: sans-serif;
            font-size: 100%;
            min-height: 100%;
            position: relative;
            -webkit-tap-highlight-color: transparent;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        svg:not(:root) {
            overflow: hidden;
        }
        template,
        [hidden] {
            display: none;
        }
        video {
            display: block;
            max-width: 100%;
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
        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            cursor: pointer;
            -webkit-appearance: button;
        }
        button,
        select {
            text-transform: none;
        }
        button {
            overflow: visible;
        }
        button[disabled],
        input[disabled] {
            cursor: default;
        }
        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0;
        }
        fieldset {
            border: 0;
            margin: 0;
            min-width: 0;
            padding: 0;
        }
        fieldset ~ fieldset {
            margin-top: 24px;
        }
        input {
            line-height: normal;
        }
        input[type="checkbox"],
        input[type="radio"] {
            line-height: normal;
            margin: 4px 0 0;
            padding: 0;
        }
        input[type="color"] {
            min-width: 20px;
            width: auto;
        }
        input[type="date"],
        input[type="datetime-local"],
        input[type="month"],
        input[type="time"] {
            line-height: 20px;
            line-height: 1 \0;
        }
        input[type="file"] {
            display: block;
            height: auto;
            line-height: 1;
            min-height: 36px;
            padding-top: 8px;
            padding-bottom: 8px;
        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            height: auto;
        }
        input[type="range"] {
            display: block;
            height: 36px;
            width: 100%;
        }
        input[type="search"] {
            box-sizing: border-box;
            -webkit-appearance: none;
        }
        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }
        label {
            display: inline-block;
            font-weight: 400;
            margin: 0;
            max-width: 100%;
        }
        legend {
            border: 0;
            color: #212121;
            display: block;
            font-size: 24px;
            font-weight: 400;
            line-height: 32px;
            margin: 0 0 12px;
            padding: 0;
            width: 100%;
        }
        optgroup {
            font-weight: 500;
        }
        select[multiple],
        select[size] {
            height: auto;
        }
        textarea {
            overflow: auto;
        }
        a {
            background-color: transparent;
            background-image: none;
            color: #4CAF50;
            text-decoration: none;
        }
        a:focus,
        a:hover {
            color: #f50057;
            outline: 0;
            text-decoration: underline;
        }
        abbr {
            border-bottom: 1px dotted #dadada;
            border-bottom-color: rgba(0, 0, 0, 0.12);
            cursor: help;
        }
        address {
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            margin: 12px 0;
        }
        b,
        strong {
            font-weight: 500;
        }
        blockquote,
        q {
            font-size: 20px;
            font-style: italic;
            font-weight: 300;
            line-height: 28px;
            margin: 24px 0;
            padding-right: 32px;
            padding-left: 32px;
            position: relative;
        }
        dd,
        dt,
        li {
            line-height: 20px;
        }
        dd {
            margin: 0;
        }
        dl {
            margin: 12px 0;
        }
        dt {
            font-weight: 500;
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
            color: inherit;
            font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            margin-top: 48px;
            margin-bottom: 12px;
        }
        h1,
        .h1 {
            font-size: 44px;
            line-height: 48px;
        }
        h2,
        .h2 {
            font-size: 34px;
            line-height: 40px;
        }
        h3,
        .h3 {
            font-size: 24px;
            line-height: 32px;
        }
        h4,
        .h4 {
            font-size: 20px;
            line-height: 28px;
        }
        h5,
        .h5 {
            font-size: 16px;
            line-height: 24px;
        }
        h6,
        .h6 {
            font-size: 12px;
            line-height: 20px;
        }
        h1 small,
        h2 small,
        h3 small,
        h4 small,
        .h1 small,
        .h2 small,
        .h3 small,
        .h4 small {
            font-size: 14px;
        }
        hr,
        .hr {
            border: 0;
            border-top: 1px solid #dadada;
            border-top-color: rgba(0, 0, 0, 0.12);
            box-sizing: content-box;
            display: block;
            height: 0;
            margin-top: 24px;
            margin-bottom: 24px;
        }
        img {
            border: 0;
            vertical-align: middle;
        }
        ol,
        ul {
            margin: 12px 0;
            padding: 0 0 0 32px;
        }
        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-top: 0;
            margin-bottom: 0;
        }
        p {
            margin: 12px 0;
        }
        small {
            font-size: 75%;
            line-height: 1;
        }
        sub,
        sup {
            font-size: 80%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }
        sub {
            bottom: -0.25em;
        }
        sup {
            top: -0.5em;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
        td,
        th {
            padding: 0;
        }
        th {
            text-align: left;
        }
        .col-xx-1,
        .col-xs-1,
        .col-sm-1,
        .col-md-1,
        .col-lg-1,
        .col-xx-2,
        .col-xs-2,
        .col-sm-2,
        .col-md-2,
        .col-lg-2,
        .col-xx-3,
        .col-xs-3,
        .col-sm-3,
        .col-md-3,
        .col-lg-3,
        .col-xx-4,
        .col-xs-4,
        .col-sm-4,
        .col-md-4,
        .col-lg-4,
        .col-xx-5,
        .col-xs-5,
        .col-sm-5,
        .col-md-5,
        .col-lg-5,
        .col-xx-6,
        .col-xs-6,
        .col-sm-6,
        .col-md-6,
        .col-lg-6,
        .col-xx-7,
        .col-xs-7,
        .col-sm-7,
        .col-md-7,
        .col-lg-7,
        .col-xx-8,
        .col-xs-8,
        .col-sm-8,
        .col-md-8,
        .col-lg-8,
        .col-xx-9,
        .col-xs-9,
        .col-sm-9,
        .col-md-9,
        .col-lg-9,
        .col-xx-10,
        .col-xs-10,
        .col-sm-10,
        .col-md-10,
        .col-lg-10,
        .col-xx-11,
        .col-xs-11,
        .col-sm-11,
        .col-md-11,
        .col-lg-11,
        .col-xx-12,
        .col-xs-12,
        .col-sm-12,
        .col-md-12,
        .col-lg-12 {
            min-height: 1px;
            position: relative;
            padding-left: 16px;
            padding-right: 16px;
        }
        .col-xx-1,
        .col-xx-2,
        .col-xx-3,
        .col-xx-4,
        .col-xx-5,
        .col-xx-6,
        .col-xx-7,
        .col-xx-8,
        .col-xx-9,
        .col-xx-10,
        .col-xx-11,
        .col-xx-12 {
            float: left;
        }
        .col-xx-1 {
            width: 8.33333%;
        }
        .col-xx-2 {
            width: 16.66667%;
        }
        .col-xx-3 {
            width: 25%;
        }
        .col-xx-4 {
            width: 33.33333%;
        }
        .col-xx-5 {
            width: 41.66667%;
        }
        .col-xx-6 {
            width: 50%;
        }
        .col-xx-7 {
            width: 58.33333%;
        }
        .col-xx-8 {
            width: 66.66667%;
        }
        .col-xx-9 {
            width: 75%;
        }
        .col-xx-10 {
            width: 83.33333%;
        }
        .col-xx-11 {
            width: 91.66667%;
        }
        .col-xx-12 {
            width: 100%;
        }
        .col-xx-offset-0 {
            margin-left: 0%;
        }
        .col-xx-offset-1 {
            margin-left: 8.33333%;
        }
        .col-xx-offset-2 {
            margin-left: 16.66667%;
        }
        .col-xx-offset-3 {
            margin-left: 25%;
        }
        .col-xx-offset-4 {
            margin-left: 33.33333%;
        }
        .col-xx-offset-5 {
            margin-left: 41.66667%;
        }
        .col-xx-offset-6 {
            margin-left: 50%;
        }
        .col-xx-offset-7 {
            margin-left: 58.33333%;
        }
        .col-xx-offset-8 {
            margin-left: 66.66667%;
        }
        .col-xx-offset-9 {
            margin-left: 75%;
        }
        .col-xx-offset-10 {
            margin-left: 83.33333%;
        }
        .col-xx-offset-11 {
            margin-left: 91.66667%;
        }
        .col-xx-offset-12 {
            margin-left: 100%;
        }
        .col-xx-pull-0 {
            right: 0%;
        }
        .col-xx-pull-1 {
            right: 8.33333%;
        }
        .col-xx-pull-2 {
            right: 16.66667%;
        }
        .col-xx-pull-3 {
            right: 25%;
        }
        .col-xx-pull-4 {
            right: 33.33333%;
        }
        .col-xx-pull-5 {
            right: 41.66667%;
        }
        .col-xx-pull-6 {
            right: 50%;
        }
        .col-xx-pull-7 {
            right: 58.33333%;
        }
        .col-xx-pull-8 {
            right: 66.66667%;
        }
        .col-xx-pull-9 {
            right: 75%;
        }
        .col-xx-pull-10 {
            right: 83.33333%;
        }
        .col-xx-pull-11 {
            right: 91.66667%;
        }
        .col-xx-pull-12 {
            right: 100%;
        }
        .col-xx-push-0 {
            left: 0%;
        }
        .col-xx-push-1 {
            left: 8.33333%;
        }
        .col-xx-push-2 {
            left: 16.66667%;
        }
        .col-xx-push-3 {
            left: 25%;
        }
        .col-xx-push-4 {
            left: 33.33333%;
        }
        .col-xx-push-5 {
            left: 41.66667%;
        }
        .col-xx-push-6 {
            left: 50%;
        }
        .col-xx-push-7 {
            left: 58.33333%;
        }
        .col-xx-push-8 {
            left: 66.66667%;
        }
        .col-xx-push-9 {
            left: 75%;
        }
        .col-xx-push-10 {
            left: 83.33333%;
        }
        .col-xx-push-11 {
            left: 91.66667%;
        }
        .col-xx-push-12 {
            left: 100%;
        }
        @media only screen and (min-width: 480px) {
            .col-xs-1,
            .col-xs-2,
            .col-xs-3,
            .col-xs-4,
            .col-xs-5,
            .col-xs-6,
            .col-xs-7,
            .col-xs-8,
            .col-xs-9,
            .col-xs-10,
            .col-xs-11,
            .col-xs-12 {
                float: left;
            }
            .col-xs-1 {
                width: 8.33333%;
            }
            .col-xs-2 {
                width: 16.66667%;
            }
            .col-xs-3 {
                width: 25%;
            }
            .col-xs-4 {
                width: 33.33333%;
            }
            .col-xs-5 {
                width: 41.66667%;
            }
            .col-xs-6 {
                width: 50%;
            }
            .col-xs-7 {
                width: 58.33333%;
            }
            .col-xs-8 {
                width: 66.66667%;
            }
            .col-xs-9 {
                width: 75%;
            }
            .col-xs-10 {
                width: 83.33333%;
            }
            .col-xs-11 {
                width: 91.66667%;
            }
            .col-xs-12 {
                width: 100%;
            }
            .col-xs-offset-0 {
                margin-left: 0%;
            }
            .col-xs-offset-1 {
                margin-left: 8.33333%;
            }
            .col-xs-offset-2 {
                margin-left: 16.66667%;
            }
            .col-xs-offset-3 {
                margin-left: 25%;
            }
            .col-xs-offset-4 {
                margin-left: 33.33333%;
            }
            .col-xs-offset-5 {
                margin-left: 41.66667%;
            }
            .col-xs-offset-6 {
                margin-left: 50%;
            }
            .col-xs-offset-7 {
                margin-left: 58.33333%;
            }
            .col-xs-offset-8 {
                margin-left: 66.66667%;
            }
            .col-xs-offset-9 {
                margin-left: 75%;
            }
            .col-xs-offset-10 {
                margin-left: 83.33333%;
            }
            .col-xs-offset-11 {
                margin-left: 91.66667%;
            }
            .col-xs-offset-12 {
                margin-left: 100%;
            }
            .col-xs-pull-0 {
                right: 0%;
            }
            .col-xs-pull-1 {
                right: 8.33333%;
            }
            .col-xs-pull-2 {
                right: 16.66667%;
            }
            .col-xs-pull-3 {
                right: 25%;
            }
            .col-xs-pull-4 {
                right: 33.33333%;
            }
            .col-xs-pull-5 {
                right: 41.66667%;
            }
            .col-xs-pull-6 {
                right: 50%;
            }
            .col-xs-pull-7 {
                right: 58.33333%;
            }
            .col-xs-pull-8 {
                right: 66.66667%;
            }
            .col-xs-pull-9 {
                right: 75%;
            }
            .col-xs-pull-10 {
                right: 83.33333%;
            }
            .col-xs-pull-11 {
                right: 91.66667%;
            }
            .col-xs-pull-12 {
                right: 100%;
            }
            .col-xs-push-0 {
                left: 0%;
            }
            .col-xs-push-1 {
                left: 8.33333%;
            }
            .col-xs-push-2 {
                left: 16.66667%;
            }
            .col-xs-push-3 {
                left: 25%;
            }
            .col-xs-push-4 {
                left: 33.33333%;
            }
            .col-xs-push-5 {
                left: 41.66667%;
            }
            .col-xs-push-6 {
                left: 50%;
            }
            .col-xs-push-7 {
                left: 58.33333%;
            }
            .col-xs-push-8 {
                left: 66.66667%;
            }
            .col-xs-push-9 {
                left: 75%;
            }
            .col-xs-push-10 {
                left: 83.33333%;
            }
            .col-xs-push-11 {
                left: 91.66667%;
            }
            .col-xs-push-12 {
                left: 100%;
            }
        }
        @media only screen and (min-width: 768px) {
            .col-sm-1,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9,
            .col-sm-10,
            .col-sm-11,
            .col-sm-12 {
                float: left;
            }
            .col-sm-1 {
                width: 8.33333%;
            }
            .col-sm-2 {
                width: 16.66667%;
            }
            .col-sm-3 {
                width: 25%;
            }
            .col-sm-4 {
                width: 33.33333%;
            }
            .col-sm-5 {
                width: 41.66667%;
            }
            .col-sm-6 {
                width: 50%;
            }
            .col-sm-7 {
                width: 58.33333%;
            }
            .col-sm-8 {
                width: 66.66667%;
            }
            .col-sm-9 {
                width: 75%;
            }
            .col-sm-10 {
                width: 83.33333%;
            }
            .col-sm-11 {
                width: 91.66667%;
            }
            .col-sm-12 {
                width: 100%;
            }
            .col-sm-offset-0 {
                margin-left: 0%;
            }
            .col-sm-offset-1 {
                margin-left: 8.33333%;
            }
            .col-sm-offset-2 {
                margin-left: 16.66667%;
            }
            .col-sm-offset-3 {
                margin-left: 25%;
            }
            .col-sm-offset-4 {
                margin-left: 33.33333%;
            }
            .col-sm-offset-5 {
                margin-left: 41.66667%;
            }
            .col-sm-offset-6 {
                margin-left: 50%;
            }
            .col-sm-offset-7 {
                margin-left: 58.33333%;
            }
            .col-sm-offset-8 {
                margin-left: 66.66667%;
            }
            .col-sm-offset-9 {
                margin-left: 75%;
            }
            .col-sm-offset-10 {
                margin-left: 83.33333%;
            }
            .col-sm-offset-11 {
                margin-left: 91.66667%;
            }
            .col-sm-offset-12 {
                margin-left: 100%;
            }
            .col-sm-pull-0 {
                right: 0%;
            }
            .col-sm-pull-1 {
                right: 8.33333%;
            }
            .col-sm-pull-2 {
                right: 16.66667%;
            }
            .col-sm-pull-3 {
                right: 25%;
            }
            .col-sm-pull-4 {
                right: 33.33333%;
            }
            .col-sm-pull-5 {
                right: 41.66667%;
            }
            .col-sm-pull-6 {
                right: 50%;
            }
            .col-sm-pull-7 {
                right: 58.33333%;
            }
            .col-sm-pull-8 {
                right: 66.66667%;
            }
            .col-sm-pull-9 {
                right: 75%;
            }
            .col-sm-pull-10 {
                right: 83.33333%;
            }
            .col-sm-pull-11 {
                right: 91.66667%;
            }
            .col-sm-pull-12 {
                right: 100%;
            }
            .col-sm-push-0 {
                left: 0%;
            }
            .col-sm-push-1 {
                left: 8.33333%;
            }
            .col-sm-push-2 {
                left: 16.66667%;
            }
            .col-sm-push-3 {
                left: 25%;
            }
            .col-sm-push-4 {
                left: 33.33333%;
            }
            .col-sm-push-5 {
                left: 41.66667%;
            }
            .col-sm-push-6 {
                left: 50%;
            }
            .col-sm-push-7 {
                left: 58.33333%;
            }
            .col-sm-push-8 {
                left: 66.66667%;
            }
            .col-sm-push-9 {
                left: 75%;
            }
            .col-sm-push-10 {
                left: 83.33333%;
            }
            .col-sm-push-11 {
                left: 91.66667%;
            }
            .col-sm-push-12 {
                left: 100%;
            }
        }
        @media only screen and (min-width: 992px) {
            .col-md-1,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-5,
            .col-md-6,
            .col-md-7,
            .col-md-8,
            .col-md-9,
            .col-md-10,
            .col-md-11,
            .col-md-12 {
                float: left;
            }
            .col-md-1 {
                width: 8.33333%;
            }
            .col-md-2 {
                width: 16.66667%;
            }
            .col-md-3 {
                width: 25%;
            }
            .col-md-4 {
                width: 33.33333%;
            }
            .col-md-5 {
                width: 41.66667%;
            }
            .col-md-6 {
                width: 50%;
            }
            .col-md-7 {
                width: 58.33333%;
            }
            .col-md-8 {
                width: 66.66667%;
            }
            .col-md-9 {
                width: 75%;
            }
            .col-md-10 {
                width: 83.33333%;
            }
            .col-md-11 {
                width: 91.66667%;
            }
            .col-md-12 {
                width: 100%;
            }
            .col-md-offset-0 {
                margin-left: 0%;
            }
            .col-md-offset-1 {
                margin-left: 8.33333%;
            }
            .col-md-offset-2 {
                margin-left: 16.66667%;
            }
            .col-md-offset-3 {
                margin-left: 25%;
            }
            .col-md-offset-4 {
                margin-left: 33.33333%;
            }
            .col-md-offset-5 {
                margin-left: 41.66667%;
            }
            .col-md-offset-6 {
                margin-left: 50%;
            }
            .col-md-offset-7 {
                margin-left: 58.33333%;
            }
            .col-md-offset-8 {
                margin-left: 66.66667%;
            }
            .col-md-offset-9 {
                margin-left: 75%;
            }
            .col-md-offset-10 {
                margin-left: 83.33333%;
            }
            .col-md-offset-11 {
                margin-left: 91.66667%;
            }
            .col-md-offset-12 {
                margin-left: 100%;
            }
            .col-md-pull-0 {
                right: 0%;
            }
            .col-md-pull-1 {
                right: 8.33333%;
            }
            .col-md-pull-2 {
                right: 16.66667%;
            }
            .col-md-pull-3 {
                right: 25%;
            }
            .col-md-pull-4 {
                right: 33.33333%;
            }
            .col-md-pull-5 {
                right: 41.66667%;
            }
            .col-md-pull-6 {
                right: 50%;
            }
            .col-md-pull-7 {
                right: 58.33333%;
            }
            .col-md-pull-8 {
                right: 66.66667%;
            }
            .col-md-pull-9 {
                right: 75%;
            }
            .col-md-pull-10 {
                right: 83.33333%;
            }
            .col-md-pull-11 {
                right: 91.66667%;
            }
            .col-md-pull-12 {
                right: 100%;
            }
            .col-md-push-0 {
                left: 0%;
            }
            .col-md-push-1 {
                left: 8.33333%;
            }
            .col-md-push-2 {
                left: 16.66667%;
            }
            .col-md-push-3 {
                left: 25%;
            }
            .col-md-push-4 {
                left: 33.33333%;
            }
            .col-md-push-5 {
                left: 41.66667%;
            }
            .col-md-push-6 {
                left: 50%;
            }
            .col-md-push-7 {
                left: 58.33333%;
            }
            .col-md-push-8 {
                left: 66.66667%;
            }
            .col-md-push-9 {
                left: 75%;
            }
            .col-md-push-10 {
                left: 83.33333%;
            }
            .col-md-push-11 {
                left: 91.66667%;
            }
            .col-md-push-12 {
                left: 100%;
            }
        }
        @media only screen and (min-width: 1440px) {
            .col-lg-1,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9,
            .col-lg-10,
            .col-lg-11,
            .col-lg-12 {
                float: left;
            }
            .col-lg-1 {
                width: 8.33333%;
            }
            .col-lg-2 {
                width: 16.66667%;
            }
            .col-lg-3 {
                width: 25%;
            }
            .col-lg-4 {
                width: 33.33333%;
            }
            .col-lg-5 {
                width: 41.66667%;
            }
            .col-lg-6 {
                width: 50%;
            }
            .col-lg-7 {
                width: 58.33333%;
            }
            .col-lg-8 {
                width: 66.66667%;
            }
            .col-lg-9 {
                width: 75%;
            }
            .col-lg-10 {
                width: 83.33333%;
            }
            .col-lg-11 {
                width: 91.66667%;
            }
            .col-lg-12 {
                width: 100%;
            }
            .col-lg-offset-0 {
                margin-left: 0%;
            }
            .col-lg-offset-1 {
                margin-left: 8.33333%;
            }
            .col-lg-offset-2 {
                margin-left: 16.66667%;
            }
            .col-lg-offset-3 {
                margin-left: 25%;
            }
            .col-lg-offset-4 {
                margin-left: 33.33333%;
            }
            .col-lg-offset-5 {
                margin-left: 41.66667%;
            }
            .col-lg-offset-6 {
                margin-left: 50%;
            }
            .col-lg-offset-7 {
                margin-left: 58.33333%;
            }
            .col-lg-offset-8 {
                margin-left: 66.66667%;
            }
            .col-lg-offset-9 {
                margin-left: 75%;
            }
            .col-lg-offset-10 {
                margin-left: 83.33333%;
            }
            .col-lg-offset-11 {
                margin-left: 91.66667%;
            }
            .col-lg-offset-12 {
                margin-left: 100%;
            }
            .col-lg-pull-0 {
                right: 0%;
            }
            .col-lg-pull-1 {
                right: 8.33333%;
            }
            .col-lg-pull-2 {
                right: 16.66667%;
            }
            .col-lg-pull-3 {
                right: 25%;
            }
            .col-lg-pull-4 {
                right: 33.33333%;
            }
            .col-lg-pull-5 {
                right: 41.66667%;
            }
            .col-lg-pull-6 {
                right: 50%;
            }
            .col-lg-pull-7 {
                right: 58.33333%;
            }
            .col-lg-pull-8 {
                right: 66.66667%;
            }
            .col-lg-pull-9 {
                right: 75%;
            }
            .col-lg-pull-10 {
                right: 83.33333%;
            }
            .col-lg-pull-11 {
                right: 91.66667%;
            }
            .col-lg-pull-12 {
                right: 100%;
            }
            .col-lg-push-0 {
                left: 0%;
            }
            .col-lg-push-1 {
                left: 8.33333%;
            }
            .col-lg-push-2 {
                left: 16.66667%;
            }
            .col-lg-push-3 {
                left: 25%;
            }
            .col-lg-push-4 {
                left: 33.33333%;
            }
            .col-lg-push-5 {
                left: 41.66667%;
            }
            .col-lg-push-6 {
                left: 50%;
            }
            .col-lg-push-7 {
                left: 58.33333%;
            }
            .col-lg-push-8 {
                left: 66.66667%;
            }
            .col-lg-push-9 {
                left: 75%;
            }
            .col-lg-push-10 {
                left: 83.33333%;
            }
            .col-lg-push-11 {
                left: 91.66667%;
            }
            .col-lg-push-12 {
                left: 100%;
            }
        }
        .container {
            background-color: rgba(255, 255, 255, 0.85);
            margin-top: 64px;
            margin-right: auto;
            margin-left: auto;
            padding-right: 64px;
            padding-left: 64px;
        }
        .container:after,
        .container:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .container:after {
            clear: both;
        }
        @media only screen and (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }
        @media only screen and (min-width: 1440px) {
            .container {
                max-width: 1408px;
            }
        }
        .container-full {
            max-width: none;
        }
        .row {
            margin-right: -16px;
            margin-left: -16px;
        }
        .row:after,
        .row:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .row:after {
            clear: both;
        }
        @media only screen and (min-width: 480px) and (max-width: 767px) {
            .row-clear > .col-xs-2:nth-child(6n+1),
            .row-clear > .col-xs-3:nth-child(4n+1),
            .row-clear > .col-xs-4:nth-child(3n+1),
            .row-clear > .col-xs-6:nth-child(2n+1) {
                clear: left;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .row-clear > .col-sm-2:nth-child(6n+1),
            .row-clear > .col-sm-3:nth-child(4n+1),
            .row-clear > .col-sm-4:nth-child(3n+1),
            .row-clear > .col-sm-6:nth-child(2n+1) {
                clear: left;
            }
        }
        @media only screen and (min-width: 992px) and (max-width: 1439px) {
            .row-clear > .col-md-2:nth-child(6n+1),
            .row-clear > .col-md-3:nth-child(4n+1),
            .row-clear > .col-md-4:nth-child(3n+1),
            .row-clear > .col-md-6:nth-child(2n+1) {
                clear: left;
            }
        }
        @media only screen and (min-width: 1440px) {
            .row-clear > .col-lg-2:nth-child(6n+1),
            .row-clear > .col-lg-3:nth-child(4n+1),
            .row-clear > .col-lg-4:nth-child(3n+1),
            .row-clear > .col-lg-6:nth-child(2n+1) {
                clear: left;
            }
        }
        .row-relative {
            position: relative;
        }
        @font-face {
            font-family: "FontAwesome";
            font-style: normal;
            font-weight: normal;
            src: url("./fonts/fontawesome-webfont.eot?v=4.3.0");
            src: url("./fonts/fontawesome-webfont.eot?#iefix&v=4.3.0") format("embedded-opentype"), url("./fonts/fontawesome-webfont.woff2?v=4.3.0") format("woff2"), url("./fonts/fontawesome-webfont.woff?v=4.3.0") format("woff"), url("./fonts/fontawesome-webfont.ttf?v=4.3.0") format("truetype"), url("./fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular") format("svg");
        }
        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            speak: none;
            text-rendering: auto;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8);
        }
        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear;
        }
        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }
        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }
        .fa-border {
            border: 0.08em solid rgba(0, 0, 0, 0.12);
            border-radius: 0.1em;
            padding: 0.2em 0.25em 0.15em;
        }
        .fa.pull-left {
            margin-right: 0.3em;
        }
        .fa.pull-right {
            margin-left: 0.3em;
        }
        .fa-fw {
            text-align: center;
            width: 1.28571em;
        }
        .fa-flip-horizontal {
            filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0);
            -webkit-transform: scale(-1, 1);
            -ms-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }
        .fa-flip-vertical {
            filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
            -webkit-transform: scale(1, -1);
            -ms-transform: scale(1, -1);
            transform: scale(1, -1);
        }
        .fa-rotate-90 {
            filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=1);
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }
        .fa-rotate-180 {
            filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        .fa-rotate-270 {
            filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=3);
            -webkit-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            transform: rotate(270deg);
        }
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270 {
            -webkit-filter: none;
            filter: none;
        }
        .fa-2x {
            font-size: 2em;
        }
        .fa-3x {
            font-size: 3em;
        }
        .fa-4x {
            font-size: 4em;
        }
        .fa-5x {
            font-size: 5em;
        }
        .fa-lg {
            font-size: 1.33333em;
            line-height: 0.75em;
            vertical-align: -15%;
        }
        .fa-li {
            position: absolute;
            top: 0.14286em;
            left: -2.14286em;
            text-align: center;
            width: 2.14286em;
        }
        .fa-li.fa-lg {
            left: -1.85714em;
        }
        .fa-ul {
            list-style-type: none;
            margin-left: 2.14286em;
            padding-left: 0;
        }
        .fa-ul > li {
            position: relative;
        }
        .fa-inverse {
            color: #ffffff;
        }
        .fa-stack {
            display: inline-block;
            height: 2em;
            line-height: 2em;
            position: relative;
            vertical-align: middle;
            width: 2em;
        }
        .fa-stack-1x,
        .fa-stack-2x {
            position: absolute;
            left: 0;
            text-align: center;
            width: 100%;
        }
        .fa-stack-1x {
            line-height: inherit;
        }
        .fa-stack-2x {
            font-size: 2em;
        }
        .fa-glass:before {
            content: "\f000";
        }
        .fa-music:before {
            content: "\f001";
        }
        .fa-search:before {
            content: "\f002";
        }
        .fa-envelope-o:before {
            content: "\f003";
        }
        .fa-heart:before {
            content: "\f004";
        }
        .fa-star:before {
            content: "\f005";
        }
        .fa-star-o:before {
            content: "\f006";
        }
        .fa-user:before {
            content: "\f007";
        }
        .fa-film:before {
            content: "\f008";
        }
        .fa-th-large:before {
            content: "\f009";
        }
        .fa-th:before {
            content: "\f00a";
        }
        .fa-th-list:before {
            content: "\f00b";
        }
        .fa-check:before {
            content: "\f00c";
        }
        .fa-remove:before,
        .fa-close:before,
        .fa-times:before {
            content: "\f00d";
        }
        .fa-search-plus:before {
            content: "\f00e";
        }
        .fa-search-minus:before {
            content: "\f010";
        }
        .fa-power-off:before {
            content: "\f011";
        }
        .fa-signal:before {
            content: "\f012";
        }
        .fa-gear:before,
        .fa-cog:before {
            content: "\f013";
        }
        .fa-trash-o:before {
            content: "\f014";
        }
        .fa-home:before {
            content: "\f015";
        }
        .fa-file-o:before {
            content: "\f016";
        }
        .fa-clock-o:before {
            content: "\f017";
        }
        .fa-road:before {
            content: "\f018";
        }
        .fa-download:before {
            content: "\f019";
        }
        .fa-arrow-circle-o-down:before {
            content: "\f01a";
        }
        .fa-arrow-circle-o-up:before {
            content: "\f01b";
        }
        .fa-inbox:before {
            content: "\f01c";
        }
        .fa-play-circle-o:before {
            content: "\f01d";
        }
        .fa-rotate-right:before,
        .fa-repeat:before {
            content: "\f01e";
        }
        .fa-refresh:before {
            content: "\f021";
        }
        .fa-list-alt:before {
            content: "\f022";
        }
        .fa-lock:before {
            content: "\f023";
        }
        .fa-flag:before {
            content: "\f024";
        }
        .fa-headphones:before {
            content: "\f025";
        }
        .fa-volume-off:before {
            content: "\f026";
        }
        .fa-volume-down:before {
            content: "\f027";
        }
        .fa-volume-up:before {
            content: "\f028";
        }
        .fa-qrcode:before {
            content: "\f029";
        }
        .fa-barcode:before {
            content: "\f02a";
        }
        .fa-tag:before {
            content: "\f02b";
        }
        .fa-tags:before {
            content: "\f02c";
        }
        .fa-book:before {
            content: "\f02d";
        }
        .fa-bookmark:before {
            content: "\f02e";
        }
        .fa-print:before {
            content: "\f02f";
        }
        .fa-camera:before {
            content: "\f030";
        }
        .fa-font:before {
            content: "\f031";
        }
        .fa-bold:before {
            content: "\f032";
        }
        .fa-italic:before {
            content: "\f033";
        }
        .fa-text-height:before {
            content: "\f034";
        }
        .fa-text-width:before {
            content: "\f035";
        }
        .fa-align-left:before {
            content: "\f036";
        }
        .fa-align-center:before {
            content: "\f037";
        }
        .fa-align-right:before {
            content: "\f038";
        }
        .fa-align-justify:before {
            content: "\f039";
        }
        .fa-list:before {
            content: "\f03a";
        }
        .fa-dedent:before,
        .fa-outdent:before {
            content: "\f03b";
        }
        .fa-indent:before {
            content: "\f03c";
        }
        .fa-video-camera:before {
            content: "\f03d";
        }
        .fa-photo:before,
        .fa-image:before,
        .fa-picture-o:before {
            content: "\f03e";
        }
        .fa-pencil:before {
            content: "\f040";
        }
        .fa-map-marker:before {
            content: "\f041";
        }
        .fa-adjust:before {
            content: "\f042";
        }
        .fa-tint:before {
            content: "\f043";
        }
        .fa-edit:before,
        .fa-pencil-square-o:before {
            content: "\f044";
        }
        .fa-share-square-o:before {
            content: "\f045";
        }
        .fa-check-square-o:before {
            content: "\f046";
        }
        .fa-arrows:before {
            content: "\f047";
        }
        .fa-step-backward:before {
            content: "\f048";
        }
        .fa-fast-backward:before {
            content: "\f049";
        }
        .fa-backward:before {
            content: "\f04a";
        }
        .fa-play:before {
            content: "\f04b";
        }
        .fa-pause:before {
            content: "\f04c";
        }
        .fa-stop:before {
            content: "\f04d";
        }
        .fa-forward:before {
            content: "\f04e";
        }
        .fa-fast-forward:before {
            content: "\f050";
        }
        .fa-step-forward:before {
            content: "\f051";
        }
        .fa-eject:before {
            content: "\f052";
        }
        .fa-chevron-left:before {
            content: "\f053";
        }
        .fa-chevron-right:before {
            content: "\f054";
        }
        .fa-plus-circle:before {
            content: "\f055";
        }
        .fa-minus-circle:before {
            content: "\f056";
        }
        .fa-times-circle:before {
            content: "\f057";
        }
        .fa-check-circle:before {
            content: "\f058";
        }
        .fa-question-circle:before {
            content: "\f059";
        }
        .fa-info-circle:before {
            content: "\f05a";
        }
        .fa-crosshairs:before {
            content: "\f05b";
        }
        .fa-times-circle-o:before {
            content: "\f05c";
        }
        .fa-check-circle-o:before {
            content: "\f05d";
        }
        .fa-ban:before {
            content: "\f05e";
        }
        .fa-arrow-left:before {
            content: "\f060";
        }
        .fa-arrow-right:before {
            content: "\f061";
        }
        .fa-arrow-up:before {
            content: "\f062";
        }
        .fa-arrow-down:before {
            content: "\f063";
        }
        .fa-mail-forward:before,
        .fa-share:before {
            content: "\f064";
        }
        .fa-expand:before {
            content: "\f065";
        }
        .fa-compress:before {
            content: "\f066";
        }
        .fa-plus:before {
            content: "\f067";
        }
        .fa-minus:before {
            content: "\f068";
        }
        .fa-asterisk:before {
            content: "\f069";
        }
        .fa-exclamation-circle:before {
            content: "\f06a";
        }
        .fa-gift:before {
            content: "\f06b";
        }
        .fa-leaf:before {
            content: "\f06c";
        }
        .fa-fire:before {
            content: "\f06d";
        }
        .fa-eye:before {
            content: "\f06e";
        }
        .fa-eye-slash:before {
            content: "\f070";
        }
        .fa-warning:before,
        .fa-exclamation-triangle:before {
            content: "\f071";
        }
        .fa-plane:before {
            content: "\f072";
        }
        .fa-calendar:before {
            content: "\f073";
        }
        .fa-random:before {
            content: "\f074";
        }
        .fa-comment:before {
            content: "\f075";
        }
        .fa-magnet:before {
            content: "\f076";
        }
        .fa-chevron-up:before {
            content: "\f077";
        }
        .fa-chevron-down:before {
            content: "\f078";
        }
        .fa-retweet:before {
            content: "\f079";
        }
        .fa-shopping-cart:before {
            content: "\f07a";
        }
        .fa-folder:before {
            content: "\f07b";
        }
        .fa-folder-open:before {
            content: "\f07c";
        }
        .fa-arrows-v:before {
            content: "\f07d";
        }
        .fa-arrows-h:before {
            content: "\f07e";
        }
        .fa-bar-chart-o:before,
        .fa-bar-chart:before {
            content: "\f080";
        }
        .fa-twitter-square:before {
            content: "\f081";
        }
        .fa-facebook-square:before {
            content: "\f082";
        }
        .fa-camera-retro:before {
            content: "\f083";
        }
        .fa-key:before {
            content: "\f084";
        }
        .fa-gears:before,
        .fa-cogs:before {
            content: "\f085";
        }
        .fa-comments:before {
            content: "\f086";
        }
        .fa-thumbs-o-up:before {
            content: "\f087";
        }
        .fa-thumbs-o-down:before {
            content: "\f088";
        }
        .fa-star-half:before {
            content: "\f089";
        }
        .fa-heart-o:before {
            content: "\f08a";
        }
        .fa-sign-out:before {
            content: "\f08b";
        }
        .fa-linkedin-square:before {
            content: "\f08c";
        }
        .fa-thumb-tack:before {
            content: "\f08d";
        }
        .fa-external-link:before {
            content: "\f08e";
        }
        .fa-sign-in:before {
            content: "\f090";
        }
        .fa-trophy:before {
            content: "\f091";
        }
        .fa-github-square:before {
            content: "\f092";
        }
        .fa-upload:before {
            content: "\f093";
        }
        .fa-lemon-o:before {
            content: "\f094";
        }
        .fa-phone:before {
            content: "\f095";
        }
        .fa-square-o:before {
            content: "\f096";
        }
        .fa-bookmark-o:before {
            content: "\f097";
        }
        .fa-phone-square:before {
            content: "\f098";
        }
        .fa-twitter:before {
            content: "\f099";
        }
        .fa-facebook-f:before,
        .fa-facebook:before {
            content: "\f09a";
        }
        .fa-github:before {
            content: "\f09b";
        }
        .fa-unlock:before {
            content: "\f09c";
        }
        .fa-credit-card:before {
            content: "\f09d";
        }
        .fa-rss:before {
            content: "\f09e";
        }
        .fa-hdd-o:before {
            content: "\f0a0";
        }
        .fa-bullhorn:before {
            content: "\f0a1";
        }
        .fa-bell:before {
            content: "\f0f3";
        }
        .fa-certificate:before {
            content: "\f0a3";
        }
        .fa-hand-o-right:before {
            content: "\f0a4";
        }
        .fa-hand-o-left:before {
            content: "\f0a5";
        }
        .fa-hand-o-up:before {
            content: "\f0a6";
        }
        .fa-hand-o-down:before {
            content: "\f0a7";
        }
        .fa-arrow-circle-left:before {
            content: "\f0a8";
        }
        .fa-arrow-circle-right:before {
            content: "\f0a9";
        }
        .fa-arrow-circle-up:before {
            content: "\f0aa";
        }
        .fa-arrow-circle-down:before {
            content: "\f0ab";
        }
        .fa-globe:before {
            content: "\f0ac";
        }
        .fa-wrench:before {
            content: "\f0ad";
        }
        .fa-tasks:before {
            content: "\f0ae";
        }
        .fa-filter:before {
            content: "\f0b0";
        }
        .fa-briefcase:before {
            content: "\f0b1";
        }
        .fa-arrows-alt:before {
            content: "\f0b2";
        }
        .fa-group:before,
        .fa-users:before {
            content: "\f0c0";
        }
        .fa-chain:before,
        .fa-link:before {
            content: "\f0c1";
        }
        .fa-cloud:before {
            content: "\f0c2";
        }
        .fa-flask:before {
            content: "\f0c3";
        }
        .fa-cut:before,
        .fa-scissors:before {
            content: "\f0c4";
        }
        .fa-copy:before,
        .fa-files-o:before {
            content: "\f0c5";
        }
        .fa-paperclip:before {
            content: "\f0c6";
        }
        .fa-save:before,
        .fa-floppy-o:before {
            content: "\f0c7";
        }
        .fa-square:before {
            content: "\f0c8";
        }
        .fa-navicon:before,
        .fa-reorder:before,
        .fa-bars:before {
            content: "\f0c9";
        }
        .fa-list-ul:before {
            content: "\f0ca";
        }
        .fa-list-ol:before {
            content: "\f0cb";
        }
        .fa-strikethrough:before {
            content: "\f0cc";
        }
        .fa-underline:before {
            content: "\f0cd";
        }
        .fa-table:before {
            content: "\f0ce";
        }
        .fa-magic:before {
            content: "\f0d0";
        }
        .fa-truck:before {
            content: "\f0d1";
        }
        .fa-pinterest:before {
            content: "\f0d2";
        }
        .fa-pinterest-square:before {
            content: "\f0d3";
        }
        .fa-google-plus-square:before {
            content: "\f0d4";
        }
        .fa-google-plus:before {
            content: "\f0d5";
        }
        .fa-money:before {
            content: "\f0d6";
        }
        .fa-caret-down:before {
            content: "\f0d7";
        }
        .fa-caret-up:before {
            content: "\f0d8";
        }
        .fa-caret-left:before {
            content: "\f0d9";
        }
        .fa-caret-right:before {
            content: "\f0da";
        }
        .fa-columns:before {
            content: "\f0db";
        }
        .fa-unsorted:before,
        .fa-sort:before {
            content: "\f0dc";
        }
        .fa-sort-down:before,
        .fa-sort-desc:before {
            content: "\f0dd";
        }
        .fa-sort-up:before,
        .fa-sort-asc:before {
            content: "\f0de";
        }
        .fa-envelope:before {
            content: "\f0e0";
        }
        .fa-linkedin:before {
            content: "\f0e1";
        }
        .fa-rotate-left:before,
        .fa-undo:before {
            content: "\f0e2";
        }
        .fa-legal:before,
        .fa-gavel:before {
            content: "\f0e3";
        }
        .fa-dashboard:before,
        .fa-tachometer:before {
            content: "\f0e4";
        }
        .fa-comment-o:before {
            content: "\f0e5";
        }
        .fa-comments-o:before {
            content: "\f0e6";
        }
        .fa-flash:before,
        .fa-bolt:before {
            content: "\f0e7";
        }
        .fa-sitemap:before {
            content: "\f0e8";
        }
        .fa-umbrella:before {
            content: "\f0e9";
        }
        .fa-paste:before,
        .fa-clipboard:before {
            content: "\f0ea";
        }
        .fa-lightbulb-o:before {
            content: "\f0eb";
        }
        .fa-exchange:before {
            content: "\f0ec";
        }
        .fa-cloud-download:before {
            content: "\f0ed";
        }
        .fa-cloud-upload:before {
            content: "\f0ee";
        }
        .fa-user-md:before {
            content: "\f0f0";
        }
        .fa-stethoscope:before {
            content: "\f0f1";
        }
        .fa-suitcase:before {
            content: "\f0f2";
        }
        .fa-bell-o:before {
            content: "\f0a2";
        }
        .fa-coffee:before {
            content: "\f0f4";
        }
        .fa-cutlery:before {
            content: "\f0f5";
        }
        .fa-file-text-o:before {
            content: "\f0f6";
        }
        .fa-building-o:before {
            content: "\f0f7";
        }
        .fa-hospital-o:before {
            content: "\f0f8";
        }
        .fa-ambulance:before {
            content: "\f0f9";
        }
        .fa-medkit:before {
            content: "\f0fa";
        }
        .fa-fighter-jet:before {
            content: "\f0fb";
        }
        .fa-beer:before {
            content: "\f0fc";
        }
        .fa-h-square:before {
            content: "\f0fd";
        }
        .fa-plus-square:before {
            content: "\f0fe";
        }
        .fa-angle-double-left:before {
            content: "\f100";
        }
        .fa-angle-double-right:before {
            content: "\f101";
        }
        .fa-angle-double-up:before {
            content: "\f102";
        }
        .fa-angle-double-down:before {
            content: "\f103";
        }
        .fa-angle-left:before {
            content: "\f104";
        }
        .fa-angle-right:before {
            content: "\f105";
        }
        .fa-angle-up:before {
            content: "\f106";
        }
        .fa-angle-down:before {
            content: "\f107";
        }
        .fa-desktop:before {
            content: "\f108";
        }
        .fa-laptop:before {
            content: "\f109";
        }
        .fa-tablet:before {
            content: "\f10a";
        }
        .fa-mobile-phone:before,
        .fa-mobile:before {
            content: "\f10b";
        }
        .fa-circle-o:before {
            content: "\f10c";
        }
        .fa-quote-left:before {
            content: "\f10d";
        }
        .fa-quote-right:before {
            content: "\f10e";
        }
        .fa-spinner:before {
            content: "\f110";
        }
        .fa-circle:before {
            content: "\f111";
        }
        .fa-mail-reply:before,
        .fa-reply:before {
            content: "\f112";
        }
        .fa-github-alt:before {
            content: "\f113";
        }
        .fa-folder-o:before {
            content: "\f114";
        }
        .fa-folder-open-o:before {
            content: "\f115";
        }
        .fa-smile-o:before {
            content: "\f118";
        }
        .fa-frown-o:before {
            content: "\f119";
        }
        .fa-meh-o:before {
            content: "\f11a";
        }
        .fa-gamepad:before {
            content: "\f11b";
        }
        .fa-keyboard-o:before {
            content: "\f11c";
        }
        .fa-flag-o:before {
            content: "\f11d";
        }
        .fa-flag-checkered:before {
            content: "\f11e";
        }
        .fa-terminal:before {
            content: "\f120";
        }
        .fa-code:before {
            content: "\f121";
        }
        .fa-mail-reply-all:before,
        .fa-reply-all:before {
            content: "\f122";
        }
        .fa-star-half-empty:before,
        .fa-star-half-full:before,
        .fa-star-half-o:before {
            content: "\f123";
        }
        .fa-location-arrow:before {
            content: "\f124";
        }
        .fa-crop:before {
            content: "\f125";
        }
        .fa-code-fork:before {
            content: "\f126";
        }
        .fa-unlink:before,
        .fa-chain-broken:before {
            content: "\f127";
        }
        .fa-question:before {
            content: "\f128";
        }
        .fa-info:before {
            content: "\f129";
        }
        .fa-exclamation:before {
            content: "\f12a";
        }
        .fa-superscript:before {
            content: "\f12b";
        }
        .fa-subscript:before {
            content: "\f12c";
        }
        .fa-eraser:before {
            content: "\f12d";
        }
        .fa-puzzle-piece:before {
            content: "\f12e";
        }
        .fa-microphone:before {
            content: "\f130";
        }
        .fa-microphone-slash:before {
            content: "\f131";
        }
        .fa-shield:before {
            content: "\f132";
        }
        .fa-calendar-o:before {
            content: "\f133";
        }
        .fa-fire-extinguisher:before {
            content: "\f134";
        }
        .fa-rocket:before {
            content: "\f135";
        }
        .fa-maxcdn:before {
            content: "\f136";
        }
        .fa-chevron-circle-left:before {
            content: "\f137";
        }
        .fa-chevron-circle-right:before {
            content: "\f138";
        }
        .fa-chevron-circle-up:before {
            content: "\f139";
        }
        .fa-chevron-circle-down:before {
            content: "\f13a";
        }
        .fa-html5:before {
            content: "\f13b";
        }
        .fa-css3:before {
            content: "\f13c";
        }
        .fa-anchor:before {
            content: "\f13d";
        }
        .fa-unlock-alt:before {
            content: "\f13e";
        }
        .fa-bullseye:before {
            content: "\f140";
        }
        .fa-ellipsis-h:before {
            content: "\f141";
        }
        .fa-ellipsis-v:before {
            content: "\f142";
        }
        .fa-rss-square:before {
            content: "\f143";
        }
        .fa-play-circle:before {
            content: "\f144";
        }
        .fa-ticket:before {
            content: "\f145";
        }
        .fa-minus-square:before {
            content: "\f146";
        }
        .fa-minus-square-o:before {
            content: "\f147";
        }
        .fa-level-up:before {
            content: "\f148";
        }
        .fa-level-down:before {
            content: "\f149";
        }
        .fa-check-square:before {
            content: "\f14a";
        }
        .fa-pencil-square:before {
            content: "\f14b";
        }
        .fa-external-link-square:before {
            content: "\f14c";
        }
        .fa-share-square:before {
            content: "\f14d";
        }
        .fa-compass:before {
            content: "\f14e";
        }
        .fa-toggle-down:before,
        .fa-caret-square-o-down:before {
            content: "\f150";
        }
        .fa-toggle-up:before,
        .fa-caret-square-o-up:before {
            content: "\f151";
        }
        .fa-toggle-right:before,
        .fa-caret-square-o-right:before {
            content: "\f152";
        }
        .fa-euro:before,
        .fa-eur:before {
            content: "\f153";
        }
        .fa-gbp:before {
            content: "\f154";
        }
        .fa-dollar:before,
        .fa-usd:before {
            content: "\f155";
        }
        .fa-rupee:before,
        .fa-inr:before {
            content: "\f156";
        }
        .fa-cny:before,
        .fa-rmb:before,
        .fa-yen:before,
        .fa-jpy:before {
            content: "\f157";
        }
        .fa-ruble:before,
        .fa-rouble:before,
        .fa-rub:before {
            content: "\f158";
        }
        .fa-won:before,
        .fa-krw:before {
            content: "\f159";
        }
        .fa-bitcoin:before,
        .fa-btc:before {
            content: "\f15a";
        }
        .fa-file:before {
            content: "\f15b";
        }
        .fa-file-text:before {
            content: "\f15c";
        }
        .fa-sort-alpha-asc:before {
            content: "\f15d";
        }
        .fa-sort-alpha-desc:before {
            content: "\f15e";
        }
        .fa-sort-amount-asc:before {
            content: "\f160";
        }
        .fa-sort-amount-desc:before {
            content: "\f161";
        }
        .fa-sort-numeric-asc:before {
            content: "\f162";
        }
        .fa-sort-numeric-desc:before {
            content: "\f163";
        }
        .fa-thumbs-up:before {
            content: "\f164";
        }
        .fa-thumbs-down:before {
            content: "\f165";
        }
        .fa-youtube-square:before {
            content: "\f166";
        }
        .fa-youtube:before {
            content: "\f167";
        }
        .fa-xing:before {
            content: "\f168";
        }
        .fa-xing-square:before {
            content: "\f169";
        }
        .fa-youtube-play:before {
            content: "\f16a";
        }
        .fa-dropbox:before {
            content: "\f16b";
        }
        .fa-stack-overflow:before {
            content: "\f16c";
        }
        .fa-instagram:before {
            content: "\f16d";
        }
        .fa-flickr:before {
            content: "\f16e";
        }
        .fa-adn:before {
            content: "\f170";
        }
        .fa-bitbucket:before {
            content: "\f171";
        }
        .fa-bitbucket-square:before {
            content: "\f172";
        }
        .fa-tumblr:before {
            content: "\f173";
        }
        .fa-tumblr-square:before {
            content: "\f174";
        }
        .fa-long-arrow-down:before {
            content: "\f175";
        }
        .fa-long-arrow-up:before {
            content: "\f176";
        }
        .fa-long-arrow-left:before {
            content: "\f177";
        }
        .fa-long-arrow-right:before {
            content: "\f178";
        }
        .fa-apple:before {
            content: "\f179";
        }
        .fa-windows:before {
            content: "\f17a";
        }
        .fa-android:before {
            content: "\f17b";
        }
        .fa-linux:before {
            content: "\f17c";
        }
        .fa-dribbble:before {
            content: "\f17d";
        }
        .fa-skype:before {
            content: "\f17e";
        }
        .fa-foursquare:before {
            content: "\f180";
        }
        .fa-trello:before {
            content: "\f181";
        }
        .fa-female:before {
            content: "\f182";
        }
        .fa-male:before {
            content: "\f183";
        }
        .fa-gittip:before,
        .fa-gratipay:before {
            content: "\f184";
        }
        .fa-sun-o:before {
            content: "\f185";
        }
        .fa-moon-o:before {
            content: "\f186";
        }
        .fa-archive:before {
            content: "\f187";
        }
        .fa-bug:before {
            content: "\f188";
        }
        .fa-vk:before {
            content: "\f189";
        }
        .fa-weibo:before {
            content: "\f18a";
        }
        .fa-renren:before {
            content: "\f18b";
        }
        .fa-pagelines:before {
            content: "\f18c";
        }
        .fa-stack-exchange:before {
            content: "\f18d";
        }
        .fa-arrow-circle-o-right:before {
            content: "\f18e";
        }
        .fa-arrow-circle-o-left:before {
            content: "\f190";
        }
        .fa-toggle-left:before,
        .fa-caret-square-o-left:before {
            content: "\f191";
        }
        .fa-dot-circle-o:before {
            content: "\f192";
        }
        .fa-wheelchair:before {
            content: "\f193";
        }
        .fa-vimeo-square:before {
            content: "\f194";
        }
        .fa-turkish-lira:before,
        .fa-try:before {
            content: "\f195";
        }
        .fa-plus-square-o:before {
            content: "\f196";
        }
        .fa-space-shuttle:before {
            content: "\f197";
        }
        .fa-slack:before {
            content: "\f198";
        }
        .fa-envelope-square:before {
            content: "\f199";
        }
        .fa-wordpress:before {
            content: "\f19a";
        }
        .fa-openid:before {
            content: "\f19b";
        }
        .fa-institution:before,
        .fa-bank:before,
        .fa-university:before {
            content: "\f19c";
        }
        .fa-mortar-board:before,
        .fa-graduation-cap:before {
            content: "\f19d";
        }
        .fa-yahoo:before {
            content: "\f19e";
        }
        .fa-google:before {
            content: "\f1a0";
        }
        .fa-reddit:before {
            content: "\f1a1";
        }
        .fa-reddit-square:before {
            content: "\f1a2";
        }
        .fa-stumbleupon-circle:before {
            content: "\f1a3";
        }
        .fa-stumbleupon:before {
            content: "\f1a4";
        }
        .fa-delicious:before {
            content: "\f1a5";
        }
        .fa-digg:before {
            content: "\f1a6";
        }
        .fa-pied-piper:before {
            content: "\f1a7";
        }
        .fa-pied-piper-alt:before {
            content: "\f1a8";
        }
        .fa-drupal:before {
            content: "\f1a9";
        }
        .fa-joomla:before {
            content: "\f1aa";
        }
        .fa-language:before {
            content: "\f1ab";
        }
        .fa-fax:before {
            content: "\f1ac";
        }
        .fa-building:before {
            content: "\f1ad";
        }
        .fa-child:before {
            content: "\f1ae";
        }
        .fa-paw:before {
            content: "\f1b0";
        }
        .fa-spoon:before {
            content: "\f1b1";
        }
        .fa-cube:before {
            content: "\f1b2";
        }
        .fa-cubes:before {
            content: "\f1b3";
        }
        .fa-behance:before {
            content: "\f1b4";
        }
        .fa-behance-square:before {
            content: "\f1b5";
        }
        .fa-steam:before {
            content: "\f1b6";
        }
        .fa-steam-square:before {
            content: "\f1b7";
        }
        .fa-recycle:before {
            content: "\f1b8";
        }
        .fa-automobile:before,
        .fa-car:before {
            content: "\f1b9";
        }
        .fa-cab:before,
        .fa-taxi:before {
            content: "\f1ba";
        }
        .fa-tree:before {
            content: "\f1bb";
        }
        .fa-spotify:before {
            content: "\f1bc";
        }
        .fa-deviantart:before {
            content: "\f1bd";
        }
        .fa-soundcloud:before {
            content: "\f1be";
        }
        .fa-database:before {
            content: "\f1c0";
        }
        .fa-file-pdf-o:before {
            content: "\f1c1";
        }
        .fa-file-word-o:before {
            content: "\f1c2";
        }
        .fa-file-excel-o:before {
            content: "\f1c3";
        }
        .fa-file-powerpoint-o:before {
            content: "\f1c4";
        }
        .fa-file-photo-o:before,
        .fa-file-picture-o:before,
        .fa-file-image-o:before {
            content: "\f1c5";
        }
        .fa-file-zip-o:before,
        .fa-file-archive-o:before {
            content: "\f1c6";
        }
        .fa-file-sound-o:before,
        .fa-file-audio-o:before {
            content: "\f1c7";
        }
        .fa-file-movie-o:before,
        .fa-file-video-o:before {
            content: "\f1c8";
        }
        .fa-file-code-o:before {
            content: "\f1c9";
        }
        .fa-vine:before {
            content: "\f1ca";
        }
        .fa-codepen:before {
            content: "\f1cb";
        }
        .fa-jsfiddle:before {
            content: "\f1cc";
        }
        .fa-life-bouy:before,
        .fa-life-buoy:before,
        .fa-life-saver:before,
        .fa-support:before,
        .fa-life-ring:before {
            content: "\f1cd";
        }
        .fa-circle-o-notch:before {
            content: "\f1ce";
        }
        .fa-ra:before,
        .fa-rebel:before {
            content: "\f1d0";
        }
        .fa-ge:before,
        .fa-empire:before {
            content: "\f1d1";
        }
        .fa-git-square:before {
            content: "\f1d2";
        }
        .fa-git:before {
            content: "\f1d3";
        }
        .fa-hacker-news:before {
            content: "\f1d4";
        }
        .fa-tencent-weibo:before {
            content: "\f1d5";
        }
        .fa-qq:before {
            content: "\f1d6";
        }
        .fa-wechat:before,
        .fa-weixin:before {
            content: "\f1d7";
        }
        .fa-send:before,
        .fa-paper-plane:before {
            content: "\f1d8";
        }
        .fa-send-o:before,
        .fa-paper-plane-o:before {
            content: "\f1d9";
        }
        .fa-history:before {
            content: "\f1da";
        }
        .fa-genderless:before,
        .fa-circle-thin:before {
            content: "\f1db";
        }
        .fa-header:before {
            content: "\f1dc";
        }
        .fa-paragraph:before {
            content: "\f1dd";
        }
        .fa-sliders:before {
            content: "\f1de";
        }
        .fa-share-alt:before {
            content: "\f1e0";
        }
        .fa-share-alt-square:before {
            content: "\f1e1";
        }
        .fa-bomb:before {
            content: "\f1e2";
        }
        .fa-soccer-ball-o:before,
        .fa-futbol-o:before {
            content: "\f1e3";
        }
        .fa-tty:before {
            content: "\f1e4";
        }
        .fa-binoculars:before {
            content: "\f1e5";
        }
        .fa-plug:before {
            content: "\f1e6";
        }
        .fa-slideshare:before {
            content: "\f1e7";
        }
        .fa-twitch:before {
            content: "\f1e8";
        }
        .fa-yelp:before {
            content: "\f1e9";
        }
        .fa-newspaper-o:before {
            content: "\f1ea";
        }
        .fa-wifi:before {
            content: "\f1eb";
        }
        .fa-calculator:before {
            content: "\f1ec";
        }
        .fa-paypal:before {
            content: "\f1ed";
        }
        .fa-google-wallet:before {
            content: "\f1ee";
        }
        .fa-cc-visa:before {
            content: "\f1f0";
        }
        .fa-cc-mastercard:before {
            content: "\f1f1";
        }
        .fa-cc-discover:before {
            content: "\f1f2";
        }
        .fa-cc-amex:before {
            content: "\f1f3";
        }
        .fa-cc-paypal:before {
            content: "\f1f4";
        }
        .fa-cc-stripe:before {
            content: "\f1f5";
        }
        .fa-bell-slash:before {
            content: "\f1f6";
        }
        .fa-bell-slash-o:before {
            content: "\f1f7";
        }
        .fa-trash:before {
            content: "\f1f8";
        }
        .fa-copyright:before {
            content: "\f1f9";
        }
        .fa-at:before {
            content: "\f1fa";
        }
        .fa-eyedropper:before {
            content: "\f1fb";
        }
        .fa-paint-brush:before {
            content: "\f1fc";
        }
        .fa-birthday-cake:before {
            content: "\f1fd";
        }
        .fa-area-chart:before {
            content: "\f1fe";
        }
        .fa-pie-chart:before {
            content: "\f200";
        }
        .fa-line-chart:before {
            content: "\f201";
        }
        .fa-lastfm:before {
            content: "\f202";
        }
        .fa-lastfm-square:before {
            content: "\f203";
        }
        .fa-toggle-off:before {
            content: "\f204";
        }
        .fa-toggle-on:before {
            content: "\f205";
        }
        .fa-bicycle:before {
            content: "\f206";
        }
        .fa-bus:before {
            content: "\f207";
        }
        .fa-ioxhost:before {
            content: "\f208";
        }
        .fa-angellist:before {
            content: "\f209";
        }
        .fa-cc:before {
            content: "\f20a";
        }
        .fa-shekel:before,
        .fa-sheqel:before,
        .fa-ils:before {
            content: "\f20b";
        }
        .fa-meanpath:before {
            content: "\f20c";
        }
        .fa-buysellads:before {
            content: "\f20d";
        }
        .fa-connectdevelop:before {
            content: "\f20e";
        }
        .fa-dashcube:before {
            content: "\f210";
        }
        .fa-forumbee:before {
            content: "\f211";
        }
        .fa-leanpub:before {
            content: "\f212";
        }
        .fa-sellsy:before {
            content: "\f213";
        }
        .fa-shirtsinbulk:before {
            content: "\f214";
        }
        .fa-simplybuilt:before {
            content: "\f215";
        }
        .fa-skyatlas:before {
            content: "\f216";
        }
        .fa-cart-plus:before {
            content: "\f217";
        }
        .fa-cart-arrow-down:before {
            content: "\f218";
        }
        .fa-diamond:before {
            content: "\f219";
        }
        .fa-ship:before {
            content: "\f21a";
        }
        .fa-user-secret:before {
            content: "\f21b";
        }
        .fa-motorcycle:before {
            content: "\f21c";
        }
        .fa-street-view:before {
            content: "\f21d";
        }
        .fa-heartbeat:before {
            content: "\f21e";
        }
        .fa-venus:before {
            content: "\f221";
        }
        .fa-mars:before {
            content: "\f222";
        }
        .fa-mercury:before {
            content: "\f223";
        }
        .fa-transgender:before {
            content: "\f224";
        }
        .fa-transgender-alt:before {
            content: "\f225";
        }
        .fa-venus-double:before {
            content: "\f226";
        }
        .fa-mars-double:before {
            content: "\f227";
        }
        .fa-venus-mars:before {
            content: "\f228";
        }
        .fa-mars-stroke:before {
            content: "\f229";
        }
        .fa-mars-stroke-v:before {
            content: "\f22a";
        }
        .fa-mars-stroke-h:before {
            content: "\f22b";
        }
        .fa-neuter:before {
            content: "\f22c";
        }
        .fa-facebook-official:before {
            content: "\f230";
        }
        .fa-pinterest-p:before {
            content: "\f231";
        }
        .fa-whatsapp:before {
            content: "\f232";
        }
        .fa-server:before {
            content: "\f233";
        }
        .fa-user-plus:before {
            content: "\f234";
        }
        .fa-user-times:before {
            content: "\f235";
        }
        .fa-hotel:before,
        .fa-bed:before {
            content: "\f236";
        }
        .fa-viacoin:before {
            content: "\f237";
        }
        .fa-train:before {
            content: "\f238";
        }
        .fa-subway:before {
            content: "\f239";
        }
        .fa-medium:before {
            content: "\f23a";
        }
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url("./fonts/MaterialIcons-Regular.eot?v=2.0.0");
            src: local("Material Icons"), local("MaterialIcons-Regular"), url("./fonts/MaterialIcons-Regular.woff2?v=2.0.0") format("woff2"), url("./fonts/MaterialIcons-Regular.woff?v=2.0.0") format("woff"), url("./fonts/MaterialIcons-Regular.ttf?v=2.0.0") format("truetype");
        }
        .icon,
        .breadcrumb > li + li:before {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: inherit;
            display: inline-block;
            height: 1em;
            line-height: 1;
            text-rendering: optimizeLegibility;
            text-transform: none;
            letter-spacing: normal;
            vertical-align: -10%;
            width: 1em;
            word-wrap: normal;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            /* ie */

            -webkit-font-feature-settings: 'liga';
            font-feature-settings: 'liga';
        }
        .icon-2x {
            font-size: 2em;
        }
        .icon-3x {
            font-size: 3em;
        }
        .icon-4x {
            font-size: 4em;
        }
        .icon-5x {
            font-size: 5em;
        }
        .icon-lg {
            font-size: 1.5em;
            vertical-align: -26%;
        }
        .waves-button,
        .waves-circle {
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }
        .waves-effect {
            overflow: hidden;
            position: relative;
            -webkit-tap-highlight-color: transparent;
        }
        .waves-effect .waves-ripple {
            background-color: rgba(0, 0, 0, 0.1);
            background-image: -webkit-radial-gradient(rgba(0, 0, 0, 0.1) 0, rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 255, 0) 60%);
            background-image: radial-gradient(rgba(0, 0, 0, 0.1) 0, rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 255, 0) 60%);
            border-radius: 50%;
            height: 100px;
            margin-top: -50px;
            margin-left: -50px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            -webkit-transform: scale(0) translate(0, 0);
            -ms-transform: scale(0) translate(0, 0);
            transform: scale(0) translate(0, 0);
            -webkit-transition: all 0.9s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.9s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, transform;
            width: 100px;
        }
        .waves-effect.waves-light .waves-ripple {
            background-color: rgba(255, 255, 255, 0.4);
            background-image: -webkit-radial-gradient(rgba(255, 255, 255, 0.1) 0, rgba(255, 255, 255, 0.2) 30%, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0) 60%);
            background-image: radial-gradient(rgba(255, 255, 255, 0.1) 0, rgba(255, 255, 255, 0.2) 30%, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0) 60%);
        }
        .waves-notransition {
            -webkit-transition: none !important;
            transition: none !important;
        }
        @media print {
            *,
            *:after,
            *:before {
                background: transparent !important;
                box-shadow: none !important;
                text-shadow: none !important;
            }
            a,
            a:visited {
                text-decoration: underline;
            }
            a[href]:after {
                content: " (" attr(href) ")";
            }
            a[href^="#"]:after,
            a[href^="javascript:"]:after {
                content: "";
            }
            abbr[title]:after {
                content: " (" attr(title) ")";
            }
            blockquote,
            pre {
                border: 1px solid rgba(0, 0, 0, 0.38);
                page-break-inside: avoid;
            }
            img,
            tr {
                page-break-inside: avoid;
            }
            img {
                max-width: 100% !important;
            }
            h2,
            h3,
            p {
                orphans: 3;
                widows: 3;
            }
            h2,
            h3 {
                page-break-after: avoid;
            }
            thead {
                display: table-header-group;
            }
            .card,
            .card-img,
            .card-side {
                border-radius: 0 !important;
            }
            .card,
            .tile {
                border: 1px solid rgba(0, 0, 0, 0.38);
            }
            .fbtn-container,
            .menu,
            .menu-toggle {
                display: none !important;
            }
            .footer {
                page-break-after: always;
            }
            .header a {
                color: #ff4081;
            }
            .tab-nav .nav > li.active > a {
                border-bottom: 3px solid rgba(0, 0, 0, 0.87);
                padding-bottom: 7px;
            }
        }
        .visible-print-block {
            display: none !important;
        }
        @media print {
            .visible-print-block {
                display: block !important;
            }
        }
        .visible-print-inline {
            display: none !important;
        }
        @media print {
            .visible-print-inline {
                display: inline !important;
            }
        }
        .visible-print-inline-block {
            display: none !important;
        }
        @media print {
            .visible-print-inline-block {
                display: inline-block !important;
            }
        }
        @media print {
            .hidden-print {
                display: none !important;
            }
        }
        .access-hide {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }
        .access-hide.focusable:active,
        .access-hide.focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto;
        }
        .avoid-fout,
        .el-loading {
            position: relative;
        }
        body.avoid-fout,
        body.el-loading {
            position: static;
        }
        .avoid-fout-indicator,
        .el-loading-indicator {
            font-family: sans-serif !important;
            height: 0;
            min-height: 4px;
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
            text-align: center;
            width: 0;
            z-index: 2;
        }
        .avoid-fout > .avoid-fout-indicator,
        .el-loading > .el-loading-indicator {
            background-color: #ffffff;
            box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12), 0 0 2px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.15);
            height: 100%;
            opacity: 1;
            padding: 20px 16px;
            width: 100%;
        }
        .avoid-fout-done > .avoid-fout-indicator,
        .el-loading-done > .el-loading-indicator {
            height: 0;
            opacity: 0;
            padding: 0;
            -webkit-transition: height 0s 0.3s, opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1), padding 0s 0.3s, width 0s 0.3s;
            transition: height 0s 0.3s, opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1), padding 0s 0.3s, width 0s 0.3s;
            width: 0;
        }
        .avoid-fout-indicator-fixed,
        .el-loading-indicator-fixed {
            position: fixed;
            z-index: 41;
        }
        .avoid-fout-indicator-linear,
        .el-loading-indicator-linear {
            padding: 0 !important;
        }
        .clearfix:after,
        .clearfix:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .clearfix:after {
            clear: both;
        }
        .collapse {
            display: none;
        }
        .collapse.in {
            display: block;
        }
        .collapsed-hide {
            display: inline;
        }
        .collapsed .collapsed-hide {
            display: none;
        }
        .collapsed-show {
            display: none;
        }
        .collapsed .collapsed-show {
            display: inline;
        }
        .collapsible-region {
            overflow: hidden;
        }
        .collapsing {
            height: 0;
            overflow: hidden;
            position: relative;
            -webkit-transition: height 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: height 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .fade {
            opacity: 0;
            -webkit-transition: opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .fade.in {
            opacity: 1;
        }
        .iframe-seamless {
            border: 0;
            display: block;
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
        }
        .img-responsive {
            display: block;
            height: auto;
            max-width: 100%;
            width: 100% \9;
        }
        .list-clear,
        .list-inline {
            list-style: none;
            padding-left: 0;
        }
        .list-inline {
            margin-left: -8px;
        }
        .list-inline > li {
            display: inline-block;
            padding-right: 8px;
            padding-left: 8px;
        }
        .margin-bottom {
            margin-bottom: 24px !important;
        }
        .margin-bottom-lg {
            margin-bottom: 48px !important;
        }
        .margin-bottom-no {
            margin-bottom: 0 !important;
        }
        .margin-bottom-sm {
            margin-bottom: 12px !important;
        }
        .margin-left {
            margin-left: 16px !important;
        }
        .margin-left-lg {
            margin-left: 32px !important;
        }
        .margin-left-no {
            margin-left: 0 !important;
        }
        .margin-left-sm {
            margin-left: 8px !important;
        }
        .margin-no {
            margin: 0 !important;
        }
        .margin-right {
            margin-right: 16px !important;
        }
        .margin-right-lg {
            margin-right: 32px !important;
        }
        .margin-right-no {
            margin-right: 0 !important;
        }
        .margin-right-sm {
            margin-right: 8px !important;
        }
        .margin-top {
            margin-top: 24px !important;
        }
        .margin-top-lg {
            margin-top: 48px !important;
        }
        .margin-top-no {
            margin-top: 0 !important;
        }
        .margin-top-sm {
            margin-top: 12px !important;
        }
        .media,
        .media-inner {
            overflow: hidden;
        }
        .media-object.pull-left {
            margin-right: 16px;
        }
        .media-object.pull-right {
            margin-left: 16px;
        }
        .modal-scrollbar-measure {
            height: 50px;
            overflow: scroll;
            position: absolute;
            top: -99999px;
            width: 50px;
        }
        .no-overflow {
            overflow: hidden;
        }
        .p {
            display: block;
            margin-top: 8px;
            margin-bottom: 8px;
        }
        .padding-bottom {
            padding-bottom: 24px !important;
        }
        .padding-bottom-lg {
            padding-bottom: 48px !important;
        }
        .padding-bottom-no {
            padding-bottom: 0 !important;
        }
        .padding-bottom-sm {
            padding-bottom: 12px !important;
        }
        .padding-left {
            padding-left: 16px !important;
        }
        .padding-left-lg {
            padding-left: 32px !important;
        }
        .padding-left-no {
            padding-left: 0 !important;
        }
        .padding-left-sm {
            padding-left: 8px !important;
        }
        .padding-no {
            padding: 0 !important;
        }
        .padding-right {
            padding-right: 16px !important;
        }
        .padding-right-lg {
            padding-right: 32px !important;
        }
        .padding-right-no {
            padding-right: 0 !important;
        }
        .padding-right-sm {
            padding-right: 8px !important;
        }
        .padding-top {
            padding-top: 24px !important;
        }
        .padding-top-lg {
            padding-top: 48px !important;
        }
        .padding-top-no {
            padding-top: 0 !important;
        }
        .padding-top-sm {
            padding-top: 12px !important;
        }
        .pull-left {
            float: left;
        }
        .pull-none {
            float: none !important;
        }
        .pull-right {
            float: right;
        }
        .text-break {
            -webkit-hyphens: auto;
            -moz-hyphens: auto;
            -ms-hyphens: auto;
            hyphens: auto;
            word-break: break-all;
        }
        .text-overflow {
            display: block;
            line-height: inherit;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .text-nowrap {
            white-space: nowrap;
        }
        .text-center {
            text-align: center;
        }
        .text-left {
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
        .text-bg {
            color: rgba(0, 0, 0, 0.12);
        }
        .text-black {
            color: #000000;
        }
        .text-default {
            color: rgba(0, 0, 0, 0.87);
        }
        .text-hint {
            color: rgba(0, 0, 0, 0.38);
        }
        .text-sec {
            color: rgba(0, 0, 0, 0.54);
        }
        .text-white {
            color: white;
        }
        .text-brand {
            color: #3f51b5;
        }
        .text-brand-accent {
            color: #ff4081;
        }
        .text-amber {
            color: #ffc107;
        }
        .text-green {
            color: #4caf50;
        }
        .text-red {
            color: #f44336;
        }
        .visible-lg-block,
        .visible-lg-inline,
        .visible-lg-inline-block,
        .visible-md-block,
        .visible-md-inline,
        .visible-md-inline-block,
        .visible-sm-block,
        .visible-sm-inline,
        .visible-sm-inline-block,
        .visible-xs-block,
        .visible-xs-inline,
        .visible-xs-inline-block,
        .visible-xx-block,
        .visible-xx-inline,
        .visible-xx-inline-block {
            display: none !important;
        }
        @media only screen and (max-width: 479px) {
            .hidden-xx {
                display: none !important;
            }
            .visible-xx-block {
                display: block !important;
            }
            .visible-xx-inline {
                display: inline !important;
            }
            .visible-xx-inline-block {
                display: inline-block !important;
            }
        }
        @media only screen and (min-width: 480px) and (max-width: 767px) {
            .hidden-xs {
                display: none !important;
            }
            .visible-xs-block {
                display: block !important;
            }
            .visible-xs-inline {
                display: inline !important;
            }
            .visible-xs-inline-block {
                display: inline-block !important;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .hidden-sm {
                display: none !important;
            }
            .visible-sm-block {
                display: block !important;
            }
            .visible-sm-inline {
                display: inline !important;
            }
            .visible-sm-inline-block {
                display: inline-block !important;
            }
        }
        @media only screen and (min-width: 992px) and (max-width: 1439px) {
            .hidden-md {
                display: none !important;
            }
            .visible-md-block {
                display: block !important;
            }
            .visible-md-inline {
                display: inline !important;
            }
            .visible-md-inline-block {
                display: inline-block !important;
            }
        }
        @media only screen and (min-width: 1440px) {
            .hidden-lg {
                display: none !important;
            }
            .visible-lg-block {
                display: block !important;
            }
            .visible-lg-inline {
                display: inline !important;
            }
            .visible-lg-inline-block {
                display: inline-block !important;
            }
        }
        .avatar {
            background-color: rgba(0, 0, 0, 0.12);
            border-radius: 50%;
            color: rgba(0, 0, 0, 0.87);
            display: block;
            height: 40px;
            line-height: 40px;
            text-align: center;
            width: 40px;
        }
        .avatar:focus,
        .avatar:hover {
            color: rgba(0, 0, 0, 0.87);
            text-decoration: none;
        }
        .avatar.pull-left {
            margin-right: 16px;
        }
        .avatar.pull-right {
            margin-left: 16px;
        }
        .card-header-side > .avatar:first-child,
        .tile-side > .avatar:first-child {
            margin-top: -10px;
        }
        .card-header-side > .avatar:last-child,
        .tile-side > .avatar:last-child {
            margin-bottom: -10px;
        }
        .nav a > .avatar,
        .nav .a > .avatar {
            margin-top: -10px;
            margin-bottom: -10px;
        }
        .avatar img {
            border-radius: 50%;
            height: 100%;
            vertical-align: top;
            width: 100%;
        }
        .avatar .fa {
            display: block;
            height: 100%;
            line-height: inherit;
            text-align: center;
        }
        .avatar .fa-text {
            font-family: inherit;
        }
        .avatar-brand {
            background-color: #3f51b5;
            color: white;
        }
        .avatar-brand:focus,
        .avatar-brand:hover {
            color: white;
        }
        .avatar-brand-accent {
            background-color: #ff4081;
            color: white;
        }
        .avatar-brand-accent:focus,
        .avatar-brand-accent:hover {
            color: white;
        }
        .avatar-amber {
            background-color: #ffc107;
            color: rgba(0, 0, 0, 0.87);
        }
        .avatar-amber:focus,
        .avatar-amber:hover {
            color: rgba(0, 0, 0, 0.87);
        }
        .avatar-green {
            background-color: #4caf50;
            color: rgba(0, 0, 0, 0.87);
        }
        .avatar-green:focus,
        .avatar-green:hover {
            color: rgba(0, 0, 0, 0.87);
        }
        .avatar-red {
            background-color: #f44336;
            color: white;
        }
        .avatar-red:focus,
        .avatar-red:hover {
            color: white;
        }
        .avatar-lg {
            height: 80px;
            line-height: 80px;
            width: 80px;
        }
        .avatar-sm {
            height: 32px;
            line-height: 32px;
            width: 32px;
        }
        .card-header-side > .avatar-sm:first-child,
        .tile-side > .avatar-sm:first-child {
            margin-top: -6px;
        }
        .card-header-side > .avatar-sm:last-child,
        .tile-side > .avatar-sm:last-child {
            margin-bottom: -6px;
        }
        .nav a > .avatar-sm,
        .nav .a > .avatar-sm {
            margin-top: -6px;
            margin-bottom: -6px;
        }
        .avatar-inline {
            display: inline-block;
        }
        .breadcrumb {
            list-style: none;
            margin: 24px 0;
            padding: 0;
        }
        .breadcrumb:after,
        .breadcrumb:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .breadcrumb:after {
            clear: both;
        }
        .breadcrumb > li {
            display: block;
            float: left;
        }
        .breadcrumb > li + li:before {
            color: #9a9a9a;
            content: "chevron_right";
            display: inline-block;
            line-height: 20px;
            margin-left: 0.4em;
        }
        .breadcrumb > .active {
            color: #212121;
        }
        .breadcrumb > .active > a,
        .breadcrumb > .active > .a {
            color: #212121;
            cursor: text;
            text-decoration: none;
        }
        .btn {
            background-color: #f5f5f5;
            background-image: none;
            background-position: 50% 50%;
            background-size: 100% 100%;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15), 0 1px 3px 1px rgba(0, 0, 0, 0.15);
            color: rgba(0, 0, 0, 0.87);
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            line-height: 20px;
            margin-bottom: 0;
            max-width: 100%;
            padding: 8px 8px;
            position: relative;
            text-align: center;
            text-transform: uppercase;
            -webkit-transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            white-space: nowrap;
        }
        .btn:active,
        .btn:focus,
        .btn:hover {
            color: rgba(0, 0, 0, 0.87);
            outline: 0;
            text-decoration: none;
        }
        .btn:active,
        .btn:focus {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15), 0 1px 3px 1px rgba(0, 0, 0, 0.15), 0 3px 9px rgba(0, 0, 0, 0.3);
        }
        .btn:active {
            background-color: #e0e0e0;
        }
        .btn.disabled,
        .btn[disabled],
        fieldset[disabled] .btn {
            background-color: rgba(154, 154, 154, 0.18) !important;
            box-shadow: none !important;
            color: rgba(0, 0, 0, 0.38) !important;
            cursor: not-allowed;
        }
        .btn.disabled .waves-ripple,
        .btn[disabled] .waves-ripple,
        fieldset[disabled] .btn .waves-ripple {
            display: none;
        }
        .btn-brand {
            background-color: #3f51b5;
            color: white;
        }
        .btn-brand:active,
        .btn-brand:focus,
        .btn-brand:hover {
            background-color: #3f51b5;
            color: white;
        }
        .btn-brand-accent {
            background-color: #ff4081;
            color: white;
        }
        .btn-brand-accent:active,
        .btn-brand-accent:focus,
        .btn-brand-accent:hover {
            background-color: #ff4081;
            color: white;
        }
        .btn-amber {
            background-color: #ffc107;
            color: rgba(0, 0, 0, 0.87);
        }
        .btn-amber:active,
        .btn-amber:focus,
        .btn-amber:hover {
            background-color: #ffc107;
            color: rgba(0, 0, 0, 0.87);
        }
        .btn-green {
            background-color: #4caf50;
            color: rgba(0, 0, 0, 0.87);
        }
        .btn-green:active,
        .btn-green:focus,
        .btn-green:hover {
            background-color: #4caf50;
            color: rgba(0, 0, 0, 0.87);
        }
        .btn-red {
            background-color: #f44336;
            color: white;
        }
        .btn-red:active,
        .btn-red:focus,
        .btn-red:hover {
            background-color: #f44336;
            color: white;
        }
        .btn-block {
            display: block;
            white-space: normal;
            width: 100%;
        }
        .btn-flat {
            background-color: transparent;
            box-shadow: none;
        }
        .btn-flat:active,
        .btn-flat:focus,
        .btn-flat:hover {
            background-color: rgba(154, 154, 154, 0.18);
            box-shadow: none;
        }
        .btn-flat:active {
            background-color: rgba(154, 154, 154, 0.36);
        }
        .btn-flat.disabled,
        .btn-flat[disabled],
        fieldset[disabled] .btn-flat {
            background-color: transparent !important;
        }
        .btn-flat.btn-brand {
            color: #3f51b5;
        }
        .btn-flat.btn-brand[disabled],
        fieldset[disabled] .btn-flat.btn-brand {
            color: #7986cb;
        }
        .btn-flat.btn-brand-accent {
            color: #ff4081;
        }
        .btn-flat.btn-brand-accent[disabled],
        fieldset[disabled] .btn-flat.btn-brand-accent {
            color: #ff80ab;
        }
        .btn-flat.btn-amber {
            color: #ffc107;
        }
        .btn-flat.btn-amber[disabled],
        fieldset[disabled] .btn-flat.btn-amber {
            color: #ffecb3;
        }
        .btn-flat.btn-green {
            color: #4caf50;
        }
        .btn-flat.btn-green[disabled],
        fieldset[disabled] .btn-flat.btn-green {
            color: #81c784;
        }
        .btn-flat.btn-red {
            color: #f44336;
        }
        .btn-flat.btn-red[disabled],
        fieldset[disabled] .btn-flat.btn-red {
            color: #e57373;
        }
        .fbtn {
            background-color: #f5f5f5;
            border-radius: 50%;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15), 0 1px 3px 1px rgba(0, 0, 0, 0.3);
            clear: both;
            color: rgba(0, 0, 0, 0.87);
            cursor: pointer;
            display: block;
            font-size: 20px;
            height: 40px;
            margin: 12px auto;
            padding: 10px 0;
            position: relative;
            text-align: center;
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: background-color, box-shadow, opacity, -webkit-transform;
            transition-property: background-color, box-shadow, opacity, transform;
            width: 40px;
        }
        .fbtn:active,
        .fbtn:focus,
        .fbtn:hover {
            color: rgba(0, 0, 0, 0.87);
        }
        .fbtn:active,
        .fbtn:focus {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15), 0 1px 3px 1px rgba(0, 0, 0, 0.3), 0 6px 9px rgba(0, 0, 0, 0.15);
        }
        .fbtn:active {
            background-color: #e0e0e0;
        }
        .fbtn-brand {
            background-color: #3f51b5;
            color: white;
        }
        .fbtn-brand:active,
        .fbtn-brand:focus,
        .fbtn-brand:hover {
            background-color: #3f51b5;
            color: white;
        }
        .fbtn-brand-accent {
            background-color: #ff4081;
            color: white;
        }
        .fbtn-brand-accent:active,
        .fbtn-brand-accent:focus,
        .fbtn-brand-accent:hover {
            background-color: #ff4081;
            color: white;
        }
        .fbtn-amber {
            background-color: #ffc107;
            color: rgba(0, 0, 0, 0.87);
        }
        .fbtn-amber:active,
        .fbtn-amber:focus,
        .fbtn-amber:hover {
            background-color: #ffc107;
            color: rgba(0, 0, 0, 0.87);
        }
        .fbtn-green {
            background-color: #4caf50;
            color: rgba(0, 0, 0, 0.87);
        }
        .fbtn-green:active,
        .fbtn-green:focus,
        .fbtn-green:hover {
            background-color: #4caf50;
            color: rgba(0, 0, 0, 0.87);
        }
        .fbtn-red {
            background-color: #f44336;
            color: white;
        }
        .fbtn-red:active,
        .fbtn-red:focus,
        .fbtn-red:hover {
            background-color: #f44336;
            color: white;
        }
        .fbtn-lg {
            height: 56px;
            padding-top: 18px;
            padding-bottom: 18px;
            width: 56px;
        }
        .fbtn-lg .fbtn-sub {
            top: 18px;
        }
        .fbtn-lg ~ .fbtn-dropdown {
            min-width: 88px;
        }
        .fbtn-container {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            position: fixed;
            right: 16px;
            bottom: 12px;
            -webkit-transition: margin-bottom 0.3s cubic-bezier(0.4, 0, 0.2, 1), right 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: margin-bottom 0.3s cubic-bezier(0.4, 0, 0.2, 1), right 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 21;
        }
        .fbtn-dropdown {
            max-height: 0;
            overflow: hidden;
            padding-right: 16px;
            padding-left: 16px;
            position: absolute;
            right: -16px;
            bottom: 100%;
            -webkit-transition: max-height 0s 0.5s;
            transition: max-height 0s 0.5s;
        }
        .fbtn-inner.open .fbtn-dropdown {
            max-height: 99999px;
            overflow: visible;
            -webkit-transition: max-height 0s;
            transition: max-height 0s;
        }
        .fbtn-dropdown .fbtn {
            opacity: 0;
            -webkit-transform: scale(0.5, 0.5);
            -ms-transform: scale(0.5, 0.5);
            transform: scale(0.5, 0.5);
        }
        .fbtn-dropdown .fbtn:nth-last-child(1) {
            -webkit-transition-delay: 300ms;
            transition-delay: 300ms;
        }
        .fbtn-dropdown .fbtn:nth-last-child(2) {
            -webkit-transition-delay: 250ms;
            transition-delay: 250ms;
        }
        .fbtn-dropdown .fbtn:nth-last-child(3) {
            -webkit-transition-delay: 200ms;
            transition-delay: 200ms;
        }
        .fbtn-dropdown .fbtn:nth-last-child(4) {
            -webkit-transition-delay: 150ms;
            transition-delay: 150ms;
        }
        .fbtn-dropdown .fbtn:nth-last-child(5) {
            -webkit-transition-delay: 100ms;
            transition-delay: 100ms;
        }
        .fbtn-dropdown .fbtn:nth-last-child(6) {
            -webkit-transition-delay: 50ms;
            transition-delay: 50ms;
        }
        .fbtn-inner.open .fbtn-dropdown .fbtn {
            opacity: 1;
            -webkit-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1);
            -webkit-transition-delay: 300ms;
            transition-delay: 300ms;
        }
        .fbtn-inner.open .fbtn-dropdown .fbtn:nth-last-child(1) {
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
        }
        .fbtn-inner.open .fbtn-dropdown .fbtn:nth-last-child(2) {
            -webkit-transition-delay: 50ms;
            transition-delay: 50ms;
        }
        .fbtn-inner.open .fbtn-dropdown .fbtn:nth-last-child(3) {
            -webkit-transition-delay: 100ms;
            transition-delay: 100ms;
        }
        .fbtn-inner.open .fbtn-dropdown .fbtn:nth-last-child(4) {
            -webkit-transition-delay: 150ms;
            transition-delay: 150ms;
        }
        .fbtn-inner.open .fbtn-dropdown .fbtn:nth-last-child(5) {
            -webkit-transition-delay: 200ms;
            transition-delay: 200ms;
        }
        .fbtn-inner.open .fbtn-dropdown .fbtn:nth-last-child(6) {
            -webkit-transition-delay: 250ms;
            transition-delay: 250ms;
        }
        .fbtn-inner {
            position: relative;
        }
        .fbtn-ori,
        .fbtn-sub {
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, transform;
        }
        .fbtn-ori.icon,
        .breadcrumb > li + li.fbtn-ori:before,
        .fbtn-sub.icon,
        .breadcrumb > li + li.fbtn-sub:before {
            vertical-align: bottom;
        }
        .fbtn-inner.open .fbtn-ori {
            opacity: 0;
            -webkit-transform: rotate(225deg);
            -ms-transform: rotate(225deg);
            transform: rotate(225deg);
        }
        .fbtn-rotate {
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, transform;
        }
        .fbtn-inner.open .fbtn-rotate {
            -webkit-transform: rotate(225deg);
            -ms-transform: rotate(225deg);
            transform: rotate(225deg);
        }
        .fbtn-sub {
            margin-left: -10px;
            opacity: 0;
            position: absolute;
            top: 10px;
            left: 50%;
            text-align: center;
            -webkit-transform: rotate(-225deg);
            -ms-transform: rotate(-225deg);
            transform: rotate(-225deg);
            width: 20px;
        }
        .fbtn-inner.open .fbtn-sub {
            opacity: 1;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
        }
        .fbtn-text {
            background-color: rgba(0, 0, 0, 0.54);
            border-radius: 2px;
            color: #ffffff;
            font-size: 12px;
            height: 0;
            line-height: 20px;
            margin-top: -10px;
            margin-right: 16px;
            opacity: 0;
            overflow: hidden;
            padding-right: 8px;
            padding-left: 8px;
            position: absolute;
            top: 50%;
            right: 100%;
            -webkit-transition: opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            white-space: nowrap;
            width: 0;
        }
        .no-touch .fbtn:hover .fbtn-text {
            height: auto;
            opacity: 1;
            width: auto;
        }
        .no-touch .fbtn-dropdown .fbtn:hover .fbtn-text {
            height: 0;
            opacity: 0;
            width: 0;
        }
        .no-touch .fbtn-inner.open .fbtn-dropdown .fbtn:hover .fbtn-text {
            height: auto;
            opacity: 1;
            width: auto;
        }
        .touch .fbtn-text {
            display: none;
            height: auto;
            opacity: 1;
            width: auto;
        }
        .touch .fbtn-inner.open .fbtn-text {
            display: block;
        }
        .card {
            background-color: #ffffff;
            border-radius: 2px;
            box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.06), 0 0 3px rgba(0, 0, 0, 0.18), 0 1px 3px rgba(0, 0, 0, 0.18);
            display: block;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-top: 24px;
            margin-bottom: 24px;
            -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        .card-wrap .card {
            margin-top: 0;
        }
        .no-flexbox .card:after,
        .no-flexbox .card:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .no-flexbox .card:after {
            clear: both;
        }
        .card-brand {
            background-color: #3f51b5;
            color: white;
        }
        .card-brand a,
        .card-brand a:focus,
        .card-brand a:hover {
            color: inherit;
        }
        .card-brand-accent {
            background-color: #ff4081;
            color: white;
        }
        .card-brand-accent a,
        .card-brand-accent a:focus,
        .card-brand-accent a:hover {
            color: inherit;
        }
        .card-amber {
            background-color: #ffc107;
            color: rgba(0, 0, 0, 0.87);
        }
        .card-amber a,
        .card-amber a:focus,
        .card-amber a:hover {
            color: inherit;
        }
        .card-green {
            background-color: #4caf50;
            color: rgba(0, 0, 0, 0.87);
        }
        .card-green a,
        .card-green a:focus,
        .card-green a:hover {
            color: inherit;
        }
        .card-red {
            background-color: #f44336;
            color: white;
        }
        .card-red a,
        .card-red a:focus,
        .card-red a:hover {
            color: inherit;
        }
        .card-action,
        .tile-action {
            border-top: 1px solid rgba(0, 0, 0, 0.12);
            min-height: 48px;
            position: relative;
        }
        .card-action:after,
        .tile-action:after,
        .card-action:before,
        .tile-action:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .card-action:after,
        .tile-action:after {
            clear: both;
        }
        .card-action:first-child,
        .tile-action:first-child {
            border-top: 0;
        }
        .card-action-btn,
        .tile-footer-btn {
            margin: 6px 8px;
            white-space: nowrap;
        }
        .card-action-btn .btn + .btn,
        .tile-footer-btn .btn + .btn {
            margin-left: 8px;
        }
        .card-header {
            border-bottom: 1px solid rgba(0, 0, 0, 0.12);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            min-height: 56px;
            position: relative;
        }
        .card-header:last-child {
            border-bottom: 0;
        }
        .no-flexbox .card-header:after,
        .no-flexbox .card-header:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .no-flexbox .card-header:after {
            clear: both;
        }
        .card-header-side,
        .tile-side {
            min-width: 0;
            padding-top: 18px;
            padding-bottom: 18px;
        }
        .card-header-side.pull-left,
        .pull-left.tile-side {
            -webkit-box-ordinal-group: 0;
            -webkit-order: -1;
            -ms-flex-order: -1;
            order: -1;
            padding-left: 16px;
        }
        .no-flexbox .card-header-side.pull-left,
        .no-flexbox .pull-left.tile-side {
            padding-right: 16px;
        }
        .card-header-side.pull-right,
        .pull-right.tile-side {
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
            padding-right: 16px;
        }
        .no-flexbox .card-header-side.pull-right,
        .no-flexbox .pull-right.tile-side {
            padding-left: 16px;
        }
        .card-heading {
            display: block;
            font-size: 20px;
            line-height: 28px;
            margin-top: 24px;
            margin-bottom: 24px;
        }
        .card-header .card-heading {
            margin-top: 0;
            margin-bottom: 0;
        }
        .card-img {
            overflow: hidden;
            position: relative;
        }
        .card-img:first-child {
            border-radius: 2px 2px 0 0;
        }
        .card-img:last-child {
            border-radius: 0 0 2px 2px;
        }
        .card-img img {
            display: block;
            height: auto;
            width: 100%;
        }
        .card-img-heading {
            background-image: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.5));
            background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.5));
            color: #ffffff;
            font-size: 20px;
            line-height: 28px;
            margin: 0;
            padding: 12px 16px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        .card-inner {
            margin: 24px 16px;
            min-width: 0;
            position: relative;
        }
        .card-header .card-inner {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            font-size: 16px;
            line-height: 24px;
            margin-top: 16px;
            margin-bottom: 16px;
        }
        .no-flexbox .card-header-side + .card-inner,
        .no-flexbox .tile-side + .card-inner {
            overflow: hidden;
        }
        .card-main {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            min-width: 0;
        }
        .no-flexbox .card-side ~ .card-main {
            overflow: hidden;
        }
        .card-side {
            background-color: rgba(0, 0, 0, 0.12);
            border-radius: 2px 0 0 2px;
            max-width: 33.33333%;
            padding-right: 16px;
            padding-left: 16px;
        }
        .card-side[href] {
            color: inherit;
        }
        .card-side[href]:focus,
        .card-side[href]:hover {
            text-decoration: none;
        }
        .card-side.card-side-img {
            overflow: hidden;
            padding-right: 0;
            padding-left: 0;
        }
        .card-side.pull-right {
            border-radius: 0 2px 2px 0;
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
        }
        .card-wrap {
            margin-top: 24px;
            margin-bottom: -24px;
        }
        .card-wrap:after,
        .card-wrap:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .card-wrap:after {
            clear: both;
        }
        code,
        kbd,
        pre,
        samp {
            font-family: Monaco, Menlo, Consolas, "Courier New", monospace;
        }
        code {
            background-color: #f5f5f5;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            color: #ff4081;
            font-size: 75%;
            line-height: 1;
            padding: 2px 4px;
        }
        kbd {
            background-color: rgba(0, 0, 0, 0.87);
            border-radius: 4px;
            color: white;
            font-size: 75%;
            padding: 2px 4px;
        }
        kbd kbd {
            font-size: 100%;
            font-weight: 500;
            padding: 0;
        }
        pre {
            background-color: #f5f5f5;
            border: 1px solid #e0e0e0;
            border-radius: 2px;
            color: rgba(0, 0, 0, 0.87);
            display: block;
            font-size: 12px;
            line-height: 20px;
            margin: 24px 0;
            padding: 12px 8px;
            word-break: break-all;
            word-wrap: break-word;
        }
        pre code {
            background-color: transparent;
            border-radius: 0;
            color: inherit;
            font-size: inherit;
            padding: 0;
            white-space: pre-wrap;
        }
        .dropdown {
            position: relative;
            -webkit-transition: z-index 0s 0.3s;
            transition: z-index 0s 0.3s;
        }
        .dropdown.open {
            -webkit-transition: z-index 0s;
            transition: z-index 0s;
            z-index: 21;
        }
        .dropdown [data-toggle="dropdown"] {
            cursor: pointer;
        }
        .dropdown-inline {
            display: inline-block;
        }
        .dropdown-menu {
            background-color: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.12);
            border-radius: 0 2px 2px 2px;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.06), 0 0 3px rgba(0, 0, 0, 0.18), 0 1px 3px rgba(0, 0, 0, 0.18);
            list-style: none;
            margin: -1px 0 0 !important;
            min-width: 100%;
            opacity: 0;
            padding-top: 8px !important;
            padding-right: 0;
            padding-bottom: 8px !important;
            padding-left: 0;
            position: absolute !important;
            top: 100%;
            left: 0;
            -webkit-transform: scale(0.25, 0);
            -ms-transform: scale(0.25, 0);
            transform: scale(0.25, 0);
            -webkit-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, transform;
        }
        .dropdown.open .dropdown-menu {
            opacity: 1;
            -webkit-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1);
        }
        .dropdown-menu.dropdown-menu-right,
        .dropdown.pull-right .dropdown-menu,
        .nav.pull-right .dropdown-menu {
            border-radius: 2px 0 2px 2px;
            right: 0;
            left: auto;
            -webkit-transform-origin: 100% 0;
            -ms-transform-origin: 100% 0;
            transform-origin: 100% 0;
        }
        .dropdown-menu a,
        .dropdown-menu .a {
            color: #212121 !important;
            display: block;
            line-height: inherit;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .dropdown-menu a:focus,
        .dropdown-menu a:hover,
        .dropdown-menu .a:focus,
        .dropdown-menu .a:hover {
            background-color: rgba(0, 0, 0, 0.12);
        }
        .dropdown-menu .active > a,
        .dropdown-menu .active > .a {
            background-color: rgba(0, 0, 0, 0.12);
        }
        .no-csstransforms .dropdown-menu {
            display: none;
        }
        .no-csstransforms .dropdown.open .dropdown-menu {
            display: block;
        }
        .dropdown-toggle {
            -webkit-transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .dropdown.open .dropdown-toggle {
            background-color: rgba(0, 0, 0, 0.12);
            border-radius: 2px 2px 0 0;
        }
        .dropdown-toggle-btn {
            margin-right: 1px;
            margin-left: 1px;
            padding-right: 16px;
            padding-left: 16px;
            position: relative;
            z-index: 1;
        }
        .dropdown.open .dropdown-toggle-btn {
            background-color: #ffffff;
            box-shadow: none;
            color: rgba(0, 0, 0, 0.87);
        }
        .dropdown-toggle-btn ~ .dropdown-menu {
            min-width: 100%;
            padding-top: 56px !important;
            top: -14px;
            left: 0;
            -webkit-transform: scale(1, 0);
            -ms-transform: scale(1, 0);
            transform: scale(1, 0);
        }
        .dropdown-toggle-btn ~ .dropdown-menu.dropdown-menu-right,
        .dropdown.pull-right .dropdown-toggle-btn ~ .dropdown-menu,
        .nav.pull-right .dropdown-toggle-btn ~ .dropdown-menu {
            right: 0;
            left: auto;
        }
        .dropdown-wrap {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .dropdown-wrap:after,
        .dropdown-wrap:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .dropdown-wrap:after {
            clear: both;
        }
        legend[class*="col-xx-"] {
            padding-left: 8px;
        }
        @media only screen and (min-width: 480px) {
            legend[class*="col-xs-"] {
                padding-left: 8px;
            }
        }
        @media only screen and (min-width: 768px) {
            legend[class*="col-sm-"] {
                padding-left: 8px;
            }
        }
        @media only screen and (min-width: 992px) {
            legend[class*="col-md-"] {
                padding-left: 8px;
            }
        }
        @media only screen and (min-width: 1440px) {
            legend[class*="col-lg-"] {
                padding-left: 8px;
            }
        }
        .checkbox,
        .radio {
            display: block;
            position: relative;
        }
        .form-group .checkbox,
        .form-group .radio {
            margin-top: 8px;
            padding-bottom: 8px;
        }
        .checkbox label,
        .radio label {
            cursor: pointer;
            margin: 0;
            min-height: 14px;
            padding-left: 20px;
        }
        .checkbox.disabled label,
        fieldset[disabled] .checkbox label,
        .radio.disabled label,
        fieldset[disabled] .radio label {
            color: rgba(0, 0, 0, 0.38);
            cursor: not-allowed;
        }
        .checkbox input[type="checkbox"],
        .radio input[type="radio"] {
            margin-left: -20px;
            position: absolute;
        }
        .checkbox-inline,
        .radio-inline {
            display: inline-block;
            margin-right: 16px;
        }
        .form {
            margin-top: 24px;
            margin-bottom: 24px;
        }
        .form-control,
        .picker__select--month,
        .picker__select--year {
            background-color: transparent;
            background-image: none;
            border: 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.38);
            border-radius: 0;
            color: rgba(0, 0, 0, 0.87);
            display: block;
            font-size: 14px;
            height: 36px;
            line-height: 20px;
            padding: 8px 0 7px;
            -webkit-transition: border-bottom-color 0.15s cubic-bezier(0.4, 0, 0.2, 1);
            transition: border-bottom-color 0.15s cubic-bezier(0.4, 0, 0.2, 1);
            width: 100%;
        }
        .form-control:-ms-input-placeholder,
        .picker__select--month:-ms-input-placeholder,
        .picker__select--year:-ms-input-placeholder {
            color: rgba(0, 0, 0, 0.38);
        }
        .form-control::-moz-placeholder,
        .picker__select--month::-moz-placeholder,
        .picker__select--year::-moz-placeholder {
            color: rgba(0, 0, 0, 0.38);
            opacity: 1;
        }
        .form-control::-webkit-input-placeholder,
        .picker__select--month::-webkit-input-placeholder,
        .picker__select--year::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.38);
        }
        .form-control:focus,
        .picker__select--month:focus,
        .picker__select--year:focus {
            border-color: #ff4081;
            border-bottom-width: 2px;
            outline: 0;
            padding-bottom: 6px;
        }
        .form-control[disabled],
        [disabled].picker__select--month,
        [disabled].picker__select--year,
        .form-control[readonly],
        [readonly].picker__select--month,
        [readonly].picker__select--year,
        fieldset[disabled] .form-control,
        fieldset[disabled] .picker__select--month,
        fieldset[disabled] .picker__select--year {
            border-style: dashed;
            color: rgba(0, 0, 0, 0.38);
            cursor: not-allowed;
            opacity: 1;
        }
        .form-control.form-control-inline,
        .form-control-inline.picker__select--month,
        .form-control-inline.picker__select--year {
            display: inline-block;
            vertical-align: middle;
            width: auto;
        }
        .form-control.form-control-default,
        .form-control-default.picker__select--month,
        .form-control-default.picker__select--year,
        .form-control-default .form-control,
        .form-control-default .picker__select--month,
        .form-control-default .picker__select--year {
            border: 1px solid rgba(0, 0, 0, 0.38);
            padding: 7px 8px;
            -webkit-transition: none;
            transition: none;
        }
        .form-control.form-control-default:focus,
        .form-control-default.picker__select--month:focus,
        .form-control-default.picker__select--year:focus,
        .form-control-default .form-control:focus,
        .form-control-default .picker__select--month:focus,
        .form-control-default .picker__select--year:focus {
            border: 1px solid #ff4081;
            padding: 7px 8px;
        }
        .form-control.form-control-default[disabled],
        .form-control-default[disabled].picker__select--month,
        .form-control-default[disabled].picker__select--year,
        .form-control.form-control-default[readonly],
        .form-control-default[readonly].picker__select--month,
        .form-control-default[readonly].picker__select--year,
        fieldset[disabled] .form-control.form-control-default,
        fieldset[disabled] .form-control-default.picker__select--month,
        fieldset[disabled] .form-control-default.picker__select--year,
        .form-control-default .form-control[disabled],
        .form-control-default [disabled].picker__select--month,
        .form-control-default [disabled].picker__select--year,
        .form-control-default .form-control[readonly],
        .form-control-default [readonly].picker__select--month,
        .form-control-default [readonly].picker__select--year,
        fieldset[disabled] .form-control-default .form-control,
        fieldset[disabled] .form-control-default .picker__select--month,
        fieldset[disabled] .form-control-default .picker__select--year {
            background-color: #e0e0e0;
        }
        .form-group-brand .form-control,
        .form-group-brand .picker__select--month,
        .form-group-brand .picker__select--year,
        .form-group-brand .form-control:focus,
        .form-group-brand .picker__select--month:focus,
        .form-group-brand .picker__select--year:focus {
            border-color: #3f51b5;
        }
        .form-group-brand-accent .form-control,
        .form-group-brand-accent .picker__select--month,
        .form-group-brand-accent .picker__select--year,
        .form-group-brand-accent .form-control:focus,
        .form-group-brand-accent .picker__select--month:focus,
        .form-group-brand-accent .picker__select--year:focus {
            border-color: #ff4081;
        }
        .form-group-amber .form-control,
        .form-group-amber .picker__select--month,
        .form-group-amber .picker__select--year,
        .form-group-amber .form-control:focus,
        .form-group-amber .picker__select--month:focus,
        .form-group-amber .picker__select--year:focus {
            border-color: #ffc107;
        }
        .form-group-green .form-control,
        .form-group-green .picker__select--month,
        .form-group-green .picker__select--year,
        .form-group-green .form-control:focus,
        .form-group-green .picker__select--month:focus,
        .form-group-green .picker__select--year:focus {
            border-color: #4caf50;
        }
        .form-group-red .form-control,
        .form-group-red .picker__select--month,
        .form-group-red .picker__select--year,
        .form-group-red .form-control:focus,
        .form-group-red .picker__select--month:focus,
        .form-group-red .picker__select--year:focus {
            border-color: #f44336;
        }
        input[type="color"].form-control-default,
        .form-control-default input[type="color"] {
            min-width: 38px;
        }
        label + .form-control.form-control-default,
        label + .form-control-default.picker__select--month,
        label + .form-control-default.picker__select--year,
        .form-control-default label + .form-control,
        .form-control-default label + .picker__select--month,
        .form-control-default label + .picker__select--year {
            margin-top: 5px;
        }
        label.access-hide + .form-control.form-control-default,
        label.access-hide + .form-control-default.picker__select--month,
        label.access-hide + .form-control-default.picker__select--year,
        .form-control-default label.access-hide + .form-control,
        .form-control-default label.access-hide + .picker__select--month,
        .form-control-default label.access-hide + .picker__select--year {
            margin-top: 0;
        }
        select.form-control,
        select.picker__select--month,
        select.picker__select--year {
            -webkit-appearance: none;
        }
        @media only screen and (-webkit-min-device-pixel-ratio: 0) {
            select.form-control,
            select.picker__select--month,
            select.picker__select--year {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAkCAMAAACg5NohAAAAZlBMVEUAAABlZWXLy8vg4OB6enrX19fg4OCdnZ2KiopsbGzn5+dzc3Pt7e3GxsbPz89ubm7u7u5ycnLY2NiJiYmGhoZoaGjq6up/f3+WlpaGhoaZmZllZWVhYWFYWFhaWlpdXV1bW1tWVlaZeqNTAAAAHHRSTlMA+WVC31BEqMzyNekpcGDpKNxJzcjkL9CjwZ/yNlWBeQAAALBJREFUKM/NztkWwiAMRdFQoNparR2cGf//J8UFNdXEd8/rXrkAq9rLoIGt3Vkn9A8xJoiaSqeSJGskuXlJNs2sFRPjWo7lptzVVEoO7VyEWofvoEn8NTUUxuZo2KyCPjo2+wB9m7ZM01zB/9feN2zXEVS0bLEHZQ1b6EE2jhNvDsBbMBWkampepJtizNpi4UPyGrEimBbhLT4L2nLnzR6+ksnIGm7iGjXv8xq14bSWJwymLjvMk/6KAAAAAElFTkSuQmCC);
                background-position: 100% 11px;
                background-repeat: no-repeat;
                background-size: auto 12px;
                padding-right: 12px;
            }
            select.form-control[multiple],
            select[multiple].picker__select--month,
            select[multiple].picker__select--year,
            select.form-control[size],
            select[size].picker__select--month,
            select[size].picker__select--year {
                background-image: none;
                padding-right: 0;
            }
        }
        @media only screen and (-webkit-min-device-pixel-ratio: 0) {
            select.form-control-default,
            .form-control-default select {
                background-position: 99% 11px;
                background-position: -webkit-calc(100% - 8px) 11px;
                background-position: calc(100% - 8px) 11px;
                padding-right: 24px;
            }
            select.form-control-default[multiple],
            select.form-control-default[size],
            .form-control-default select[multiple],
            .form-control-default select[size] {
                padding-right: 8px;
            }
        }
        textarea.form-control,
        textarea.picker__select--month,
        textarea.picker__select--year {
            height: auto;
        }
        .form-control-inverse {
            color: white;
        }
        .form-control-inverse:-ms-input-placeholder {
            color: #f5f5f5;
        }
        .form-control-inverse::-moz-placeholder {
            color: #f5f5f5;
            opacity: 1;
        }
        .form-control-inverse::-webkit-input-placeholder {
            color: #f5f5f5;
        }
        .form-control-static {
            border-bottom: 1px solid rgba(0, 0, 0, 0.38);
            display: block;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 8px;
            padding-bottom: 7px;
        }
        .form-control-static.form-control-default {
            padding-top: 7px;
        }
        .form-group {
            margin-top: 24px;
            margin-bottom: 24px;
        }
        legend + .form-group {
            margin-top: 0;
        }
        .form-group-btn {
            margin-bottom: 24px;
        }
        .form-group-btn .btn {
            margin-top: 24px;
            margin-right: 16px;
        }
        .form-help {
            display: block;
            font-size: 12px;
            font-weight: 400;
            line-height: 20px;
            margin-top: 12px;
            margin-bottom: 12px;
            position: relative;
        }
        .form-help-icon {
            position: absolute;
            top: 4px;
            right: 0;
        }
        .form-help-msg {
            padding-right: 1.28571em;
        }
        .form-label {
            display: block;
        }
        @media only screen and (min-width: 480px) {
            [class*="col-xs"] > .form-label {
                padding-top: 8px;
                padding-bottom: 8px;
                text-align: right;
            }
        }
        @media only screen and (min-width: 768px) {
            [class*="col-sm"] > .form-label {
                padding-top: 8px;
                padding-bottom: 8px;
                text-align: right;
            }
        }
        @media only screen and (min-width: 992px) {
            [class*="col-md"] > .form-label {
                padding-top: 8px;
                padding-bottom: 8px;
                text-align: right;
            }
        }
        @media only screen and (min-width: 1440px) {
            [class*="col-lg"] > .form-label {
                padding-top: 8px;
                padding-bottom: 8px;
                text-align: right;
            }
        }
        .form-group-brand .form-label {
            color: #3f51b5;
        }
        .form-group-brand-accent .form-label {
            color: #ff4081;
        }
        .form-group-amber .form-label {
            color: #ffc107;
        }
        .form-group-green .form-label {
            color: #4caf50;
        }
        .form-group-red .form-label {
            color: #f44336;
        }
        .label {
            margin-bottom: 12px;
        }
        .checkbox-adv,
        .radio-adv {
            font-size: 14px;
            line-height: 20px;
        }
        .checkbox-adv [class^="circle"],
        .radio-adv [class^="circle"] {
            display: block;
            height: 14px;
            position: absolute;
            top: 2px;
            left: 0;
            width: 14px;
        }
        .checkbox-adv .circle,
        .radio-adv .circle {
            border: 2px solid rgba(0, 0, 0, 0.54);
            -webkit-transition: border-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: border-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .checkbox-adv.disabled .circle,
        .disabled.radio-adv .circle,
        fieldset[disabled] .checkbox-adv .circle,
        fieldset[disabled] .radio-adv .circle {
            border-color: #9a9a9a !important;
        }
        .checkbox-adv input[type="checkbox"]:focus ~ .circle,
        .radio-adv input[type="checkbox"]:focus ~ .circle,
        .checkbox-adv input[type="radio"]:focus ~ .circle,
        .radio-adv input[type="radio"]:focus ~ .circle {
            border-color: rgba(0, 0, 0, 0.87);
        }
        .checkbox-adv input[type="checkbox"]:checked ~ .circle,
        .radio-adv input[type="checkbox"]:checked ~ .circle,
        .checkbox-adv input[type="radio"]:checked ~ .circle,
        .radio-adv input[type="radio"]:checked ~ .circle {
            border-color: #ff4081;
        }
        .checkbox-adv .circle-check,
        .radio-adv .circle-check {
            background-color: transparent;
            -webkit-transform: scale(0, 0);
            -ms-transform: scale(0, 0);
            transform: scale(0, 0);
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: background-color, -webkit-transform;
            transition-property: background-color, transform;
        }
        .checkbox-adv .circle-check:after,
        .radio-adv .circle-check:after {
            background-color: #ff4081;
            border-radius: 50%;
            content: "";
            display: block;
            height: 70px;
            opacity: 0;
            position: absolute;
            top: -28px;
            left: -28px;
            width: 70px;
        }
        .checkbox-adv.disabled .circle-check:after,
        .disabled.radio-adv .circle-check:after,
        fieldset[disabled] .checkbox-adv .circle-check:after,
        fieldset[disabled] .radio-adv .circle-check:after {
            background-color: #9a9a9a;
        }
        .checkbox-adv input[type="checkbox"]:checked ~ .circle-check,
        .radio-adv input[type="checkbox"]:checked ~ .circle-check,
        .checkbox-adv input[type="radio"]:checked ~ .circle-check,
        .radio-adv input[type="radio"]:checked ~ .circle-check {
            -webkit-transform: scale(0.5, 0.5);
            -ms-transform: scale(0.5, 0.5);
            transform: scale(0.5, 0.5);
        }
        .checkbox-adv input[type="checkbox"]:checked ~ .circle-check:after,
        .radio-adv input[type="checkbox"]:checked ~ .circle-check:after,
        .checkbox-adv input[type="radio"]:checked ~ .circle-check:after,
        .radio-adv input[type="radio"]:checked ~ .circle-check:after {
            -webkit-animation: circle-check 0.6s;
            animation: circle-check 0.6s;
        }
        .checkbox-adv .circle-icon,
        .radio-adv .circle-icon {
            background-color: transparent;
            color: transparent;
            -webkit-transform: scale(0.5, 0.5);
            -ms-transform: scale(0.5, 0.5);
            transform: scale(0.5, 0.5);
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: background-color, color, -webkit-transform;
            transition-property: background-color, color, transform;
        }
        .checkbox-adv .circle-icon:before,
        .radio-adv .circle-icon:before {
            top: auto;
        }
        .checkbox-adv input[type="checkbox"]:checked ~ .circle-icon,
        .radio-adv input[type="checkbox"]:checked ~ .circle-icon,
        .checkbox-adv input[type="radio"]:checked ~ .circle-icon,
        .radio-adv input[type="radio"]:checked ~ .circle-icon {
            background-color: #ff4081;
            color: white;
            -webkit-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1);
        }
        .checkbox-adv.disabled input[type="checkbox"]:checked ~ .circle-icon,
        .disabled.radio-adv input[type="checkbox"]:checked ~ .circle-icon,
        .checkbox-adv.disabled input[type="radio"]:checked ~ .circle-icon,
        .disabled.radio-adv input[type="radio"]:checked ~ .circle-icon,
        fieldset[disabled] .checkbox-adv input[type="checkbox"]:checked ~ .circle-icon,
        fieldset[disabled] .radio-adv input[type="checkbox"]:checked ~ .circle-icon,
        fieldset[disabled] .checkbox-adv input[type="radio"]:checked ~ .circle-icon,
        fieldset[disabled] .radio-adv input[type="radio"]:checked ~ .circle-icon {
            background-color: #9a9a9a;
        }
        .radio-adv [class^="circle"] {
            border-radius: 50%;
        }
        .radio-adv input[type="radio"]:checked ~ .circle-check {
            background-color: #ff4081;
        }
        .radio-adv.disabled input[type="radio"]:checked ~ .circle-check,
        fieldset[disabled] .radio-adv input[type="radio"]:checked ~ .circle-check {
            background-color: #9a9a9a;
        }
        @-webkit-keyframes circle-check {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 0.25;
            }
            100% {
                opacity: 0;
            }
        }
        @keyframes circle-check {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 0.25;
            }
            100% {
                opacity: 0;
            }
        }
        .picker {
            position: absolute;
            z-index: 40;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .picker__box {
            background-clip: padding-box;
            background-color: #ffffff;
            border-radius: 4px;
            box-shadow: 0 1px 30px rgba(0, 0, 0, 0.5);
            outline: 0;
            overflow: hidden;
            position: relative;
            vertical-align: middle;
            z-index: 1;
        }
        .picker__box:after,
        .picker__box:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .picker__box:after {
            clear: both;
        }
        @media only screen and (min-width: 992px) {
            .picker__box:before {
                background-color: #3f51b5;
                border-radius: 4px 0 0 4px;
                content: "";
                display: block;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                width: 148px;
                z-index: -1;
            }
        }
        .picker__date-display {
            background-color: #3f51b5;
            border-radius: 4px 4px 0 0;
            color: white;
            padding: 10px 16px;
            text-align: left;
        }
        @media only screen and (min-width: 992px) {
            .picker__date-display {
                border-radius: 4px 0 0 0;
                float: left;
                width: 148px;
            }
        }
        .picker__date-display-bottom {
            font-size: 34px;
            line-height: 40px;
        }
        .picker__date-display-top {
            color: #7986cb;
            font-weight: 300;
            margin-bottom: 5px;
        }
        .picker__day {
            border-radius: 50%;
            display: inline-block;
            height: 30px;
            padding: 5px 0;
            width: 30px;
        }
        .picker__day:focus,
        .picker__day:hover {
            color: #ff4081;
            cursor: pointer;
        }
        .picker__day.picker__day--selected {
            background-color: #3f51b5;
            color: white !important;
        }
        .picker__day.picker__day--today {
            color: #3f51b5;
        }
        .picker__day-display {
            margin-right: 8px;
        }
        .picker__day--outfocus {
            color: #e0e0e0;
        }
        .picker__footer {
            clear: both;
            padding: 10px 8px;
        }
        .picker__footer button {
            margin-left: 8px;
        }
        .picker__footer button:first-child {
            margin-left: 0;
        }
        @media only screen and (min-width: 480px) {
            .picker__footer {
                text-align: right;
            }
        }
        .picker__frame {
            display: inline-block;
            margin: 40px auto;
            max-width: 226px;
            -webkit-transform: scale(0, 0);
            -ms-transform: scale(0, 0);
            transform: scale(0, 0);
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: -webkit-transform;
            transition-property: transform;
            vertical-align: middle;
            white-space: normal;
        }
        .picker--opened .picker__frame {
            -webkit-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1);
        }
        @media only screen and (min-width: 480px) {
            .picker__frame {
                max-width: 261px;
            }
        }
        @media only screen and (min-width: 992px) {
            .picker__frame {
                max-width: 444px;
            }
        }
        .picker__header {
            margin: 10px 8px 5px;
            position: relative;
        }
        @media only screen and (min-width: 992px) {
            .picker__header {
                float: left;
                margin-top: 5px;
                margin-right: 0;
                margin-left: 0;
                width: 296px;
            }
        }
        .picker__holder {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            overflow-x: hidden;
            overflow-y: auto;
            position: fixed;
            top: 100%;
            right: 0;
            bottom: 0;
            left: 0;
            text-align: center;
            -webkit-transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), top 0s linear 0.3s;
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), top 0s linear 0.3s;
            white-space: nowrap;
            width: 100%;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
        .picker__holder:after {
            content: "";
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            width: 1px;
        }
        .picker--opened .picker__holder {
            background-color: rgba(0, 0, 0, 0.5);
            top: 0;
            -webkit-transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), top 0s linear 0s;
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), top 0s linear 0s;
        }
        .picker__input {
            background-color: transparent !important;
            border-bottom-style: solid !important;
            color: rgba(0, 0, 0, 0.87) !important;
            cursor: text !important;
        }
        .picker__input.picker__input--active {
            border-color: #ff4081;
            border-bottom-width: 2px;
        }
        .picker__input.picker__input--active.form-control-default {
            border-bottom-width: 1px;
        }
        .picker__month,
        .picker__year {
            display: inline;
            margin-left: 16px;
        }
        .picker__month:first-child,
        .picker__year:first-child {
            margin-left: 0;
        }
        .picker__nav--next,
        .picker__nav--prev {
            cursor: pointer;
            line-height: 20px;
            margin-top: -10px;
            position: absolute;
            top: 50%;
            text-align: center;
            width: 30px;
        }
        .picker__nav--next:focus,
        .picker__nav--next:hover,
        .picker__nav--prev:focus,
        .picker__nav--prev:hover {
            color: #ff4081;
        }
        @media only screen and (min-width: 480px) {
            .picker__nav--next,
            .picker__nav--prev {
                width: 35px;
            }
        }
        @media only screen and (min-width: 992px) {
            .picker__nav--next,
            .picker__nav--prev {
                width: 40px;
            }
        }
        .picker__nav--next {
            right: 0;
        }
        .picker__nav--next:before {
            content: "keyboard_arrow_right";
        }
        @media only screen and (min-width: 992px) {
            .picker__nav--next {
                right: 8px;
            }
        }
        .picker__nav--prev {
            left: 0;
        }
        .picker__nav--prev:before {
            content: "keyboard_arrow_left";
        }
        @media only screen and (min-width: 992px) {
            .picker__nav--prev {
                left: 8px;
            }
        }
        .picker__select--month,
        .picker__select--year {
            border-bottom-color: transparent !important;
            display: inline-block;
            margin-left: 16px;
            width: auto;
        }
        .picker__select--month:first-child,
        .picker__select--year:first-child {
            margin-left: 0;
        }
        .picker__table {
            border-collapse: collapse;
            border-spacing: 0;
            margin: 0 8px;
            table-layout: fixed;
        }
        @media only screen and (min-width: 992px) {
            .picker__table {
                float: left;
                margin: 0;
            }
        }
        .picker__table td,
        .picker__table th {
            border: 0;
            font-size: 12px;
            line-height: 20px;
            margin: 0;
            padding: 0;
            text-align: center;
            vertical-align: middle;
            width: 30px;
        }
        @media only screen and (min-width: 480px) {
            .picker__table td,
            .picker__table th {
                width: 35px;
            }
        }
        @media only screen and (min-width: 992px) {
            .picker__table td,
            .picker__table th {
                width: 40px;
            }
            .picker__table td:first-child,
            .picker__table th:first-child {
                padding-left: 8px;
                width: 48px;
            }
            .picker__table td:last-child,
            .picker__table th:last-child {
                padding-right: 8px;
                width: 48px;
            }
        }
        .picker__weekday {
            color: rgba(0, 0, 0, 0.38);
            font-weight: 300;
        }
        .picker__weekday-display {
            margin-right: 8px;
        }
        .picker__weekday-display:after {
            content: ",";
        }
        @media only screen and (min-width: 992px) {
            .picker__weekday-display {
                display: block;
            }
        }
        .floating-label {
            color: rgba(0, 0, 0, 0.38);
            cursor: text;
            font-size: 14px;
            line-height: 1;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 11px;
            left: 0;
            -webkit-transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1), font-size 0.3s cubic-bezier(0.4, 0, 0.2, 1), top 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1), font-size 0.3s cubic-bezier(0.4, 0, 0.2, 1), top 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .form-group-label [class*="col-"] .floating-label {
            left: 16px;
        }
        .form-group-label.control-focus .floating-label,
        .form-group-label.control-highlight .floating-label {
            color: rgba(0, 0, 0, 0.54);
            font-size: 12px;
            top: -16px;
        }
        .form-group-label.control-focus .floating-label {
            color: #ff4081;
        }
        .form-group-label {
            margin-top: 36px;
            margin-bottom: 36px;
            position: relative;
        }
        .form-group-label .form-control,
        .form-group-label .picker__select--month,
        .form-group-label .picker__select--year {
            position: relative;
            z-index: 1;
        }
        .form-group-label .form-control:-ms-input-placeholder,
        .form-group-label .picker__select--month:-ms-input-placeholder,
        .form-group-label .picker__select--year:-ms-input-placeholder {
            color: transparent;
        }
        .form-group-label .form-control::-moz-placeholder,
        .form-group-label .picker__select--month::-moz-placeholder,
        .form-group-label .picker__select--year::-moz-placeholder {
            color: transparent;
            opacity: 1;
        }
        .form-group-label .form-control::-webkit-input-placeholder,
        .form-group-label .picker__select--month::-webkit-input-placeholder,
        .form-group-label .picker__select--year::-webkit-input-placeholder {
            color: transparent;
        }
        legend + .form-group-label {
            margin-top: 12px;
        }
        .form-group-label.form-group-brand .floating-label {
            color: #3f51b5;
        }
        .form-group-label.form-group-brand-accent .floating-label {
            color: #ff4081;
        }
        .form-group-label.form-group-amber .floating-label {
            color: #ffc107;
        }
        .form-group-label.form-group-green .floating-label {
            color: #4caf50;
        }
        .form-group-label.form-group-red .floating-label {
            color: #f44336;
        }
        .form-icon-label {
            cursor: pointer;
            display: block;
            font-size: 20px;
            line-height: 28px;
            padding: 4px 0;
            -webkit-transition: color 0.15s cubic-bezier(0.4, 0, 0.2, 1);
            transition: color 0.15s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .switch {
            position: relative;
        }
        .switch.checkbox label,
        .switch.radio label {
            padding-left: 40.5px;
        }
        .switch-toggle {
            background-color: rgba(0, 0, 0, 0.38);
            border-radius: 6px;
            cursor: pointer;
            display: inline-block;
            height: 12px;
            margin-right: 8px;
            position: relative;
            -webkit-transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            vertical-align: middle;
            width: 32.5px;
        }
        .switch-toggle:after {
            background-color: #ffffff;
            border-radius: 50%;
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.25);
            content: "";
            display: block;
            height: 20px;
            position: absolute;
            top: -4px;
            left: 0;
            -webkit-transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.09s cubic-bezier(0.4, 0, 0.2, 1), left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.09s cubic-bezier(0.4, 0, 0.2, 1), left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            width: 20px;
        }
        .switch-toggle:active:after {
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.25), 0 0 0 12.5px rgba(0, 0, 0, 0.1);
        }
        input[type="checkbox"]:checked + .switch-toggle,
        input[type="radio"]:checked + .switch-toggle {
            background-color: #ff80ab;
        }
        input[type="checkbox"]:checked + .switch-toggle:after,
        input[type="radio"]:checked + .switch-toggle:after {
            background-color: #ff4081;
            left: 12.5px;
        }
        input[type="checkbox"]:checked + .switch-toggle:active:after,
        input[type="radio"]:checked + .switch-toggle:active:after {
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.25), 0 0 0 12.5px rgba(255, 64, 129, 0.25);
        }
        .checkbox.switch .switch-toggle,
        .radio.switch .switch-toggle {
            position: absolute;
            top: 4px;
            left: 0;
        }
        input[type="checkbox"]:checked + .switch-toggle-brand,
        input[type="radio"]:checked + .switch-toggle-brand {
            background-color: #7986cb;
        }
        input[type="checkbox"]:checked + .switch-toggle-brand:after,
        input[type="radio"]:checked + .switch-toggle-brand:after {
            background-color: #3f51b5;
        }
        input[type="checkbox"]:checked + .switch-toggle-brand:active:after,
        input[type="radio"]:checked + .switch-toggle-brand:active:after {
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.25), 0 0 0 12.5px rgba(63, 81, 181, 0.25);
        }
        input[type="checkbox"]:checked + .switch-toggle-brand-accent,
        input[type="radio"]:checked + .switch-toggle-brand-accent {
            background-color: #ff80ab;
        }
        input[type="checkbox"]:checked + .switch-toggle-brand-accent:after,
        input[type="radio"]:checked + .switch-toggle-brand-accent:after {
            background-color: #ff4081;
        }
        input[type="checkbox"]:checked + .switch-toggle-brand-accent:active:after,
        input[type="radio"]:checked + .switch-toggle-brand-accent:active:after {
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.25), 0 0 0 12.5px rgba(255, 64, 129, 0.25);
        }
        input[type="checkbox"]:checked + .switch-toggle-amber,
        input[type="radio"]:checked + .switch-toggle-amber {
            background-color: #ffecb3;
        }
        input[type="checkbox"]:checked + .switch-toggle-amber:after,
        input[type="radio"]:checked + .switch-toggle-amber:after {
            background-color: #ffc107;
        }
        input[type="checkbox"]:checked + .switch-toggle-amber:active:after,
        input[type="radio"]:checked + .switch-toggle-amber:active:after {
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.25), 0 0 0 12.5px rgba(255, 193, 7, 0.25);
        }
        input[type="checkbox"]:checked + .switch-toggle-green,
        input[type="radio"]:checked + .switch-toggle-green {
            background-color: #81c784;
        }
        input[type="checkbox"]:checked + .switch-toggle-green:after,
        input[type="radio"]:checked + .switch-toggle-green:after {
            background-color: #4caf50;
        }
        input[type="checkbox"]:checked + .switch-toggle-green:active:after,
        input[type="radio"]:checked + .switch-toggle-green:active:after {
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.25), 0 0 0 12.5px rgba(76, 175, 80, 0.25);
        }
        input[type="checkbox"]:checked + .switch-toggle-red,
        input[type="radio"]:checked + .switch-toggle-red {
            background-color: #e57373;
        }
        input[type="checkbox"]:checked + .switch-toggle-red:after,
        input[type="radio"]:checked + .switch-toggle-red:after {
            background-color: #f44336;
        }
        input[type="checkbox"]:checked + .switch-toggle-red:active:after,
        input[type="radio"]:checked + .switch-toggle-red:active:after {
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.25), 0 0 0 12.5px rgba(244, 67, 54, 0.25);
        }
        .textarea-autosize {
            min-height: 36px;
            overflow-x: hidden;
        }
        .label {
            background-color: rgba(0, 0, 0, 0.54);
            border-radius: 2px;
            color: white;
            display: inline;
            font-size: 75%;
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            padding: 0.2em 0.6em;
            vertical-align: baseline;
            white-space: nowrap;
        }
        .label-brand {
            background-color: #3f51b5;
        }
        .label-brand-accent {
            background-color: #ff4081;
        }
        .label-amber {
            background-color: #ffc107;
        }
        .label-green {
            background-color: #4caf50;
        }
        .label-red {
            background-color: #f44336;
        }
        .modal {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            display: none;
            overflow: hidden;
            outline: 0;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 40;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
        }
        .modal-backdrop {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: #000000;
            opacity: 0;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            -webkit-transition: opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 39;
        }
        .modal-backdrop.fade.in {
            opacity: 0.5;
        }
        .menu ~ .modal-backdrop {
            z-index: 30;
        }
        .menu ~ .modal-backdrop.in {
            opacity: 0.5;
        }
        .modal-close {
            color: rgba(0, 0, 0, 0.54);
            cursor: pointer;
            display: block;
            float: right;
            font-size: 20px;
            line-height: 28px;
            margin-right: -8px;
            padding-right: 8px;
            padding-left: 8px;
        }
        .modal-close:focus,
        .modal-close:hover {
            color: #ff4081;
            text-decoration: none;
        }
        .modal-content {
            background-clip: padding-box;
            background-color: #ffffff;
            border: 1px solid transparent;
            border-radius: 4px;
            box-shadow: 0 1px 30px rgba(0, 0, 0, 0.5);
            outline: 0;
            position: relative;
        }
        .modal-dialog {
            margin: 48px 16px;
            position: relative;
        }
        .modal-dialog.modal-full {
            height: 100%;
            height: -webkit-calc(100% - 96px);
            height: calc(100% - 96px);
        }
        .modal-dialog.modal-full .modal-content {
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
        .modal.fade .modal-dialog {
            -webkit-transform: scale(0, 0);
            -ms-transform: scale(0, 0);
            transform: scale(0, 0);
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: -webkit-transform;
            transition-property: transform;
        }
        .modal.fade.in .modal-dialog {
            -webkit-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1);
        }
        @media only screen and (min-width: 480px) {
            .modal-dialog.modal-xs {
                margin-right: auto;
                margin-left: auto;
                width: 448px;
            }
        }
        @media only screen and (min-width: 992px) {
            .modal-dialog {
                margin-right: auto;
                margin-left: auto;
                width: 960px;
            }
        }
        @media only screen and (min-width: 1440px) {
            .modal-dialog {
                width: 1408px;
            }
        }
        .modal-footer {
            padding-right: 32px;
            padding-left: 32px;
        }
        .modal-footer .btn + .btn {
            margin-right: 16px;
        }
        .modal-footer .text-right .btn + .btn {
            margin-right: auto;
            margin-left: 16px;
        }
        .modal-heading {
            margin-top: 24px;
            margin-bottom: 24px;
            padding-right: 32px;
            padding-left: 32px;
            position: relative;
        }
        .modal-inner {
            margin-top: 24px;
            margin-bottom: 24px;
            padding-right: 32px;
            padding-left: 32px;
        }
        .modal-open {
            overflow: hidden;
        }
        .modal-title {
            font-size: 20px;
            line-height: 28px;
            margin-top: 0;
            margin-right: 28px;
            margin-bottom: 24px;
        }
        .nav {
            list-style: none;
            margin: 24px 0;
            padding: 0;
            position: relative;
        }
        .nav:after,
        .nav:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .nav:after {
            clear: both;
        }
        .nav a,
        .nav .a {
            display: block;
            padding: 14px 16px;
            position: relative;
        }
        .nav a:focus,
        .nav a:hover,
        .nav .a:focus,
        .nav .a:hover {
            text-decoration: none;
        }
        .nav li {
            display: block;
            position: relative;
        }
        .nav ul {
            margin: 0;
            padding: 0;
        }
        .nav-justified {
            width: 100%;
        }
        .nav-justified > li {
            display: table-cell !important;
            float: none !important;
            width: 1% !important;
        }
        .nav-justified > li > a {
            text-align: center;
        }
        .nav-list > li {
            float: left;
        }
        .progress {
            background-color: #ff80ab;
            height: 4px;
            margin-top: 24px;
            margin-bottom: 24px;
            overflow: hidden;
            position: relative;
        }
        .progress-bar {
            background-color: #ff4081;
            border-radius: 0 1px 1px 0;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .progress-brand {
            background-color: #7986cb;
        }
        .progress-brand .progress-bar {
            background-color: #3f51b5;
        }
        .progress-amber {
            background-color: #ffecb3;
        }
        .progress-amber .progress-bar {
            background-color: #ffc107;
        }
        .progress-green {
            background-color: #81c784;
        }
        .progress-green .progress-bar {
            background-color: #4caf50;
        }
        .progress-red {
            background-color: #e57373;
        }
        .progress-red .progress-bar {
            background-color: #f44336;
        }
        .progress-bar-indeterminate {
            background-color: #ff4081;
        }
        .progress-bar-indeterminate:after,
        .progress-bar-indeterminate:before {
            -webkit-animation-duration: 2.1s;
            animation-duration: 2.1s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            background-color: inherit;
            border-radius: 1px;
            content: '';
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            -webkit-transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            will-change: left, width;
        }
        .progress-bar-indeterminate:after {
            -webkit-animation-name: pbar-indeterminate-one;
            animation-name: pbar-indeterminate-one;
            left: 0;
        }
        .progress-bar-indeterminate:before {
            -webkit-animation-name: pbar-indeterminate-two;
            animation-name: pbar-indeterminate-two;
            right: 0;
        }
        @-webkit-keyframes pbar-indeterminate-one {
            0% {
                left: 0%;
                width: 0%;
            }
            50% {
                left: 25%;
                width: 75%;
            }
            75% {
                left: 100%;
                width: 0%;
            }
        }
        @keyframes pbar-indeterminate-one {
            0% {
                left: 0%;
                width: 0%;
            }
            50% {
                left: 25%;
                width: 75%;
            }
            75% {
                left: 100%;
                width: 0%;
            }
        }
        @-webkit-keyframes pbar-indeterminate-two {
            0%, 50% {
                left: 0%;
                width: 0%;
            }
            75% {
                left: 0%;
                width: 25%;
            }
            100% {
                left: 100%;
                width: 0%;
            }
        }
        @keyframes pbar-indeterminate-two {
            0%, 50% {
                left: 0%;
                width: 0%;
            }
            75% {
                left: 0%;
                width: 25%;
            }
            100% {
                left: 100%;
                width: 0%;
            }
        }
        .progress-position-absolute-bottom,
        .progress-position-absolute-top,
        .progress-position-fixed-bottom,
        .progress-position-fixed-top {
            margin: 0;
            left: 0;
            width: 100%;
        }
        .progress-position-absolute-bottom,
        .progress-position-absolute-top {
            position: absolute;
        }
        .progress-position-absolute-bottom,
        .progress-position-fixed-bottom {
            bottom: 0;
        }
        .progress-position-absolute-top,
        .progress-position-fixed-top {
            top: 0;
        }
        .progress-position-fixed-top,
        .progress-position-fixed-bottom {
            position: fixed;
        }
        .progress-circular {
            height: 40px;
            margin-top: 24px;
            margin-bottom: 24px;
            overflow: hidden;
            position: relative;
            width: 40px;
        }
        .progress-circular-center {
            margin-right: auto;
            margin-left: auto;
        }
        .progress-circular-gap {
            border-top: 2px solid #ff4081;
            position: absolute;
            top: 0;
            right: 19px;
            bottom: 0;
            left: 19px;
        }
        .progress-circular-brand .progress-circular-gap {
            border-top-color: #3f51b5;
        }
        .progress-circular-amber .progress-circular-gap {
            border-top-color: #ffc107;
        }
        .progress-circular-green .progress-circular-gap {
            border-top-color: #4caf50;
        }
        .progress-circular-red .progress-circular-gap {
            border-top-color: #f44336;
        }
        .progress-circular-inline {
            display: inline-block;
            margin-right: 16px;
            margin-left: 16px;
        }
        .progress-circular-inner {
            -webkit-animation: pcircular-inner-rotate 5.25s cubic-bezier(0.35, 0, 0.25, 1) infinite;
            animation: pcircular-inner-rotate 5.25s cubic-bezier(0.35, 0, 0.25, 1) infinite;
            height: 40px;
            position: relative;
            width: 40px;
            will-change: transform;
        }
        .progress-circular-left,
        .progress-circular-right {
            height: 40px;
            overflow: hidden;
            position: absolute;
            top: 0;
            width: 20px;
        }
        .progress-circular-left {
            left: 0;
        }
        .progress-circular-right {
            right: 0;
        }
        .progress-circular-spinner {
            border: 4px solid #ff4081;
            border-bottom-color: transparent;
            border-radius: 50%;
            height: 40px;
            position: absolute;
            top: 0;
            width: 40px;
            will-change: transform;
        }
        .progress-circular-left .progress-circular-spinner {
            -webkit-animation: pcircular-spinner-left 1.3125s cubic-bezier(0.35, 0, 0.25, 1) infinite;
            animation: pcircular-spinner-left 1.3125s cubic-bezier(0.35, 0, 0.25, 1) infinite;
            border-right-color: transparent;
            left: 0;
        }
        .progress-circular-right .progress-circular-spinner {
            -webkit-animation: pcircular-spinner-right 1.3125s cubic-bezier(0.35, 0, 0.25, 1) infinite;
            animation: pcircular-spinner-right 1.3125s cubic-bezier(0.35, 0, 0.25, 1) infinite;
            border-left-color: transparent;
            right: 0;
        }
        .progress-circular-brand .progress-circular-spinner {
            border-top-color: #3f51b5;
        }
        .progress-circular-brand .progress-circular-left .progress-circular-spinner {
            border-left-color: #3f51b5;
        }
        .progress-circular-brand .progress-circular-right .progress-circular-spinner {
            border-right-color: #3f51b5;
        }
        .progress-circular-brand-accent .progress-circular-spinner {
            border-top-color: #ff4081;
        }
        .progress-circular-brand-accent .progress-circular-left .progress-circular-spinner {
            border-left-color: #ff4081;
        }
        .progress-circular-brand-accent .progress-circular-right .progress-circular-spinner {
            border-right-color: #ff4081;
        }
        .progress-circular-amber .progress-circular-spinner {
            border-top-color: #ffc107;
        }
        .progress-circular-amber .progress-circular-left .progress-circular-spinner {
            border-left-color: #ffc107;
        }
        .progress-circular-amber .progress-circular-right .progress-circular-spinner {
            border-right-color: #ffc107;
        }
        .progress-circular-green .progress-circular-spinner {
            border-top-color: #4caf50;
        }
        .progress-circular-green .progress-circular-left .progress-circular-spinner {
            border-left-color: #4caf50;
        }
        .progress-circular-green .progress-circular-right .progress-circular-spinner {
            border-right-color: #4caf50;
        }
        .progress-circular-red .progress-circular-spinner {
            border-top-color: #f44336;
        }
        .progress-circular-red .progress-circular-left .progress-circular-spinner {
            border-left-color: #f44336;
        }
        .progress-circular-red .progress-circular-right .progress-circular-spinner {
            border-right-color: #f44336;
        }
        .progress-circular-wrapper {
            -webkit-animation: pcircular-wrapper-rotate 2.91667s linear infinite;
            animation: pcircular-wrapper-rotate 2.91667s linear infinite;
            will-change: transform;
        }
        @-webkit-keyframes pcircular-inner-rotate {
            12.5% {
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg);
            }
            25% {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
            }
            37.5% {
                -webkit-transform: rotate(405deg);
                transform: rotate(405deg);
            }
            50% {
                -webkit-transform: rotate(540deg);
                transform: rotate(540deg);
            }
            62.5% {
                -webkit-transform: rotate(675deg);
                transform: rotate(675deg);
            }
            75% {
                -webkit-transform: rotate(810deg);
                transform: rotate(810deg);
            }
            87.5% {
                -webkit-transform: rotate(945deg);
                transform: rotate(945deg);
            }
            100% {
                -webkit-transform: rotate(1080deg);
                transform: rotate(1080deg);
            }
        }
        @keyframes pcircular-inner-rotate {
            12.5% {
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg);
            }
            25% {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
            }
            37.5% {
                -webkit-transform: rotate(405deg);
                transform: rotate(405deg);
            }
            50% {
                -webkit-transform: rotate(540deg);
                transform: rotate(540deg);
            }
            62.5% {
                -webkit-transform: rotate(675deg);
                transform: rotate(675deg);
            }
            75% {
                -webkit-transform: rotate(810deg);
                transform: rotate(810deg);
            }
            87.5% {
                -webkit-transform: rotate(945deg);
                transform: rotate(945deg);
            }
            100% {
                -webkit-transform: rotate(1080deg);
                transform: rotate(1080deg);
            }
        }
        @-webkit-keyframes pcircular-spinner-left {
            0%, 100% {
                -webkit-transform: rotate(130deg);
                transform: rotate(130deg);
            }
            50% {
                -webkit-transform: rotate(-5deg);
                transform: rotate(-5deg);
            }
        }
        @keyframes pcircular-spinner-left {
            0%, 100% {
                -webkit-transform: rotate(130deg);
                transform: rotate(130deg);
            }
            50% {
                -webkit-transform: rotate(-5deg);
                transform: rotate(-5deg);
            }
        }
        @-webkit-keyframes pcircular-spinner-right {
            0%, 100% {
                -webkit-transform: rotate(-130deg);
                transform: rotate(-130deg);
            }
            50% {
                -webkit-transform: rotate(5deg);
                transform: rotate(5deg);
            }
        }
        @keyframes pcircular-spinner-right {
            0%, 100% {
                -webkit-transform: rotate(-130deg);
                transform: rotate(-130deg);
            }
            50% {
                -webkit-transform: rotate(5deg);
                transform: rotate(5deg);
            }
        }
        @-webkit-keyframes pcircular-wrapper-rotate {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes pcircular-wrapper-rotate {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        .load-bar {
            float: right;
            height: 100%;
            overflow: hidden;
            width: 50%;
        }
        .load-bar:first-child {
            float: left;
        }
        .load-bar-base {
            -webkit-animation: load-bar-right-in 0.9s cubic-bezier(0.4, 0, 0.2, 1) 1 forwards;
            animation: load-bar-right-in 0.9s cubic-bezier(0.4, 0, 0.2, 1) 1 forwards;
            background-color: #ff4081;
            float: left;
            height: 100%;
            overflow: hidden;
            -webkit-transform: translate(-100%, 0);
            -ms-transform: translate(-100%, 0);
            transform: translate(-100%, 0);
            -webkit-transform-origin: top right;
            -ms-transform-origin: top right;
            transform-origin: top right;
            width: 100%;
            will-change: transform;
        }
        .load-bar:first-child .load-bar-base {
            -webkit-animation: load-bar-left-in 0.9s cubic-bezier(0.4, 0, 0.2, 1) 1 forwards;
            animation: load-bar-left-in 0.9s cubic-bezier(0.4, 0, 0.2, 1) 1 forwards;
            -webkit-transform: translate(100%, 0);
            -ms-transform: translate(100%, 0);
            transform: translate(100%, 0);
            -webkit-transform-origin: top left;
            -ms-transform-origin: top left;
            transform-origin: top left;
        }
        @-webkit-keyframes load-bar-left-in {
            0% {
                -webkit-transform: translate(100%, 0);
                transform: translate(100%, 0);
            }
            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }
        @keyframes load-bar-left-in {
            0% {
                -webkit-transform: translate(100%, 0);
                transform: translate(100%, 0);
            }
            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }
        @-webkit-keyframes load-bar-right-in {
            0% {
                -webkit-transform: translate(-100%, 0);
                transform: translate(-100%, 0);
            }
            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }
        @keyframes load-bar-right-in {
            0% {
                -webkit-transform: translate(-100%, 0);
                transform: translate(-100%, 0);
            }
            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }
        .load-bar-content {
            -webkit-animation: load-bar-right 3.6s linear infinite forwards;
            animation: load-bar-right 3.6s linear infinite forwards;
            -webkit-animation-delay: 0.9s;
            animation-delay: 0.9s;
            float: left;
            height: 100%;
            position: relative;
            -webkit-transform-origin: top center;
            -ms-transform-origin: top center;
            transform-origin: top center;
            width: 400%;
            will-change: transform;
        }
        .load-bar:first-child .load-bar-content {
            -webkit-animation: load-bar-left 3.6s linear infinite forwards;
            animation: load-bar-left 3.6s linear infinite forwards;
            -webkit-animation-delay: 0.9s;
            animation-delay: 0.9s;
        }
        @-webkit-keyframes load-bar-left {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
            100% {
                -webkit-transform: translate(-100%, 0);
                transform: translate(-100%, 0);
            }
        }
        @keyframes load-bar-left {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
            100% {
                -webkit-transform: translate(-100%, 0);
                transform: translate(-100%, 0);
            }
        }
        @-webkit-keyframes load-bar-right {
            0% {
                -webkit-transform: translate(-100%, 0);
                transform: translate(-100%, 0);
            }
            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }
        @keyframes load-bar-right {
            0% {
                -webkit-transform: translate(-100%, 0);
                transform: translate(-100%, 0);
            }
            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }
        .load-bar-progress {
            background-color: transparent;
            float: left;
            height: 100%;
            width: 25%;
        }
        .load-bar-progress-brand {
            background-color: #3f51b5;
        }
        .load-bar-progress-amber {
            background-color: #ffc107;
        }
        .load-bar-progress-green {
            background-color: #4caf50;
        }
        .load-bar-progress-red {
            background-color: #f44336;
        }
        .tab-nav {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.12);
            margin-top: 24px;
            margin-bottom: 24px;
            position: relative;
        }
        .tab-nav .nav {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }
        .tab-nav .nav > li {
            vertical-align: bottom;
        }
        .tab-nav .nav > li > a,
        .tab-nav .nav > li > .a {
            border-bottom: 2px solid transparent;
            color: rgba(0, 0, 0, 0.87);
            padding-bottom: 12px;
            text-transform: uppercase;
            -webkit-transition: border-bottom-color 0s;
            transition: border-bottom-color 0s;
        }
        .tab-nav .nav > li > a:focus,
        .tab-nav .nav > li > a:hover,
        .tab-nav .nav > li > .a:focus,
        .tab-nav .nav > li > .a:hover {
            border-bottom-color: #ffd9e6;
            color: #ff4081;
            -webkit-transition: border-bottom-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: border-bottom-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .tab-nav .nav > li.active > a,
        .tab-nav .nav > li.active > .a {
            border-bottom-color: #ff4081;
            color: #ff4081;
            -webkit-transition: border-bottom-color 0s 0.45s;
            transition: border-bottom-color 0s 0.45s;
        }
        .tab-nav-indicator {
            background-color: transparent;
            height: 2px;
            position: absolute;
            bottom: 0;
        }
        .tab-nav-indicator.animate {
            background-color: #ff4081;
            -webkit-transition: left 0.225s cubic-bezier(0.4, 0, 0.2, 1) 0.225s, right 0.45s cubic-bezier(0.4, 0, 0.2, 1);
            transition: left 0.225s cubic-bezier(0.4, 0, 0.2, 1) 0.225s, right 0.45s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .tab-nav-indicator.animate.reverse {
            -webkit-transition: left 0.45s cubic-bezier(0.4, 0, 0.2, 1), right 0.225s cubic-bezier(0.4, 0, 0.2, 1) 0.225s;
            transition: left 0.45s cubic-bezier(0.4, 0, 0.2, 1), right 0.225s cubic-bezier(0.4, 0, 0.2, 1) 0.225s;
        }
        .tab-nav-white .nav > li > a,
        .tab-nav-white .nav > li > .a {
            color: white;
        }
        .tab-nav-white .nav > li > a:focus,
        .tab-nav-white .nav > li > a:hover,
        .tab-nav-white .nav > li > .a:focus,
        .tab-nav-white .nav > li > .a:hover {
            border-bottom-color: rgba(255, 255, 255, 0.5);
            color: white;
        }
        .tab-nav-white .nav > li.active > a,
        .tab-nav-white .nav > li.active > .a {
            border-bottom-color: #ffffff;
            color: white;
        }
        .tab-nav-white .tab-nav-indicator.animate {
            background-color: #ffffff;
        }
        .tab-nav-brand .nav > li > a:focus,
        .tab-nav-brand .nav > li > a:hover,
        .tab-nav-brand .nav > li > .a:focus,
        .tab-nav-brand .nav > li > .a:hover {
            border-bottom-color: #7986cb;
            color: #3f51b5;
        }
        .tab-nav-brand .nav > li.active > a,
        .tab-nav-brand .nav > li.active > .a {
            border-bottom-color: #3f51b5;
            color: #3f51b5;
        }
        .tab-nav-brand .tab-nav-indicator.animate {
            background-color: #3f51b5;
        }
        .tab-nav-amber .nav > li > a:focus,
        .tab-nav-amber .nav > li > a:hover,
        .tab-nav-amber .nav > li > .a:focus,
        .tab-nav-amber .nav > li > .a:hover {
            border-bottom-color: #ffecb3;
            color: #ffc107;
        }
        .tab-nav-amber .nav > li.active > a,
        .tab-nav-amber .nav > li.active > .a {
            border-bottom-color: #ffc107;
            color: #ffc107;
        }
        .tab-nav-amber .tab-nav-indicator.animate {
            background-color: #ffc107;
        }
        .tab-nav-green .nav > li > a:focus,
        .tab-nav-green .nav > li > a:hover,
        .tab-nav-green .nav > li > .a:focus,
        .tab-nav-green .nav > li > .a:hover {
            border-bottom-color: #81c784;
            color: #4caf50;
        }
        .tab-nav-green .nav > li.active > a,
        .tab-nav-green .nav > li.active > .a {
            border-bottom-color: #4caf50;
            color: #4caf50;
        }
        .tab-nav-green .tab-nav-indicator.animate {
            background-color: #4caf50;
        }
        .tab-nav-red .nav > li > a:focus,
        .tab-nav-red .nav > li > a:hover,
        .tab-nav-red .nav > li > .a:focus,
        .tab-nav-red .nav > li > .a:hover {
            border-bottom-color: #e57373;
            color: #f44336;
        }
        .tab-nav-red .nav > li.active > a,
        .tab-nav-red .nav > li.active > .a {
            border-bottom-color: #f44336;
            color: #f44336;
        }
        .tab-nav-red .tab-nav-indicator.animate {
            background-color: #f44336;
        }
        .tab-pane {
            display: none;
            visibility: hidden;
        }
        .tab-pane.active {
            display: block;
            visibility: visible;
        }
        .table {
            background-color: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.12);
            margin-top: 24px;
            margin-bottom: 24px;
            width: 100%;
        }
        .card-table > .table {
            border: 0;
            margin-right: -16px;
            margin-left: -16px;
        }
        .card-table > .table:first-child {
            margin-top: 0;
        }
        .card-table > .table:last-child {
            margin-bottom: 0;
        }
        .table > tbody > tr:hover {
            background-color: #e0e0e0;
        }
        .card-table > .table > tbody:first-child > tr:first-child td,
        .card-table > .table > tbody:first-child > tr:first-child th,
        .card-table > .table-responsive > .table > tbody:first-child > tr:first-child td,
        .card-table > .table-responsive > .table > tbody:first-child > tr:first-child th {
            border-top: 0;
        }
        .table td,
        .table th {
            border-top: 1px solid rgba(0, 0, 0, 0.12);
            font-size: 14px;
            line-height: 20px;
            padding: 13px 16px 14px;
            vertical-align: top;
        }
        .table td.nowrap,
        .table th.nowrap {
            white-space: nowrap;
            width: 1%;
        }
        .table > thead td,
        .table > thead th {
            color: rgba(0, 0, 0, 0.38);
            font-size: 12px;
            vertical-align: bottom;
        }
        .card-table > .table > thead:first-child > tr:first-child td,
        .card-table > .table > thead:first-child > tr:first-child th,
        .card-table > .table-responsive > .table > thead:first-child > tr:first-child td,
        .card-table > .table-responsive > .table > thead:first-child > tr:first-child th {
            border-top: 0;
        }
        .table-responsive {
            margin-top: 24px;
            margin-bottom: 24px;
            min-height: 0.01%;
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
        .card-table > .table-responsive {
            margin-right: -16px;
            margin-left: -16px;
        }
        .card-table > .table-responsive:first-child {
            margin-top: 0;
        }
        .card-table > .table-responsive:last-child {
            margin-bottom: 0;
        }
        .card-table > .table-responsive > .table {
            border: 0;
        }
        .table-responsive > .table {
            margin: 0;
        }
        .tile {
            background-color: #ffffff;
            box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.06), 0 0 3px rgba(0, 0, 0, 0.18), 0 1px 3px rgba(0, 0, 0, 0.18);
            display: block;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            min-height: 48px;
            position: relative;
        }
        .tile[href] {
            color: rgba(0, 0, 0, 0.87);
        }
        .tile[href]:focus,
        .tile[href]:hover {
            color: #ff4081;
            text-decoration: none;
        }
        .tile.active {
            margin-top: 24px !important;
            margin-bottom: 24px !important;
        }
        .no-boxshadow .tile {
            border: 1px solid rgba(0, 0, 0, 0.12);
        }
        .no-boxshadow .tile + .tile {
            margin-top: -1px;
        }
        .no-flexbox .tile:after,
        .no-flexbox .tile:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .no-flexbox .tile:after {
            clear: both;
        }
        .tile-brand {
            background-color: #3f51b5;
            color: white;
        }
        .tile-brand a,
        .tile-brand a:focus,
        .tile-brand a:hover {
            color: inherit;
        }
        .tile-brand-accent {
            background-color: #ff4081;
            color: white;
        }
        .tile-brand-accent a,
        .tile-brand-accent a:focus,
        .tile-brand-accent a:hover {
            color: inherit;
        }
        .tile-amber {
            background-color: #ffc107;
            color: rgba(0, 0, 0, 0.87);
        }
        .tile-amber a,
        .tile-amber a:focus,
        .tile-amber a:hover {
            color: inherit;
        }
        .tile-green {
            background-color: #4caf50;
            color: rgba(0, 0, 0, 0.87);
        }
        .tile-green a,
        .tile-green a:focus,
        .tile-green a:hover {
            color: inherit;
        }
        .tile-red {
            background-color: #f44336;
            color: white;
        }
        .tile-red a,
        .tile-red a:focus,
        .tile-red a:hover {
            color: inherit;
        }
        .tile-action {
            border-top: 0;
            float: right;
            min-width: 0;
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .no-touch .tile-action,
        .touch .tile-collapse .tile-action {
            display: none;
        }
        .no-touch .tile:hover .tile-action,
        .tile-collapse.active .tile-action {
            display: block;
        }
        .tile-action-show {
            display: block !important;
        }
        .tile-active-show {
            min-height: 0;
            -webkit-transition: height 0.15s linear;
            transition: height 0.15s linear;
        }
        .tile-collapse {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-transition: margin 0.15s linear;
            transition: margin 0.15s linear;
        }
        .tile-collapse.active {
            margin-right: -15px;
            margin-left: -15px;
        }
        @media only screen and (min-width: 1056px) and (max-width: 1439px) {
            .tile-collapse-full.active {
                margin-right: -63px;
                margin-left: -63px;
            }
        }
        @media only screen and (min-width: 1504px) {
            .tile-collapse-full.active {
                margin-right: -63px;
                margin-left: -63px;
            }
        }
        .tile-footer {
            background-color: #f5f5f5;
            border-top: 1px solid rgba(0, 0, 0, 0.12);
            position: relative;
        }
        .tile-footer:after,
        .tile-footer:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .tile-footer:after {
            clear: both;
        }
        .tile-footer:first-child {
            border-top: 0;
        }
        .tile-brand .tile-footer {
            background-color: #303f9f;
            border-top-color: #303f9f;
            color: white;
        }
        .tile-brand-accent .tile-footer {
            background-color: #f50057;
            border-top-color: #f50057;
            color: white;
        }
        .tile-amber .tile-footer {
            background-color: #ffa000;
            border-top-color: #ffa000;
            color: rgba(0, 0, 0, 0.87);
        }
        .tile-green .tile-footer {
            background-color: #388e3c;
            border-top-color: #388e3c;
            color: white;
        }
        .tile-red .tile-footer {
            background-color: #d32f2f;
            border-top-color: #d32f2f;
            color: white;
        }
        .tile-inner {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            margin: 14px 16px;
            min-width: 0;
            position: relative;
        }
        .no-flexbox .tile-action ~ .tile-inner,
        .no-flexbox .tile-side ~ .tile-inner {
            overflow: hidden;
        }
        .tile-side {
            padding-top: 14px;
            padding-bottom: 14px;
        }
        .tile-sub {
            border-top: 1px solid rgba(0, 0, 0, 0.12);
            padding-right: 16px;
            padding-left: 16px;
            position: relative;
        }
        .tile-sub:after,
        .tile-sub:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .tile-sub:after {
            clear: both;
        }
        .tile-brand .tile-sub {
            border-top-color: #303f9f;
        }
        .tile-brand-accent .tile-sub {
            border-top-color: #f50057;
        }
        .tile-amber .tile-sub {
            border-top-color: #ffa000;
        }
        .tile-green .tile-sub {
            border-top-color: #388e3c;
        }
        .tile-red .tile-sub {
            border-top-color: #d32f2f;
        }
        .tile-wrap {
            margin-top: 24px;
            margin-bottom: 24px;
            position: relative;
        }
        div[data-toggle="tile"] {
            cursor: pointer;
            display: block;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            min-height: 0;
        }
        div[data-toggle="tile"] [data-ignore="tile"] {
            cursor: default;
            cursor: initial;
        }
        .no-flexbox div[data-toggle="tile"]:after,
        .no-flexbox div[data-toggle="tile"]:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .no-flexbox div[data-toggle="tile"]:after {
            clear: both;
        }
        .toast {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 21;
        }
        .toast a {
            cursor: pointer;
        }
        .toast a:focus,
        .toast a:hover {
            text-decoration: none;
        }
        @media only screen and (min-width: 768px) {
            .toast {
                padding-right: 16px;
                padding-left: 16px;
                bottom: 24px;
            }
            .fbtn-container ~ .toast {
                right: 72px;
            }
        }
        .toast-inner {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: rgba(0, 0, 0, 0.87);
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.5);
            color: white;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            max-width: 100%;
            padding: 12px 16px;
            -webkit-transform: translate(0, 200%);
            -ms-transform: translate(0, 200%);
            transform: translate(0, 200%);
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: -webkit-transform;
            transition-property: transform;
        }
        .toast-inner:after,
        .toast-inner:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .toast-inner:after {
            clear: both;
        }
        .toast-inner.in {
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0);
        }
        @media only screen and (min-width: 768px) {
            .toast-inner {
                border-radius: 2px;
                float: left;
            }
        }
        .no-csstransforms .toast-inner {
            opacity: 0;
        }
        .no-csstransforms .toast-inner.in {
            opacity: 1;
        }
        .toast-text {
            overflow: hidden;
        }
        [data-dismiss="toast"] {
            cursor: pointer;
            float: right;
            font-weight: 500;
            margin-left: 16px;
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
            text-transform: uppercase;
            white-space: nowrap;
        }
        .content-heading {
            background-color: #f5f5f5;
            color: rgba(0, 0, 0, 0.87);
            overflow: hidden;
            padding-top: 12px;
            padding-bottom: 12px;
            position: relative;
            -webkit-transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1;
        }
        .content-heading .heading {
            font-weight: 300;
        }
        .page-brand .content-heading {
            background-color: #3f51b5;
            color: white;
        }
        .page-brand-accent .content-heading {
            background-color: #ff4081;
            color: white;
        }
        .page-amber .content-heading {
            background-color: #ffc107;
            color: rgba(0, 0, 0, 0.87);
        }
        .page-green .content-heading {
            background-color: #4caf50;
            color: rgba(0, 0, 0, 0.87);
        }
        .page-red .content-heading {
            background-color: #f44336;
            color: white;
        }
        .content-inner {
            margin-top: 48px;
            margin-bottom: 48px;
        }
        .content-sub-heading {
            font-size: 20px;
            font-weight: 500;
            line-height: 28px;
        }
        .page-brand .content-sub-heading {
            color: #3f51b5;
        }
        .page-brand-accent .content-sub-heading {
            color: #ff4081;
        }
        .page-amber .content-sub-heading {
            color: #ffc107;
        }
        .page-green .content-sub-heading {
            color: #4caf50;
        }
        .page-red .content-sub-heading {
            color: #f44336;
        }
        .footer {
            border-top: 1px solid rgba(0, 0, 0, 0.12);
            text-align: center;
            padding-top: 12px;
            padding-bottom: 12px;
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
        }
        .header {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: #ffffff;
            color: #212121;
            min-height: 56px;
            padding-top: 4px;
            padding-bottom: 4px;
            -webkit-transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.15s linear;
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.15s linear;
            z-index: 30;
        }
        .header:after,
        .header:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .header:after {
            clear: both;
        }
        .header.affix {
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.5);
            -webkit-transition: background-color 0.6s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.6s linear;
            transition: background-color 0.6s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.6s linear;
        }
        .header a {
            color: inherit;
        }
        .header .dropdown-menu {
            border-radius: 2px;
        }
        .header .dropdown-menu a {
            color: rgba(0, 0, 0, 0.87);
        }
        .header .dropdown-toggle {
            z-index: 1;
        }
        .header .dropdown-toggle:after {
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            content: "";
            display: block;
            height: 40px;
            margin-left: -20px;
            position: absolute;
            top: 4px;
            left: 50%;
            -webkit-transform: scale(0, 0);
            -ms-transform: scale(0, 0);
            transform: scale(0, 0);
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: background-color, -webkit-transform;
            transition-property: background-color, transform;
            width: 40px;
            z-index: -1;
        }
        .no-csstransforms .header .dropdown-toggle:after {
            display: none;
        }
        .header .dropdown.open .dropdown-toggle {
            background-color: transparent;
        }
        .header .dropdown.open .dropdown-toggle:after {
            -webkit-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1);
        }
        .no-csstransforms .header .dropdown.open .dropdown-toggle:after {
            display: block;
        }
        .header .nav {
            margin: 0;
        }
        .header .tab-nav {
            box-shadow: none;
            margin-top: -4px;
            margin-bottom: -4px;
        }
        .header .tab-nav .nav > li > a,
        .header .tab-nav .nav > li > .a {
            padding-top: 18px;
            padding-bottom: 16px;
        }
        .header-brand {
            background-color: #3f51b5;
            color: white;
        }
        .header-brand-accent {
            background-color: #ff4081;
            color: white;
        }
        .header-amber {
            background-color: #ffc107;
            color: rgba(0, 0, 0, 0.87);
        }
        .header-green {
            background-color: #4caf50;
            color: rgba(0, 0, 0, 0.87);
        }
        .header-red {
            background-color: #f44336;
            color: white;
        }
        .header-affix {
            max-height: 48px;
            overflow: hidden;
            position: static !important;
            width: 0;
        }
        .header-affix.affix {
            overflow: visible;
            width: auto;
        }
        .header-affix-hide {
            position: static !important;
        }
        .header-affix-hide.affix {
            max-height: 48px;
            overflow: hidden;
            width: 0;
        }
        .header-logo,
        .menu-logo,
        .header-text {
            display: block;
            float: left;
            font-weight: 300;
            height: 48px;
            line-height: 28px;
            margin: 0 16px;
            padding: 10px 0;
        }
        .header-logo:focus,
        .menu-logo:focus,
        .header-logo:hover,
        .menu-logo:hover,
        .header-text:focus,
        .header-text:hover {
            text-decoration: none;
        }
        .header-logo,
        .menu-logo {
            font-size: 20px;
        }
        .header-logo img,
        .menu-logo img {
            display: block;
            max-height: 28px;
            width: auto;
        }
        .header-seamed,
        .header-standard,
        .header-waterfall {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
        }
        .header-standard {
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.5);
        }
        .header-transparent {
            background-color: transparent;
        }
        .header-transparent.affix {
            background-color: #ffffff;
        }
        .page-brand .header-transparent {
            color: white;
        }
        .page-brand .header-transparent.affix {
            background-color: #3f51b5;
        }
        .page-brand-accent .header-transparent {
            color: white;
        }
        .page-brand-accent .header-transparent.affix {
            background-color: #ff4081;
        }
        .page-amber .header-transparent {
            color: rgba(0, 0, 0, 0.87);
        }
        .page-amber .header-transparent.affix {
            background-color: #ffc107;
        }
        .page-green .header-transparent {
            color: rgba(0, 0, 0, 0.87);
        }
        .page-green .header-transparent.affix {
            background-color: #4caf50;
        }
        .page-red .header-transparent {
            color: white;
        }
        .page-red .header-transparent.affix {
            background-color: #f44336;
        }
        .menu {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            display: none;
            overflow: hidden;
            outline: 0;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 31;
        }
        .menu-collapse-toggle {
            background-color: transparent !important;
            cursor: pointer;
            display: block;
            float: right;
            padding: 14px 16px;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
        }
        .menu-collapse-toggle:hover {
            color: #ff4081 !important;
        }
        .menu-collapse-toggle-close {
            margin-top: -7px;
            margin-left: -7px;
            opacity: 1;
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, transform;
            width: 14px;
        }
        .menu-collapse-toggle.collapsed .menu-collapse-toggle-close {
            opacity: 0;
            -webkit-transform: rotate(-225deg);
            -ms-transform: rotate(-225deg);
            transform: rotate(-225deg);
        }
        .menu-collapse-toggle-default {
            opacity: 0;
            -webkit-transform: rotate(225deg);
            -ms-transform: rotate(225deg);
            transform: rotate(225deg);
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, transform;
        }
        .menu-collapse-toggle.collapsed .menu-collapse-toggle-default {
            opacity: 1;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
        }
        .menu-content {
            padding-top: 8px;
            padding-bottom: 8px;
        }
        .menu-content hr {
            border-top-color: rgba(0, 0, 0, 0.12);
            margin-top: 8px;
            margin-bottom: 8px;
        }
        .menu-content .nav {
            margin-top: 0;
            margin-bottom: 0;
        }
        .menu-content .nav a,
        .menu-content .nav .a {
            color: rgba(0, 0, 0, 0.54);
            font-weight: 500;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .menu-content .nav a:focus,
        .menu-content .nav a:hover,
        .menu-content .nav .a:focus,
        .menu-content .nav .a:hover {
            background-color: #f5f5f5;
        }
        .menu-content .nav a .fa,
        .menu-content .nav a .icon,
        .menu-content .nav a .breadcrumb > li + li:before,
        .menu-content .nav .a .fa,
        .menu-content .nav .a .icon,
        .menu-content .nav .a .breadcrumb > li + li:before {
            margin-right: 16px;
        }
        .menu-content .nav li.active > a,
        .menu-content .nav li.active > .a {
            color: #3f51b5;
        }
        .menu-content .nav ul a,
        .menu-content .nav ul .a {
            font-weight: 400;
            padding-left: 32px;
        }
        .menu-content .nav ul ul a,
        .menu-content .nav ul ul .a {
            font-size: 12px;
            font-weight: 300;
            padding-top: 7px;
            padding-bottom: 7px;
            padding-left: 48px;
        }
        .no-boxshadow .menu-content .nav {
            margin-right: 1px;
        }
        .no-boxshadow .menu.menu-right .menu-content .nav {
            margin-right: 0;
            margin-left: 1px;
        }
        .page-brand .menu-content .nav li.active > a,
        .page-brand .menu-content .nav li.active > .a {
            color: #3f51b5;
        }
        .page-brand-accent .menu-content .nav li.active > a,
        .page-brand-accent .menu-content .nav li.active > .a {
            color: #ff4081;
        }
        .page-amber .menu-content .nav li.active > a,
        .page-amber .menu-content .nav li.active > .a {
            color: #ffc107;
        }
        .page-green .menu-content .nav li.active > a,
        .page-green .menu-content .nav li.active > .a {
            color: #4caf50;
        }
        .page-red .menu-content .nav li.active > a,
        .page-red .menu-content .nav li.active > .a {
            color: #f44336;
        }
        .menu-content-inner {
            padding-right: 16px;
            padding-left: 16px;
        }
        .menu-backdrop {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: #000000;
            opacity: 0;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            -webkit-transition: opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 30;
        }
        .menu-backdrop.in {
            opacity: 0.5;
        }
        .menu-logo {
            border-bottom: 1px solid rgba(0, 0, 0, 0.12);
            color: rgba(0, 0, 0, 0.87);
            float: none;
            height: 56px;
            margin-right: 0;
            margin-bottom: 8px;
            margin-left: 0;
            padding: 14px 16px 13px;
        }
        .menu-logo:focus,
        .menu-logo:hover {
            color: rgba(0, 0, 0, 0.87);
        }
        .menu-content > .menu-logo:first-child {
            margin-top: -8px;
        }
        .menu-scroll {
            background-color: #ffffff;
            height: 100%;
            max-width: 85%;
            max-width: -webkit-calc(100% - 64px);
            max-width: calc(100% - 64px);
            overflow-x: hidden;
            overflow-y: auto;
            position: fixed;
            top: 0;
            left: -320px;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: box-shadow, left;
            transition-property: box-shadow, left;
            -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            width: 320px;
            z-index: 1;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: none;
        }
        .menu.in .menu-scroll {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            left: 0;
        }
        .menu-right .menu-scroll {
            right: -320px;
            left: auto;
            -webkit-transition-property: box-shadow, right;
            transition-property: box-shadow, right;
        }
        .menu-right.in .menu-scroll {
            right: 0;
            left: auto;
        }
        @media only screen and (min-width: 992px) {
            .menu-scroll {
                max-width: none;
            }
        }
        .no-boxshadow .menu-scroll:after {
            background-color: rgba(0, 0, 0, 0.12);
            content: "";
            display: block;
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            width: 1px;
        }
        .no-boxshadow .menu.menu-right .menu-scroll:after {
            right: auto;
            left: 0;
        }
        .menu-top {
            background-color: rgba(0, 0, 0, 0.87);
            color: #ffffff;
            position: relative;
            z-index: 1;
        }
        .menu-top a,
        .menu-top a:focus,
        .menu-top a:hover {
            color: #ffffff;
            text-decoration: none;
        }
        .menu-top-img {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }
        .menu-top-img img {
            min-height: 100%;
            width: 100%;
            opacity: 0.5;
        }
        .menu-top-info {
            padding: 12px 16px;
            position: relative;
        }
        @media only screen and (min-width: 768px) {
            .menu-top-info {
                padding-top: 24px;
                padding-bottom: 24px;
            }
        }
        .menu-top-info-sub {
            font-weight: 300;
            padding: 12px 16px;
            position: relative;
        }
        @media only screen and (min-width: 768px) {
            .menu-top-info-sub {
                padding-top: 24px;
            }
        }
        .menu-top-user {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
        .no-flexbox .menu-top-user:after,
        .no-flexbox .menu-top-user:before {
            content: "";
            display: table;
            line-height: 0;
        }
        .no-flexbox .menu-top-user:after {
            clear: both;
        }
        @media only screen and (min-width: 992px) {
            .nav-drawer.nav-drawer-md {
                background-color: transparent;
                display: block !important;
                overflow: visible;
                width: 240px;
                z-index: 30;
            }
            .nav-drawer.nav-drawer-md .menu-scroll {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                left: 0;
                width: 240px;
            }
            .nav-drawer.nav-drawer-md.menu-left ~ .content {
                margin-left: 240px;
            }
            .nav-drawer.nav-drawer-md.menu-left ~ .content .content-heading,
            .nav-drawer.nav-drawer-md.menu-left ~ .content .content-inner {
                padding-left: 16px;
            }
            .nav-drawer.nav-drawer-md.menu-left ~ .footer,
            .nav-drawer.nav-drawer-md.menu-left ~ .header {
                padding-left: 16px;
                left: 240px;
            }
            .nav-drawer.nav-drawer-md.menu-right ~ .content {
                margin-right: 240px;
            }
            .nav-drawer.nav-drawer-md.menu-right ~ .content .content-heading,
            .nav-drawer.nav-drawer-md.menu-right ~ .content .content-inner {
                padding-right: 16px;
            }
            .nav-drawer.nav-drawer-md.menu-right ~ .footer,
            .nav-drawer.nav-drawer-md.menu-right ~ .header {
                padding-right: 16px;
                right: 240px;
            }
        }
        @media only screen and (min-width: 1440px) {
            .nav-drawer.nav-drawer-lg {
                background-color: transparent;
                display: block !important;
                overflow: visible;
                width: 240px;
                z-index: 30;
            }
            .nav-drawer.nav-drawer-lg .menu-scroll {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                left: 0;
                width: 240px;
            }
            .nav-drawer.nav-drawer-lg.menu-left ~ .content {
                margin-left: 240px;
            }
            .nav-drawer.nav-drawer-lg.menu-left ~ .content .content-heading,
            .nav-drawer.nav-drawer-lg.menu-left ~ .content .content-inner {
                padding-left: 16px;
            }
            .nav-drawer.nav-drawer-lg.menu-left ~ .footer,
            .nav-drawer.nav-drawer-lg.menu-left ~ .header {
                padding-left: 16px;
                left: 240px;
            }
            .nav-drawer.nav-drawer-lg.menu-right ~ .content {
                margin-right: 240px;
            }
            .nav-drawer.nav-drawer-lg.menu-right ~ .content .content-heading,
            .nav-drawer.nav-drawer-lg.menu-right ~ .content .content-inner {
                padding-right: 16px;
            }
            .nav-drawer.nav-drawer-lg.menu-right ~ .footer,
            .nav-drawer.nav-drawer-lg.menu-right ~ .header {
                padding-right: 16px;
                right: 240px;
            }
        }
    </style>
</head>
<body>

<section class='container'>
          <hgroup>
            <h1>Welcome to your CakePHP application on The Digital Garage</h1>
          </hgroup>


        <div class="row">
          <section class='col-xs-12 col-sm-6 col-md-6'>
            <section>
              <h2>How to use this example application</h2>
                <p>For instructions on how to use this application with The Digital Garage, start by reading the <a href="http://docs.openshift.org/latest/dev_guide/templates.html#using-the-quickstart-templates">Developer Guide</a>.</p>

              <h2>Deploying code changes</h2>
                <p>
                  The source code for this application is available to be forked from the <a href="https://www.github.com/openshift/cakephp-ex">The Digital Garage GitHub repository</a>.
                  You can configure a webhook in your repository to make The Digital Garage automatically start a build whenever you push your code:
                </p>

<ol>
  <li>From the Web Console homepage, navigate to your project</li>
  <li>Click on Browse &gt; Builds</li>
  <li>From the view for your Build click on the button to copy your GitHub webhook</li>
  <li>Navigate to your repository on GitHub and click on repository settings &gt; webhooks</li>
  <li>Paste your webhook URL provided by The Digital Garage &mdash; that's it!</li>
</ol>
<p>After you save your webhook, if you refresh your settings page you can see the status of the ping that Github sent to The Digital Garage to verify it can reach the server.</p>
<p>Note: adding a webhook requires your The Digital Garage server to be reachable from GitHub.</p>

                <h3>Working in your local Git repository</h3>
                <p>If you forked the application from the The Digital Garage GitHub example, you'll need to manually clone the repository to your local system. Copy the application's source code Git URL and then run:</p>

<pre>$ git clone &lt;git_url&gt; &lt;directory_to_create&gt;

# Within your project directory
# Commit your changes and push to The Digital Garage

$ git commit -a -m 'Some commit message'
$ git push</pre>

<p>After pushing changes, you'll need to manually trigger a build if you did not setup a webhook as described above.</p>

                  <h3>Expanding on sample app</h3>
                  <p>
                  In order to access the original CakePHP application, you have to remove the
                  app/View/Layouts/default.ctp file which serves as the welcome page and rename
                  the default.ctp.default to default.ctp.
                  </p>
                  <p>
                  It will also be necessary to update your application to talk to your database back-end.  The <code>app/Config/database.php</code> file used by CakePHP was set up in such a way that it will accept environment variables for your connection information that you pass to it.
                  Once an administrator has created a MySQL database service for you to connect with you can add the following environment variables to your deploymentConfig to ensure all your frontend pods have access to these environment variables.
                  Note: the cakephp-mysql.json template creates the DB service and environment variables for you.

<pre>
oc env dc/cakephp-mysql-example DATABASE_SERVICE_NAME=&lt;database service name&gt;
oc env dc/cakephp-mysql-example DATABASE_ENGINE=mysql
oc env dc/cakephp-mysql-example DATABASE_NAME=&lt;your created database&gt;
oc env dc/cakephp-mysql-example DATABASE_USER=&lt;your database user&gt;
oc env dc/cakephp-mysql-example DATABASE_PASSWORD=&lt;your database user's password&gt;
</pre>
                  </p>
                  <p>
                  Note: If the database service is created in the same project as the frontend pod,
                  the *_SERVICE_HOST and *_SERVICE_PORT environment variables will be automatically
                  created.
                  </p>
                  <p>
                  You will need to redeploy your application in order to pick up the new environment variables.  You can force a deployment
                  by running:
<pre>
oc deploy cakephp-mysql-example --latest
</pre>
                  </p>

            </section>

          </section>
          <section class="col-xs-12 col-sm-6 col-md-6">

                <h2>Managing your application</h2>

                <p>Documentation on how to manage your application from the Web Console or Command Line is available at the <a href="http://docs.openshift.org/latest/dev_guide/overview.html">Developer Guide</a>.</p>

                <h3>Web Console</h3>
                <p>You can use the Web Console to view the state of your application components and launch new builds.</p>

                <h3>Command Line</h3>
                <p>With the <a href="http://docs.openshift.org/latest/cli_reference/overview.html">The Digital Garage command line interface</a> (CLI), you can create applications and manage projects from a terminal.</p>

                <h2>Development Resources</h2>
                  <ul>
                    <li><a href="http://docs.openshift.org/latest/welcome/index.html">The Digital Garage Documentation</a></li>
                    <li><a href="https://github.com/openshift/origin">The Digital Garage Origin GitHub</a></li>
                    <li><a href="https://github.com/openshift/source-to-image">Source To Image GitHub</a></li>
                    <li><a href="http://docs.openshift.org/latest/using_images/s2i_images/php.html">Getting Started with PHP on The Digital Garage</a></li>
                    <li><a href="http://stackoverflow.com/questions/tagged/openshift">Stack Overflow questions for The Digital Garage</a></li>
                    <li><a href="http://git-scm.com/documentation">Git documentation</a></li>
                  </ul>

                <h2>Request information</h2>
                <p>Page view count:
               <?php
                    App::uses('ConnectionManager', 'Model');

                    $hasDB=1;
                    $tableExisted=0;
                    try {
                      $connection = ConnectionManager::getDataSource('default');
                    } catch(Exception $e) {
                      $hasDB=0;
                    }
                    if ($hasDB) {
                        try {
                          $connection->execute('create table view_counter (c integer)');
                        } catch (Exception $e) {
                        	$tableExisted=1;
                        }
                        try {
                            if ($tableExisted==0) {
                            	$connection->execute('insert into view_counter values(1)');
                            } else {
                                $connection->execute('update view_counter set c=c+1');
                            }
                            $result=$connection->execute('select * from view_counter')->fetch(PDO::FETCH_ASSOC);
                        } catch (Exception $e) {
                            $hasDB=0;
                        }
                    }
                ?>
                <?php if ($hasDB==1) : ?>
                   <span class="code" id="count-value"><?php print_r($result['c']); ?></span>
                   </p>
                <?php else : ?>
                   <span class="code" id="count-value">No database configured</span>
                   </p>
                <?php endif; ?>

          </section>
        </div>
</section>


</body>
</html>
