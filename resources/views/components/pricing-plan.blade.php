@props([
    'id',
    'slug',
    'orderRoute',
    'pricing',
    'default'
])

<label 
    class="rounded-xl p-4 cursor-pointer border-2 transition-all hover:border-green"
    :class="{ 'border-green': selectedId === {{ $id }} }"
    @click="selectPlan({{ $id }}, '{{ $slug }}', '{{ $pricing['price'] ?? 0 }}')"
>
    <input 
        type="radio" 
        name="pricingPlan" 
        value="{{ $id }}" 
        class="hidden"
        x-model="selectedId"
    >

    <div class="flex items-center gap-2">
        <div class="w-8 h-8 flex justify-center items-center">
            <span 
                class="w-5 h-5 rounded-full border-2"
                :class="{
                    'border-green bg-green bg-check': selectedId === {{ $id }},
                    'border-border': selectedId !== {{ $id }}
                }"
            ></span>
        </div>
        <div class="flex flex-col gap-2 flex-grow pr-5 border-r">
            <p class="font-semibold leading-5">{{ $slug }}</p>
            <p class="text-xs leading-3 font-medium">
                <del class="text-red">{{ '€' . number_format($pricing['original_price'], 2) }}</del>
                <ins>{{ '€' . number_format($pricing['price'], 2) }}</ins>
            </p>
            <p class="text-xs text-light leading-3">Billed every 2 months</p>
        </div>
        <div class="flex flex-col text-center pl-5 pr-5">
            <p class="text-3xl font-semibold">{{ '€' . number_format($pricing['daily_price'], 2) }}</p>
            <p class="text-xs text-light">Per day</p>
        </div>
    </div>
</label>