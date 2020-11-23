<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
      <div id="app">
         <yoda-chat my-header="Yoda Chatbot" my-footer="Original Yoda"></yoda-chat>
      </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>      
    <script src="{{ asset('js/app.js') }}"></script>      
</html>