<x-mail::message>
{{-- Greeting --}}
# Selamat Datang di Sarpras Admin Beasiswa Mahaghora

{{-- Intro Lines --}}
Terima kasih, email Anda telah terdaftar sebagai bagian dari kami.  
Silakan klik tombol di bawah ini untuk melanjutkan.

{{-- Action Button --}}
@isset($actionText)
<x-mail::button :url="$actionUrl" color="primary">
{{ $actionText }}
</x-mail::button>
@endisset

{{-- Outro Lines --}}
Terima kasih telah bergabung bersama kami!  

{{-- Salutation --}}
Hormat kami,  
**Tim Nexus**

{{-- Subcopy --}}
@isset($actionText)
<x-slot:subcopy>
Jika Anda mengalami masalah saat mengklik tombol , salin dan tempel URL berikut  
ke browser Anda: <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>
@endisset
</x-mail::message>