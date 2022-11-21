<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Online C Compiller PromDas</title>

    <link rel="stylesheet" href="ui/css/style.css" />
</head>

<body>
    <div class="header">PromDas IDE</div>
    <div class="control-panel">
        Select Language: &nbsp; &nbsp;
        <select id="languages" class="languages" onchange="changeLanguage()">
            <option value="c">C</option>
            <option value="cpp">C++</option>
        </select>
    </div>
    <div class="editor" id="editor"></div>

    <div class="button-container">
        <button class="btn" onclick="executeCode()">Run</button>
    </div>

    <div class="output"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="ui/js/lib/ace.js"></script>
    <script src="ui/js/lib/theme-monokai.js"></script>
    <script src="ui/js/ide.js"></script>
</body>

</html>
