<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crash</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <livewire:counter :bird_count='1' />
     
    <div>
        {{-- Send Event: <livewire:send-event /> --}}
    </div>
    <hr>
    <div>
        {{-- Receive Event: <livewire:receive-event /> --}}
    </div>

    {{-- <livewire:lazy lazy /> --}}
    <!-- <h3>This rendering instantly!!!</h3> -->
</body>
</html>