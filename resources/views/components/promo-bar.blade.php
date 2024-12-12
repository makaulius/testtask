@props(['countdown'])

<div class="promo-bar fixed top-0 w-full h-10 bg-red text-white flex items-center justify-center gap-2 leading-[24px] countdown" 
     x-data="countdown('{{ $countdown ?? '' }}')" 
     x-init="startCountdown()">
    <p><strong>The offer expires in:</strong></p>
    <div id="countdown" class="countdown">
        <span x-text="timeLeft"></span>
    </div>
</div>