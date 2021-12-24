<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>MedHive API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.19.1.js") }}"></script>

    <script src="{{ asset("vendor/scribe/js/theme-default-3.19.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-docs">
                        <a href="#endpoints-GETapi-docs">Display Swagger API page.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-oauth2-callback">
                        <a href="#endpoints-GETapi-oauth2-callback">Display Oauth2 callback pages.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                        <a href="#endpoints-POSTapi-login">POST api/login</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                        <a href="#endpoints-POSTapi-register">POST api/register</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                        <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-users-me">
                        <a href="#endpoints-GETapi-users-me">GET api/users/me</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-specialists">
                        <a href="#endpoints-GETapi-specialists">Display all specialists</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-specialists">
                        <a href="#endpoints-POSTapi-specialists">POST api/specialists</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-specialists--id-">
                        <a href="#endpoints-GETapi-specialists--id-">GET api/specialists/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-specialists--id-">
                        <a href="#endpoints-PUTapi-specialists--id-">PUT api/specialists/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-facilities">
                        <a href="#endpoints-GETapi-facilities">Get all facilities</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-facilities">
                        <a href="#endpoints-POSTapi-facilities">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-facilities--id-">
                        <a href="#endpoints-GETapi-facilities--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-facilities--id-">
                        <a href="#endpoints-PUTapi-facilities--id-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-openings">
                        <a href="#endpoints-GETapi-openings">Get all openings</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-openings">
                        <a href="#endpoints-POSTapi-openings">Store a newly created opening resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-openings--id-">
                        <a href="#endpoints-GETapi-openings--id-">Display the specified opening resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-openings--id-">
                        <a href="#endpoints-PUTapi-openings--id-">Update the specified opening resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-openings--id-">
                        <a href="#endpoints-DELETEapi-openings--id-">Remove the specified resource from storage.</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>
            
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: December 24 2021</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://medhive-mvp.herokuapp.com/</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-docs">Display Swagger API page.</h2>

<p>
</p>



<span id="example-requests-GETapi-docs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://medhive-mvp.herokuapp.com/api/docs" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/docs"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-docs">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">&lt;!-- HTML for static distribution bundle build --&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
  &lt;meta charset=&quot;UTF-8&quot;&gt;
  &lt;title&gt;MedHive Api Documentation&lt;/title&gt;
  &lt;link href=&quot;https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700&quot; rel=&quot;stylesheet&quot;&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://medhive-mvp.herokuapp.com/docs/asset/swagger-ui.css?v=b47dcdb59251cf1254ee38395c18b5b9&quot; &gt;
  &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;http://medhive-mvp.herokuapp.com/docs/asset/favicon-32x32.png?v=40d4f2c38d1cd854ad463f16373cbcb6&quot; sizes=&quot;32x32&quot; /&gt;
  &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;http://medhive-mvp.herokuapp.com/docs/asset/favicon-16x16.png?v=f0ae831196d55d8f4115b6c5e8ec5384&quot; sizes=&quot;16x16&quot; /&gt;
  &lt;style&gt;
    html
    {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
    }
    *,
    *:before,
    *:after
    {
        box-sizing: inherit;
    }

    body {
      margin:0;
      background: #fafafa;
    }
  &lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;

