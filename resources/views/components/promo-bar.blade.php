@props(['countdown'])

<div class="promo-bar countdown fixed top-0 w-full h-10 bg-red text-white flex items-center justify-center gap-2 leading-[24px] z-10" 
     x-data="countdown('{{ $countdown ?? '' }}')" 
     x-init="startCountdown()">
    <p><strong>The offer expires in:</strong></p>
    <div id="countdown" class="countdown">
        <span x-text="timeLeft"></span>
    </div>
</div>