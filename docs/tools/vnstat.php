<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
<meta name="keywords" content="hub">
<meta name="description" content="hub">
<title>Hello, World!</title>
<style>
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    background: #fff;
    direction: ltr;
    margin: 0;
    padding: 0;
}
body {
    margin: 0;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
div {
    display: block;
}
.a {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
    min-height: 640px;
    min-height: 100vh;
    position: relative;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    align-content: center;
    pointer-events: auto;
    user-select: none;
    margin: 0 auto;
}
.b {
    font-size: 5em;
    line-height: 1;
    min-height: calc(1.2em - 0px);
    height: 1.5em;
    display: flex;
    flex-direction: column;
    flex-flow: nowrap;
    white-space: nowrap;
}

@media only screen and (max-width: 1280px) {
.b {
    font-size: 4.5em;
}
}

@media only screen and (max-width: 960px) {
.b {
    font-size: 4em;
}
}

@media only screen and (max-width: 720px) {
.b {
    font-size: 3.5em;
}
}

@media only screen and (max-width: 640px) {
.b {
    font-size: 3em;
}
}

@media only screen and (max-width: 480px) {
.b {
    font-size: 2.5em;
}
}
.c {
    font-size: 1.25em;
    line-height: 1;
    min-height: calc(1.2em - 0px);
    height: 1.20em;
    display: flex;
    flex-direction: row;
    justify-content: center;
}

@media only screen and (max-width: 1280px) {
.c {
    font-size: 1.2em;
}
}

@media only screen and (max-width: 960px) {
.c {
    font-size: 1.1em;
}
}

@media only screen and (max-width: 720px) {
.c {
    font-size: 1.0em;
}
}

@media only screen and (max-width: 640px) {
.c {
    font-size: 0.9em;
}
}

@media only screen and (max-width: 480px) {
.c {
    font-size: 0.8em;
    /*flex-direction: column;*/
}
}
.c div {
    margin: 0 auto;
    padding: 0 1em;
    white-space: nowrap;
}

@media only screen and (max-width: 480px) {
.c div {
/*    margin: 0 auto;
    padding: 2em 1em;*/
}
}
</style>
</head>
<body>
<div class="a">
  <div class=""><h3>hour</h3></div>
  <pre>
    <?php echo system("vnstat -h"); ?>
  </pre>
  <div class=""><h3></h3>day</h3></div>
  <pre>
    <?php echo system("vnstat -d"); ?>
  </pre>
  <div class=""><h3>month</h3></div>
  <pre>
    <?php echo system("vnstat -m"); ?>
  </pre>
</div>
</body>
</html>
