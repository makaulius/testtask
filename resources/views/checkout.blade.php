<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <title>Checkout | {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-body-gradient">
    <x-promo-bar countdown="2024-12-31T23:59:59" />  
    <x-header />

    <main class="container flex flex-col items-center">

        <h1 class="text-center width-7-12">Get your ADHD hypnotherapy plan and see results in first month <br><em>(without any effort)</em></h1>

        @if(!empty($products) && count($products) > 0)
            <form class="width-1-3" x-data="radioForm()" method="get">
                <div id="plans" class="scroll-mt-12">
                    <h2 class="text-center">Select your plan</h2>

                    <div class="flex flex-col gap-4">
                        @foreach($products as $product)
                            <x-pricing-plan 
                                :id="$product['id']" 
                                :slug="$product['slug']" 
                                :orderRoute="$product['order_route']" 
                                :pricing="$product['pricing']" 
                                :default="$product['default']"
                            />
                        @endforeach
                        <x-button size="big">Order Now</x-button>
                    </div>

                    <p class="text-xs leading-[18px] mt-6 mb-6 text-light">By clicking Get my plan, I agree to pay €15,19 for my plan and that if I do not cancel before the end of the 4-week introductory plan, Happyo will automatically charge my payment method the regular price €38,95 every 4 weeks thereafter until I cancel. I can cancel by contacting <a class="text-accent underline" href="mailto:support@gethappyo.co">support@gethappyo.co</a></p>
                    <div class="flex gap-4 items-center p-4 bg-white shadow-md rounded-lg">
                        <img width="100" height="111" src="{{ asset('images/money-back.svg') }}" alt="Money Back">
                        <p class="text-xs leading-[18px]">We offer a 100% money-back guarantee to users who have listened to at least 4 hypnotherapy sessions within 30 days and do not experience any improvement in their ADHD.</p>
                    </div>
                </div>

                <div
                class="order-now fixed left-0 bottom-0 w-full bg-white pt-4 pb-4 px-0 transition-transform duration-300 ease-in-out transform translate-y-full"
                :class="{
                    'translate-y-0 pointer-events-auto shadow-[0_0px_16px_0px_rgba(0,0,0,0.1)]': isActive,
                    'translate-y-full pointer-events-none': !isActive
                }"
                >
                    <div class="container flex justify-between items-center">
                        <div class="hidden md:block">
                            <h3 class="font-bold text-xl">Your ADHD hypnotherapy plan</h3>
                        </div>
                        <div class="flex gap-4 items-center text-left md:text-right w-full md:w-auto">
                            <div>
                                <p><strong><span x-text="selectedTitle"></span></strong></p>
                                <p class="text-sm">€<span x-text="selectedPrice"></span></p>
                            </div>
                            <div class="ml-auto">
                                <x-button href="#plans">Claim my plan</x-button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    
            <script>
                function radioForm() {
                    return {
                        selectedId: null,
                        selectedTitle: 'None selected',
                        selectedPrice: '0.00',
                        isActive: false,
                        selectPlan(id, title, price) {
                            this.selectedId = id;
                            this.selectedTitle = title;
                            this.selectedPrice = parseFloat(price).toFixed(2);
                            this.isActive = true;
                        }
                    }
                }
            </script>
        @endif

        <h2 class="mt-16 mb-10 width-1-2 text-center">Users love our plan</h2>
        <div class="flex w-full gap-4">
            <div class="width-auto p-4 bg-white shadow-md rounded-lg"></div>
            <div class="width-auto p-4 bg-white shadow-md rounded-lg"></div>
            <div class="width-auto p-4 bg-white shadow-md rounded-lg"></div>
        </div>

        <h2 class="mt-16 mb-10 width-1-2 text-center">Scientific hypnotherapy benefits that YOU WILL FEEL</h2>

        <div class="width-1-2 flex flex-col gap-4">
            <x-accordion-item heading="Boosted quality of sleep" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue lacus purus, non aliquet lacus pulvinar quis. Aliquam erat volutpat. Duis non erat at mauris ultrices posuere. " />
            <x-accordion-item heading="Increased good emotions and feelings" content="Aliquam congue lacus purus, non aliquet lacus pulvinar quis. Aliquam erat volutpat. " />
        </div>
    
        <section class="flex justify-center items-center h-screen">
            <div>Sorry, no time. But I can center a div! 😅</div>
        </section>
    </main>

</body>
</html>
