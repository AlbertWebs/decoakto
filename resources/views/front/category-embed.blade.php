<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ url('/') }}/">
    <style>
        html, body { margin: 0; padding: 0; }
        img { max-width: 100%; height: auto; }
    </style>
</head>
<body>
{!! html_entity_decode($category->content ?? '') !!}

<script>
(function(){
    function sendHeight(){
        try {
            var height = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
            parent.postMessage({ type: 'category-embed-height', id: {{ (int) ($category->id ?? 0) }}, height: height }, '*');
        } catch(e){}
    }
    if (document.readyState === 'complete' || document.readyState === 'interactive') {
        setTimeout(sendHeight, 0);
    } else {
        document.addEventListener('DOMContentLoaded', sendHeight);
    }
    window.addEventListener('load', function(){
        sendHeight();
        setTimeout(sendHeight, 300);
        setTimeout(sendHeight, 1000);
        setTimeout(sendHeight, 2000);
    });
    window.addEventListener('resize', sendHeight);
})();
</script>
</body>
</html>


