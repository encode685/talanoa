<x-layout>
    <div class="grid h-screen grid-flow-col grid-rows-3">
        <div></div>
        <div class="place-self-center">
            <img class="w-32 animate-bounce" src="/images/talanoa-logo-main.png" alt="">
        </div>
        <div class="flex items-end h-full">

            <div class="pb-12 mx-auto align-bottom">
                <div class="text-sm text-center text-secondary">developed by</div>
                <div class="text-xl font-medium text-center text-dark">PleaseWork</div>
            </div>
            
        </div>
    </div>
</x-layout>

<script>
    setTimeout(function() {
        window.location.href = '/requests';
    }, 3000);
</script>