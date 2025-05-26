<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crash</title>
</head>
<body>
    <!-- Commenting out the component -->
    {{-- <livewire:counter :bird_count='1' /> --}}
     
    <div>
        Send Event: <livewire:send-event />
    </div>
    <hr>
    <div>
        Receive Event: <livewire:receive-event />
    </div>
</body>
</html>