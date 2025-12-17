<x-layouts.guru title="notifikasi.blade">
<x-layouts.guru title="notifikasi.blade">





<h1>Notifikasi</h1>
<ul>
    @foreach($notifikasis as $notif)
        <li>{{ $notif['pesan'] }} - <small>{{ $notif['waktu'] }}</small></li>
    @endforeach
</ul>








</x-layouts.guru>
</x-layouts.guru>