&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;http://www.w3.org/1999/xlink&quot; style=&quot;position:absolute;width:0;height:0&quot;&gt;
  &lt;defs&gt;
    &lt;symbol viewBox=&quot;0 0 20 20&quot; id=&quot;unlocked&quot;&gt;
          &lt;path d=&quot;M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z&quot;&gt;&lt;/path&gt;
    &lt;/symbol&gt;

    &lt;symbol viewBox=&quot;0 0 20 20&quot; id=&quot;locked&quot;&gt;
      &lt;path d=&quot;M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z&quot;/&gt;
    &lt;/symbol&gt;

    &lt;symbol viewBox=&quot;0 0 20 20&quot; id=&quot;close&quot;&gt;
      &lt;path d=&quot;M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z&quot;/&gt;
    &lt;/symbol&gt;

    &lt;symbol viewBox=&quot;0 0 20 20&quot; id=&quot;large-arrow&quot;&gt;
      &lt;path d=&quot;M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z&quot;/&gt;
    &lt;/symbol&gt;

    &lt;symbol viewBox=&quot;0 0 20 20&quot; id=&quot;large-arrow-down&quot;&gt;
      &lt;path d=&quot;M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z&quot;/&gt;
    &lt;/symbol&gt;


    &lt;symbol viewBox=&quot;0 0 24 24&quot; id=&quot;jump-to&quot;&gt;
      &lt;path d=&quot;M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z&quot;/&gt;
    &lt;/symbol&gt;

    &lt;symbol viewBox=&quot;0 0 24 24&quot; id=&quot;expand&quot;&gt;
      &lt;path d=&quot;M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z&quot;/&gt;
    &lt;/symbol&gt;

  &lt;/defs&gt;
&lt;/svg&gt;

&lt;div id=&quot;swagger-ui&quot;&gt;&lt;/div&gt;

&lt;script src=&quot;http://medhive-mvp.herokuapp.com/docs/asset/swagger-ui-bundle.js?v=798d369d6387e66b7278e63cb950a32f&quot;&gt; &lt;/script&gt;
&lt;script src=&quot;http://medhive-mvp.herokuapp.com/docs/asset/swagger-ui-standalone-preset.js?v=e3a4b013757e84ad70d1ef12270ba31a&quot;&gt; &lt;/script&gt;
&lt;script&gt;
window.onload = function() {
  // Build a system
  const ui = SwaggerUIBundle({
    dom_id: '#swagger-ui',

    url: &quot;http://medhive-mvp.herokuapp.com/docs/api-docs.json&quot;,
    operationsSorter: null,
    configUrl: null,
    validatorUrl: null,
    oauth2RedirectUrl: &quot;http://medhive-mvp.herokuapp.com/api/oauth2-callback&quot;,

    requestInterceptor: function(request) {
      request.headers['X-CSRF-TOKEN'] = '';
      return request;
    },

    presets: [
      SwaggerUIBundle.presets.apis,
      SwaggerUIStandalonePreset
    ],

    plugins: [
      SwaggerUIBundle.plugins.DownloadUrl
    ],

    layout: &quot;StandaloneLayout&quot;,

    persistAuthorization: true,
  })

  window.ui = ui
}
&lt;/script&gt;
&lt;/body&gt;

&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-docs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-docs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-docs"></code></pre>
</span>
<span id="execution-error-GETapi-docs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-docs"></code></pre>
</span>
<form id="form-GETapi-docs" data-method="GET"
      data-path="api/docs"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-docs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-docs"
                    onclick="tryItOut('GETapi-docs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-docs"
                    onclick="cancelTryOut('GETapi-docs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-docs" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/docs</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-oauth2-callback">Display Oauth2 callback pages.</h2>

<p>
</p>



