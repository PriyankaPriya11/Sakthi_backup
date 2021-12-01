
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <title></title>
<style>
   .copy{
    background: #99E1E5;
    border: none;
    padding: 9px 21px;
    border-radius: 6px;
    cursor: pointer;
    border-radius:0;
}
</style>    
</head>
<script type="text/javascript">
            function Copy() 
            {
                var dummy = document.createElement('input'),
                text = window.location.href;
                textl = text.length;
                texts = text.slice(0, textl - 14);
                document.body.appendChild(dummy);
                dummy.value = texts;
                dummy.select();
                document.execCommand('copy');
                document.body.removeChild(dummy);
            }
        </script>
<body>
    <div>

        <button class="copy" type="button" value="Copy Url" onclick="Copy();" >
            <img src="images/share-button.png">
            <!-- copy -->
        </button>
    </div>
</body>
</html> 