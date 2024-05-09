<div x-data = "{categories: {{ json_encode($category) }}}"
    :class="showCards == 'all' || categories.includes(showCards) ? 'block' : 'hidden'"
    class="w-full px-4 md:w-1/2 xl:w-1/3">
    <div class="relative mb-12">
        <div class="overflow-hidden rounded-[10px]">
            <img src="{{ $image }}" alt="portfolio" class="w-full" />
        </div>
        <div
            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark">
            <span class="text-primary mb-2 block text-sm font-medium">
                {{ implode(', ', $category) }}
            </span>
            <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                {{ $title }}
            </h3>
            <a href="javascript:void(0)"
                class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white">
                {{ $github }}
            </a>
        </div>
    </div>
</div>