<span id="example-requests-GETapi-oauth2-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://medhive-mvp.herokuapp.com/api/oauth2-callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/oauth2-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-oauth2-callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">&lt;!doctype html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;head&gt;
    &lt;title&gt;Swagger UI: OAuth2 Redirect&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
    'use strict';
    function run () {
        var oauth2 = window.opener.swaggerUIRedirectOauth2;
        var sentState = oauth2.state;
        var redirectUrl = oauth2.redirectUrl;
        var isValid, qp, arr;

        if (/code|token|error/.test(window.location.hash)) {
            qp = window.location.hash.substring(1);
        } else {
            qp = location.search.substring(1);
        }

        arr = qp.split(&quot;&amp;&quot;);
        arr.forEach(function (v,i,_arr) { _arr[i] = '&quot;' + v.replace('=', '&quot;:&quot;') + '&quot;';});
        qp = qp ? JSON.parse('{' + arr.join() + '}',
                function (key, value) {
                    return key === &quot;&quot; ? value : decodeURIComponent(value);
                }
        ) : {};

        isValid = qp.state === sentState;

        if ((
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;accessCode&quot; ||
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;authorizationCode&quot; ||
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;authorization_code&quot;
        ) &amp;&amp; !oauth2.auth.code) {
            if (!isValid) {
                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: &quot;auth&quot;,
                    level: &quot;warning&quot;,
                    message: &quot;Authorization may be unsafe, passed state was changed in server Passed state wasn't returned from auth server&quot;
                });
            }

            if (qp.code) {
                delete oauth2.state;
                oauth2.auth.code = qp.code;
                oauth2.callback({auth: oauth2.auth, redirectUrl: redirectUrl});
            } else {
                let oauthErrorMsg;
                if (qp.error) {
                    oauthErrorMsg = &quot;[&quot;+qp.error+&quot;]: &quot; +
                        (qp.error_description ? qp.error_description+ &quot;. &quot; : &quot;no accessCode received from the server. &quot;) +
                        (qp.error_uri ? &quot;More info: &quot;+qp.error_uri : &quot;&quot;);
                }

                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: &quot;auth&quot;,
                    level: &quot;error&quot;,
                    message: oauthErrorMsg || &quot;[Authorization failed]: no accessCode received from the server&quot;
                });
            }
        } else {
            oauth2.callback({auth: oauth2.auth, token: qp, isValid: isValid, redirectUrl: redirectUrl});
        }
        window.close();
    }

    window.addEventListener('DOMContentLoaded', function () {
      run();
    });
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-oauth2-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"></code></pre>
</span>
<span id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback"></code></pre>
</span>
<form id="form-GETapi-oauth2-callback" data-method="GET"
      data-path="api/oauth2-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-oauth2-callback"
                    onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-oauth2-callback"
                    onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-oauth2-callback" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/oauth2-callback</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://medhive-mvp.herokuapp.com/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"slindgren@example.com\",
    \"password\": \"v\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "slindgren@example.com",
    "password": "v"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-login"
               value="slindgren@example.com"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-login"
               value="v"
               data-component="body" hidden>
    <br>
<p>Must be at least 6 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://medhive-mvp.herokuapp.com/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"djqkhoetzkfcuzcsfdeyciqwtyubimmcvttygurpjlmkdkvnxcbywwadzgwjsuxscbafyqivckkcxygtazgzuxtzknarxznpofzultydqjgwtzurohsnffwlqvkuevjcxklbhyptbeowwovvylinngzqtngwpbvnvhyydcgrfimexqjsyrjnxzaxvjkcdellsrqgwpxmjvpyysumxytkzsc\",
    \"email\": \"marques.murray@example.org\",
    \"password\": \"lvjav\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "djqkhoetzkfcuzcsfdeyciqwtyubimmcvttygurpjlmkdkvnxcbywwadzgwjsuxscbafyqivckkcxygtazgzuxtzknarxznpofzultydqjgwtzurohsnffwlqvkuevjcxklbhyptbeowwovvylinngzqtngwpbvnvhyydcgrfimexqjsyrjnxzaxvjkcdellsrqgwpxmjvpyysumxytkzsc",
    "email": "marques.murray@example.org",
    "password": "lvjav"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-register"
               value="djqkhoetzkfcuzcsfdeyciqwtyubimmcvttygurpjlmkdkvnxcbywwadzgwjsuxscbafyqivckkcxygtazgzuxtzknarxznpofzultydqjgwtzurohsnffwlqvkuevjcxklbhyptbeowwovvylinngzqtngwpbvnvhyydcgrfimexqjsyrjnxzaxvjkcdellsrqgwpxmjvpyysumxytkzsc"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-register"
               value="marques.murray@example.org"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-register"
               value="lvjav"
               data-component="body" hidden>
    <br>
<p>Must be at least 6 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://medhive-mvp.herokuapp.com/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout"></code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-users-me">GET api/users/me</h2>

<p>
</p>



<span id="example-requests-GETapi-users-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://medhive-mvp.herokuapp.com/api/users/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/users/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users-me">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-me"></code></pre>
</span>
<span id="execution-error-GETapi-users-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-me"></code></pre>
</span>
<form id="form-GETapi-users-me" data-method="GET"
      data-path="api/users/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users-me"
                    onclick="tryItOut('GETapi-users-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users-me"
                    onclick="cancelTryOut('GETapi-users-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users-me" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/me</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-specialists">Display all specialists</h2>

<p>
</p>

<p>Get a listings of specialists</p>

<span id="example-requests-GETapi-specialists">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://medhive-mvp.herokuapp.com/api/specialists" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/specialists"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-specialists">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;title&quot;: &quot;Dr.&quot;,
            &quot;type&quot;: {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Pharmacist&quot;
            },
            &quot;user&quot;: {
                &quot;name&quot;: &quot;Gonzalo Hammes&quot;,
                &quot;email&quot;: &quot;pat.rempel@example.net&quot;,
                &quot;display_picture&quot;: null
            }
        },
        {
            &quot;title&quot;: &quot;Prof.&quot;,
            &quot;type&quot;: {
                &quot;id&quot;: 8,
                &quot;name&quot;: &quot;Nurse&quot;
            },
            &quot;user&quot;: {
                &quot;name&quot;: &quot;Shea Monahan&quot;,
                &quot;email&quot;: &quot;breana77@example.net&quot;,
                &quot;display_picture&quot;: null
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-specialists" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-specialists"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-specialists"></code></pre>
</span>
<span id="execution-error-GETapi-specialists" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-specialists"></code></pre>
</span>
<form id="form-GETapi-specialists" data-method="GET"
      data-path="api/specialists"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-specialists', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-specialists"
                    onclick="tryItOut('GETapi-specialists');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-specialists"
                    onclick="cancelTryOut('GETapi-specialists');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-specialists" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/specialists</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-specialists">POST api/specialists</h2>

<p>
</p>



<span id="example-requests-POSTapi-specialists">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://medhive-mvp.herokuapp.com/api/specialists" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"a\",
    \"type\": \"nobis\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/specialists"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "a",
    "type": "nobis"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-specialists">
</span>
<span id="execution-results-POSTapi-specialists" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-specialists"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-specialists"></code></pre>
</span>
<span id="execution-error-POSTapi-specialists" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-specialists"></code></pre>
</span>
<form id="form-POSTapi-specialists" data-method="POST"
      data-path="api/specialists"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-specialists', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-specialists"
                    onclick="tryItOut('POSTapi-specialists');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-specialists"
                    onclick="cancelTryOut('POSTapi-specialists');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-specialists" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/specialists</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-specialists"
               value="a"
               data-component="body" hidden>
    <br>
<p>Must be at least 1 characters.</p>
        </p>
                <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="type"
               data-endpoint="POSTapi-specialists"
               value="nobis"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-specialists--id-">GET api/specialists/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-specialists--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://medhive-mvp.herokuapp.com/api/specialists/8" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/specialists/8"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-specialists--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-specialists--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-specialists--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-specialists--id-"></code></pre>
</span>
<span id="execution-error-GETapi-specialists--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-specialists--id-"></code></pre>
</span>
<form id="form-GETapi-specialists--id-" data-method="GET"
      data-path="api/specialists/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-specialists--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-specialists--id-"
                    onclick="tryItOut('GETapi-specialists--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-specialists--id-"
                    onclick="cancelTryOut('GETapi-specialists--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-specialists--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/specialists/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-specialists--id-"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the specialist.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-specialists--id-">PUT api/specialists/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-specialists--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://medhive-mvp.herokuapp.com/api/specialists/8" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"specialist\": \"exercitationem\",
    \"title\": \"voluptas\",
    \"type\": \"ut\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/specialists/8"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "specialist": "exercitationem",
    "title": "voluptas",
    "type": "ut"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-specialists--id-">
</span>
<span id="execution-results-PUTapi-specialists--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-specialists--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-specialists--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-specialists--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-specialists--id-"></code></pre>
</span>
<form id="form-PUTapi-specialists--id-" data-method="PUT"
      data-path="api/specialists/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-specialists--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-specialists--id-"
                    onclick="tryItOut('PUTapi-specialists--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-specialists--id-"
                    onclick="cancelTryOut('PUTapi-specialists--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-specialists--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/specialists/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-specialists--id-"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the specialist.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>specialist</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="specialist"
               data-endpoint="PUTapi-specialists--id-"
               value="exercitationem"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="PUTapi-specialists--id-"
               value="voluptas"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="type"
               data-endpoint="PUTapi-specialists--id-"
               value="ut"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-facilities">Get all facilities</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-facilities">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://medhive-mvp.herokuapp.com/api/facilities" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/facilities"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-facilities">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;name&quot;: &quot;Lockman-O'Kon&quot;,
            &quot;address&quot;: &quot;237 Elouise Glen\nChristiansenshire, OR 39706-4624&quot;,
            &quot;type&quot;: {
                &quot;id&quot;: 8,
                &quot;name&quot;: &quot;Lab&quot;
            }
        },
        {
            &quot;name&quot;: &quot;Jerde-Walter&quot;,
            &quot;address&quot;: &quot;65631 Vicente Lodge\nBaileyview, MI 92197-2826&quot;,
            &quot;type&quot;: {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Clinic&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-facilities" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-facilities"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-facilities"></code></pre>
</span>
<span id="execution-error-GETapi-facilities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-facilities"></code></pre>
</span>
<form id="form-GETapi-facilities" data-method="GET"
      data-path="api/facilities"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-facilities', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-facilities"
                    onclick="tryItOut('GETapi-facilities');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-facilities"
                    onclick="cancelTryOut('GETapi-facilities');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-facilities" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/facilities</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-facilities">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-facilities">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://medhive-mvp.herokuapp.com/api/facilities" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"zb\",
    \"address\": \"\",
    \"type\": 403058.97304
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/facilities"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "zb",
    "address": "",
    "type": 403058.97304
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-facilities">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;name&quot;: &quot;Russel, Gleason and O'Reilly&quot;,
            &quot;address&quot;: &quot;6523 Sarah Lodge Suite 005\nO'Connellview, HI 11377&quot;,
            &quot;type&quot;: {
                &quot;id&quot;: 10,
                &quot;name&quot;: &quot;Pharmacy&quot;
            }
        },
        {
            &quot;name&quot;: &quot;Gleichner, Heathcote and Murray&quot;,
            &quot;address&quot;: &quot;2843 Franco Point Suite 669\nNorth Lizeth, KY 53657&quot;,
            &quot;type&quot;: {
                &quot;id&quot;: 11,
                &quot;name&quot;: &quot;Pharmacy&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-facilities" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-facilities"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-facilities"></code></pre>
</span>
<span id="execution-error-POSTapi-facilities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-facilities"></code></pre>
</span>
<form id="form-POSTapi-facilities" data-method="POST"
      data-path="api/facilities"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-facilities', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-facilities"
                    onclick="tryItOut('POSTapi-facilities');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-facilities"
                    onclick="cancelTryOut('POSTapi-facilities');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-facilities" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/facilities</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-facilities"
               value="zb"
               data-component="body" hidden>
    <br>
<p>Must be at least 3 characters.</p>
        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address"
               data-endpoint="POSTapi-facilities"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be at least 3 characters.</p>
        </p>
                <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
                <input type="number"
               name="type"
               data-endpoint="POSTapi-facilities"
               value="403058.97304"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>user</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="user"
               data-endpoint="POSTapi-facilities"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-facilities--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-facilities--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://medhive-mvp.herokuapp.com/api/facilities/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/facilities/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-facilities--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-facilities--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-facilities--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-facilities--id-"></code></pre>
</span>
<span id="execution-error-GETapi-facilities--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-facilities--id-"></code></pre>
</span>
<form id="form-GETapi-facilities--id-" data-method="GET"
      data-path="api/facilities/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-facilities--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-facilities--id-"
                    onclick="tryItOut('GETapi-facilities--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-facilities--id-"
                    onclick="cancelTryOut('GETapi-facilities--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-facilities--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/facilities/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-facilities--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the facility.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-facilities--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-facilities--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://medhive-mvp.herokuapp.com/api/facilities/10" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"facility\": \"doloribus\",
    \"name\": \"aut\",
    \"address\": \"corporis\",
    \"type\": \"et\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/facilities/10"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "facility": "doloribus",
    "name": "aut",
    "address": "corporis",
    "type": "et"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-facilities--id-">
</span>
<span id="execution-results-PUTapi-facilities--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-facilities--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-facilities--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-facilities--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-facilities--id-"></code></pre>
</span>
<form id="form-PUTapi-facilities--id-" data-method="PUT"
      data-path="api/facilities/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-facilities--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-facilities--id-"
                    onclick="tryItOut('PUTapi-facilities--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-facilities--id-"
                    onclick="cancelTryOut('PUTapi-facilities--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-facilities--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/facilities/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-facilities--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the facility.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>facility</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="facility"
               data-endpoint="PUTapi-facilities--id-"
               value="doloribus"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-facilities--id-"
               value="aut"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address"
               data-endpoint="PUTapi-facilities--id-"
               value="corporis"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="type"
               data-endpoint="PUTapi-facilities--id-"
               value="et"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>user</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="user"
               data-endpoint="PUTapi-facilities--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-openings">Get all openings</h2>

<p>
</p>

<p>Display a listing of the resource.</p>

<span id="example-requests-GETapi-openings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://medhive-mvp.herokuapp.com/api/openings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/openings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-openings">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 3,
            &quot;for&quot;: 9,
            &quot;facility&quot;: {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Wisozk-Kessler&quot;,
                &quot;address&quot;: &quot;7163 Herman Squares Suite 110\nWest Deshaun, CT 43907&quot;,
                &quot;user_id&quot;: 8,
                &quot;type_id&quot;: 12,
                &quot;created_at&quot;: &quot;2021-12-24T19:28:54.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-24T19:28:54.000000Z&quot;
            },
            &quot;type&quot;: true,
            &quot;is_active&quot;: true
        },
        {
            &quot;id&quot;: 4,
            &quot;for&quot;: 10,
            &quot;facility&quot;: {
                &quot;id&quot;: 8,
                &quot;name&quot;: &quot;Mosciski-Cummerata&quot;,
                &quot;address&quot;: &quot;242 Daphne Lodge Apt. 074\nJodyborough, DE 58257&quot;,
                &quot;user_id&quot;: 9,
                &quot;type_id&quot;: 13,
                &quot;created_at&quot;: &quot;2021-12-24T19:28:55.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-24T19:28:55.000000Z&quot;
            },
            &quot;type&quot;: true,
            &quot;is_active&quot;: true
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-openings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-openings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-openings"></code></pre>
</span>
<span id="execution-error-GETapi-openings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-openings"></code></pre>
</span>
<form id="form-GETapi-openings" data-method="GET"
      data-path="api/openings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-openings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-openings"
                    onclick="tryItOut('GETapi-openings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-openings"
                    onclick="cancelTryOut('GETapi-openings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-openings" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/openings</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-openings">Store a newly created opening resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-openings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://medhive-mvp.herokuapp.com/api/openings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"for\": \"minus\",
    \"facility\": \"rerum\",
    \"type\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/openings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "for": "minus",
    "facility": "rerum",
    "type": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-openings">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 5,
            &quot;for&quot;: 11,
            &quot;facility&quot;: {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Sauer, Ledner and Zemlak&quot;,
                &quot;address&quot;: &quot;2144 Sunny Brook Suite 953\nSouth Gracielachester, SC 52787-0595&quot;,
                &quot;user_id&quot;: 10,
                &quot;type_id&quot;: 14,
                &quot;created_at&quot;: &quot;2021-12-24T19:28:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-24T19:28:57.000000Z&quot;
            },
            &quot;type&quot;: true,
            &quot;is_active&quot;: true
        },
        {
            &quot;id&quot;: 6,
            &quot;for&quot;: 12,
            &quot;facility&quot;: {
                &quot;id&quot;: 10,
                &quot;name&quot;: &quot;Conn and Sons&quot;,
                &quot;address&quot;: &quot;265 Lon Creek Apt. 279\nHipolitoton, NV 85226-0389&quot;,
                &quot;user_id&quot;: 11,
                &quot;type_id&quot;: 15,
                &quot;created_at&quot;: &quot;2021-12-24T19:28:58.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-24T19:28:58.000000Z&quot;
            },
            &quot;type&quot;: true,
            &quot;is_active&quot;: true
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-openings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-openings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-openings"></code></pre>
</span>
<span id="execution-error-POSTapi-openings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-openings"></code></pre>
</span>
<form id="form-POSTapi-openings" data-method="POST"
      data-path="api/openings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-openings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-openings"
                    onclick="tryItOut('POSTapi-openings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-openings"
                    onclick="cancelTryOut('POSTapi-openings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-openings" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/openings</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>for</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="for"
               data-endpoint="POSTapi-openings"
               value="minus"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>facility</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="facility"
               data-endpoint="POSTapi-openings"
               value="rerum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
                <label data-endpoint="POSTapi-openings" hidden>
            <input type="radio" name="type"
                   value="true"
                   data-endpoint="POSTapi-openings"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-openings" hidden>
            <input type="radio" name="type"
                   value="false"
                   data-endpoint="POSTapi-openings"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-openings--id-">Display the specified opening resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-openings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://medhive-mvp.herokuapp.com/api/openings/19" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/openings/19"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-openings--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 7,
            &quot;for&quot;: 13,
            &quot;facility&quot;: {
                &quot;id&quot;: 11,
                &quot;name&quot;: &quot;Klocko LLC&quot;,
                &quot;address&quot;: &quot;5125 Littel Valley\nFadelmouth, NC 96122-3383&quot;,
                &quot;user_id&quot;: 12,
                &quot;type_id&quot;: 16,
                &quot;created_at&quot;: &quot;2021-12-24T19:28:59.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-24T19:28:59.000000Z&quot;
            },
            &quot;type&quot;: true,
            &quot;is_active&quot;: true
        },
        {
            &quot;id&quot;: 8,
            &quot;for&quot;: 14,
            &quot;facility&quot;: {
                &quot;id&quot;: 12,
                &quot;name&quot;: &quot;Wuckert, Turcotte and Metz&quot;,
                &quot;address&quot;: &quot;2171 Weldon Trace Suite 028\nRalphview, DE 92701-8758&quot;,
                &quot;user_id&quot;: 13,
                &quot;type_id&quot;: 17,
                &quot;created_at&quot;: &quot;2021-12-24T19:29:00.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-24T19:29:00.000000Z&quot;
            },
            &quot;type&quot;: true,
            &quot;is_active&quot;: true
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-openings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-openings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-openings--id-"></code></pre>
</span>
<span id="execution-error-GETapi-openings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-openings--id-"></code></pre>
</span>
<form id="form-GETapi-openings--id-" data-method="GET"
      data-path="api/openings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-openings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-openings--id-"
                    onclick="tryItOut('GETapi-openings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-openings--id-"
                    onclick="cancelTryOut('GETapi-openings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-openings--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/openings/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-openings--id-"
               value="19"
               data-component="url" hidden>
    <br>
<p>The ID of the opening.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-openings--id-">Update the specified opening resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-openings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://medhive-mvp.herokuapp.com/api/openings/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"for\": \"sint\",
    \"facility\": \"numquam\",
    \"type\": false,
    \"is_active\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/openings/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "for": "sint",
    "facility": "numquam",
    "type": false,
    "is_active": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-openings--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 9,
            &quot;for&quot;: 15,
            &quot;facility&quot;: {
                &quot;id&quot;: 13,
                &quot;name&quot;: &quot;Klein-Smitham&quot;,
                &quot;address&quot;: &quot;289 Vicenta Spur Apt. 626\nSouth Mistyfurt, CO 74958-3552&quot;,
                &quot;user_id&quot;: 14,
                &quot;type_id&quot;: 18,
                &quot;created_at&quot;: &quot;2021-12-24T19:29:02.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-24T19:29:02.000000Z&quot;
            },
            &quot;type&quot;: true,
            &quot;is_active&quot;: true
        },
        {
            &quot;id&quot;: 10,
            &quot;for&quot;: 16,
            &quot;facility&quot;: {
                &quot;id&quot;: 14,
                &quot;name&quot;: &quot;Fahey, Hansen and Carroll&quot;,
                &quot;address&quot;: &quot;5849 Jermaine Meadows\nAnselside, VT 87375&quot;,
                &quot;user_id&quot;: 15,
                &quot;type_id&quot;: 19,
                &quot;created_at&quot;: &quot;2021-12-24T19:29:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-24T19:29:03.000000Z&quot;
            },
            &quot;type&quot;: true,
            &quot;is_active&quot;: true
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-openings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-openings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-openings--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-openings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-openings--id-"></code></pre>
</span>
<form id="form-PUTapi-openings--id-" data-method="PUT"
      data-path="api/openings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-openings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-openings--id-"
                    onclick="tryItOut('PUTapi-openings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-openings--id-"
                    onclick="cancelTryOut('PUTapi-openings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-openings--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/openings/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-openings--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the opening.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>for</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="for"
               data-endpoint="PUTapi-openings--id-"
               value="sint"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>facility</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="facility"
               data-endpoint="PUTapi-openings--id-"
               value="numquam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
                <label data-endpoint="PUTapi-openings--id-" hidden>
            <input type="radio" name="type"
                   value="true"
                   data-endpoint="PUTapi-openings--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-openings--id-" hidden>
            <input type="radio" name="type"
                   value="false"
                   data-endpoint="PUTapi-openings--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>is_active</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
                <label data-endpoint="PUTapi-openings--id-" hidden>
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-openings--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-openings--id-" hidden>
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-openings--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
        </form>

            <h2 id="endpoints-DELETEapi-openings--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-openings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://medhive-mvp.herokuapp.com/api/openings/7" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://medhive-mvp.herokuapp.com/api/openings/7"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-openings--id-">
</span>
<span id="execution-results-DELETEapi-openings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-openings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-openings--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-openings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-openings--id-"></code></pre>
</span>
<form id="form-DELETEapi-openings--id-" data-method="DELETE"
      data-path="api/openings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-openings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-openings--id-"
                    onclick="tryItOut('DELETEapi-openings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-openings--id-"
                    onclick="cancelTryOut('DELETEapi-openings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-openings--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/openings/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-openings--id-"
               value="7"
               data-component="url" hidden>
    <br>
<p>The ID of the opening.</p>
            </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
